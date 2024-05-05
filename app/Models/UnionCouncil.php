<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Household;
use App\Models\Tehsil;

class UnionCouncil extends Model
{
    use HasFactory;

    protected $fillable = ['name','tehsil_id'];

    public function household()
    {
        return $this->hasMany(Household::class);
    }

    public function tehsil()
    {
        return $this->belongsTo(Tehsil::class);
    }
}
