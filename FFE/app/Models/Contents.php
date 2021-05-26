<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'class_contents',
        'page_id',
        'content',
        'titre_content',
        'created_at',
        'updated_at',
    ];

    public function pages() {
        return $this->belongsTo(Pages::class);
    }
}
