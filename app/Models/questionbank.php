<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questionbank extends Model
{
    use HasFactory;
    protected $table = 'questionbank';
    protected $primaryKey = 'id';

    protected $fillable = [
        'subject_id','topic_id','question_tags','slug','question_type','question','question_file','question_file_is_url','total_answers','answers','total_correct_answers','correct_answers','marks','time_to_spend','difficulty_level','hint','explanation','explanation_file','status'
    ];
}
