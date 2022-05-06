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
        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json(null);
        }else{
            $user=   Auth::loginUsingId($user->id);
            return  Auth::user();
        }

    }
    public function register(Request $request){ 
        // if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
        //     // $user = Auth::user(); 
        //     // $success['token'] =  $user->createToken('MyApp')-> accessToken; 
        //     $user = User::where('email', request('email'));
        //     return response()->json(['success' =>'Uthorised', 'user' => $user ], 200); 
        // } 
        //     return response()->json(['error'=>'Unauthorised'], 401); 
        $user = User::where('email', $request->email)->first();
            if (!$user) {
                $validator = Validator::make($request->all(), [ 
                    'name' => 'required', 
                    'nickname' => 'required', 
                    'email' => 'email|required', 
                    'password' => 'required', 
                ]);
            if ($validator->fails()) { 
                return response()->json(['success'=> false, 'error'=>$validator->errors()], 401);       
            }else{
                User::create([
                    'name' => $request['name'],
                    'nickname' => $request['nickname'],
                    'email' => $request['email'],
                    'password' => Hash::make($request['password']),
                ]);
                return response()->json([ 'success'=> true ]);
            }
            }else{
                return response()->json([ 'success'=> false ]);
            }
           

    //     if (!$user) {
            
    //         $validator = Validator::make($request->all(), [ 
    //             'name' => 'required', 
    //             'nickname' => 'required', 
    //             'email' => 'email', 
    //             'password' => 'required', 
    //         ]);
    // if ($validator->fails()) { 
    //             return response()->json(['error'=>$validator->errors()], 401);       
    //         }else{
    //             User::create([
    //                 'name' => $request['name'],
    //                 'nickname' => $request['nickname'],
    //                 'email' => $request['email'],
    //                 'password' => Hash::make($request['password']),
    //             ]);
    //             return response()->json([ 'success'=> true ]);
    //         }
            

    //     }else{
    //         return response()->json([ 'success'=> false ]);
    //     }
    }

}
