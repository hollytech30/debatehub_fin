<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faqs';

    protected $fillable = ['question', 'answer'];

    public function scopeSearch($query, $val)
    {
        return $query->where('question', 'like', '%' . $val . '%')->orWhere('question', 'like', '%' . $val . '%');
    }
}
