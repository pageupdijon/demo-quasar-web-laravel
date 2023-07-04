<?php

namespace App\Http\Controllers\Divers;

use App\Facades\Pagination;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;

class ShowDiversViewController
{
    /**
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request): Response
    {
        return Inertia::render('divers/Divers', [
        ]);
    }

}
