<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Query incomplete tasks from DB
    public static function incomplete()
    {
        return static::where('completed', 0);
    }
    
    // Query complete tasks from DB
    public static function complete()
    {
        return static::where('completed', 1);
    }
}
