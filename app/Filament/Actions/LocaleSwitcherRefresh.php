<?php

<<<<<<< HEAD
declare(strict_types=1);


namespace Modules\Lang\Filament\Actions;

use Filament\Forms\Components\Select;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
=======
declare(strict_types=1);


>>>>>>> b93ef594b4 (.)
namespace Modules\Lang\Filament\Actions;

use Filament\Forms\Components\Select;
=======
namespace Modules\Lang\Filament\Actions;

>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\App;

class LocaleSwitcherRefresh extends Action
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
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
            ->schema([
                Select::make('locale')
=======
=======
=======
>>>>>>> origin/develop

    public string $full_url='#';
    public string $lang='';
    
<<<<<<< HEAD
=======
    public string $full_url = '#';
    public string $lang = '';
>>>>>>> b93ef594b4 (.)

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
<<<<<<< HEAD
=======

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
>>>>>>> origin/develop
        $this->lang=app()->getLocale();
        $this->full_url=request()->fullUrl();
        $this
            ->label($this->lang)
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $this->lang = app()->getLocale();
        $this->full_url = request()->fullUrl();
        $this->label($this->lang)
>>>>>>> b93ef594b4 (.)
            ->schema([
                Select::make('locale')
=======
            ->form([
                \Filament\Forms\Components\Select::make('locale')
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
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

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
                
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
                
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
                return redirect(request()->header('Referer'));
            })
            ->modalHeading('Cambia lingua')
            //->icon('heroicon-o-language')
            ->color('gray');
    }
}
