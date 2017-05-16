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

get('/', 'StaticPagesController@home')->name('home');
get('/help', 'StaticPagesController@help')->name('help');
get('/about', 'StaticPagesController@about')->name('about');

get('signup', 'UsersController@create')->name('signup');//注册
resource('users', 'UsersController');

//登陆功能
get('login', 'SessionsController@create')->name('login');//登陆界面
post('login', 'SessionsController@store')->name('login');//登陆进去
delete('logout', 'SessionsController@destroy')->name('logout');//退出

get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');//发送邮件激活

//密码重设功能
get('password/email', 'Auth\PasswordController@getEmail')->name('password.reset');
post('password/email', 'Auth\PasswordController@postEmail')->name('password.reset');
get('password/reset/{token}', 'Auth\PasswordController@getReset')->name('password.edit');
post('password/reset', 'Auth\PasswordController@postReset')->name('password.update');