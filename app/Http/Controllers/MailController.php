<?php

namespace App\Http\Controllers;

use Mail;

class MailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function send()  
    {  
//        $name = '学院君';
//        $flag = Mail::send('mail',['name'=>$name],function($message){
//            $to = '17888835130@163.com';
//            $message ->to($to)->subject('测试邮件');
//        });
//        if($flag){
//            echo '发送邮件成功，请查收！';
//        }else{
//            echo '发送邮件失败，请重试！';
//        }
        Mail::raw('这是一封测试邮件', function ($message) {
            $to = '582821520@qq.com';
            $message ->to($to)->subject('测试邮件');
        });
    }
}
