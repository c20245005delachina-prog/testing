<?php

namespace App\Services;

use App\Models\Publisher;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class PublisherService
{
    public function paginate(
        ?string $search = null, 
        int $perPage = 10
    ): LengthAwarePaginator
    {
        return Publisher::query()
            ->searchData($search)
            ->latestFirst()
            ->paginate($perPage)
            ->withQuerystring();
    }

    public function create(array $data): Publisher
    {
        return DB::transaction(
            fn() => Publisher::create($data)
        );
    }

    public function update()
    {

    }
}