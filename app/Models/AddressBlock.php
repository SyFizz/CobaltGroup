<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressBlock extends Model
{
    use HasFactory;

    protected $fillable = [
        'network',
        'cidr',
        'type',
        'comment',
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

}
