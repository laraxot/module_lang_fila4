<?php

declare(strict_types=1);

namespace Modules\Lang\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
use Eloquent;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// --- traits ---
use Illuminate\Database\Eloquent\Relations\MorphTo;
// use Laravel\Scout\Searchable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Modules\Xot\Traits\Updater;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * Modules\Lang\Models\Post.
 *
 * @property int             $id
 * @property int|null        $user_id
 * @property string|null     $post_type
 * @property int|null        $post_id
 * @property string|null     $lang
 * @property string|null     $title
 * @property string|null     $subtitle
 * @property string|null     $guid
 * @property string|null     $txt
 * @property string|null     $image_src
 * @property string|null     $image_alt
 * @property string|null     $image_title
 * @property string|null     $meta_description
 * @property string|null     $meta_keywords
 * @property int|null        $author_id
 * @property Carbon|null     $created_at
 * @property Carbon|null     $updated_at
 * @property int|null        $category_id
 * @property string|null     $image
 * @property string|null     $content
 * @property int|null        $published
 * @property string|null     $created_by
 * @property string|null     $updated_by
 * @property string|null     $url
 * @property array|null      $url_lang
 * @property array|null      $image_resize_src
 * @property string|null     $linked_count
 * @property string|null     $related_count
 * @property string|null     $relatedrev_count
 * @property string|null     $linkable_type
 * @property int|null        $views_count
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
 * @property Model|Eloquent $linkable
 * @method static Builder|Post newModelQuery()
 * @method static Builder|Post newQuery()
 * @method static Builder|Post query()
 * @method static Builder|Post whereAuthorId($value)
 * @method static Builder|Post whereCategoryId($value)
 * @method static Builder|Post whereContent($value)
 * @method static Builder|Post whereCreatedAt($value)
 * @method static Builder|Post whereCreatedBy($value)
 * @method static Builder|Post whereGuid($value)
 * @method static Builder|Post whereId($value)
 * @method static Builder|Post whereImage($value)
 * @method static Builder|Post whereImageAlt($value)
 * @method static Builder|Post whereImageResizeSrc($value)
 * @method static Builder|Post whereImageSrc($value)
 * @method static Builder|Post whereImageTitle($value)
 * @method static Builder|Post whereLang($value)
 * @method static Builder|Post whereLinkableType($value)
 * @method static Builder|Post whereLinkedCount($value)
 * @method static Builder|Post whereMetaDescription($value)
 * @method static Builder|Post whereMetaKeywords($value)
 * @method static Builder|Post wherePostId($value)
 * @method static Builder|Post wherePostType($value)
 * @method static Builder|Post wherePublished($value)
 * @method static Builder|Post whereRelatedCount($value)
 * @method static Builder|Post whereRelatedrevCount($value)
 * @method static Builder|Post whereSubtitle($value)
 * @method static Builder|Post whereTitle($value)
 * @method static Builder|Post whereTxt($value)
 * @method static Builder|Post whereUpdatedAt($value)
 * @method static Builder|Post whereUpdatedBy($value)
 * @method static Builder|Post whereUrl($value)
 * @method static Builder|Post whereUrlLang($value)
 * @method static Builder|Post whereUserId($value)
 * @method static Builder|Post whereViewsCount($value)
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @mixin Eloquent
<<<<<<< HEAD
=======
=======
 * @property Model|\Eloquent $linkable
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImageAlt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImageResizeSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImageSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImageTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereLinkableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereLinkedCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereRelatedCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereRelatedrevCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTxt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUrlLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereViewsCount($value)
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @mixin \Eloquent
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
 * @mixin IdeHelperPost
 * @mixin Eloquent
 */
class Post extends Model
{
    use HasFactory;
    use HasSlug;

    // use Cachable;
    use Updater;

    /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
     * public function getUrlAttribute($value) {
     *
     * }
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
    public function getUrlAttribute($value) {

    }
    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

    final public const SEARCHABLE_FIELDS = ['title', 'guid', 'txt'];

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    /** @var bool */
    public $incrementing = true;

    /** @var int */
    protected $perPage = 30;

    // use Searchable;
    /** @var string */
    protected $connection = 'lang';

    /** @var list<string> */
    protected $fillable = [
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
        'id',
        'user_id',
        'post_id',
        'lang',
        'guid',
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        'id', 'user_id', 'post_id', 'lang', 'guid',
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        'id', 'user_id', 'post_id', 'lang', 'guid',
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        'title',
        'subtitle',
        'post_type',
        'txt',
        // ------ IMAGE ---------
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
        'image_src',
        'image_alt',
        'image_title',
        // ------ SEO FIELDS -----
        'meta_description',
        'meta_keywords', // seo
        'author_id',
        // ------ BUFFER ----
        'url',
        'url_lang', // buffer
<<<<<<< HEAD
=======
=======
        'image_src', 'image_alt', 'image_title',
=======
        'image_src',
        'image_alt',
        'image_title',
>>>>>>> b93ef594b4 (.)
        // ------ SEO FIELDS -----
        'meta_description',
        'meta_keywords', // seo
        'author_id',
        // ------ BUFFER ----
<<<<<<< HEAD
        'url', 'url_lang', // buffer
>>>>>>> a12f125f4a (.)
=======
        'url',
        'url_lang', // buffer
>>>>>>> b93ef594b4 (.)
=======
        'image_src', 'image_alt', 'image_title',
        // ------ SEO FIELDS -----
        'meta_description', 'meta_keywords', // seo
        'author_id',
        // ------ BUFFER ----
        'url', 'url_lang', // buffer
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        'image_resize_src', // buffer
    ];

    /** @var list<string> */
    protected $appends = [];

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'string';

    /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
     * public function getRouteKeyName() {
     * return inAdmin() ? 'guid' : 'post_id';
     * }
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
    public function getRouteKeyName() {
        return inAdmin() ? 'guid' : 'post_id';
    }
    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
<<<<<<< HEAD
        return SlugOptions::create()->generateSlugsFrom('title')->saveSlugsTo('guid');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return SlugOptions::create()->generateSlugsFrom('title')->saveSlugsTo('guid');
=======
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('guid');
>>>>>>> a12f125f4a (.)
=======
        return SlugOptions::create()->generateSlugsFrom('title')->saveSlugsTo('guid');
>>>>>>> b93ef594b4 (.)
=======
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('guid');
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    }

    // -------- relationship ------
    /**
     * @return MorphTo
     */
    public function linkable()
    {
        return $this->morphTo('post');
    }

    /* deprecated
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> a7ee0d6 (.)
     * public function archive() {
     * $lang = $this->lang;
     * $post_type = $this->post_type;
     * $obj = $this->getLinkedModel();
     * $table = $obj->getTable();
     * $post_table = with(new Post())->getTable();
     * $rows = $obj->join($post_table, $post_table.'.post_id', $table.'.post_id')
     * ->where('lang', $lang)
     * ->where($post_table.'.post_type', $post_type)
     * ->where($post_table.'.guid', '!=', $post_type)
     * ->orderBy($table.'.updated_at', 'desc')
     * ->with('post')
     * ;
     *
     * return $rows;
     * }
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
    public function archive() {
        $lang = $this->lang;
        $post_type = $this->post_type;
        $obj = $this->getLinkedModel();
        $table = $obj->getTable();
        $post_table = with(new Post())->getTable();
        $rows = $obj->join($post_table, $post_table.'.post_id', $table.'.post_id')
                    ->where('lang', $lang)
                    ->where($post_table.'.post_type', $post_type)
                    ->where($post_table.'.guid', '!=', $post_type)
                    ->orderBy($table.'.updated_at', 'desc')
                    ->with('post')
                    ;

        return $rows;
    }
    */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)

    // end function
    // -------------- MUTATORS ------------------

    public function setTitleAttribute(string $value): void
    {
        $this->attributes['title'] = $value;
        $this->attributes['guid'] = Str::slug($value);
    }

    /**
     * Undocumented function.
     */
<<<<<<< HEAD
    public function getTitleAttribute(null|string $value): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getTitleAttribute(null|string $value): null|string
=======
    public function getTitleAttribute(?string $value): ?string
>>>>>>> a12f125f4a (.)
=======
    public function getTitleAttribute(null|string $value): null|string
>>>>>>> b93ef594b4 (.)
=======
    public function getTitleAttribute(?string $value): ?string
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    {
        if (null !== $value) {
            return $value;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
        if (!empty($this->attributes['post_type'])) {
            // Assicuriamoci che i valori siano stringhe prima della concatenazione
            $postType = isset($this->attributes['post_type']) && is_string($this->attributes['post_type'])
                ? $this->attributes['post_type']
                : '';
            $postId = isset($this->attributes['post_id']) && is_scalar($this->attributes['post_id'])
                ? ((string) $this->attributes['post_id'])
                : '';
            $value = $postType . ' ' . $postId;
        } else {
            // Assicuriamoci che post_type e post_id siano stringhe
            $postType = is_string($this->post_type) ? $this->post_type : '';
            $postId = is_scalar($this->post_id) ? ((string) $this->post_id) : '';
            $value = $postType . ' ' . $postId;
<<<<<<< HEAD
=======
=======
        if (! empty($this->attributes['post_type'])) {
=======
        if (!empty($this->attributes['post_type'])) {
>>>>>>> b93ef594b4 (.)
            // Assicuriamoci che i valori siano stringhe prima della concatenazione
            $postType = isset($this->attributes['post_type']) && is_string($this->attributes['post_type'])
                ? $this->attributes['post_type']
                : '';
            $postId = isset($this->attributes['post_id']) && is_scalar($this->attributes['post_id'])
                ? ((string) $this->attributes['post_id'])
                : '';
            $value = $postType . ' ' . $postId;
        } else {
            // Assicuriamoci che post_type e post_id siano stringhe
            $postType = is_string($this->post_type) ? $this->post_type : '';
<<<<<<< HEAD
            $postId = is_scalar($this->post_id) ? (string) $this->post_id : '';
            $value = $postType.' '.$postId;
>>>>>>> a12f125f4a (.)
=======
            $postId = is_scalar($this->post_id) ? ((string) $this->post_id) : '';
            $value = $postType . ' ' . $postId;
>>>>>>> b93ef594b4 (.)
=======
        if (! empty($this->attributes['post_type'])) {
            // Assicuriamoci che i valori siano stringhe prima della concatenazione
            $postType = isset($this->attributes['post_type']) && is_string($this->attributes['post_type'])
                ? $this->attributes['post_type'] : '';
            $postId = isset($this->attributes['post_id']) && is_scalar($this->attributes['post_id'])
                ? (string) $this->attributes['post_id'] : '';
            $value = $postType.' '.$postId;
        } else {
            // Assicuriamoci che post_type e post_id siano stringhe
            $postType = is_string($this->post_type) ? $this->post_type : '';
            $postId = is_scalar($this->post_id) ? (string) $this->post_id : '';
            $value = $postType.' '.$postId;
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        }

        $this->title = $value;

        $this->save();

        return $value;
    }

    /**
     * ---.
     */
<<<<<<< HEAD
    public function getGuidAttribute(null|string $value): null|string
    {
        if (\is_string($value) && '' !== $value && !str_contains($value, ' ')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getGuidAttribute(null|string $value): null|string
    {
        if (\is_string($value) && '' !== $value && !str_contains($value, ' ')) {
=======
    public function getGuidAttribute(?string $value): ?string
    {
        if (\is_string($value) && '' !== $value && ! str_contains($value, ' ')) {
>>>>>>> a12f125f4a (.)
=======
    public function getGuidAttribute(null|string $value): null|string
    {
        if (\is_string($value) && '' !== $value && !str_contains($value, ' ')) {
>>>>>>> b93ef594b4 (.)
=======
    public function getGuidAttribute(?string $value): ?string
    {
        if (\is_string($value) && '' !== $value && ! str_contains($value, ' ')) {
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
            return $value;
        }
        $value = $this->title;
        if ('' === $value) {
            // Assicuriamoci che i valori siano stringhe prima della concatenazione
            $postType = isset($this->attributes['post_type']) && is_string($this->attributes['post_type'])
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a7ee0d6 (.)
                ? $this->attributes['post_type']
                : '';
            $postId = isset($this->attributes['post_id']) && is_scalar($this->attributes['post_id'])
                ? ((string) $this->attributes['post_id'])
                : '';
            $value = $postType . ' ' . $postId;
        }
        if (null === $value) {
            $value = 'u-' . random_int(1, 1000);
<<<<<<< HEAD
=======
=======
                ? $this->attributes['post_type'] : '';
=======
                ? $this->attributes['post_type']
                : '';
>>>>>>> b93ef594b4 (.)
            $postId = isset($this->attributes['post_id']) && is_scalar($this->attributes['post_id'])
                ? ((string) $this->attributes['post_id'])
                : '';
            $value = $postType . ' ' . $postId;
        }
        if (null === $value) {
<<<<<<< HEAD
            $value = 'u-'.random_int(1, 1000);
>>>>>>> a12f125f4a (.)
=======
            $value = 'u-' . random_int(1, 1000);
>>>>>>> b93ef594b4 (.)
=======
                ? $this->attributes['post_type'] : '';
            $postId = isset($this->attributes['post_id']) && is_scalar($this->attributes['post_id'])
                ? (string) $this->attributes['post_id'] : '';
            $value = $postType.' '.$postId;
        }
        if (null === $value) {
            $value = 'u-'.random_int(1, 1000);
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
        }
        $value = Str::slug($value);
        $this->guid = $value;
        $this->save();

        return $value;
    }

<<<<<<< HEAD
    public function getTxtAttribute(null|string $value): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getTxtAttribute(null|string $value): null|string
=======
    public function getTxtAttribute(?string $value): ?string
>>>>>>> a12f125f4a (.)
=======
    public function getTxtAttribute(null|string $value): null|string
>>>>>>> b93ef594b4 (.)
=======
    public function getTxtAttribute(?string $value): ?string
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
    {
        return $value ?? '';
    }

    /**
     * @return array
     */
    public function toSearchableArray()
    {
        return $this->only(self::SEARCHABLE_FIELDS);
    }

    /**
     * @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'image_resize_src' => 'array',
            'url_lang' => 'array',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'published_at' => 'datetime',
        ];
    }
<<<<<<< HEAD
}

// end class
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}

// end class
=======
}// end class
>>>>>>> a12f125f4a (.)
=======
}

// end class
>>>>>>> b93ef594b4 (.)
=======
}// end class
>>>>>>> origin/develop
>>>>>>> a7ee0d6 (.)
