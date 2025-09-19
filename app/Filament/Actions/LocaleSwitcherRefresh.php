<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> 8b0b6ac (.)
=======
declare(strict_types=1);


>>>>>>> 1c4a063 (.)
namespace Modules\Lang\Filament\Actions;

use Filament\Forms\Components\Select;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\App;

class LocaleSwitcherRefresh extends Action
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
    public string $full_url = '#';
    public string $lang = '';

    protected function setUp(): void
    {
        parent::setUp();
        $lang_options = [
            'en' => '🇬🇧 English',
            'it' => '🇮🇹 Italiano',
        ];
        $lang = session()->get('locale');
        if (!is_string($lang)) {
            $lang = 'it';
        }
        app()->setLocale($lang);
        $this->lang = app()->getLocale();
        $this->full_url = request()->fullUrl();
        $this->label($this->lang)
<<<<<<< HEAD
=======

    public string $full_url='#';
    public string $lang='';
    

    protected function setUp(): void
    {

        parent::setUp();
        $lang_options= [
            'en' => '🇬🇧 English',
            'it' => '🇮🇹 Italiano',
        ];
        $lang=session()->get('locale');
        if(!is_string($lang)){
            $lang='it';
        }
        app()->setLocale($lang);
        $this->lang=app()->getLocale();
        $this->full_url=request()->fullUrl();
        $this
            ->label($this->lang)
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)
            ->schema([
                Select::make('locale')
                    ->label('Seleziona lingua')
                    ->options($lang_options)
                    ->default($this->lang)
                    ->reactive()
                    ->required(),
            ])
            ->action(function (array $data) {
                $locale = $data['locale'];

                session()->put('locale', $locale);
                App::setLocale($locale);
                //Filament::setLocale($locale);
<<<<<<< HEAD
<<<<<<< HEAD

=======
                
>>>>>>> 8b0b6ac (.)
=======

>>>>>>> 1c4a063 (.)
                return redirect(request()->header('Referer'));
            })
            ->modalHeading('Cambia lingua')
            //->icon('heroicon-o-language')
            ->color('gray');
    }
}
