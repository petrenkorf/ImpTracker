<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model //Implements IssueInterface
{
    protected $table      = "issues";
    protected $primaryKey = 'id';

    public $timestamps = false;

    public static $validationRUles = [
        'token' => 'required',
        'stack' => 'required|array',
        'line'  => 'required|integer',
        'file'  => 'required|string',
        'message' => 'required|string'
    ];
}
