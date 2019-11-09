

Skip to content
Using Gmail with screen readers
Enable desktop notifications for Gmail.
   OK  No thanks

1 of 753
(no subject)
Inbox
x

Areeba Naveed
Attachments
1:34 PM (4 minutes ago)
to Mehakubaid98


3 Attachments

<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
web.php
Displaying home.blade.php.