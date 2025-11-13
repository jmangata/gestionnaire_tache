<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    protected $fillable = [
        'user_id',
        'titre',
        'contenue',
        'date'
    ];
    
    //
    public function user(): BelongsTo
    { 
        return $this->belongsTo(User::class);
    }

    public function commentaire(): BelongsTo
    { 
        return $this->belongsTo(Commentaire::class);
    }
}
