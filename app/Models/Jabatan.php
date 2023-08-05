<?php

namespace App\Models;

use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Str;

class Jabatan extends Model
{
    use HasFactory, UsesUuid, SoftDeletes;

    protected $table = 'jabatan';
    protected $guarded = ['id'];
    protected $fillable = [
        'nama',
        'diskripsi',
        'kode',
        'slug',
        'jumlah',
        'status',
    ];

    public function setNamaAttribute($value)
    {
        $this->attributes['nama'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public static function boot()
    {
        parent::boot();

        // bikin Kode autoamasi

        self::creating(function ($model) {
            $countModel = $model->withTrashed()->count();
            if ($countModel >= 1) {
                $no = str_pad($countModel + 1, 4, "0", STR_PAD_LEFT);
                $kode = "JB/" . $no . "/" . rand(0, 900);
            } else {
                $no = str_pad(1, 4, "0", STR_PAD_LEFT);
                $kode = "JB/" . $no . "/" . rand(0, 900);
            }
            $model->kode = $kode;
        });
    }
}