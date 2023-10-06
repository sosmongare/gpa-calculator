<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GpaData extends Model
{
    use HasFactory;

    protected $fillable = ['gradeA', 'gradeB', 'gradeC', 'gradeD', 'gpa','ip_address','user_agent','is_mobile'];
}
