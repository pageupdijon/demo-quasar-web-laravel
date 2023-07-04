<?php

namespace App\Http\Controllers\User;

use App\Facades\Pagination;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
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
        $input = Validator::validate($request->all(), [
            'search' => ['sometimes', 'nullable', 'string'],
            'filters' => ['sometimes', 'nullable', 'array'],
        ]);

        $search = $input['search'] ?? null;
        $active = $input['filters']['status']['value'] ?? null;

        $query =  DB::table('users as u')
            ->whereSearch($search, ['u.name', 'u.username', 'u.email'])
            ->when($active !== null, function (Builder $query) use ($active) {
                $query->where('u.active', '=', $active);
            })
            ->select([
                'id',
                'name',
                'username',
                'email',
                'active'
            ]);

        return Pagination::get($request, $query);
    }
}
