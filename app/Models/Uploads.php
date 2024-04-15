<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploads extends Model
{
    use HasFactory;

    protected $table ='uploads';

    protected $primaryKey = 'id';

    protected $fillable = [
        'data_file',
        'tipe',
        'created_at',
        'updated_at'
    ];
}
