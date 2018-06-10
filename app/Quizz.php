<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quizz extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'quizz';

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
    protected $fillable = ['language', 'description', 'logo'];

    public static $rules = [
        'language'      =>  'required',
        'description'   =>  'required',
        'logo'          =>  'required'
    ];

    public function question()
    {
        return $this->hasMany('App\Question');
    }
}
