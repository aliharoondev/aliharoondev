<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'portfolios';


    public function detail()
    {
        return $this->hasOne(PortfolioDetail::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
