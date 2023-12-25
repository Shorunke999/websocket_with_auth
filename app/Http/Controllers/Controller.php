<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Events\pushing_event;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function show(){
        return view('chat');
    }
    public function show2(){
        $usEr = new \App\Models\User();
        $useR =$usEr ->all();
        return view('display',['useR'=> $useR]);
    }
    public function process_data(Request $req){
        $message = $req->message;
        broadcast(new pushing_event($message));
        return null;
    }
    /*public function get_message(Request $req){
        $usEr = new model();
        $usEr ->all();
        return response()->json_encode(['User' => $usEr]);
    }*/
    
}
