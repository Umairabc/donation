<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $fillable = [
        'donation_type',    
        'full_name',        
        'phone_number',     
        'email',            
        'town_city',       
        'price',           
        'donation_method',
    ];
}
