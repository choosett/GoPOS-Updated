<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'vat_number',
        'business_phone',
        'business_email',
        'country',
        'city',
        'district',
        'address',
        'zip_code',
    ];

    /**
     * Define the relationship with Users.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
