<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\UserAppointmentOtp;
use App\Models\Appointments;
use Illuminate\Http\Request;
use App\Helper\Helper;

class AppointmentController extends Controller
{
    private $helper;

    public function __construct(Helper $helper)
    {
        $this->helper = $helper;
    }

    public function bookAppointment(Request $request){
        $validateData = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email:rfc,dns|unique:App\Models\Appointments,email|max:255',
            'mobile_number' => 'required|unique:appointments,mobile_number|max:255',
            'health_problem_id' => 'required',
            'appointment_date' => 'required|date',
            'g-recaptcha-response' => 'required'
        ]);

        if($validateData->fails()){
            return response()->json([
                'error' => $validateData->errors()->all()
            ]);
        }

        Appointments::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'health_problem_id' => $request->health_problem_id,
            'appointment_date' => $request->appointment_date
        ]);

        return response()->json(['success' => 'Appointment booked successfully.']);
    }

    public function getOtp(Request $request){
        $validateData = Validator::make($request->all(),[
            'email' => 'email:rfc,dns',
        ]);

        if($validateData->fails()){
            return response()->json([
                'error' => $validateData->errors()->all()
            ]);   
        }

        $getOtp = $this->helper->generateOTP();

        UserAppointmentOtp::create([
            'email' => $request->email,
            'otp' => $getOtp,
            'otp_expire' => 0,
            'is_verified' => 0
        ]);

        return response()->json([ 'success' => 'OTP has been sent successfully on your email address.']);
    }

    public function verifyOtp(Request $request){
        $validateData = Validator::make($request->all(),[
            'otp' => 'required',
            'email' => 'email:rfc,dns',
        ]);

        if($validateData->fails()){
            return response()->json([
                'error' => $validateData->errors()->all()
            ]);   
        }

        $findUser = UserAppointmentOtp::where('email', '=', $request->email)->first();
        $findUserOtp = $findUser->otp;

        if($findUserOtp == $request->otp){
            $findUser->update([
                'otp_expire' => 1,
                'is_verified' => 1
            ]);
        }

        // if($findUser->otp_expire == 1 || $findUser->otp_expire == 1 || $findUser->otp_expire_at!=null){
        //     return response()->json([
        //         'error' => 'Please enter correct OTP.'
        //     ]);   
        // }

        return response()->json([ 'success' => 'OTP has been verified, please complete the appointment booking.']);
    }
}
