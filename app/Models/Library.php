<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Books;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Library extends Model
{
    use HasFactory, HasUuids;
    protected $primaryKey = 'library_id';
    protected $keyType = 'string';
    protected $fillable =
        [
            'name',
            'address'
        ];
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
    protected static function boot(){
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
