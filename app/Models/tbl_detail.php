<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_detail extends Model
{
    use HasFactory;

    protected $table = 'tbl_details';
    // protected $primaryKey = 'did';

    protected $fillable =[
        'dtitle',
        'phone',
        'fblink',
        'instalink',
        'linkedinlink',
        'twitterlink',
        'ytlink',        
    ];

}
