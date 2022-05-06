<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\User; 
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public $successStatus = 200;

    public function login(Request $request){ 
        // if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
        //     // $user = Auth::user(); 
        //     // $success['token'] =  $user->createToken('MyApp')-> accessToken; 
        //     $user = User::where('email', request('email'));
        //     return response()->json(['success' =>'Uthorised', 'user' => $user ], 200); 
        // } 
        //     return response()->json(['error'=>'Unauthorised'], 401); 

        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json(['success' =>'Unauthorised', 'status' => 'credenciales incorrectas' ], 404);
        }else{
            return $user;
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
            return User::create([
                'name' => $request['name'],
                'nickname' => $request['nickname'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
        }else{
            return response()->json(['success' =>'false', 'status' => 'no' ], 404);
        }
        

        // $user = User::where('email', $request->email)->first();
        // if(!$user || !Hash::check($request->password, $user->password)){
        //     return response()->json(['success' =>'Unauthorised', 'status' => 'no' ], 404);
        // }else{
        //     return $user;
        // }

    }

    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this-> successStatus); 
    } 

}
