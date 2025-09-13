<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduan';
    protected $primaryKey = 'ID_PENGADUAN';
    public $timestamps = false;
    protected $fillable = [
        'ID_USER',
        'PENGADUAN',
        'LOKASI',
        'NAMA',
        'JENIS',
        'STATUS',
        'DOKUMEN'
    ];
    public function balasan()
    {
        return $this->hasOne(balasan::class, 'ID_PENGADUAN');

    }
    public function users()
    {
        return $this->hasMany(users::class, 'ID_USER');

    }
}
