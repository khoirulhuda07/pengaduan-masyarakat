<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class balasan extends Model
{
    use HasFactory;
    protected $table = 'balasan';
    public $timestamps = false;
    protected $fillable = ['ID_PENGADUAN','KETERANGAN'];

    public function pengaduan()
    {
        return $this->belongsTo(pengaduan::class, 'ID_PENGADUAN');
    }

}
