<?php

return [
    'controllers' => [
    	'App\Http\Controllers\Admin\CategoryController::class',
    	'App\Http\Controllers\Admin\ExerciseController::class',
    	'App\Http\Controllers\Admin\ExerciseHomeworkController::class',
    	'App\Http\Controllers\Admin\ExerciseMediaController::class',
    	'App\Http\Controllers\Admin\GroupController::class',
    	'App\Http\Controllers\Admin\GroupUserController::class',
    	'App\Http\Controllers\Admin\HomeworkController::class',
    	'App\Http\Controllers\Admin\InstitutionController::class',
    	'App\Http\Controllers\Admin\InstitutionUserController::class',
    	'App\Http\Controllers\Admin\LinkController::class',
    	'App\Http\Controllers\Admin\MediaController::class',
    	'App\Http\Controllers\Admin\MutlipleChoiceController::class',
    	'App\Http\Controllers\Admin\QuestionAnswersController::class',
    	'App\Http\Controllers\Admin\RoleController::class',
    	'App\Http\Controllers\Admin\StundentworkController::class',
    	'App\Http\Controllers\Admin\TextWithBlankController::class',
    	'App\Http\Controllers\Admin\ThemeController::class',
    	'App\Http\Controllers\Admin\UserController::class',
    	'App\Http\Controllers\Admin\YearSubjectController::class',
    ],
    'login_url' => env('LOGIN_URL', '\admin\login'),
    'logout_url' => env('LOGOUT_URL', '\admin\logout'),
];
