<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Book;
use App\Models\User;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getAllBooks(){
        $allbook = Book::all()->where('borrow',false);
        $revallbook = Book::all()->where('borrow',true);
        return view('users.allbooks',['allbook'=>$allbook,'revallbook'=>$revallbook]);
    }


    public function borrowedBook(){
        $id = Auth::id(); 
        $b = Book::all()->where('user_id',$id);
        return view('users.borrowedBooks',['b'=>$b]);   
    
    }


    public function borrowBook($bookid){
        $id = Auth::id(); 
        $borrow = Book::where('id',$bookid)->first();
        $borrow->user_id=$id;
        $borrow->borrow='1';
        $borrow->save();
        $b = Book::all()->where('user_id',$id);
        return view('users.borrowedBooks',['b'=>$b]);
       
    
    }
    public function rebook($bookid){
        $id = Auth::id(); 
        $rebook = Book::where('id',$bookid)->first();
        $rebook->user_id=0;
        $rebook->borrow='0';
        $rebook->save();
        $b = Book::all()->where('user_id',$id);
        return view('users.borrowedBooks',['b'=>$b]);

       
    }

    
}
