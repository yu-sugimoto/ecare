<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Routing\Loader\ProtectedPhpFileLoader;

class Record extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'origin',
        'content',
    ];

    // Userモデルとのリレーションを定義 (1対多) 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
