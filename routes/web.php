<?php

use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Str;

// Route::get('/',function(){
//     $user = User::find(1)->first();
//     $user->update([
//         'name' =>'shakil',
//         'password' =>bcrypt('12345678')
//     ]);
// });
Route::get('/',function(){
    $user = Article::find(1)->first();
    $user->update([
        'body' =>'this is first text update',
    ]);
});
Route::get('/user/{user}/history',function(User $user){
    $histories=$user->history;
    return view('users.history',compact('histories'));
});
Route::get('/article/{article}/history',function(Article $article){
    $histories=$article->history;
    return view('users.history',compact('histories'));
});
