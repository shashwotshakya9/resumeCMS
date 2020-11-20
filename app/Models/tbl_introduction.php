<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_introduction extends Model
{
    use HasFactory;

    protected $table = 'tbl_introductions';
    // protected $primaryKey = 'iid';
    protected $fillable =[
        'intro','email','image'
    ];

    
}
