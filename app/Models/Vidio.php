<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vidio extends Model
{
    use HasFactory;

        /**
     * guarded
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * image
     *
     * @return Attribute
     */
}