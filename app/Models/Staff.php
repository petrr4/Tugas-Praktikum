<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{

    protected $table = 'staff';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nip', 'email', 'nama', 'tanggal_lahir', 'no_hpnn'];
    public $timestamps = false;

    use HasFactory;
}
