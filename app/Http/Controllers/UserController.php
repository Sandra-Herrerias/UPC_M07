<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\User; 
use Illuminate\Support\Facades\Hash;
use Validator;

class UserController extends Controller
{
    public $successStatus = 200;

    public function login(Request $request){ 
        $user = User::where('email', $request->_email)->first();
        if(!$user || !Hash::check($request->_password, $user->password)){
            return response()->json(['success' =>false ]);
        }
        else{
            $user=   Auth::loginUsingId($user->id);
            return response()->json(['success' =>true, 'user' => $user ]);
        }

        // return $user;

            // return response()->json(['success' =>'ok', 'user' => $request ]);
    }
    public function register(Request $request){ 

        $user = User::where('email', $request->_email)->first();
         if ($user) {
            return response()->json([ 'success'=> false ]);
         }else{
                User::create([
                    'name' => $request->_nickname,
                    'nickname' => $request->_nickname,
                    'email' => $request->_email,
                    'password' => Hash::make($request->_password),
                ]);
                return response()->json([ 'success'=> true ]);
                    
         }

            // if (!$user) {
            //         $validator = Validator::make($request->all(), [ 
            //             '_name' => 'required', 
            //             '_nickname' => 'required', 
            //             '_email' => 'email|required', 
            //             '_password' => 'required', 
            //         ]);
            //     if ($validator->fails()) { 
            //         return response()->json(['success'=> false]);       
            //     }else{
            //         User::create([
            //             'name' => $request->_nickname,
            //             'nickname' => $request->_nickname,
            //             'email' => $request->_email,
            //             'password' => Hash::make($request->_password),
            //         ]);
            //         return response()->json([ 'success'=> true ]);
            //     }
            // }else{
            //     return response()->json([ 'success'=> false ]);
            // }
           
            }
  

}
