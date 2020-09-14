<?php

namespace App\Services\Admin;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Carbon\Carbon;

class PostService
{
	public static function store($data)
	{
		$data['publication_date'] = ($data['publicated'] ? Carbon::now() : null);
		$data['user_id'] = Auth::user()->id;

		Post::create($data);
	}

	public static function update(Post $post, $data)
	{
		$data['publication_date'] = ($data['publicated'] ? Carbon::now() : null);

		$post->update($data);
	}
}