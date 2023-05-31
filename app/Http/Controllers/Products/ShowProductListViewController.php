<?php

namespace App\Http\Controllers\Products;

use Inertia\Inertia;
use Inertia\Response;

class ShowProductListViewController
{
    /**
     * @return Response
     */
    public function __invoke(): Response
    {
        return Inertia::render('products/ProductList', [

        ]);
    }
}
