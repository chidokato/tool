<?php

Route::get('admin_login','usercontroller@getlogin');
Route::post('admin/login','usercontroller@postlogin');
Route::get('admin/logout','usercontroller@getlogout');

Route::group(['prefix'=>'admin','middleware'=>'adminlogin'],function(){

	Route::get('dashboard','c_dashboard@dashboard');
	Route::get('delete/{id}','c_dashboard@delete');
	Route::get('send/{id}','c_dashboard@send');

	Route::group(['prefix'=>'user'],function(){
		Route::get('list','usercontroller@getlist')->middleware('can:ql-nv');
		Route::get('edit/{id}','usercontroller@getedit')->middleware('can:ql-nv');
		Route::post('edit/{id}','usercontroller@postedit')->middleware('can:ql-nv');
		Route::get('add','usercontroller@getadd')->middleware('can:ql-nv');
		Route::post('add','usercontroller@postadd')->middleware('can:ql-nv');
		Route::get('delete/{id}','usercontroller@getdelete')->middleware('can:ql-nv');
	});
	Route::group(['prefix'=>'profile'],function(){
		Route::get('list','c_profile@getlist');
		Route::get('update/{id}','ajaxcontroller@updateprofile');
		Route::post('edit/{id}','c_profile@postedit');
	});
	
	Route::group(['prefix'=>'nghiphep'],function(){
		Route::get('add','c_phieu@getlist');
		Route::post('add','c_phieu@postadd');
	});
	Route::group(['prefix'=>'congtac'],function(){
		Route::get('add','c_phieu@congtac');
		Route::post('add','c_phieu@luuphieuct');
	});
	Route::group(['prefix'=>'ditrevesom'],function(){
		Route::get('add','c_phieu@ditrevesom');
		Route::post('add','c_phieu@luuphieudtvs');
	});
	Route::group(['prefix'=>'xacnhancong'],function(){
		Route::get('add','c_phieu@xacnhancong');
		Route::post('add','c_phieu@luuphieuxnc');
	});

	Route::group(['prefix'=>'phong'],function(){
		Route::get('list','c_phong@getlist')->middleware('can:ql-phong');
		Route::post('add','c_phong@postadd')->middleware('can:ql-phong');
		Route::get('edit/{id}','c_phong@getedit')->middleware('can:ql-phong');
		Route::post('edit/{id}','c_phong@postedit')->middleware('can:ql-phong');
		Route::get('delete/{id}','c_phong@getdelete')->middleware('can:ql-phong');
	});

	Route::group(['prefix'=>'duyetphieu'],function(){
		Route::get('list','c_duyetphieu@listphieu')->middleware('can:duyetphieu');
		Route::get('duyet/{id}','c_duyetphieu@duyet')->middleware('can:duyetphieu');
		Route::get('guigd/{id}','c_duyetphieu@guigd')->middleware('can:duyetphieu');
		Route::get('trave/{id}','c_duyetphieu@trave')->middleware('can:duyetphieu');
	});

	Route::group(['prefix'=>'locphieu'],function(){
		Route::get('list','c_locphieu@listphieu')->middleware('can:locphieu');
		Route::post('loc','c_locphieu@locphieu')->middleware('can:locphieu');
	});
	
	Route::group(['prefix'=>'ajax'],function(){
		Route::get('sort_by/{id}','c_ajax@sortby');
	});
	
});

Route::get('/','usercontroller@getlogin');