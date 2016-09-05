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

use App\Blog;

Route::get('/', 'HomeController@index');

Route::get('/blog', 'BlogController@index');

Route::get('/tambah', function() 
{
	$blog = new Blog;
	$blog->judul = "Judul Pertama 3";
	$blog->deskripsi = "Deskripsi nya diisi, Contoh menambah data pada route 3";
	$blog->save();

});

Route::get('/update', function() 
{
	$blog = Blog::find(1);
	$blog->judul = "Ganti Judul";
	$blog->deskripsi = "Ganti Deskripsi";
	$blog->save();
});

Route::get('/tampil', function()
{
	$blogs = Blog::all();
	foreach($blogs as $blog)
	{
		echo "<b>Judul</b> : ";
		echo $blog->judul;
		echo "<br><b>Deskripsi</b> : ";
		echo $blog->deskripsi;
	}
});

Route::get('/hapus', function() 
{
	$blog = Blog::find(1);
	$blog->delete();
});

Route::get('/blog/{id}', 'BlogController@tampilkanID');



Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
