<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    // The attributes that are mass assignable
    protected $fillable = ['name', 'role_id'];

    // Define the inverse of the relationship: a permission belongs to a role
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
