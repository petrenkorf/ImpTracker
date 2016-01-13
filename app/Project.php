<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model Implements ProjectInterface
{
    protected $table = "projects";
    protected $primaryKey = 'id';

    public $timestamps = false;
}
