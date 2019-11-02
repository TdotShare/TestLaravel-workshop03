<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class SchemeController extends Controller
{

    public function actionIndex(Request $request)
    {
        if (session('ac_status') == 'admin') {

            return view('admin');

        } elseif (session('ac_status') == 'manager') {

            return view('manager');

        }

    }

    public function actionDeleteStaff($id)
    {
        $model = Staff::find($id);
        $model->delete();
        return redirect('/admin');
    }

    public function actionEditStaff($id, Request $request)
    {
        if ($request->method() == "POST") {

            $sf = Staff::find($id);
            $sf->sf_fname = $request->sf_fname;
            $sf->sf_sname = $request->sf_sname;
            $sf->sf_age = $request->sf_age;
            $sf->sf_code = $request->sf_code;
            $sf->sf_job = $request->sf_job;
            $sf->save();

            return redirect('/admin');

        } else {
            $model = Staff::find($id);
            return view('staff.editStaff', ['model' => $model]);
        }
    }

    public function actionAddStaff(Request $request)
    {
        if ($request->method() == "POST") {

            $sf = new Staff();
            $sf->sf_fname = $request->sf_fname;
            $sf->sf_sname = $request->sf_sname;
            $sf->sf_age = $request->sf_age;
            $sf->sf_code = $request->sf_code;
            $sf->sf_job = $request->sf_job;

            $sf->save();

            //Staff::create($request->all());
            return redirect('/admin');

        } else {
            return view('staff.addStaff');
        }

    }
}
