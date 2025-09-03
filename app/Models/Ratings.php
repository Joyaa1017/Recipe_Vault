<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Ratings extends Model
{
    use HasFactory;

    protected $table = 'ratings';
    protected $primaryKey = 'ratings_id';  


    protected $fillable = ['user_id','recipe_id','recipe_rate'];
}
