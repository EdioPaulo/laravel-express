<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [               // Atributo protegido para criar direto no banco

    'title',
    'content'                            //linha de comando CMDER App\Post::create(['title'=>'Postagem', 'content'=>'Conteudo da postagem']);

    ];

    public function comments () {
    	
    	return $this->hasMany('App\Comment');

    }

     public function tags (){

     	return $this->belongsToMany('App\Tag', 'posts_tags');
     }
 }
