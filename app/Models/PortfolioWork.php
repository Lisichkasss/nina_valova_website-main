<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioWork extends Model
{
    protected $fillable = ['title'];
    use HasFactory;
}
