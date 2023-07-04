<?php

namespace App\Http\Controllers\Home;

use Inertia\Inertia;
use Inertia\Response;

class HomeController
{
    /**
     * @return Response
     */
    public function home(): Response
    {
        return Inertia::render('Home', [

        ]);
    }
}
