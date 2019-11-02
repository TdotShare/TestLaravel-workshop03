<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function actionView()
    {
        return view('report.view');
    }

    public function actionAdd(Request $request)
    {
        if ($request->method() == "POST") {
            $re = new Report;
            $re->re_code = $request->re_code;
            $re->re_name = $request->re_name;
            $re->re_content = $request->re_content;
            $re->save();
            
            return redirect('/viewReport');

        }else{
            return view('report.add');
        }
        
    }

    public function actionDelete($id)
    {
        $model = Report::find($id);
        $model->delete();
        return redirect('/viewReport');
    }

    public function actionEdit($id , Request $request)
    {

        if ($request->method() == "POST") {

            $re = Report::find($id);
            $re->re_code = $request->re_code;
            $re->re_name = $request->re_name;
            $re->re_content = $request->re_content;
            $re->save();

            return redirect('/viewReport');

        }else{
            $model = Report::find($id);
            return view('report.edit' , ['model' => $model]);
        }
        
    }
}
