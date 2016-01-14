<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\IssueInterface;

class Issue extends Model Implements IssueInterface
{
    protected $table      = "issues";
    protected $primaryKey = 'id';

    protected $guarded = 'id';
    protected $fillable = [
        'token', 
        'line', 
        'file', 
        'message'
    ];

    public $timestamps = false;

    protected $validationRUles = [
        'token'   => 'required',
        'stack'   => 'required|array',
        'line'    => 'required|integer',
        'file'    => 'required|string',
        'message' => 'required|string'
    ];

    public function getValidationRules()
    {
        return $this->validationRUles;
    }
}
