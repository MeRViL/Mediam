<?php

namespace App\Http\Livewire\Dashboard\Site;

use Livewire\Component;
use App\Models\Site\Setting;
use App\Models\Site\File;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Settings extends Component
{
    use WithFileUploads;
    
    public $setting;
    public $favicon;
    public $logo;
    public $showSave = false;
    

    protected $rules = [
        'setting.name' => 'required|min:6',
        'setting.email' => 'email',
        'setting.entity_name' => 'string',
        'setting.desc' => 'string',
        'setting.keywords' => 'string',
        'setting.address' => 'string',
        'setting.unp' => 'string',
        'setting.phones' => 'string',
        'setting.work_time' => 'string',
        'setting.social' => 'min:6',
        'favicon' => 'image|nullable',
        'logo' => 'image|nullable',
        'setting.google_api' => 'string',
        'setting.yandex_api' => 'string',
        'setting.recapcha_public' => 'string',
        'setting.recapcha_private' => 'string',
        'setting.color1' => 'string',
        'setting.color2' => 'string',
    ];
 
    public function saveImage($image, $desc)
    {
        //dd($image);
        if(!$this->setting->$desc){
            $file = new File;
        }else{
            $file = $this->setting->$desc;
        }
        //dd( $file);

        $file->name = $image->getClientOriginalName();
        $file->slug = Str::slug($file->name);
        
        $image = $image->store('setting', 'public');
       
        
        $file->url = 'storage/'.$image;
        $file->description = 'Картинка '.$desc;
        
        $file->save();
        return $file->id;
    }

    public function submit()
    {
        
        if($this->favicon){
            
            $this->setting->favicon_id = $this->saveImage($this->favicon, 'favicon');
        }
        if($this->logo){
            $this->setting->logo_id = $this->saveImage($this->logo, 'logo');
        }
        
        
        $this->validate();
 
        // Execution doesn't reach here if validation fails.
        //dd($this->setting);
        $this->setting->save();
        $this->showSave = true;
    }

    public function mount()
    {
        $this->setting = Setting::first();
        if ($this->setting == null){
            $this->setting = new Setting;
            $this->setting->name = 'МузФон';
            $this->setting->desc = 'Фоновая музыка для бизнеса. Ваш рекламный эфир и Лицензия на музыку. Аудиомаркетинг. Фоновая музыка для Торгового центра. Фоновая музыка для Магазина.';
            $this->setting->keywords = ' фоновая музыка для торгового центра, фоновая музыка для магазина,
            аудиооформление, аудио оформление, аудиомаркетинг, аудио маркетинг, саунд дизайн помещений,
            музыка для торговли, озвучить магазин, озвучить торговый центр, музыкальное сопровождение торговых центров,
            музыкальное оформление магазина, озвучка магазина, радио для магазина, радио для торгового центра,
            реклама в торговом центре, монетизация аудио-эфира, рекламный эфир, место размещения рекламы,
            аудио эфир для вашей рекламы, аудио эфир без рекламы конкурентов, собственное радио, радио бренда,
            брендировать радио, музыкальный фон магазина, музыкальный фон торгового центра,
            голос для торгового центра,
            торговые центры,
            аудиоролики рекламные,
            производство рекламных роликов, изготовление аудиороликов,
            запись аудиоролика, запись голоса,
            рекламный ролик +на радио,
            производство радиорекламы';
            $this->setting->entity_name = 'Частное предприятие Медиа Меридиан';
            $this->setting->address = 'Республика Беларусь, г. Минск';
            $this->setting->unp = '192143652';
            $this->setting->phones = '+375 29 388 05 98';
            $this->setting->email = 'info@muzfon.by';
            $this->setting->work_time =
'Мы работаем 7 дней в неделю без выходных.
<br> <strong> Техническая поддержка: </strong> 
<br> 7 дней в неделю и праздники <span class="text-right">7:00 - 23:00</span>
<br> <strong>Офис:</strong>
<br> Понедельник - Пятница: <span class="text-right">10:00 - 18:00 </span>
<br> Суббота: <span class="text-right">11:00 - 15:00</span>
<br> Воскресенье и праздники: <span class="text-right">11:00 - 14:00</span>';
            $this->setting->social = 'info@muzfon.by,';
            $this->setting->google_api = 'info@muzfon.by,';
            $this->setting->yandex_api = 'info@muzfon.by,';
            $this->setting->recapcha_public = 'info@muzfon.by,';
            $this->setting->recapcha_private = 'info@muzfon.by,';
            $this->setting->color1 = '#83A638';
            $this->setting->color2 = '#F2A30F';
        }
        // dd($this->setting);
    }

    public function render()
    {
        return view('livewire.dashboard.site.settings');
    }
}
