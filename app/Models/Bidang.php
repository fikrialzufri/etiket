<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\SoftDeletes;
use Str;

class Bidang extends Model
{
    use HasFactory, UsesUuid, SoftDeletes;

    protected $table = 'bidang';
    protected $guarded = ['id'];
    protected $fillable = [
        'nama',
        'diskripsi',
        'slug',
        'kode',
        'jumlah',
        'status',
    ];

    public function setNamaAttribute($value)
    {
        $this->attributes['nama'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    function hasEntrance()
    {
        // return $this->hasOne(Jabatan::class, 'id', 'jabatan_id');
        return $this->hasMany(Entrance::class,'bidang_id','id');
    }

    function hasPeserta()
    {
        // return $this->hasOne(Jabatan::class, 'id', 'jabatan_id');
        return $this->hasMany(Peserta::class);
    }

    function hasEntranceById($id)
    {
        // return $this->hasOne(Jabatan::class, 'id', 'jabatan_id');
        return $this->hasMany(Entrance::class,'bidang_id','id')->where('event_id',$id);
    }

    public function EnteranceCount($id)
    {
        return $this->hasMany(Entrance::class,'bidang_id','id')->where('event_id',$id);
    }
}
