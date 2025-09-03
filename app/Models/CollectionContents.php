<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CollectionContents extends Model
{
    use HasFactory;

    protected $table = 'collectioncontents';
    protected $primaryKey = 'collectcon_id';

    protected $fillable = ['collect_id','recipe_id','user_id'];
    
    // public function recipes()
    // {
    //     return $this->belongsToMany(Recipe::class, 'collections', 'collect_id', 'recipe_id');
    // }
}
