<?php

namespace App\Http\Controllers\User;

use App\Facades\Pagination;
use App\Http\Requests\EditUser;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;

class EditUserController
{
    /**
     * @param EditUser $request
     * @param User $user
     * @return RedirectResponse
     */
    public function __invoke(EditUser $request, User $user): RedirectResponse
    {
        $input = $request->validated();

        $user->update($input);

        return redirect()->back();
    }

}
