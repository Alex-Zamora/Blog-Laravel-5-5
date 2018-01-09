<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	protected $fillable = [ //Permite guardar datos de forma masiva
		'user_id', 'category_id', 'name', 'slug', 'excerpt', 'body', 'status', 'file'
	];

	public function user() //Un post puede tener un usuario belongsTo()
	{
		return $this->belongsTo(User::class); 
	}

	public function category() // Un post puede pertenecer a una categoría
	{
		return $this->belongsTo(Category::class);
	}

    public function tags() //Un post puede pertenecer a muchas tags
    {
    	return $this->belongsToMany(Tag::class);
    }
}
