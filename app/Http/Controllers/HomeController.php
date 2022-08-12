<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Comment;
use App\Models\Rating;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index()
    {

         $books = Books::withCount('rating')
        ->with(['price','author:id,user_id','author.user:id,name,email'])
        ->addSelect(['total_average'=>Rating::selectRaw('sum(rating)/count(rating)')
        ->whereColumn('books.id','ratings.book_id')])
        ->get();
        return view('index', compact('books'));
     }

    public function genre(){
        $books = Books::withCount('rating')
        ->with(['price','author:id,user_id','author.user:id,name,email'])
        ->addSelect(['total_average'=>Rating::selectRaw('sum(rating)/count(rating)')
        ->whereColumn('books.id','ratings.book_id')])
        ->get();
        return view('genre.genre', compact('books'));
    }

    public function show(Books $book){

        $bookFind = Books::findOrFail($book->id);

         $book = Books::withCount('rating as total_rating')
        ->with([
        'genres',
        'detail',
        'author.awards',
        'author.user',
        'author.books'=>function($bookAverage){
            $bookAverage
            ->addSelect(['total_average_rating'=>
                 Rating::selectRaw('SUM(rating)/COUNT(rating)')
            ->whereColumn('books.id','ratings.book_id')])
            ->addSelect(['total_rating'=>Rating::selectRaw('COUNT(rating)')
            ->whereColumn('books.id','ratings.book_id')])
            ->orderBy('total_rating','DESC');
        },
        'author.user.details.country',
        'author.user.details.city',
        'comments.user.rating'=>function($rating) use($bookFind){
            $rating->where('book_id',$bookFind->id);
        }])

        ->addSelect(['total_average'=>
        Rating::selectRaw('SUM(rating)/COUNT(rating) AS avg_rating')
        ->whereColumn('books.id','ratings.book_id')])

        ->addSelect(['rating_five'=>
            Rating::selectRaw('count(rating)')->whereColumn('books.id','ratings.book_id')
            ->where('rating',5)
        ])

        ->addSelect(['rating_for'=>
            Rating::selectRaw('count(rating)')->whereColumn('books.id','ratings.book_id')
            ->where('rating',4)
        ])

        ->addSelect(['rating_three'=>
            Rating::selectRaw('count(rating)')->whereColumn('books.id','ratings.book_id')
            ->where('rating',3)
        ])

        ->addSelect(['rating_two'=>
            Rating::selectRaw('count(rating)')->whereColumn('books.id','ratings.book_id')
            ->where('rating',2)
        ])

        ->addSelect(['rating_one'=>
            Rating::selectRaw('count(rating)')->whereColumn('books.id','ratings.book_id')
            ->where('rating',1)
        ])
        ->where('books.id',$bookFind->id)
        ->first();
        return view('genre.book',compact('book'));
    }


    //  public function test(){
    //     number_format((2 * 1 + 3 * 4) / 5);
    //     return view('test');
    //  }
}
