<?php

declare(strict_types=1);

/**
 * @see https://github.com/barryvdh/laravel-translation-manager/blob/master/src/Models/Translation.php
 */

namespace Modules\Lang\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Modules\Lang\Actions\GetAllTranslationAction;
use Modules\Xot\Actions\Cast\SafeArrayCastAction;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Lang\Actions\ReadTranslationFileAction;
use Modules\Lang\Database\Factories\TranslationFileFactory;
use Modules\Xot\Contracts\ProfileContract;
use Override;
use Sushi\Sushi;

use function Safe\json_encode;

/**
 * @property string|null $key
 * @property string|null $path
 * @property string|null $id
 * @property string|null $name
 * @property array<array-key, mixed>|null $content
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
 *
 * @method static TranslationFileFactory factory($count = null, $state = [])
 * @method static Builder<static>|TranslationFile newModelQuery()
 * @method static Builder<static>|TranslationFile newQuery()
 * @method static Builder<static>|TranslationFile query()
 * @method static Builder<static>|TranslationFile whereContent($value)
 * @method static Builder<static>|TranslationFile whereId($value)
 * @method static Builder<static>|TranslationFile whereKey($value)
 * @method static Builder<static>|TranslationFile whereName($value)
 * @method static Builder<static>|TranslationFile wherePath($value)
 *
 * @mixin \Eloquent
 */
/** */
class TranslationFile extends BaseModel
{
    use Sushi;

    protected $fillable = [
        'id',
        'name',
        'path',
        'content',
    ];

    protected array $form = [
        'key' => 'string',
        'path' => 'string',
        'id' => 'string',
        'name' => 'string',
        'content' => 'json',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    #[Override]
    protected function casts(): array
    {
        return [
            'content' => 'array',
        ];
    }

    /**
     * @return array<string, mixed>
     */
    /**
     * @return array<int, array<string, mixed>>
     */
    public function getRows(): array
    {
        $files = app(GetAllTranslationAction::class)->execute();
        $rows = Arr::map($files, function ($item) {
            $item = SafeArrayCastAction::cast($item);
            $item['id'] = $item['key'] ?? '';
            $path = SafeStringCastAction::cast($item['path'] ?? '');
            $item['name'] = $path ? basename($path, '.php') : '';

            if ($path && File::exists($path)) {
                $content = File::getRequire($path);
                $item['content'] = json_encode($content);
            } else {
                $item['content'] = '{}';
            }

            /*
             * // Carica il contenuto del file
             * try {
             * $readAction = app(ReadTranslationFileAction::class);
             * $item['content'] = $readAction->execute($item['path']);
             * } catch (\Exception $e) {
             * $item['content'] = [];
             * }
             */
            // dddx($item);
            return $item;
        });

        return $rows;
    }
}
