<?php

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('db',function(){
	//$list = DB::table('vp_user')->where('user_id','<>',2)->get(); lay id khac 2
	//$list = DB::table('vp_user')->where('user_pass','like','a')->get(); 
	//$list = DB::table('vp_user')->where('user_name','like','admin')->get(); lay name bang admin
	//$list = DB::table('vp_user')->where('user_pass','like','%a%')->get(); lay pass co chua ki tu a
	//$list = DB::table('vp_user')->where('user_id','=',1)->orwhere('user_name','=','admin')->get(); lay ten co admin hoac lay id bang 1
	//$list = DB::table('vp_user')->where('user_id','<>',2)->first(); //lay thong tin cua mot ban ghi
	$list = DB::table('vp_user')->where('user_id','<>',2)->paginate(5); //tro den doi tuong, toi da 5 ban ghi tren trang
	echo '<pre>';
	print_r($list);
	echo '</pre>';

	//echo $list[0]->user_name;
});
Route::get('db', function(){
	$arr=[
		'user_name'=>'user',
		'user_pass'=>md5(1),
		'email'=>'132@gmail.com',
		'token'=>'147258369'
	];
	//DB::table('vp_user')->insert($arr);
	//return dd('them thanh vien thanh cong');
	DB::table('vp_user')->where('user_id','<>',2)->update($arr);
	return dd('sua thanh cong');
});*/
Auth::routes();
Route::group(['namespace'=>'Admin'],function(){
	Route::group(['prefix'=>'login'],function(){
		Route::get('/','AuthController@getLogin');
		Route::post('/','AuthController@postLogin');
		
	});
});

Route::get('db',function (){
    $list = DB::table('hight')->where('question','=',1)->orwhere('user_name','=','admin')->get();
    echo '<prev>';
    print_r($list);
    echo '</prev>';
});

Route::get('/',function (){
    $petani = DB::table('hight')->get();
    return view('/index',['petani'=>$petani]);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/table', 'tableController@index')->name('table');