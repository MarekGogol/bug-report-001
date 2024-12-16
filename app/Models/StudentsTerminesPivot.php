<?php 

namespace App\Models;

// use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;
class StudentsTerminesPivot extends Model
{
    public $table = 'termine_student_termines';

    public function termine()
    {
        return $this->hasOne(Termine::class, 'id', 'termine_id');
    }
}