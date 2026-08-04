<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\JsonResponse;
use Session;  

class RegisterController extends BaseController
{

    public function login(Request $request): JsonResponse
    {
        if(Auth::attempt(['name' => $request->name, 'password' => $request->password]))
        { 
            $user = Auth::user(); 
            Auth::login($user);
            $success['token'] =  $user->createToken('MyApp')->accessToken; 
            $success['name'] =  $user->name;
            Session::put('user',$success);
             return $this->sendResponse($success, 'User login successfully.');

        } 
        else
        { 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 

    }

}