<?php

Route::get('/', 'Home@index')->name('home');

Route::get('/about', 'About@index')->name('about');

Route::get('/post', 'Post@index')->name('post');

Route::get('/contact', 'Contact@index')->name('contact');
