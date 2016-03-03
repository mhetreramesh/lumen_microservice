<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('api/articles', 'ArticleController@index');
$app->get('api/articles/{id}', 'ArticleController@getArticle');
$app->post('api/articles', 'ArticleController@saveArticle');
$app->put('api/articles/{id}', 'ArticleController@updateArticle');
$app->delete('api/articles/{id}', 'ArticleController@deleteArticle');
