<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
# Integrazione avanzata: mcamara/laravel-localization + Laravel Folio

## 1. Introduzione
=======
=======
>>>>>>> 1bb26ee (.)
# Integrazione avanzata: mcamara/laravel-localization + Laravel Folio

## 1. Introduzione

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
Questa guida approfondisce l'integrazione tra [mcamara/laravel-localization](https://github.com/mcamara/laravel-localization) e [Laravel Folio](https://github.com/laravel/folio), con focus su:
- Localizzazione delle route Folio (file-based routing)
- Traduzione degli slug e dei parametri dinamici
- Best practice, criticità e raccomandazioni operative
<<<<<<< HEAD
<<<<<<< HEAD
---
## 2. Analisi tecnica e criticità
### 2.1. Come funziona Folio
- Genera route da `resources/views/pages` (ogni file Blade = una route)
- Supporta parametri dinamici (`[slug].blade.php` → `/qualcosa`)
=======
=======
>>>>>>> 1bb26ee (.)

---

## 2. Analisi tecnica e criticità

### 2.1. Come funziona Folio
- Genera route da `resources/views/pages` (ogni file Blade = una route)
- Supporta parametri dinamici (`[slug].blade.php` → `/qualcosa`)

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
### 2.2. Come funziona mcamara/laravel-localization
- Wrappa le route in un gruppo con prefisso lingua e middleware
- Permette la traduzione degli slug tramite `lang/{locale}/routes.php`
- Offre helper per URL localizzati e parametri tradotti
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> d5fc9cd (.)
=======

>>>>>>> 1bb26ee (.)
### 2.3. Punti critici
- Folio **non supporta nativamente** la traduzione degli slug: serve mappatura manuale
- Cache delle route: usare sempre `php artisan route:trans:cache`
- Parametri dinamici: richiedono override custom (vedi sotto)
- Fallback locale: va gestito sia lato Folio che localization
<<<<<<< HEAD
<<<<<<< HEAD
## 3. Passaggi operativi dettagliati
### 3.1. Wrappare tutte le route Folio nel gruppo localizzato
```php
use Laravel\Folio\Facades\Folio;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
=======
=======
>>>>>>> 1bb26ee (.)

---

## 3. Passaggi operativi dettagliati

### 3.1. Wrappare tutte le route Folio nel gruppo localizzato

```php
use Laravel\Folio\Facades\Folio;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localize', 'localizationRedirect', 'localeViewPath'],
], function () {
    Folio::route('pages');
    // ...altre route
});
```
<<<<<<< HEAD
<<<<<<< HEAD
### 3.2. Traduzione degli slug Folio
#### a) File di traduzione degli slug
=======
=======
>>>>>>> 1bb26ee (.)

### 3.2. Traduzione degli slug Folio

#### a) File di traduzione degli slug

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
- Crea `lang/en/routes.php`, `lang/it/routes.php`, ecc.
- Esempio:
  ```php
  // lang/en/routes.php
  return [ 'about' => 'about', 'contact' => 'contact', ];
  // lang/it/routes.php
  return [ 'about' => 'chi-siamo', 'contact' => 'contatti', ];
  ```
<<<<<<< HEAD
<<<<<<< HEAD
#### b) Mappare le route Folio agli slug tradotti
- Folio non supporta la traduzione automatica degli slug: usa i nomi tradotti nei link e, se serve, crea route custom:
  Route::get(LaravelLocalization::transRoute('routes.about'), function () {
      return view('pages.about');
  })->name('about');
#### c) Nei Blade Folio, usa sempre i metodi di LaravelLocalization
=======
=======
>>>>>>> 1bb26ee (.)

#### b) Mappare le route Folio agli slug tradotti

- Folio non supporta la traduzione automatica degli slug: usa i nomi tradotti nei link e, se serve, crea route custom:
  ```php
  Route::get(LaravelLocalization::transRoute('routes.about'), function () {
      return view('pages.about');
  })->name('about');
  ```

#### c) Nei Blade Folio, usa sempre i metodi di LaravelLocalization

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
```blade
<a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('about')) }}">
    {{ __('About us') }}
</a>
<<<<<<< HEAD
<<<<<<< HEAD
### 3.3. Gestione avanzata dei parametri dinamici (slug, id, ecc.)
- Per tradurre parametri dinamici (es. `/it/articolo/slug-italiano` vs `/en/article/english-slug`):
  - Implementa l'interfaccia `LocalizedUrlRoutable` nel model
  - Override di `getLocalizedRouteKey($locale)` e `resolveRouteBinding($slug)`
**Esempio:**
=======
=======
>>>>>>> 1bb26ee (.)
```

### 3.3. Gestione avanzata dei parametri dinamici (slug, id, ecc.)

- Per tradurre parametri dinamici (es. `/it/articolo/slug-italiano` vs `/en/article/english-slug`):
  - Implementa l'interfaccia `LocalizedUrlRoutable` nel model
  - Override di `getLocalizedRouteKey($locale)` e `resolveRouteBinding($slug)`

**Esempio:**
```php
<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
class Article extends Model implements \Mcamara\LaravelLocalization\Interfaces\LocalizedUrlRoutable
{
    public function getLocalizedRouteKey($locale)
    {
        return $this->getTranslation('slug', $locale);
    }
    public function resolveRouteBinding($value, $field = null)
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->where("slug->{$locale}", $value)->firstOrFail();
}
- Richiede che il model abbia un campo `slug` multilingua (es. via spatie/laravel-translatable)
### 3.4. Cache delle route
- Usa **sempre** `php artisan route:trans:cache` per la cache delle route localizzate
- Non usare il comando standard `route:cache`
### 3.5. Testing
- Nei test, imposta il locale con:
=======
=======
>>>>>>> 1bb26ee (.)
    {
        return $this->where("slug->{$locale}", $value)->firstOrFail();
    }
}
```

- Richiede che il model abbia un campo `slug` multilingua (es. via spatie/laravel-translatable)

### 3.4. Cache delle route

- Usa **sempre** `php artisan route:trans:cache` per la cache delle route localizzate
- Non usare il comando standard `route:cache`

### 3.5. Testing

- Nei test, imposta il locale con:
  ```php
<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
  protected function refreshApplicationWithLocale($locale)
  {
      self::tearDown();
      putenv(LaravelLocalization::ENV_ROUTE_KEY . '=' . $locale);
      self::setUp();
  }
<<<<<<< HEAD
<<<<<<< HEAD
## 4. Best practice e raccomandazioni
- Versiona sempre i file `lang/{locale}/routes.php` e aggiorna la documentazione ad ogni nuova pagina Folio
- Usa sempre i metodi di LaravelLocalization per link e redirect nei Blade
- Testa la localizzazione sia per le route che per i contenuti delle pagine Folio
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Documenta la strategia in `/Modules/Lang/docs/laravel-localization-integration.md` e linka dal README
=======
- Documenta la strategia in `/Modules/Lang/project_docs/laravel-localization-integration.md` e linka dal README
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
- Documenta la strategia in `/Modules/Lang/project_docs/laravel-localization-integration.md` e linka dal README
- Documenta la strategia in `/Modules/Lang/docs/laravel-localization-integration.md` e linka dal README
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)
- Per la cache delle route, usa sempre `php artisan route:trans:cache`
## 5. Modifiche consigliate ai file del progetto
=======
=======
>>>>>>> 1bb26ee (.)
  ```

---

## 4. Best practice e raccomandazioni

- Versiona sempre i file `lang/{locale}/routes.php` e aggiorna la documentazione ad ogni nuova pagina Folio
- Usa sempre i metodi di LaravelLocalization per link e redirect nei Blade
- Testa la localizzazione sia per le route che per i contenuti delle pagine Folio
<<<<<<< HEAD
- Documenta la strategia in `/Modules/Lang/docs/laravel-localization-integration.md` e linka dal README
=======
- Documenta la strategia in `/Modules/Lang/project_docs/laravel-localization-integration.md` e linka dal README
>>>>>>> 1bb26ee (.)
- Per la cache delle route, usa sempre `php artisan route:trans:cache`

---

## 5. Modifiche consigliate ai file del progetto

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
- Aggiorna `routes/web.php` per wrappare tutte le route Folio nel gruppo localizzato
- Crea/aggiorna i file `lang/{locale}/routes.php` per tutte le lingue supportate
- Nei Blade Folio, sostituisci tutti i link hardcoded con i metodi di LaravelLocalization
- Se usi parametri dinamici multilingua, aggiorna i model per supportare `LocalizedUrlRoutable`
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Documenta la strategia in `/Modules/Lang/docs/laravel-localization-integration.md` e linka dal README
=======
- Documenta la strategia in `/Modules/Lang/project_docs/laravel-localization-integration.md` e linka dal README
>>>>>>> 9ce799e (Check & fix styling)
=======
- Documenta la strategia in `/Modules/Lang/project_docs/laravel-localization-integration.md` e linka dal README
=======
- Documenta la strategia in `/Modules/Lang/docs/laravel-localization-integration.md` e linka dal README
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)

---

=======
>>>>>>> 9059f82 (.)
## 6. Checklist finale
=======
- Documenta la strategia in `/Modules/Lang/docs/laravel-localization-integration.md` e linka dal README
=======
- Documenta la strategia in `/Modules/Lang/project_docs/laravel-localization-integration.md` e linka dal README
>>>>>>> 1bb26ee (.)

---

## 6. Checklist finale

<<<<<<< HEAD
>>>>>>> d5fc9cd (.)
=======
>>>>>>> 1bb26ee (.)
- [ ] Tutte le route Folio sono wrappate dal gruppo localizzato
- [ ] I file `lang/{locale}/routes.php` sono completi e versionati
- [ ] I link nei Blade usano i metodi di LaravelLocalization
- [ ] I parametri dinamici sono gestiti in modo multilingua se necessario
- [ ] La cache delle route usa `route:trans:cache`
- [ ] La documentazione è aggiornata e linkata nei README
<<<<<<< HEAD
<<<<<<< HEAD
## 7. Collegamenti utili
- [mcamara/laravel-localization - GitHub](https://github.com/mcamara/laravel-localization)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Laravel Folio - Docs](https://laravel.com/docs/12.x/folio)
=======
- [Laravel Folio - Docs](https://laravel.com/project_docs/12.x/folio)
>>>>>>> 9ce799e (Check & fix styling)
=======
=======
>>>>>>> 9059f82 (.)
- [Laravel Folio - Docs](https://laravel.com/project_docs/12.x/folio)
- [Laravel Folio - Docs](https://laravel.com/docs/12.x/folio)
<<<<<<< HEAD
>>>>>>> 8b0b6ac (.)
>>>>>>> fe4a1a8 (.)
=======
>>>>>>> 9059f82 (.)
- [Traduzione route con mcamara](https://github.com/mcamara/laravel-localization#translated-routes)
- [Esempio di override parametri dinamici](https://github.com/mcamara/laravel-localization#translatable-route-parameters)
=======
>>>>>>> 121b362 (.)
=======
=======
>>>>>>> 1bb26ee (.)

---

## 7. Collegamenti utili

- [mcamara/laravel-localization - GitHub](https://github.com/mcamara/laravel-localization)
<<<<<<< HEAD
- [Laravel Folio - Docs](https://laravel.com/docs/12.x/folio)
- [Traduzione route con mcamara](https://github.com/mcamara/laravel-localization#translated-routes)
- [Esempio di override parametri dinamici](https://github.com/mcamara/laravel-localization#translatable-route-parameters)
>>>>>>> d5fc9cd (.)
=======
- [Laravel Folio - Docs](https://laravel.com/project_docs/12.x/folio)
- [Traduzione route con mcamara](https://github.com/mcamara/laravel-localization#translated-routes)
- [Esempio di override parametri dinamici](https://github.com/mcamara/laravel-localization#translatable-route-parameters)
>>>>>>> 1bb26ee (.)
