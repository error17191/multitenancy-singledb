<?php


Route::post('projects','ProjectsController@store')->name('projects.store');
Route::get('projects/{project}','ProjectsController@show')->name('projects.show');
Route::get('{company}','DashboardController@index');
