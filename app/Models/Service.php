<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name_en', 'name_ar', 'short_description_en', 'short_description_ar', 'image'];
    public function bookings()
    {
        return $this->hasMany(ServiceBooking::class);
    }


}
