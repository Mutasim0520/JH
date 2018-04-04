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

Route::get('/','IndexController@showIndex')->name('user.index');
Route::get('/about-us','IndexController@showAboutUs')->name('user.history');
Route::get('/hall/administration','IndexController@showHallAdministration')->name('user.hall.administration');
Route::get('/hall/role/of/honors','IndexController@showRoleOfHonors')->name('user.role.honors');
Route::get('/events','IndexController@showEvents')->name('user.events');
Route::get('/news','IndexController@showNews')->name('user.news');
Route::get('/notice','IndexController@showNotice')->name('user.notice');
Route::get('/contact','IndexController@showContact')->name('user.contact');
Route::get('/detail/news/{id}','IndexController@showNewsDetails');
Route::get('/detail/event/{id}','IndexController@showEventDetails');
Route::get('/detail/notice/{id}','IndexController@showNoticeDetails');
Route::get('/check/email','IndexController@checkEmail');
Route::get('/activate/{id}','IndexController@activateUser');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/student-form','IndexController@showStudentsForm')->name('user.student.form');
    Route::post('/student-form','IndexController@storeStudentForm')->name('user.submit.student.form');
    Route::post('/edti/student-form/{id}','IndexController@editStudentForm');
});

Auth::routes();
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::group(['prefix' => 'admin',  'middleware' => 'auth:admin'], function () {
    Route::get('/dashboard', 'AdminController@ShowDashboard')->name('admin.dashboard');
    Route::get('/students/form', 'AdminController@ShowStudentsForm')->name('admin.student.form');
    Route::get('/edit/student/form/{id}', 'AdminController@ShowStudentsEditForm');
    Route::get('/delete/student/form/{id}', 'AdminController@deleteStudent');
    Route::post('/edit/student/form/{id}', 'AdminController@updateStudentForm');

    Route::get('/add/role/of/honors', 'AdminController@ShowRoleOfHonorsForm')->name('admin.roleOfHonors');
    Route::post('/add/role/of/honors', 'AdminController@storeRoleOfHonorsForm')->name('admin.store.roleOfHonors');

    Route::get('/add/hall/administration', 'AdminController@ShowHallAdminstrationForm')->name('admin.hallAdministration');
    Route::post('/add/hall/administration', 'AdminController@storeHallAdminstrationForm')->name('admin.store.hallAdministration');

    Route::get('/add/news','AdminController@showAddnewsForm')->name('admin.news.add');
    Route::post('/add/news','AdminController@storeAddnewsForm')->name('admin.store.news');

    Route::get('/add/events','AdminController@showAddeventsForm')->name('admin.events.add');
    Route::post('/add/events','AdminController@storeEvents')->name('admin.store.events');

    Route::get('/add/notice','AdminController@showAddNoticeForm')->name('admin.notice.add');
    Route::post('/add/notice','AdminController@storeAddNoticeForm')->name('admin.store.notice');

    Route::post('/logout','Auth\AdminLoginController@logout');

    Route::get('/edit/news/{id}','AdminController@showEditNewsForm');
    Route::post('/edit/news/{id}','AdminController@EditNewsForm');
    Route::get('/delete/news/{id}','AdminController@deletetNews');

    Route::get('/edit/event/{id}','AdminController@showEditEventsForm');
    Route::post('/edit/event/{id}','AdminController@EditEventsForm');
    Route::get('/delete/event/{id}','AdminController@deletetEvents');

    Route::get('/edit/notice/{id}','AdminController@showEditNoticeForm');
    Route::post('/edit/notice/{id}','AdminController@EditNoticeForm');
    Route::get('/delete/notice/{id}','AdminController@deletetNotice');

    Route::get('/edit/honor/{id}','AdminController@showEditHonorForm');
    Route::post('/edit/honor/{id}','AdminController@EditHonorForm');
    Route::get('/delete/honor/{id}','AdminController@deletetHonor');

    Route::get('/edit/administration/{id}','AdminController@showEditAdministrationForm');
    Route::post('/edit/administration/{id}','AdminController@EditAdministrationForm');
    Route::get('/delete/administration/{id}','AdminController@deletetAdministration');

    Route::get('/student/detail/{id}','AdminController@showStudentDetail');

});




Route::group(['middleware'=>'auth'],function (){
});