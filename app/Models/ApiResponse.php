<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiResponse extends Model
{
    use HasFactory;

    public $message;
    public $errors;
    public $data;
    public $httpStatusCode;

    function __construct($message, $errors = [], $data = []){
        $this -> message = $message;
        $this -> errors = $errors;
        $this -> data = $data; 
    }

}
