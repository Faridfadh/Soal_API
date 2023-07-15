<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quizzes extends Model
{
    use HasFactory;
    protected $table = 'quizzes';
    protected $primaryKey = 'id';

    protected $fillable = [
    	'title','slug','dueration','category_id','is_paid','cost','validity','total_marks','having_negative_mark','negative_mark','pass_percentage','tags','publish_results_immediately','description','total_questions','instructions_page_id','start_date','end_date','end_date'
        
    ];

 
    public function questionbank_quizzes()
    {
        return $this->hasMany(questionbank_quizzes::class, 'quize_id', 'id');
    }
}
