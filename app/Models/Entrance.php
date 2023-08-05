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
}