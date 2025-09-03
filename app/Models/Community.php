<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Community extends Model
{
    use SoftDeletes;
    use HasFactory;


    protected $table = 'community';
    protected $primaryKey = 'com_id';

    protected $fillable = ['user_id', 'post'];

    // // Relationship to sender
    // public function sender()
    // {
    //     return $this->belongsTo(User::class, 'sender_id');
    // }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function communityPage()
    {
        // Fetch messages with the sender relationship
        $post = Community::with('user')->get(); // Returns an Eloquent collection, not an array
    
        // Debugging: Dump and Die
        dd($post);  // This will dump the messages and stop the execution
    
        // After debugging, pass messages to the view
        return view('community.community', compact('posts'));
    }
}

    
