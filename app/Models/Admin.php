<?php

namespace App\Models;

use App\Models\Resources\Account;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public function account()
    {
        return $this->hasOne(Account::class, 'id', 'id');
    }
}