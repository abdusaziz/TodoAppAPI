<?php

namespace App\Traits;

trait HttpResponses {
    protected function success($data,$message=null,$code=200){
        return response()->json([
            'user'  =>  [
                'statue' => 'Successfully completed the task',
                'message'   => $message,
                'data'   => $data
            ],
        ],$code);
    }

    protected function error($data,$message=null,$code){
        return response()->json([
            'user'  =>  [
                'statue' => 'Error occured',
                'message'   => $message,
                'data'   => $data
            ],
        ],$code);
    }
}