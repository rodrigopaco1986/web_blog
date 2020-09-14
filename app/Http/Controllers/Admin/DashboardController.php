<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use Auth;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $nPost = Post::select()
            ->OfOwner(Auth::user())
            ->count();

        return view('admin.dashboard')
        	->with('nPost', $nPost);
    }
}
