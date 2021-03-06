<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    public $fillable = ['content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
