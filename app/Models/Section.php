<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Section extends Model
    {
        use HasFactory;

        protected $fillable = [
            'name',
            'vue',
            'title',
            'subtitle',
            'description',
            'img',
            'option'
        ];


        public  function pages(){
            return $this->belongsToMany(Page::class, 'page_sections');
        }

        public function items(){
            return $this->belongsToMany(Article::class, 'sectionitems', 'section_id', 'article_id');
        }

    }