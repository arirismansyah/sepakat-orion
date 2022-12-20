<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_regsosek_art extends Model
{
    use HasFactory;
    protected $table = 'data_regsosek_art';

    public function rt()
    {
        return $this->belongsTo(data_regsosek_rt::class, 'R700', 'R700');
    }

}
