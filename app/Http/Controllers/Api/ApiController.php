<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Center;
use App\Models\sos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\sosMessage;

class ApiController extends Controller
{
    // authenticated user
    function user()  {
        return [
                "success"=>true,
                "user"=>auth()->user()
            ];
    }

    function tokenVerify() {
        return ["success" => true];
    }

    function tokenDelete(Request $request) {
        $success = false;
        if($request->user()->currentAccessToken()->delete()){
            $success = true;
        }
        return ["success" => $success];
    }

    // generate api token
    function token(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $token = $request->user()->createToken($request->user()->name);
            return ['success'=>true, 'token' => "Bearer ".$token->plainTextToken, "user"=>$request->user()];
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

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return [
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ];
        }

        // create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => "user",
            'password' => bcrypt($request->password),
            'country' => "Zambia",
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
    function userUpdate(Request $request) {
        // validate request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'gender' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'town' => 'required|string',
        ]);

        if ($validator->fails()) {
            return [
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ];
        }

        $user = $request->user();

        // create user
        $res = $user->update([
            'name' => $request->name,
            'sex' => $request->gender,
            'phone' => $request->phone,
            'town' => $request->town,
            'address' => $request->address,
        ]);

        if($res){
            return[
                "success"=>true,
                "user"=>auth()->user()
            ];
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
        return [
                "sos"=>$soss,
                "success"=>true,
                "message"=> "Information deleted successfully"
            ];
    }

    // get last sos
    function sos($id) {
        if($sos = sos::where("id", $id)->where('user_id', \auth()->user()->id)->first()){
            return [
                "sos"=>$sos,
                "success"=>true,
                "message"=> "Information deleted successfully"
            ];
        }

        abort(404, "not fpund");
    }

    // get own sos by id
    function mysos() {
        $sos = sos::where('user_id', \auth()->user()->id)->orderBy('id', 'desc')->first();
        return [
                "sos"=>$sos,
                "success"=>true,
                "message"=> "Information deleted successfully"
            ];
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

    // create/update sos
    function sosCreate(Request $request) {
        // validate request
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        $sos = sos::where('user_id', \auth()->user()->id)->orderBy('id', 'desc')->first();
        if($sos){
            // update sos
            $sos->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            ]);
        }else{
            // create user
            $sos = sos::create([
                'user_id' => $request->user()->id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
                'status' => "active"
            ]);
        }

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

    function sosSend() {
        // $sos = sos::where('user_id', \auth()->user()->id)->orderBy('id', 'desc')->first();
        if ($user = User::where('id', \auth()->user()->id)->with("sos")->first()->toArray()){
            // return $user;
            Mail::to($user->email)->send(new sosMessage($user));
            return [
                "success"=>true,
                "message"=> "Emergence message sent! Successfully",
            ];
        }

        return[
                "success"=>false,
                "message"=> "Somthing went wrong!"
            ];
    }
}
