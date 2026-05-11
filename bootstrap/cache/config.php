<?php

declare(strict_types=1);

return  [
  'concurrency' => 
   [
    'default' => 'process',
  ],
  'app' => 
   [
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://ogene983fm.test',
    'frontend_url' => 'http://localhost:3000',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'cipher' => 'AES-256-CBC',
    'key' => 'base64:wHqNTcHGnBdJm1cuEnxHjqSNrE+kiKSAVlvl/ivRIA0=',
    'previous_keys' => 
     [
    ],
    'maintenance' => 
     [
      'driver' => 'file',
      'store' => 'database',
    ],
    'providers' => 
     [
      0 => \Illuminate\Auth\AuthServiceProvider::class,
      1 => \Illuminate\Broadcasting\BroadcastServiceProvider::class,
      2 => \Illuminate\Bus\BusServiceProvider::class,
      3 => \Illuminate\Cache\CacheServiceProvider::class,
      4 => \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
      5 => \Illuminate\Cookie\CookieServiceProvider::class,
      6 => \Illuminate\Database\DatabaseServiceProvider::class,
      7 => \Illuminate\Encryption\EncryptionServiceProvider::class,
      8 => \Illuminate\Filesystem\FilesystemServiceProvider::class,
      9 => \Illuminate\Foundation\Providers\FoundationServiceProvider::class,
      10 => \Illuminate\Hashing\HashServiceProvider::class,
      11 => \Illuminate\Mail\MailServiceProvider::class,
      12 => \Illuminate\Notifications\NotificationServiceProvider::class,
      13 => \Illuminate\Pagination\PaginationServiceProvider::class,
      14 => \Illuminate\Pipeline\PipelineServiceProvider::class,
      15 => \Illuminate\Queue\QueueServiceProvider::class,
      16 => \Illuminate\Redis\RedisServiceProvider::class,
      17 => \Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
      18 => \Illuminate\Session\SessionServiceProvider::class,
      19 => \Illuminate\Translation\TranslationServiceProvider::class,
      20 => \Illuminate\Validation\ValidationServiceProvider::class,
      21 => \Illuminate\View\ViewServiceProvider::class,
      22 => \Collective\Html\HtmlServiceProvider::class,
      23 => \Musonza\Chat\ChatServiceProvider::class,
      24 => \App\Providers\AppServiceProvider::class,
      25 => \App\Providers\AuthServiceProvider::class,
      26 => \App\Providers\EventServiceProvider::class,
      27 => \App\Providers\RouteServiceProvider::class,
    ],
    'aliases' => 
     [
      'App' => \Illuminate\Support\Facades\App::class,
      'Arr' => \Illuminate\Support\Arr::class,
      'Artisan' => \Illuminate\Support\Facades\Artisan::class,
      'Auth' => \Illuminate\Support\Facades\Auth::class,
      'Blade' => \Illuminate\Support\Facades\Blade::class,
      'Broadcast' => \Illuminate\Support\Facades\Broadcast::class,
      'Bus' => \Illuminate\Support\Facades\Bus::class,
      'Cache' => \Illuminate\Support\Facades\Cache::class,
      'Config' => \Illuminate\Support\Facades\Config::class,
      'Cookie' => \Illuminate\Support\Facades\Cookie::class,
      'Crypt' => \Illuminate\Support\Facades\Crypt::class,
      'DB' => \Illuminate\Support\Facades\DB::class,
      'Eloquent' => \Illuminate\Database\Eloquent\Model::class,
      'Event' => \Illuminate\Support\Facades\Event::class,
      'File' => \Illuminate\Support\Facades\File::class,
      'Gate' => \Illuminate\Support\Facades\Gate::class,
      'Hash' => \Illuminate\Support\Facades\Hash::class,
      'Lang' => \Illuminate\Support\Facades\Lang::class,
      'Log' => \Illuminate\Support\Facades\Log::class,
      'Mail' => \Illuminate\Support\Facades\Mail::class,
      'Notification' => \Illuminate\Support\Facades\Notification::class,
      'Password' => \Illuminate\Support\Facades\Password::class,
      'Queue' => \Illuminate\Support\Facades\Queue::class,
      'Redirect' => \Illuminate\Support\Facades\Redirect::class,
      'Redis' => \Illuminate\Support\Facades\Redis::class,
      'Request' => \Illuminate\Support\Facades\Request::class,
      'Response' => \Illuminate\Support\Facades\Response::class,
      'Route' => \Illuminate\Support\Facades\Route::class,
      'Schema' => \Illuminate\Support\Facades\Schema::class,
      'Session' => \Illuminate\Support\Facades\Session::class,
      'Storage' => \Illuminate\Support\Facades\Storage::class,
      'Str' => \Illuminate\Support\Str::class,
      'URL' => \Illuminate\Support\Facades\URL::class,
      'Validator' => \Illuminate\Support\Facades\Validator::class,
      'View' => \Illuminate\Support\Facades\View::class,
      'Form' => \Collective\Html\FormFacade::class,
      'Html' => \Collective\Html\HtmlFacade::class,
      'Chat' => \Musonza\Chat\Facades\ChatFacade::class,
    ],
  ],
  'auth' => 
   [
    'defaults' => 
     [
      'guard' => 'web',
      'passwords' => 'users',
    ],
    'guards' => 
     [
      'web' => 
       [
        'driver' => 'session',
        'provider' => 'users',
      ],
      'api' => 
       [
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
      ],
    ],
    'providers' => 
     [
      'users' => 
       [
        'driver' => 'eloquent',
        'model' => \App\Models\User::class,
      ],
    ],
    'passwords' => 
     [
      'users' => 
       [
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ],
    ],
    'password_timeout' => 10800,
  ],
  'bootstrap_form' => 
   [
    'blade_directives' => true,
    'layout' => 'vertical',
    'custom' => false,
    'group' => 
     [
      'class' => 'test',
    ],
    'pull_right' => 'hidden-md-down col-lg-2 col-xl-3',
    'left_class' => 'col-lg-2 col-xl-3',
    'right_class' => 'col-lg-10 col-xl-9',
    'lspace' => 'mr-2',
    'hspace' => 'mr-3',
    'vspace' => 'my-1',
    'show_all_errors' => false,
  ],
  'broadcasting' => 
   [
    'default' => 'log',
    'connections' => 
     [
      'reverb' => 
       [
        'driver' => 'reverb',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
         [
          'host' => NULL,
          'port' => 443,
          'scheme' => 'https',
          'useTLS' => true,
        ],
        'client_options' => 
         [
        ],
      ],
      'pusher' => 
       [
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
         [
          'cluster' => 'mt1',
          'useTLS' => true,
        ],
      ],
      'ably' => 
       [
        'driver' => 'ably',
        'key' => NULL,
      ],
      'log' => 
       [
        'driver' => 'log',
      ],
      'null' => 
       [
        'driver' => 'null',
      ],
      'redis' => 
       [
        'driver' => 'redis',
        'connection' => 'default',
      ],
    ],
  ],
  'cache' => 
   [
    'default' => 'file',
    'stores' => 
     [
      'array' => 
       [
        'driver' => 'array',
      ],
      'session' => 
       [
        'driver' => 'session',
        'key' => '_cache',
      ],
      'database' => 
       [
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ],
      'file' => 
       [
        'driver' => 'file',
        'path' => '/Users/donald/Desktop/projects/ogenefm/ogene983fm/storage/framework/cache/data',
      ],
      'memcached' => 
       [
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
         [
          0 => NULL,
          1 => NULL,
        ],
        'options' => 
         [
        ],
        'servers' => 
         [
          0 => 
           [
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ],
        ],
      ],
      'redis' => 
       [
        'driver' => 'redis',
        'connection' => 'cache',
      ],
      'dynamodb' => 
       [
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ],
      'octane' => 
       [
        'driver' => 'octane',
      ],
      'failover' => 
       [
        'driver' => 'failover',
        'stores' => 
         [
          0 => 'database',
          1 => 'array',
        ],
      ],
      'apc' => 
       [
        'driver' => 'apc',
      ],
      '|-microscope-|' => 
       [
        'driver' => 'file',
        'path' => '/Users/donald/Desktop/projects/ogenefm/ogene983fm/storage/framework/cache/microscope',
      ],
    ],
    'prefix' => 'laravel_cache',
  ],
  'charts' => 
   [
    'default_library' => 'Chartjs',
    'global_route_prefix' => 'api/chart',
    'global_middlewares' => 
     [
      0 => 'web',
    ],
    'global_route_name_prefix' => 'charts',
  ],
  'comments' => 
   [
    'model' => \Laravelista\Comments\Comment::class,
    'permissions' => 
     [
      'create-comment' => 'Laravelista\\Comments\\CommentPolicy@create',
      'delete-comment' => 'Laravelista\\Comments\\CommentPolicy@delete',
      'edit-comment' => 'Laravelista\\Comments\\CommentPolicy@update',
      'reply-to-comment' => 'Laravelista\\Comments\\CommentPolicy@reply',
    ],
    'controller' => \Laravelista\Comments\WebCommentController::class,
    'routes' => true,
    'approval_required' => false,
    'guest_commenting' => false,
    'soft_deletes' => false,
    'load_migrations' => true,
    'paginator_use_bootstrap' => true,
  ],
  'cors' => 
   [
    'paths' => 
     [
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ],
    'allowed_methods' => 
     [
      0 => '*',
    ],
    'allowed_origins' => 
     [
      0 => '*',
    ],
    'allowed_origins_patterns' => 
     [
    ],
    'allowed_headers' => 
     [
      0 => '*',
    ],
    'exposed_headers' => 
     [
    ],
    'max_age' => 0,
    'supports_credentials' => false,
  ],
  'database' => 
   [
    'default' => 'mysql',
    'connections' => 
     [
      'sqlite' => 
       [
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'ogene983fm',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ],
      'mysql' => 
       [
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'ogene983fm',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
         [
        ],
      ],
      'mariadb' => 
       [
        'driver' => 'mariadb',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'ogene983fm',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
         [
        ],
      ],
      'pgsql' => 
       [
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'ogene983fm',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ],
      'sqlsrv' => 
       [
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'ogene983fm',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ],
    ],
    'migrations' => 'migrations',
    'redis' => 
     [
      'client' => 'phpredis',
      'options' => 
       [
        'cluster' => 'redis',
        'prefix' => 'laravel_database_',
      ],
      'default' => 
       [
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ],
      'cache' => 
       [
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 1,
      ],
    ],
  ],
  'eloquent-viewable' => 
   [
    'models' => 
     [
      'view' => 
       [
        'table_name' => 'views',
        'connection' => 'mysql',
      ],
    ],
    'cache' => 
     [
      'key' => 'cyrildewit.eloquent-viewable.cache',
      'store' => 'file',
      'lifetime_in_minutes' => 60,
    ],
    'cooldown' => 
     [
      'key' => 'cyrildewit.eloquent-viewable.cooldowns',
    ],
    'ignore_bots' => true,
    'honor_dnt' => false,
    'visitor_cookie_key' => 'eloquent_viewable',
    'ignored_ip_addresses' => 
     [
    ],
    'session' => 
     [
      'key' => 'cyrildewit.eloquent-viewable.session',
    ],
  ],
  'filesystems' => 
   [
    'default' => 'local',
    'disks' => 
     [
      'local' => 
       [
        'driver' => 'local',
        'root' => '/media',
      ],
      'public' => 
       [
        'driver' => 'local',
        'root' => '/media',
        'url' => 'http://ogene983fm.test/media',
        'visibility' => 'public',
      ],
      's3' => 
       [
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
      ],
    ],
    'links' => 
     [
      '/Users/donald/Desktop/projects/ogenefm/ogene983fm/public/storage' => '/Users/donald/Desktop/projects/ogenefm/ogene983fm/storage/app/public',
    ],
    'cloud' => 's3',
  ],
  'flare' => 
   [
    'key' => NULL,
    'flare_middleware' => 
     [
      0 => \Spatie\FlareClient\FlareMiddleware\RemoveRequestIp::class,
      1 => \Spatie\FlareClient\FlareMiddleware\AddGitInformation::class,
      2 => \Spatie\LaravelIgnition\FlareMiddleware\AddNotifierName::class,
      3 => \Spatie\LaravelIgnition\FlareMiddleware\AddEnvironmentInformation::class,
      4 => \Spatie\LaravelIgnition\FlareMiddleware\AddExceptionInformation::class,
      5 => \Spatie\LaravelIgnition\FlareMiddleware\AddDumps::class,
      \Spatie\LaravelIgnition\FlareMiddleware\AddLogs::class => 
       [
        'maximum_number_of_collected_logs' => 200,
      ],
      \Spatie\LaravelIgnition\FlareMiddleware\AddQueries::class => 
       [
        'maximum_number_of_collected_queries' => 200,
        'report_query_bindings' => true,
      ],
      \Spatie\LaravelIgnition\FlareMiddleware\AddJobs::class => 
       [
        'max_chained_job_reporting_depth' => 5,
      ],
      6 => \Spatie\LaravelIgnition\FlareMiddleware\AddContext::class,
      7 => \Spatie\LaravelIgnition\FlareMiddleware\AddExceptionHandledStatus::class,
      \Spatie\FlareClient\FlareMiddleware\CensorRequestBodyFields::class => 
       [
        'censor_fields' => 
         [
          0 => 'password',
          1 => 'password_confirmation',
        ],
      ],
      \Spatie\FlareClient\FlareMiddleware\CensorRequestHeaders::class => 
       [
        'headers' => 
         [
          0 => 'API-KEY',
          1 => 'Authorization',
          2 => 'Cookie',
          3 => 'Set-Cookie',
          4 => 'X-CSRF-TOKEN',
          5 => 'X-XSRF-TOKEN',
        ],
      ],
    ],
    'send_logs_as_events' => true,
    'reporting' => 
     [
      'anonymize_ips' => true,
      'collect_git_information' => true,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
    ],
  ],
  'hashing' => 
   [
    'driver' => 'bcrypt',
    'bcrypt' => 
     [
      'rounds' => 10,
    ],
    'argon' => 
     [
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ],
    'rehash_on_login' => true,
  ],
  'honeypot' => 
   [
    'enabled' => true,
    'name_field_name' => 'my_name',
    'randomize_name_field_name' => true,
    'valid_from_timestamp' => true,
    'valid_from_field_name' => 'valid_from',
    'amount_of_seconds' => 1,
    'respond_to_spam_with' => \Spatie\Honeypot\SpamResponder\BlankPageResponder::class,
    'honeypot_fields_required_for_all_forms' => false,
    'spam_protection' => \Spatie\Honeypot\SpamProtection::class,
    'with_csp' => false,
  ],
  'ignition' => 
   [
    'editor' => 'phpstorm',
    'theme' => 'light',
    'enable_share_button' => true,
    'register_commands' => false,
    'solution_providers' => 
     [
      0 => \Spatie\Ignition\Solutions\SolutionProviders\BadMethodCallSolutionProvider::class,
      1 => \Spatie\Ignition\Solutions\SolutionProviders\MergeConflictSolutionProvider::class,
      2 => \Spatie\Ignition\Solutions\SolutionProviders\UndefinedPropertySolutionProvider::class,
      3 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\IncorrectValetDbCredentialsSolutionProvider::class,
      4 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\MissingAppKeySolutionProvider::class,
      5 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\DefaultDbNameSolutionProvider::class,
      6 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\TableNotFoundSolutionProvider::class,
      7 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\MissingImportSolutionProvider::class,
      8 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\InvalidRouteActionSolutionProvider::class,
      9 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\ViewNotFoundSolutionProvider::class,
      10 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\RunningLaravelDuskInProductionProvider::class,
      11 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\MissingColumnSolutionProvider::class,
      12 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\UnknownValidationSolutionProvider::class,
      13 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\MissingMixManifestSolutionProvider::class,
      14 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\MissingViteManifestSolutionProvider::class,
      15 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\MissingLivewireComponentSolutionProvider::class,
      16 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\UndefinedViewVariableSolutionProvider::class,
      17 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\GenericLaravelExceptionSolutionProvider::class,
      18 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\OpenAiSolutionProvider::class,
      19 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\SailNetworkSolutionProvider::class,
      20 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\UnknownMysql8CollationSolutionProvider::class,
      21 => \Spatie\LaravelIgnition\Solutions\SolutionProviders\UnknownMariadbCollationSolutionProvider::class,
    ],
    'ignored_solution_providers' => 
     [
    ],
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
    'settings_file_path' => '',
    'recorders' => 
     [
      0 => \Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpRecorder::class,
      1 => \Spatie\LaravelIgnition\Recorders\JobRecorder\JobRecorder::class,
      2 => \Spatie\LaravelIgnition\Recorders\LogRecorder\LogRecorder::class,
      3 => \Spatie\LaravelIgnition\Recorders\QueryRecorder\QueryRecorder::class,
    ],
    'open_ai_key' => NULL,
    'with_stack_frame_arguments' => true,
    'argument_reducers' => 
     [
      0 => \Spatie\Backtrace\Arguments\Reducers\BaseTypeArgumentReducer::class,
      1 => \Spatie\Backtrace\Arguments\Reducers\ArrayArgumentReducer::class,
      2 => \Spatie\Backtrace\Arguments\Reducers\StdClassArgumentReducer::class,
      3 => \Spatie\Backtrace\Arguments\Reducers\EnumArgumentReducer::class,
      4 => \Spatie\Backtrace\Arguments\Reducers\ClosureArgumentReducer::class,
      5 => \Spatie\Backtrace\Arguments\Reducers\DateTimeArgumentReducer::class,
      6 => \Spatie\Backtrace\Arguments\Reducers\DateTimeZoneArgumentReducer::class,
      7 => \Spatie\Backtrace\Arguments\Reducers\SymphonyRequestArgumentReducer::class,
      8 => \Spatie\LaravelIgnition\ArgumentReducers\ModelArgumentReducer::class,
      9 => \Spatie\LaravelIgnition\ArgumentReducers\CollectionArgumentReducer::class,
      10 => \Spatie\Backtrace\Arguments\Reducers\StringableArgumentReducer::class,
    ],
  ],
  'image' => 
   [
    'driver' => 'gd',
  ],
  'laravel-share' => 
   [
    'services' => 
     [
      'facebook' => 
       [
        'uri' => 'https://www.facebook.com/sharer/sharer.php?u=',
      ],
      'twitter' => 
       [
        'uri' => 'https://twitter.com/intent/tweet',
        'text' => 'Default share text',
      ],
      'linkedin' => 
       [
        'uri' => 'http://www.linkedin.com/shareArticle',
        'extra' => 
         [
          'mini' => 'true',
        ],
      ],
      'whatsapp' => 
       [
        'uri' => 'https://wa.me/?text=',
        'extra' => 
         [
          'mini' => 'true',
        ],
      ],
      'pinterest' => 
       [
        'uri' => 'http://pinterest.com/pin/create/button/?url=',
      ],
      'reddit' => 
       [
        'uri' => 'https://www.reddit.com/submit',
        'text' => 'Default share text',
      ],
      'telegram' => 
       [
        'uri' => 'https://telegram.me/share/url',
        'text' => 'Default share text',
      ],
    ],
    'fontAwesomeVersion' => 4,
  ],
  'logging' => 
   [
    'default' => 'stack',
    'deprecations' => 
     [
      'channel' => 'null',
      'trace' => false,
    ],
    'channels' => 
     [
      'stack' => 
       [
        'driver' => 'stack',
        'channels' => 
         [
          0 => 'daily',
        ],
        'ignore_exceptions' => false,
      ],
      'single' => 
       [
        'driver' => 'single',
        'path' => '/Users/donald/Desktop/projects/ogenefm/ogene983fm/storage/logs/laravel.log',
        'level' => 'debug',
      ],
      'daily' => 
       [
        'driver' => 'daily',
        'path' => '/Users/donald/Desktop/projects/ogenefm/ogene983fm/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ],
      'slack' => 
       [
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ],
      'papertrail' => 
       [
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => \Monolog\Handler\SyslogUdpHandler::class,
        'handler_with' => 
         [
          'host' => NULL,
          'port' => NULL,
        ],
      ],
      'stderr' => 
       [
        'driver' => 'monolog',
        'handler' => \Monolog\Handler\StreamHandler::class,
        'formatter' => NULL,
        'with' => 
         [
          'stream' => 'php://stderr',
        ],
      ],
      'syslog' => 
       [
        'driver' => 'syslog',
        'level' => 'debug',
      ],
      'errorlog' => 
       [
        'driver' => 'errorlog',
        'level' => 'debug',
      ],
      'null' => 
       [
        'driver' => 'monolog',
        'handler' => \Monolog\Handler\NullHandler::class,
      ],
      'emergency' => 
       [
        'path' => '/Users/donald/Desktop/projects/ogenefm/ogene983fm/storage/logs/laravel.log',
      ],
    ],
  ],
  'mail' => 
   [
    'default' => 'smtp',
    'mailers' => 
     [
      'smtp' => 
       [
        'transport' => 'smtp',
        'scheme' => NULL,
        'url' => NULL,
        'host' => 'mailhog',
        'port' => '1025',
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
        'local_domain' => 'ogene983fm.test',
      ],
      'ses' => 
       [
        'transport' => 'ses',
      ],
      'postmark' => 
       [
        'transport' => 'postmark',
      ],
      'resend' => 
       [
        'transport' => 'resend',
      ],
      'sendmail' => 
       [
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs -i',
      ],
      'log' => 
       [
        'transport' => 'log',
        'channel' => NULL,
      ],
      'array' => 
       [
        'transport' => 'array',
      ],
      'failover' => 
       [
        'transport' => 'failover',
        'mailers' => 
         [
          0 => 'smtp',
          1 => 'log',
        ],
        'retry_after' => 60,
      ],
      'roundrobin' => 
       [
        'transport' => 'roundrobin',
        'mailers' => 
         [
          0 => 'ses',
          1 => 'postmark',
        ],
        'retry_after' => 60,
      ],
    ],
    'from' => 
     [
      'address' => NULL,
      'name' => 'Laravel',
    ],
    'markdown' => 
     [
      'theme' => 'default',
      'paths' => 
       [
        0 => '/Users/donald/Desktop/projects/ogenefm/ogene983fm/resources/views/vendor/mail',
      ],
    ],
    'driver' => 'smtp',
    'host' => 'mailhog',
    'port' => '1025',
    'encryption' => NULL,
    'username' => NULL,
    'password' => NULL,
    'sendmail' => '/usr/sbin/sendmail -bs',
    'log_channel' => NULL,
  ],
  'musonza_chat' => 
   [
    'database_connection' => NULL,
    'broadcasts' => false,
    'broadcast_connection' => NULL,
    'broadcast_queue' => NULL,
    'encrypt_messages' => false,
    'unarchive_on_new_message' => true,
    'sender_fields_whitelist' => 
     [
    ],
    'participant_models' => 
     [
    ],
    'should_load_routes' => false,
    'routes' => 
     [
      'path_prefix' => 'chat',
      'middleware' => 
       [
        0 => 'web',
      ],
    ],
    'pagination' => 
     [
      'page' => 1,
      'perPage' => 25,
      'sorting' => 'asc',
      'columns' => 
       [
        0 => '*',
      ],
      'pageName' => 'page',
    ],
    'transformers' => 
     [
      'conversation' => NULL,
      'message' => NULL,
      'participant' => NULL,
    ],
    'user_model' => \App\Models\User::class,
    'user_model_primary_key' => NULL,
    'sent_message_event' => \Musonza\Chat\Eventing\MessageWasSent::class,
    'make_three_or_more_users_public' => true,
  ],
  'permission' => 
   [
    'models' => 
     [
      'permission' => \Spatie\Permission\Models\Permission::class,
      'role' => \Spatie\Permission\Models\Role::class,
    ],
    'table_names' => 
     [
      'roles' => 'roles',
      'permissions' => 'permissions',
      'model_has_permissions' => 'model_has_permissions',
      'model_has_roles' => 'model_has_roles',
      'role_has_permissions' => 'role_has_permissions',
    ],
    'column_names' => 
     [
      'model_morph_key' => 'model_id',
    ],
    'register_permission_check_method' => true,
    'register_octane_reset_listener' => false,
    'events_enabled' => false,
    'teams' => false,
    'team_resolver' => \Spatie\Permission\DefaultTeamResolver::class,
    'use_passport_client_credentials' => false,
    'display_permission_in_exception' => false,
    'display_role_in_exception' => false,
    'enable_wildcard_permission' => false,
    'cache' => 
     [
      'expiration_time' => 
      \DateInterval::__set_state([
         'from_string' => true,
         'date_string' => '24 hours',
      ]),
      'key' => 'spatie.permission.cache',
      'model_key' => 'name',
      'store' => 'default',
    ],
  ],
  'queue' => 
   [
    'default' => 'sync',
    'connections' => 
     [
      'sync' => 
       [
        'driver' => 'sync',
      ],
      'database' => 
       [
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ],
      'beanstalkd' => 
       [
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
      ],
      'sqs' => 
       [
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ],
      'redis' => 
       [
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ],
      'deferred' => 
       [
        'driver' => 'deferred',
      ],
      'failover' => 
       [
        'driver' => 'failover',
        'connections' => 
         [
          0 => 'database',
          1 => 'deferred',
        ],
      ],
    ],
    'batching' => 
     [
      'database' => 'mysql',
      'table' => 'job_batches',
    ],
    'failed' => 
     [
      'driver' => 'database',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ],
  ],
  'seotools' => 
   [
    'inertia' => false,
    'meta' => 
     [
      'defaults' => 
       [
        'title' => 'It\'s Over 9000!',
        'titleBefore' => false,
        'description' => 'For those who helped create the Genki Dama',
        'separator' => ' - ',
        'keywords' => 
         [
        ],
        'canonical' => false,
        'robots' => false,
      ],
      'webmaster_tags' => 
       [
        'google' => NULL,
        'bing' => NULL,
        'alexa' => NULL,
        'pinterest' => NULL,
        'yandex' => NULL,
      ],
      'add_notranslate_class' => false,
    ],
    'opengraph' => 
     [
      'defaults' => 
       [
        'title' => 'Over 9000 Thousand!',
        'description' => 'For those who helped create the Genki Dama',
        'url' => false,
        'type' => false,
        'site_name' => false,
        'images' => 
         [
        ],
      ],
    ],
    'twitter' => 
     [
      'defaults' => 
       [
      ],
    ],
    'json-ld' => 
     [
      'defaults' => 
       [
        'title' => 'Over 9000 Thousand!',
        'description' => 'For those who helped create the Genki Dama',
        'url' => false,
        'type' => 'WebPage',
        'images' => 
         [
        ],
      ],
    ],
  ],
  'services' => 
   [
    'postmark' => 
     [
      'token' => NULL,
    ],
    'resend' => 
     [
      'key' => NULL,
    ],
    'ses' => 
     [
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ],
    'slack' => 
     [
      'notifications' => 
       [
        'bot_user_oauth_token' => NULL,
        'channel' => NULL,
      ],
    ],
    'mailgun' => 
     [
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ],
  ],
  'session' => 
   [
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/Users/donald/Desktop/projects/ogenefm/ogene983fm/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
     [
      0 => 2,
      1 => 100,
    ],
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
    'partitioned' => false,
  ],
  'sweetalert' => 
   [
    'theme' => 'default',
    'cdn' => NULL,
    'alwaysLoadJS' => false,
    'neverLoadJS' => false,
    'timer' => 5000,
    'width' => '32rem',
    'height_auto' => true,
    'padding' => '1.25rem',
    'background' => '#fff',
    'animation' => true,
    'animatecss' => 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
    'show_confirm_button' => true,
    'show_close_button' => false,
    'button_text' => 
     [
      'confirm' => 'OK',
      'cancel' => 'Cancel',
    ],
    'toast_position' => 'top-end',
    'timer_progress_bar' => false,
    'middleware' => 
     [
      'toast_position' => 'top-end',
      'toast_close_button' => true,
    ],
    'customClass' => 
     [
      'container' => NULL,
      'popup' => NULL,
      'header' => NULL,
      'title' => NULL,
      'closeButton' => NULL,
      'icon' => NULL,
      'image' => NULL,
      'content' => NULL,
      'input' => NULL,
      'actions' => NULL,
      'confirmButton' => NULL,
      'cancelButton' => NULL,
      'footer' => NULL,
    ],
    'confirm_delete_confirm_button_text' => 'Yes, delete it!',
    'confirm_delete_confirm_button_color' => NULL,
    'confirm_delete_cancel_button_color' => '#d33',
    'confirm_delete_cancel_button_text' => 'Cancel',
    'confirm_delete_show_cancel_button' => true,
    'confirm_delete_show_close_button' => false,
    'confirm_delete_icon' => 'warning',
    'confirm_delete_show_loader_on_confirm' => true,
    'local' => true,
  ],
  'tinker' => 
   [
    'commands' => 
     [
    ],
    'alias' => 
     [
    ],
    'dont_alias' => 
     [
      0 => 'App\\Nova',
    ],
    'trust_project' => 'always',
  ],
  'trustedproxy' => 
   [
    'proxies' => NULL,
    'headers' => 30,
  ],
  'view' => 
   [
    'paths' => 
     [
      0 => '/Users/donald/Desktop/projects/ogenefm/ogene983fm/resources/views',
    ],
    'compiled' => '/Users/donald/Desktop/projects/ogenefm/ogene983fm/storage/framework/views',
  ],
  'microscope' => 
   [
    'is_enabled' => true,
    'no_fix' => false,
    'ignore' => 
     [
    ],
    'log_unused_view_vars' => true,
    'ignored_namespaces' => 
     [
    ],
    'class_search_buffer' => 2500,
    'action_comment_template' => 'microscope_package::actions_comment',
    'additional_route_files' => 
     [
    ],
    'additional_config_paths' => 
     [
    ],
    'additional_composer_paths' => 
     [
    ],
  ],
  'livewire' => 
   [
    'component_locations' => 
     [
      0 => '/Users/donald/Desktop/projects/ogenefm/ogene983fm/resources/views/components',
      1 => '/Users/donald/Desktop/projects/ogenefm/ogene983fm/resources/views/livewire',
    ],
    'component_namespaces' => 
     [
      'layouts' => '/Users/donald/Desktop/projects/ogenefm/ogene983fm/resources/views/layouts',
      'pages' => '/Users/donald/Desktop/projects/ogenefm/ogene983fm/resources/views/pages',
    ],
    'component_layout' => 'layouts::app',
    'component_placeholder' => NULL,
    'make_command' => 
     [
      'type' => 'sfc',
      'emoji' => true,
      'with' => 
       [
        'js' => false,
        'css' => false,
        'test' => false,
      ],
    ],
    'class_namespace' => 'App\\Livewire',
    'class_path' => '/Users/donald/Desktop/projects/ogenefm/ogene983fm/app/Livewire',
    'view_path' => '/Users/donald/Desktop/projects/ogenefm/ogene983fm/resources/views/livewire',
    'temporary_file_upload' => 
     [
      'disk' => NULL,
      'rules' => NULL,
      'directory' => NULL,
      'middleware' => NULL,
      'preview_mimes' => 
       [
        0 => 'png',
        1 => 'gif',
        2 => 'bmp',
        3 => 'svg',
        4 => 'wav',
        5 => 'mp4',
        6 => 'mov',
        7 => 'avi',
        8 => 'wmv',
        9 => 'mp3',
        10 => 'm4a',
        11 => 'jpg',
        12 => 'jpeg',
        13 => 'mpga',
        14 => 'webp',
        15 => 'wma',
      ],
      'max_upload_time' => 5,
      'cleanup' => true,
    ],
    'render_on_redirect' => false,
    'legacy_model_binding' => false,
    'inject_assets' => true,
    'navigate' => 
     [
      'show_progress_bar' => true,
      'progress_bar_color' => '#2299dd',
    ],
    'inject_morph_markers' => true,
    'smart_wire_keys' => true,
    'pagination_theme' => 'tailwind',
    'release_token' => 'a',
    'csp_safe' => false,
    'payload' => 
     [
      'max_size' => 1048576,
      'max_nesting_depth' => 10,
      'max_calls' => 50,
      'max_components' => 200,
    ],
  ],
  'fractal' => 
   [
    'default_serializer' => '',
    'default_paginator' => '',
    'base_url' => NULL,
    'fractal_class' => \Spatie\Fractal\Fractal::class,
    'auto_includes' => 
     [
      'enabled' => true,
      'request_key' => 'include',
    ],
    'auto_excludes' => 
     [
      'enabled' => true,
      'request_key' => 'exclude',
    ],
    'auto_fieldsets' => 
     [
      'enabled' => false,
      'request_key' => 'fields',
    ],
  ],
  'media-library' => 
   [
    'disk_name' => 'public',
    'max_file_size' => 10485760,
    'queue_connection_name' => 'sync',
    'queue_name' => '',
    'queue_conversions_by_default' => true,
    'queue_conversions_after_database_commit' => true,
    'media_model' => \Spatie\MediaLibrary\MediaCollections\Models\Media::class,
    'media_observer' => \Spatie\MediaLibrary\MediaCollections\Models\Observers\MediaObserver::class,
    'use_default_collection_serialization' => false,
    'temporary_upload_model' => 'Spatie\\MediaLibraryPro\\Models\\TemporaryUpload',
    'enable_temporary_uploads_session_affinity' => true,
    'generate_thumbnails_for_temporary_uploads' => true,
    'file_namer' => \Spatie\MediaLibrary\Support\FileNamer\DefaultFileNamer::class,
    'path_generator' => \Spatie\MediaLibrary\Support\PathGenerator\DefaultPathGenerator::class,
    'file_remover_class' => \Spatie\MediaLibrary\Support\FileRemover\DefaultFileRemover::class,
    'custom_path_generators' => 
     [
    ],
    'url_generator' => \Spatie\MediaLibrary\Support\UrlGenerator\DefaultUrlGenerator::class,
    'moves_media_on_update' => false,
    'version_urls' => false,
    'image_optimizers' => 
     [
      \Spatie\ImageOptimizer\Optimizers\Jpegoptim::class => 
       [
        0 => '-m85',
        1 => '--force',
        2 => '--strip-all',
        3 => '--all-progressive',
      ],
      \Spatie\ImageOptimizer\Optimizers\Pngquant::class => 
       [
        0 => '--force',
      ],
      \Spatie\ImageOptimizer\Optimizers\Optipng::class => 
       [
        0 => '-i0',
        1 => '-o2',
        2 => '-quiet',
      ],
      \Spatie\ImageOptimizer\Optimizers\Svgo::class => 
       [
        0 => '--disable=cleanupIDs',
      ],
      \Spatie\ImageOptimizer\Optimizers\Gifsicle::class => 
       [
        0 => '-b',
        1 => '-O3',
      ],
      \Spatie\ImageOptimizer\Optimizers\Cwebp::class => 
       [
        0 => '-m 6',
        1 => '-pass 10',
        2 => '-mt',
        3 => '-q 90',
      ],
      \Spatie\ImageOptimizer\Optimizers\Avifenc::class => 
       [
        0 => '-a cq-level=23',
        1 => '-j all',
        2 => '--min 0',
        3 => '--max 63',
        4 => '--minalpha 0',
        5 => '--maxalpha 63',
        6 => '-a end-usage=q',
        7 => '-a tune=ssim',
      ],
    ],
    'image_generators' => 
     [
      0 => \Spatie\MediaLibrary\Conversions\ImageGenerators\Image::class,
      1 => \Spatie\MediaLibrary\Conversions\ImageGenerators\Webp::class,
      2 => \Spatie\MediaLibrary\Conversions\ImageGenerators\Avif::class,
      3 => \Spatie\MediaLibrary\Conversions\ImageGenerators\Pdf::class,
      4 => \Spatie\MediaLibrary\Conversions\ImageGenerators\Svg::class,
      5 => \Spatie\MediaLibrary\Conversions\ImageGenerators\Video::class,
    ],
    'temporary_directory_path' => NULL,
    'image_driver' => 'gd',
    'ffmpeg_path' => '/usr/bin/ffmpeg',
    'ffprobe_path' => '/usr/bin/ffprobe',
    'ffmpeg_timeout' => 900,
    'ffmpeg_threads' => 0,
    'jobs' => 
     [
      'perform_conversions' => \Spatie\MediaLibrary\Conversions\Jobs\PerformConversionsJob::class,
      'generate_responsive_images' => \Spatie\MediaLibrary\ResponsiveImages\Jobs\GenerateResponsiveImagesJob::class,
    ],
    'media_downloader' => \Spatie\MediaLibrary\Downloaders\DefaultDownloader::class,
    'media_downloader_ssl' => true,
    'temporary_url_default_lifetime' => 5,
    'remote' => 
     [
      'extra_headers' => 
       [
        'CacheControl' => 'max-age=604800',
      ],
    ],
    'responsive_images' => 
     [
      'width_calculator' => \Spatie\MediaLibrary\ResponsiveImages\WidthCalculator\FileSizeOptimizedWidthCalculator::class,
      'use_tiny_placeholders' => true,
      'tiny_placeholder_generator' => \Spatie\MediaLibrary\ResponsiveImages\TinyPlaceholderGenerator\Blurred::class,
    ],
    'enable_vapor_uploads' => false,
    'default_loading_attribute_value' => NULL,
    'prefix' => '',
    'force_lazy_loading' => true,
  ],
  'sitemap' => 
   [
    'guzzle_options' => 
     [
      'cookies' => true,
      'connect_timeout' => 10,
      'timeout' => 10,
      'allow_redirects' => false,
    ],
    'execute_javascript' => false,
    'chrome_binary_path' => NULL,
    'crawl_profile' => \Spatie\Sitemap\Crawler\Profile::class,
  ],
  'ide-helper' => 
   [
    'filename' => '_ide_helper.php',
    'models_filename' => '_ide_helper_models.php',
    'meta_filename' => '.phpstorm.meta.php',
    'include_fluent' => false,
    'write_query_methods' => true,
    'write_model_magic_where' => true,
    'write_model_external_builder_methods' => true,
    'write_model_relation_count_properties' => true,
    'write_model_relation_exists_properties' => false,
    'write_eloquent_model_mixins' => false,
    'include_helpers' => false,
    'helper_files' => 
     [
      0 => '/Users/donald/Desktop/projects/ogenefm/ogene983fm/vendor/laravel/framework/src/Illuminate/Support/helpers.php',
      1 => '/Users/donald/Desktop/projects/ogenefm/ogene983fm/vendor/laravel/framework/src/Illuminate/Foundation/helpers.php',
    ],
    'model_locations' => 
     [
      0 => 'app',
    ],
    'ignored_models' => 
     [
    ],
    'model_hooks' => 
     [
    ],
    'extra' => 
     [
      'Eloquent' => 
       [
        0 => \Illuminate\Database\Eloquent\Builder::class,
        1 => \Illuminate\Database\Query\Builder::class,
      ],
      'Session' => 
       [
        0 => \Illuminate\Session\Store::class,
      ],
    ],
    'magic' => 
     [
    ],
    'interfaces' => 
     [
    ],
    'model_camel_case_properties' => false,
    'type_overrides' => 
     [
      'integer' => 'int',
      'boolean' => 'bool',
    ],
    'include_class_docblocks' => false,
    'force_fqn' => false,
    'use_generics_annotations' => true,
    'macro_default_return_types' => 
     [
      \Illuminate\Http\Client\Factory::class => \Illuminate\Http\Client\PendingRequest::class,
    ],
    'additional_relation_types' => 
     [
    ],
    'additional_relation_return_types' => 
     [
    ],
    'enforce_nullable_relationships' => true,
    'soft_deletes_force_nullable' => true,
    'post_migrate' => 
     [
    ],
  ],
];
