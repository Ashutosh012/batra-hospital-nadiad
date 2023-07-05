<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\UserAppointmentOtp;
use Carbon\Carbon;

class expireOTPAfterTenMins extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:expire-otp-after-ten-mins';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user_otp = UserAppointmentOtp::orderBy('id','desc')->get();

        foreach($user_otp as $otp){
            $user_otp_create_time = Carbon::parse($otp->otp_create_time);
            $expire_time = $user_otp_create_time->addMinutes(10);
            if($otp->otp_expire_at == null){
                $otp->update(
                    [
                        'otp_expire_at' => $expire_time,
                        'otp_expire' => 1
                    ]);
            }
        }
        
    }
}
