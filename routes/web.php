<?php




Auth::routes();

Route::get('/', function(){
  return view('home');
});


Route::group([
    // 'middleware' => ['auth'],
    'as' => 'backend.',
    'namespace' => 'Backend'], function ()
    {
      Route::get('facebook', function () {
          return view('facebook');
      });
      Route::get('auth/facebook', 'UserController@redirectToFacebook');
      Route::get('auth/facebook/callback', 'UserController@handleFacebook');

      Route::resource('avatars','PhotoController');
    });




Route::get('/home', 'HomeController@index')->name('home');
