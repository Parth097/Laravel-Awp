<?php

namespace App\Http\Controllers;

use App\CarWebsiteModel;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function upVote(CarWebsiteModel $likes) //function for likes to be saved and updated
    {
        $likes->upvoteAndSave();
        return redirect()->action('CarWebsiteController@index');
    }

    public function downVote(CarWebsiteModel $dislikes) //function for dislikes to be saved and updated
    {
        $dislikes->downvoteAndSave();
        return redirect()->action('CarWebsiteController@index');
    }

}
