<?php

<<<<<<< HEAD
declare(strict_types=1);


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
>>>>>>> a7ee0d6 (.)
// app/Filament/Components/TranslationEditor.php
namespace Modules\Lang\Filament\Forms\Components;

use Filament\Schemas\Components\Section;
<<<<<<< HEAD
use Filament\Forms\Components\Field;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Arr;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Field;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Arr;
=======
use Illuminate\Support\Arr;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\TextInput;
>>>>>>> a12f125f4a (.)
=======
use Filament\Forms\Components\Field;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Arr;
>>>>>>> b93ef594b4 (.)
=======
// app/Filament/Components/TranslationEditor.php
namespace Modules\Lang\Filament\Forms\Components;

use Illuminate\Support\Arr;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

class TranslationEditor extends Field
{
    protected string $view = 'lang::filament.forms.components.translation-editor';

    protected function setUp(): void
    {
        parent::setUp();

        $this->afterStateHydrated(function (TranslationEditor $component, $state) {
            $component->state($state ?? []);
        });
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
    public function getDefaultChildComponents(?string $key = null): array
    {
        $components = [];
        $state = $this->getState() ?? [];
        if (!is_iterable($state)) {
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public function getChildComponents(): array
    {
        $components = [];
        $state = $this->getState() ?? [];
        if(!is_iterable($state)){
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public function getDefaultChildComponents(?string $key = null): array
    {
        $components = [];
        $state = $this->getState() ?? [];
        if (!is_iterable($state)) {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            return $components;
        }

        foreach ($state as $key => $value) {
            if (is_array($value)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
                $components[] = Section::make($key)->schema([
                    TranslationEditor::make($key)->label('')->state($value),
                ]);
            } else {
                $components[] = TextInput::make($key)->label(str_replace('_', ' ', $key))->default($value);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
                $components[] = Section::make($key)
                    ->schema([
                        TranslationEditor::make($key)
                            ->label('')
                            ->state($value)
                    ]);
            } else {
                $components[] = TextInput::make($key)
                    ->label(str_replace('_', ' ', $key))
                    ->default($value);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                $components[] = Section::make($key)->schema([
                    TranslationEditor::make($key)->label('')->state($value),
                ]);
            } else {
                $components[] = TextInput::make($key)->label(str_replace('_', ' ', $key))->default($value);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            }
        }

        return $components;
    }
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
}
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
