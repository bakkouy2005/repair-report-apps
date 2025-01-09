<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'repair_reason',
        'custom_reason', 
        'report_date',
        'repair_date',
    ];
}