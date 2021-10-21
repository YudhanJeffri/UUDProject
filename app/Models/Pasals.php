<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ayats;

class Pasals extends Model
{
    use HasFactory;
    protected $table = "pasals";
    protected $fillable = ['pasal', 'bab', 'judul_bab'];
    public function ayats()
    {
        return $this->hasMany(Ayats::class, 'pasal');
    }
}
