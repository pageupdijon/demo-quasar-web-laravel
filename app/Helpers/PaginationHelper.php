<?php

namespace App\Helpers;

use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class PaginationHelper
{
    /**
     * @param Request $request
     * @param Builder $query
     * @return object
     * @throws ValidationException
     */
    public function get(Request $request, Builder $query): object
    {
        $validator = Validator::make($request->all(), [
            'page' => ['sometimes', 'nullable', 'integer', 'min:1'],
            'rowsPerPage' => ['sometimes', 'nullable', 'integer'],
            'sortBy' => ['sometimes', 'nullable', 'string'],
            'descending' => ['sometimes', 'nullable', 'in:true,false']
        ]);

        if ($validator->fails()) {
            return (object)[];
        }

        $pagination = $validator->validated();

        $page = $pagination['page'] ?? 1;
        $rowPerPage = $pagination['rowsPerPage'] ?? 15;
        $offset = ($page - 1) * $rowPerPage;
        $total = $query->count();

        if(isset($pagination['sortBy'])){
            $direction = $pagination['descending'] === 'false' ? 'asc' : 'desc';
            $column = $pagination['sortBy'];
            $query = $query->orderBy($column, $direction);
        }

        if(!$rowPerPage){
            $items = $query->get();
        } else {
            $items = $query->offset($offset)->limit($rowPerPage)->get();
        }

        return (object)[
            'page' => $page,
            'rowPerPage' => $rowPerPage,
            'total' => $total,
            'items' => $items,
        ];
    }
}
