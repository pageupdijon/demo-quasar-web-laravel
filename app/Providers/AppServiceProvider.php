<?php

namespace App\Providers;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Builder::macro('whereSearch', function (?string $search, array $columns = []) {
            return $this->when($search && $columns, function (Builder $query) use ($search, $columns) {
                $query->where(function (Builder $query) use ($columns, $search) {
                    foreach ($columns as $column) {
                        $query = $query->orWhereRaw("UNACCENT({$column}) ILIKE UNACCENT(?)", ["%{$search}%"]);
                    }
                });
            });
        });
    }
}
