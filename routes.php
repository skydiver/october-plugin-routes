<?php

    namespace Martin\Redirect;

    use Martin\Redirect\Models\Redirect;

    $redirects = new Redirect();

    $redirects->setConnectionResolver($this->app['db']);
    $redirects->setConnection(\Config::get('database.default'));

    foreach ($redirects->where('active', 1)->get() as $redirect) {
        \Route::get($redirect->redirect_from, function () use ($redirect) {
            $content = file_get_contents(base_path($redirect->redirect_to));
            return $content;
        });
    }

?>