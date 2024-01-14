<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Yang Boleh diisi, sisanya gaboleh
    // protected $fillable = ['title', 'excerpt','body'];

    //Yang Gaboleh diisi, sisanya boleh
    protected $guarded = ['id'];
    protected $with = ['category','author'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(user::class, 'user_id');
    }

    public function scopeFilter($query, array $filters)
    {   
        //tag when dari laravel
        //null coalescing operator
        //sama aja kaya isset($filtes['search']) setelah `,` kalo bernilai true suruh apa
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query   ->where('title', 'like', '%'. $search . '%')
                            ->orWhere('body', 'like', '%'. $search . '%');
        });

        //callback
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query -> whereHas('category', function($query) use($category){
                $query->where('slug', $category);
            });
        });

        //arrow function
        $query->when($filters['author'] ?? false, fn($query, $author)=>
            $query -> whereHas('author', fn($query)=>
                $query->where('username', $author)
            )
        );
    }
}
