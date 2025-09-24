<?php

declare(strict_types=1);


// app/Filament/Components/TranslationEditor.php
<<<<<<< HEAD
namespace Modules\Lang\Filament\Forms\Components;
=======
namespace Modules\Notify\Filament\Forms\Components;
>>>>>>> 1f77ca0 (.)

use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Arr;

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

    public function getDefaultChildComponents(?string $key = null): array
    {
        $components = [];
        $state = $this->getState() ?? [];
        if (!is_iterable($state)) {
            return $components;
        }

        foreach ($state as $key => $value) {
            if (is_array($value)) {
                $components[] = Section::make($key)->schema([
                    TranslationEditor::make($key)->label('')->state($value),
                ]);
            } else {
                $components[] = TextInput::make($key)->label(str_replace('_', ' ', $key))->default($value);
            }
        }

        return $components;
    }
}
