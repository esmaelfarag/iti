<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Models\Book;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    //
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admins.admin');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return view('/welcome');

    }
    public function allbook()
    {
        $allboo = Book::all();
        return view('admins.allbook',['allboo'=>$allboo]);
    }
    public function delete($bookid){
        
        $borrow = Book::where('id',$bookid)->delete();
        $allboo = Book::all();
        return redirect('/allbook');
       
    
    }


    public function editbook($bookid){
        return view('admins.editpage',compact('bookid'));
    
    }
    public function update(Request $request ,$bookid)
    {
        $data=$request->validate([
            "book_name"=>"required | min:5",
            "auther"=>"required | min:5",
            "edition_number"=>" min:1"
        ]);
        $borrow = Book::where('id',$bookid)->first();
        $borrow->book_name=$request['book_name'];
        $borrow->auther=$request['auther'];
        $borrow->edition_number=$request['edition'];
        $borrow->save();
        $allboo = Book::all();
        return redirect('/allbook');
    }
    public function addbook(Request $request , Book $borrow)
    {
        $data=$request->validate([
            "book_name"=>"required | min:5",
            "auther"=>"required | min:5",
            "edition_number"=>" min:1"
        ]);
        $borrow->book_name=$request['book_name'];
        $borrow->auther=$request['auther'];
        $borrow->user_id=0;
        $borrow->edition_number=$request['edition'];
        $borrow->save();
        $allboo = Book::all();
        return redirect('/allbook');
    }
    public function st_bb()
    {
        $allboo = Book::all()->where('borrow',true);
        
        return view('admins.borrowedbook',['allboo'=>$allboo]);
    }
   
    public function getinfo($usrid)
    {
        $usr = User::all()->where('id',$usrid);
        return view('admins.stinfo',['usr'=>$usr]);


    }
    public function getalluser(Request $request)
    {
        $idusr=$request['idsearch'];
        if($idusr==null)
        {
            $usr = User::all();
            return view('admins.alluser',['usr'=>$usr]);
        }else{
            $usr = User::all()->where('id',$idusr);
            return view('admins.alluser',['usr'=>$usr]);

        }
    }
    public function welcomeAdmin()
    {
        return view('admins.admin');
    }
    public function adprofile()
    {
        $id = Auth::id(); 
        $prof = Admin::all()->where('id',$id);
        return view ('admins.adprofile',['prof'=>$prof]);
    }
    public function edprof(Request $request)
    {
        $data=$request->validate([
            "name"=>"required | min:5",
            "email"=>"required | email | max:20",
            "password"=>"required | min:8"
        ]);
        $id = Auth::id(); 
        $prof = Admin::all()->where('id',$id)->first();
        $prof->password=Hash::make($request['password']);
        $prof->email=$request['email'];
        $prof->name=$request['name'];
        $prof->save();
        return view ('admins.admin');
    }
}
