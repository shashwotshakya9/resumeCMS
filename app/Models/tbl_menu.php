<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_menu extends Model
{
    use HasFactory;

    protected $table = 'tbl_menu';
    protected $primaryKey = 'mid';

}
