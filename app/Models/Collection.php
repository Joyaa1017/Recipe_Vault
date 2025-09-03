<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Collection extends Model
{
    use HasFactory;

    protected $table = 'collections';
    protected $primaryKey = 'collect_id';

    protected $fillable = ['user_id','collect_name','description'];

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'collectioncontents', 'collect_id', 'recipe_id');
    }
    
}
