<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\DB;

Route::get('/', function () {

    $blog_posts = DB::connection('mysql_wp')->table('wp_posts')->where('post_type', 'post')->where('post_status', 'publish')->orderBy('post_date', 'DESC')->take(3)->get();

    $post_images = array();

    foreach($blog_posts as $key => $blog_post){
        $post = DB::connection('mysql_wp')->table('wp_posts')->where('post_type', 'attachment')->where('post_status', 'inherit')->where('post_parent', $blog_post->ID)->orderBy('post_date', 'DESC')->first();
        $post_images[$key] = $post->guid;
    }

    return view('welcome', ['blog_posts' => $blog_posts, 'post_images' => $post_images]);
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/tests', 'TestController@index');
Route::get('/test/{name}', 'TestController@showTest');
Route::post('/test/1', 'TestController@dass21');

Route::get('/records/{id}', 'RecordController@showRecord');

