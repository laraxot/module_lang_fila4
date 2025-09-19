<?php

declare(strict_types=1);

/**
 * @see https://github.com/barryvdh/laravel-translation-manager/blob/master/src/Models/Translation.php
 */

namespace Modules\Lang\Models;

use Sushi\Sushi;
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
use Modules\Xot\Contracts\ProfileContract;
=======
>>>>>>> 8b0b6ac (.)
=======
use Override;
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 1c4a063 (.)
use Modules\Lang\Database\Factories\TranslationFileFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Modules\Lang\Actions\GetAllTranslationAction;
use Modules\Lang\Actions\ReadTranslationFileAction;
use Modules\Lang\Actions\WriteTranslationFileAction;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 8b0b6ac (.)
=======

>>>>>>> 1c4a063 (.)
use function Safe\json_encode;

/**
 * @property string|null $key
 * @property string|null $path
 * @property string|null $id
 * @property string|null $name
 * @property array<array-key, mixed>|null $content
<<<<<<< HEAD
<<<<<<< HEAD
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
=======
 * @property-read \Modules\SaluteOra\Models\Profile|null $creator
 * @property-read \Modules\SaluteOra\Models\Profile|null $updater
>>>>>>> 8b0b6ac (.)
=======
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
>>>>>>> 1c4a063 (.)
 * @method static TranslationFileFactory factory($count = null, $state = [])
 * @method static Builder<static>|TranslationFile newModelQuery()
 * @method static Builder<static>|TranslationFile newQuery()
 * @method static Builder<static>|TranslationFile query()
 * @method static Builder<static>|TranslationFile whereContent($value)
 * @method static Builder<static>|TranslationFile whereId($value)
 * @method static Builder<static>|TranslationFile whereKey($value)
 * @method static Builder<static>|TranslationFile whereName($value)
 * @method static Builder<static>|TranslationFile wherePath($value)
 * @mixin IdeHelperTranslationFile
 * @mixin \Eloquent
 */
class TranslationFile extends BaseModel
{
    use Sushi;

    protected $fillable = [
        'id',
        'name',
        'path',
        'content',
    ];

    protected array $schema = [
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
        'key' => 'string',
        'path' => 'string',
        'id' => 'string',
        'name' => 'string',
<<<<<<< HEAD
=======
        'key' => "string",
        'path' => "string",
        'id' => "string",
        'name' => "string",
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)
        'content' => 'json',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> 8b0b6ac (.)
=======
    #[Override]
>>>>>>> 1c4a063 (.)
    protected function casts(): array
    {
        return [
            'content' => 'array',
        ];
    }

    public function getRows(): array
    {
        $files = app(GetAllTranslationAction::class)->execute();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c4a063 (.)
        $rows = Arr::map($files, function ($item) {
            $item['id'] = $item['key'];
            $item['name'] = basename($item['path'], '.php');

            $item['content'] = json_encode(File::getRequire($item['path']));
            /*
             * // Carica il contenuto del file
             * try {
             * $readAction = app(ReadTranslationFileAction::class);
             * $item['content'] = $readAction->execute($item['path']);
             * } catch (\Exception $e) {
             * $item['content'] = [];
             * }
             */
<<<<<<< HEAD
=======
        $rows = Arr::map($files, function($item) {
            $item['id'] = $item['key'];
            $item['name'] = basename($item['path'], '.php');


            $item['content']=json_encode(File::getRequire($item['path']));
            /*
            // Carica il contenuto del file
            try {
                $readAction = app(ReadTranslationFileAction::class);
                $item['content'] = $readAction->execute($item['path']);
            } catch (\Exception $e) {
                $item['content'] = [];
            }
            */
>>>>>>> 8b0b6ac (.)
=======
>>>>>>> 1c4a063 (.)
            //dddx($item);
            return $item;
        });
        return $rows;
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======

   
}
>>>>>>> 8b0b6ac (.)
=======
}
>>>>>>> 1c4a063 (.)
