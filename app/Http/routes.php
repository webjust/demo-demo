<?php

Route::get('/', function () {
    return view('login');
});

// 通过声明一个 控制器的路由
Route::get('blog', 'BlogController@index');
Route::get('blog/list', 'BlogController@list');
Route::get('blog/show', 'BlogController@show');

Route::get('blog/login', ['as'=>'login', 'uses'=>'BlogController@login']);


// 必选参数的路由
Route::get('user/{id}', function ($id) {
    return $id;
});

// 多个必选参数的路由    user/1/comment/1
Route::get('user/{id}/comment/{c_id}', function ($id, $c_id) {
    echo $id . '<hr/>' . $c_id;
});

// 可选参数的路由
Route::get('product/{id?}', function ($id = null) {
    return $id;
});

// 使用 where() 链式调用，实现参数的正则匹配
Route::get('products/{id?}', function ($id = null) {
    return $id;
})->where('id', '[0-9]+');
// [a-zA-Z]+

Route::post('reg', function () {
    return view('reg');
});

Route::match(['get', 'post'], '/', function () {
    return '爸爸：儿子，你要不要叫外卖啊！。儿子：要！接着，于是爸爸就带着他去了派出所';
});

Route::any('post', function () {
    return 'any';
});


//Route::get('post', function() {
//    return 'post';
//});




/*Route::get('/', function () {
//    echo config('app.timezone');
//    echo env('DB_HOST');
//    dd($_ENV);
      return view('welcome');
});*/

Route::get('/blog', 'BlogController@index');


Route::get('/about', function () {
    return 'hello laravel';
});
