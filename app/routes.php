<?php
Route::get('/', function()
{
    return View::make('home');  
});

Route::get('login', function()
{
    return View::make('login');
});

Route::post('login', function()
{
    $user = array(
        'username' => Input::get('username'),
        'password' => Input::get('password')
    );

    if (Auth::attempt($user))
    {
        return Redirect::to('profile')
            ->with('flash_notice', 'Tebriler başarıyla giriş yaptınız!');
    }

    return Redirect::to('/')
        ->with('flash_notice', 'Kullanıcı adı ya da şifre yanlış')
        ->withInput();
})->before('guest');

Route::get('logout', function()
{
    Auth::logout();
    return Redirect::to('/')
                ->with('flash_notice', 'Başarıyla çıkış yaptınız');

})->before('auth');

Route::get('profile', function()
{
    return View::make('profile');
})->before('auth');
