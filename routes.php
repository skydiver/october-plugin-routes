<?php

    App::before(function($request) {

        $routes = Martin\Routes\Models\Route::where('active', 1)->get();

        foreach($routes as $route) {
            \Route::get($route->source, function() use ($route) {
                if($route->type == 'content') {
                    return response(\File::get(base_path($route->target)))
                        ->header('Content-Type', $route->content_type);
                } else {
                    return \Redirect::to($route->target);
                }
            });
        }

    });

?>