<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\User;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'publication_date', 'user_id',
    ];

    public function getCreatedAtAttribute($value)
    {
    	return Carbon::parse($value)->format('m/d/Y H:i:s');
    }

    public function getPublicationDateAttribute($value)
    {
    	if ($value)
    		return Carbon::parse($value)->format('m/d/Y H:i:s');

    	return '';
    }

    /**
     * Get the user that belongs the post.
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    /**
     * Scope a query to only return posts from owner or if it's the admin, return all.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  \App\User  $user
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOfOwner($query, User $user)
    {
        if(!$user->isAdmin())
        	return $query->where('user_id', $user->id);

        return $query;
    }
}
