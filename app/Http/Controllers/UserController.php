<?php

namespace App\Http\Controllers;

//for role object
// use App\Rules\Uppercase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// for custom validation closure method
use Illuminate\Support\Facades\Validator;
use Closure;

class UserController extends Controller
{
    public function showUsers(){
        // // all data all column
        $users = DB::table('users')->get();
         return view('allusers',['data'=>$users]);
    }
// // roll object method
//     public function addUser(Request $req){
//         $req->validate([
//             'username' => ['required', new Uppercase],
//             'useremail' => 'required|email',
//         ]);
//         return $req->all();
//     }

public function addUser(Request $req){
    $req->validate([
        'username' => ['required', function(string $attribute, mixed $value, Closure $fail){
            if(strtoupper($value) !== $value){
                $fail('The:attribute must be uppercase.');
            }
        }],
        'useremail' => 'required|email',
    ]);
    // return $req->all();
    // dd($validate);//not working
    // echo $validate['username'];//not working
    echo $req->input('username');

}


}
