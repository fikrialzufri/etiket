<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\SoftDeletes;
use Str;

class Event extends Model
{
    use HasFactory, UsesUuid, SoftDeletes;

    protected $table = 'event';
    protected $guarded = ['id'];
    protected $fillable = [
        'nama',
        'kode',
        'slug',
        'jumlah',
        'diskripsi',
        'content',
        'tanggal_mulai',
        'tanggal_selesai',
        'kota_id',
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
                $kode = "EN/" . $no . "/" . rand(0, 900);
            } else {
                $no = str_pad(1, 4, "0", STR_PAD_LEFT);
                $kode = "EN/" . $no . "/" . rand(0, 900);
            }
            $model->kode = $kode;
        });
    }
}