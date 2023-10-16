<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table="siswas";
    public $primarykey="id";
    protected $fillable=['nama_siswa','nilai','grade','score'];
}
