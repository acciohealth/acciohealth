<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    //
    public function index(){

        $post_images = array();

        $blog_posts = DB::connection('mysql_wp')->table('wp_posts')->where('post_type', 'post')->where('post_status', 'publish')->orderBy('post_date', 'DESC')->distinct('ID')->take(3)->get();

        foreach($blog_posts as $key => $blog_post){
            $post_images[$key] = DB::connection('mysql_wp')->table('wp_posts')->where('post_parent', $blog_post->ID)->where('post_type', 'attachment')->where('post_status', 'inherit')->value('guid');
            if($post_images[$key] == null)
                $post_images[$key] = 'No image available';
        }

        return view('welcome', ['blog_posts' => $blog_posts, 'post_images' => $post_images]);
    }
}
