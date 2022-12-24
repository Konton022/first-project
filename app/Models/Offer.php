<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $table = 'offers';
    protected $fillable = ['address', 'install_price', 'monthly_price', 'type_lm', 'provider_id', 'lm_checkup_id'];
}
