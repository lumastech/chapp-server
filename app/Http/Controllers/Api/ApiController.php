<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Center;
use App\Models\sos;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    // authenticated user
    function user()  {
        return auth()->user();
    }

    // generate api token
    function token(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $token = $request->user()->createToken($request->user()->name);
            return ["user"=>$request->user(), 'success'=>true, 'token' => $token->plainTextToken];
        }

        return ["message" => "The provided credentials do not match our records.",
            "success"=>false,
            "errors" => [
                "email"=> [
                    'The provided credentials do not match our records.'
                ]
            ]
        ];
    }

    //user register
    function register(Request $request) {
        // validate request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        // create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => "user",
            // 'phone' => $request->phone,
            'password' => bcrypt($request->password),
            // 'address' => $request->address,
            'status' => "active",
        ]);

        if($user){
            return [
                'user'=>$user,
                "success"=>$this->token($request)['success'],
                "token"=>$this->token($request)['token']
            ];
        }else{
            return ["succes"=>false, "error"=>"somthing went wrong"];
        }
    }

    //user update
    function userUpdate(Request $request, $item) {
        // validate request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'role' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'status' => 'required|string',
        ]);

        $user = User::where('id', $item)->first();

        // create user
        $res = $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
            'address' => $request->address,
            'status' => $request->status,
        ]);

        if($res){
            return $user;
        }else{
            return ["succes"=>false, "error"=>"somthing went wrong"];
        }
    }

    // get centers
    function centers() {
        $centers = Center::all();
        return $centers;
    }

    // get center by id
    function center($id) {
        $center = Center::where("id", $id)->first();
        return $center;
    }

    // store center
    function centerCreate(Request $request) {
        // validate request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'description' => 'required|string',
            'coordinates' => 'required|string',
        ]);

        // create user
        $center = Center::create([
            "user_id" => $request->user()->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description,
            'coordinates' => $request->coordinates,
            'type' => "center",
            'status' => "active"
        ]);

        if($center){
            return [
                "success"=>true,
                "message"=> "Information Saved Successfully",
                "center" => $center
            ];
        }else{
            return ["succes"=>false, "error"=>"somthing went wrong"];
        }
    }

    // store center
    function centerUpdate(Request $request, $id) {
        // validate request
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'description' => 'required|string',
            'coordinates' => 'required|string',

        ]);

        $center = Center::where('id', $id)->first();

        // create user
        $center->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description,
            'coordinates' => $request->coordinates,
        ]);

        if($center){
            return [
                "success"=>true,
                "message"=> "Information Updated Successfully",
                "center" => $center
            ];
        }else{
            return ["succes"=>false, "error"=>"somthing went wrong"];
        }
    }

    // get sos list
    function soss() {
        $soss = sos::where('user_id', \auth()->user()->id)->get();
        return $soss;
    }

    // get last sos
    function sos($id) {
        if($sos = sos::where("id", $id)->where('user_id', \auth()->user()->id)->first()){
            return $sos;
        }

        abort(404, "not fpund");
    }

    // get own sos by id
    function mysos() {
        $sos = sos::where('user_id', \auth()->user()->id)->orderBy('id', 'desc')->first();
        return $sos;
    }

    // delete own sos by id
    function sosDelete() {
        $sos = sos::where('user_id', \auth()->user()->id)->first();
        $sos->delete();
        return [
                "success"=>true,
                "message"=> "Information deleted successfully"
            ];
    }

    // update sos
    function sosUpdate(Request $request, $sos) {
        // validate request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'message' => 'required|string',
        ]);

        $sos = sos::were('id', $sos)->first();

        // create user
        $sos->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        if($sos){
            return [
                "success"=>true,
                "message"=> "Information updated successfully",
                'sos'=>$sos
            ];
        }else{
            return ["succes"=>false, "error"=>"somthing went wrong"];
        }
    }

    // store sos
    function sosCreate(Request $request) {
        // validate request
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        // create user
        $sos = sos::create([
            'user_id' => $request->user()->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'status' => "active"
        ]);

        if($sos){
            return [
                "success"=>true,
                "message"=> "Information Saved Successfully",
                'sos'=>$sos
            ];
        }else{
            return ["succes"=>false, "error"=>"somthing went wrong"];
        }
    }
}
