<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone_no', 'city', 'pincode', 'date', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
