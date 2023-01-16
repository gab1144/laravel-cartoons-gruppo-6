<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Cartoon extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'year', 'creator', 'rating', 'genre', 'runtime_in_minutes', 'episodes', 'image'];

    public static function generateSlug($string)
    {
        $slug = Str::slug($string, '-');
        $original_slug = $slug;
        $c = 1;
        $cartoon_exists = Cartoon::where('slug', $slug)->first();

        while ($cartoon_exists) {
            $slug = $original_slug . '-' . $c;
            $cartoon_exists = Cartoon::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }
}
