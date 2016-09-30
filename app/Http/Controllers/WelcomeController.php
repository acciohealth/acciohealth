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

        $blog_posts = DB::connection('mysql_wp')->table('wp_posts')->where('post_type', 'post')->where('post_status', 'publish')->orderBy('post_date', 'DESC')->take(3)->get();

        foreach($blog_posts as $key => $blog_post){
            $post = DB::connection('mysql_wp')->table('wp_posts')->where('post_type', 'attachment')->where('post_status', 'inherit')->where('post_parent', $blog_post->ID)->orderBy('post_date', 'DESC')->first();
            $post_images[$key] = $post->guid;
        }

        return view('welcome', ['blog_posts' => $blog_posts, 'post_images' => $post_images]);
    }
}
