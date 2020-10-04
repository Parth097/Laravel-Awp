<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarWebsiteModel extends Model
{
    protected $fillable = ['user_id','u_name','type', 'fuel', 'brand', 'model', 'year', 'Likes'];

    public function upvoteAndSave () { //function to like by one every time the like button is pressed
        $this -> Likes += 1;
        $this -> update ();
    }
    public function downvoteAndSave () { //function to dislike by one every time the dislike button is pressed
        $this -> Likes -= 1;
        $this -> update ();
    }
}
