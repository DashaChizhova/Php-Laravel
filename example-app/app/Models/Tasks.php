<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;
   
    
    protected $fillable = ['project_id','status_id', 'type_id', 'title', 'description'];
}
