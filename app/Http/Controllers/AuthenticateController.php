<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthenticateController extends Controller
{

    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');

        try{
            //Manually login. Not necessary because JWTAuth make it auto.
            // $passDB = DB::select('select password from users where email = ?', [$credentials['email']]);
            // if(count($passDB) === 0){
            //     return response()->json(['error' => 'invalid_credentials_email'], 401);
            // }
            // if (!Hash::check($credentials['password'], $passDB[0]->password)) {
            //     return response()->json(['error' => 'invalid_credentials_password'], 401);
            // }
            // $user = DB::select('select id, name, email from users where email = :email limit 1', [
            //     'email' => $credentials['email'],
            //     ])[0];




            $token = JWTAuth::attempt($credentials, [ //Custom Claims. Not necessary because Token already has the user id on 'sub' claim
                // 'userName' => $user->name,
                // 'userEmail' => $credentials['email'],
            ]);
            // $token = JWTAuth::attempt($credentials);
            if(!$token){
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        }catch(JWTException $ex){
            return response()->json(['error' => 'server_error'], 500);
        }

        $response = [
            'token' => $token,
            'user' => [
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
            // 'user2' => DB::table('users')->select('id', 'name', 'email', 'created_at', 'updated_at')->where('email', $credentials['email'])->take(1)->get()[0],
            // 'user3' => DB::select('select id, name, email, created_at, updated_at from users where email = :email limit 1', ['email' => $credentials['email']])[0]
        ];

        return response()->json($response, 200);
    }
    

    public function test(Request $request)
    {
        return response()->json(['result' => $request->get('user')], 200);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
