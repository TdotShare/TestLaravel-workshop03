<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function actionLogin(Request $request)
    {
        $ac = Account::where('ac_username' , '=' , $request->username)->where('ac_password' , '=' , $request->password)->first();

        if($ac['ac_status'] == "admin"){
            session(['ac_status' => $ac->ac_status]);
            session(['username' => $ac->ac_username]);
            return redirect('/admin');


        }else if($ac['ac_status'] == "manager"){
            session(['ac_status' => $ac->ac_status]);
            session(['username' => $ac->ac_username]);
            return redirect('/manager');
        }else{
            return 'test';
            //return redirect('/');
        }
    }
}
