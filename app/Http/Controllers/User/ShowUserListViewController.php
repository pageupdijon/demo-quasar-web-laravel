<?php

namespace App\Http\Controllers\User;

use App\Facades\Pagination;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;

class ShowUserListViewController
{
    /**
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request): Response
    {
        return Inertia::render('users/UserList', [
            'datatable' => fn() => $this->getUsers($request)
        ]);
    }

    private function getUsers(Request $request): object
    {
        $query =  DB::table('users as u')
            ->select([
                'id',
                'name',
                'username',
                'email',
            ])->orderBy('updated_at', 'desc');

        return Pagination::get($request, $query);
    }
}
