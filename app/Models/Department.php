<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model {
    use HasFactory;

     protected $fillable = [

      'd_name', 'd_fullname', 'd_mobile', 'd_email', 'd_website', 'd_image', 'd_address', 'd_admin', 'd_status'
    ];
}
