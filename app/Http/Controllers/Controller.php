<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Validator;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
//    const SUCCESS = 0;
//    const PARAM_INVALID = 1;
//    const FAIL = 2;
//    protected $error = 0;
//    protected $msg = '调用成功';
//    protected $data = array();
//
//    protected function validator(array $data, array $rules) {
//        $validator = Validator::make($data, $rules);
//        if($validator->fails()) {
//            $this->error = self::PARAM_INVALID;
//            $this->msg = $validator->errors()->getMessages();
//            $this->finish($this->error, $this->msg, []);
//        }
//    }
//
//    protected function handle($result) {
//        if($result === false ) {
//           $this->error = self::FAIL;
//           $this->msg = '调用失败';
//        }
//        $this->finish($this->error, $this->msg, $result);
//    }
//
//    protected function finish($error, $msg, $result) {
//        $data = array(
//            'error' => $error,
//            'msg' => $msg,
//            'data' => $result ,
//        );
//        echo json_encode($data);
//        exit();
//    }

}
