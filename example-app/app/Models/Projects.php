<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    //создаем, чтобы потом закинуть в нее данные, которые добавятся в БД projects
    protected $fillable = ['project_name'];
}
