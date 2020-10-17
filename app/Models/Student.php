<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Student extends Model
{
    use HasFactory;

    protected $table = "student";

    public function user()
    {
        return $this->hasOne('App\Models\User');
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }

    public function subject()
    {
        return $this->belongsToMany('App\Models\Subject')->as('student_subject');
    }

    public function schedule()
    {
        return $this->belongsToMany('App\Models\Schedule')
                    ->as('student_attendance')
                    ->withPivot([
                        'time',
                        'status'
                    ]);
    }
}