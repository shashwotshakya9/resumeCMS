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
        'atitle','adescription','aimage','acontenttitle','acontentdescription'
    ];

}
