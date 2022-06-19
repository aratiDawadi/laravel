<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }
    public function getmanagebooks()
    {
        return view('admin.managebooks');
    }
    public function postAddBook(Request $request){
       $name = $request->input('bookname');
       $detail = $request->input('bookdetail');
       $cost = $request->input('bookcost');
       
       $book = New Book;
       $book->name = $name;
       $book->detail = $detail;
       $book->cost = $cost;
       $book->save();
    }
    
    
    public function pokhara()

    {
        return view("form");
    }

    
}
