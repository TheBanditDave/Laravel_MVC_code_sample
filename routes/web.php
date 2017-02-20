<?php

// Display main application view
Route::get('/', 'TasksController@index');

// Add Task
route::post('/task', 'TasksController@addTask');

// Update Task
route::put('/task/{id}', 'TasksController@completeTask');

// Delete Task
route::delete('/task/{id}', 'TasksController@removeTask');


