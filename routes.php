<?php

    App::before(function($request) {

        $routes = Martin\Routes\Models\Route::where('active', 1)->get();

        foreach($routes as $route) {
            \Route::get($route->source, function() use ($route) {
                if($route->type == 'content') {
                    return file_get_contents(base_path($route->target));
                } else {
                    return \Redirect::to($route->target);
                }
            });
        }

    });

?>