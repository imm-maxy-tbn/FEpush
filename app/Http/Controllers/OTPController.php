<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
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
            'telepon' => 'required',
        ]);

        $otp = rand(10000, 99999);
        Cache::put('otp_' . $request->email, $otp, now()->addMinutes(10));

        Mail::raw("Your OTP code is $otp", function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('OTP Verification Code');
        });

        Log::info('OTP sent to ' . $request->email . ' with code ' . $otp);

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
            Log::info('OTP verification successful for ' . $request->email); // Tambahkan logging di sini
            return response()->json(['message' => 'Verifikasi berhasil.']);
        }

        Log::warning('OTP verification failed for ' . $request->email); // Tambahkan logging di sini

        return response()->json(['message' => 'Kode OTP salah atau kadaluwarsa.'], 422);
    }
}
