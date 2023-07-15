<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questionbank_quizzes extends Model
{
    use HasFactory;

    // public function quizzes()
    // {
    //     return $this->hasMany('App\Models\quizzes', 'quize_id');
    // }
    protected $table = 'questionbank_quizzes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'questionbank_id','quize_id','subject_id','marks'
    ];
    public function questionbank()
    {
        return $this->hasOne(questionbank::class, 'id', 'questionbank_id');
    }

    public function quizzes()
    {
        return $this->hasOne(quizzes::class, 'id', 'quize_id');
    }
}
