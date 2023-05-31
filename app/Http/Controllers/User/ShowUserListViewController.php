<?php

namespace App\Http\Controllers\User;

use Inertia\Inertia;
use Inertia\Response;

class ShowUserListViewController
{
    /**
     * @return Response
     */
    public function __invoke(): Response
    {
        return Inertia::render('users/UserList', [

        ]);
    }
}
