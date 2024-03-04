<?php

// berperan sebagai objek (yg bisa dimanipulasi)
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    use HasFactory;
    // nama colom
    protected $fillable = ['nama_buah', 'harga'];
}
