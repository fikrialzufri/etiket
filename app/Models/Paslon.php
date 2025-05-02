<?php

namespace App\Models;

use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Str;

class Paslon extends Model
{
    use HasFactory, SoftDeletes, UsesUuid;

    protected $table = 'paslon';

    protected $fillable = [
        'nama',
        'kode',
        'diskripsi'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($paslon) {
            $year = now()->year;
            $totalPaslon = $paslon->withTrashed()->count();
            $kodePaslon = $totalPaslon + 1;
            $kodePaslon = str_pad($kodePaslon, 2, '0', STR_PAD_LEFT);

            $paslon->kode = $kodePaslon;
            // add other column as well
        });
    }


    public function setNamaAttribute($value)
    {
        $this->attributes['nama'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    function hasPeserta()
    {
        // return $this->hasOne(Jabatan::class, 'id', 'jabatan_id');
        return $this->hasMany(Peserta::class);
    }

    function hasEntrance()
    {
        return $this->hasMany(Entrance::class);
    }

    // hasEntrance by id
    function hasEntranceById($id)
    {
        return $this->hasEntrance()->where('event_id', $id);
    }
}
