<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commentaire extends Model
{
     protected $fillable = [
        'contenue',
        'date'
    ];
    
    public function user(): BelongsTo
    { 
        return $this->belongsTo(User::class);
    }

    public function article(): BelongsTo
    { 
        return $this->belongsTo(Article::class);
    }

}
