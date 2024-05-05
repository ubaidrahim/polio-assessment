<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Household;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['name','household_id'];

    public function household()
    {
        return $this->belongsTo(Household::class);
    }
}
