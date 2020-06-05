<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    protected $table = 'acara';
    protected $fillable = ['judul','deskripsi'];
}
