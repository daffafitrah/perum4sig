<?php

namespace App\Models;

use App\Models\Kecamatan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perumahan extends Model
{
    use HasFactory;
    protected $table = 'perum';
    protected $primaryKey = 'id_perum';
    protected $guarded = ['id_perum'];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kec', 'id_kec');
    }

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_pers', 'id_pers');
    }
}
