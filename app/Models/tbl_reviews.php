<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_reviews extends Model
{
    use HasFactory;

    protected $table = 'tbl_reviews';
    protected $primaryKey = 'rid';
}
