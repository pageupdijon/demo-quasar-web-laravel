<?php

namespace App\Http\Controllers\User;

use App\Facades\Pagination;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;

class DeleteUserController
{
    /**
     * @param Request $request
     * @param User $user
     * @return RedirectResponse
     */
    public function __invoke(Request $request, User $user): RedirectResponse
    {
        $user->delete();

        return redirect()->back();
    }

}
