<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'role_id', 'email'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
