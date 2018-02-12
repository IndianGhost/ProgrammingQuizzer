<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'choice';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['content', 'isCorrect', 'question_id'];

    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
