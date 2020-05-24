<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model{
    protected $table = 'photo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'caption','file_path','upload_time',
    ];

    public $timestamps = false;
}
