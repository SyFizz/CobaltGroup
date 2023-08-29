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

    public function generateAddresses()
    {
        //Generate addresses for the block with network and cidr
        $network = $this->network;
        $cidr = $this->cidr;
        $ip = ip2long($network);
        $nm = $cidr < 32 ? -1 << (32 - $cidr) : 0;
        $nw = $ip & $nm;
        $bc = $nw | ~$nm;
        for ($ip = $nw; $ip <= $bc; $ip++) {
            Address::create([
                'address_block_id' => $this->id,
                'address' => long2ip($ip),
                'cidr' => $this->cidr,
            ]);
        }

    }

}
