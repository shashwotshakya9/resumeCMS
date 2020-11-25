<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_aboutme extends Model
{
    use HasFactory;
    protected $table = 'tbl_aboutmes';
    // protected $primaryKey = 'aid';
    protected $fillable =[
        'atitle',
        'adescription',
        'image',
        'acontenttitle_one',
        'acontentdescription_one',
        'acontenttitle_two',
        'acontentdescription_two',
        'acontenttitle_three',
        'acontentdescription_three',
        
    ];

}
