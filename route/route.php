<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', 'index/hello');
Route::get('signin', 'admin/Login/signin');
Route::get('test', 'admin/Login/test');
Route::get('register', 'admin/Login/register');
Route::get('testtoken', 'admin/Manage/test');
// 用户管理操作
Route::get('allstu', 'admin/Manage/showAllStu');
Route::get('excelout', 'admin/Manage/outStuWithExcel');
Route::post('addstu', 'admin/Manage/addStu');
Route::post('editstu', 'admin/Manage/editStu');
Route::post('excelin', 'admin/Manage/addStuWithExcel');
