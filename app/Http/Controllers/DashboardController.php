<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function index()
    {
        if (Auth::user()->role_id == 1)
        {
            // $users = User::all()->where('users.role_id', '=', 1)->first();
            $posts = Post::all();
            $students = User::all()->where('role_id', '=', 3);
            $course_advisers = User::all()->where('role_id', '=', 4);
            $counsellors = User::all()->where('role_id', '=', 2);
            $tags = Category::all();
            return view('dashboard.admin')->
                    with(['students' => $students, 'counsellors' => $counsellors,
                        'course_advisers' => $course_advisers,
                        'posts' => $posts, 'tags' => $tags]);
        }

        if (Auth::user()->role_id == 2)
        {
            $user = auth()->user();
            $msgs = $user->messages;

            $msgs = count($msgs);
            return view('dashboard.counsellor', ['msgs' => $msgs]);
        }

        if (Auth::user()->role_id == 3)
        {
            $user = auth()->user();
          $msgs = $user->messages;

            $msgs = count($msgs);

            return view('dashboard.student', ['msgs' => $msgs]);
        }

        if (Auth::user()->role_id == 4)
        {
            $user = auth()->user();
            $msgs = $user->messages;

            $msgs = count($msgs);
            return view('dashboard.lecturer', ['msgs' => $msgs]);
        }
    }

   }
