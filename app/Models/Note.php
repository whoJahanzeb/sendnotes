<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasUuids;
    public $guareded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
