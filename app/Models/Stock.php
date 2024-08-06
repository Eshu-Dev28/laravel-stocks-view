<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'INVNO',
        'INVDE',
        'PROID',
        'QTY',
        'MRB',
        'BSCST',
        'LDCST',
        'SECST',
        'RDATE',
    ];
}
