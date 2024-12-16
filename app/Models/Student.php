<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * Buggy hasOneThrough relation
     */
    public function termine()
    {
        return $this->through('terminesPivot')
                    ->has('termine');
    }


    /**
     * Working hasOneThrough relation
     */
    // public function termine()
    // {
    //     return $this->hasOneThrough(Termine::class, StudentsTerminesPivot::class, 'student_id', 'id', 'id', 'termine_id');
    // }



    public function terminesPivot()
    {
        return $this->hasMany(StudentsTerminesPivot::class);
    }
}