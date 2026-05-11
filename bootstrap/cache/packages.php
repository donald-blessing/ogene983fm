<?php

declare(strict_types=1);

return  [
  'artesaos/seotools' => 
   [
    'aliases' => 
     [
      'SEO' => \Artesaos\SEOTools\Facades\SEOTools::class,
      'JsonLd' => \Artesaos\SEOTools\Facades\JsonLd::class,
      'SEOMeta' => \Artesaos\SEOTools\Facades\SEOMeta::class,
      'Twitter' => \Artesaos\SEOTools\Facades\TwitterCard::class,
      'OpenGraph' => \Artesaos\SEOTools\Facades\OpenGraph::class,
    ],
    'providers' => 
     [
      0 => \Artesaos\SEOTools\Providers\SEOToolsServiceProvider::class,
    ],
  ],
  'barryvdh/laravel-ide-helper' => 
   [
    'providers' => 
     [
      0 => \Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class,
    ],
  ],
  'bgaze/bootstrap-form' => 
   [
    'aliases' => 
     [
      'BF' => \Bgaze\BootstrapForm\Support\Facades\BF::class,
    ],
    'providers' => 
     [
      0 => \Bgaze\BootstrapForm\BootstrapFormServiceProvider::class,
    ],
  ],
  'bgaze/laravel-collective-html' => 
   [
    'aliases' => 
     [
      'Form' => \Collective\Html\FormFacade::class,
      'Html' => \Collective\Html\HtmlFacade::class,
    ],
    'providers' => 
     [
      0 => \Collective\Html\HtmlServiceProvider::class,
    ],
  ],
  'consoletvs/charts' => 
   [
    'providers' => 
     [
      0 => \ConsoleTVs\Charts\ChartsServiceProvider::class,
    ],
  ],
  'cyrildewit/eloquent-viewable' => 
   [
    'providers' => 
     [
      0 => \CyrildeWit\EloquentViewable\EloquentViewableServiceProvider::class,
    ],
  ],
  'imanghafoori/laravel-microscope' => 
   [
    'providers' => 
     [
      0 => \Imanghafoori\LaravelMicroscope\LaravelMicroscopeServiceProvider::class,
    ],
  ],
  'imanghafoori/smart-realtime-facades' => 
   [
    'providers' => 
     [
      0 => \Imanghafoori\RealtimeFacades\SmartRealTimeFacadesProvider::class,
    ],
  ],
  'intervention/image' => 
   [
    'aliases' => 
     [
      'Image' => \Intervention\Image\Facades\Image::class,
    ],
    'providers' => 
     [
      0 => \Intervention\Image\ImageServiceProvider::class,
    ],
  ],
  'laravel/legacy-factories' => 
   [
    'providers' => 
     [
      0 => \Illuminate\Database\Eloquent\LegacyFactoryServiceProvider::class,
    ],
  ],
  'laravel/sail' => 
   [
    'providers' => 
     [
      0 => \Laravel\Sail\SailServiceProvider::class,
    ],
  ],
  'laravel/socialite' => 
   [
    'aliases' => 
     [
      'Socialite' => \Laravel\Socialite\Facades\Socialite::class,
    ],
    'providers' => 
     [
      0 => \Laravel\Socialite\SocialiteServiceProvider::class,
    ],
  ],
  'laravel/tinker' => 
   [
    'providers' => 
     [
      0 => \Laravel\Tinker\TinkerServiceProvider::class,
    ],
  ],
  'laravel/ui' => 
   [
    'providers' => 
     [
      0 => \Laravel\Ui\UiServiceProvider::class,
    ],
  ],
  'livewire/livewire' => 
   [
    'aliases' => 
     [
      'Livewire' => \Livewire\Livewire::class,
    ],
    'providers' => 
     [
      0 => \Livewire\LivewireServiceProvider::class,
    ],
  ],
  'musonza/chat' => 
   [
    'aliases' => 
     [
      'Chat' => \Musonza\Chat\Facades\ChatFacade::class,
    ],
    'providers' => 
     [
      0 => \Musonza\Chat\ChatServiceProvider::class,
    ],
  ],
  'nesbot/carbon' => 
   [
    'providers' => 
     [
      0 => \Carbon\Laravel\ServiceProvider::class,
    ],
  ],
  'nunomaduro/collision' => 
   [
    'providers' => 
     [
      0 => \NunoMaduro\Collision\Adapters\Laravel\CollisionServiceProvider::class,
    ],
  ],
  'nunomaduro/termwind' => 
   [
    'providers' => 
     [
      0 => \Termwind\Laravel\TermwindServiceProvider::class,
    ],
  ],
  'realrashid/sweet-alert' => 
   [
    'aliases' => 
     [
      'Alert' => \RealRashid\SweetAlert\Facades\Alert::class,
    ],
    'providers' => 
     [
      0 => \RealRashid\SweetAlert\SweetAlertServiceProvider::class,
    ],
  ],
  'seongbae/comments' => 
   [
    'providers' => 
     [
      0 => \Laravelista\Comments\ServiceProvider::class,
    ],
  ],
  'spatie/laravel-fractal' => 
   [
    'aliases' => 
     [
      'Fractal' => \Spatie\Fractal\Facades\Fractal::class,
    ],
    'providers' => 
     [
      0 => \Spatie\Fractal\FractalServiceProvider::class,
    ],
  ],
  'spatie/laravel-honeypot' => 
   [
    'providers' => 
     [
      0 => \Spatie\Honeypot\HoneypotServiceProvider::class,
    ],
  ],
  'spatie/laravel-ignition' => 
   [
    'aliases' => 
     [
      'Flare' => \Spatie\LaravelIgnition\Facades\Flare::class,
    ],
    'providers' => 
     [
      0 => \Spatie\LaravelIgnition\IgnitionServiceProvider::class,
    ],
  ],
  'spatie/laravel-medialibrary' => 
   [
    'providers' => 
     [
      0 => \Spatie\MediaLibrary\MediaLibraryServiceProvider::class,
    ],
  ],
  'spatie/laravel-permission' => 
   [
    'providers' => 
     [
      0 => \Spatie\Permission\PermissionServiceProvider::class,
    ],
  ],
  'spatie/laravel-sitemap' => 
   [
    'providers' => 
     [
      0 => \Spatie\Sitemap\SitemapServiceProvider::class,
    ],
  ],
];
