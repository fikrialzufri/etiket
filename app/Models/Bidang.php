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
}