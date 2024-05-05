<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Division;
use App\Models\Tehsil;

class District extends Model
{
    use HasFactory;

    protected $fillable = ['name','division_id'];

    public function tehsil()
    {
        return $this->hasMany(Tehsil::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
