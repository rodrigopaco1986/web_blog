<?php

namespace App\Services\Admin;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Carbon\Carbon;
use Stevebauman\Purify\Facades\Purify;

class PostService
{
	public static function store($data)
	{
		$data['publication_date'] = ($data['publicated'] ? Carbon::now() : null);
		$data['description'] = Purify::clean($data['description']);
		$data['user_id'] = Auth::user()->id;

		Post::create($data);
	}

	public static function update(Post $post, $data)
	{
		$data['publication_date'] = ($data['publicated'] ? Carbon::now() : null);
		$data['description'] = Purify::clean($data['description']);

		$post->update($data);
	}
}