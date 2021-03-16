<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = ‘my_posts’;
    protected $primaryKey = ‘my_id’;
    protected $keyType = ‘string’;
    public $incrementing = false;

}
