<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $table = 'users';
    public $timestamps =  false;
    protected $fillable = [
        'name',
        'email',
        'namaLengkap',
        'foto',
        'alamat',
        'password',
        'noHp',
        'created_at',
        'updated_at',
        'level',
    ];
    public function pengaduan()
    {
        return $this->belongsTo(pengaduan::class, 'id');
    }
}
