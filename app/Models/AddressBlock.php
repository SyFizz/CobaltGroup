<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AddressBlock extends Model
{
    use HasFactory;

    protected $fillable = [
        'network',
        'cidr',
        'type',
        'comment',
    ];

    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }

}
