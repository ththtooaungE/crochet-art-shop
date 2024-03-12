<?php

namespace App\Exports;

use App\Http\Resources\UserResource;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return UserResource::collection(User::all());
    }
}
