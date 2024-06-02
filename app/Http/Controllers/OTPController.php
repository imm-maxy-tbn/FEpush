<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

class OTPController extends Controller
{
    /**
     * Send OTP to user's email.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendOTP(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'telepon' => 'required|digits_between:10,15',
        ]);

        $otp = rand(10000, 99999);
        Cache::put('otp_' . $request->email, $otp, now()->addMinutes(10));

        Mail::raw("Your OTP code is $otp", function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('OTP Verification Code');
        });

        return response()->json(['message' => 'Kode OTP telah dikirim ke email Anda.']);
    }

    /**
     * Verify the OTP entered by the user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function verifyOTP(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|numeric',
        ]);

        $otp = Cache::get('otp_' . $request->email);

        if ($otp && $otp == $request->otp) {
            Cache::forget('otp_' . $request->email);
            return response()->json(['message' => 'Verifikasi berhasil.']);
        }

        return response()->json(['message' => 'Kode OTP salah atau kadaluwarsa.'], 422);
    }
}
