<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $table = "recipes";

    protected $primaryKey = 'recipe_id';

    protected $fillable = ['user_id','category', 'recipe_name', 'description', 'm_ingred', 'ingredients','steps', 'img', 'cost', 'holiday'];

    protected $dates = ['deleted_at']; // Tracks when the record is soft deleted

    public function collections()
    {
        return $this->belongsToMany(Collection::class, 'collectioncontents', 'recipe_id', 'collect_id');
    }
    

    public function ratings()
    {
        return $this->hasMany(Ratings::class);
    }

    public function getAverageRating()
    {
        return $this->ratings()->avg('recipe_rate');
    }
}
