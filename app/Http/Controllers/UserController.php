<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //getCurrentWeather();
        return view('weather.index');
    }

    public function loginUser(Request $request)
    {
        $input = Input::get('postData');
        return \response()->json($input, 500);
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('weather.users.register');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getLoggedIn(Request $request)
    {
        try {
            $email = trim($request->input('email'));
            $password = trim($request->input('password'));
            if ($email != null || $password != null) {
                $user = User::whereEmail($email)->wherePassword($password)->first();
                if ($user != null) {
                    return response()->json($user);
                }
                return response()->json("-1");
            }
        } catch (\Exception $ex) {
            $error = "Unable to login, with message : " . $ex->getMessage();
            return view("weather.error", compact("error"));
        }
    }

    public function registerUser(Request $request)
    {
        try {
            $email = trim($request->input('email'));
            $password = trim($request->input('password'));
            $confirmPassword = trim($request->input('confirmPassword'));
            $userName = trim($request->input('userName'));
            $address = trim($request->input('address'));
            $cityName = trim($request->input('cityName'));

            if ($password != $confirmPassword) {
                return response("password does not match");
            } else if ($email == null || $userName == null || $address == null || $cityName == null) {
                return response("fields missing");
            } else {
                $user = new User;

                $user->name = $userName;
                $user->email = $email;
                $user->password = $password;
                $user->city = $cityName;
                $user->address = $address;
                $user->save();
                return response()->json("success");
            }
        } catch (\Exception $ex) {
            $error = "Unable to login, with message : " . $ex->getMessage();
            return view("weather.error", compact("error"));
        }
    }

}
