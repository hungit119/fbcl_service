<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Conversation extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;
    const TABLE = 'conversations';
    const _ID = 'id';
    const _TITLE = 'title';
    const _IS_GROUP = 'is_group';
    const _CREATED_AT = 'created_at';
    const _UPDATED_AT = 'updated_at';
    const _DELETED_AT = 'deleted_at';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::_ID,
        self::_TITLE,
        self::_IS_GROUP,
        self::_CREATED_AT,
        self::_UPDATED_AT,
        self::_DELETED_AT,
    ];
}
