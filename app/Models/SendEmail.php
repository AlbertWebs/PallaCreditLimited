<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;

class SendEmail extends Model
{
    use HasFactory;

    public static function MailAdmin($message){
        $subject = 'New Message';

        //The Generic mailler Goes here
        $data = array(
            'content'=>$message,
            'subject'=>$subject,
        );
        $appName = config('app.name');
        $appEmail = config('mail.username');

        $FromVariable = "no-reply@pallacredit.com";
        $FromVariableName = "Palla Credit Limited";

        $toVariable = "wecare@pallacredit.com";
        $toVariableName = "Palla Credit Limited Customer";


        Mail::send('SendEmail', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->bcc('albertmuhatia@gmail.com')->subject($subject);
        });
    }
}
