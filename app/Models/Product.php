<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'price',
        'stock',
        'company_id',
        'comment',
        'img_path',
    ];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function scopeFilter($query, $request)
    {
        if ($search = $request->search) {
            $query->where('product_name', 'LIKE', "%{$search}%");
        }

        if ($company_id = $request->company_id) {
            $query->where('company_id', $company_id);
        }

        return $query;
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}