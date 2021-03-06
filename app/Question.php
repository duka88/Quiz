<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [ 'image', 'category_id', 'question', 'active' ];

    public function category(){
        return $this->belongsTo(Category::class);
    } 

    public function users(){
        return $this->belongsToMany(User::class);
    } 
}
