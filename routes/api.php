<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\CommentController;

Route::apiResource('posts', PostController::class)->except([
    'create', 'show', 'edit'
]);

Route::apiResource('comments', CommentController::class)->except([
    'create', 'show', 'edit'
]);