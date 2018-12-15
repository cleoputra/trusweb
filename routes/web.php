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


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::view('/', 'frontEnd.mainEng')->name('frontEnd.m_Eng');
Route::get('/home-eng', 'HomeController@mail');

Route::get('/admin/homeAdmin', 'PostController@index')->name('admin.home');
Route::get('/admin/addPost', 'PostController@addForm')->name('admin.addPost.form');
Route::post('/admin/addPost', 'PostController@add')->name('admin.addPost');
Route::post('/admin/deletePost', 'PostController@delete')->name('admin.deletePost');


//english page
Route::view('/home-eng', 'frontEnd.index')->name('frontEnd.index');
Route::view('/about', 'frontEnd.about')->name('frontEnd.about');
Route::view('/service', 'frontEnd.service')->name('frontEnd.service');
Route::view('/portofolio', 'frontEnd.portofolio')->name('frontEnd.porto');
Route::view('/contact', 'frontEnd.contact')->name('frontEnd.contact');
Route::view('/news/global', 'frontEnd.news')->name('frontEnd.news');
Route::view('/news-detail/global', 'frontEnd.detailNews')->name('frontEnd.n_details');


Route::view('/service/custom-app', 'frontEnd.service_customapp')->name('frontEnd.s_customapp');
Route::view('/service/maintenance', 'frontEnd.service_maintain')->name('frontEnd.s_maintain');
Route::view('/service/migration', 'frontEnd.service_migration')->name('frontEnd.s_migration');
Route::view('/service/offshore', 'frontEnd.service_offshore')->name('frontEnd.s_offshore');
Route::view('/service/web-development', 'frontEnd.service_web')->name('frontEnd.s_web');


Route::view('/portofolio/artha' , 'frontEnd.porto.artha')->name('frontEnd.p_artha');
Route::view('/portofolio/danasakti' , 'frontEnd.porto.danasakti')->name('frontEnd.p_danasakti');
Route::view('/portofolio/danatama' , 'frontEnd.porto.danatama')->name('frontEnd.p_danatama');
Route::view('/portofolio/ekuator' , 'frontEnd.porto.ekuator')->name('frontEnd.p_ekuator');
Route::view('/portofolio/first-asia' , 'frontEnd.porto.fac')->name('frontEnd.p_fac');
Route::view('/portofolio/jasa-utama-capital' , 'frontEnd.porto.jac')->name('frontEnd.p_jac');
Route::view('/portofolio/kim-eng' , 'frontEnd.porto.kimeng')->name('frontEnd.p_kimeng');
Route::view('/portofolio/lotus' , 'frontEnd.porto.lots')->name('frontEnd.p_lots');
Route::view('/portofolio/minna-padi' , 'frontEnd.porto.minna')->name('frontEnd.p_minna');
Route::view('/portofolio/reliance' , 'frontEnd.porto.reliance')->name('frontEnd.p_reliance');
Route::view('/portofolio/semesta' , 'frontEnd.porto.semesta')->name('frontEnd.p_semesta');
Route::view('/portofolio/universal-broker' , 'frontEnd.porto.ub')->name('frontEnd.p_ub');
Route::view('/portofolio/wanteg' , 'frontEnd.porto.wanteg')->name('frontEnd.p_wanteg');
Route::view('/portofolio/waterfront' , 'frontEnd.porto.waterfront')->name('frontEnd.p_waterfront');
Route::view('/portofolio/yuanata' , 'frontEnd.porto.yuanata')->name('frontEnd.p_yuanata');

//Mandarin page
Route::view('/home/md', 'mand_frontEnd.index')->name('md_frontEnd.index');
Route::view('/about/md', 'mand_frontEnd.about')->name('md_frontEnd.about');
Route::view('/service/md', 'mand_frontEnd.service')->name('md_frontEnd.service');
Route::view('/portofolio/md', 'mand_frontEnd.portofolio')->name('md_frontEnd.porto');
Route::view('/news/md', 'mand_frontEnd.news')->name('md_frontEnd.news');
Route::view('/contact/md', 'mand_frontEnd.contact')->name('md_frontEnd.contact');


Route::view('/service/custom-app/md', 'mand_frontEnd.service_customapp')->name('md_frontEnd.s_customapp');
Route::view('/service/maintenance/md', 'mand_frontEnd.service_maintain')->name('md_frontEnd.s_maintain');
Route::view('/service/migration/md', 'mand_frontEnd.service_migration')->name('md_frontEnd.s_migration');
Route::view('/service/offshore/md', 'mand_frontEnd.service_offshore')->name('md_frontEnd.s_offshore');
Route::view('/service/web-development/md', 'mand_frontEnd.service_web')->name('md_frontEnd.s_web');


Route::view('/portofolio/artha/md' , 'mand_frontEnd.porto.artha')->name('md_frontEnd.p_artha');
Route::view('/portofolio/danasakti/md' , 'mand_frontEnd.porto.danasakti')->name('md_frontEnd.p_danasakti');
Route::view('/portofolio/danatama/md' , 'mand_frontEnd.porto.danatama')->name('md_frontEnd.p_danatama');
Route::view('/portofolio/ekuator/md' , 'mand_frontEnd.porto.ekuator')->name('md_frontEnd.p_ekuator');
Route::view('/portofolio/first-asia/md' , 'mand_frontEnd.porto.fac')->name('md_frontEnd.p_fac');
Route::view('/portofolio/jasa-utama-capital/md' , 'mand_frontEnd.porto.jac')->name('md_frontEnd.p_jac');
Route::view('/portofolio/kim-eng/md' , 'mand_frontEnd.porto.kimeng')->name('md_frontEnd.p_kimeng');
Route::view('/portofolio/lotus/md' , 'mand_frontEnd.porto.lots')->name('md_frontEnd.p_lots');
Route::view('/portofolio/minna-padi/md' , 'mand_frontEnd.porto.minna')->name('md_frontEnd.p_minna');
Route::view('/portofolio/reliance/md' , 'mand_frontEnd.porto.reliance')->name('md_frontEnd.p_reliance');
Route::view('/portofolio/semesta/md' , 'mand_frontEnd.porto.semesta')->name('md_frontEnd.p_semesta');
Route::view('/portofolio/universal-broker/md' , 'mand_frontEnd.porto.ub')->name('md_frontEnd.p_ub');
Route::view('/portofolio/wanteg/md' , 'mand_frontEnd.porto.wanteg')->name('md_frontEnd.p_wanteg');
Route::view('/portofolio/waterfront/md' , 'mand_frontEnd.porto.waterfront')->name('md_frontEnd.p_waterfront');
Route::view('/portofolio/yuanata/md' , 'mand_frontEnd.porto.yuanata')->name('md_frontEnd.p_yuanata');


//Bahasa page
Route::view('/home/id', 'ind_frontEnd.index')->name('id_frontEnd.index');
Route::view('/about/id', 'ind_frontEnd.about')->name('id_frontEnd.about');
Route::view('/service/id', 'ind_frontEnd.service')->name('id_frontEnd.service');
Route::view('/portofolio/id', 'ind_frontEnd.portofolio')->name('id_frontEnd.porto');
Route::view('/news/id', 'ind_frontEnd.news')->name('id_frontEnd.news');
Route::view('/contact/id', 'ind_frontEnd.contact')->name('id_frontEnd.contact');


Route::view('/service/custom-app/id', 'ind_frontEnd.service_customapp')->name('id_frontEnd.s_customapp');
Route::view('/service/maintenance/id', 'ind_frontEnd.service_maintain')->name('id_frontEnd.s_maintain');
Route::view('/service/migration/id', 'ind_frontEnd.service_migration')->name('id_frontEnd.s_migration');
Route::view('/service/offshore/id', 'ind_frontEnd.service_offshore')->name('id_frontEnd.s_offshore');
Route::view('/service/web-development/id', 'ind_frontEnd.service_web')->name('id_frontEnd.s_web');


Route::view('/portofolio/artha/id' , 'ind_frontEnd.porto.artha')->name('id_frontEnd.p_artha');
Route::view('/portofolio/danasakti/id' , 'ind_frontEnd.porto.danasakti')->name('id_frontEnd.p_danasakti');
Route::view('/portofolio/danatama/id' , 'ind_frontEnd.porto.danatama')->name('id_frontEnd.p_danatama');
Route::view('/portofolio/ekuator/id' , 'ind_frontEnd.porto.ekuator')->name('id_frontEnd.p_ekuator');
Route::view('/portofolio/first-asia/id' , 'ind_frontEnd.porto.fac')->name('id_frontEnd.p_fac');
Route::view('/portofolio/jasa-utama-capital/id' , 'ind_frontEnd.porto.jac')->name('id_frontEnd.p_jac');
Route::view('/portofolio/kim-eng/id' , 'ind_frontEnd.porto.kimeng')->name('id_frontEnd.p_kimeng');
Route::view('/portofolio/lotus/id' , 'ind_frontEnd.porto.lots')->name('id_frontEnd.p_lots');
Route::view('/portofolio/minna-padi/id' , 'ind_frontEnd.porto.minna')->name('id_frontEnd.p_minna');
Route::view('/portofolio/reliance/id' , 'ind_frontEnd.porto.reliance')->name('id_frontEnd.p_reliance');
Route::view('/portofolio/semesta/id' , 'ind_frontEnd.porto.semesta')->name('id_frontEnd.p_semesta');
Route::view('/portofolio/universal-broker/id' , 'ind_frontEnd.porto.ub')->name('id_frontEnd.p_ub');
Route::view('/portofolio/wanteg/id' , 'ind_frontEnd.porto.wanteg')->name('id_frontEnd.p_wanteg');
Route::view('/portofolio/waterfront/id' , 'ind_frontEnd.porto.waterfront')->name('id_frontEnd.p_waterfront');
Route::view('/portofolio/yuanata/id' , 'ind_frontEnd.porto.yuanata')->name('id_frontEnd.p_yuanata');

