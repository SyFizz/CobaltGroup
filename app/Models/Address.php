<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'address_block_id',
        'address',
        'cidr',
        'tag',
    ];

    public function addressBlock()
    {
        return $this->belongsTo(AddressBlock::class);
    }



}
