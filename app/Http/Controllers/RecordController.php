<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeRegisterMail;
use App\Models\Record;
use Craftsys\Msg91\Facade\Msg91;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RecordController extends Controller
{
    public function store(Request $request){
        // set_time_limit(0);

        // $otp = rand(100000, 999999);
        $mobile_no = "917050543175";

        Msg91::otp()
        ->to($mobile_no) // phone number with country code
        ->template('1207164364524792763') // set the otp template
        ->send(); // send the otp

        $records= Record::create([
            'name'     => $request['name'],
            'email'    => $request['email'],
            'phone_no' => $request['phone_no'],
            'city'     => $request['city'],
            'pincode'  => $request['pincode'],
            'date'     => $request['date'],
            'user_id'  => 1
        ]);

        // Mail::to($request['email'])->send(new WelcomeRegisterMail($records));
        return redirect()->route('record');
    }

    public function fetch() {
        $data = Record::all();
        return view('record', compact('data'));
    }

    // public function sendotp(Request $request) {
    //     // dd($request->all());

    //     $mobile_no = $request['phone_no'];


    //     $curl = curl_init();

    //     curl_setopt_array($curl, [
    //         CURLOPT_URL => "https://api.msg91.com/api/v5/otp?template_id='1207164364524792763' &mobile='917050543175'&authkey='366481Al21RQvB1612ca1adP1'",
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "POST",
    //         CURLOPT_POSTFIELDS => "{\"Value1\":\"Param1\",\"Value2\":\"Param2\",\"Value3\":\"Param3\"}",
    //         CURLOPT_HTTPHEADER => [
    //             "Content-Type: application/json"
    //         ],
    //     ]);

    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);

    //     curl_close($curl);

    //     if ($err) {
    //     echo "cURL Error #:" . $err;
    //     } else {
    //     echo $response;
    //     }
    // }
}
