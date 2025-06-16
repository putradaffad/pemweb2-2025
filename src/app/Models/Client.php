<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 
    ];

    /**
     * Get the products associated with the client.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'client_product')
            ->withPivot('quantity')
            ->withTimestamps();
    }
}
