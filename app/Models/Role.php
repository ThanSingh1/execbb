<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // The attributes that are mass assignable
    protected $fillable = ['name'];

    // One-to-one relationship with Permission
    public function permission()
    {
        return $this->hasOne(Permission::class);
    }
}
