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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello',function(){
	return 'this is get';
});


Route::post('hello',function(){
	return 'this is post';
});

Route::put('hello',function(){
	return 'this is put';
});

Route::delete('hello',function(){
	return 'this is delete';
});

// 多重路由
Route::match(['get','post','delete','put'],'and',function(){
	echo '测试';
});
//路由带参数 id数字
Route::get('user/{id}',function($id){
	return $id;
})->where('id','[0-9]+');

//路由带多个参数 顺序传值 id数字 name小写字母
Route::get('user01/{id}/{name}',function($id,$name){
	return $id.' '.$name;
})->where(['id'=>'[0-9]+','name'=>'[a-z]+']);

//路由参数默认值  id数字
Route::get('user02/{id?}',function($id=null){
	return 'id:'.$id;
})->where('id','[0-9]+');

//路由全局限制zzrid
Route::get('user03/{zzrid}',function($id){
	return '全局限制结果:'.$id;
});

// 路由别名
// Route::get('user04/a/aa', ['as'=>'aa', function(){
// 	 $url=route('user04/a/aa');
// 	// print_r($url);die;
// 	 return $url;
// }]);


//路由群组.中间建
Route::group(['middleware'=>'auth'],function(){
	Route::get('mid',function(){
		return 'mid';
	});
});


//404
Route::get('404',function(){
	return abort(404);
});

//age 中间建
Route::get('ages/{age}',function($age){
	return $age;
})->middleware('age');


//路由组  控制器
Route::group(['prefix'=>'my'],function(){
	Route::get('index','MyController@index');
});



Route::group(['prefix'=>'form'],function(){
	Route::get('/',function(){
		return view('post');
	});

	Route::get('st','forms\FormController@store');
	Route::post('che','forms\FormController@store');
	Route::post('st','forms\FormController@store');
	
});
