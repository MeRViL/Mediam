<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site\Slider;
use App\Models\Site\Setting;
use App\Models\Site\Post;
use App\Models\Site\Category;
use Illuminate\Database\Eloquent\Builder;

class PublicController extends Controller
{
    public function public(){
        
        $menu = Category::where('public', 1)->get()->sortBy('position');
        $sliders = Slider::all();
        $setting = Setting::first();
        // return view('public.main', [
        return view('vie.main', [
            'menu' => $menu,
            'sliders' => $sliders,
            'setting' => $setting,
            'post' => Post::where('public', 1)->where('slug', 'main')->first()
        ]);
    }
    public function getPage($category, $post = null)
    {
         //$posts = Post::where('slug', $post_slug)->where('public', 1)->firstOrFail();
        
       
        $menu = Category::where('public', 1)->get()->sortBy('position');
        $category = Category::where('slug', $category )->first()   ;
        //dd($category) ;
        if($post == null){
            if($category->posts->count() == 0){
                abort(404);
            }elseif($category->posts->count() > 1 && $post == null){
                $view = 'pages';
                $category = $category;
            }else {
                $view = 'page';
                //$category = $category;
                $post = $category->posts->first();
            }
        }else{
            $view = 'page';
                //$category = $category;
                $post = $category->posts->where('slug', $post)->first();
        }
        
        
        
        // dd($post);
        //dd($category->posts->count());
        $setting = Setting::first();
        //$post = Post::where('slug', $slug)->where('public', 1)->firstOrFail();

        
        //dd($page);
        return view('vie.'.$view, [
            'menu' => $menu,
            'category' => $category,
            'setting' => $setting,
            'post' => $post,
        ]);
    }
    // public function licence(){
        
    //     $setting = Setting::first();
    //     $post = Post::where('name' , 'like', '%ЛИЦЕНЗИЯ MUZFON%')->first();
    //     //dd($post);
    //     return view('public.licence', [
            
    //         'setting' => $setting,
    //         'post' => $post,
    //     ]);
    // }
    // public function music(){
        
    //     $setting = Setting::first();
    //     return view('public.music', [
            
    //         'setting' => $setting,
    //     ]);
    // }
    // public function price(){
        
    //     $setting = Setting::first();
    //     return view('public.price', [
            
    //         'setting' => $setting,
    //     ]);
    // }
    // public function news(){
        
    //     $setting = Setting::first();
    //     return view('public.news', [
            
    //         'setting' => $setting,
    //     ]);
    // }
    // public function contact(){
        
    //     $setting = Setting::first();
    //     return view('public.contact', [
            
    //         'setting' => $setting,
    //     ]);
    // }
}
