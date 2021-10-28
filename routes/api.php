<?php

 use App\Http\Controllers\Api\ImageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', ['namespace' => ''], function ($api) {
    $api->get('/shuffing/figure' ,[ImageController::class ,'getFigure']);//轮播图图片获取
    $api->get('/song/list', [ImageController::class, 'getSongList']); //获取歌单列表
    $api->get('/personal/send',[ImageController::class, 'getPersonalSend']);//获取私人定制
    $api->get('/recommended/mv',[ImageController::class, 'getRecommendedMv']);//获取推荐mv
});