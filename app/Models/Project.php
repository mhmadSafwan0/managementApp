<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory , sluggable;

    protected $guarded =[];


    public function users()
    {
        return $this->belongsToMany(user::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return[
            'slug'=>[
                'source'=>'project'
            ]
        ];
    }


}
