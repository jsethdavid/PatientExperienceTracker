<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey_Responses extends Model
{
    use HasFactory;

    protected $table = 'SURVEY_RESPONSES';    
    public $timestamps = false;
}
