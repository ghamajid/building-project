<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use HasFactory;

  protected $fillable = [
    'name','guard_name'
  ];

  function permissions(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
  {
    return $this->belongsToMany(
      Permission::class,
      'role_has_permissions',
      'role_id',
      'permission_id'
    );
  }

  function users(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
  {
    return $this->belongsToMany(
      User::class,
      'role_user',
      'role_id',
      'user_id'
    );
  }
}
