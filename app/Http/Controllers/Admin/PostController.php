<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use \Flash;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Services\Admin\PostService;
use Auth;

class PostController extends Controller
{
    const PAGE_SIZE = 10;

    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $queryset = Post::select()
            ->with('user')
            ->OfOwner(Auth::user());

        if ($q = $request->input('q', false))
        {
            $queryset->where('title', 'like', '%' . $q . '%');
        }

        $sort_by    = $request->input('sort_by', 'updated_at');
        $sort_dir   = $request->input('sort_dir', 'desc');
        $queryset->orderBy($sort_by, $sort_dir);

        $p = $request->input('p', self::PAGE_SIZE);

        $paginator = $queryset->paginate($p);

        $data = [
            "p"             =>  $p,
            "q"             =>  $q,
            "sb"            =>  $sort_by,
            "sd"            =>  $sort_dir,
            "sd_alt"        =>  ($sort_dir == 'desc') ? 'asc' : 'desc',
            "sd_alt_class"  =>  ($sort_dir == 'desc') ? '-alt' : '',
        ];

        return view('admin.post.index', $data)
            ->with('paginator', $paginator);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'disabled' => '',
        ];
        
        return view('admin.post.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        PostService::store($request->validated());

        Flash::success('Post saved successfully');
        
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $data = [
            'disabled' => 'disabled',
        ];

        return view('admin.post.show', $data)
            ->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $data = [
            'disabled' => '',
        ];

        return view('admin.post.edit', $data)
            ->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        PostService::update($post, $request->validated());

        Flash::success('Post updated successfully');
        
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
