<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationMail;
use App\Models\VerificationCode;
use Carbon\Carbon;

class VerificationController extends Controller
{
    public function sendVerificationEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'telepon' => 'required',
        ]);

        $verificationCode = mt_rand(100000, 999999);

        VerificationCode::updateOrCreate(
            ['email' => $request->email],
            [
                'telepon' => $request->telepon,
                'code' => $verificationCode,
                'expires_at' => Carbon::now()->addMinutes(10)
            ]
        );

        $details = [
            'title' => 'Verification Code',
            'body' => "Your verification code is $verificationCode."
        ];

        try {
            Mail::to($request->email)->send(new VerificationMail($details));
            return redirect()->route('imm3')->with(['email' => $request->email, 'success' => 'Verification email sent!']);
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send verification email.');
        }
    }

    public function showVerificationForm(Request $request)
    {
        $email = session('email');
        return view('imm3', compact('email'));
    }

    public function verifyCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required|numeric',
        ]);

        $verificationCode = VerificationCode::where('email', $request->email)
                                            ->where('code', $request->code)
                                            ->where('expires_at', '>', Carbon::now())
                                            ->first();

        if ($verificationCode) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }
}
