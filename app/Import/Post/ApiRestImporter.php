<?php

namespace App\Import\Post;
use App\Import\Importer;
use App\Import\HttpClient;
use App\Services\Admin\PostService;
use App\User;

class ApiRestImporter implements Importer
{
	const END_POINT = "https://sq1-api-test.herokuapp.com/posts";
	const SOURCE_POST 	= "external-api_rest";

	protected $message = null;
	
	public function import(): bool
	{

		$client = HttpClient::client();
		
		$response = $client->request('GET', self::END_POINT, [
			'headers' => [
				'Accept' => 'application/json',
			],
		])
			->getBody()
			->getContents();

		$data = collect(json_decode($response)->data);

		$userAdmin 	= User::admin()
						->firstOrFail();
		$source 	= self::SOURCE_POST;
		
		try {
			$data = $data->map(function ($item, $key) use ($userAdmin, $source) {
			    return 
			    	[
			    		'title'	  			=> $item->title,
			    		'description'		=> $item->description,
			    		'publication_date'	=> $item->publication_date,
			    		'user_id' => $userAdmin->id,
			    		'source'  => $source,	
			    	];
			})
			->toArray();
			
			$nImported = PostService::storeFromArray($data);

			$this->message = "$nImported were imported";

		} catch (Exception $e) {
			
			$this->message = $e->getMessage();
			
			return false;

		}

		return true;
	}

	public function getMessage(): string
	{
		return $this->message;
	}
}
