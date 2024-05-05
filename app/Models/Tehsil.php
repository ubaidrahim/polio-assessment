<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UnionCouncil;
use App\Models\District;

class Tehsil extends Model
{
    use HasFactory;

    protected $fillable = ['name','district_id'];

    public function unioncouncil()
    {
        return $this->hasMany(UnionCouncil::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
