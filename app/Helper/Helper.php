<?php

namespace App\Helper;

class Helper{
	public function generateOTP(){
		$otp = rand(000000, 999999);
		return $otp;
	}
}