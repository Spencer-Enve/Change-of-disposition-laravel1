<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RimFirst extends Model
{
    use HasFactory;

    public $timestamps = FALSE;

    protected $table = 'product_id_description';

    public $primaryKey = 'id';
}
