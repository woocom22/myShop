<?php

namespace App\Http\Controllers;

use App\helper\JWTToken;
use App\Helper\ResponseHelper;
use App\Mail\OTPMail;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function UserLogin(Request $request):JsonResponse
    {
              try {
            $UserEmail=$request->UserEmail;
            $OTP=rand (100000,999999);
            $details = ['code' => $OTP];
            Mail::to($UserEmail)->send(new OTPMail($details));
            User::updateOrCreate(['email' => $UserEmail], ['email'=>$UserEmail,'otp'=>$OTP]);
            return ResponseHelper::Out('success',"A 6 Digit OTP has been send to your email address",200);
        } catch (Exception $e) {
            return ResponseHelper::Out('fail',$e->getMessage(),200);
        }
    }

    public function VerifyLogin(Request $request):JsonResponse
    {
        $UserEmail=$request->UserEmail;
        $OTP=$request->OTP;

        $verification= User::where('email',$UserEmail)->where('otp',$OTP)->first();

        if($verification){
            User::where('email',$UserEmail)->where('otp',$OTP)->update(['otp'=>'0']);
            $token=JWTToken::CreateToken($UserEmail,$verification->id);
            return  ResponseHelper::Out('success',"",200)->cookie('token',$token,60*24*30);
        }
        else{
            return  ResponseHelper::Out('fail',null,401);
        }
    }



    function UserLogout(Request $request)
    {
        return redirect('/userLoginPage')->cookie('token','',-1);
    }






}

























