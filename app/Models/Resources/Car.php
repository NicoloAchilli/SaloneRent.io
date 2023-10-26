<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'plate',
        'brand',
        'model',
        'number_of_seats',
        'number_of_doors',
        'transmission',
        'fuel',
        'price'
    ];

    public function offer()
    {
        return $this->hasOne(Offer::class);
    }
}
