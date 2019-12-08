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


    Route::get('/', 'PageController@index')->name('index');
    Route::get('/pages/info', 'PageController@about');
    Route::get('/pages/faq', 'PageController@faq');
    Route::post('manage/store', 'UserController@store')->name('manage.store');
    Route::get('/admin_reg', function () {
        return view('admin_reg');
    });


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('faq/view', 'FaqController@view');
Route::get('cat/view', 'CategoriesController@view');

Route::resource('user', 'CreateUserController');

Route::resource('cat', 'CategoriesController');
Route::middleware(['auth'])->group(function() {


   Route::get('/chats/reply/{id}', 'MessageController@reply')->name('reply');

    Route::get('/chats/profile/{id}/{sender_id}', 'MessageController@profile')->name('profile');

    Route::get('/posts/view', 'PostController@view');
    Route::resource('posts', 'PostController')->middleware(['auth']);
    Route::get('manage/pic', 'UsersController@pic');
    Route::get('manage/profile', 'UsersController@profile');
    Route::get('manage/account', 'UsersController@account');
    Route::post('manage/update', 'UsersController@update');
    Route::get('/manage/show/{id}', 'UsersController@show');
    Route::get('manage/adviser', 'UsersController@createAdviser');
    Route::get('manage/counsellor', 'UsersController@createCounsellor');
    Route::get('manage/student', 'UsersController@createStudent');
    Route::resource('manage', 'UsersController');
    Route::resource('faq', 'FaqController');

    Route::get('/chats/counsellor','MessageController@counsellorForm')->name('counsellorForm');

    // Route::get('/chats/inbox', 'MessageController@inbox')->name('inbox');


    // Route::get('chats/reply/{id}', function() {
    //     return view('chats.reply')->name('reply');
    // });

    Route::get('/chats/student','MessageController@studentForm')->name('studentForm');

    Route::get('/chats/lecturer','MessageController@lecturerForm')->name('lecturerForm');

    Route::get('/chats/speaktolect','MessageController@speaktolect')->name('speaktolect');

    Route::get('/chats/speaktocon','MessageController@speaktocon')->name('speaktocon');

    Route::get('boardcast', 'BroadcastController@create');

    Route::post('boardcast/store', 'BroadcastController@store')->name('boardcast.store');



    Route::get('/admin', 'HomeController@admin')->name('admin');

    Route::get('dashboard', 'DashboardController@index');

    Route::resource('comments', 'CommentController');


   Route::resource('chats', 'MessageController');

});



Route::get('/authorize', function(){
    return view('/vendor/passport/authorize');
});

Route::get('/get_access_token', function() {
    $http = new GuzzleHttp\Client;

    $response = $http->post('http://localhost/blog/public/oauth/token', [
        'form_params'=> [
            'grant_type'=>'password',
            'client_id'=>'7',
            'client_secret'=>'usXPoOFfUXYqYiKW2yiMtVD3uZmsV9ve4sGr52W8',
            'username' => 'andrewoshodin@gmail.com',
            'password' => 'usifoh123',
            'scope' => '',
        ],
    ]);

    return json_decode((string)$response->getBody(), true);
});

Route::get('/redirect', function() {
    $query = http_build_query([
        'client_id' => '7',
        'redirect_uri' => 'http://localhost/blog/public/callback',
        'response_type' => 'code',
        'scope' => '',
    ]);

    return redirect('http://localhost/blog/public/oauth/authorize?'.$query);
});

Route::get('/callback', function(Request $request) {
    $http = new GuzzleHttp\Client;

    $response = $http->post('http://localhost/blog/public/oauth/token', [
        'form_params'=> [
            'grant_type'=>'authorization_code',
            'client_id'=> $request->client_id,
            'client_secret'=>'usXPoOFfUXYqYiKW2yiMtVD3uZmsV9ve4sGr52W8',
            'redirect_uri' => 'http://localhost/blog/public/callback',
            'code' => $request->code,
        ],
    ]);

    return json_decode((string)$response->getBody(), true);
});

Route::get('/personal_token/{id}', function($id) {
    $user = App\User::find($id);
    $token = $user->createToken('App personal')->accessToken;
    return $token;
});



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
