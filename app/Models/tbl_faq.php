<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_faq extends Model
{
    use HasFactory;
    protected $table = 'tbl_faqs';
    // protected $primaryKey = 'fid';
    
    protected $fillable =[
        'question_one',
        'answer_one',
        'question_two',
        'answer_two',
        'question_three',
        'answer_three',
        'question_four',
        'answer_four',
        'question_five',
        'answer_five',        
    ];
}
