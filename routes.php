<?php

    App::before(function($request) {

        $redirects = Martin\Redirect\Models\Redirect::where('active', 1)->get();

        foreach($redirects as $redirect) {
            \Route::get($redirect->from, function() use ($redirect) {
                if($redirect->type == 'content') {
                    return file_get_contents(base_path($redirect->to));
                } else {
                    return \Redirect::to($redirect->to);
                }
            });
        }

    });

?>