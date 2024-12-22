<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Post extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;
    const TABLE = 'posts';
    const _ID = 'id';
    const _CONTENT = 'content';
    const _STATUS = 'status';
    const _BACKGROUND = 'background';
    const _USER_ID = 'user_id';
    const _FEELING = 'feeling';
    const _CHECKIN = 'checkin';
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
        self::_CONTENT,
        self::_STATUS,
        self::_BACKGROUND,
        self::_USER_ID,
        self::_FEELING,
        self::_CHECKIN,
        self::_CREATED_AT,
        self::_UPDATED_AT,
        self::_DELETED_AT,
    ];
}
