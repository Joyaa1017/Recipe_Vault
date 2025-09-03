<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Report extends Model
{
    use SoftDeletes;  // This enables soft delete functionality
    protected $primaryKey = 'report_id'; // Use the correct primary key name
    protected $dates = ['deleted_at']; // Add this to the model if it's missing

    protected $fillable = [
        'reported_user_id',
        'reporter_user_id',
        'reported_user_username',
        'reason',
        'custom_reason',
    ];

     // The user being reported
     public function reportedUser()
     {
         return $this->belongsTo(User::class, 'reported_user_id');
     }
 
     // The user who reported
     public function reporterUser()
     {
         return $this->belongsTo(User::class, 'reporter_user_id');
     }

    // dd($userId);
}
