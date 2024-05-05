<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;
use App\Models\UnionCouncil;

class Household extends Model
{
    use HasFactory;

    protected $fillable = ['name','union_council_id'];

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function unioncouncil()
    {
        return $this->belongsTo(UnionCouncil::class);
    }
}
