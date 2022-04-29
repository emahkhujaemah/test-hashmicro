<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karakter extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function usermenu_karakter_url()
    {
        return 'nilai-pelajaran';
    }
}
