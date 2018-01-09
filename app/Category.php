<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [ //Permite guardar datos de forma masiva
		'name', 'slug', 'body'
	];

	public function posts() //Una categoria puede tener muchos posts
	{
		return $this->hasMany(Post::class); //uno a muchos
	} 
}
