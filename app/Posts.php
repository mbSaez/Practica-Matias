<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable =['title', 'body'];
    protected $dates = ['created_at', 'updated_at'];

    //public method addPost()
    //{
   //     $this->create([
     //       'title' => request('title'),
       //     'body' => request('body')
       // ]);
   // }

}
