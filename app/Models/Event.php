<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\SoftDeletes;
use Str;
use Carbon\Carbon;

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
    // protected $casts = [
    //     // 'started_at' => 'datetime',
    //     // 'due_time' => 'datetime',
    //     'tanggal_mulai'=> 'datetime',
    //     'tanggal_selesai'=> 'datetime',
    // ];

    public function setNamaAttribute($value)
    {
        $this->attributes['nama'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getStartAttribute()  {
        return tanggal_indonesia_waktu($this->tanggal_mulai);
    }

    public function getEndAttribute()  {
        return tanggal_indonesia_waktu($this->tanggal_selesai);
    }

    function hasEntrance()
    {
        return $this->hasMany(Entrance::class,'event_id','id');
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
