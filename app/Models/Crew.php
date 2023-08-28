<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_photo',
         'firstname',
          'lastname',
           'address',
            'birthdate',
             'phone',
        'mother',
         'spouse',
          'rank',
           'src',
            'sbook',
             'sbook_date_issued',
        'sbook_expiry_date',
         'sbook_place_issued',
          'pport',
           'pport_date_issued',
        'pport_expiry_date',
         'pport_place_issued',
          'coc_date_issued',
        'coc_expiry_date',
         'us_visa',
          'yfever',
           'status',
            'radio_option'
    ];
    
}
