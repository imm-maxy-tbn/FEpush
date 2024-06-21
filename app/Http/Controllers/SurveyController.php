<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Log;
use MattDaneshvar\Survey\Models\Survey;
use Illuminate\Support\Facades\Auth;
use MattDaneshvar\Survey\Models\Entry;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class SurveyController extends Controller
{
    public function index()
    {
        $surveys = Survey::all();
        return view('surveys.index', compact('surveys'));
    }

    public function create()
    {
        return view('surveys.create');
    }

    public function store(Request $request)
    {
        try {
            logger($request->all()); // Use Laravel's logger

            $request->validate([
                'name' => 'required|string|max:255',
                'settings.accept-guest-entries' => 'required',
                'settings.limit-per-participant' => 'required',
                'sections' => 'required|array',
                'sections.*.name' => 'required|string',
                'sections.*.questions' => 'required|array',
                'sections.*.questions.*.content' => 'required|string',
                'sections.*.questions.*.type' => 'required|string',
                'sections.*.questions.*.rules' => 'nullable|string',
            ]);

            $survey = Survey::create([
                'name' => $request->name,
                'settings' => [
                    'accept-guest-entries' => filter_var($request->settings['accept-guest-entries'], FILTER_VALIDATE_BOOLEAN),
                    'limit-per-participant' => (int) $request->settings['limit-per-participant'],
                ]
            ]);

            foreach ($request->sections as $sectionData) {
                $section = $survey->sections()->create(['name' => $sectionData['name']]);

                foreach ($sectionData['questions'] as $questionData) {
                    $section->questions()->create([
                        'content' => $questionData['content'],
                        'type' => $questionData['type'],
                        'rules' => isset($questionData['rules']) ? explode(',', $questionData['rules']) : [],
                        'options' => isset($questionData['options']) ? $questionData['options'] : null,
                    ]);
                }
            }

            return redirect()->route('impact.impact')->with('success', 'Survey created successfully.');
        } catch (\Exception $e) {
            Log::error('Survey creation failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create survey. Please try again later.');
        }
    }

    public function view($id)
    {
        $survey = Survey::with('sections.questions')->findOrFail($id);
        $lastEntry = Entry::where('participant_id', auth()->id())->latest()->first();

        return view('survey.responden.responden', compact('survey', 'lastEntry'));
    }

    public function dataDiri($id)
    {
        $survey = Survey::with('sections.questions')->findOrFail($id);
        $lastEntry = Entry::where('participant_id', auth()->id())->latest()->first();

        if ($lastEntry) {
            return view('survey.responden.responden-data-diri', compact('survey' . 'lastEntry'));
        }
        return view('survey.responden.responden-data-diri', compact('survey'));
    }

    public function edit(Survey $survey)
    {
        return view('surveys.edit', compact('survey'));
    }

    public function destroy(Survey $survey)
    {
        $survey->delete();
        return redirect()->route('surveys.index')->with('success', 'Survey deleted successfully!');
    }
    public function createEntry(Survey $survey, User $user, ?Entry $lastEntry = null)
    {
        $alreadySubmitted = $lastEntry !== null;

        if ($alreadySubmitted) {
            return view('survey.responden.responden-penutup-survey', compact('survey', 'alreadySubmitted'));
        }

        return view('survey.responden.kuesioner', compact('survey', 'user', 'lastEntry'));
    }


    public function registerUser(Request $request, $id)
    {
        $survey = Survey::with('sections.questions')->findOrFail($id);

        $email = $request->email;
        $user = User::where('email', $email)->first();

        if (!$user) {
            $data = $request->validate([
                'nama_depan' => 'required|string|max:255',
                'nama_belakang' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'telepon' => 'required|string|max:13',
            ]);

            $user = User::create([
                'nama_depan' => $data['nama_depan'],
                'nama_belakang' => $data['nama_belakang'],
                'email' => $data['email'],
                'password' => 'nonlogin',
                'telepon' => $data['telepon'],
                'role' => 'USER',
            ]);

            $lastEntry = null;
        } else {
            $lastEntry = Entry::where('participant_id', $user->id)
                  ->where('survey_id', $survey->id)
                  ->latest()
                  ->first();
        }

        return $this->createEntry($survey, $user, $lastEntry);
    }

    public function submit(Survey $survey, Request $request, User $user)
    {
        try {
            Log::info('Incoming request data:', $request->all());

            // Check if the user has already submitted the survey
            $lastEntry = Entry::where('participant_id', $user->id)
                  ->where('survey_id', $survey->id)
                  ->latest()
                  ->first();
            $alreadySubmitted = $lastEntry !== null;

            // Validate the request data against the survey's rules
            $answers = $request->validate($survey->rules);

            // Create a new entry for the survey with the validated answers
            if (!$alreadySubmitted) {
                (new Entry)->for($survey)->by($user)->fromArray($answers)->push();
            }

            return view('survey.responden.responden-penutup-survey', compact('survey', 'alreadySubmitted'));
        } catch (ValidationException $e) {
            // Log the validation error details
            Log::error('Validation error submitting survey:', [
                'survey_id' => $survey->id,
                'user_id' => $user->id,
                'error_message' => $e->getMessage(),
                'errors' => $e->errors(),
            ]);

            // Redirect back with validation error messages
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Log any other errors
            Log::error('Error submitting survey:', [
                'survey_id' => $survey->id,
                'user_id' => $user->id,
                'error_message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            // Redirect back with a general error message
            return redirect()->back()->with('error', 'An error occurred while submitting your responses. Please try again.');
        }
    }
}
