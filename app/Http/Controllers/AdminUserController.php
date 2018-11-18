<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Log;
use JWTAuth;
use JWTAuthException;
class AdminUserController extends Controller
{

	public function __construct()
    {
        $this->user = new User;
    }

    function register(){
    	try{
	    	$input['name']=request('name');
	    	$input['password']=Hash::make(request('password'));
            $input['phone']=request('phone'); 
            
	    	User::create($input);
	    	return response("done",200);
       }catch(\Exception $e){
       	   Log::debug($e.json_encode($input));
       }

    }

    public function login(Request $request){
        $credentials = $request->only('phone', 'password');
        $token = null;
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'response' => 'error',
                    'message' => 'invalid_email_or_password',
                ]);
            }
        } catch (JWTAuthException $e) {
            return response()->json([
                'response' => 'error',
                'message' => 'failed_to_create_token',
            ]);
        }
        return response()->json([
            'response' => 'success',
            'result' => [
                'token' => $token,
            ],
        ]);
    }

    public function getAuthUser(Request $request){
        $user = JWTAuth::toUser($request->token);        
        return response()->json(['result' => $user]);
    }
}
