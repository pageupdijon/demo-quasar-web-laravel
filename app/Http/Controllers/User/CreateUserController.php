<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\CreateUser;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
class CreateUserController
{
    /**
     * @param CreateUser $request
     * @param User $user
     * @return RedirectResponse
     */
    public function __invoke(CreateUser $request, User $user): RedirectResponse
    {
        $input = $request->validated();

        User::create($input);

        return redirect()->back();
    }

}
