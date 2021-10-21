<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\String\u;

class Supplier extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
