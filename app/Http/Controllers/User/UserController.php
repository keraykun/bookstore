<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Books;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rating;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {

     $books = Books::withCount('ratings')
     ->with(['author.user'])
     ->orderBy('ratings_count','desc')
     ->get();

        // return Books::with(['rating'=>function($count){
        //     $count
        //     ->select('book_id','rating',DB::raw('count(rating) as count_star'))
        //     ->groupBy('book_id','rating');
        // },'author.user'])
        // ->get();
       return view('user.dashboard',['books'=>$books]);
    }

    public function list()
    {
        return view('user.list');
    }
}
