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

Route::get('/','PagesController@index')->name('index');

Auth::routes();

Route::get('/aboutus','PagesController@aboutus')->name('aboutus');
Route::get('/forum','StatusController@visitor')->name('visitor');

//search
 Route::get('/search', 'PagesController@search')->name('search');
//comment post




Route::get('/post/comment/{id}', 'StatusController@comment')->name('post.comment');

Route::get('/information/comment/{id}', 'StatusController@infocomment')->name('info.comment');





//dhaka division
Route::get('/dhaka','PagesController@dhaka')->name('dhaka');
Route::get('/dhaka/historical-place','PagesController@dhakaHistorical')->name('dhaka.historical-place');
Route::get('/dhaka/hospital','PagesController@dhakaHospital')->name('dhaka.hospital');
Route::get('/dhaka/fire-service','PagesController@dhakaFire')->name('dhaka.fire');
Route::get('/dhaka/police-station','PagesController@dhakaPolice')->name('dhaka.police');
Route::get('/dhaka/hotel','PagesController@dhakaHotel')->name('dhaka.hotel');

//barishal division
Route::get('/barishal','PagesController@barishal')->name('barishal');
Route::get('/barishal/historical-place','PagesController@barishalHistorical')->name('barishal.historical-place');
Route::get('/barishal/hospital','PagesController@barishalHospital')->name('barishal.hospital');
Route::get('/barishal/fire-service','PagesController@barishalFire')->name('barishal.fire');
Route::get('/barishal/police-station','PagesController@barishalPolice')->name('barishal.police');
Route::get('/barishal/hotel','PagesController@barishalHotel')->name('barishal.hotel');

//chittagong division
Route::get('/chittagong','PagesController@chittagong')->name('chittagong');
Route::get('/chittagong/historical-place','PagesController@chittagongHistorical')->name('chittagong.historical-place');
Route::get('/chittagong/hospital','PagesController@chittagongHospital')->name('chittagong.hospital');
Route::get('/chittagong/fire-service','PagesController@chittagongFire')->name('chittagong.fire');
Route::get('/chittagong/police-station','PagesController@chittagongPolice')->name('chittagong.police');
Route::get('/chittagong/hotel','PagesController@chittagongHotel')->name('chittagong.hotel');

//khulna division
Route::get('/khulna','PagesController@khulna')->name('khulna');
Route::get('/khulna/historical-place','PagesController@khulnaHistorical')->name('khulna.historical-place');
Route::get('/khulna/hospital','PagesController@khulnaHospital')->name('khulna.hospital');
Route::get('/khulna/fire-service','PagesController@khulnaFire')->name('khulna.fire');
Route::get('/khulna/police-station','PagesController@khulnaPolice')->name('khulna.police');
Route::get('/khulna/hotel','PagesController@khulnaHotel')->name('khulna.hotel');

//mymensingh division
Route::get('/mymensingh','PagesController@mymensingh')->name('mymensingh');
Route::get('/mymensingh/historical-place','PagesController@mymensinghHistorical')->name('mymensingh.historical-place');
Route::get('/mymensingh/hospital','PagesController@mymensinghHospital')->name('mymensingh.hospital');
Route::get('/mymensingh/fire-service','PagesController@mymensinghFire')->name('mymensingh.fire');
Route::get('/mymensingh/police-station','PagesController@mymensinghPolice')->name('mymensingh.police');
Route::get('/mymensingh/hotel','PagesController@mymensinghHotel')->name('mymensingh.hotel');

//rajshahi division
Route::get('/rajshahi','PagesController@rajshahi')->name('rajshahi');
Route::get('/rajshahi/historical-place','PagesController@rajshahiHistorical')->name('rajshahi.historical-place');
Route::get('/rajshahi/hospital','PagesController@rajshahiHospital')->name('rajshahi.hospital');
Route::get('/rajshahi/fire-service','PagesController@rajshahiFire')->name('rajshahi.fire');
Route::get('/rajshahi/police-station','PagesController@rajshahiPolice')->name('rajshahi.police');
Route::get('/rajshahi/hotel','PagesController@rajshahiHotel')->name('rajshahi.hotel');

//rangpur division
Route::get('/rangpur','PagesController@rangpur')->name('rangpur');
Route::get('/rangpur/historical-place','PagesController@rangpurHistorical')->name('rangpur.historical-place');
Route::get('/rangpur/hospital','PagesController@rangpurHospital')->name('rangpur.hospital');
Route::get('/rangpur/fire-service','PagesController@rangpurFire')->name('rangpur.fire');
Route::get('/rangpur/police-station','PagesController@rangpurPolice')->name('rangpur.police');
Route::get('/rangpur/hotel','PagesController@rangpurHotel')->name('rangpur.hotel');

//sylhet division
Route::get('/sylhet','PagesController@sylhet')->name('sylhet');
Route::get('/sylhet/historical-place','PagesController@sylhetHistorical')->name('sylhet.historical-place');
Route::get('/sylhet/hospital','PagesController@sylhetHospital')->name('sylhet.hospital');
Route::get('/sylhet/fire-service','PagesController@sylhetFire')->name('sylhet.fire');
Route::get('/sylhet/police-station','PagesController@sylhetPolice')->name('sylhet.police');
Route::get('/sylhet/hotel','PagesController@sylhetHotel')->name('sylhet.hotel');


//status user
Route::post('/status', 'StatusController@statusstore')->name('status.store');




//backend site
Route::group(['prefix' => 'backend'], function(){

	Route::get('/dashboard','backend\PagesController@welcome')->name('welcome');

	//photos

	Route::get('/post-photos','backend\PagesController@photos')->name('photos');
	Route::get('/manage-photos','backend\AllphotoController@managephotos')->name('managephotos');
	Route::post('/allphoto', 'backend\AllphotoController@photostore')->name('photos.store');
	Route::post('/allphoto-delete/{id}', 'backend\AllphotoController@photodelete')->name('photo.delete');
	Route::get('/photoedit-{id}', 'backend\AllphotoController@edit')->name('photo.edit');
	Route::post('/photo-update/{id}', 'backend\AllphotoController@update')->name('photo.update');

	//information post

	Route::get('/information-post','backend\PagesController@post')->name('post');
	Route::get('/manage-post','backend\PagesController@managepost')->name('managepost');
	Route::post('/information', 'backend\InformationController@informationstore')->name('information.store');
	Route::get('/edit-{id}', 'backend\InformationController@edit')->name('information.edit');
	Route::post('/information-delete/{id}', 'backend\InformationController@informationdelete')->name('information.delete');
	Route::post('/information-update/{id}', 'backend\InformationController@update')->name('information.update');

  // Admin Login Routes
  Route::get('/', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
  Route::post('/adminlogin-submit', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
  Route::post('/adminlogout-submit', 'Auth\Admin\LoginController@logout')->name('admin.logout');

  });



