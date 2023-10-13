<?php

namespace App\Models\Resources;

use App\Models\Resources\Admin;
use App\Models\Resources\Staff;
use App\Models\Resources\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'username',
        'password',
        'email',
        'birth',
        'occupation',
        'residence',
        'last_access',
        'remember_token'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }

}
