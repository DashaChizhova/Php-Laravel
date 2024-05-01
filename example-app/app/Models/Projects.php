<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    //создаем, чтобы потом закинуть в нее данные для проверки, которые добавятся в БД projects
    protected $fillable = ['project_name'];
//связи с таб задачи
    public function lists()
    {
        return $this -> hasMany(Tasks::class, 'project_id', 'id');
    }
}
