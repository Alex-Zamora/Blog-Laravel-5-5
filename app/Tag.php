<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [ //Permite guardar datos de forma masiva
		'name', 'slug'
	];

	public function posts() //un Tag puede tener muchos posts
	{
		return $this->belongsToMany(Post::class); //Muchos a Muchos
	}
}
