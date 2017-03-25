<?php

    App::before(function($request) {

        $redirects = Martin\Redirect\Models\Redirect::where('active', 1)->get();

        foreach($redirects as $redirect) {
            \Route::get($redirect->source, function() use ($redirect) {
                if($redirect->type == 'content') {
                    return file_get_contents(base_path($redirect->target));
                } else {
                    return \Redirect::to($redirect->target);
                }
            });
        }

    });

?>