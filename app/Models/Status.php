<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'news';
    protected $fillable = ['content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}