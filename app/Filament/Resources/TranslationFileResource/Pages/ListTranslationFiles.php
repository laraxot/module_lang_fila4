<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
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
=======
=======
declare(strict_types=1);


>>>>>>> b93ef594b4 (.)
namespace Modules\Lang\Filament\Resources\TranslationFileResource\Pages;

use Filament\Actions\Action;
use Override;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Filament\Tables\Columns;
>>>>>>> b93ef594b4 (.)
=======
namespace Modules\Lang\Filament\Resources\TranslationFileResource\Pages;

use Filament\Actions;
use Filament\Tables\Columns;
use Filament\Resources\Pages\ListRecords;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
use Modules\Lang\Filament\Actions\LocaleSwitcherRefresh;
use Modules\Lang\Filament\Resources\TranslationFileResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListTranslationFiles extends XotBaseListRecords
{
    protected static string $resource = TranslationFileResource::class;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
    #[Override]
    public function getTableColumns(): array
    {
        return [
            TextColumn::make('key')->searchable(['key', 'content']),
<<<<<<< HEAD
=======
=======
    public function getTableColumns(): array
    {
        return [
            TextColumn::make('key')
               ->searchable(['key','content']),

>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function getTableColumns(): array
    {
        return [
            TextColumn::make('key')->searchable(['key', 'content']),
>>>>>>> b93ef594b4 (.)
=======
    public function getTableColumns(): array
    {
        return [
            Columns\TextColumn::make('key')
               ->searchable(['key','content']),

>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        ];
    }

    /**
<<<<<<< HEAD
     * @return array<string, Action>
     */
=======
<<<<<<< HEAD
     * @return array<string, Action>
     */
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
    #[Override]
    protected function getHeaderActions(): array
    {
        $parentActions = parent::getHeaderActions();

<<<<<<< HEAD
=======
=======
=======
     * @return array<string, \Filament\Actions\Action>
     */
>>>>>>> origin/develop
    protected function getHeaderActions(): array
    {
        $parentActions = parent::getHeaderActions();
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    protected function getHeaderActions(): array
    {
        $parentActions = parent::getHeaderActions();

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        // Assicurarsi che tutte le azioni abbiano chiavi stringa
        $actions = [
            'locale_switcher' => LocaleSwitcherRefresh::make('lang'),
        ];
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)

        // Aggiungere le azioni parent con chiavi stringa
        foreach ($parentActions as $key => $action) {
            $actions['parent_' . (is_string($key) ? $key : ((string) $key))] = $action;
        }

        return $actions;
    }
<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        // Aggiungere le azioni parent con chiavi stringa
        foreach ($parentActions as $key => $action) {
            $actions['parent_' . (is_string($key) ? $key : ((string) $key))] = $action;
        }

        return $actions;
    }
<<<<<<< HEAD

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
        // Aggiungere le azioni parent con chiavi stringa
        foreach ($parentActions as $key => $action) {
            $actions['parent_' . (is_string($key) ? $key : (string) $key)] = $action;
        }
        
        return $actions;
    }

>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
}
