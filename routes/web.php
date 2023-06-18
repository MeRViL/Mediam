<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PublicController;
use App\Models\Site\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    // Route::get('/{post:slug}', function (Post $post) {
    //     dd($post);
    //     return $post;
    // });
    // Home page
    Route::get('/', [PublicController::class, 'public']);

    

    // Route::controller(PublicController::class)->group(function () {
    //     Route::get('/', 'public')->name('public'); // php artisan make:view dashboard.site.settings.show 
    //     Route::get('/licence', 'licence')->name('licence'); // php artisan make:view dashboard.site.settings.show 
    //     Route::get('/music', 'music')->name('music'); // php artisan make:view dashboard.site.settings.show 
    //     Route::get('/price', 'price')->name('price'); // php artisan make:view dashboard.site.settings.show 
    //     Route::get('/news', 'news')->name('news'); // php artisan make:view dashboard.site.settings.show 
    //     Route::get('/contact', 'contact')->name('contact'); // php artisan make:view dashboard.site.settings.show 
        
    // });
    // Route::get('/', function () {
    //     return view('public.main');
    // });
    // Route::get('/licence', function () {
    //     return view('public.licence');
    // });
    // Route::get('/music', function () {
    //     return view('public.music');
    // });
    // Route::get('/price', function () {
    //     return view('public.price');
    // });
    // Route::get('/news', function () {
    //     return view('public.news');
    // });
    // Route::get('/contact', function () {
    //     return view('public.contact');
    // });
    // Route::post('ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::prefix('personnel')->group(function () {
        Route::get('/stuff', function () {
            return view('dashboard.personnel.stuff.index');
        })->name('personnel.stuff');
    });
    
    Route::prefix('admin')->group(function () {
        Route::get('/user', function () {
            return view('dashboard.admin.user.index');
        })->name('admin.user.index');
        Route::get('/role', function () {
            return view('dashboard.admin.role.index');
        })->name('admin.role.index');
    });
    
    Route::prefix('my')->group(function () {
        
        Route::get('/entity', function () {
            return view('dashboard.my.entity');
        })->name('my.entity');
        
        Route::get('/profile', function () {
            return view('dashboard.my.profile');
        })->name('my.profile');
        
        Route::get('/settings', function () {
            return view('dashboard.my.settings');
        })->name('my.settings');
    });
    
    Route::prefix('project')->group(function () {
        
        Route::get('/projects', function () {
            return view('dashboard.project.projects.index');
        })->name('project.projects.index');
        
        Route::get('/calendar', function () {
            return view('dashboard.project.calendar');
        })->name('project.calendar');
        
        
    });
    
    Route::prefix('finance')->group(function () {
        
        Route::get('/payments', function () {
            return view('dashboard.finance.payments.index');
        })->name('finance.payments.index'); // php artisan make:view finance.payments --resource
        
        Route::get('/revise', function () {
            return view('dashboard.finance.revise'); // php artisan make:view finance.revise
        })->name('finance.revise');
        
        
    });
    
    Route::prefix('site')->group(function () {
        Route::name('site.')->group(function () {
            Route::controller(SettingController::class)->group(function () {
                Route::get('/settings', 'show')->name('settings.show'); // php artisan make:view dashboard.site.settings.show 
                // Route::get('/settings/edite', 'edite')->name('settings.edite'); // php artisan make:view dashboard.site.settings.edite 
                // Route::post('/settings', 'store')->name('settings.store'); 
            });
            Route::resource('posts', PostController::class); // php artisan make:view dashboard.site.posts --resource
            Route::resource('sliders', SliderController::class); // php artisan make:view dashboard.site.sliders --resource
            Route::resource('categories', CategoryController::class); // php artisan make:view dashboard.site.categories --resource
        });
    });

    // Catch all page controller (place at the very bottom)
    
    Route::get('/{category}/{post}', [PublicController::class, 'getPage'])->where('category', '([A-Za-z0-9\-\/]+)');
    Route::get('/{category}', [PublicController::class, 'getPage'])->where('category', '([A-Za-z0-9\-\/]+)');
});
