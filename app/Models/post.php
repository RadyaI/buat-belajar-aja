<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "posts";
    protected $primarykey = "id";
    protected $fillable = ['title','blog'];

    public function comment(){
        return $this -> hasMany(Comment::class);    
    }

    public function totalKomen(){
        return $this -> comment() -> count();
    }

}
