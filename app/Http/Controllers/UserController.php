<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserController extends Controller
{

    public function index(){

    }

    public function create(){
        $type = Type::get();
        return view('users.create')->with(compact('type'));
    }

    public function store(Request $request){
//        dd($request->all());
        $new = new User;
        $new->fname = $request->firstname;
        $new->mname = $request->middlename;
        $new->lname =$request->lastname;
        $new->type_id = $request->type;
        $new->email = $request->email;
        $new->password = Hash::make($request->password);
        $new->phone_no = $request->phone;
        $new->save();

//        dd($new);
    return redirect()->back();
    }

}
