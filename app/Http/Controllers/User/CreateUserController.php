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
        $input['password'] = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password

        User::create($input);

        return redirect()->back();
    }

}
