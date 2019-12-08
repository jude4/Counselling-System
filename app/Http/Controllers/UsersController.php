<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;


class UsersController extends Controller
{

    public function pic()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('manage.profile', ['user' => $user]);
    }


    public function createAdviser()
    {
        return view('manage.adviser');
    }

    public function createCounsellor()
    {
        return view('manage.counsellor');
    }

    public function createStudent()
    {
        return view('manage.student');
    }

    public function account()
    {
        if(auth()->user()->role_id == 3)
        {
            $student = User::find(auth()->user())->first();

            return view('manage.account', ['student' => $student]);
        }

        if(auth()->user()->role_id == 2)
        {
            $counsellor = User::find(auth()->user()->role_id);
            return view('manage.account', ['counsellor' => $counsellor]);
        }

        if(auth()->user()->role_id == 4)
        {
            $course_adviser = User::find(auth()->user()->role_id);
            return view('manage.account', ['course_adviser' => $course_adviser]);
        }
    }


    public function show($id)
    {
        $students = User::all()->where('role_id', '=', 3);
        $counsellors = User::all()->where('role_id', '=', 2);
        $course_advisers = User::all()->where('role_id', '=', 4);
        if ($id == 3) {
            return view('manage.show_student',  ['students' => $students, 'counsellors' => $counsellors, 'course_advisers' => $course_advisers]);
        }

        if ($id == 2) {
            return view('manage.show_counsellor',  ['students' => $students, 'counsellors' => $counsellors, 'course_advisers' => $course_advisers]);
        }

        if ($id == 1) {
            return view('manage.show_adviser',  ['students' => $students, 'counsellors' => $counsellors, 'course_advisers' => $course_advisers]);
        }
    }

    public function index()
    {
        return view('manage.index');
    }

    public function store(Request $request)
    {


        // Registeration for Counsellor
        if ($request->input('role_id') == 2) {
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'level' => ['nullable', 'string'],
                'role_id' => ['required', 'string'],
                'student_id' => ['nullable', 'string', 'max:255', 'unique:users'],
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



            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'role_id' => $request->input('role_id'),
                'counsellor_id' => $request->input('counsellor_id'),
                'password' => Hash::make($request->input('password')),
            ]);

            return redirect()->back()->with('success', "Counsellor Created");

        }

        // Registeration for Student
        if ($request->input('role_id') == 3) {
            $validator = Validator::make($request->all(), [
                'name' => ['nullable', 'string', 'max:255'],
                'level' => ['required', 'string'],
                'role_id' => ['required', 'string'],
                'student_id' => ['required', 'string', 'max:255', 'unique:users'],
                'counsellor_id' => ['nullable', 'string', 'max:255', 'unique:users'],
                'lecturer_id' => ['nullable', 'string', 'max:255', 'unique:users'],
                'dept' => ['required', 'string'],
                'facty' => ['required', 'string'],
                'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['nullable', 'string', 'min:6', 'confirmed'],
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }

            $user = User::create([
                'student_id' => $request->input('student_id'),
                'facty' => $request->input('facty'),
                'dept' => $request->input('dept'),
                'level' => $request->input('level'),
                'role_id' => 3,
            ]);

            return redirect()->back()->with('success', "Student Created");
        }

        // Registeration for Course Adviser
        if ($request->input('role_id') == 4) {
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'level' => ['nullable', 'string'],
                'role_id' => ['required', 'string'],
                'student_id' => ['nullable', 'string', 'max:255', 'unique:users'],
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



            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'role_id' => $request->input('role_id'),
                'lecturer_id' => $request->input('lecturer_id'),
                'password' => Hash::make($request->input('password')),
            ]);

            return redirect()->back()->with('success', "Course Adviser Created");
        }


    }


    public function update(Request $request)
    {


        // Registeration for Counsellor
        if ($request->input('role_id') == 2) {
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'level' => ['nullable', 'string'],
                'role_id' => ['nullable', 'string'],
                'student_id' => ['nullable', 'string', 'max:255', 'unique:users'],
                'counsellor_id' => ['nullable', 'string', 'max:255', 'unique:users'],
                'lecturer_id' => ['nullable', 'string', 'max:255', 'unique:users'],
                'dept' => ['nullable', 'string'],
                'facty' => ['nullable', 'string'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'string', 'min:6', 'confirmed'],
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }



          $user = User::find(auth()->user()->id);
          $user->name = $request->input('name');
          $user->email = $request->input('email');
          $user->password = Hash::make($request->input('password'));

          $user->save();

            return redirect()->back()->with('success', "Account Updated");

        }

        // Registeration for Student
        if ($request->input('role_id') == 3) {
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'level' => ['nullable', 'string'],
                'role_id' => ['nullable', 'string'],
                'student_id' => ['nullable', 'string', 'max:255', 'unique:users'],
                'counsellor_id' => ['nullable', 'string', 'max:255', 'unique:users'],
                'lecturer_id' => ['nullable', 'string', 'max:255', 'unique:users'],
                'dept' => ['nullable', 'string'],
                'facty' => ['nullable', 'string'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'string', 'min:6', 'confirmed'],
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }

           $user = User::find(auth()->user()->id);

            $user->email = $request->input('email');
            $user->name = $request->input('name');
            $user->password = Hash::make($request->input('password'));
            $user->save();
            return redirect()->back()->with('success', "Account Updated");
        }

        // Registeration for Course Adviser
        if ($request->input('role_id') == 4) {
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'level' => ['nullable', 'string'],
                'role_id' => ['nullable', 'string'],
                'student_id' => ['nullable', 'string', 'max:255', 'unique:users'],
                'counsellor_id' => ['nullable', 'string', 'max:255', 'unique:users'],
                'lecturer_id' => ['nullable', 'string', 'max:255', 'unique:users'],
                'dept' => ['nullable', 'string'],
                'facty' => ['nullable', 'string'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'string', 'min:6', 'confirmed'],
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }



         $user = User::find(auth()->user()->id);
         $user->name = $request->input('name');
         $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
            return redirect()->back()->with('success', "Account Updated");
        }


    }




    public function destroy($id)
    {
        $user = User::destroy($id);
        return redirect()->back()->with('success', 'User Deleted Successfully');
    }

    public function profile(Request $request)
     {
         //Handle file upload
         if ($request->hasFile('cover_image')) {
            // Get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            //upload image
            $path = $request->file('cover_image')->StoreAs('public/cover_image', $filenameToStore);
        } else {
            $filenameToStore = 'noimage.jpg';
        }



        //Create Post
          //Create Post
          $user_id = Auth::user()->id;

          $profile = User::findorFail($user_id);

          if ($request->hasFile('cover_image')) {
            $profile->cover_image = $filenameToStore;
        }

            $profile->cover_image = $filenameToStore;


             $profile->save();



        return redirect()->back()->with('success', "Profile Pic Uploaded Successfully");

        //  return view('dashboard.profile');
     }


}
