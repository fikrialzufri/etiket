<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\SoftDeletes;
use Str;

class Entrance extends Model
{
    use HasFactory, UsesUuid, SoftDeletes;

    protected $table = 'entrance';
    protected $guarded = ['id'];
    protected $fillable = [
        'tanggal_masuk',
        'peserta_id',
        'event_id',
    ];

    public function hasJabatan()
    {
        return $this->hasOne(Jabatan::class, 'id', 'jabatan_id');
    }

    public function getJabatanAttribute()
    {
        if ($this->hasJabatan) {
            return $this->hasJabatan->nama;
        }
    }
    public function hasPeserta()
    {
        return $this->hasOne(Peserta::class, 'id', 'peserta_id');
    }

    public function getPesertaAttribute()
    {
        if ($this->hasPeserta) {
            return $this->hasPeserta->nama;
        }
    }
    public function hasBidang()
    {
        return $this->hasOne(Bidang::class, 'id', 'bidang_id');
    }

    public function getBidangAttribute()
    {
        if ($this->hasBidang) {
            return $this->hasBidang->nama;
        }
    }
}
