<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicCalendarType extends Model
{
    protected $table = "academic_calendar_types";

    public function AcademicCalendar(){ 
        return $this->hasMany('App\Models\AcademicCalendar'); 
    }
}
