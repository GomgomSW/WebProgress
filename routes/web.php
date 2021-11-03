<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Sondi",
        "email" => "sondisitinjak@gmail.com",
        "image" => "me.jpg"
    ]);
});




Route::get('/film', function () {
    $film_posts= [
        [
            "title" => "Seven Rings",
            "author" => "Ariana Grande",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo exercitationem facere quibusdam recusandae, 
            repellat amet animi aperiam veritatis fuga sed minima? Esse vero animi, consequatur officiis optio corrupti. 
            Quasi, tenetur vero quaerat voluptate, praesentium debitis assumenda nihil consequuntur dolorum, eaque autem doloremque 
            odit sit beatae ullam adipisci fugit vel laborum eum veniam illum ex! Sint voluptatibus temporibus deserunt nobis?
            Ipsa deleniti magni officia ullam recusandae excepturi natus laboriosam voluptas quam, hic soluta a nihil. Vel recusandae id pariatur aspernatur officiis."
        ],
        [
            "title" => "FTV: Ibuku ternyata ayahku",
            "author" => "Mbak-mbak SCTV",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, ipsam cupiditate corrupti itaque deserunt sunt eos! 
            Necessitatibus rerum facere tenetur distinctio repellendus dolorum, qui accusantium quis totam. Itaque dolores tenetur repellat rem sapiente expedita 
            voluptatum consequuntur similique est cum delectus dolore commodi provident et ipsam, totam, neque ea cupiditate corrupti, sed nisi sequi tempora magni. 
            Unde nihil eum maxime accusantium nemo animi quam neque eius ducimus, asperiores pariatur deleniti! Voluptatum, ipsa autem explicabo laboriosam repellat fuga, 
            repellendus, obcaecati minima recusandae dolor accusantium! In possimus nisi vero sunt dolore nostrum minima optio, 
            ipsum mollitia suscipit aperiam iusto labore ipsa dolorum rem."
        ],
    ];

    return view('films',[
        "title" => "Film",
        "posts" => $film_posts,
    ]);
});
