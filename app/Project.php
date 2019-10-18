<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $guarded = [];
    // protected $fillable = [ 'title' , 'description' ];

    protected $table = 'projects';
}
