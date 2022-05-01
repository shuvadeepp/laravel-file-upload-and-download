<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file_upload extends Model
{
    use HasFactory;
    protected $table = "larave_file_uploads";
    public $timestamps = false;
}
