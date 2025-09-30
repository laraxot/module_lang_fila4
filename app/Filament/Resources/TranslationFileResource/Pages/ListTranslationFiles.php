<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
declare(strict_types=1);


namespace Modules\Lang\Filament\Resources\TranslationFileResource\Pages;

use Filament\Actions\Action;
use Override;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Columns;
<<<<<<< HEAD
=======
namespace Modules\Lang\Filament\Resources\TranslationFileResource\Pages;

use Filament\Tables\Columns\TextColumn;
use Filament\Actions\Action;
use Filament\Actions;
use Filament\Tables\Columns;
use Filament\Resources\Pages\ListRecords;
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)
use Modules\Lang\Filament\Actions\LocaleSwitcherRefresh;
use Modules\Lang\Filament\Resources\TranslationFileResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListTranslationFiles extends XotBaseListRecords
{
    protected static string $resource = TranslationFileResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
    #[Override]
    public function getTableColumns(): array
    {
        return [
            TextColumn::make('key')->searchable(['key', 'content']),
<<<<<<< HEAD
=======
    public function getTableColumns(): array
    {
        return [
            TextColumn::make('key')
               ->searchable(['key','content']),

>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)
        ];
    }

    /**
     * @return array<string, Action>
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
    #[Override]
    protected function getHeaderActions(): array
    {
        $parentActions = parent::getHeaderActions();

<<<<<<< HEAD
=======
    protected function getHeaderActions(): array
    {
        $parentActions = parent::getHeaderActions();
        
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)
        // Assicurarsi che tutte le azioni abbiano chiavi stringa
        $actions = [
            'locale_switcher' => LocaleSwitcherRefresh::make('lang'),
        ];
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)

        // Aggiungere le azioni parent con chiavi stringa
        foreach ($parentActions as $key => $action) {
            $actions['parent_' . (is_string($key) ? $key : ((string) $key))] = $action;
        }

        return $actions;
    }
<<<<<<< HEAD
=======
        
        // Aggiungere le azioni parent con chiavi stringa
        foreach ($parentActions as $key => $action) {
            $actions['parent_' . (is_string($key) ? $key : (string) $key)] = $action;
        }
        
        return $actions;
    }

>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)
}
