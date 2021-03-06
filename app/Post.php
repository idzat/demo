<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
	use SoftDeletes;
	
	protected $table = 'posts';

	protected $fillable = ['title','content'];

	// protected $hidden = ['content'];

	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}
}