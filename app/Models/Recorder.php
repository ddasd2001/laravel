<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Recorder extends Model implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    protected $table = 'log_record';//确定表名称
    protected $primaryKey = 'id';//确定主键,不设置的话默认主键ID
    public $timestamps = false;//时间戳#
//    protected $fillable = ['name', 'email', 'password'];   //可修改的数据
    protected $guarded = ['id']; //不可修改
//    protected $hidden = ['password', 'remember_token'];//隐藏字段


}