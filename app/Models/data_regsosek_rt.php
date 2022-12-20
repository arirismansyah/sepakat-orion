<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_regsosek_rt extends Model
{
    use HasFactory;
    protected $table = 'data_regsosek_rt';

    public function art_kk()
    {
        return $this->hasOne(data_regsosek_art::class, 'R700', 'R700');
    }
}
