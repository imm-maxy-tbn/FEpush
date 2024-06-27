<?php
// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $company = $user->companies;
        $projects = $company ? $company->projects : collect();

        return view('home', compact('projects'));
    }

    public function about()
    {
        return view('about');
    }

    public function loginhide(Request $request)
    {
        return view('auth.login', ['hideFooter' => true]);
    }
}

