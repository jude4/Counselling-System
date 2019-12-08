<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CreateUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

        $user_id = User::where('student_id', '=', $request->input('student_id'))->get();
        // if ($request->input('student_id') != $user_id->student_id) {
        //     dd('Error');
        // }


            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'level' => ['nullable', 'string'],
                'role_id' => ['required', 'string'],
                'student_id' => ['required', 'string', 'max:255'],
                'counsellor_id' => ['nullable', 'string', 'max:255', 'unique:users'],
                'lecturer_id' => ['nullable', 'string', 'max:255', 'unique:users'],
                'dept' => ['nullable', 'string'],
                'facty' => ['nullable', 'string'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['nullable', 'string', 'min:6', 'confirmed'],
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }



            $user_id->first()->name = $request->input('name');
            $user_id->first()->email = $request->input('email');
            $user_id->first()->level = $request->input('level');
            $user_id->first()->dept = $request->input('dept');
            $user_id->first()->facty = $request->input('facty');
            $user_id->first()->password = Hash::make($request->input('password'));
            $user_id->first()->save();

            

            return redirect()->back()->with('success', "Counsellor Created");

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
