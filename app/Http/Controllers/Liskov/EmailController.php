<?php

namespace App\Http\Controllers\Liskov;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use mysql_xdevapi\Exception;
use PhpParser\Node\Stmt\TryCatch;
use App\Mail\emailNotify;

class EmailController extends Controller
{
    public function index(){
        $data=[
            'subject'=>'email',
            'body'=>'hello'
        ];
        try
        {
            Mail::to('walaaalodhari9@gmail.com')->send(new emailNotify($data));
            return response()->json(['great check email']);

        }
        catch (Exception $exceptione)
        {
            return response()->json(['sorry don not check your email']);
        }
    }
}
