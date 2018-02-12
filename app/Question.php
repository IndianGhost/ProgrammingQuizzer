<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'question';

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
    protected $fillable = ['content', 'quizz_id'];

    public function quizz()
    {
        return $this->belongsTo('App\Quizz');
    }

    public function choice()
    {
        return $this->hasMany('App\Choice');
    }
}
