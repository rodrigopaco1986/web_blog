<?php

namespace App\Services\Admin;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Carbon\Carbon;
use Stevebauman\Purify\Facades\Purify;
use \DB;
use App\User;

class PostService
{
	public static function store($data)
	{
		$data['publication_date'] = ($data['publicated'] ? Carbon::now() : null);
		$data['description'] = Purify::clean($data['description']);
		$data['user_id'] = Auth::user()->id;
		$data['source'] = Post::SOURCE_WEB;

		Post::create($data);
	}

	public static function update(Post $post, $data)
	{
		$data['publication_date'] = ($data['publicated'] ? Carbon::now() : null);
		$data['description'] = Purify::clean($data['description']);

		$post->update($data);
	}

	public static function storeFromArray($array) : int{
		if(is_array($array) && count($array) > 0)
		{
			DB::beginTransaction();

			foreach ($array as $key => $data) {
				$data['publication_date'] = Carbon::parse($data['publication_date']);
				$data['description'] = Purify::clean($data['description']);
				Post::create($data);
			}
			DB::commit();

			return $key+1;
		}

		return 0;
	}
}