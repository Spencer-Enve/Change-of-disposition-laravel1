<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    public $timestamps = FALSE;

    protected $table = 'change_disp';

    public $primaryKey = 'id';

    const CREATED_AT = 'date_entered';

}
