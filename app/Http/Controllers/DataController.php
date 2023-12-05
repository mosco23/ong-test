<?php

    namespace App\Http\Controllers;

    use App\Models\Slider;
    use App\Models\Page;

    class DataController extends Controller
    {

        // public function index(){
        //     return $this->getPage();
        // }

        public function __invoke($slug = 'home') {
            
            $page = Page::where('slug', strtolower($slug));

            // dd($page->get());
            if(!$page->exists()){
                $page = Page::where('slug', 'home');
            }
            
            $page = $page->with(
                    [
                        'sections' => function($q){
                            $q->wherePivot('active', true);
                            $q->orderBy('rang', 'ASC');
                            $q->with('items');
                            // $q->select(['name', 'vue', 'title', 'subtitle', 'description', 'img']);
                        },
                        'template',
                        // 'sectionitems',
                    ]
                )
                ->get();
            $page = $page->toArray()[0];
        
            $data['template'] = $page['template']['vue'] ?? 'master';
            $data['pageName'] = $page['name'] ?? env('APP_NAME');
            $data['pageTitle'] = $page['title'] ?? NULL;
            $data['page'] = $page;
            $data['pageKeywords'] = $page['keywords'] ?? NULL ;
            $data['pageDescription'] = $page['description'] ?? NULL ;
            $lesSections = $page['sections'] ?? [];
            $data['tabSection'] = $lesSections;
            $data['slug'] = $slug;
            // foreach($lesSections AS $index => $sect):
            //     $data['tabSection'][$index]['vue'] = $sect['vue'];
            //     $data['tabSection'][$index]['items'] = $sect['items'];
            // endforeach;
            // $data['tabSection'] ??= $page['sections'];
            // $data['data'] = self::getData($data['tabSection']);
            // $data['tabSection'] = Arr::keyBy($data['tabSection'], 'vue');
            // dd($page);
            return view('page', $data);

        }

        // public static function getSlider(){
        //     return self::arrayByKey(Slider::with('boutons')->where('active', true)
        //             ->orderBy('rang', 'ASC')->get()->toArray());
        // }


        public static function getData(array $sections): array{
            $data = [];
            foreach($sections AS $section):
                $method  = "get".ucfirst($section['vue']);
                if(method_exists(self::class, $method)):
                    $data[$section['vue']] = self::arrayByKey(call_user_func("self::$method")) ;
                endif;
            endforeach;
            return $data;
        }

        public static function getThumbnailImage(string $image, $suffixe = 'cropped'): string{
            $extension = pathinfo($image)[ "extension"];
            return str_replace(".$extension", "-$suffixe.$extension", $image);

        }

        public static function arrayByKey(array $array, string $key = 'id'): array{
            $data = [];
            foreach($array AS $k => $r):
                if(array_key_exists($key, $r)):
                    $data[$r[$key]] = $r;
                else:
                    $data[$k] = $r;
                endif;
            endforeach;
            return $data;
        }

        public static function arrayGroupByKey(array $array, string $key = NULL): array{
            if(!$key):
                return $array;
            endif;
            $data = [];
            foreach($array AS $k => $r):
                if(array_key_exists($key, $r)):
                    $data[$r[$key]][] = $r;
                else:
                    $data[$k] = $r;
                endif;
            endforeach;
            return $data;
        }
    }