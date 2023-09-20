<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Page extends Model
    {
        use HasFactory;

        protected $fillable = [
            'template_id',
            'name',
            'slug',
            'title',
            'description',
        ];
        
        public  function sections(){
            return $this->belongsToMany(Section::class, 'page_sections');
        }

        public function pageSections()
        {
            return $this->hasMany(PageSection::class);
        }

        
        public function keywords(){
            return $this->belongsToMany(Keyword::class);
        }
        public function template(){
            return $this->belongsTo(Template::class);
        }
    }