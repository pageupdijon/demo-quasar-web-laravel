<?php

namespace App\Http\Controllers\Book;

use Inertia\Inertia;
use Inertia\Response;

class ShowBookListViewController
{
    /**
     * @return Response
     */
    public function __invoke(): Response
    {
        return Inertia::render('books/BookList', [

        ]);
    }
}
