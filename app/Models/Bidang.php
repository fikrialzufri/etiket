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

    function hasKpu()
    {
        // return $this->hasOne(Jabatan::class, 'id', 'jabatan_id');
        return $this->hasOne(Bidang::class,'id','parent_id');
    }

    public function getKpuAttribute()
    {
        if ($this->hasKpu) {
            # code...
           return  $this->hasKpu->nama;
        }
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
    function hasPesertaHadir()
    {
        // return $this->hasOne(Jabatan::class, 'id', 'jabatan_id');
        return $this->hasMany(Peserta::class)->where('hadir','Hadir');
    }
    function hasJabatan()
    {
        // return $this->hasOne(Jabatan::class, 'id', 'jabatan_id');
        return $this->hasMany(Jabatan::class);
    }

    function hasEntranceById($id)
    {
        // return $this->hasOne(Jabatan::class, 'id', 'jabatan_id');
        return $this->hasMany(Entrance::class,'bidang_id','id')->where('event_id',$id);
    }

    function hasEntranceByIdPeserta($id)
    {
        // return $this->hasOne(Jabatan::class, 'id', 'jabatan_id');
        $event_id = $id[0];
        $peserta_id = $id[1];
        return $this->hasMany(Entrance::class,'bidang_id','id')->where('event_id',$event_id)->where('peserta_id',$peserta_id);
    }

    public function EnteranceCount($id)
    {
        return $this->hasMany(Entrance::class,'bidang_id','id')->where('event_id',$id);
    }

}
