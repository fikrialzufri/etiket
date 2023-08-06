<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\SoftDeletes;
use Str;

class Peserta extends Model
{
    use HasFactory, UsesUuid, SoftDeletes;

    protected $table = 'peserta';
    protected $guarded = ['id'];
    protected $fillable = [
        'nama',
        'kode',
        'slug',
        'no_hp',
        'email',
        'bidang_id',
        'jabatan_id',
        'tanggal_lahir',
        'alamat',
        'status',
    ];

    public function setNamaAttribute($value)
    {
        $this->attributes['nama'] = $value;
        $this->attributes['slug'] = Str::slug($value);
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
    public static function boot()
    {
        parent::boot();

        // bikin Kode autoamasi

        self::creating(function ($model) {
            $countModel = $model->withTrashed()->count();
            if ($countModel >= 1) {
                $no = str_pad($countModel + 1, 4, "0", STR_PAD_LEFT);
                $kode = "PSRT/" . $no . "/" . rand(0, 900);
            } else {
                $no = str_pad(1, 4, "0", STR_PAD_LEFT);
                $kode = "PSRT/" . $no . "/" . rand(0, 900);
            }
            $model->kode = $kode;
        });
    }
}