<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\CommentController;

Route::apiResources([
    'posts' => PostController::class
]);


Route::apiResources([
    'comments' => CommentController::class
]);
