<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    protected $res;

    public function __construct(Request $request)
    {
        $this->res = $request->all();
    }

    public function home()
    {
        $b_book = Book::all();
        return view("home", ['b_book' => $b_book , "payBook" => null]);

    }

    public function payBook($id)
    {
        //$b_book = Book::find($this->res['id']);

        // return response()->json(["status" => "success",
        //     "data" => $id]
        //     , 200);

        $b_book = Book::all();

        return view("home", ['b_book' => $b_book , "payBook" => "success"]);
    }

}
