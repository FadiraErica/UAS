<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Onlinecourse extends Model
{
    protected $table = 'course_categories';
    protected $primaryKey = 'Course_Id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'Course_Id',
        'Course_Name',
        'Descriptions',
        'Category',
        'Start_Date',
    ];
}
