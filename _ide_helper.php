<?php
/* @noinspection ALL */
// @formatter:off
// phpcs:ignoreFile

/**
 * A helper file for Laravel, to provide autocomplete information to your IDE
 * Generated for Laravel 13.20.0.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */
namespace Illuminate\Support\Facades {
    /**
     * @see \Illuminate\Foundation\Application
     */
    class App {
        /**
         * Begin configuring a new Laravel application instance.
         *
         * @param string|null $basePath
         * @return \Illuminate\Foundation\Configuration\ApplicationBuilder
         * @static
         */
        public static function configure($basePath = null)
        {
            return \Illuminate\Foundation\Application::configure($basePath);
        }

        /**
         * Infer the application's base directory from the environment.
         *
         * @return string
         * @static
         */
        public static function inferBasePath()
        {
            return \Illuminate\Foundation\Application::inferBasePath();
        }

        /**
         * Get the version number of the application.
         *
         * @return string
         * @static
         */
        public static function version()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->version();
        }

        /**
         * Run the given array of bootstrap classes.
         *
         * @param string[] $bootstrappers
         * @return void
         * @static
         */
        public static function bootstrapWith($bootstrappers)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->bootstrapWith($bootstrappers);
        }

        /**
         * Register a callback to run after loading the environment.
         *
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function afterLoadingEnvironment($callback)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->afterLoadingEnvironment($callback);
        }

        /**
         * Register a callback to run before a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function beforeBootstrapping($bootstrapper, $callback)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->beforeBootstrapping($bootstrapper, $callback);
        }

        /**
         * Register a callback to run after a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function afterBootstrapping($bootstrapper, $callback)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->afterBootstrapping($bootstrapper, $callback);
        }

        /**
         * Determine if the application has been bootstrapped before.
         *
         * @return bool
         * @static
         */
        public static function hasBeenBootstrapped()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->hasBeenBootstrapped();
        }

        /**
         * Set the base path for the application.
         *
         * @param string $basePath
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function setBasePath($basePath)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->setBasePath($basePath);
        }

        /**
         * Get the path to the application "app" directory.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function path($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->path($path);
        }

        /**
         * Set the application directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function useAppPath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useAppPath($path);
        }

        /**
         * Get the base path of the Laravel installation.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function basePath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->basePath($path);
        }

        /**
         * Get the path to the bootstrap directory.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function bootstrapPath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->bootstrapPath($path);
        }

        /**
         * Get the path to the service provider list in the bootstrap directory.
         *
         * @return string
         * @static
         */
        public static function getBootstrapProvidersPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getBootstrapProvidersPath();
        }

        /**
         * Set the bootstrap file directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function useBootstrapPath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useBootstrapPath($path);
        }

        /**
         * Get the path to the application configuration files.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function configPath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->configPath($path);
        }

        /**
         * Set the configuration directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function useConfigPath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useConfigPath($path);
        }

        /**
         * Get the path to the database directory.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function databasePath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->databasePath($path);
        }

        /**
         * Set the database directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function useDatabasePath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useDatabasePath($path);
        }

        /**
         * Get the path to the language files.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function langPath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->langPath($path);
        }

        /**
         * Set the language file directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function useLangPath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useLangPath($path);
        }

        /**
         * Get the path to the public / web directory.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function publicPath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->publicPath($path);
        }

        /**
         * Set the public / web directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function usePublicPath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->usePublicPath($path);
        }

        /**
         * Get the path to the storage directory.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function storagePath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->storagePath($path);
        }

        /**
         * Set the storage directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function useStoragePath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useStoragePath($path);
        }

        /**
         * Get the path to the resources directory.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function resourcePath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->resourcePath($path);
        }

        /**
         * Get the path to the views directory.
         *
         * This method returns the first configured path in the array of view paths.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function viewPath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->viewPath($path);
        }

        /**
         * Join the given paths together.
         *
         * @param string $basePath
         * @param string $path
         * @return string
         * @static
         */
        public static function joinPaths($basePath, $path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->joinPaths($basePath, $path);
        }

        /**
         * Get the path to the environment file directory.
         *
         * @return string
         * @static
         */
        public static function environmentPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->environmentPath();
        }

        /**
         * Set the directory for the environment file.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function useEnvironmentPath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useEnvironmentPath($path);
        }

        /**
         * Set the environment file to be loaded during bootstrapping.
         *
         * @param string $file
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function loadEnvironmentFrom($file)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->loadEnvironmentFrom($file);
        }

        /**
         * Get the environment file the application is using.
         *
         * @return string
         * @static
         */
        public static function environmentFile()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->environmentFile();
        }

        /**
         * Get the fully-qualified path to the environment file.
         *
         * @return string
         * @static
         */
        public static function environmentFilePath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->environmentFilePath();
        }

        /**
         * Get or check the current application environment.
         *
         * @param string|array $environments
         * @return string|bool
         * @static
         */
        public static function environment(...$environments)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->environment(...$environments);
        }

        /**
         * Determine if the application is in the local environment.
         *
         * @return bool
         * @static
         */
        public static function isLocal()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isLocal();
        }

        /**
         * Determine if the application is in the production environment.
         *
         * @return bool
         * @static
         */
        public static function isProduction()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isProduction();
        }

        /**
         * Detect the application's current environment.
         *
         * @param \Closure $callback
         * @return string
         * @static
         */
        public static function detectEnvironment($callback)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->detectEnvironment($callback);
        }

        /**
         * Determine if the application is running in the console.
         *
         * @return bool
         * @static
         */
        public static function runningInConsole()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->runningInConsole();
        }

        /**
         * Determine if the application is running any of the given console commands.
         *
         * @param string|array $commands
         * @return bool
         * @static
         */
        public static function runningConsoleCommand(...$commands)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->runningConsoleCommand(...$commands);
        }

        /**
         * Determine if the application is running unit tests.
         *
         * @return bool
         * @static
         */
        public static function runningUnitTests()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->runningUnitTests();
        }

        /**
         * Determine if the application is running with debug mode enabled.
         *
         * @return bool
         * @static
         */
        public static function hasDebugModeEnabled()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->hasDebugModeEnabled();
        }

        /**
         * Register a new registered listener.
         *
         * @param callable $callback
         * @return void
         * @static
         */
        public static function registered($callback)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->registered($callback);
        }

        /**
         * Register all of the configured providers.
         *
         * @return void
         * @static
         */
        public static function registerConfiguredProviders()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->registerConfiguredProviders();
        }

        /**
         * Register a service provider with the application.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @param bool $force
         * @return \Illuminate\Support\ServiceProvider
         * @static
         */
        public static function register($provider, $force = false)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->register($provider, $force);
        }

        /**
         * Get the registered service provider instance if it exists.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @return \Illuminate\Support\ServiceProvider|null
         * @static
         */
        public static function getProvider($provider)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getProvider($provider);
        }

        /**
         * Get the registered service provider instances if any exist.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @return array
         * @static
         */
        public static function getProviders($provider)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getProviders($provider);
        }

        /**
         * Resolve a service provider instance from the class name.
         *
         * @param string $provider
         * @return \Illuminate\Support\ServiceProvider
         * @static
         */
        public static function resolveProvider($provider)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->resolveProvider($provider);
        }

        /**
         * Load and boot all of the remaining deferred providers.
         *
         * @return void
         * @static
         */
        public static function loadDeferredProviders()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->loadDeferredProviders();
        }

        /**
         * Load the provider for a deferred service.
         *
         * @param string $service
         * @return void
         * @static
         */
        public static function loadDeferredProvider($service)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->loadDeferredProvider($service);
        }

        /**
         * Register a deferred provider and service.
         *
         * @param string $provider
         * @param string|null $service
         * @return void
         * @static
         */
        public static function registerDeferredProvider($provider, $service = null)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->registerDeferredProvider($provider, $service);
        }

        /**
         * Resolve the given type from the container.
         *
         * @template TClass of object
         * @param string|class-string<TClass> $abstract
         * @param array $parameters
         * @return ($abstract is class-string<TClass> ? TClass : mixed)
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @static
         */
        public static function make($abstract, $parameters = [])
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->make($abstract, $parameters);
        }

        /**
         * Determine if the given abstract type has been bound.
         *
         * @param string $abstract
         * @return bool
         * @static
         */
        public static function bound($abstract)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->bound($abstract);
        }

        /**
         * Determine if the application has booted.
         *
         * @return bool
         * @static
         */
        public static function isBooted()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isBooted();
        }

        /**
         * Boot the application's service providers.
         *
         * @return void
         * @static
         */
        public static function boot()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->boot();
        }

        /**
         * Register a new boot listener.
         *
         * @param callable $callback
         * @return void
         * @static
         */
        public static function booting($callback)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->booting($callback);
        }

        /**
         * Register a new "booted" listener.
         *
         * @param callable $callback
         * @return void
         * @static
         */
        public static function booted($callback)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->booted($callback);
        }

        /**
         * {@inheritdoc}
         *
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static function handle($request, $type = 1, $catch = true)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->handle($request, $type, $catch);
        }

        /**
         * Handle the incoming HTTP request and send the response to the browser.
         *
         * @param \Illuminate\Http\Request $request
         * @return void
         * @static
         */
        public static function handleRequest($request)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->handleRequest($request);
        }

        /**
         * Handle the incoming Artisan command.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @return int
         * @static
         */
        public static function handleCommand($input)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->handleCommand($input);
        }

        /**
         * Determine if the framework's base configuration should be merged.
         *
         * @return bool
         * @static
         */
        public static function shouldMergeFrameworkConfiguration()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->shouldMergeFrameworkConfiguration();
        }

        /**
         * Indicate that the framework's base configuration should not be merged.
         *
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function dontMergeFrameworkConfiguration()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->dontMergeFrameworkConfiguration();
        }

        /**
         * Determine if middleware has been disabled for the application.
         *
         * @return bool
         * @static
         */
        public static function shouldSkipMiddleware()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->shouldSkipMiddleware();
        }

        /**
         * Get the path to the cached services.php file.
         *
         * @return string
         * @static
         */
        public static function getCachedServicesPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedServicesPath();
        }

        /**
         * Get the path to the cached packages.php file.
         *
         * @return string
         * @static
         */
        public static function getCachedPackagesPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedPackagesPath();
        }

        /**
         * Determine if the application configuration is cached.
         *
         * @return bool
         * @static
         */
        public static function configurationIsCached()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->configurationIsCached();
        }

        /**
         * Get the path to the configuration cache file.
         *
         * @return string
         * @static
         */
        public static function getCachedConfigPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedConfigPath();
        }

        /**
         * Determine if the application routes are cached.
         *
         * @return bool
         * @static
         */
        public static function routesAreCached()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->routesAreCached();
        }

        /**
         * Get the path to the routes cache file.
         *
         * @return string
         * @static
         */
        public static function getCachedRoutesPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedRoutesPath();
        }

        /**
         * Determine if the application events are cached.
         *
         * @return bool
         * @static
         */
        public static function eventsAreCached()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->eventsAreCached();
        }

        /**
         * Get the path to the events cache file.
         *
         * @return string
         * @static
         */
        public static function getCachedEventsPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedEventsPath();
        }

        /**
         * Add new prefix to list of absolute path prefixes.
         *
         * @param string $prefix
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function addAbsoluteCachePathPrefix($prefix)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->addAbsoluteCachePathPrefix($prefix);
        }

        /**
         * Get an instance of the maintenance mode manager implementation.
         *
         * @return \Illuminate\Contracts\Foundation\MaintenanceMode
         * @static
         */
        public static function maintenanceMode()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->maintenanceMode();
        }

        /**
         * Determine if the application is currently down for maintenance.
         *
         * @return bool
         * @static
         */
        public static function isDownForMaintenance()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isDownForMaintenance();
        }

        /**
         * Throw an HttpException with the given data.
         *
         * @param int $code
         * @param string $message
         * @param array $headers
         * @return never
         * @throws \Symfony\Component\HttpKernel\Exception\HttpException
         * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
         * @static
         */
        public static function abort($code, $message = '', $headers = [])
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->abort($code, $message, $headers);
        }

        /**
         * Register a terminating callback with the application.
         *
         * @param callable|string $callback
         * @return \Illuminate\Foundation\Application
         * @static
         */
        public static function terminating($callback)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->terminating($callback);
        }

        /**
         * Terminate the application.
         *
         * @return void
         * @static
         */
        public static function terminate()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->terminate();
        }

        /**
         * Get the service providers that have been loaded.
         *
         * @return array<string, bool>
         * @static
         */
        public static function getLoadedProviders()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getLoadedProviders();
        }

        /**
         * Determine if the given service provider is loaded.
         *
         * @param string $provider
         * @return bool
         * @static
         */
        public static function providerIsLoaded($provider)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->providerIsLoaded($provider);
        }

        /**
         * Get the application's deferred services.
         *
         * @return array
         * @static
         */
        public static function getDeferredServices()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getDeferredServices();
        }

        /**
         * Set the application's deferred services.
         *
         * @param array $services
         * @return void
         * @static
         */
        public static function setDeferredServices($services)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->setDeferredServices($services);
        }

        /**
         * Determine if the given service is a deferred service.
         *
         * @param string $service
         * @return bool
         * @static
         */
        public static function isDeferredService($service)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isDeferredService($service);
        }

        /**
         * Add an array of services to the application's deferred services.
         *
         * @param array $services
         * @return void
         * @static
         */
        public static function addDeferredServices($services)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->addDeferredServices($services);
        }

        /**
         * Remove an array of services from the application's deferred services.
         *
         * @param array $services
         * @return void
         * @static
         */
        public static function removeDeferredServices($services)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->removeDeferredServices($services);
        }

        /**
         * Configure the real-time facade namespace.
         *
         * @param string $namespace
         * @return void
         * @static
         */
        public static function provideFacades($namespace)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->provideFacades($namespace);
        }

        /**
         * Get the current application locale.
         *
         * @return string
         * @static
         */
        public static function getLocale()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getLocale();
        }

        /**
         * Get the current application locale.
         *
         * @return string
         * @static
         */
        public static function currentLocale()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->currentLocale();
        }

        /**
         * Get the current application fallback locale.
         *
         * @return string
         * @static
         */
        public static function getFallbackLocale()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getFallbackLocale();
        }

        /**
         * Set the current application locale.
         *
         * @param string $locale
         * @return void
         * @static
         */
        public static function setLocale($locale)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->setLocale($locale);
        }

        /**
         * Set the current application fallback locale.
         *
         * @param string $fallbackLocale
         * @return void
         * @static
         */
        public static function setFallbackLocale($fallbackLocale)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->setFallbackLocale($fallbackLocale);
        }

        /**
         * Determine if the application locale is the given locale.
         *
         * @param string $locale
         * @return bool
         * @static
         */
        public static function isLocale($locale)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isLocale($locale);
        }

        /**
         * Register the core class aliases in the container.
         *
         * @return void
         * @static
         */
        public static function registerCoreContainerAliases()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->registerCoreContainerAliases();
        }

        /**
         * Flush the container of all bindings and resolved instances.
         *
         * @return void
         * @static
         */
        public static function flush()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->flush();
        }

        /**
         * Get the application namespace.
         *
         * @return string
         * @throws \RuntimeException
         * @static
         */
        public static function getNamespace()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getNamespace();
        }

        /**
         * Define a contextual binding.
         *
         * @param array|string $concrete
         * @return \Illuminate\Contracts\Container\ContextualBindingBuilder
         * @static
         */
        public static function when($concrete)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->when($concrete);
        }

        /**
         * Define a contextual binding based on an attribute.
         *
         * @return void
         * @static
         */
        public static function whenHasAttribute($attribute, $handler)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->whenHasAttribute($attribute, $handler);
        }

        /**
         * Returns true if the container can return an entry for the given identifier.
         *
         * Returns false otherwise.
         *
         * `has($id)` returning true does not mean that `get($id)` will not throw an exception.
         * It does however mean that `get($id)` will not throw a `NotFoundExceptionInterface`.
         *
         * @param string $id Identifier of the entry to look for.
         * @return bool
         * @static
         */
        public static function has($id)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->has($id);
        }

        /**
         * Determine if the given abstract type has been resolved.
         *
         * @param string $abstract
         * @return bool
         * @static
         */
        public static function resolved($abstract)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->resolved($abstract);
        }

        /**
         * Determine if a given type is shared.
         *
         * @param string $abstract
         * @return bool
         * @static
         */
        public static function isShared($abstract)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isShared($abstract);
        }

        /**
         * Determine if a given string is an alias.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function isAlias($name)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isAlias($name);
        }

        /**
         * Register a binding with the container.
         *
         * @param \Closure|string $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void
         * @throws \TypeError
         * @throws ReflectionException
         * @static
         */
        public static function bind($abstract, $concrete = null, $shared = false)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->bind($abstract, $concrete, $shared);
        }

        /**
         * Determine if the container has a method binding.
         *
         * @param string $method
         * @return bool
         * @static
         */
        public static function hasMethodBinding($method)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->hasMethodBinding($method);
        }

        /**
         * Bind a callback to resolve with Container::call.
         *
         * @param array|string $method
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function bindMethod($method, $callback)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->bindMethod($method, $callback);
        }

        /**
         * Get the method binding for the given method.
         *
         * @param string $method
         * @param mixed $instance
         * @return mixed
         * @static
         */
        public static function callMethodBinding($method, $instance)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->callMethodBinding($method, $instance);
        }

        /**
         * Add a contextual binding to the container.
         *
         * @param string $concrete
         * @param \Closure|string $abstract
         * @param \Closure|string $implementation
         * @return void
         * @static
         */
        public static function addContextualBinding($concrete, $abstract, $implementation)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->addContextualBinding($concrete, $abstract, $implementation);
        }

        /**
         * Register a binding if it hasn't already been registered.
         *
         * @param \Closure|string $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void
         * @static
         */
        public static function bindIf($abstract, $concrete = null, $shared = false)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->bindIf($abstract, $concrete, $shared);
        }

        /**
         * Register a shared binding in the container.
         *
         * @param \Closure|string $abstract
         * @param \Closure|string|null $concrete
         * @return void
         * @static
         */
        public static function singleton($abstract, $concrete = null)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->singleton($abstract, $concrete);
        }

        /**
         * Register a shared binding if it hasn't already been registered.
         *
         * @param \Closure|string $abstract
         * @param \Closure|string|null $concrete
         * @return void
         * @static
         */
        public static function singletonIf($abstract, $concrete = null)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->singletonIf($abstract, $concrete);
        }

        /**
         * Register a scoped binding in the container.
         *
         * @param \Closure|string $abstract
         * @param \Closure|string|null $concrete
         * @return void
         * @static
         */
        public static function scoped($abstract, $concrete = null)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->scoped($abstract, $concrete);
        }

        /**
         * Register a scoped binding if it hasn't already been registered.
         *
         * @param \Closure|string $abstract
         * @param \Closure|string|null $concrete
         * @return void
         * @static
         */
        public static function scopedIf($abstract, $concrete = null)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->scopedIf($abstract, $concrete);
        }

        /**
         * "Extend" an abstract type in the container.
         *
         * @param string $abstract
         * @return void
         * @throws \InvalidArgumentException
         * @static
         */
        public static function extend($abstract, $closure)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->extend($abstract, $closure);
        }

        /**
         * Register an existing instance as shared in the container.
         *
         * @template TInstance of mixed
         * @param string $abstract
         * @param TInstance $instance
         * @return TInstance
         * @static
         */
        public static function instance($abstract, $instance)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->instance($abstract, $instance);
        }

        /**
         * Assign a set of tags to a given binding.
         *
         * @param array|string $abstracts
         * @param mixed $tags
         * @return void
         * @static
         */
        public static function tag($abstracts, $tags)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->tag($abstracts, $tags);
        }

        /**
         * Resolve all of the bindings for a given tag.
         *
         * @param string $tag
         * @return iterable
         * @static
         */
        public static function tagged($tag)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->tagged($tag);
        }

        /**
         * Alias a type to a different name.
         *
         * @param string $abstract
         * @param string $alias
         * @return void
         * @throws \LogicException
         * @static
         */
        public static function alias($abstract, $alias)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->alias($abstract, $alias);
        }

        /**
         * Bind a new callback to an abstract's rebind event.
         *
         * @param string $abstract
         * @return mixed
         * @static
         */
        public static function rebinding($abstract, $callback)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->rebinding($abstract, $callback);
        }

        /**
         * Refresh an instance on the given target and method.
         *
         * @param string $abstract
         * @param mixed $target
         * @param string $method
         * @return mixed
         * @static
         */
        public static function refresh($abstract, $target, $method)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->refresh($abstract, $target, $method);
        }

        /**
         * Wrap the given closure such that its dependencies will be injected when executed.
         *
         * @return \Closure
         * @static
         */
        public static function wrap($callback, $parameters = [])
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->wrap($callback, $parameters);
        }

        /**
         * Call the given Closure / class@method and inject its dependencies.
         *
         * @param callable|string $callback
         * @param array<string, mixed> $parameters
         * @param string|null $defaultMethod
         * @return mixed
         * @throws \InvalidArgumentException
         * @static
         */
        public static function call($callback, $parameters = [], $defaultMethod = null)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->call($callback, $parameters, $defaultMethod);
        }

        /**
         * Get a closure to resolve the given type from the container.
         *
         * @template TClass of object
         * @param string|class-string<TClass> $abstract
         * @return ($abstract is class-string<TClass> ? \Closure(): TClass : \Closure(): mixed)
         * @static
         */
        public static function factory($abstract)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->factory($abstract);
        }

        /**
         * An alias function name for make().
         *
         * @template TClass of object
         * @param string|class-string<TClass>|callable $abstract
         * @return ($abstract is class-string<TClass> ? TClass : mixed)
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @static
         */
        public static function makeWith($abstract, $parameters = [])
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->makeWith($abstract, $parameters);
        }

        /**
         * {@inheritdoc}
         *
         * @template TClass of object
         * @param string|class-string<TClass> $id
         * @return ($id is class-string<TClass> ? TClass : mixed)
         * @throws \Illuminate\Contracts\Container\CircularDependencyException
         * @throws \Illuminate\Container\EntryNotFoundException
         * @static
         */
        public static function get($id)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->get($id);
        }

        /**
         * Instantiate a concrete instance of the given type.
         *
         * @template TClass of object
         * @param \Closure(static, array):  TClass|class-string<TClass>  $concrete
         * @return TClass
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @throws \Illuminate\Contracts\Container\CircularDependencyException
         * @static
         */
        public static function build($concrete)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->build($concrete);
        }

        /**
         * Resolve a dependency based on an attribute.
         *
         * @return mixed
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @static
         */
        public static function resolveFromAttribute($attribute, $parameter)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->resolveFromAttribute($attribute, $parameter);
        }

        /**
         * Register a new before resolving callback for all types.
         *
         * @param \Closure|string $abstract
         * @return void
         * @static
         */
        public static function beforeResolving($abstract, $callback = null)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->beforeResolving($abstract, $callback);
        }

        /**
         * Register a new resolving callback.
         *
         * @param \Closure|string $abstract
         * @return void
         * @static
         */
        public static function resolving($abstract, $callback = null)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->resolving($abstract, $callback);
        }

        /**
         * Register a new after resolving callback for all types.
         *
         * @param \Closure|string $abstract
         * @return void
         * @static
         */
        public static function afterResolving($abstract, $callback = null)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->afterResolving($abstract, $callback);
        }

        /**
         * Register a new after resolving attribute callback for all types.
         *
         * @return void
         * @static
         */
        public static function afterResolvingAttribute($attribute, $callback)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->afterResolvingAttribute($attribute, $callback);
        }

        /**
         * Fire all of the after resolving attribute callbacks.
         *
         * @param \ReflectionAttribute[] $attributes
         * @param mixed $object
         * @return void
         * @static
         */
        public static function fireAfterResolvingAttributeCallbacks($attributes, $object)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->fireAfterResolvingAttributeCallbacks($attributes, $object);
        }

        /**
         * Get the name of the binding the container is currently resolving.
         *
         * @return class-string|string|null
         * @static
         */
        public static function currentlyResolving()
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->currentlyResolving();
        }

        /**
         * Get the container's bindings.
         *
         * @return array
         * @static
         */
        public static function getBindings()
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getBindings();
        }

        /**
         * Get the alias for an abstract if available.
         *
         * @param string $abstract
         * @return string
         * @static
         */
        public static function getAlias($abstract)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getAlias($abstract);
        }

        /**
         * Remove all of the extender callbacks for a given type.
         *
         * @param string $abstract
         * @return void
         * @static
         */
        public static function forgetExtenders($abstract)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->forgetExtenders($abstract);
        }

        /**
         * Remove a resolved instance from the instance cache.
         *
         * @param string $abstract
         * @return void
         * @static
         */
        public static function forgetInstance($abstract)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->forgetInstance($abstract);
        }

        /**
         * Clear all of the instances from the container.
         *
         * @return void
         * @static
         */
        public static function forgetInstances()
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->forgetInstances();
        }

        /**
         * Clear all of the scoped instances from the container.
         *
         * @return void
         * @static
         */
        public static function forgetScopedInstances()
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->forgetScopedInstances();
        }

        /**
         * Set the callback which determines the current container environment.
         *
         * @param (callable(array<int, string>|string): bool|string)|null $callback
         * @return void
         * @static
         */
        public static function resolveEnvironmentUsing($callback)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->resolveEnvironmentUsing($callback);
        }

        /**
         * Determine the environment for the container.
         *
         * @param array<int, string>|string $environments
         * @return bool
         * @static
         */
        public static function currentEnvironmentIs($environments)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->currentEnvironmentIs($environments);
        }

        /**
         * Get the globally available instance of the container.
         *
         * @return static
         * @static
         */
        public static function getInstance()
        {
            //Method inherited from \Illuminate\Container\Container 
            return \Illuminate\Foundation\Application::getInstance();
        }

        /**
         * Set the shared instance of the container.
         *
         * @return \Illuminate\Contracts\Container\Container|static
         * @static
         */
        public static function setInstance($container = null)
        {
            //Method inherited from \Illuminate\Container\Container 
            return \Illuminate\Foundation\Application::setInstance($container);
        }

        /**
         * Determine if a given offset exists.
         *
         * @param string $offset
         * @static
         */
        public static function offsetExists($offset)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->offsetExists($offset);
        }

        /**
         * Get the value at a given offset.
         *
         * @param string $offset
         * @static
         */
        public static function offsetGet($offset)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->offsetGet($offset);
        }

        /**
         * Set the value at a given offset.
         *
         * @param string $offset
         * @param mixed $value
         * @static
         */
        public static function offsetSet($offset, $value)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->offsetSet($offset, $value);
        }

        /**
         * Unset the value at a given offset.
         *
         * @param string $offset
         * @static
         */
        public static function offsetUnset($offset)
        {
            //Method inherited from \Illuminate\Container\Container 
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->offsetUnset($offset);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Foundation\Application::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Foundation\Application::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Foundation\Application::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Foundation\Application::flushMacros();
        }

            }
    /**
     * @see \Illuminate\Foundation\Console\Kernel
     */
    class Artisan {
        /**
         * Re-route the Symfony command events to their Laravel counterparts.
         *
         * @internal
         * @return \Illuminate\Foundation\Console\Kernel
         * @static
         */
        public static function rerouteSymfonyCommandEvents()
        {
            /** @var \Illuminate\Foundation\Console\Kernel $instance */
            return $instance->rerouteSymfonyCommandEvents();
        }

        /**
         * Run the console application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param \Symfony\Component\Console\Output\OutputInterface|null $output
         * @return int
         * @static
         */
        public static function handle($input, $output = null)
        {
            /** @var \Illuminate\Foundation\Console\Kernel $instance */
            return $instance->handle($input, $output);
        }

        /**
         * Terminate the application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param int $status
         * @return void
         * @static
         */
        public static function terminate($input, $status)
        {
            /** @var \Illuminate\Foundation\Console\Kernel $instance */
            $instance->terminate($input, $status);
        }

        /**
         * Register a callback to be invoked when the command lifecycle duration exceeds a given amount of time.
         *
         * @param \DateTimeInterface|\Carbon\CarbonInterval|float|int $threshold
         * @param callable $handler
         * @return void
         * @static
         */
        public static function whenCommandLifecycleIsLongerThan($threshold, $handler)
        {
            /** @var \Illuminate\Foundation\Console\Kernel $instance */
            $instance->whenCommandLifecycleIsLongerThan($threshold, $handler);
        }

        /**
         * When the command being handled started.
         *
         * @return \Illuminate\Support\Carbon|null
         * @static
         */
        public static function commandStartedAt()
        {
            /** @var \Illuminate\Foundation\Console\Kernel $instance */
            return $instance->commandStartedAt();
        }

        /**
         * Resolve a console schedule instance.
         *
         * @return \Illuminate\Console\Scheduling\Schedule
         * @static
         */
        public static function resolveConsoleSchedule()
        {
            /** @var \Illuminate\Foundation\Console\Kernel $instance */
            return $instance->resolveConsoleSchedule();
        }

        /**
         * Register a Closure based command with the application.
         *
         * @param string $signature
         * @param \Closure $callback
         * @return \Illuminate\Foundation\Console\ClosureCommand
         * @static
         */
        public static function command($signature, $callback)
        {
            /** @var \Illuminate\Foundation\Console\Kernel $instance */
            return $instance->command($signature, $callback);
        }

        /**
         * Register the given command with the console application.
         *
         * @param \Symfony\Component\Console\Command\Command $command
         * @return void
         * @static
         */
        public static function registerCommand($command)
        {
            /** @var \Illuminate\Foundation\Console\Kernel $instance */
            $instance->registerCommand($command);
        }

        /**
         * Run an Artisan console command by name.
         *
         * @param \Symfony\Component\Console\Command\Command|string $command
         * @param array $parameters
         * @param \Symfony\Component\Console\Output\OutputInterface|null $outputBuffer
         * @return int
         * @throws \Symfony\Component\Console\Exception\CommandNotFoundException
         * @static
         */
        public static function call($command, $parameters = [], $outputBuffer = null)
        {
            /** @var \Illuminate\Foundation\Console\Kernel $instance */
            return $instance->call($command, $parameters, $outputBuffer);
        }

        /**
         * Queue the given console command.
         *
         * @param string $command
         * @param array $parameters
         * @return \Illuminate\Foundation\Bus\PendingDispatch
         * @static
         */
        public static function queue($command, $parameters = [])
        {
            /** @var \Illuminate\Foundation\Console\Kernel $instance */
            return $instance->queue($command, $parameters);
        }

        /**
         * Get all of the commands registered with the console.
         *
         * @return array
         * @static
         */
        public static function all()
        {
            /** @var \Illuminate\Foundation\Console\Kernel $instance */
            return $instance->all();
        }

        /**
         * Get the output for the last run command.
         *
         * @return string
         * @static
         */
        public static function output()
        {
            /** @var \Illuminate\Foundation\Console\Kernel $instance */
            return $instance->output();
        }

        /**
         * Bootstrap the application for artisan commands.
         *
         * @return void
         * @static
         */
        public static function bootstrap()
        {
            /** @var \Illuminate\Foundation\Console\Kernel $instance */
            $instance->bootstrap();
        }

        /**
         * Bootstrap the application without booting service providers.
         *
         * @return void
         * @static
         */
        public static function bootstrapWithoutBootingProviders()
        {
            /** @var \Illuminate\Foundation\Console\Kernel $instance */
            $instance->bootstrapWithoutBootingProviders();
        }

        /**
         * Set the Artisan application instance.
         *
         * @param \Illuminate\Console\Application|null $artisan
         * @return void
         * @static
         */
        public static function setArtisan($artisan)
        {
            /** @var \Illuminate\Foundation\Console\Kernel $instance */
            $instance->setArtisan($artisan);
        }

        /**
         * Set the Artisan commands provided by the application.
         *
         * @param array $commands
         * @return \Illuminate\Foundation\Console\Kernel
         * @static
         */
        public static function addCommands($commands)
        {
            /** @var \Illuminate\Foundation\Console\Kernel $instance */
            return $instance->addCommands($commands);
        }

        /**
         * Set the paths that should have their Artisan commands automatically discovered.
         *
         * @param array $paths
         * @return \Illuminate\Foundation\Console\Kernel
         * @static
         */
        public static function addCommandPaths($paths)
        {
            /** @var \Illuminate\Foundation\Console\Kernel $instance */
            return $instance->addCommandPaths($paths);
        }

        /**
         * Set the paths that should have their Artisan "routes" automatically discovered.
         *
         * @param array $paths
         * @return \Illuminate\Foundation\Console\Kernel
         * @static
         */
        public static function addCommandRoutePaths($paths)
        {
            /** @var \Illuminate\Foundation\Console\Kernel $instance */
            return $instance->addCommandRoutePaths($paths);
        }

            }
    /**
     * @see \Illuminate\Auth\AuthManager
     * @see \Illuminate\Auth\SessionGuard
     */
    class Auth {
        /**
         * Attempt to get the guard from the local cache.
         *
         * @param \UnitEnum|string|null $name
         * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard
         * @static
         */
        public static function guard($name = null)
        {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->guard($name);
        }

        /**
         * Create a session based authentication guard.
         *
         * @param string $name
         * @param array $config
         * @return \Illuminate\Auth\SessionGuard
         * @static
         */
        public static function createSessionDriver($name, $config)
        {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->createSessionDriver($name, $config);
        }

        /**
         * Create a token based authentication guard.
         *
         * @param string $name
         * @param array $config
         * @return \Illuminate\Auth\TokenGuard
         * @static
         */
        public static function createTokenDriver($name, $config)
        {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->createTokenDriver($name, $config);
        }

        /**
         * Get the default authentication driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the default guard driver the factory should serve.
         *
         * @param \UnitEnum|string|null $name
         * @return void
         * @static
         */
        public static function shouldUse($name)
        {
            /** @var \Illuminate\Auth\AuthManager $instance */
            $instance->shouldUse($name);
        }

        /**
         * Set the default authentication driver name.
         *
         * @param \UnitEnum|string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var \Illuminate\Auth\AuthManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Register a new callback based request guard.
         *
         * @param string $driver
         * @param callable $callback
         * @return \Illuminate\Auth\AuthManager
         * @static
         */
        public static function viaRequest($driver, $callback)
        {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->viaRequest($driver, $callback);
        }

        /**
         * Get the user resolver callback.
         *
         * @return \Closure
         * @static
         */
        public static function userResolver()
        {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->userResolver();
        }

        /**
         * Set the callback to be used to resolve users.
         *
         * @param \Closure $userResolver
         * @return \Illuminate\Auth\AuthManager
         * @static
         */
        public static function resolveUsersUsing($userResolver)
        {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->resolveUsersUsing($userResolver);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @param-closure-this $this  $callback
         * @return \Illuminate\Auth\AuthManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Register a custom provider creator Closure.
         *
         * @param string $name
         * @param \Closure $callback
         * @return \Illuminate\Auth\AuthManager
         * @static
         */
        public static function provider($name, $callback)
        {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->provider($name, $callback);
        }

        /**
         * Determines if any guards have already been resolved.
         *
         * @return bool
         * @static
         */
        public static function hasResolvedGuards()
        {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->hasResolvedGuards();
        }

        /**
         * Forget all of the resolved guard instances.
         *
         * @return \Illuminate\Auth\AuthManager
         * @static
         */
        public static function forgetGuards()
        {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->forgetGuards();
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Auth\AuthManager
         * @static
         */
        public static function setApplication($app)
        {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Create the user provider implementation for the driver.
         *
         * @param string|null $provider
         * @return \Illuminate\Contracts\Auth\UserProvider|null
         * @throws \InvalidArgumentException
         * @static
         */
        public static function createUserProvider($provider = null)
        {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->createUserProvider($provider);
        }

        /**
         * Get the default user provider name.
         *
         * @return string
         * @static
         */
        public static function getDefaultUserProvider()
        {
            /** @var \Illuminate\Auth\AuthManager $instance */
            return $instance->getDefaultUserProvider();
        }

        /**
         * Get the currently authenticated user.
         *
         * @return \App\Models\User|null
         * @static
         */
        public static function user()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->user();
        }

        /**
         * Get the ID for the currently authenticated user.
         *
         * @return int|string|null
         * @static
         */
        public static function id()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->id();
        }

        /**
         * Log a user into the application without sessions or cookies.
         *
         * @param array $credentials
         * @return bool
         * @static
         */
        public static function once($credentials = [])
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->once($credentials);
        }

        /**
         * Log the given user ID into the application without sessions or cookies.
         *
         * @param mixed $id
         * @return \App\Models\User|false
         * @static
         */
        public static function onceUsingId($id)
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->onceUsingId($id);
        }

        /**
         * Validate a user's credentials.
         *
         * @param array $credentials
         * @return bool
         * @static
         */
        public static function validate($credentials = [])
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->validate($credentials);
        }

        /**
         * Attempt to authenticate using HTTP Basic Auth.
         *
         * @param string $field
         * @param array $extraConditions
         * @return \Symfony\Component\HttpFoundation\Response|null
         * @throws \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException
         * @static
         */
        public static function basic($field = 'email', $extraConditions = [])
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->basic($field, $extraConditions);
        }

        /**
         * Perform a stateless HTTP Basic login attempt.
         *
         * @param string $field
         * @param array $extraConditions
         * @return \Symfony\Component\HttpFoundation\Response|null
         * @throws \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException
         * @static
         */
        public static function onceBasic($field = 'email', $extraConditions = [])
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->onceBasic($field, $extraConditions);
        }

        /**
         * Attempt to authenticate a user using the given credentials.
         *
         * @param array $credentials
         * @param bool $remember
         * @return bool
         * @static
         */
        public static function attempt($credentials = [], $remember = false)
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->attempt($credentials, $remember);
        }

        /**
         * Attempt to authenticate a user with credentials and additional callbacks.
         *
         * @param array $credentials
         * @param array|callable|null $callbacks
         * @param bool $remember
         * @return bool
         * @static
         */
        public static function attemptWhen($credentials = [], $callbacks = null, $remember = false)
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->attemptWhen($credentials, $callbacks, $remember);
        }

        /**
         * Log the given user ID into the application.
         *
         * @param mixed $id
         * @param bool $remember
         * @return \App\Models\User|false
         * @static
         */
        public static function loginUsingId($id, $remember = false)
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->loginUsingId($id, $remember);
        }

        /**
         * Log a user into the application.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
         * @param bool $remember
         * @return void
         * @static
         */
        public static function login($user, $remember = false)
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            $instance->login($user, $remember);
        }

        /**
         * Create a HMAC of the password hash for storage in cookies.
         *
         * @param string $passwordHash
         * @return string
         * @static
         */
        public static function hashPasswordForCookie($passwordHash)
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->hashPasswordForCookie($passwordHash);
        }

        /**
         * Log the user out of the application.
         *
         * @return void
         * @static
         */
        public static function logout()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            $instance->logout();
        }

        /**
         * Log the user out of the application on their current device only.
         *
         * This method does not cycle the "remember" token.
         *
         * @return void
         * @static
         */
        public static function logoutCurrentDevice()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            $instance->logoutCurrentDevice();
        }

        /**
         * Invalidate other sessions for the current user.
         *
         * The application must be using the AuthenticateSession middleware.
         *
         * @param string $password
         * @return \App\Models\User|null
         * @throws \Illuminate\Auth\AuthenticationException
         * @static
         */
        public static function logoutOtherDevices($password)
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->logoutOtherDevices($password);
        }

        /**
         * Register an authentication attempt event listener.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function attempting($callback)
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            $instance->attempting($callback);
        }

        /**
         * Get the last user we attempted to authenticate.
         *
         * @return \App\Models\User
         * @static
         */
        public static function getLastAttempted()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getLastAttempted();
        }

        /**
         * Get a unique identifier for the auth session value.
         *
         * @return string
         * @static
         */
        public static function getName()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getName();
        }

        /**
         * Get the name of the cookie used to store the "recaller".
         *
         * @return string
         * @static
         */
        public static function getRecallerName()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getRecallerName();
        }

        /**
         * Determine if the user was authenticated via "remember me" cookie.
         *
         * @return bool
         * @static
         */
        public static function viaRemember()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->viaRemember();
        }

        /**
         * Set the number of minutes the remember me cookie should be valid for.
         *
         * @param int $minutes
         * @return \Illuminate\Auth\SessionGuard
         * @static
         */
        public static function setRememberDuration($minutes)
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->setRememberDuration($minutes);
        }

        /**
         * Get the cookie creator instance used by the guard.
         *
         * @return \Illuminate\Contracts\Cookie\QueueingFactory
         * @throws \RuntimeException
         * @static
         */
        public static function getCookieJar()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getCookieJar();
        }

        /**
         * Set the cookie creator instance used by the guard.
         *
         * @param \Illuminate\Contracts\Cookie\QueueingFactory $cookie
         * @return void
         * @static
         */
        public static function setCookieJar($cookie)
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            $instance->setCookieJar($cookie);
        }

        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher
         * @static
         */
        public static function getDispatcher()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getDispatcher();
        }

        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void
         * @static
         */
        public static function setDispatcher($events)
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            $instance->setDispatcher($events);
        }

        /**
         * Get the session store used by the guard.
         *
         * @return \Illuminate\Contracts\Session\Session
         * @static
         */
        public static function getSession()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getSession();
        }

        /**
         * Return the currently cached user.
         *
         * @return \App\Models\User|null
         * @static
         */
        public static function getUser()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getUser();
        }

        /**
         * Set the current user.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
         * @return \Illuminate\Auth\SessionGuard
         * @static
         */
        public static function setUser($user)
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->setUser($user);
        }

        /**
         * Get the current request instance.
         *
         * @return \Symfony\Component\HttpFoundation\Request
         * @static
         */
        public static function getRequest()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getRequest();
        }

        /**
         * Set the current request instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return \Illuminate\Auth\SessionGuard
         * @static
         */
        public static function setRequest($request)
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->setRequest($request);
        }

        /**
         * Get the timebox instance used by the guard.
         *
         * @return \Illuminate\Support\Timebox
         * @static
         */
        public static function getTimebox()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getTimebox();
        }

        /**
         * Determine if the current user is authenticated. If not, throw an exception.
         *
         * @return \App\Models\User
         * @throws \Illuminate\Auth\AuthenticationException
         * @static
         */
        public static function authenticate()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->authenticate();
        }

        /**
         * Determine if the guard has a user instance.
         *
         * @return bool
         * @static
         */
        public static function hasUser()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->hasUser();
        }

        /**
         * Determine if the current user is authenticated.
         *
         * @return bool
         * @static
         */
        public static function check()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->check();
        }

        /**
         * Determine if the current user is a guest.
         *
         * @return bool
         * @static
         */
        public static function guest()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->guest();
        }

        /**
         * Forget the current user.
         *
         * @return \Illuminate\Auth\SessionGuard
         * @static
         */
        public static function forgetUser()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->forgetUser();
        }

        /**
         * Get the user provider used by the guard.
         *
         * @return \Illuminate\Contracts\Auth\UserProvider
         * @static
         */
        public static function getProvider()
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            return $instance->getProvider();
        }

        /**
         * Set the user provider used by the guard.
         *
         * @param \Illuminate\Contracts\Auth\UserProvider $provider
         * @return void
         * @static
         */
        public static function setProvider($provider)
        {
            /** @var \Illuminate\Auth\SessionGuard $instance */
            $instance->setProvider($provider);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Auth\SessionGuard::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Auth\SessionGuard::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Auth\SessionGuard::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Auth\SessionGuard::flushMacros();
        }

            }
    /**
     * @see \Illuminate\View\Compilers\BladeCompiler
     */
    class Blade {
        /**
         * Compile the view at the given path.
         *
         * @param string|null $path
         * @return void
         * @static
         */
        public static function compile($path = null)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->compile($path);
        }

        /**
         * Get the path currently being compiled.
         *
         * @return string
         * @static
         */
        public static function getPath()
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->getPath();
        }

        /**
         * Set the path currently being compiled.
         *
         * @param string $path
         * @return void
         * @static
         */
        public static function setPath($path)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->setPath($path);
        }

        /**
         * Compile the given Blade template contents.
         *
         * @param string $value
         * @return string
         * @static
         */
        public static function compileString($value)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->compileString($value);
        }

        /**
         * Evaluate and render a Blade string to HTML.
         *
         * @param string $string
         * @param array $data
         * @param bool $deleteCachedView
         * @return string
         * @static
         */
        public static function render($string, $data = [], $deleteCachedView = false)
        {
            return \Illuminate\View\Compilers\BladeCompiler::render($string, $data, $deleteCachedView);
        }

        /**
         * Render a component instance to HTML.
         *
         * @param \Illuminate\View\Component $component
         * @return string
         * @static
         */
        public static function renderComponent($component)
        {
            return \Illuminate\View\Compilers\BladeCompiler::renderComponent($component);
        }

        /**
         * Strip the parentheses from the given expression.
         *
         * @param string $expression
         * @return string
         * @static
         */
        public static function stripParentheses($expression)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->stripParentheses($expression);
        }

        /**
         * Register a custom Blade compiler.
         *
         * @param callable $compiler
         * @return void
         * @static
         */
        public static function extend($compiler)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->extend($compiler);
        }

        /**
         * Get the extensions used by the compiler.
         *
         * @return array
         * @static
         */
        public static function getExtensions()
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->getExtensions();
        }

        /**
         * Register an "if" statement directive.
         *
         * @param string $name
         * @param callable $callback
         * @return void
         * @static
         */
        public static function if($name, $callback)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->if($name, $callback);
        }

        /**
         * Check the result of a condition.
         *
         * @param string $name
         * @param mixed $parameters
         * @return bool
         * @static
         */
        public static function check($name, ...$parameters)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->check($name, ...$parameters);
        }

        /**
         * Register a class-based component alias directive.
         *
         * @param string $class
         * @param string|null $alias
         * @param string $prefix
         * @return void
         * @static
         */
        public static function component($class, $alias = null, $prefix = '')
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->component($class, $alias, $prefix);
        }

        /**
         * Register an array of class-based components.
         *
         * @param array $components
         * @param string $prefix
         * @return void
         * @static
         */
        public static function components($components, $prefix = '')
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->components($components, $prefix);
        }

        /**
         * Get the registered class component aliases.
         *
         * @return array
         * @static
         */
        public static function getClassComponentAliases()
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->getClassComponentAliases();
        }

        /**
         * Register a new anonymous component path.
         *
         * @param string $path
         * @param string|null $prefix
         * @return void
         * @static
         */
        public static function anonymousComponentPath($path, $prefix = null)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->anonymousComponentPath($path, $prefix);
        }

        /**
         * Register an anonymous component namespace.
         *
         * @param string $directory
         * @param string|null $prefix
         * @return void
         * @static
         */
        public static function anonymousComponentNamespace($directory, $prefix = null)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->anonymousComponentNamespace($directory, $prefix);
        }

        /**
         * Register a class-based component namespace.
         *
         * @param string $namespace
         * @param string $prefix
         * @return void
         * @static
         */
        public static function componentNamespace($namespace, $prefix)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->componentNamespace($namespace, $prefix);
        }

        /**
         * Get the registered anonymous component paths.
         *
         * @return array
         * @static
         */
        public static function getAnonymousComponentPaths()
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->getAnonymousComponentPaths();
        }

        /**
         * Get the registered anonymous component namespaces.
         *
         * @return array
         * @static
         */
        public static function getAnonymousComponentNamespaces()
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->getAnonymousComponentNamespaces();
        }

        /**
         * Get the registered class component namespaces.
         *
         * @return array
         * @static
         */
        public static function getClassComponentNamespaces()
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->getClassComponentNamespaces();
        }

        /**
         * Register a component alias directive.
         *
         * @param string $path
         * @param string|null $alias
         * @return void
         * @static
         */
        public static function aliasComponent($path, $alias = null)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->aliasComponent($path, $alias);
        }

        /**
         * Register an include alias directive.
         *
         * @param string $path
         * @param string|null $alias
         * @return void
         * @static
         */
        public static function include($path, $alias = null)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->include($path, $alias);
        }

        /**
         * Register an include alias directive.
         *
         * @param string $path
         * @param string|null $alias
         * @return void
         * @static
         */
        public static function aliasInclude($path, $alias = null)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->aliasInclude($path, $alias);
        }

        /**
         * Register a handler for custom directives, binding the handler to the compiler.
         *
         * @param string $name
         * @param callable $handler
         * @return void
         * @throws \InvalidArgumentException
         * @static
         */
        public static function bindDirective($name, $handler)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->bindDirective($name, $handler);
        }

        /**
         * Register a handler for custom directives.
         *
         * @param string $name
         * @param ($bind is true ? \Closure : callable) $handler
         * @param bool $bind
         * @return void
         * @throws \InvalidArgumentException
         * @static
         */
        public static function directive($name, $handler, $bind = false)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->directive($name, $handler, $bind);
        }

        /**
         * Get the list of custom directives.
         *
         * @return array
         * @static
         */
        public static function getCustomDirectives()
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->getCustomDirectives();
        }

        /**
         * Indicate that the following callable should be used to prepare strings for compilation.
         *
         * @param callable $callback
         * @return \Illuminate\View\Compilers\BladeCompiler
         * @static
         */
        public static function prepareStringsForCompilationUsing($callback)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->prepareStringsForCompilationUsing($callback);
        }

        /**
         * Register a new precompiler.
         *
         * @param callable $precompiler
         * @return void
         * @static
         */
        public static function precompiler($precompiler)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->precompiler($precompiler);
        }

        /**
         * Execute the given callback using a custom echo format.
         *
         * @param string $format
         * @param callable $callback
         * @return string
         * @static
         */
        public static function usingEchoFormat($format, $callback)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->usingEchoFormat($format, $callback);
        }

        /**
         * Set the echo format to be used by the compiler.
         *
         * @param string $format
         * @return void
         * @static
         */
        public static function setEchoFormat($format)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->setEchoFormat($format);
        }

        /**
         * Set the "echo" format to double encode entities.
         *
         * @return void
         * @static
         */
        public static function withDoubleEncoding()
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->withDoubleEncoding();
        }

        /**
         * Set the "echo" format to not double encode entities.
         *
         * @return void
         * @static
         */
        public static function withoutDoubleEncoding()
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->withoutDoubleEncoding();
        }

        /**
         * Indicate that component tags should not be compiled.
         *
         * @return void
         * @static
         */
        public static function withoutComponentTags()
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->withoutComponentTags();
        }

        /**
         * Get the path to the compiled version of a view.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function getCompiledPath($path)
        {
            //Method inherited from \Illuminate\View\Compilers\Compiler 
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->getCompiledPath($path);
        }

        /**
         * Determine if the view at the given path is expired.
         *
         * @param string $path
         * @return bool
         * @throws \ErrorException
         * @static
         */
        public static function isExpired($path)
        {
            //Method inherited from \Illuminate\View\Compilers\Compiler 
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->isExpired($path);
        }

        /**
         * Get a new component hash for a component name.
         *
         * @param string $component
         * @return string
         * @static
         */
        public static function newComponentHash($component)
        {
            return \Illuminate\View\Compilers\BladeCompiler::newComponentHash($component);
        }

        /**
         * Compile a class component opening.
         *
         * @param string $component
         * @param string $alias
         * @param string $data
         * @param string $hash
         * @return string
         * @static
         */
        public static function compileClassComponentOpening($component, $alias, $data, $hash)
        {
            return \Illuminate\View\Compilers\BladeCompiler::compileClassComponentOpening($component, $alias, $data, $hash);
        }

        /**
         * Compile the end-component statements into valid PHP.
         *
         * @return string
         * @static
         */
        public static function compileEndComponentClass()
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->compileEndComponentClass();
        }

        /**
         * Sanitize the given component attribute value.
         *
         * @param mixed $value
         * @return mixed
         * @static
         */
        public static function sanitizeComponentAttribute($value)
        {
            return \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value);
        }

        /**
         * Compile an end-once block into valid PHP.
         *
         * @return string
         * @static
         */
        public static function compileEndOnce()
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->compileEndOnce();
        }

        /**
         * Add a handler to be executed before echoing a given class.
         *
         * @param string|callable $class
         * @param callable|null $handler
         * @return void
         * @static
         */
        public static function stringable($class, $handler = null)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            $instance->stringable($class, $handler);
        }

        /**
         * Compile Blade echos into valid PHP.
         *
         * @param string $value
         * @return string
         * @static
         */
        public static function compileEchos($value)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->compileEchos($value);
        }

        /**
         * Apply the echo handler for the value if it exists.
         *
         * @param string $value
         * @return string
         * @static
         */
        public static function applyEchoHandler($value)
        {
            /** @var \Illuminate\View\Compilers\BladeCompiler $instance */
            return $instance->applyEchoHandler($value);
        }

            }
    /**
     * @method static mixed auth(\Illuminate\Http\Request $request)
     * @method static mixed validAuthenticationResponse(\Illuminate\Http\Request $request, mixed $result)
     * @method static void broadcast(array $channels, string $event, array $payload = [])
     * @method static array|null resolveAuthenticatedUser(\Illuminate\Http\Request $request)
     * @method static void resolveAuthenticatedUserUsing(\Closure $callback)
     * @method static \Illuminate\Broadcasting\Broadcasters\Broadcaster channel(\Illuminate\Contracts\Broadcasting\HasBroadcastChannel|string $channel, callable|string $callback, array $options = [])
     * @method static \Illuminate\Support\Collection getChannels()
     * @see \Illuminate\Broadcasting\BroadcastManager
     * @see \Illuminate\Broadcasting\Broadcasters\Broadcaster
     */
    class Broadcast {
        /**
         * Register the routes for handling broadcast channel authentication and sockets.
         *
         * @param array|null $attributes
         * @return void
         * @static
         */
        public static function routes($attributes = null)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            $instance->routes($attributes);
        }

        /**
         * Register the routes for handling broadcast user authentication.
         *
         * @param array|null $attributes
         * @return void
         * @static
         */
        public static function userRoutes($attributes = null)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            $instance->userRoutes($attributes);
        }

        /**
         * Register the routes for handling broadcast authentication and sockets.
         *
         * Alias of "routes" method.
         *
         * @param array|null $attributes
         * @return void
         * @static
         */
        public static function channelRoutes($attributes = null)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            $instance->channelRoutes($attributes);
        }

        /**
         * Get the socket ID for the given request.
         *
         * @param \Illuminate\Http\Request|null $request
         * @return string|null
         * @static
         */
        public static function socket($request = null)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->socket($request);
        }

        /**
         * Begin sending an anonymous broadcast to the given channels.
         *
         * @static
         */
        public static function on($channels)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->on($channels);
        }

        /**
         * Begin sending an anonymous broadcast to the given private channels.
         *
         * @static
         */
        public static function private($channel)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->private($channel);
        }

        /**
         * Begin sending an anonymous broadcast to the given presence channels.
         *
         * @static
         */
        public static function presence($channel)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->presence($channel);
        }

        /**
         * Begin broadcasting an event.
         *
         * @param mixed $event
         * @return \Illuminate\Broadcasting\PendingBroadcast
         * @static
         */
        public static function event($event = null)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->event($event);
        }

        /**
         * Queue the given event for broadcast.
         *
         * @param mixed $event
         * @return void
         * @static
         */
        public static function queue($event)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            $instance->queue($event);
        }

        /**
         * Get a broadcaster instance by name.
         *
         * @param \UnitEnum|string|null $name
         * @return mixed
         * @static
         */
        public static function connection($name = null)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->connection($name);
        }

        /**
         * Get a driver instance.
         *
         * @param \UnitEnum|string|null $name
         * @return mixed
         * @static
         */
        public static function driver($name = null)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->driver($name);
        }

        /**
         * Get a Pusher instance for the given configuration.
         *
         * @param array $config
         * @return \Pusher\Pusher
         * @static
         */
        public static function pusher($config)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->pusher($config);
        }

        /**
         * Get an Ably instance for the given configuration.
         *
         * @param array $config
         * @return \Ably\AblyRest
         * @static
         */
        public static function ably($config)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->ably($config);
        }

        /**
         * Get the default driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the default driver name.
         *
         * @param \UnitEnum|string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Disconnect the given driver / connection and remove it from local cache.
         *
         * @param \UnitEnum|string|null $name
         * @return void
         * @static
         */
        public static function purge($name = null)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            $instance->purge($name);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @param-closure-this $this  $callback
         * @return \Illuminate\Broadcasting\BroadcastManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Get the application instance used by the manager.
         *
         * @return \Illuminate\Contracts\Foundation\Application
         * @static
         */
        public static function getApplication()
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->getApplication();
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Broadcasting\BroadcastManager
         * @static
         */
        public static function setApplication($app)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Forget all of the resolved driver instances.
         *
         * @return \Illuminate\Broadcasting\BroadcastManager
         * @static
         */
        public static function forgetDrivers()
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->forgetDrivers();
        }

        /**
         * Resolve the default connection name for a given queueable instance.
         *
         * @param object $queueable
         * @return string|null
         * @static
         */
        public static function resolveConnectionFromQueueRoute($queueable)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->resolveConnectionFromQueueRoute($queueable);
        }

        /**
         * Resolve the default queue name for a given queueable instance.
         *
         * @param object $queueable
         * @return string|null
         * @static
         */
        public static function resolveQueueFromQueueRoute($queueable)
        {
            /** @var \Illuminate\Broadcasting\BroadcastManager $instance */
            return $instance->resolveQueueFromQueueRoute($queueable);
        }

            }
    /**
     * @see \Illuminate\Bus\Dispatcher
     * @see \Illuminate\Support\Testing\Fakes\BusFake
     */
    class Bus {
        /**
         * Dispatch a command to its appropriate handler.
         *
         * @param mixed $command
         * @return mixed
         * @static
         */
        public static function dispatch($command)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->dispatch($command);
        }

        /**
         * Dispatch a command to its appropriate handler in the current process.
         *
         * Queueable jobs will be dispatched to the "sync" queue.
         *
         * @param mixed $command
         * @param mixed $handler
         * @return mixed
         * @static
         */
        public static function dispatchSync($command, $handler = null)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->dispatchSync($command, $handler);
        }

        /**
         * Dispatch a command to its appropriate handler in the current process without using the synchronous queue.
         *
         * @param mixed $command
         * @param mixed $handler
         * @return mixed
         * @static
         */
        public static function dispatchNow($command, $handler = null)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->dispatchNow($command, $handler);
        }

        /**
         * Dispatch multiple commands in bulk to their appropriate handlers on the queue.
         *
         * @param iterable $jobs
         * @return void
         * @static
         */
        public static function bulk($jobs)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            $instance->bulk($jobs);
        }

        /**
         * Attempt to find the batch with the given ID.
         *
         * @return \Illuminate\Bus\Batch|null
         * @static
         */
        public static function findBatch($batchId)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->findBatch($batchId);
        }

        /**
         * Create a new batch of queueable jobs.
         *
         * @param \Illuminate\Support\Collection|mixed $jobs
         * @return \Illuminate\Bus\PendingBatch
         * @static
         */
        public static function batch($jobs)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->batch($jobs);
        }

        /**
         * Create a new chain of queueable jobs.
         *
         * @param \Illuminate\Support\Collection|array|null $jobs
         * @return \Illuminate\Foundation\Bus\PendingChain
         * @static
         */
        public static function chain($jobs = null)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->chain($jobs);
        }

        /**
         * Determine if the given command has a handler.
         *
         * @param mixed $command
         * @return bool
         * @static
         */
        public static function hasCommandHandler($command)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->hasCommandHandler($command);
        }

        /**
         * Retrieve the handler for a command.
         *
         * @param mixed $command
         * @return mixed
         * @static
         */
        public static function getCommandHandler($command)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->getCommandHandler($command);
        }

        /**
         * Dispatch a command to its appropriate handler behind a queue.
         *
         * @param mixed $command
         * @return mixed
         * @throws \RuntimeException
         * @static
         */
        public static function dispatchToQueue($command)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->dispatchToQueue($command);
        }

        /**
         * Dispatch a command to its appropriate handler after the current process.
         *
         * @param mixed $command
         * @param mixed $handler
         * @return void
         * @static
         */
        public static function dispatchAfterResponse($command, $handler = null)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            $instance->dispatchAfterResponse($command, $handler);
        }

        /**
         * Set the pipes through which commands should be piped before dispatching.
         *
         * @return \Illuminate\Bus\Dispatcher
         * @static
         */
        public static function pipeThrough($pipes)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->pipeThrough($pipes);
        }

        /**
         * Map a command to a handler.
         *
         * @return \Illuminate\Bus\Dispatcher
         * @static
         */
        public static function map($map)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->map($map);
        }

        /**
         * Allow dispatching after responses.
         *
         * @return \Illuminate\Bus\Dispatcher
         * @static
         */
        public static function withDispatchingAfterResponses()
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->withDispatchingAfterResponses();
        }

        /**
         * Disable dispatching after responses.
         *
         * @return \Illuminate\Bus\Dispatcher
         * @static
         */
        public static function withoutDispatchingAfterResponses()
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->withoutDispatchingAfterResponses();
        }

        /**
         * Resolve the default connection name for a given queueable instance.
         *
         * @param object $queueable
         * @return string|null
         * @static
         */
        public static function resolveConnectionFromQueueRoute($queueable)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->resolveConnectionFromQueueRoute($queueable);
        }

        /**
         * Resolve the default queue name for a given queueable instance.
         *
         * @param object $queueable
         * @return string|null
         * @static
         */
        public static function resolveQueueFromQueueRoute($queueable)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->resolveQueueFromQueueRoute($queueable);
        }

        /**
         * Specify the jobs that should be dispatched instead of faked.
         *
         * @param array|string $jobsToDispatch
         * @return \Illuminate\Support\Testing\Fakes\BusFake
         * @static
         */
        public static function except($jobsToDispatch)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->except($jobsToDispatch);
        }

        /**
         * Assert if a job was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|int|null $callback
         * @return void
         * @static
         */
        public static function assertDispatched($command, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertDispatched($command, $callback);
        }

        /**
         * Assert if a job was pushed exactly once.
         *
         * @param string|\Closure $command
         * @return void
         * @static
         */
        public static function assertDispatchedOnce($command)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertDispatchedOnce($command);
        }

        /**
         * Assert if a job was pushed a number of times.
         *
         * @param string|\Closure $command
         * @param int $times
         * @return void
         * @static
         */
        public static function assertDispatchedTimes($command, $times = 1)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertDispatchedTimes($command, $times);
        }

        /**
         * Determine if a job was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertNotDispatched($command, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertNotDispatched($command, $callback);
        }

        /**
         * Assert that no jobs were dispatched.
         *
         * @return void
         * @static
         */
        public static function assertNothingDispatched()
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertNothingDispatched();
        }

        /**
         * Assert if a job was explicitly dispatched synchronously based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|int|null $callback
         * @return void
         * @static
         */
        public static function assertDispatchedSync($command, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertDispatchedSync($command, $callback);
        }

        /**
         * Assert if a job was pushed synchronously a number of times.
         *
         * @param string|\Closure $command
         * @param int $times
         * @return void
         * @static
         */
        public static function assertDispatchedSyncTimes($command, $times = 1)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertDispatchedSyncTimes($command, $times);
        }

        /**
         * Determine if a job was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertNotDispatchedSync($command, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertNotDispatchedSync($command, $callback);
        }

        /**
         * Assert if a job was dispatched after the response was sent based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|int|null $callback
         * @return void
         * @static
         */
        public static function assertDispatchedAfterResponse($command, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertDispatchedAfterResponse($command, $callback);
        }

        /**
         * Assert if a job was pushed after the response was sent a number of times.
         *
         * @param string|\Closure $command
         * @param int $times
         * @return void
         * @static
         */
        public static function assertDispatchedAfterResponseTimes($command, $times = 1)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertDispatchedAfterResponseTimes($command, $times);
        }

        /**
         * Determine if a job was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertNotDispatchedAfterResponse($command, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertNotDispatchedAfterResponse($command, $callback);
        }

        /**
         * Assert if a chain of jobs was dispatched.
         *
         * @param array $expectedChain
         * @return void
         * @static
         */
        public static function assertChained($expectedChain)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertChained($expectedChain);
        }

        /**
         * Assert no chained jobs was dispatched.
         *
         * @return void
         * @static
         */
        public static function assertNothingChained()
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertNothingChained();
        }

        /**
         * Assert if a job was dispatched with an empty chain based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertDispatchedWithoutChain($command, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertDispatchedWithoutChain($command, $callback);
        }

        /**
         * Create a new assertion about a chained batch.
         *
         * @param \Closure(\Illuminate\Bus\PendingBatch):  bool  $callback
         * @return \Illuminate\Support\Testing\Fakes\ChainedBatchTruthTest
         * @static
         */
        public static function chainedBatch($callback)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->chainedBatch($callback);
        }

        /**
         * Assert if a batch was dispatched based on a truth-test callback.
         *
         * @param array|callable(\Illuminate\Bus\PendingBatch):  bool  $callback
         * @return void
         * @static
         */
        public static function assertBatched($callback)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertBatched($callback);
        }

        /**
         * Assert the number of batches that have been dispatched.
         *
         * @param int $count
         * @return void
         * @static
         */
        public static function assertBatchCount($count)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertBatchCount($count);
        }

        /**
         * Assert that no batched jobs were dispatched.
         *
         * @return void
         * @static
         */
        public static function assertNothingBatched()
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertNothingBatched();
        }

        /**
         * Assert that no jobs were dispatched, chained, or batched.
         *
         * @return void
         * @static
         */
        public static function assertNothingPlaced()
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            $instance->assertNothingPlaced();
        }

        /**
         * Get all of the jobs matching a truth-test callback.
         *
         * @param string $command
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static function dispatched($command, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->dispatched($command, $callback);
        }

        /**
         * Get all of the jobs dispatched synchronously matching a truth-test callback.
         *
         * @param string $command
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static function dispatchedSync($command, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->dispatchedSync($command, $callback);
        }

        /**
         * Get all of the jobs dispatched after the response was sent matching a truth-test callback.
         *
         * @param string $command
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static function dispatchedAfterResponse($command, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->dispatchedAfterResponse($command, $callback);
        }

        /**
         * Get all of the pending batches matching a truth-test callback.
         *
         * @param callable(\Illuminate\Bus\PendingBatch):  bool  $callback
         * @return \Illuminate\Support\Collection<int, \Illuminate\Bus\PendingBatch>
         * @static
         */
        public static function batched($callback)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->batched($callback);
        }

        /**
         * Determine if there are any stored commands for a given class.
         *
         * @param string $command
         * @return bool
         * @static
         */
        public static function hasDispatched($command)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->hasDispatched($command);
        }

        /**
         * Determine if there are any stored commands for a given class.
         *
         * @param string $command
         * @return bool
         * @static
         */
        public static function hasDispatchedSync($command)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->hasDispatchedSync($command);
        }

        /**
         * Determine if there are any stored commands for a given class.
         *
         * @param string $command
         * @return bool
         * @static
         */
        public static function hasDispatchedAfterResponse($command)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->hasDispatchedAfterResponse($command);
        }

        /**
         * Dispatch an empty job batch for testing.
         *
         * @param string $name
         * @return \Illuminate\Bus\Batch
         * @static
         */
        public static function dispatchFakeBatch($name = '')
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->dispatchFakeBatch($name);
        }

        /**
         * Record the fake pending batch dispatch.
         *
         * @param \Illuminate\Bus\PendingBatch $pendingBatch
         * @return \Illuminate\Bus\Batch
         * @static
         */
        public static function recordPendingBatch($pendingBatch)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->recordPendingBatch($pendingBatch);
        }

        /**
         * Specify if commands should be serialized and restored when being batched.
         *
         * @param bool $serializeAndRestore
         * @return \Illuminate\Support\Testing\Fakes\BusFake
         * @static
         */
        public static function serializeAndRestore($serializeAndRestore = true)
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->serializeAndRestore($serializeAndRestore);
        }

        /**
         * Get the batches that have been dispatched.
         *
         * @return array
         * @static
         */
        public static function dispatchedBatches()
        {
            /** @var \Illuminate\Support\Testing\Fakes\BusFake $instance */
            return $instance->dispatchedBatches();
        }

            }
    /**
     * @see \Illuminate\Cache\CacheManager
     * @see \Illuminate\Cache\Repository
     */
    class Cache {
        /**
         * Get a cache store instance by name, wrapped in a repository.
         *
         * @param \UnitEnum|string|null $name
         * @return \Illuminate\Contracts\Cache\Repository
         * @static
         */
        public static function store($name = null)
        {
            /** @var \Illuminate\Cache\CacheManager $instance */
            return $instance->store($name);
        }

        /**
         * Get a cache driver instance.
         *
         * @param \UnitEnum|string|null $driver
         * @return \Illuminate\Contracts\Cache\Repository
         * @static
         */
        public static function driver($driver = null)
        {
            /** @var \Illuminate\Cache\CacheManager $instance */
            return $instance->driver($driver);
        }

        /**
         * Get a memoized cache driver instance.
         *
         * @param \UnitEnum|string|null $driver
         * @return \Illuminate\Contracts\Cache\Repository
         * @static
         */
        public static function memo($driver = null)
        {
            /** @var \Illuminate\Cache\CacheManager $instance */
            return $instance->memo($driver);
        }

        /**
         * Resolve the given store.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Cache\Repository
         * @throws \InvalidArgumentException
         * @static
         */
        public static function resolve($name)
        {
            /** @var \Illuminate\Cache\CacheManager $instance */
            return $instance->resolve($name);
        }

        /**
         * Build a cache repository with the given configuration.
         *
         * @param array $config
         * @return \Illuminate\Cache\Repository
         * @throws \InvalidArgumentException
         * @static
         */
        public static function build($config)
        {
            /** @var \Illuminate\Cache\CacheManager $instance */
            return $instance->build($config);
        }

        /**
         * Create a new cache repository with the given implementation.
         *
         * @param \Illuminate\Contracts\Cache\Store $store
         * @param array $config
         * @return \Illuminate\Cache\Repository
         * @static
         */
        public static function repository($store, $config = [])
        {
            /** @var \Illuminate\Cache\CacheManager $instance */
            return $instance->repository($store, $config);
        }

        /**
         * Re-set the event dispatcher on all resolved cache repositories.
         *
         * @return void
         * @static
         */
        public static function refreshEventDispatcher()
        {
            /** @var \Illuminate\Cache\CacheManager $instance */
            $instance->refreshEventDispatcher();
        }

        /**
         * Get the default cache driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var \Illuminate\Cache\CacheManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the default cache driver name.
         *
         * @param \UnitEnum|string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var \Illuminate\Cache\CacheManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Unset the given driver instances.
         *
         * @param array|\UnitEnum|string|null $name
         * @return \Illuminate\Cache\CacheManager
         * @static
         */
        public static function forgetDriver($name = null)
        {
            /** @var \Illuminate\Cache\CacheManager $instance */
            return $instance->forgetDriver($name);
        }

        /**
         * Disconnect the given driver and remove from local cache.
         *
         * @param \UnitEnum|string|null $name
         * @return void
         * @static
         */
        public static function purge($name = null)
        {
            /** @var \Illuminate\Cache\CacheManager $instance */
            $instance->purge($name);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @param-closure-this $this  $callback
         * @return \Illuminate\Cache\CacheManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            /** @var \Illuminate\Cache\CacheManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Cache\CacheManager
         * @static
         */
        public static function setApplication($app)
        {
            /** @var \Illuminate\Cache\CacheManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Register a callback to be invoked when an unserializable class is encountered.
         *
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function handleUnserializableClassUsing($callback)
        {
            /** @var \Illuminate\Cache\CacheManager $instance */
            $instance->handleUnserializableClassUsing($callback);
        }

        /**
         * Determine if an item exists in the cache.
         *
         * @param \UnitEnum|array|string $key
         * @static
         */
        public static function has($key)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->has($key);
        }

        /**
         * Determine if an item doesn't exist in the cache.
         *
         * @param \UnitEnum|string $key
         * @return bool
         * @static
         */
        public static function missing($key)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->missing($key);
        }

        /**
         * Retrieve an item from the cache by key.
         *
         * @param \UnitEnum|array|string $key
         * @param mixed $default
         * @static
         */
        public static function get($key, $default = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->get($key, $default);
        }

        /**
         * Retrieve multiple items from the cache by key.
         *
         * Items not found in the cache will have a null value.
         *
         * @return array
         * @static
         */
        public static function many($keys)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->many($keys);
        }

        /**
         * Obtains multiple cache items by their unique keys.
         *
         * @param iterable<string> $keys A list of keys that can be obtained in a single operation.
         * @param mixed $default Default value to return for keys that do not exist.
         * @return iterable<string, mixed> A list of key => value pairs. Cache keys that do not exist or are stale will have $default as value.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static
         */
        public static function getMultiple($keys, $default = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->getMultiple($keys, $default);
        }

        /**
         * Retrieve an item from the cache and delete it.
         *
         * @param \UnitEnum|array|string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function pull($key, $default = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->pull($key, $default);
        }

        /**
         * Retrieve a string item from the cache.
         *
         * @param \UnitEnum|string $key
         * @param (\Closure():(string|null))|string|null $default
         * @throws \InvalidArgumentException
         * @static
         */
        public static function string($key, $default = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->string($key, $default);
        }

        /**
         * Retrieve an integer item from the cache.
         *
         * @param \UnitEnum|string $key
         * @param (\Closure():(int|null))|int|null $default
         * @throws \InvalidArgumentException
         * @static
         */
        public static function integer($key, $default = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->integer($key, $default);
        }

        /**
         * Retrieve a float item from the cache.
         *
         * @param \UnitEnum|string $key
         * @param (\Closure():(float|null))|float|null $default
         * @throws \InvalidArgumentException
         * @static
         */
        public static function float($key, $default = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->float($key, $default);
        }

        /**
         * Retrieve a boolean item from the cache.
         *
         * @param \UnitEnum|string $key
         * @param (\Closure():(bool|null))|bool|null $default
         * @throws \InvalidArgumentException
         * @static
         */
        public static function boolean($key, $default = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->boolean($key, $default);
        }

        /**
         * Retrieve an array item from the cache.
         *
         * @param \UnitEnum|string $key
         * @param (\Closure():(array<array-key, mixed>|null))|array<array-key, mixed>|null $default
         * @return array<array-key, mixed>
         * @throws \InvalidArgumentException
         * @static
         */
        public static function array($key, $default = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->array($key, $default);
        }

        /**
         * Store an item in the cache.
         *
         * @param \UnitEnum|array|string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|int|null $ttl
         * @return bool
         * @static
         */
        public static function put($key, $value, $ttl = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->put($key, $value, $ttl);
        }

        /**
         * Store an item in the cache.
         *
         * @param \UnitEnum|array|string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|int|null $ttl
         * @static
         */
        public static function set($key, $value, $ttl = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->set($key, $value, $ttl);
        }

        /**
         * Store multiple items in the cache for a given number of seconds.
         *
         * @param \DateTimeInterface|\DateInterval|int|null $ttl
         * @return bool
         * @static
         */
        public static function putMany($values, $ttl = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->putMany($values, $ttl);
        }

        /**
         * Persists a set of key => value pairs in the cache, with an optional TTL.
         *
         * @param iterable $values A list of key => value pairs for a multiple-set operation.
         * @param null|int|\DateInterval $ttl Optional. The TTL value of this item. If no value is sent and
         *                                       the driver supports TTL then the library may set a default value
         *                                       for it or let the driver take care of that.
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $values is neither an array nor a Traversable,
         *   or if any of the $values are not a legal value.
         * @static
         */
        public static function setMultiple($values, $ttl = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->setMultiple($values, $ttl);
        }

        /**
         * Store an item in the cache if the key does not exist.
         *
         * @param \UnitEnum|array|string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|int|null $ttl
         * @return bool
         * @static
         */
        public static function add($key, $value, $ttl = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->add($key, $value, $ttl);
        }

        /**
         * Increment the value of an item in the cache.
         *
         * @param \UnitEnum|string $key
         * @param mixed $value
         * @return int|bool
         * @static
         */
        public static function increment($key, $value = 1)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->increment($key, $value);
        }

        /**
         * Decrement the value of an item in the cache.
         *
         * @param \UnitEnum|string $key
         * @param mixed $value
         * @return int|bool
         * @static
         */
        public static function decrement($key, $value = 1)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->decrement($key, $value);
        }

        /**
         * Store an item in the cache indefinitely.
         *
         * @param \UnitEnum|string $key
         * @param mixed $value
         * @return bool
         * @static
         */
        public static function forever($key, $value)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->forever($key, $value);
        }

        /**
         * Get an item from the cache, or execute the given Closure and store the result.
         *
         * @template TCacheValue
         * @param \UnitEnum|string $key
         * @param \Closure|\DateTimeInterface|\DateInterval|int|null $ttl
         * @param \Closure():  TCacheValue  $callback
         * @return TCacheValue
         * @static
         */
        public static function remember($key, $ttl, $callback)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->remember($key, $ttl, $callback);
        }

        /**
         * Get an item from the cache, or execute the given Closure and store the result.
         *
         * @template TCacheValue
         * @param \UnitEnum|string $key
         * @param \Closure|\DateTimeInterface|\DateInterval|int|null $ttl
         * @param \Closure():  TCacheValue  $callback
         * @return array{TCacheValue, bool} The cached value and whether it was warm.
         * @static
         */
        public static function rememberWithWarmth($key, $ttl, $callback)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->rememberWithWarmth($key, $ttl, $callback);
        }

        /**
         * Get an item from the cache, or execute the given Closure and store the result forever.
         *
         * @template TCacheValue
         * @param \UnitEnum|string $key
         * @param \Closure():  TCacheValue  $callback
         * @return TCacheValue
         * @static
         */
        public static function sear($key, $callback)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->sear($key, $callback);
        }

        /**
         * Get an item from the cache, or execute the given Closure and store the result forever.
         *
         * @template TCacheValue
         * @param \UnitEnum|string $key
         * @param \Closure():  TCacheValue  $callback
         * @return TCacheValue
         * @static
         */
        public static function rememberForever($key, $callback)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->rememberForever($key, $callback);
        }

        /**
         * Retrieve an item from the cache by key, refreshing it in the background if it is stale.
         *
         * @template TCacheValue
         * @param \UnitEnum|string $key
         * @param array{ 0: \DateTimeInterface|\DateInterval|int, 1: \DateTimeInterface|\DateInterval|int } $ttl
         * @param (callable(): TCacheValue) $callback
         * @param array{ seconds?: int, owner?: string }|null $lock
         * @param bool $alwaysDefer
         * @return TCacheValue
         * @static
         */
        public static function flexible($key, $ttl, $callback, $lock = null, $alwaysDefer = false)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->flexible($key, $ttl, $callback, $lock, $alwaysDefer);
        }

        /**
         * Set the expiration of a cached item.
         *
         * @param \UnitEnum|string $key
         * @param \DateTimeInterface|\DateInterval|int $ttl
         * @return bool
         * @static
         */
        public static function touch($key, $ttl)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->touch($key, $ttl);
        }

        /**
         * Execute a callback while holding an atomic lock on a cache mutex to prevent overlapping calls.
         *
         * @template TReturn
         * @param \UnitEnum|string $key
         * @param callable():  TReturn  $callback
         * @param int $lockFor
         * @param int $waitFor
         * @param string|null $owner
         * @return TReturn
         * @throws \Illuminate\Contracts\Cache\LockTimeoutException
         * @static
         */
        public static function withoutOverlapping($key, $callback, $lockFor = 0, $waitFor = 10, $owner = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->withoutOverlapping($key, $callback, $lockFor, $waitFor, $owner);
        }

        /**
         * Funnel a callback for a maximum number of simultaneous executions.
         *
         * @param \UnitEnum|string $name
         * @return \Illuminate\Cache\Limiters\ConcurrencyLimiterBuilder
         * @static
         */
        public static function funnel($name)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->funnel($name);
        }

        /**
         * Remove an item from the cache.
         *
         * @param \UnitEnum|array|string $key
         * @return bool
         * @static
         */
        public static function forget($key)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->forget($key);
        }

        /**
         * Remove an item from the cache.
         *
         * @param \UnitEnum|array|string $key
         * @static
         */
        public static function delete($key)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->delete($key);
        }

        /**
         * Deletes multiple cache items in a single operation.
         *
         * @param iterable<string> $keys A list of string-based keys to be deleted.
         * @return bool True if the items were successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static
         */
        public static function deleteMultiple($keys)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->deleteMultiple($keys);
        }

        /**
         * Wipes clean the entire cache's keys.
         *
         * @return bool True on success and false on failure.
         * @static
         */
        public static function clear()
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->clear();
        }

        /**
         * Flush all locks from the cache store.
         *
         * @throws \BadMethodCallException
         * @static
         */
        public static function flushLocks()
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->flushLocks();
        }

        /**
         * Begin executing a new tags operation if the store supports it.
         *
         * @param mixed $names
         * @return \Illuminate\Cache\TaggedCache
         * @throws \BadMethodCallException
         * @static
         */
        public static function tags($names)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->tags($names);
        }

        /**
         * Get the name of the cache store.
         *
         * @return string|null
         * @static
         */
        public static function getName()
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->getName();
        }

        /**
         * Determine if the current store supports tags.
         *
         * @return bool
         * @static
         */
        public static function supportsTags()
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->supportsTags();
        }

        /**
         * Determine if the current store supports flushing locks.
         *
         * @static
         */
        public static function supportsFlushingLocks()
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->supportsFlushingLocks();
        }

        /**
         * Get the default cache time.
         *
         * @return int|null
         * @static
         */
        public static function getDefaultCacheTime()
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->getDefaultCacheTime();
        }

        /**
         * Set the default cache time in seconds.
         *
         * @param int|null $seconds
         * @return \Illuminate\Cache\Repository
         * @static
         */
        public static function setDefaultCacheTime($seconds)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->setDefaultCacheTime($seconds);
        }

        /**
         * Get the cache store implementation.
         *
         * @return \Illuminate\Contracts\Cache\Store
         * @static
         */
        public static function getStore()
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->getStore();
        }

        /**
         * Set the cache store implementation.
         *
         * @param \Illuminate\Contracts\Cache\Store $store
         * @return \Illuminate\Cache\Repository
         * @static
         */
        public static function setStore($store)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->setStore($store);
        }

        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher|null
         * @static
         */
        public static function getEventDispatcher()
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->getEventDispatcher();
        }

        /**
         * Set the event dispatcher instance.
         *
         * @return void
         * @static
         */
        public static function setEventDispatcher($events)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            $instance->setEventDispatcher($events);
        }

        /**
         * Determine if a cached value exists.
         *
         * @param \UnitEnum|string $offset
         * @static
         */
        public static function offsetExists($offset)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->offsetExists($offset);
        }

        /**
         * Retrieve an item from the cache by key.
         *
         * @param \UnitEnum|string $offset
         * @static
         */
        public static function offsetGet($offset)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->offsetGet($offset);
        }

        /**
         * Store an item in the cache for the default time.
         *
         * @param \UnitEnum|string $offset
         * @param mixed $value
         * @static
         */
        public static function offsetSet($offset, $value)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->offsetSet($offset, $value);
        }

        /**
         * Remove an item from the cache.
         *
         * @param \UnitEnum|string $offset
         * @static
         */
        public static function offsetUnset($offset)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->offsetUnset($offset);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Cache\Repository::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Cache\Repository::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Cache\Repository::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Cache\Repository::flushMacros();
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static function macroCall($method, $parameters)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->macroCall($method, $parameters);
        }

        /**
         * Get a lock instance.
         *
         * @param string $name
         * @param int $seconds
         * @param string|null $owner
         * @return \Illuminate\Contracts\Cache\Lock
         * @static
         */
        public static function lock($name, $seconds = 0, $owner = null)
        {
            /** @var \Illuminate\Cache\FileStore $instance */
            return $instance->lock($name, $seconds, $owner);
        }

        /**
         * Restore a lock instance using the owner identifier.
         *
         * @param string $name
         * @param string $owner
         * @return \Illuminate\Contracts\Cache\Lock
         * @static
         */
        public static function restoreLock($name, $owner)
        {
            /** @var \Illuminate\Cache\FileStore $instance */
            return $instance->restoreLock($name, $owner);
        }

        /**
         * Atomically refresh the expiration of a cache key if it matches the expected owner.
         *
         * @param string $key
         * @param mixed $expectedOwner
         * @param int $seconds
         * @return bool
         * @static
         */
        public static function refreshIfOwned($key, $expectedOwner, $seconds)
        {
            /** @var \Illuminate\Cache\FileStore $instance */
            return $instance->refreshIfOwned($key, $expectedOwner, $seconds);
        }

        /**
         * Remove all items from the cache.
         *
         * @return bool
         * @static
         */
        public static function flush()
        {
            /** @var \Illuminate\Cache\FileStore $instance */
            return $instance->flush();
        }

        /**
         * Get the full path for the given cache key.
         *
         * @param string $key
         * @return string
         * @static
         */
        public static function path($key)
        {
            /** @var \Illuminate\Cache\FileStore $instance */
            return $instance->path($key);
        }

        /**
         * Get the Filesystem instance.
         *
         * @return \Illuminate\Filesystem\Filesystem
         * @static
         */
        public static function getFilesystem()
        {
            /** @var \Illuminate\Cache\FileStore $instance */
            return $instance->getFilesystem();
        }

        /**
         * Get the working directory of the cache.
         *
         * @return string
         * @static
         */
        public static function getDirectory()
        {
            /** @var \Illuminate\Cache\FileStore $instance */
            return $instance->getDirectory();
        }

        /**
         * Set the working directory of the cache.
         *
         * @param string $directory
         * @return \Illuminate\Cache\FileStore
         * @static
         */
        public static function setDirectory($directory)
        {
            /** @var \Illuminate\Cache\FileStore $instance */
            return $instance->setDirectory($directory);
        }

        /**
         * Set the cache directory where locks should be stored.
         *
         * @param string|null $lockDirectory
         * @return \Illuminate\Cache\FileStore
         * @static
         */
        public static function setLockDirectory($lockDirectory)
        {
            /** @var \Illuminate\Cache\FileStore $instance */
            return $instance->setLockDirectory($lockDirectory);
        }

        /**
         * Get the cache key prefix.
         *
         * @return string
         * @static
         */
        public static function getPrefix()
        {
            /** @var \Illuminate\Cache\FileStore $instance */
            return $instance->getPrefix();
        }

        /**
         * Determine if the lock store is separate from the cache store.
         *
         * @return bool
         * @static
         */
        public static function hasSeparateLockStore()
        {
            /** @var \Illuminate\Cache\FileStore $instance */
            return $instance->hasSeparateLockStore();
        }

            }
    /**
     * @see \Illuminate\Config\Repository
     */
    class Config {
        /**
         * Determine if the given configuration value exists.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function has($key)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->has($key);
        }

        /**
         * Get the specified configuration value.
         *
         * @param array|string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function get($key, $default = null)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->get($key, $default);
        }

        /**
         * Get many configuration values.
         *
         * @param array<string|int,mixed> $keys
         * @return array<string,mixed>
         * @static
         */
        public static function getMany($keys)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->getMany($keys);
        }

        /**
         * Get the specified string configuration value.
         *
         * @param string $key
         * @param (\Closure():(string|null))|string|null $default
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static function string($key, $default = null)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->string($key, $default);
        }

        /**
         * Get the specified integer configuration value.
         *
         * @param string $key
         * @param (\Closure():(int|null))|int|null $default
         * @return int
         * @throws \InvalidArgumentException
         * @static
         */
        public static function integer($key, $default = null)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->integer($key, $default);
        }

        /**
         * Get the specified float configuration value.
         *
         * @param string $key
         * @param (\Closure():(float|null))|float|null $default
         * @return float
         * @throws \InvalidArgumentException
         * @static
         */
        public static function float($key, $default = null)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->float($key, $default);
        }

        /**
         * Get the specified boolean configuration value.
         *
         * @param string $key
         * @param (\Closure():(bool|null))|bool|null $default
         * @return bool
         * @throws \InvalidArgumentException
         * @static
         */
        public static function boolean($key, $default = null)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->boolean($key, $default);
        }

        /**
         * Get the specified array configuration value.
         *
         * @param string $key
         * @param (\Closure():(array<array-key, mixed>|null))|array<array-key, mixed>|null $default
         * @return array<array-key, mixed>
         * @throws \InvalidArgumentException
         * @static
         */
        public static function array($key, $default = null)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->array($key, $default);
        }

        /**
         * Get the specified array configuration value as a collection.
         *
         * @param string $key
         * @param (\Closure():(array<array-key, mixed>|null))|array<array-key, mixed>|null $default
         * @return Collection<array-key, mixed>
         * @static
         */
        public static function collection($key, $default = null)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->collection($key, $default);
        }

        /**
         * Set a given configuration value.
         *
         * @param array|string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function set($key, $value = null)
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->set($key, $value);
        }

        /**
         * Prepend a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function prepend($key, $value)
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->prepend($key, $value);
        }

        /**
         * Push a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function push($key, $value)
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->push($key, $value);
        }

        /**
         * Get all of the configuration items for the application.
         *
         * @return array<string, mixed>
         * @static
         */
        public static function all()
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->all();
        }

        /**
         * Determine if the given configuration option exists.
         *
         * @param string $offset
         * @return bool
         * @static
         */
        public static function offsetExists($offset)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->offsetExists($offset);
        }

        /**
         * Get a configuration option.
         *
         * @param string $offset
         * @return mixed
         * @static
         */
        public static function offsetGet($offset)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->offsetGet($offset);
        }

        /**
         * Set a configuration option.
         *
         * @param string $offset
         * @param mixed $value
         * @return void
         * @static
         */
        public static function offsetSet($offset, $value)
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->offsetSet($offset, $value);
        }

        /**
         * Unset a configuration option.
         *
         * @param string $offset
         * @return void
         * @static
         */
        public static function offsetUnset($offset)
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->offsetUnset($offset);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Config\Repository::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Config\Repository::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Config\Repository::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Config\Repository::flushMacros();
        }

            }
    /**
     * @see \Illuminate\Cookie\CookieJar
     */
    class Cookie {
        /**
         * Create a new cookie instance.
         *
         * @param string $name
         * @param string $value
         * @param int $minutes
         * @param string|null $path
         * @param string|null $domain
         * @param bool|null $secure
         * @param bool $httpOnly
         * @param bool $raw
         * @param string|null $sameSite
         * @return \Symfony\Component\HttpFoundation\Cookie
         * @static
         */
        public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null)
        {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            return $instance->make($name, $value, $minutes, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }

        /**
         * Create a cookie that lasts "forever" (400 days).
         *
         * @param string $name
         * @param string $value
         * @param string|null $path
         * @param string|null $domain
         * @param bool|null $secure
         * @param bool $httpOnly
         * @param bool $raw
         * @param string|null $sameSite
         * @return \Symfony\Component\HttpFoundation\Cookie
         * @static
         */
        public static function forever($name, $value, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null)
        {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            return $instance->forever($name, $value, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }

        /**
         * Expire the given cookie.
         *
         * @param string $name
         * @param string|null $path
         * @param string|null $domain
         * @return \Symfony\Component\HttpFoundation\Cookie
         * @static
         */
        public static function forget($name, $path = null, $domain = null)
        {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            return $instance->forget($name, $path, $domain);
        }

        /**
         * Determine if a cookie has been queued.
         *
         * @param string $key
         * @param string|null $path
         * @return bool
         * @static
         */
        public static function hasQueued($key, $path = null)
        {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            return $instance->hasQueued($key, $path);
        }

        /**
         * Get a queued cookie instance.
         *
         * @param string $key
         * @param mixed $default
         * @param string|null $path
         * @return \Symfony\Component\HttpFoundation\Cookie|null
         * @static
         */
        public static function queued($key, $default = null, $path = null)
        {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            return $instance->queued($key, $default, $path);
        }

        /**
         * Queue a cookie to send with the next response.
         *
         * @param mixed $parameters
         * @return void
         * @static
         */
        public static function queue(...$parameters)
        {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            $instance->queue(...$parameters);
        }

        /**
         * Queue a cookie to expire with the next response.
         *
         * @param string $name
         * @param string|null $path
         * @param string|null $domain
         * @return void
         * @static
         */
        public static function expire($name, $path = null, $domain = null)
        {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            $instance->expire($name, $path, $domain);
        }

        /**
         * Remove a cookie from the queue.
         *
         * @param string $name
         * @param string|null $path
         * @return void
         * @static
         */
        public static function unqueue($name, $path = null)
        {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            $instance->unqueue($name, $path);
        }

        /**
         * Set the default path and domain for the jar.
         *
         * @param string $path
         * @param string|null $domain
         * @param bool|null $secure
         * @param string|null $sameSite
         * @return \Illuminate\Cookie\CookieJar
         * @static
         */
        public static function setDefaultPathAndDomain($path, $domain, $secure = false, $sameSite = null)
        {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            return $instance->setDefaultPathAndDomain($path, $domain, $secure, $sameSite);
        }

        /**
         * Get the cookies which have been queued for the next request.
         *
         * @return \Symfony\Component\HttpFoundation\Cookie[]
         * @static
         */
        public static function getQueuedCookies()
        {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            return $instance->getQueuedCookies();
        }

        /**
         * Flush the cookies which have been queued for the next request.
         *
         * @return \Illuminate\Cookie\CookieJar
         * @static
         */
        public static function flushQueuedCookies()
        {
            /** @var \Illuminate\Cookie\CookieJar $instance */
            return $instance->flushQueuedCookies();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Cookie\CookieJar::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Cookie\CookieJar::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Cookie\CookieJar::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Cookie\CookieJar::flushMacros();
        }

            }
    /**
     * @see \Illuminate\Encryption\Encrypter
     */
    class Crypt {
        /**
         * Determine if the given key and cipher combination is valid.
         *
         * @param string $key
         * @param string $cipher
         * @return bool
         * @static
         */
        public static function supported($key, $cipher)
        {
            return \Illuminate\Encryption\Encrypter::supported($key, $cipher);
        }

        /**
         * Create a new encryption key for the given cipher.
         *
         * @param string $cipher
         * @return string
         * @static
         */
        public static function generateKey($cipher)
        {
            return \Illuminate\Encryption\Encrypter::generateKey($cipher);
        }

        /**
         * Encrypt the given value.
         *
         * @param mixed $value
         * @param bool $serialize
         * @return string
         * @throws \Illuminate\Contracts\Encryption\EncryptException
         * @static
         */
        public static function encrypt($value, $serialize = true)
        {
            /** @var \Illuminate\Encryption\Encrypter $instance */
            return $instance->encrypt($value, $serialize);
        }

        /**
         * Encrypt a string without serialization.
         *
         * @param string $value
         * @return string
         * @throws \Illuminate\Contracts\Encryption\EncryptException
         * @static
         */
        public static function encryptString($value)
        {
            /** @var \Illuminate\Encryption\Encrypter $instance */
            return $instance->encryptString($value);
        }

        /**
         * Decrypt the given value.
         *
         * @param string $payload
         * @param bool $unserialize
         * @return mixed
         * @throws \Illuminate\Contracts\Encryption\DecryptException
         * @static
         */
        public static function decrypt($payload, $unserialize = true)
        {
            /** @var \Illuminate\Encryption\Encrypter $instance */
            return $instance->decrypt($payload, $unserialize);
        }

        /**
         * Decrypt the given string without unserialization.
         *
         * @param string $payload
         * @return string
         * @throws \Illuminate\Contracts\Encryption\DecryptException
         * @static
         */
        public static function decryptString($payload)
        {
            /** @var \Illuminate\Encryption\Encrypter $instance */
            return $instance->decryptString($payload);
        }

        /**
         * Determine if the given value appears to be encrypted by this encrypter.
         *
         * @param mixed $value
         * @return bool
         * @static
         */
        public static function appearsEncrypted($value)
        {
            return \Illuminate\Encryption\Encrypter::appearsEncrypted($value);
        }

        /**
         * Get the encryption key that the encrypter is currently using.
         *
         * @return string
         * @static
         */
        public static function getKey()
        {
            /** @var \Illuminate\Encryption\Encrypter $instance */
            return $instance->getKey();
        }

        /**
         * Get the current encryption key and all previous encryption keys.
         *
         * @return array
         * @static
         */
        public static function getAllKeys()
        {
            /** @var \Illuminate\Encryption\Encrypter $instance */
            return $instance->getAllKeys();
        }

        /**
         * Get the previous encryption keys.
         *
         * @return array
         * @static
         */
        public static function getPreviousKeys()
        {
            /** @var \Illuminate\Encryption\Encrypter $instance */
            return $instance->getPreviousKeys();
        }

        /**
         * Set the previous / legacy encryption keys that should be utilized if decryption fails.
         *
         * @param array $keys
         * @return \Illuminate\Encryption\Encrypter
         * @throws \RuntimeException
         * @static
         */
        public static function previousKeys($keys)
        {
            /** @var \Illuminate\Encryption\Encrypter $instance */
            return $instance->previousKeys($keys);
        }

            }
    /**
     * @see \Illuminate\Database\DatabaseManager
     */
    class DB {
        /**
         * Get a database connection instance.
         *
         * @param \UnitEnum|string|null $name
         * @return \Illuminate\Database\Connection
         * @static
         */
        public static function connection($name = null)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->connection($name);
        }

        /**
         * Build a database connection instance from the given configuration.
         *
         * @param array $config
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function build($config)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->build($config);
        }

        /**
         * Calculate the dynamic connection name for an on-demand connection based on its configuration.
         *
         * @param array $config
         * @return string
         * @static
         */
        public static function calculateDynamicConnectionName($config)
        {
            return \Illuminate\Database\DatabaseManager::calculateDynamicConnectionName($config);
        }

        /**
         * Get a database connection instance from the given configuration.
         *
         * @param \UnitEnum|string $name
         * @param array $config
         * @param bool $force
         * @return \Illuminate\Database\MySqlConnection
         * @throws \RuntimeException
         * @static
         */
        public static function connectUsing($name, $config, $force = false)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->connectUsing($name, $config, $force);
        }

        /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param \UnitEnum|string|null $name
         * @return void
         * @static
         */
        public static function purge($name = null)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->purge($name);
        }

        /**
         * Disconnect from the given database.
         *
         * @param \UnitEnum|string|null $name
         * @return void
         * @static
         */
        public static function disconnect($name = null)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->disconnect($name);
        }

        /**
         * Reconnect to the given database.
         *
         * @param \UnitEnum|string|null $name
         * @return \Illuminate\Database\Connection
         * @static
         */
        public static function reconnect($name = null)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->reconnect($name);
        }

        /**
         * Set the default database connection for the callback execution.
         *
         * @template TReturn
         * @param \UnitEnum|string $name
         * @param (callable(): TReturn) $callback
         * @return TReturn
         * @static
         */
        public static function usingConnection($name, $callback)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->usingConnection($name, $callback);
        }

        /**
         * Get the default connection name.
         *
         * @return string
         * @static
         */
        public static function getDefaultConnection()
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->getDefaultConnection();
        }

        /**
         * Set the default connection name.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setDefaultConnection($name)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->setDefaultConnection($name);
        }

        /**
         * Get all of the supported drivers.
         *
         * @return string[]
         * @static
         */
        public static function supportedDrivers()
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->supportedDrivers();
        }

        /**
         * Get all of the drivers that are actually available.
         *
         * @return string[]
         * @static
         */
        public static function availableDrivers()
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->availableDrivers();
        }

        /**
         * Register an extension connection resolver.
         *
         * @param string $name
         * @param callable $resolver
         * @return void
         * @static
         */
        public static function extend($name, $resolver)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->extend($name, $resolver);
        }

        /**
         * Remove an extension connection resolver.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function forgetExtension($name)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->forgetExtension($name);
        }

        /**
         * Return all of the created connections.
         *
         * @return array<string, \Illuminate\Database\Connection>
         * @static
         */
        public static function getConnections()
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->getConnections();
        }

        /**
         * Set the database reconnector callback.
         *
         * @param callable $reconnector
         * @return void
         * @static
         */
        public static function setReconnector($reconnector)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            $instance->setReconnector($reconnector);
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Database\DatabaseManager
         * @static
         */
        public static function setApplication($app)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Database\DatabaseManager::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Database\DatabaseManager::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Database\DatabaseManager::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Database\DatabaseManager::flushMacros();
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static function macroCall($method, $parameters)
        {
            /** @var \Illuminate\Database\DatabaseManager $instance */
            return $instance->macroCall($method, $parameters);
        }

        /**
         * Get a human-readable name for the given connection driver.
         *
         * @return string
         * @static
         */
        public static function getDriverTitle()
        {
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getDriverTitle();
        }

        /**
         * Run an insert statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @param string|null $sequence
         * @return bool
         * @static
         */
        public static function insert($query, $bindings = [], $sequence = null)
        {
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->insert($query, $bindings, $sequence);
        }

        /**
         * Get the connection's last insert ID.
         *
         * @return string|int|null
         * @static
         */
        public static function getLastInsertId()
        {
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getLastInsertId();
        }

        /**
         * Determine if the connected database is a MariaDB database.
         *
         * @return bool
         * @static
         */
        public static function isMaria()
        {
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->isMaria();
        }

        /**
         * Get the server version for the connection.
         *
         * @return string
         * @static
         */
        public static function getServerVersion()
        {
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getServerVersion();
        }

        /**
         * Get a schema builder instance for the connection.
         *
         * @return \Illuminate\Database\Schema\MySqlBuilder
         * @static
         */
        public static function getSchemaBuilder()
        {
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getSchemaBuilder();
        }

        /**
         * Get the schema state for the connection.
         *
         * @param \Illuminate\Filesystem\Filesystem|null $files
         * @param callable|null $processFactory
         * @return \Illuminate\Database\Schema\MySqlSchemaState
         * @static
         */
        public static function getSchemaState($files = null, $processFactory = null)
        {
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getSchemaState($files, $processFactory);
        }

        /**
         * Set the query grammar to the default implementation.
         *
         * @return void
         * @static
         */
        public static function useDefaultQueryGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->useDefaultQueryGrammar();
        }

        /**
         * Set the schema grammar to the default implementation.
         *
         * @return void
         * @static
         */
        public static function useDefaultSchemaGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->useDefaultSchemaGrammar();
        }

        /**
         * Set the query post processor to the default implementation.
         *
         * @return void
         * @static
         */
        public static function useDefaultPostProcessor()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->useDefaultPostProcessor();
        }

        /**
         * Begin a fluent query against a database table.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Contracts\Database\Query\Expression|\UnitEnum|string $table
         * @param string|null $as
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function table($table, $as = null)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->table($table, $as);
        }

        /**
         * Get a new query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function query()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->query();
        }

        /**
         * Run a select statement and return a single result.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return mixed
         * @static
         */
        public static function selectOne($query, $bindings = [], $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->selectOne($query, $bindings, $useReadPdo);
        }

        /**
         * Run a select statement and return the first column of the first row.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return mixed
         * @throws \Illuminate\Database\MultipleColumnsSelectedException
         * @static
         */
        public static function scalar($query, $bindings = [], $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->scalar($query, $bindings, $useReadPdo);
        }

        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return array
         * @static
         */
        public static function selectFromWriteConnection($query, $bindings = [])
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->selectFromWriteConnection($query, $bindings);
        }

        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @param array $fetchUsing
         * @return array
         * @static
         */
        public static function select($query, $bindings = [], $useReadPdo = true, $fetchUsing = [])
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->select($query, $bindings, $useReadPdo, $fetchUsing);
        }

        /**
         * Run a select statement against the database and returns all of the result sets.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @param array $fetchUsing
         * @return array
         * @static
         */
        public static function selectResultSets($query, $bindings = [], $useReadPdo = true, $fetchUsing = [])
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->selectResultSets($query, $bindings, $useReadPdo, $fetchUsing);
        }

        /**
         * Run a select statement against the database and returns a generator.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @param array $fetchUsing
         * @return \Generator<int, \stdClass>
         * @static
         */
        public static function cursor($query, $bindings = [], $useReadPdo = true, $fetchUsing = [])
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->cursor($query, $bindings, $useReadPdo, $fetchUsing);
        }

        /**
         * Run an update statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int
         * @static
         */
        public static function update($query, $bindings = [])
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->update($query, $bindings);
        }

        /**
         * Run a delete statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int
         * @static
         */
        public static function delete($query, $bindings = [])
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->delete($query, $bindings);
        }

        /**
         * Execute an SQL statement and return the boolean result.
         *
         * @param string $query
         * @param array $bindings
         * @return bool
         * @static
         */
        public static function statement($query, $bindings = [])
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->statement($query, $bindings);
        }

        /**
         * Run an SQL statement and get the number of rows affected.
         *
         * @param string $query
         * @param array $bindings
         * @return int
         * @static
         */
        public static function affectingStatement($query, $bindings = [])
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->affectingStatement($query, $bindings);
        }

        /**
         * Run a raw, unprepared query against the PDO connection.
         *
         * @param literal-string $query
         * @return bool
         * @static
         */
        public static function unprepared($query)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->unprepared($query);
        }

        /**
         * Get the number of open connections for the database.
         *
         * @return int|null
         * @static
         */
        public static function threadCount()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->threadCount();
        }

        /**
         * Execute the given callback in "dry run" mode.
         *
         * @param (\Closure(\Illuminate\Database\Connection): mixed) $callback
         * @return \Illuminate\Database\array{query: string, bindings: array, time: float|null}[]
         * @static
         */
        public static function pretend($callback)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->pretend($callback);
        }

        /**
         * Execute the given callback without "pretending".
         *
         * @template TReturn
         * @param \Closure():  TReturn  $callback
         * @return TReturn
         * @static
         */
        public static function withoutPretending($callback)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->withoutPretending($callback);
        }

        /**
         * Bind values to their parameters in the given statement.
         *
         * @param \PDOStatement $statement
         * @param array $bindings
         * @return void
         * @static
         */
        public static function bindValues($statement, $bindings)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->bindValues($statement, $bindings);
        }

        /**
         * Prepare the query bindings for execution.
         *
         * @param array $bindings
         * @return array
         * @static
         */
        public static function prepareBindings($bindings)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->prepareBindings($bindings);
        }

        /**
         * Log a query in the connection's query log.
         *
         * @param string $query
         * @param array $bindings
         * @param float|null $time
         * @return void
         * @static
         */
        public static function logQuery($query, $bindings, $time = null)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->logQuery($query, $bindings, $time);
        }

        /**
         * Register a callback to be invoked when the connection queries for longer than a given amount of time.
         *
         * @param \DateTimeInterface|\Carbon\CarbonInterval|float|int $threshold
         * @param (callable(\Illuminate\Database\Connection, \Illuminate\Database\Events\QueryExecuted): mixed) $handler
         * @return void
         * @static
         */
        public static function whenQueryingForLongerThan($threshold, $handler)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->whenQueryingForLongerThan($threshold, $handler);
        }

        /**
         * Allow all the query duration handlers to run again, even if they have already run.
         *
         * @return void
         * @static
         */
        public static function allowQueryDurationHandlersToRunAgain()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->allowQueryDurationHandlersToRunAgain();
        }

        /**
         * Get the duration of all run queries in milliseconds.
         *
         * @return float
         * @static
         */
        public static function totalQueryDuration()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->totalQueryDuration();
        }

        /**
         * Reset the duration of all run queries.
         *
         * @return void
         * @static
         */
        public static function resetTotalQueryDuration()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->resetTotalQueryDuration();
        }

        /**
         * Reconnect to the database if a PDO connection is missing.
         *
         * @return void
         * @static
         */
        public static function reconnectIfMissingConnection()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->reconnectIfMissingConnection();
        }

        /**
         * Register a hook to be run just before a database transaction is started.
         *
         * @param \Closure $callback
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function beforeStartingTransaction($callback)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->beforeStartingTransaction($callback);
        }

        /**
         * Register a hook to be run just before a database query is executed.
         *
         * @param \Closure $callback
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function beforeExecuting($callback)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->beforeExecuting($callback);
        }

        /**
         * Register a database query listener with the connection.
         *
         * @param \Closure(\Illuminate\Database\Events\QueryExecuted) $callback
         * @return void
         * @static
         */
        public static function listen($callback)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->listen($callback);
        }

        /**
         * Get a new raw query expression.
         *
         * @param literal-string|int|float $value
         * @return \Illuminate\Contracts\Database\Query\Expression
         * @static
         */
        public static function raw($value)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->raw($value);
        }

        /**
         * Escape a value for safe SQL embedding.
         *
         * @param string|float|int|bool|null $value
         * @param bool $binary
         * @return string
         * @throws \RuntimeException
         * @static
         */
        public static function escape($value, $binary = false)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->escape($value, $binary);
        }

        /**
         * Determine if the database connection has modified any database records.
         *
         * @return bool
         * @static
         */
        public static function hasModifiedRecords()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->hasModifiedRecords();
        }

        /**
         * Indicate if any records have been modified.
         *
         * @param bool $value
         * @return void
         * @static
         */
        public static function recordsHaveBeenModified($value = true)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->recordsHaveBeenModified($value);
        }

        /**
         * Set the record modification state.
         *
         * @param bool $value
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setRecordModificationState($value)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setRecordModificationState($value);
        }

        /**
         * Reset the record modification state.
         *
         * @return void
         * @static
         */
        public static function forgetRecordModificationState()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->forgetRecordModificationState();
        }

        /**
         * Indicate that the connection should use the write PDO connection for reads.
         *
         * @param bool $value
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function useWriteConnectionWhenReading($value = true)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->useWriteConnectionWhenReading($value);
        }

        /**
         * Get the current PDO connection.
         *
         * @return \PDO
         * @static
         */
        public static function getPdo()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getPdo();
        }

        /**
         * Get the current PDO connection parameter without executing any reconnect logic.
         *
         * @return \PDO|\Closure|null
         * @static
         */
        public static function getRawPdo()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getRawPdo();
        }

        /**
         * Get the current PDO connection used for reading.
         *
         * @return \PDO
         * @static
         */
        public static function getReadPdo()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getReadPdo();
        }

        /**
         * Get the current read PDO connection parameter without executing any reconnect logic.
         *
         * @return \PDO|\Closure|null
         * @static
         */
        public static function getRawReadPdo()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getRawReadPdo();
        }

        /**
         * Get the current PDO connection used for direct connections.
         *
         * @return \PDO
         * @static
         */
        public static function getDirectPdo()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getDirectPdo();
        }

        /**
         * Get the current direct PDO connection parameter without executing any reconnect logic.
         *
         * @return \PDO|\Closure|null
         * @static
         */
        public static function getRawDirectPdo()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getRawDirectPdo();
        }

        /**
         * Set the PDO connection.
         *
         * @param \PDO|\Closure|null $pdo
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setPdo($pdo)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setPdo($pdo);
        }

        /**
         * Set the PDO connection used for reading.
         *
         * @param \PDO|\Closure|null $pdo
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setReadPdo($pdo)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setReadPdo($pdo);
        }

        /**
         * Set the read PDO connection configuration.
         *
         * @param array $config
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setReadPdoConfig($config)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setReadPdoConfig($config);
        }

        /**
         * Set the PDO connection used for direct connections.
         *
         * @param \PDO|\Closure|null $pdo
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setDirectPdo($pdo)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setDirectPdo($pdo);
        }

        /**
         * Set the direct PDO connection configuration.
         *
         * @param array $config
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setDirectPdoConfig($config)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setDirectPdoConfig($config);
        }

        /**
         * Get the direct PDO connection configuration.
         *
         * @return array
         * @static
         */
        public static function getDirectPdoConfig()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getDirectPdoConfig();
        }

        /**
         * Determine if this connection has a direct PDO connection configured.
         *
         * @return bool
         * @static
         */
        public static function hasDirectConnection()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->hasDirectConnection();
        }

        /**
         * Get the database connection name.
         *
         * @return string|null
         * @static
         */
        public static function getName()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getName();
        }

        /**
         * Get the database connection with its read / write type.
         *
         * @return string|null
         * @static
         */
        public static function getNameWithReadWriteType()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getNameWithReadWriteType();
        }

        /**
         * Get an option from the configuration options.
         *
         * @param string|null $option
         * @return mixed
         * @static
         */
        public static function getConfig($option = null)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getConfig($option);
        }

        /**
         * Get the PDO driver name.
         *
         * @return string
         * @static
         */
        public static function getDriverName()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getDriverName();
        }

        /**
         * Get the query grammar used by the connection.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar
         * @static
         */
        public static function getQueryGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getQueryGrammar();
        }

        /**
         * Set the query grammar used by the connection.
         *
         * @param \Illuminate\Database\Query\Grammars\Grammar $grammar
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setQueryGrammar($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setQueryGrammar($grammar);
        }

        /**
         * Get the schema grammar used by the connection.
         *
         * @return \Illuminate\Database\Schema\Grammars\Grammar
         * @static
         */
        public static function getSchemaGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getSchemaGrammar();
        }

        /**
         * Set the schema grammar used by the connection.
         *
         * @param \Illuminate\Database\Schema\Grammars\Grammar $grammar
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setSchemaGrammar($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setSchemaGrammar($grammar);
        }

        /**
         * Get the query post processor used by the connection.
         *
         * @return \Illuminate\Database\Query\Processors\Processor
         * @static
         */
        public static function getPostProcessor()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getPostProcessor();
        }

        /**
         * Set the query post processor used by the connection.
         *
         * @param \Illuminate\Database\Query\Processors\Processor $processor
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setPostProcessor($processor)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setPostProcessor($processor);
        }

        /**
         * Get the event dispatcher used by the connection.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher|null
         * @static
         */
        public static function getEventDispatcher()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getEventDispatcher();
        }

        /**
         * Set the event dispatcher instance on the connection.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setEventDispatcher($events)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setEventDispatcher($events);
        }

        /**
         * Unset the event dispatcher for this connection.
         *
         * @return void
         * @static
         */
        public static function unsetEventDispatcher()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->unsetEventDispatcher();
        }

        /**
         * Set the transaction manager instance on the connection.
         *
         * @param \Illuminate\Database\DatabaseTransactionsManager $manager
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setTransactionManager($manager)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setTransactionManager($manager);
        }

        /**
         * Unset the transaction manager for this connection.
         *
         * @return void
         * @static
         */
        public static function unsetTransactionManager()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->unsetTransactionManager();
        }

        /**
         * Determine if the connection is in a "dry run".
         *
         * @return bool
         * @static
         */
        public static function pretending()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->pretending();
        }

        /**
         * Get the connection query log.
         *
         * @return \Illuminate\Database\array{query: string, bindings: array, time: float|null}[]
         * @static
         */
        public static function getQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getQueryLog();
        }

        /**
         * Get the connection query log with embedded bindings.
         *
         * @return array
         * @static
         */
        public static function getRawQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getRawQueryLog();
        }

        /**
         * Clear the query log.
         *
         * @return void
         * @static
         */
        public static function flushQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->flushQueryLog();
        }

        /**
         * Enable the query log on the connection.
         *
         * @return void
         * @static
         */
        public static function enableQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->enableQueryLog();
        }

        /**
         * Disable the query log on the connection.
         *
         * @return void
         * @static
         */
        public static function disableQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->disableQueryLog();
        }

        /**
         * Determine whether we're logging queries.
         *
         * @return bool
         * @static
         */
        public static function logging()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->logging();
        }

        /**
         * Get the name of the connected database.
         *
         * @return string
         * @static
         */
        public static function getDatabaseName()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getDatabaseName();
        }

        /**
         * Set the name of the connected database.
         *
         * @param string $database
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setDatabaseName($database)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setDatabaseName($database);
        }

        /**
         * Set the read / write type of the connection.
         *
         * @param string|null $readWriteType
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setReadWriteType($readWriteType)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setReadWriteType($readWriteType);
        }

        /**
         * Get the table prefix for the connection.
         *
         * @return string
         * @static
         */
        public static function getTablePrefix()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->getTablePrefix();
        }

        /**
         * Set the table prefix in use by the connection.
         *
         * @param string $prefix
         * @return \Illuminate\Database\MySqlConnection
         * @static
         */
        public static function setTablePrefix($prefix)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->setTablePrefix($prefix);
        }

        /**
         * Execute the given callback without table prefix.
         *
         * @template TReturn
         * @param (\Closure($this): TReturn) $callback
         * @return TReturn
         * @static
         */
        public static function withoutTablePrefix($callback)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->withoutTablePrefix($callback);
        }

        /**
         * Register a connection resolver.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function resolverFor($driver, $callback)
        {
            //Method inherited from \Illuminate\Database\Connection 
            \Illuminate\Database\MySqlConnection::resolverFor($driver, $callback);
        }

        /**
         * Get the connection resolver for the given driver.
         *
         * @param string $driver
         * @return \Closure|null
         * @static
         */
        public static function getResolver($driver)
        {
            //Method inherited from \Illuminate\Database\Connection 
            return \Illuminate\Database\MySqlConnection::getResolver($driver);
        }

        /**
         * @template TReturn of mixed
         *
         * Execute a Closure within a transaction.
         * @param (\Closure(static): TReturn) $callback
         * @param int $attempts
         * @return TReturn
         * @throws \Throwable
         * @static
         */
        public static function transaction($callback, $attempts = 1)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->transaction($callback, $attempts);
        }

        /**
         * Start a new database transaction.
         *
         * @return void
         * @throws \Throwable
         * @static
         */
        public static function beginTransaction()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->beginTransaction();
        }

        /**
         * Commit the active database transaction.
         *
         * @return void
         * @throws \Throwable
         * @static
         */
        public static function commit()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->commit();
        }

        /**
         * Rollback the active database transaction.
         *
         * @param int|null $toLevel
         * @return void
         * @throws \Throwable
         * @static
         */
        public static function rollBack($toLevel = null)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->rollBack($toLevel);
        }

        /**
         * Get the number of active transactions.
         *
         * @return int
         * @static
         */
        public static function transactionLevel()
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            return $instance->transactionLevel();
        }

        /**
         * Execute the callback after a transaction commits.
         *
         * @param callable $callback
         * @return void
         * @throws \RuntimeException
         * @static
         */
        public static function afterCommit($callback)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->afterCommit($callback);
        }

        /**
         * Execute the callback after a transaction rolls back.
         *
         * @param callable $callback
         * @return void
         * @throws \RuntimeException
         * @static
         */
        public static function afterRollBack($callback)
        {
            //Method inherited from \Illuminate\Database\Connection 
            /** @var \Illuminate\Database\MySqlConnection $instance */
            $instance->afterRollBack($callback);
        }

            }
    /**
     * @see \Illuminate\Events\Dispatcher
     * @see \Illuminate\Support\Testing\Fakes\EventFake
     */
    class Event {
        /**
         * Register an event listener with the dispatcher.
         *
         * @param \Illuminate\Events\Queued\Closure|callable|array|class-string|string $events
         * @param \Illuminate\Events\Queued\Closure|callable|array|class-string|null $listener
         * @return void
         * @static
         */
        public static function listen($events, $listener = null)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->listen($events, $listener);
        }

        /**
         * Determine if a given event has listeners.
         *
         * @param string $eventName
         * @return bool
         * @static
         */
        public static function hasListeners($eventName)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->hasListeners($eventName);
        }

        /**
         * Determine if the given event has any wildcard listeners.
         *
         * @param string $eventName
         * @return bool
         * @static
         */
        public static function hasWildcardListeners($eventName)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->hasWildcardListeners($eventName);
        }

        /**
         * Register an event and payload to be fired later.
         *
         * @param string $event
         * @param object|array $payload
         * @return void
         * @static
         */
        public static function push($event, $payload = [])
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->push($event, $payload);
        }

        /**
         * Flush a set of pushed events.
         *
         * @param string $event
         * @return void
         * @static
         */
        public static function flush($event)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->flush($event);
        }

        /**
         * Register an event subscriber with the dispatcher.
         *
         * @param object|string $subscriber
         * @return void
         * @static
         */
        public static function subscribe($subscriber)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->subscribe($subscriber);
        }

        /**
         * Fire an event until the first non-null response is returned.
         *
         * @param string|object $event
         * @param mixed $payload
         * @return array|null
         * @static
         */
        public static function until($event, $payload = [])
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->until($event, $payload);
        }

        /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
         * @param mixed $payload
         * @param bool $halt
         * @return array|null
         * @static
         */
        public static function dispatch($event, $payload = [], $halt = false)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->dispatch($event, $payload, $halt);
        }

        /**
         * Get all of the listeners for a given event name.
         *
         * @param string $eventName
         * @return array
         * @static
         */
        public static function getListeners($eventName)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->getListeners($eventName);
        }

        /**
         * Register an event listener with the dispatcher.
         *
         * @param \Closure|string|array{class-string, string} $listener
         * @param bool $wildcard
         * @return \Closure
         * @static
         */
        public static function makeListener($listener, $wildcard = false)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->makeListener($listener, $wildcard);
        }

        /**
         * Create a class based listener using the IoC container.
         *
         * @param string $listener
         * @param bool $wildcard
         * @return \Closure
         * @static
         */
        public static function createClassListener($listener, $wildcard = false)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->createClassListener($listener, $wildcard);
        }

        /**
         * Remove a set of listeners from the dispatcher.
         *
         * @param string $event
         * @return void
         * @static
         */
        public static function forget($event)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->forget($event);
        }

        /**
         * Forget all of the pushed listeners.
         *
         * @return void
         * @static
         */
        public static function forgetPushed()
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->forgetPushed();
        }

        /**
         * Set the queue resolver implementation.
         *
         * @param callable():  \Illuminate\Contracts\Queue\Queue  $resolver
         * @return \Illuminate\Events\Dispatcher
         * @static
         */
        public static function setQueueResolver($resolver)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->setQueueResolver($resolver);
        }

        /**
         * Set the database transaction manager resolver implementation.
         *
         * @param (callable(): (\Illuminate\Database\DatabaseTransactionsManager|null)) $resolver
         * @return \Illuminate\Events\Dispatcher
         * @static
         */
        public static function setTransactionManagerResolver($resolver)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->setTransactionManagerResolver($resolver);
        }

        /**
         * Execute the given callback while deferring events, then dispatch all deferred events.
         *
         * @template TResult
         * @param callable():  TResult  $callback
         * @param string[]|null $events
         * @return TResult
         * @static
         */
        public static function defer($callback, $events = null)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->defer($callback, $events);
        }

        /**
         * Gets the raw, unprepared listeners.
         *
         * @return array<string, callable|array|class-string|null>
         * @static
         */
        public static function getRawListeners()
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->getRawListeners();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Events\Dispatcher::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Events\Dispatcher::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Events\Dispatcher::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Events\Dispatcher::flushMacros();
        }

        /**
         * Resolve the default connection name for a given queueable instance.
         *
         * @param object $queueable
         * @return string|null
         * @static
         */
        public static function resolveConnectionFromQueueRoute($queueable)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->resolveConnectionFromQueueRoute($queueable);
        }

        /**
         * Resolve the default queue name for a given queueable instance.
         *
         * @param object $queueable
         * @return string|null
         * @static
         */
        public static function resolveQueueFromQueueRoute($queueable)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->resolveQueueFromQueueRoute($queueable);
        }

        /**
         * Specify the events that should be dispatched instead of faked.
         *
         * @param array|string $eventsToDispatch
         * @return \Illuminate\Support\Testing\Fakes\EventFake
         * @static
         */
        public static function except($eventsToDispatch)
        {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            return $instance->except($eventsToDispatch);
        }

        /**
         * Assert if an event has a listener attached to it.
         *
         * @param string $expectedEvent
         * @param string|array $expectedListener
         * @return void
         * @static
         */
        public static function assertListening($expectedEvent, $expectedListener)
        {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            $instance->assertListening($expectedEvent, $expectedListener);
        }

        /**
         * Assert if an event was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $event
         * @param callable|int|null $callback
         * @return void
         * @static
         */
        public static function assertDispatched($event, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            $instance->assertDispatched($event, $callback);
        }

        /**
         * Assert if an event was dispatched exactly once.
         *
         * @param string $event
         * @return void
         * @static
         */
        public static function assertDispatchedOnce($event)
        {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            $instance->assertDispatchedOnce($event);
        }

        /**
         * Assert if an event was dispatched a number of times.
         *
         * @param string $event
         * @param int $times
         * @return void
         * @static
         */
        public static function assertDispatchedTimes($event, $times = 1)
        {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            $instance->assertDispatchedTimes($event, $times);
        }

        /**
         * Determine if an event was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $event
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertNotDispatched($event, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            $instance->assertNotDispatched($event, $callback);
        }

        /**
         * Assert that no events were dispatched.
         *
         * @return void
         * @static
         */
        public static function assertNothingDispatched()
        {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            $instance->assertNothingDispatched();
        }

        /**
         * Get all of the events matching a truth-test callback.
         *
         * @param string $event
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static function dispatched($event, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            return $instance->dispatched($event, $callback);
        }

        /**
         * Determine if the given event has been dispatched.
         *
         * @param string $event
         * @return bool
         * @static
         */
        public static function hasDispatched($event)
        {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            return $instance->hasDispatched($event);
        }

        /**
         * Get the events that have been dispatched.
         *
         * @return array
         * @static
         */
        public static function dispatchedEvents()
        {
            /** @var \Illuminate\Support\Testing\Fakes\EventFake $instance */
            return $instance->dispatchedEvents();
        }

            }
    /**
     * @see \Illuminate\Filesystem\Filesystem
     */
    class File {
        /**
         * Determine if a file or directory exists.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function exists($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->exists($path);
        }

        /**
         * Determine if a file or directory is missing.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function missing($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->missing($path);
        }

        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @param bool $lock
         * @return string
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         */
        public static function get($path, $lock = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->get($path, $lock);
        }

        /**
         * Get the contents of a file as decoded JSON.
         *
         * @param string $path
         * @param int $flags
         * @param bool $lock
         * @return array
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         */
        public static function json($path, $flags = 0, $lock = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->json($path, $flags, $lock);
        }

        /**
         * Get contents of a file with shared access.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function sharedGet($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->sharedGet($path);
        }

        /**
         * Get the returned value of a file.
         *
         * @param string $path
         * @param array $data
         * @return mixed
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         */
        public static function getRequire($path, $data = [])
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->getRequire($path, $data);
        }

        /**
         * Require the given file once.
         *
         * @param string $path
         * @param array $data
         * @return mixed
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         */
        public static function requireOnce($path, $data = [])
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->requireOnce($path, $data);
        }

        /**
         * Get the contents of a file one line at a time.
         *
         * @param string $path
         * @return \Illuminate\Support\LazyCollection
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static
         */
        public static function lines($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->lines($path);
        }

        /**
         * Get the hash of the file at the given path.
         *
         * @param string $path
         * @param string $algorithm
         * @return string|false
         * @static
         */
        public static function hash($path, $algorithm = 'md5')
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->hash($path, $algorithm);
        }

        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string $contents
         * @param bool $lock
         * @return int|bool
         * @static
         */
        public static function put($path, $contents, $lock = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->put($path, $contents, $lock);
        }

        /**
         * Write the contents of a file, replacing it atomically if it already exists.
         *
         * @param string $path
         * @param string $content
         * @param int|null $mode
         * @return void
         * @static
         */
        public static function replace($path, $content, $mode = null)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->replace($path, $content, $mode);
        }

        /**
         * Replace a given string within a given file.
         *
         * @param array|string $search
         * @param array|string $replace
         * @param string $path
         * @return void
         * @static
         */
        public static function replaceInFile($search, $replace, $path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->replaceInFile($search, $replace, $path);
        }

        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @return int
         * @static
         */
        public static function prepend($path, $data)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->prepend($path, $data);
        }

        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @param bool $lock
         * @return int
         * @static
         */
        public static function append($path, $data, $lock = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->append($path, $data, $lock);
        }

        /**
         * Get or set UNIX mode of a file or directory.
         *
         * @param string $path
         * @param int|null $mode
         * @return mixed
         * @static
         */
        public static function chmod($path, $mode = null)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->chmod($path, $mode);
        }

        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool
         * @static
         */
        public static function delete($paths)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->delete($paths);
        }

        /**
         * Move a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool
         * @static
         */
        public static function move($path, $target)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->move($path, $target);
        }

        /**
         * Copy a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool
         * @static
         */
        public static function copy($path, $target)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->copy($path, $target);
        }

        /**
         * Create a symlink to the target file or directory. On Windows, a hard link is created if the target is a file.
         *
         * @param string $target
         * @param string $link
         * @return bool|null
         * @static
         */
        public static function link($target, $link)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->link($target, $link);
        }

        /**
         * Create a relative symlink to the target file or directory.
         *
         * @param string $target
         * @param string $link
         * @return void
         * @throws \RuntimeException
         * @static
         */
        public static function relativeLink($target, $link)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->relativeLink($target, $link);
        }

        /**
         * Extract the file name from a file path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function name($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->name($path);
        }

        /**
         * Extract the trailing name component from a file path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function basename($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->basename($path);
        }

        /**
         * Extract the parent directory from a file path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function dirname($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->dirname($path);
        }

        /**
         * Extract the file extension from a file path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function extension($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->extension($path);
        }

        /**
         * Guess the file extension from the MIME type of a given file.
         *
         * @param string $path
         * @return string|null
         * @throws \RuntimeException
         * @static
         */
        public static function guessExtension($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->guessExtension($path);
        }

        /**
         * Get the file type of a given file.
         *
         * @param string $path
         * @return string|false
         * @static
         */
        public static function type($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->type($path);
        }

        /**
         * Get the MIME type of a given file.
         *
         * @param string $path
         * @return string|false
         * @static
         */
        public static function mimeType($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->mimeType($path);
        }

        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int
         * @static
         */
        public static function size($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->size($path);
        }

        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int
         * @static
         */
        public static function lastModified($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->lastModified($path);
        }

        /**
         * Determine if the given path is a directory.
         *
         * @param string $directory
         * @return bool
         * @static
         */
        public static function isDirectory($directory)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isDirectory($directory);
        }

        /**
         * Determine if the given path is a directory that does not contain any other files or directories.
         *
         * @param string $directory
         * @param bool $ignoreDotFiles
         * @return bool
         * @static
         */
        public static function isEmptyDirectory($directory, $ignoreDotFiles = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isEmptyDirectory($directory, $ignoreDotFiles);
        }

        /**
         * Determine if the given path is readable.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function isReadable($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isReadable($path);
        }

        /**
         * Determine if the given path is writable.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function isWritable($path)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isWritable($path);
        }

        /**
         * Determine if two files are the same by comparing their hashes.
         *
         * @param string $firstFile
         * @param string $secondFile
         * @return bool
         * @static
         */
        public static function hasSameHash($firstFile, $secondFile)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->hasSameHash($firstFile, $secondFile);
        }

        /**
         * Determine if the given path is a file.
         *
         * @param string $file
         * @return bool
         * @static
         */
        public static function isFile($file)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->isFile($file);
        }

        /**
         * Find path names matching a given pattern.
         *
         * @param string $pattern
         * @param int $flags
         * @return array
         * @static
         */
        public static function glob($pattern, $flags = 0)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->glob($pattern, $flags);
        }

        /**
         * Get an array of all files in a directory.
         *
         * @param string $directory
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[]
         * @static
         */
        public static function files($directory, $hidden = false, $depth = 0)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->files($directory, $hidden, $depth);
        }

        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string $directory
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[]
         * @static
         */
        public static function allFiles($directory, $hidden = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->allFiles($directory, $hidden);
        }

        /**
         * Get all of the directories within a given directory.
         *
         * @param string $directory
         * @return array
         * @static
         */
        public static function directories($directory, $depth = 0)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->directories($directory, $depth);
        }

        /**
         * Get all the directories within a given directory (recursive).
         *
         * @return array
         * @static
         */
        public static function allDirectories($directory)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->allDirectories($directory);
        }

        /**
         * Ensure a directory exists.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         * @return void
         * @static
         */
        public static function ensureDirectoryExists($path, $mode = 493, $recursive = true)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            $instance->ensureDirectoryExists($path, $mode, $recursive);
        }

        /**
         * Create a directory.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         * @param bool $force
         * @return bool
         * @static
         */
        public static function makeDirectory($path, $mode = 493, $recursive = false, $force = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->makeDirectory($path, $mode, $recursive, $force);
        }

        /**
         * Move a directory.
         *
         * @param string $from
         * @param string $to
         * @param bool $overwrite
         * @return bool
         * @static
         */
        public static function moveDirectory($from, $to, $overwrite = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->moveDirectory($from, $to, $overwrite);
        }

        /**
         * Copy a directory from one location to another.
         *
         * @param string $directory
         * @param string $destination
         * @param int|null $options
         * @return bool
         * @static
         */
        public static function copyDirectory($directory, $destination, $options = null)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->copyDirectory($directory, $destination, $options);
        }

        /**
         * Recursively delete a directory.
         *
         * The directory itself may be optionally preserved.
         *
         * @param string $directory
         * @param bool $preserve
         * @return bool
         * @static
         */
        public static function deleteDirectory($directory, $preserve = false)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->deleteDirectory($directory, $preserve);
        }

        /**
         * Remove all of the directories within a given directory.
         *
         * @param string $directory
         * @return bool
         * @static
         */
        public static function deleteDirectories($directory)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->deleteDirectories($directory);
        }

        /**
         * Empty the specified directory of all files and folders.
         *
         * @param string $directory
         * @return bool
         * @static
         */
        public static function cleanDirectory($directory)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->cleanDirectory($directory);
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) truthy.
         *
         * @template TWhenParameter
         * @template TWhenReturnType
         * @param (\Closure($this): TWhenParameter)|TWhenParameter|null $value
         * @param (callable($this, TWhenParameter): TWhenReturnType)|null $callback
         * @param (callable($this, TWhenParameter): TWhenReturnType)|null $default
         * @return $this|TWhenReturnType
         * @static
         */
        public static function when($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->when($value, $callback, $default);
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) falsy.
         *
         * @template TUnlessParameter
         * @template TUnlessReturnType
         * @param (\Closure($this): TUnlessParameter)|TUnlessParameter|null $value
         * @param (callable($this, TUnlessParameter): TUnlessReturnType)|null $callback
         * @param (callable($this, TUnlessParameter): TUnlessReturnType)|null $default
         * @return $this|TUnlessReturnType
         * @static
         */
        public static function unless($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Filesystem\Filesystem $instance */
            return $instance->unless($value, $callback, $default);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Filesystem\Filesystem::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Filesystem\Filesystem::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Filesystem\Filesystem::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Filesystem\Filesystem::flushMacros();
        }

            }
    /**
     * @see \Illuminate\Auth\Access\Gate
     */
    class Gate {
        /**
         * Determine if a given ability has been defined.
         *
         * @param \UnitEnum|array|string $ability
         * @return bool
         * @static
         */
        public static function has($ability)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->has($ability);
        }

        /**
         * Perform an on-demand authorization check. Throw an authorization exception if the condition or callback is false.
         *
         * @param \Illuminate\Auth\Access\Response|\Closure|bool $condition
         * @param string|null $message
         * @param string|null $code
         * @return \Illuminate\Auth\Access\Response
         * @throws \Illuminate\Auth\Access\AuthorizationException
         * @static
         */
        public static function allowIf($condition, $message = null, $code = null)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->allowIf($condition, $message, $code);
        }

        /**
         * Perform an on-demand authorization check. Throw an authorization exception if the condition or callback is true.
         *
         * @param \Illuminate\Auth\Access\Response|\Closure|bool $condition
         * @param string|null $message
         * @param string|null $code
         * @return \Illuminate\Auth\Access\Response
         * @throws \Illuminate\Auth\Access\AuthorizationException
         * @static
         */
        public static function denyIf($condition, $message = null, $code = null)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->denyIf($condition, $message, $code);
        }

        /**
         * Define a new ability.
         *
         * @param \UnitEnum|string $ability
         * @param callable|array|string $callback
         * @return \Illuminate\Auth\Access\Gate
         * @throws \InvalidArgumentException
         * @static
         */
        public static function define($ability, $callback)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->define($ability, $callback);
        }

        /**
         * Define abilities for a resource.
         *
         * @param string $name
         * @param string $class
         * @param array|null $abilities
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static function resource($name, $class, $abilities = null)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->resource($name, $class, $abilities);
        }

        /**
         * Define a policy class for a given class type.
         *
         * @param string $class
         * @param string $policy
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static function policy($class, $policy)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->policy($class, $policy);
        }

        /**
         * Register a callback to run before all Gate checks.
         *
         * @param callable $callback
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static function before($callback)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->before($callback);
        }

        /**
         * Register a callback to run after all Gate checks.
         *
         * @param callable $callback
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static function after($callback)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->after($callback);
        }

        /**
         * Determine if all of the given abilities should be granted for the current user.
         *
         * @param iterable|\UnitEnum|string $ability
         * @param mixed $arguments
         * @return bool
         * @static
         */
        public static function allows($ability, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->allows($ability, $arguments);
        }

        /**
         * Determine if any of the given abilities should be denied for the current user.
         *
         * @param iterable|\UnitEnum|string $ability
         * @param mixed $arguments
         * @return bool
         * @static
         */
        public static function denies($ability, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->denies($ability, $arguments);
        }

        /**
         * Determine if all of the given abilities should be granted for the current user.
         *
         * @param iterable|\UnitEnum|string $abilities
         * @param mixed $arguments
         * @return bool
         * @static
         */
        public static function check($abilities, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->check($abilities, $arguments);
        }

        /**
         * Determine if any one of the given abilities should be granted for the current user.
         *
         * @param iterable|\UnitEnum|string $abilities
         * @param mixed $arguments
         * @return bool
         * @static
         */
        public static function any($abilities, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->any($abilities, $arguments);
        }

        /**
         * Determine if all of the given abilities should be denied for the current user.
         *
         * @param iterable|\UnitEnum|string $abilities
         * @param mixed $arguments
         * @return bool
         * @static
         */
        public static function none($abilities, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->none($abilities, $arguments);
        }

        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param \UnitEnum|string $ability
         * @param mixed $arguments
         * @return \Illuminate\Auth\Access\Response
         * @throws \Illuminate\Auth\Access\AuthorizationException
         * @static
         */
        public static function authorize($ability, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->authorize($ability, $arguments);
        }

        /**
         * Inspect the user for the given ability.
         *
         * @param \UnitEnum|string $ability
         * @param mixed $arguments
         * @return \Illuminate\Auth\Access\Response
         * @static
         */
        public static function inspect($ability, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->inspect($ability, $arguments);
        }

        /**
         * Get the raw result from the authorization callback.
         *
         * @param string $ability
         * @param mixed $arguments
         * @return mixed
         * @throws \Illuminate\Auth\Access\AuthorizationException
         * @static
         */
        public static function raw($ability, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->raw($ability, $arguments);
        }

        /**
         * Get a policy instance for a given class.
         *
         * @param object|string $class
         * @return mixed
         * @static
         */
        public static function getPolicyFor($class)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->getPolicyFor($class);
        }

        /**
         * Specify a callback to be used to guess policy names.
         *
         * @param callable $callback
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static function guessPolicyNamesUsing($callback)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->guessPolicyNamesUsing($callback);
        }

        /**
         * Build a policy class instance of the given type.
         *
         * @param object|string $class
         * @return mixed
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @static
         */
        public static function resolvePolicy($class)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->resolvePolicy($class);
        }

        /**
         * Get a gate instance for the given user.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable|mixed $user
         * @return static
         * @static
         */
        public static function forUser($user)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->forUser($user);
        }

        /**
         * Get all of the defined abilities.
         *
         * @return array
         * @static
         */
        public static function abilities()
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->abilities();
        }

        /**
         * Get all of the defined policies.
         *
         * @return array
         * @static
         */
        public static function policies()
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->policies();
        }

        /**
         * Set the default denial response for gates and policies.
         *
         * @param \Illuminate\Auth\Access\Response $response
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static function defaultDenialResponse($response)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->defaultDenialResponse($response);
        }

        /**
         * Set the container instance used by the gate.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */
        public static function setContainer($container)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->setContainer($container);
        }

        /**
         * Deny with a HTTP status code.
         *
         * @param int $status
         * @param string|null $message
         * @param int|null $code
         * @return \Illuminate\Auth\Access\Response
         * @static
         */
        public static function denyWithStatus($status, $message = null, $code = null)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->denyWithStatus($status, $message, $code);
        }

        /**
         * Deny with a 404 HTTP status code.
         *
         * @param string|null $message
         * @param int|null $code
         * @return \Illuminate\Auth\Access\Response
         * @static
         */
        public static function denyAsNotFound($message = null, $code = null)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->denyAsNotFound($message, $code);
        }

            }
    /**
     * @see \Illuminate\Hashing\HashManager
     * @see \Illuminate\Hashing\AbstractHasher
     */
    class Hash {
        /**
         * Create an instance of the Bcrypt hash Driver.
         *
         * @return \Illuminate\Hashing\BcryptHasher
         * @static
         */
        public static function createBcryptDriver()
        {
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->createBcryptDriver();
        }

        /**
         * Create an instance of the Argon2i hash Driver.
         *
         * @return \Illuminate\Hashing\ArgonHasher
         * @static
         */
        public static function createArgonDriver()
        {
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->createArgonDriver();
        }

        /**
         * Create an instance of the Argon2id hash Driver.
         *
         * @return \Illuminate\Hashing\Argon2IdHasher
         * @static
         */
        public static function createArgon2idDriver()
        {
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->createArgon2idDriver();
        }

        /**
         * Get information about the given hashed value.
         *
         * @param string $hashedValue
         * @return array
         * @static
         */
        public static function info($hashedValue)
        {
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->info($hashedValue);
        }

        /**
         * Hash the given value.
         *
         * @param string $value
         * @param array $options
         * @return string
         * @static
         */
        public static function make($value, $options = [])
        {
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->make($value, $options);
        }

        /**
         * Check the given plain value against a hash.
         *
         * @param string $value
         * @param string $hashedValue
         * @param array $options
         * @return bool
         * @static
         */
        public static function check($value, $hashedValue, $options = [])
        {
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->check($value, $hashedValue, $options);
        }

        /**
         * Check if the given hash has been hashed using the given options.
         *
         * @param string $hashedValue
         * @param array $options
         * @return bool
         * @static
         */
        public static function needsRehash($hashedValue, $options = [])
        {
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->needsRehash($hashedValue, $options);
        }

        /**
         * Determine if a given string is already hashed.
         *
         * @param string $value
         * @return bool
         * @static
         */
        public static function isHashed($value)
        {
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->isHashed($value);
        }

        /**
         * Get the default driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Verifies that the configuration is less than or equal to what is configured.
         *
         * @param array $value
         * @return bool
         * @internal
         * @static
         */
        public static function verifyConfiguration($value)
        {
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->verifyConfiguration($value);
        }

        /**
         * Get a driver instance.
         *
         * @param \UnitEnum|string|null $driver
         * @return mixed
         * @throws \InvalidArgumentException
         * @static
         */
        public static function driver($driver = null)
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->driver($driver);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param-closure-this $this  $callback
         * @return \Illuminate\Hashing\HashManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Get all of the created "drivers".
         *
         * @return array<string, mixed>
         * @static
         */
        public static function getDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->getDrivers();
        }

        /**
         * Get the container instance used by the manager.
         *
         * @return \Illuminate\Contracts\Container\Container
         * @static
         */
        public static function getContainer()
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->getContainer();
        }

        /**
         * Set the container instance used by the manager.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return \Illuminate\Hashing\HashManager
         * @static
         */
        public static function setContainer($container)
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->setContainer($container);
        }

        /**
         * Forget all of the resolved driver instances.
         *
         * @return \Illuminate\Hashing\HashManager
         * @static
         */
        public static function forgetDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Illuminate\Hashing\HashManager $instance */
            return $instance->forgetDrivers();
        }

            }
    /**
     * @see \Illuminate\Translation\Translator
     */
    class Lang {
        /**
         * Determine if a translation exists for a given locale.
         *
         * @param string $key
         * @param string|null $locale
         * @return bool
         * @static
         */
        public static function hasForLocale($key, $locale = null)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->hasForLocale($key, $locale);
        }

        /**
         * Determine if a translation exists.
         *
         * @param string $key
         * @param string|null $locale
         * @param bool $fallback
         * @return bool
         * @static
         */
        public static function has($key, $locale = null, $fallback = true)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->has($key, $locale, $fallback);
        }

        /**
         * Get the translation for the given key.
         *
         * @param string $key
         * @param array $replace
         * @param string|null $locale
         * @param bool $fallback
         * @return string|array
         * @static
         */
        public static function get($key, $replace = [], $locale = null, $fallback = true)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->get($key, $replace, $locale, $fallback);
        }

        /**
         * Get the specified string translation value.
         *
         * @throws \InvalidArgumentException
         * @static
         */
        public static function string($key, $replace = [], $locale = null, $fallback = true)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->string($key, $replace, $locale, $fallback);
        }

        /**
         * Get the specified array translation value.
         *
         * @return array<array-key, mixed>
         * @throws \InvalidArgumentException
         * @static
         */
        public static function array($key, $replace = [], $locale = null, $fallback = true)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->array($key, $replace, $locale, $fallback);
        }

        /**
         * Get a translation according to an integer value.
         *
         * @param string $key
         * @param \Countable|int|float|array $number
         * @param array $replace
         * @param string|null $locale
         * @return string
         * @static
         */
        public static function choice($key, $number, $replace = [], $locale = null)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->choice($key, $number, $replace, $locale);
        }

        /**
         * Add translation lines to the given locale.
         *
         * @param array $lines
         * @param string $locale
         * @param string $namespace
         * @return void
         * @static
         */
        public static function addLines($lines, $locale, $namespace = '*')
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->addLines($lines, $locale, $namespace);
        }

        /**
         * Load the specified language group.
         *
         * @param string $namespace
         * @param string $group
         * @param string $locale
         * @return void
         * @static
         */
        public static function load($namespace, $group, $locale)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->load($namespace, $group, $locale);
        }

        /**
         * Register a callback that is responsible for handling missing translation keys.
         *
         * @param callable|null $callback
         * @return \Illuminate\Translation\Translator
         * @static
         */
        public static function handleMissingKeysUsing($callback)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->handleMissingKeysUsing($callback);
        }

        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string $hint
         * @return void
         * @static
         */
        public static function addNamespace($namespace, $hint)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->addNamespace($namespace, $hint);
        }

        /**
         * Add a new path to the loader.
         *
         * @param string $path
         * @return void
         * @static
         */
        public static function addPath($path)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->addPath($path);
        }

        /**
         * Add a new JSON path to the loader.
         *
         * @param string $path
         * @return void
         * @static
         */
        public static function addJsonPath($path)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->addJsonPath($path);
        }

        /**
         * Parse a key into namespace, group, and item.
         *
         * @param string $key
         * @return array
         * @static
         */
        public static function parseKey($key)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->parseKey($key);
        }

        /**
         * Specify a callback that should be invoked to determined the applicable locale array.
         *
         * @param callable $callback
         * @return void
         * @static
         */
        public static function determineLocalesUsing($callback)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->determineLocalesUsing($callback);
        }

        /**
         * Get the message selector instance.
         *
         * @return \Illuminate\Translation\MessageSelector
         * @static
         */
        public static function getSelector()
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->getSelector();
        }

        /**
         * Set the message selector instance.
         *
         * @param \Illuminate\Translation\MessageSelector $selector
         * @return void
         * @static
         */
        public static function setSelector($selector)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setSelector($selector);
        }

        /**
         * Get the language line loader implementation.
         *
         * @return \Illuminate\Contracts\Translation\Loader
         * @static
         */
        public static function getLoader()
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->getLoader();
        }

        /**
         * Get the default locale being used.
         *
         * @return string
         * @static
         */
        public static function locale()
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->locale();
        }

        /**
         * Get the default locale being used.
         *
         * @return string
         * @static
         */
        public static function getLocale()
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->getLocale();
        }

        /**
         * Set the default locale.
         *
         * @param string $locale
         * @return void
         * @throws \InvalidArgumentException
         * @static
         */
        public static function setLocale($locale)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setLocale($locale);
        }

        /**
         * Get the fallback locale being used.
         *
         * @return string
         * @static
         */
        public static function getFallback()
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->getFallback();
        }

        /**
         * Set the fallback locale being used.
         *
         * @param string $fallback
         * @return void
         * @static
         */
        public static function setFallback($fallback)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setFallback($fallback);
        }

        /**
         * Set the loaded translation groups.
         *
         * @param array $loaded
         * @return void
         * @static
         */
        public static function setLoaded($loaded)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setLoaded($loaded);
        }

        /**
         * Add a handler to be executed in order to format a given class to a string during translation replacements.
         *
         * @param callable|string $class
         * @param callable|null $handler
         * @return void
         * @static
         */
        public static function stringable($class, $handler = null)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->stringable($class, $handler);
        }

        /**
         * Set the parsed value of a key.
         *
         * @param string $key
         * @param array $parsed
         * @return void
         * @static
         */
        public static function setParsedKey($key, $parsed)
        {
            //Method inherited from \Illuminate\Support\NamespacedItemResolver 
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setParsedKey($key, $parsed);
        }

        /**
         * Flush the cache of parsed keys.
         *
         * @return void
         * @static
         */
        public static function flushParsedKeys()
        {
            //Method inherited from \Illuminate\Support\NamespacedItemResolver 
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->flushParsedKeys();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Translation\Translator::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Translation\Translator::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Translation\Translator::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Translation\Translator::flushMacros();
        }

            }
    /**
     * @method static void write(string $level, \Illuminate\Contracts\Support\Arrayable|\Illuminate\Contracts\Support\Jsonable|\Illuminate\Support\Stringable|array|string $message, array $context = [])
     * @method static \Illuminate\Log\Logger withContext(array $context = [])
     * @method static void listen(\Closure $callback)
     * @method static \Psr\Log\LoggerInterface getLogger()
     * @method static \Illuminate\Contracts\Events\Dispatcher|null getEventDispatcher()
     * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $dispatcher)
     * @method static \Illuminate\Log\Logger|mixed when(\Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
     * @method static \Illuminate\Log\Logger|mixed unless(\Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
     * @see \Illuminate\Log\LogManager
     */
    class Log {
        /**
         * Build an on-demand log channel.
         *
         * @param array $config
         * @return \Psr\Log\LoggerInterface
         * @static
         */
        public static function build($config)
        {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->build($config);
        }

        /**
         * Create a new, on-demand aggregate logger instance.
         *
         * @param array $channels
         * @param string|null $channel
         * @return \Psr\Log\LoggerInterface
         * @static
         */
        public static function stack($channels, $channel = null)
        {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->stack($channels, $channel);
        }

        /**
         * Get a log channel instance.
         *
         * @param \UnitEnum|string|null $channel
         * @return \Psr\Log\LoggerInterface
         * @static
         */
        public static function channel($channel = null)
        {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->channel($channel);
        }

        /**
         * Get a log driver instance.
         *
         * @param \UnitEnum|string|null $driver
         * @return \Psr\Log\LoggerInterface
         * @static
         */
        public static function driver($driver = null)
        {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->driver($driver);
        }

        /**
         * Share context across channels and stacks.
         *
         * @param array $context
         * @return \Illuminate\Log\LogManager
         * @static
         */
        public static function shareContext($context)
        {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->shareContext($context);
        }

        /**
         * The context shared across channels and stacks.
         *
         * @return array
         * @static
         */
        public static function sharedContext()
        {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->sharedContext();
        }

        /**
         * Flush the log context on all currently resolved channels.
         *
         * @param string[]|null $keys
         * @return \Illuminate\Log\LogManager
         * @static
         */
        public static function withoutContext($keys = null)
        {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->withoutContext($keys);
        }

        /**
         * Flush the shared context.
         *
         * @return \Illuminate\Log\LogManager
         * @static
         */
        public static function flushSharedContext()
        {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->flushSharedContext();
        }

        /**
         * Get the default log driver name.
         *
         * @return string|null
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the default log driver name.
         *
         * @param \UnitEnum|string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @param-closure-this $this  $callback
         * @return \Illuminate\Log\LogManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Unset the given channel instance.
         *
         * @param string|null $driver
         * @return void
         * @static
         */
        public static function forgetChannel($driver = null)
        {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->forgetChannel($driver);
        }

        /**
         * Get all of the resolved log channels.
         *
         * @return array
         * @static
         */
        public static function getChannels()
        {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->getChannels();
        }

        /**
         * System is unusable.
         *
         * @param string|\Stringable $message
         * @param array $context
         * @return void
         * @static
         */
        public static function emergency($message, $context = [])
        {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->emergency($message, $context);
        }

        /**
         * Action must be taken immediately.
         *
         * Example: Entire website down, database unavailable, etc. This should
         * trigger the SMS alerts and wake you up.
         *
         * @param string|\Stringable $message
         * @param array $context
         * @return void
         * @static
         */
        public static function alert($message, $context = [])
        {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->alert($message, $context);
        }

        /**
         * Critical conditions.
         *
         * Example: Application component unavailable, unexpected exception.
         *
         * @param string|\Stringable $message
         * @param array $context
         * @return void
         * @static
         */
        public static function critical($message, $context = [])
        {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->critical($message, $context);
        }

        /**
         * Runtime errors that do not require immediate action but should typically
         * be logged and monitored.
         *
         * @param string|\Stringable $message
         * @param array $context
         * @return void
         * @static
         */
        public static function error($message, $context = [])
        {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->error($message, $context);
        }

        /**
         * Exceptional occurrences that are not errors.
         *
         * Example: Use of deprecated APIs, poor use of an API, undesirable things
         * that are not necessarily wrong.
         *
         * @param string|\Stringable $message
         * @param array $context
         * @return void
         * @static
         */
        public static function warning($message, $context = [])
        {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->warning($message, $context);
        }

        /**
         * Normal but significant events.
         *
         * @param string|\Stringable $message
         * @param array $context
         * @return void
         * @static
         */
        public static function notice($message, $context = [])
        {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->notice($message, $context);
        }

        /**
         * Interesting events.
         *
         * Example: User logs in, SQL logs.
         *
         * @param string|\Stringable $message
         * @param array $context
         * @return void
         * @static
         */
        public static function info($message, $context = [])
        {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->info($message, $context);
        }

        /**
         * Detailed debug information.
         *
         * @param string|\Stringable $message
         * @param array $context
         * @return void
         * @static
         */
        public static function debug($message, $context = [])
        {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->debug($message, $context);
        }

        /**
         * Logs with an arbitrary level.
         *
         * @param mixed $level
         * @param string|\Stringable $message
         * @param array $context
         * @return void
         * @static
         */
        public static function log($level, $message, $context = [])
        {
            /** @var \Illuminate\Log\LogManager $instance */
            $instance->log($level, $message, $context);
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Log\LogManager
         * @static
         */
        public static function setApplication($app)
        {
            /** @var \Illuminate\Log\LogManager $instance */
            return $instance->setApplication($app);
        }

            }
    /**
     * @method static void alwaysFrom(string $address, string|null $name = null)
     * @method static void alwaysReplyTo(string $address, string|null $name = null)
     * @method static void alwaysReturnPath(string $address)
     * @method static void alwaysTo(string $address, string|null $name = null)
     * @method static \Illuminate\Mail\SentMessage|null html(string $html, mixed $callback)
     * @method static \Illuminate\Mail\SentMessage|null plain(string $view, array $data, mixed $callback)
     * @method static string render(string|array $view, array $data = [])
     * @method static mixed onQueue(\BackedEnum|string|null $queue, \Illuminate\Contracts\Mail\Mailable $view)
     * @method static mixed queueOn(string $queue, \Illuminate\Contracts\Mail\Mailable $view)
     * @method static mixed laterOn(string $queue, \DateTimeInterface|\DateInterval|int $delay, \Illuminate\Contracts\Mail\Mailable $view)
     * @method static \Symfony\Component\Mailer\Transport\TransportInterface getSymfonyTransport()
     * @method static \Illuminate\Contracts\View\Factory getViewFactory()
     * @method static void setSymfonyTransport(\Symfony\Component\Mailer\Transport\TransportInterface $transport)
     * @method static \Illuminate\Mail\Mailer setQueue(\Illuminate\Contracts\Queue\Factory $queue)
     * @method static void macro(string $name, object|callable $macro)
     * @method static void mixin(object $mixin, bool $replace = true)
     * @method static bool hasMacro(string $name)
     * @method static void flushMacros()
     * @see \Illuminate\Mail\MailManager
     * @see \Illuminate\Support\Testing\Fakes\MailFake
     */
    class Mail {
        /**
         * Get a mailer instance by name.
         *
         * @param \UnitEnum|string|null $name
         * @return \Illuminate\Contracts\Mail\Mailer
         * @static
         */
        public static function mailer($name = null)
        {
            /** @var \Illuminate\Mail\MailManager $instance */
            return $instance->mailer($name);
        }

        /**
         * Get a mailer driver instance.
         *
         * @param \UnitEnum|string|null $driver
         * @return \Illuminate\Mail\Mailer
         * @static
         */
        public static function driver($driver = null)
        {
            /** @var \Illuminate\Mail\MailManager $instance */
            return $instance->driver($driver);
        }

        /**
         * Build a new mailer instance.
         *
         * @param array $config
         * @return \Illuminate\Mail\Mailer
         * @static
         */
        public static function build($config)
        {
            /** @var \Illuminate\Mail\MailManager $instance */
            return $instance->build($config);
        }

        /**
         * Create a new transport instance.
         *
         * @param array $config
         * @return \Symfony\Component\Mailer\Transport\TransportInterface
         * @throws \InvalidArgumentException
         * @static
         */
        public static function createSymfonyTransport($config)
        {
            /** @var \Illuminate\Mail\MailManager $instance */
            return $instance->createSymfonyTransport($config);
        }

        /**
         * Get the default mail driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var \Illuminate\Mail\MailManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the default mail driver name.
         *
         * @param \UnitEnum|string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var \Illuminate\Mail\MailManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Disconnect the given mailer and remove from local cache.
         *
         * @param \UnitEnum|string|null $name
         * @return void
         * @static
         */
        public static function purge($name = null)
        {
            /** @var \Illuminate\Mail\MailManager $instance */
            $instance->purge($name);
        }

        /**
         * Register a custom transport creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Mail\MailManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            /** @var \Illuminate\Mail\MailManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Get the application instance used by the manager.
         *
         * @return \Illuminate\Contracts\Foundation\Application
         * @static
         */
        public static function getApplication()
        {
            /** @var \Illuminate\Mail\MailManager $instance */
            return $instance->getApplication();
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Mail\MailManager
         * @static
         */
        public static function setApplication($app)
        {
            /** @var \Illuminate\Mail\MailManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Forget all of the resolved mailer instances.
         *
         * @return \Illuminate\Mail\MailManager
         * @static
         */
        public static function forgetMailers()
        {
            /** @var \Illuminate\Mail\MailManager $instance */
            return $instance->forgetMailers();
        }

        /**
         * Assert if a mailable was sent based on a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|array|string|int|null $callback
         * @return void
         * @static
         */
        public static function assertSent($mailable, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertSent($mailable, $callback);
        }

        /**
         * Assert if a mailable was sent a number of times.
         *
         * @param string $mailable
         * @param int $times
         * @return void
         * @static
         */
        public static function assertSentTimes($mailable, $times = 1)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertSentTimes($mailable, $times);
        }

        /**
         * Determine if a mailable was not sent or queued to be sent based on a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertNotOutgoing($mailable, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertNotOutgoing($mailable, $callback);
        }

        /**
         * Determine if a mailable was not sent based on a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|array|string|null $callback
         * @return void
         * @static
         */
        public static function assertNotSent($mailable, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertNotSent($mailable, $callback);
        }

        /**
         * Assert that no mailables were sent or queued to be sent.
         *
         * @return void
         * @static
         */
        public static function assertNothingOutgoing()
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertNothingOutgoing();
        }

        /**
         * Assert that no mailables were sent.
         *
         * @return void
         * @static
         */
        public static function assertNothingSent()
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertNothingSent();
        }

        /**
         * Assert if a mailable was queued based on a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|array|string|int|null $callback
         * @return void
         * @static
         */
        public static function assertQueued($mailable, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertQueued($mailable, $callback);
        }

        /**
         * Assert if a mailable was queued a number of times.
         *
         * @param string $mailable
         * @param int $times
         * @return void
         * @static
         */
        public static function assertQueuedTimes($mailable, $times = 1)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertQueuedTimes($mailable, $times);
        }

        /**
         * Determine if a mailable was not queued based on a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|array|string|null $callback
         * @return void
         * @static
         */
        public static function assertNotQueued($mailable, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertNotQueued($mailable, $callback);
        }

        /**
         * Assert that no mailables were queued.
         *
         * @return void
         * @static
         */
        public static function assertNothingQueued()
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertNothingQueued();
        }

        /**
         * Assert the total number of mailables that were sent.
         *
         * @param int $count
         * @return void
         * @static
         */
        public static function assertSentCount($count)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertSentCount($count);
        }

        /**
         * Assert the total number of mailables that were queued.
         *
         * @param int $count
         * @return void
         * @static
         */
        public static function assertQueuedCount($count)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertQueuedCount($count);
        }

        /**
         * Assert the total number of mailables that were sent or queued.
         *
         * @param int $count
         * @return void
         * @static
         */
        public static function assertOutgoingCount($count)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->assertOutgoingCount($count);
        }

        /**
         * Get all of the mailables matching a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static function sent($mailable, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->sent($mailable, $callback);
        }

        /**
         * Determine if the given mailable has been sent.
         *
         * @param string $mailable
         * @return bool
         * @static
         */
        public static function hasSent($mailable)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->hasSent($mailable);
        }

        /**
         * Get all of the queued mailables matching a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static function queued($mailable, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->queued($mailable, $callback);
        }

        /**
         * Determine if the given mailable has been queued.
         *
         * @param string $mailable
         * @return bool
         * @static
         */
        public static function hasQueued($mailable)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->hasQueued($mailable);
        }

        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
         * @return \Illuminate\Mail\PendingMail
         * @static
         */
        public static function to($users)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->to($users);
        }

        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
         * @return \Illuminate\Mail\PendingMail
         * @static
         */
        public static function cc($users)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->cc($users);
        }

        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
         * @return \Illuminate\Mail\PendingMail
         * @static
         */
        public static function bcc($users)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->bcc($users);
        }

        /**
         * Send a new message with only a raw text part.
         *
         * @param string $text
         * @param \Closure|string $callback
         * @return void
         * @static
         */
        public static function raw($text, $callback)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->raw($text, $callback);
        }

        /**
         * Send a new message using a view.
         *
         * @param \Illuminate\Contracts\Mail\Mailable|string|array $view
         * @param array $data
         * @param \Closure|string|null $callback
         * @return mixed|void
         * @static
         */
        public static function send($view, $data = [], $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->send($view, $data, $callback);
        }

        /**
         * Send a new message synchronously using a view.
         *
         * @param \Illuminate\Contracts\Mail\Mailable|string|array $mailable
         * @param array $data
         * @param \Closure|string|null $callback
         * @return void
         * @static
         */
        public static function sendNow($mailable, $data = [], $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            $instance->sendNow($mailable, $data, $callback);
        }

        /**
         * Queue a new message for sending.
         *
         * @param \Illuminate\Contracts\Mail\Mailable|string|array $view
         * @param string|null $queue
         * @return mixed
         * @static
         */
        public static function queue($view, $queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->queue($view, $queue);
        }

        /**
         * Queue a new e-mail message for sending after (n) seconds.
         *
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param \Illuminate\Contracts\Mail\Mailable|string|array $view
         * @param string|null $queue
         * @return mixed
         * @static
         */
        public static function later($delay, $view, $queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\MailFake $instance */
            return $instance->later($delay, $view, $queue);
        }

            }
    /**
     * @see \Illuminate\Notifications\ChannelManager
     * @see \Illuminate\Support\Testing\Fakes\NotificationFake
     */
    class Notification {
        /**
         * Send the given notification to the given notifiable entities.
         *
         * @param \Illuminate\Support\Collection|mixed $notifiables
         * @param mixed $notification
         * @return void
         * @static
         */
        public static function send($notifiables, $notification)
        {
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            $instance->send($notifiables, $notification);
        }

        /**
         * Send the given notification immediately.
         *
         * @param \Illuminate\Support\Collection|mixed $notifiables
         * @param mixed $notification
         * @param array|null $channels
         * @return void
         * @static
         */
        public static function sendNow($notifiables, $notification, $channels = null)
        {
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            $instance->sendNow($notifiables, $notification, $channels);
        }

        /**
         * Get a channel instance.
         *
         * @param \UnitEnum|string|null $name
         * @return mixed
         * @static
         */
        public static function channel($name = null)
        {
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->channel($name);
        }

        /**
         * Get a driver instance.
         *
         * @param \UnitEnum|string|null $driver
         * @return mixed
         * @static
         */
        public static function driver($driver = null)
        {
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->driver($driver);
        }

        /**
         * Get the default channel driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Get the default channel driver name.
         *
         * @return string
         * @static
         */
        public static function deliversVia()
        {
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->deliversVia();
        }

        /**
         * Set the default channel driver name.
         *
         * @param string $channel
         * @return void
         * @static
         */
        public static function deliverVia($channel)
        {
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            $instance->deliverVia($channel);
        }

        /**
         * Set the locale of notifications.
         *
         * @param string $locale
         * @return \Illuminate\Notifications\ChannelManager
         * @static
         */
        public static function locale($locale)
        {
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->locale($locale);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param-closure-this $this  $callback
         * @return \Illuminate\Notifications\ChannelManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Get all of the created "drivers".
         *
         * @return array<string, mixed>
         * @static
         */
        public static function getDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->getDrivers();
        }

        /**
         * Get the container instance used by the manager.
         *
         * @return \Illuminate\Contracts\Container\Container
         * @static
         */
        public static function getContainer()
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->getContainer();
        }

        /**
         * Set the container instance used by the manager.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return \Illuminate\Notifications\ChannelManager
         * @static
         */
        public static function setContainer($container)
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->setContainer($container);
        }

        /**
         * Forget all of the resolved driver instances.
         *
         * @return \Illuminate\Notifications\ChannelManager
         * @static
         */
        public static function forgetDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->forgetDrivers();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Notifications\ChannelManager::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Notifications\ChannelManager::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Notifications\ChannelManager::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Notifications\ChannelManager::flushMacros();
        }

        /**
         * Resolve the default connection name for a given queueable instance.
         *
         * @param object $queueable
         * @return string|null
         * @static
         */
        public static function resolveConnectionFromQueueRoute($queueable)
        {
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->resolveConnectionFromQueueRoute($queueable);
        }

        /**
         * Resolve the default queue name for a given queueable instance.
         *
         * @param object $queueable
         * @return string|null
         * @static
         */
        public static function resolveQueueFromQueueRoute($queueable)
        {
            /** @var \Illuminate\Notifications\ChannelManager $instance */
            return $instance->resolveQueueFromQueueRoute($queueable);
        }

        /**
         * Assert if a notification was sent on-demand based on a truth-test callback.
         *
         * @param string|\Closure $notification
         * @param callable|null $callback
         * @return void
         * @throws \Exception
         * @static
         */
        public static function assertSentOnDemand($notification, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            $instance->assertSentOnDemand($notification, $callback);
        }

        /**
         * Assert if a notification was sent based on a truth-test callback.
         *
         * @param mixed $notifiable
         * @param string|\Closure $notification
         * @param callable|null $callback
         * @return void
         * @throws \Exception
         * @static
         */
        public static function assertSentTo($notifiable, $notification, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            $instance->assertSentTo($notifiable, $notification, $callback);
        }

        /**
         * Assert if a notification was sent on-demand a number of times.
         *
         * @param string $notification
         * @param int $times
         * @return void
         * @static
         */
        public static function assertSentOnDemandTimes($notification, $times = 1)
        {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            $instance->assertSentOnDemandTimes($notification, $times);
        }

        /**
         * Assert if a notification was sent a number of times.
         *
         * @param mixed $notifiable
         * @param string $notification
         * @param int $times
         * @return void
         * @static
         */
        public static function assertSentToTimes($notifiable, $notification, $times = 1)
        {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            $instance->assertSentToTimes($notifiable, $notification, $times);
        }

        /**
         * Determine if a notification was sent based on a truth-test callback.
         *
         * @param mixed $notifiable
         * @param string|\Closure $notification
         * @param callable|null $callback
         * @return void
         * @throws \Exception
         * @static
         */
        public static function assertNotSentTo($notifiable, $notification, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            $instance->assertNotSentTo($notifiable, $notification, $callback);
        }

        /**
         * Assert that no notifications were sent.
         *
         * @return void
         * @static
         */
        public static function assertNothingSent()
        {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            $instance->assertNothingSent();
        }

        /**
         * Assert that no notifications were sent to the given notifiable.
         *
         * @param mixed $notifiable
         * @return void
         * @throws \Exception
         * @static
         */
        public static function assertNothingSentTo($notifiable)
        {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            $instance->assertNothingSentTo($notifiable);
        }

        /**
         * Assert the total amount of times a notification was sent.
         *
         * @param string $notification
         * @param int $expectedCount
         * @return void
         * @static
         */
        public static function assertSentTimes($notification, $expectedCount)
        {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            $instance->assertSentTimes($notification, $expectedCount);
        }

        /**
         * Assert the total count of notification that were sent.
         *
         * @param int $expectedCount
         * @return void
         * @static
         */
        public static function assertCount($expectedCount)
        {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            $instance->assertCount($expectedCount);
        }

        /**
         * Get all of the notifications matching a truth-test callback.
         *
         * @param mixed $notifiable
         * @param string $notification
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static function sent($notifiable, $notification, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            return $instance->sent($notifiable, $notification, $callback);
        }

        /**
         * Determine if there are more notifications left to inspect.
         *
         * @param mixed $notifiable
         * @param string $notification
         * @return bool
         * @static
         */
        public static function hasSent($notifiable, $notification)
        {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            return $instance->hasSent($notifiable, $notification);
        }

        /**
         * Specify if notification should be serialized and restored when being "pushed" to the queue.
         *
         * @param bool $serializeAndRestore
         * @return \Illuminate\Support\Testing\Fakes\NotificationFake
         * @static
         */
        public static function serializeAndRestore($serializeAndRestore = true)
        {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            return $instance->serializeAndRestore($serializeAndRestore);
        }

        /**
         * Get the notifications that have been sent.
         *
         * @return array
         * @static
         */
        public static function sentNotifications()
        {
            /** @var \Illuminate\Support\Testing\Fakes\NotificationFake $instance */
            return $instance->sentNotifications();
        }

            }
    /**
     * @method static string sendResetLink(array $credentials, \Closure|null $callback = null)
     * @method static mixed reset(array $credentials, \Closure $callback)
     * @method static \Illuminate\Contracts\Auth\CanResetPassword|null getUser(array $credentials)
     * @method static string createToken(\Illuminate\Contracts\Auth\CanResetPassword $user)
     * @method static void deleteToken(\Illuminate\Contracts\Auth\CanResetPassword $user)
     * @method static bool tokenExists(\Illuminate\Contracts\Auth\CanResetPassword $user, string $token)
     * @method static \Illuminate\Auth\Passwords\TokenRepositoryInterface getRepository()
     * @method static \Illuminate\Support\Timebox getTimebox()
     * @see \Illuminate\Auth\Passwords\PasswordBrokerManager
     * @see \Illuminate\Auth\Passwords\PasswordBroker
     */
    class Password {
        /**
         * Attempt to get the broker from the local cache.
         *
         * @param \UnitEnum|string|null $name
         * @return \Illuminate\Contracts\Auth\PasswordBroker
         * @static
         */
        public static function broker($name = null)
        {
            /** @var \Illuminate\Auth\Passwords\PasswordBrokerManager $instance */
            return $instance->broker($name);
        }

        /**
         * Get the default password broker name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var \Illuminate\Auth\Passwords\PasswordBrokerManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the default password broker name.
         *
         * @param \UnitEnum|string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var \Illuminate\Auth\Passwords\PasswordBrokerManager $instance */
            $instance->setDefaultDriver($name);
        }

            }
    /**
     * @see \Illuminate\Queue\QueueManager
     * @see \Illuminate\Queue\Queue
     * @see \Illuminate\Support\Testing\Fakes\QueueFake
     */
    class Queue {
        /**
         * Register an event listener for the before job event.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function before($callback)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->before($callback);
        }

        /**
         * Register an event listener for the after job event.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function after($callback)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->after($callback);
        }

        /**
         * Register an event listener for the exception occurred job event.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function exceptionOccurred($callback)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->exceptionOccurred($callback);
        }

        /**
         * Register an event listener for the daemon queue loop.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function looping($callback)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->looping($callback);
        }

        /**
         * Register an event listener for the failed job event.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function failing($callback)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->failing($callback);
        }

        /**
         * Register an event listener for the daemon queue starting.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function starting($callback)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->starting($callback);
        }

        /**
         * Register an event listener for the daemon queue stopping.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function stopping($callback)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->stopping($callback);
        }

        /**
         * Set the queue route for the given class.
         *
         * @param array|class-string $class
         * @param \UnitEnum|string|null $queue
         * @param \UnitEnum|string|null $connection
         * @return void
         * @static
         */
        public static function route($class, $queue = null, $connection = null)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->route($class, $queue, $connection);
        }

        /**
         * Determine if the driver is connected.
         *
         * @param \UnitEnum|string|null $name
         * @return bool
         * @static
         */
        public static function connected($name = null)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->connected($name);
        }

        /**
         * Resolve a queue connection instance.
         *
         * @param \UnitEnum|string|null $name
         * @return \Illuminate\Contracts\Queue\Queue
         * @static
         */
        public static function connection($name = null)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->connection($name);
        }

        /**
         * Pause a queue by its connection and name.
         *
         * @param string $connection
         * @param string $queue
         * @return void
         * @static
         */
        public static function pause($connection, $queue)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->pause($connection, $queue);
        }

        /**
         * Pause a queue by its connection and name for a given amount of time.
         *
         * @param string $connection
         * @param string $queue
         * @param \DateTimeInterface|\DateInterval|int $ttl
         * @return void
         * @static
         */
        public static function pauseFor($connection, $queue, $ttl)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->pauseFor($connection, $queue, $ttl);
        }

        /**
         * Resume a paused queue by its connection and name.
         *
         * @param string $connection
         * @param string $queue
         * @return void
         * @static
         */
        public static function resume($connection, $queue)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->resume($connection, $queue);
        }

        /**
         * Determine if a queue is paused.
         *
         * @param string $connection
         * @param string $queue
         * @return bool
         * @static
         */
        public static function isPaused($connection, $queue)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->isPaused($connection, $queue);
        }

        /**
         * Determine which of the given queues are currently paused.
         *
         * @param string $connection
         * @param array $queues
         * @return array
         * @static
         */
        public static function getPausedQueues($connection, $queues)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->getPausedQueues($connection, $queues);
        }

        /**
         * Indicate that queue workers should not poll for restart or pause signals.
         *
         * This prevents the workers from hitting the application cache to determine if they need to pause or restart.
         *
         * @return void
         * @static
         */
        public static function withoutInterruptionPolling()
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->withoutInterruptionPolling();
        }

        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void
         * @static
         */
        public static function extend($driver, $resolver)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->extend($driver, $resolver);
        }

        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void
         * @static
         */
        public static function addConnector($driver, $resolver)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->addConnector($driver, $resolver);
        }

        /**
         * Get the name of the default queue connection.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the name of the default queue connection.
         *
         * @param \UnitEnum|string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Get the full name for the given connection.
         *
         * @param string|null $connection
         * @return string
         * @static
         */
        public static function getName($connection = null)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->getName($connection);
        }

        /**
         * Get the application instance used by the manager.
         *
         * @return \Illuminate\Contracts\Foundation\Application
         * @static
         */
        public static function getApplication()
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->getApplication();
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Queue\QueueManager
         * @static
         */
        public static function setApplication($app)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Resolve the default connection name for a given queueable instance.
         *
         * @param object $queueable
         * @return string|null
         * @static
         */
        public static function resolveConnectionFromQueueRoute($queueable)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->resolveConnectionFromQueueRoute($queueable);
        }

        /**
         * Resolve the default queue name for a given queueable instance.
         *
         * @param object $queueable
         * @return string|null
         * @static
         */
        public static function resolveQueueFromQueueRoute($queueable)
        {
            /** @var \Illuminate\Queue\QueueManager $instance */
            return $instance->resolveQueueFromQueueRoute($queueable);
        }

        /**
         * Specify the jobs that should be queued instead of faked.
         *
         * @param array|string $jobsToBeQueued
         * @return \Illuminate\Support\Testing\Fakes\QueueFake
         * @static
         */
        public static function except($jobsToBeQueued)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->except($jobsToBeQueued);
        }

        /**
         * Assert if a job was pushed based on a truth-test callback.
         *
         * @param string|\Closure $job
         * @param callable|int|null $callback
         * @return void
         * @static
         */
        public static function assertPushed($job, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertPushed($job, $callback);
        }

        /**
         * Assert if a job was pushed a number of times.
         *
         * @param string $job
         * @param int $times
         * @return void
         * @static
         */
        public static function assertPushedTimes($job, $times = 1)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertPushedTimes($job, $times);
        }

        /**
         * Assert if a job was pushed exactly once.
         *
         * @param string $job
         * @return void
         * @static
         */
        public static function assertPushedOnce($job)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertPushedOnce($job);
        }

        /**
         * Assert if a job was pushed based on a truth-test callback.
         *
         * @param \UnitEnum|string $queue
         * @param string|\Closure $job
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertPushedOn($queue, $job, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertPushedOn($queue, $job, $callback);
        }

        /**
         * Assert if a job was pushed with chained jobs based on a truth-test callback.
         *
         * @param string $job
         * @param array $expectedChain
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertPushedWithChain($job, $expectedChain = [], $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertPushedWithChain($job, $expectedChain, $callback);
        }

        /**
         * Assert if a job was pushed with an empty chain based on a truth-test callback.
         *
         * @param string $job
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertPushedWithoutChain($job, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertPushedWithoutChain($job, $callback);
        }

        /**
         * Assert if a closure was pushed based on a truth-test callback.
         *
         * @param callable|int|null $callback
         * @return void
         * @static
         */
        public static function assertClosurePushed($callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertClosurePushed($callback);
        }

        /**
         * Assert that a closure was not pushed based on a truth-test callback.
         *
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertClosureNotPushed($callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertClosureNotPushed($callback);
        }

        /**
         * Determine if a job was pushed based on a truth-test callback.
         *
         * @param string|\Closure $job
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function assertNotPushed($job, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertNotPushed($job, $callback);
        }

        /**
         * Assert the total count of jobs that were pushed.
         *
         * @param int $expectedCount
         * @return void
         * @static
         */
        public static function assertCount($expectedCount)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertCount($expectedCount);
        }

        /**
         * Assert that no jobs were pushed.
         *
         * @return void
         * @static
         */
        public static function assertNothingPushed()
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->assertNothingPushed();
        }

        /**
         * Get all of the jobs matching a truth-test callback.
         *
         * @param string $job
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static function pushed($job, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->pushed($job, $callback);
        }

        /**
         * Get all of the raw pushes matching a truth-test callback.
         *
         * @param null|\Closure(string, ?string, array):  bool  $callback
         * @return \Illuminate\Support\Collection<int, RawPushType>
         * @static
         */
        public static function pushedRaw($callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->pushedRaw($callback);
        }

        /**
         * Get all of the jobs by listener class, passing an optional truth-test callback.
         *
         * @param class-string $listenerClass
         * @param (\Closure(mixed, \Illuminate\Events\CallQueuedListener, string|null, mixed): bool)|null $callback
         * @return \Illuminate\Support\Collection<int, \Illuminate\Events\CallQueuedListener>
         * @static
         */
        public static function listenersPushed($listenerClass, $callback = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->listenersPushed($listenerClass, $callback);
        }

        /**
         * Determine if there are any stored jobs for a given class.
         *
         * @param string $job
         * @return bool
         * @static
         */
        public static function hasPushed($job)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->hasPushed($job);
        }

        /**
         * Get the size of the queue.
         *
         * @param \UnitEnum|string|null $queue
         * @return int
         * @static
         */
        public static function size($queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->size($queue);
        }

        /**
         * Get the number of pending jobs.
         *
         * @param \UnitEnum|string|null $queue
         * @return int
         * @static
         */
        public static function pendingSize($queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->pendingSize($queue);
        }

        /**
         * Get the number of delayed jobs.
         *
         * @param \UnitEnum|string|null $queue
         * @return int
         * @static
         */
        public static function delayedSize($queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->delayedSize($queue);
        }

        /**
         * Get the number of reserved jobs.
         *
         * @param \UnitEnum|string|null $queue
         * @return int
         * @static
         */
        public static function reservedSize($queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->reservedSize($queue);
        }

        /**
         * Get the pending jobs for the given queue.
         *
         * @param \UnitEnum|string|null $queue
         * @return \Illuminate\Support\Collection<int, \Illuminate\Queue\Jobs\InspectedJob>
         * @static
         */
        public static function pendingJobs($queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->pendingJobs($queue);
        }

        /**
         * Get the delayed jobs for the given queue.
         *
         * @param \UnitEnum|string|null $queue
         * @return \Illuminate\Support\Collection<int, \Illuminate\Queue\Jobs\InspectedJob>
         * @static
         */
        public static function delayedJobs($queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->delayedJobs($queue);
        }

        /**
         * Get the reserved jobs for the given queue.
         *
         * @param \UnitEnum|string|null $queue
         * @return \Illuminate\Support\Collection<int, \Illuminate\Queue\Jobs\InspectedJob>
         * @static
         */
        public static function reservedJobs($queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->reservedJobs($queue);
        }

        /**
         * Get all pending jobs across every queue.
         *
         * @return \Illuminate\Support\Collection<int, \Illuminate\Queue\Jobs\InspectedJob>
         * @static
         */
        public static function allPendingJobs()
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->allPendingJobs();
        }

        /**
         * Get all delayed jobs across every queue.
         *
         * @return \Illuminate\Support\Collection<int, \Illuminate\Queue\Jobs\InspectedJob>
         * @static
         */
        public static function allDelayedJobs()
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->allDelayedJobs();
        }

        /**
         * Get all reserved jobs across every queue.
         *
         * @return \Illuminate\Support\Collection<int, \Illuminate\Queue\Jobs\InspectedJob>
         * @static
         */
        public static function allReservedJobs()
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->allReservedJobs();
        }

        /**
         * Get the creation timestamp of the oldest pending job, excluding delayed jobs.
         *
         * @param \UnitEnum|string|null $queue
         * @return int|null
         * @static
         */
        public static function creationTimeOfOldestPendingJob($queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->creationTimeOfOldestPendingJob($queue);
        }

        /**
         * Push a new job onto the queue.
         *
         * @param string|object $job
         * @param mixed $data
         * @param \UnitEnum|string|null $queue
         * @return mixed
         * @static
         */
        public static function push($job, $data = '', $queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->push($job, $data, $queue);
        }

        /**
         * Determine if a job should be faked or actually dispatched.
         *
         * @param object $job
         * @return bool
         * @static
         */
        public static function shouldFakeJob($job)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->shouldFakeJob($job);
        }

        /**
         * Push a raw payload onto the queue.
         *
         * @param string $payload
         * @param \UnitEnum|string|null $queue
         * @param array $options
         * @return mixed
         * @static
         */
        public static function pushRaw($payload, $queue = null, $options = [])
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->pushRaw($payload, $queue, $options);
        }

        /**
         * Push a new job onto the queue after (n) seconds.
         *
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string|object $job
         * @param mixed $data
         * @param \UnitEnum|string|null $queue
         * @return mixed
         * @static
         */
        public static function later($delay, $job, $data = '', $queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->later($delay, $job, $data, $queue);
        }

        /**
         * Push a new job onto the queue.
         *
         * @param \UnitEnum|string $queue
         * @param string|object $job
         * @param mixed $data
         * @return mixed
         * @static
         */
        public static function pushOn($queue, $job, $data = '')
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->pushOn($queue, $job, $data);
        }

        /**
         * Push a new job onto a specific queue after (n) seconds.
         *
         * @param \UnitEnum|string $queue
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string|object $job
         * @param mixed $data
         * @return mixed
         * @static
         */
        public static function laterOn($queue, $delay, $job, $data = '')
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->laterOn($queue, $delay, $job, $data);
        }

        /**
         * Mark the given job as reserved.
         *
         * @param \Closure|string|object $job
         * @param \UnitEnum|string|null $queue
         * @return void
         * @static
         */
        public static function reserve($job, $queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->reserve($job, $queue);
        }

        /**
         * Pop the next job off of the queue.
         *
         * @param \UnitEnum|string|null $queue
         * @return \Illuminate\Contracts\Queue\Job|null
         * @static
         */
        public static function pop($queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->pop($queue);
        }

        /**
         * Push an array of jobs onto the queue.
         *
         * @param array $jobs
         * @param mixed $data
         * @param \UnitEnum|string|null $queue
         * @return mixed
         * @static
         */
        public static function bulk($jobs, $data = '', $queue = null)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->bulk($jobs, $data, $queue);
        }

        /**
         * Get the jobs that have been pushed.
         *
         * @return array
         * @static
         */
        public static function pushedJobs()
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->pushedJobs();
        }

        /**
         * Get the payloads that were pushed raw.
         *
         * @return list<RawPushType>
         * @static
         */
        public static function rawPushes()
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->rawPushes();
        }

        /**
         * Specify if jobs should be serialized and restored when being "pushed" to the queue.
         *
         * @param bool $serializeAndRestore
         * @return \Illuminate\Support\Testing\Fakes\QueueFake
         * @static
         */
        public static function serializeAndRestore($serializeAndRestore = true)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->serializeAndRestore($serializeAndRestore);
        }

        /**
         * Release the locks for all unique jobs that were pushed.
         *
         * @return void
         * @static
         */
        public static function releaseUniqueJobLocks()
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->releaseUniqueJobLocks();
        }

        /**
         * Clear all of the reserved jobs.
         *
         * @return void
         * @static
         */
        public static function clearReserved()
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            $instance->clearReserved();
        }

        /**
         * Register a callback to be invoked before pushing a job.
         *
         * @param callable $callback
         * @return \Illuminate\Support\Testing\Fakes\QueueFake
         * @static
         */
        public static function beforePushing($callback)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->beforePushing($callback);
        }

        /**
         * Register a callback to be invoked after pushing a job.
         *
         * @param callable $callback
         * @return \Illuminate\Support\Testing\Fakes\QueueFake
         * @static
         */
        public static function afterPushing($callback)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->afterPushing($callback);
        }

        /**
         * Get the connection name for the queue.
         *
         * @return string
         * @static
         */
        public static function getConnectionName()
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->getConnectionName();
        }

        /**
         * Set the connection name for the queue.
         *
         * @param string $name
         * @return \Illuminate\Support\Testing\Fakes\QueueFake
         * @static
         */
        public static function setConnectionName($name)
        {
            /** @var \Illuminate\Support\Testing\Fakes\QueueFake $instance */
            return $instance->setConnectionName($name);
        }

        /**
         * Get the maximum number of attempts for an object-based queue handler.
         *
         * @param mixed $job
         * @return mixed
         * @static
         */
        public static function getJobTries($job)
        {
            //Method inherited from \Illuminate\Queue\Queue 
            /** @var \Illuminate\Queue\SyncQueue $instance */
            return $instance->getJobTries($job);
        }

        /**
         * Get the backoff for an object-based queue handler.
         *
         * @param mixed $job
         * @return mixed
         * @static
         */
        public static function getJobBackoff($job)
        {
            //Method inherited from \Illuminate\Queue\Queue 
            /** @var \Illuminate\Queue\SyncQueue $instance */
            return $instance->getJobBackoff($job);
        }

        /**
         * Get the expiration timestamp for an object-based queue handler.
         *
         * @param mixed $job
         * @return mixed
         * @static
         */
        public static function getJobExpiration($job)
        {
            //Method inherited from \Illuminate\Queue\Queue 
            /** @var \Illuminate\Queue\SyncQueue $instance */
            return $instance->getJobExpiration($job);
        }

        /**
         * Register a callback to be executed when creating job payloads.
         *
         * @param callable|null $callback
         * @return void
         * @static
         */
        public static function createPayloadUsing($callback)
        {
            //Method inherited from \Illuminate\Queue\Queue 
            \Illuminate\Queue\SyncQueue::createPayloadUsing($callback);
        }

        /**
         * Get the queue configuration array.
         *
         * @return array
         * @static
         */
        public static function getConfig()
        {
            //Method inherited from \Illuminate\Queue\Queue 
            /** @var \Illuminate\Queue\SyncQueue $instance */
            return $instance->getConfig();
        }

        /**
         * Set the queue configuration array.
         *
         * @return \Illuminate\Queue\SyncQueue
         * @static
         */
        public static function setConfig($config)
        {
            //Method inherited from \Illuminate\Queue\Queue 
            /** @var \Illuminate\Queue\SyncQueue $instance */
            return $instance->setConfig($config);
        }

        /**
         * Get the container instance being used by the connection.
         *
         * @return \Illuminate\Container\Container
         * @static
         */
        public static function getContainer()
        {
            //Method inherited from \Illuminate\Queue\Queue 
            /** @var \Illuminate\Queue\SyncQueue $instance */
            return $instance->getContainer();
        }

        /**
         * Set the IoC container instance.
         *
         * @return void
         * @static
         */
        public static function setContainer($container)
        {
            //Method inherited from \Illuminate\Queue\Queue 
            /** @var \Illuminate\Queue\SyncQueue $instance */
            $instance->setContainer($container);
        }

            }
    /**
     * @see \Illuminate\Routing\Redirector
     */
    class Redirect {
        /**
         * Create a new redirect response to the previous location.
         *
         * @param int $status
         * @param array $headers
         * @param mixed $fallback
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function back($status = 302, $headers = [], $fallback = false)
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->back($status, $headers, $fallback);
        }

        /**
         * Create a new redirect response to the current URI.
         *
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function refresh($status = 302, $headers = [])
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->refresh($status, $headers);
        }

        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function guest($path, $status = 302, $headers = [], $secure = null)
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->guest($path, $status, $headers, $secure);
        }

        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param mixed $default
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function intended($default = '/', $status = 302, $headers = [], $secure = null)
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->intended($default, $status, $headers, $secure);
        }

        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function to($path, $status = 302, $headers = [], $secure = null)
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->to($path, $status, $headers, $secure);
        }

        /**
         * Create a new redirect response to an external URL (no validation).
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function away($path, $status = 302, $headers = [])
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->away($path, $status, $headers);
        }

        /**
         * Create a new redirect response to the given HTTPS path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function secure($path, $status = 302, $headers = [])
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->secure($path, $status, $headers);
        }

        /**
         * Create a new redirect response to a named route.
         *
         * @param \BackedEnum|string $route
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function route($route, $parameters = [], $status = 302, $headers = [])
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->route($route, $parameters, $status, $headers);
        }

        /**
         * Create a new redirect response to a signed named route.
         *
         * @param \BackedEnum|string $route
         * @param mixed $parameters
         * @param \DateTimeInterface|\DateInterval|int|null $expiration
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function signedRoute($route, $parameters = [], $expiration = null, $status = 302, $headers = [])
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->signedRoute($route, $parameters, $expiration, $status, $headers);
        }

        /**
         * Create a new redirect response to a signed named route.
         *
         * @param \BackedEnum|string $route
         * @param \DateTimeInterface|\DateInterval|int|null $expiration
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function temporarySignedRoute($route, $expiration, $parameters = [], $status = 302, $headers = [])
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->temporarySignedRoute($route, $expiration, $parameters, $status, $headers);
        }

        /**
         * Create a new redirect response to a controller action.
         *
         * @param string|array $action
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function action($action, $parameters = [], $status = 302, $headers = [])
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->action($action, $parameters, $status, $headers);
        }

        /**
         * Get the URL generator instance.
         *
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static function getUrlGenerator()
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->getUrlGenerator();
        }

        /**
         * Set the active session store.
         *
         * @param \Illuminate\Session\Store $session
         * @return void
         * @static
         */
        public static function setSession($session)
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            $instance->setSession($session);
        }

        /**
         * Get the "intended" URL from the session.
         *
         * @return string|null
         * @static
         */
        public static function getIntendedUrl()
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->getIntendedUrl();
        }

        /**
         * Set the "intended" URL in the session.
         *
         * @param string $url
         * @return \Illuminate\Routing\Redirector
         * @static
         */
        public static function setIntendedUrl($url)
        {
            /** @var \Illuminate\Routing\Redirector $instance */
            return $instance->setIntendedUrl($url);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\Redirector::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Routing\Redirector::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\Redirector::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Routing\Redirector::flushMacros();
        }

            }
    /**
     * @see \Illuminate\Http\Request
     */
    class Request {
        /**
         * Create a new Illuminate HTTP request from server variables.
         *
         * @return static
         * @static
         */
        public static function capture()
        {
            return \Illuminate\Http\Request::capture();
        }

        /**
         * Return the Request instance.
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function instance()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->instance();
        }

        /**
         * Get the request method.
         *
         * @return string
         * @static
         */
        public static function method()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->method();
        }

        /**
         * Get a URI instance for the request.
         *
         * @return \Illuminate\Support\Uri
         * @static
         */
        public static function uri()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->uri();
        }

        /**
         * Get the root URL for the application.
         *
         * @return string
         * @static
         */
        public static function root()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->root();
        }

        /**
         * Get the URL (no query string) for the request.
         *
         * @return string
         * @static
         */
        public static function url()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->url();
        }

        /**
         * Get the full URL for the request.
         *
         * @return string
         * @static
         */
        public static function fullUrl()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrl();
        }

        /**
         * Get the full URL for the request with the added query string parameters.
         *
         * @param array $query
         * @return string
         * @static
         */
        public static function fullUrlWithQuery($query)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrlWithQuery($query);
        }

        /**
         * Get the full URL for the request without the given query string parameters.
         *
         * @param array|string $keys
         * @return string
         * @static
         */
        public static function fullUrlWithoutQuery($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrlWithoutQuery($keys);
        }

        /**
         * Get the current path info for the request.
         *
         * @return string
         * @static
         */
        public static function path()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->path();
        }

        /**
         * Get the current decoded path info for the request.
         *
         * @return string
         * @static
         */
        public static function decodedPath()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->decodedPath();
        }

        /**
         * Get a segment from the URI (1 based index).
         *
         * @param int $index
         * @param string|null $default
         * @return string|null
         * @static
         */
        public static function segment($index, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->segment($index, $default);
        }

        /**
         * Get all of the segments for the request path.
         *
         * @return array
         * @static
         */
        public static function segments()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->segments();
        }

        /**
         * Determine if the current request URI matches a pattern.
         *
         * @param mixed $patterns
         * @return bool
         * @static
         */
        public static function is(...$patterns)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->is(...$patterns);
        }

        /**
         * Determine if the route name matches a given pattern.
         *
         * @param mixed $patterns
         * @return bool
         * @static
         */
        public static function routeIs(...$patterns)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->routeIs(...$patterns);
        }

        /**
         * Determine if the current request URL and query string match a pattern.
         *
         * @param mixed $patterns
         * @return bool
         * @static
         */
        public static function fullUrlIs(...$patterns)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrlIs(...$patterns);
        }

        /**
         * Get the host name.
         *
         * @return string
         * @static
         */
        public static function host()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->host();
        }

        /**
         * Get the HTTP host being requested.
         *
         * @return string
         * @static
         */
        public static function httpHost()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->httpHost();
        }

        /**
         * Get the scheme and HTTP host.
         *
         * @return string
         * @static
         */
        public static function schemeAndHttpHost()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->schemeAndHttpHost();
        }

        /**
         * Determine if the request is the result of an AJAX call.
         *
         * @return bool
         * @static
         */
        public static function ajax()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->ajax();
        }

        /**
         * Determine if the request is the result of a PJAX call.
         *
         * @return bool
         * @static
         */
        public static function pjax()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->pjax();
        }

        /**
         * Determine if the request is the result of a prefetch call.
         *
         * @return bool
         * @static
         */
        public static function prefetch()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->prefetch();
        }

        /**
         * Determine if the request is over HTTPS.
         *
         * @return bool
         * @static
         */
        public static function secure()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->secure();
        }

        /**
         * Get the client IP address.
         *
         * @return string|null
         * @static
         */
        public static function ip()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->ip();
        }

        /**
         * Get the client IP addresses.
         *
         * @return array
         * @static
         */
        public static function ips()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->ips();
        }

        /**
         * Get the client user agent.
         *
         * @return string|null
         * @static
         */
        public static function userAgent()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->userAgent();
        }

        /**
         * Gets a list of content types acceptable by the client browser in preferable order.
         *
         * @return string[]
         * @static
         */
        public static function getAcceptableContentTypes()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getAcceptableContentTypes();
        }

        /**
         * Merge new input into the current request's input array.
         *
         * @param array $input
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function merge($input)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->merge($input);
        }

        /**
         * Merge new input into the request's input, but only when that key is missing from the request.
         *
         * @param array $input
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function mergeIfMissing($input)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->mergeIfMissing($input);
        }

        /**
         * Replace the input values for the current request.
         *
         * @param array $input
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function replace($input)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->replace($input);
        }

        /**
         * This method belongs to Symfony HttpFoundation and is not usually needed when using Laravel.
         *
         * Instead, you may use the "input" method.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed
         * @deprecated use ->input() instead
         * @static
         */
        public static function get($key, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->get($key, $default);
        }

        /**
         * Get the JSON payload for the request.
         *
         * @param string|null $key
         * @param mixed $default
         * @return ($key is null ? \Symfony\Component\HttpFoundation\InputBag : mixed)
         * @static
         */
        public static function json($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->json($key, $default);
        }

        /**
         * Create a new request instance from the given Laravel request.
         *
         * @param \Illuminate\Http\Request $from
         * @param \Illuminate\Http\Request|null $to
         * @return static
         * @static
         */
        public static function createFrom($from, $to = null)
        {
            return \Illuminate\Http\Request::createFrom($from, $to);
        }

        /**
         * Create an Illuminate request from a Symfony instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return static
         * @static
         */
        public static function createFromBase($request)
        {
            return \Illuminate\Http\Request::createFromBase($request);
        }

        /**
         * Clones a request and overrides some of its parameters.
         *
         * @return static
         * @param array|null $query The GET parameters
         * @param array|null $request The POST parameters
         * @param array|null $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array|null $cookies The COOKIE parameters
         * @param array|null $files The FILES parameters
         * @param array|null $server The SERVER parameters
         * @static
         */
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->duplicate($query, $request, $attributes, $cookies, $files, $server);
        }

        /**
         * Whether the request contains a Session object.
         *
         * This method does not give any information about the state of the session object,
         * like whether the session is started or not. It is just a way to check if this Request
         * is associated with a Session instance.
         *
         * @param bool $skipIfUninitialized When true, ignores factories injected by `setSessionFactory`
         * @static
         */
        public static function hasSession($skipIfUninitialized = false)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasSession($skipIfUninitialized);
        }

        /**
         * Gets the Session.
         *
         * @throws \Symfony\Component\HttpFoundation\Exception\SessionNotFoundException
         * @throws SessionNotFoundException When session is not set properly
         * @static
         */
        public static function getSession()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getSession();
        }

        /**
         * Get the session associated with the request.
         *
         * @return \Illuminate\Contracts\Session\Session
         * @throws \RuntimeException
         * @static
         */
        public static function session()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->session();
        }

        /**
         * Set the session instance on the request.
         *
         * @param \Illuminate\Contracts\Session\Session $session
         * @return void
         * @static
         */
        public static function setLaravelSession($session)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->setLaravelSession($session);
        }

        /**
         * Set the locale for the request instance.
         *
         * @param string $locale
         * @return void
         * @static
         */
        public static function setRequestLocale($locale)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->setRequestLocale($locale);
        }

        /**
         * Set the default locale for the request instance.
         *
         * @param string $locale
         * @return void
         * @static
         */
        public static function setDefaultRequestLocale($locale)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->setDefaultRequestLocale($locale);
        }

        /**
         * Get the user making the request.
         *
         * @param string|null $guard
         * @return mixed
         * @static
         */
        public static function user($guard = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->user($guard);
        }

        /**
         * Get the route handling the request.
         *
         * @param string|null $param
         * @param mixed $default
         * @return ($param is null ? \Illuminate\Routing\Route : object|string|null)
         * @static
         */
        public static function route($param = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->route($param, $default);
        }

        /**
         * Get a unique fingerprint for the request / route / IP address.
         *
         * @return string
         * @throws \RuntimeException
         * @static
         */
        public static function fingerprint()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fingerprint();
        }

        /**
         * Set the JSON payload for the request.
         *
         * @param \Symfony\Component\HttpFoundation\InputBag $json
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function setJson($json)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setJson($json);
        }

        /**
         * Get the user resolver callback.
         *
         * @return \Closure
         * @static
         */
        public static function getUserResolver()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUserResolver();
        }

        /**
         * Set the user resolver callback.
         *
         * @param \Closure $callback
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function setUserResolver($callback)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setUserResolver($callback);
        }

        /**
         * Get the route resolver callback.
         *
         * @return \Closure
         * @static
         */
        public static function getRouteResolver()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRouteResolver();
        }

        /**
         * Set the route resolver callback.
         *
         * @param \Closure $callback
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function setRouteResolver($callback)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setRouteResolver($callback);
        }

        /**
         * Get all of the input and files for the request.
         *
         * @return array
         * @static
         */
        public static function toArray()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->toArray();
        }

        /**
         * Determine if the given offset exists.
         *
         * @param string $offset
         * @return bool
         * @static
         */
        public static function offsetExists($offset)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->offsetExists($offset);
        }

        /**
         * Get the value at the given offset.
         *
         * @param string $offset
         * @return mixed
         * @static
         */
        public static function offsetGet($offset)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->offsetGet($offset);
        }

        /**
         * Set the value at the given offset.
         *
         * @param string $offset
         * @param mixed $value
         * @return void
         * @static
         */
        public static function offsetSet($offset, $value)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->offsetSet($offset, $value);
        }

        /**
         * Remove the value at the given offset.
         *
         * @param string $offset
         * @return void
         * @static
         */
        public static function offsetUnset($offset)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->offsetUnset($offset);
        }

        /**
         * Sets the parameters for this request.
         *
         * This method also re-initializes all properties.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @param string|resource|null $content The raw body data
         * @static
         */
        public static function initialize($query = [], $request = [], $attributes = [], $cookies = [], $files = [], $server = [], $content = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }

        /**
         * Creates a new request with values from PHP's super globals.
         *
         * @static
         */
        public static function createFromGlobals()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            return \Illuminate\Http\Request::createFromGlobals();
        }

        /**
         * Creates a Request based on a given URI and configuration.
         *
         * The information contained in the URI always take precedence
         * over the other information (server and parameters).
         *
         * @param string $uri The URI
         * @param string $method The HTTP method
         * @param array $parameters The query (GET) or request (POST) parameters
         * @param array $cookies The request cookies ($_COOKIE)
         * @param array $files The request files ($_FILES)
         * @param array $server The server parameters ($_SERVER)
         * @param string|resource|null $content The raw body data
         * @throws BadRequestException When the URI is invalid
         * @static
         */
        public static function create($uri, $method = 'GET', $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }

        /**
         * Sets a callable able to create a Request instance.
         *
         * This is mainly useful when you need to override the Request class
         * to keep BC with an existing system. It should not be used for any
         * other purpose.
         *
         * @static
         */
        public static function setFactory($callable)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            return \Illuminate\Http\Request::setFactory($callable);
        }

        /**
         * Overrides the PHP global variables according to this request instance.
         *
         * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
         * $_FILES is never overridden, see rfc1867
         *
         * @static
         */
        public static function overrideGlobals()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->overrideGlobals();
        }

        /**
         * Sets a list of trusted proxies.
         *
         * You should only list the reverse proxies that you manage directly.
         *
         * @param array $proxies A list of trusted proxies, the string 'REMOTE_ADDR' will be replaced with $_SERVER['REMOTE_ADDR'] and 'PRIVATE_SUBNETS' by IpUtils::PRIVATE_SUBNETS
         * @param int-mask-of<Request::HEADER_*> $trustedHeaderSet A bit field to set which headers to trust from your proxies
         * @static
         */
        public static function setTrustedProxies($proxies, $trustedHeaderSet)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            return \Illuminate\Http\Request::setTrustedProxies($proxies, $trustedHeaderSet);
        }

        /**
         * Gets the list of trusted proxies.
         *
         * @return string[]
         * @static
         */
        public static function getTrustedProxies()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            return \Illuminate\Http\Request::getTrustedProxies();
        }

        /**
         * Gets the set of trusted headers from trusted proxies.
         *
         * @return int A bit field of Request::HEADER_* that defines which headers are trusted from your proxies
         * @static
         */
        public static function getTrustedHeaderSet()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            return \Illuminate\Http\Request::getTrustedHeaderSet();
        }

        /**
         * Sets a list of trusted host patterns.
         *
         * You should only list the hosts you manage using regexs.
         *
         * @param array $hostPatterns A list of trusted host patterns
         * @static
         */
        public static function setTrustedHosts($hostPatterns)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }

        /**
         * Gets the list of trusted host patterns.
         *
         * @return string[]
         * @static
         */
        public static function getTrustedHosts()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            return \Illuminate\Http\Request::getTrustedHosts();
        }

        /**
         * Normalizes a query string.
         *
         * It builds a normalized query string, where keys/value pairs are alphabetized,
         * have consistent escaping and unneeded delimiters are removed.
         *
         * @static
         */
        public static function normalizeQueryString($qs)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }

        /**
         * Enables support for the _method request parameter to determine the intended HTTP method.
         *
         * Be warned that enabling this feature might lead to CSRF issues in your code.
         * Check that you are using CSRF tokens when required.
         * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
         * and used to send a "PUT" or "DELETE" request via the _method request parameter.
         * If these methods are not protected against CSRF, this presents a possible vulnerability.
         *
         * The HTTP method can only be overridden when the real HTTP method is POST.
         *
         * @static
         */
        public static function enableHttpMethodParameterOverride()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }

        /**
         * Checks whether support for the _method request parameter is enabled.
         *
         * @static
         */
        public static function getHttpMethodParameterOverride()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }

        /**
         * Sets the list of HTTP methods that can be overridden.
         *
         * Set to null to allow all methods to be overridden (default). Set to an
         * empty array to disallow overrides entirely. Otherwise, provide the list
         * of uppercased method names that are allowed.
         *
         * @param \Symfony\Component\HttpFoundation\uppercase-string[]|null $methods
         * @static
         */
        public static function setAllowedHttpMethodOverride($methods)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            return \Illuminate\Http\Request::setAllowedHttpMethodOverride($methods);
        }

        /**
         * Gets the list of HTTP methods that can be overridden.
         *
         * @return \Symfony\Component\HttpFoundation\uppercase-string[]|null
         * @static
         */
        public static function getAllowedHttpMethodOverride()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            return \Illuminate\Http\Request::getAllowedHttpMethodOverride();
        }

        /**
         * Whether the request contains a Session which was started in one of the
         * previous requests.
         *
         * @static
         */
        public static function hasPreviousSession()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasPreviousSession();
        }

        /**
         * @static
         */
        public static function setSession($session)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setSession($session);
        }

        /**
         * @internal
         * @param callable():  SessionInterface $factory
         * @static
         */
        public static function setSessionFactory($factory)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setSessionFactory($factory);
        }

        /**
         * Returns the client IP addresses.
         *
         * In the returned array the most trusted IP address is first, and the
         * least trusted one last. The "real" client IP address is the last one,
         * but this is also the least trusted one. Trusted proxies are stripped.
         *
         * Use this method carefully; you should use getClientIp() instead.
         *
         * @see getClientIp()
         * @static
         */
        public static function getClientIps()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getClientIps();
        }

        /**
         * Returns the client IP address.
         *
         * This method can read the client IP address from the "X-Forwarded-For" header
         * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
         * header value is a comma+space separated list of IP addresses, the left-most
         * being the original client, and each successive proxy that passed the request
         * adding the IP address where it received the request from.
         *
         * @see getClientIps()
         * @see https://wikipedia.org/wiki/X-Forwarded-For
         * @static
         */
        public static function getClientIp()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getClientIp();
        }

        /**
         * Returns current script name.
         *
         * @static
         */
        public static function getScriptName()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getScriptName();
        }

        /**
         * Returns the path being requested relative to the executed script.
         *
         * The path info always starts with a /.
         *
         * Suppose this request is instantiated from /mysite on localhost:
         *
         *  * http://localhost/mysite              returns '/'
         *  * http://localhost/mysite/about        returns '/about'
         *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
         *  * http://localhost/mysite/about?var=1  returns '/about'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static
         */
        public static function getPathInfo()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPathInfo();
        }

        /**
         * Returns the root path from which this request is executed.
         *
         * Suppose that an index.php file instantiates this request object:
         *
         *  * http://localhost/index.php         returns an empty string
         *  * http://localhost/index.php/page    returns an empty string
         *  * http://localhost/web/index.php     returns '/web'
         *  * http://localhost/we%20b/index.php  returns '/we%20b'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static
         */
        public static function getBasePath()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getBasePath();
        }

        /**
         * Returns the root URL from which this request is executed.
         *
         * The base URL never ends with a /.
         *
         * This is similar to getBasePath(), except that it also includes the
         * script filename (e.g. index.php) if one exists.
         *
         * @return string The raw URL (i.e. not urldecoded)
         * @static
         */
        public static function getBaseUrl()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getBaseUrl();
        }

        /**
         * Gets the request's scheme.
         *
         * @static
         */
        public static function getScheme()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getScheme();
        }

        /**
         * Returns the port on which the request is made.
         *
         * This method can read the client port from the "X-Forwarded-Port" header
         * when trusted proxies were set via "setTrustedProxies()".
         *
         * The "X-Forwarded-Port" header must contain the client port.
         *
         * @return int|string|null Can be a string if fetched from the server bag
         * @static
         */
        public static function getPort()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPort();
        }

        /**
         * Returns the user.
         *
         * @static
         */
        public static function getUser()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUser();
        }

        /**
         * Returns the password.
         *
         * @static
         */
        public static function getPassword()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPassword();
        }

        /**
         * Gets the user info.
         *
         * @return string|null A user name if any and, optionally, scheme-specific information about how to gain authorization to access the server
         * @static
         */
        public static function getUserInfo()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUserInfo();
        }

        /**
         * Returns the HTTP host being requested.
         *
         * The port name will be appended to the host if it's non-standard.
         *
         * @static
         */
        public static function getHttpHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getHttpHost();
        }

        /**
         * Returns the requested URI (path and query string).
         *
         * @return string The raw URI (i.e. not URI decoded)
         * @static
         */
        public static function getRequestUri()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRequestUri();
        }

        /**
         * Gets the scheme and HTTP host.
         *
         * If the URL was called with basic authentication, the user
         * and the password are not added to the generated string.
         *
         * @static
         */
        public static function getSchemeAndHttpHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getSchemeAndHttpHost();
        }

        /**
         * Generates a normalized URI (URL) for the Request.
         *
         * @see getQueryString()
         * @static
         */
        public static function getUri()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUri();
        }

        /**
         * Generates a normalized URI for the given path.
         *
         * @param string $path A path to use instead of the current one
         * @static
         */
        public static function getUriForPath($path)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUriForPath($path);
        }

        /**
         * Returns the path as relative reference from the current Request path.
         *
         * Only the URIs path component (no schema, host etc.) is relevant and must be given.
         * Both paths must be absolute and not contain relative parts.
         * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
         * Furthermore, they can be used to reduce the link size in documents.
         *
         * Example target paths, given a base path of "/a/b/c/d":
         * - "/a/b/c/d"     -> ""
         * - "/a/b/c/"      -> "./"
         * - "/a/b/"        -> "../"
         * - "/a/b/c/other" -> "other"
         * - "/a/x/y"       -> "../../x/y"
         *
         * @static
         */
        public static function getRelativeUriForPath($path)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRelativeUriForPath($path);
        }

        /**
         * Generates the normalized query string for the Request.
         *
         * It builds a normalized query string, where keys/value pairs are alphabetized
         * and have consistent escaping.
         *
         * @static
         */
        public static function getQueryString()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getQueryString();
        }

        /**
         * Checks whether the request is secure or not.
         *
         * This method can read the client protocol from the "X-Forwarded-Proto" header
         * when trusted proxies were set via "setTrustedProxies()".
         *
         * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
         *
         * @static
         */
        public static function isSecure()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isSecure();
        }

        /**
         * Returns the host name.
         *
         * This method can read the client host name from the "X-Forwarded-Host" header
         * when trusted proxies were set via "setTrustedProxies()".
         *
         * The "X-Forwarded-Host" header must contain the client host name.
         *
         * @throws SuspiciousOperationException when the host name is invalid or not trusted
         * @static
         */
        public static function getHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getHost();
        }

        /**
         * Sets the request method.
         *
         * @static
         */
        public static function setMethod($method)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setMethod($method);
        }

        /**
         * Gets the request "intended" method.
         *
         * If the X-HTTP-Method-Override header is set, and if the method is a POST,
         * then it is used to determine the "real" intended HTTP method.
         *
         * The _method request parameter can also be used to determine the HTTP method,
         * but only if enableHttpMethodParameterOverride() has been called.
         *
         * The method is always an uppercased string.
         *
         * @see getRealMethod()
         * @static
         */
        public static function getMethod()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getMethod();
        }

        /**
         * Gets the "real" request method.
         *
         * @see getMethod()
         * @static
         */
        public static function getRealMethod()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRealMethod();
        }

        /**
         * Gets the mime type associated with the format.
         *
         * @static
         */
        public static function getMimeType($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getMimeType($format);
        }

        /**
         * Gets the mime types associated with the format.
         *
         * @return string[]
         * @static
         */
        public static function getMimeTypes($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            return \Illuminate\Http\Request::getMimeTypes($format);
        }

        /**
         * Gets the format associated with the mime type.
         *
         * Resolution order:
         *   1) Exact match on the full MIME type (e.g. "application/json").
         *   2) Match on the canonical MIME type (i.e. before the first ";" parameter).
         *   3) If the type is "application/*+suffix", use the structured syntax suffix
         *      mapping (e.g. "application/foo+json" → "json"), when available.
         *   4) If $subtypeFallback is true and no match was found:
         *      - return the MIME subtype (without "x-" prefix), provided it does not
         *        contain a "+" (e.g. "application/x-yaml" → "yaml", "text/csv" → "csv").
         *
         * @param string|null $mimeType The mime type to check
         * @param bool $subtypeFallback Whether to fall back to the subtype if no exact match is found
         * @static
         */
        public static function getFormat($mimeType)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getFormat($mimeType);
        }

        /**
         * Associates a format with mime types.
         *
         * @param string $format The format to set
         * @param string|string[] $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
         * @static
         */
        public static function setFormat($format, $mimeTypes)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setFormat($format, $mimeTypes);
        }

        /**
         * Gets the request format.
         *
         * Here is the process to determine the format:
         *
         *  * format defined by the user (with setRequestFormat())
         *  * _format request attribute
         *  * $default
         *
         * @see getPreferredFormat
         * @static
         */
        public static function getRequestFormat($default = 'html')
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRequestFormat($default);
        }

        /**
         * Sets the request format.
         *
         * @static
         */
        public static function setRequestFormat($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setRequestFormat($format);
        }

        /**
         * Gets the usual name of the format associated with the request's media type (provided in the Content-Type header).
         *
         * @see Request::$formats
         * @static
         */
        public static function getContentTypeFormat()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getContentTypeFormat();
        }

        /**
         * Sets the default locale.
         *
         * @static
         */
        public static function setDefaultLocale($locale)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setDefaultLocale($locale);
        }

        /**
         * Get the default locale.
         *
         * @static
         */
        public static function getDefaultLocale()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getDefaultLocale();
        }

        /**
         * Sets the locale.
         *
         * @static
         */
        public static function setLocale($locale)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setLocale($locale);
        }

        /**
         * Get the locale.
         *
         * @static
         */
        public static function getLocale()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getLocale();
        }

        /**
         * Checks if the request method is of specified type.
         *
         * @param string $method Uppercase request method (GET, POST etc)
         * @static
         */
        public static function isMethod($method)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethod($method);
        }

        /**
         * Checks whether or not the method is safe.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.1
         * @static
         */
        public static function isMethodSafe()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethodSafe();
        }

        /**
         * Checks whether or not the method is idempotent.
         *
         * @static
         */
        public static function isMethodIdempotent()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethodIdempotent();
        }

        /**
         * Checks whether the method is cacheable or not.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.3
         * @static
         */
        public static function isMethodCacheable()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethodCacheable();
        }

        /**
         * Returns the protocol version.
         *
         * If the application is behind a proxy, the protocol version used in the
         * requests between the client and the proxy and between the proxy and the
         * server might be different. This returns the former (from the "Via" header)
         * if the proxy is trusted (see "setTrustedProxies()"), otherwise it returns
         * the latter (from the "SERVER_PROTOCOL" server parameter).
         *
         * @static
         */
        public static function getProtocolVersion()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getProtocolVersion();
        }

        /**
         * Returns the request body content.
         *
         * @param bool $asResource If true, a resource will be returned
         * @return string|resource
         * @psalm-return ($asResource is true ? resource : string)
         * @static
         */
        public static function getContent($asResource = false)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getContent($asResource);
        }

        /**
         * Gets the decoded form or json request body.
         *
         * @throws JsonException When the body cannot be decoded to an array
         * @static
         */
        public static function getPayload()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPayload();
        }

        /**
         * Gets the Etags.
         *
         * @static
         */
        public static function getETags()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getETags();
        }

        /**
         * @static
         */
        public static function isNoCache()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isNoCache();
        }

        /**
         * Gets the preferred format for the response by inspecting, in the following order:
         *   * the request format set using setRequestFormat;
         *   * the values of the Accept HTTP header.
         *
         * Note that if you use this method, you should send the "Vary: Accept" header
         * in the response to prevent any issues with intermediary HTTP caches.
         *
         * @static
         */
        public static function getPreferredFormat($default = 'html')
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPreferredFormat($default);
        }

        /**
         * Returns the preferred language.
         *
         * @param string[] $locales An array of ordered available locales
         * @static
         */
        public static function getPreferredLanguage($locales = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPreferredLanguage($locales);
        }

        /**
         * Gets a list of languages acceptable by the client browser ordered in the user browser preferences.
         *
         * @return string[]
         * @static
         */
        public static function getLanguages()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getLanguages();
        }

        /**
         * Gets a list of charsets acceptable by the client browser in preferable order.
         *
         * @return string[]
         * @static
         */
        public static function getCharsets()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getCharsets();
        }

        /**
         * Gets a list of encodings acceptable by the client browser in preferable order.
         *
         * @return string[]
         * @static
         */
        public static function getEncodings()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getEncodings();
        }

        /**
         * Returns true if the request is an XMLHttpRequest.
         *
         * It works if your JavaScript library sets an X-Requested-With HTTP header.
         * It is known to work with common JavaScript frameworks:
         *
         * @see https://wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
         * @static
         */
        public static function isXmlHttpRequest()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isXmlHttpRequest();
        }

        /**
         * Checks whether the client browser prefers safe content or not according to RFC8674.
         *
         * @see https://tools.ietf.org/html/rfc8674
         * @static
         */
        public static function preferSafeContent()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->preferSafeContent();
        }

        /**
         * Indicates whether this request originated from a trusted proxy.
         *
         * This can be useful to determine whether or not to trust the
         * contents of a proxy-specific header.
         *
         * @static
         */
        public static function isFromTrustedProxy()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request 
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isFromTrustedProxy();
        }

        /**
         * Filter the given array of rules into an array of rules that are included in precognitive headers.
         *
         * @param array $rules
         * @return array
         * @static
         */
        public static function filterPrecognitiveRules($rules)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->filterPrecognitiveRules($rules);
        }

        /**
         * Determine if the request is attempting to be precognitive.
         *
         * @return bool
         * @static
         */
        public static function isAttemptingPrecognition()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isAttemptingPrecognition();
        }

        /**
         * Determine if the request is precognitive.
         *
         * @return bool
         * @static
         */
        public static function isPrecognitive()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isPrecognitive();
        }

        /**
         * Determine if the request is sending JSON.
         *
         * @return bool
         * @static
         */
        public static function isJson()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isJson();
        }

        /**
         * Determine if the current request probably expects a JSON response.
         *
         * @return bool
         * @static
         */
        public static function expectsJson()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->expectsJson();
        }

        /**
         * Determine if the current request is asking for JSON.
         *
         * @return bool
         * @static
         */
        public static function wantsJson()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->wantsJson();
        }

        /**
         * Determine if the current request is asking for Markdown.
         *
         * @return bool
         * @static
         */
        public static function wantsMarkdown()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->wantsMarkdown();
        }

        /**
         * Determines whether the current requests accepts a given content type.
         *
         * @param string|array $contentTypes
         * @return bool
         * @static
         */
        public static function accepts($contentTypes)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->accepts($contentTypes);
        }

        /**
         * Return the most suitable content type from the given array based on content negotiation.
         *
         * @param string|array $contentTypes
         * @return string|null
         * @static
         */
        public static function prefers($contentTypes)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->prefers($contentTypes);
        }

        /**
         * Determine if the current request accepts any content type.
         *
         * @return bool
         * @static
         */
        public static function acceptsAnyContentType()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->acceptsAnyContentType();
        }

        /**
         * Determines whether a request accepts JSON.
         *
         * @return bool
         * @static
         */
        public static function acceptsJson()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->acceptsJson();
        }

        /**
         * Determines whether a request accepts Markdown.
         *
         * @return bool
         * @static
         */
        public static function acceptsMarkdown()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->acceptsMarkdown();
        }

        /**
         * Determines whether a request accepts HTML.
         *
         * @return bool
         * @static
         */
        public static function acceptsHtml()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->acceptsHtml();
        }

        /**
         * Determine if the given content types match.
         *
         * @param string $actual
         * @param string $type
         * @return bool
         * @static
         */
        public static function matchesType($actual, $type)
        {
            return \Illuminate\Http\Request::matchesType($actual, $type);
        }

        /**
         * Get the data format expected in the response.
         *
         * @param string $default
         * @return string
         * @static
         */
        public static function format($default = 'html')
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->format($default);
        }

        /**
         * Retrieve an old input item.
         *
         * @param string|null $key
         * @param \Illuminate\Database\Eloquent\Model|string|array|null $default
         * @return string|array|null
         * @static
         */
        public static function old($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->old($key, $default);
        }

        /**
         * Flash the input for the current request to the session.
         *
         * @return void
         * @static
         */
        public static function flash()
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flash();
        }

        /**
         * Flash only some of the input to the session.
         *
         * @param mixed $keys
         * @return void
         * @static
         */
        public static function flashOnly($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flashOnly($keys);
        }

        /**
         * Flash only some of the input to the session.
         *
         * @param mixed $keys
         * @return void
         * @static
         */
        public static function flashExcept($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flashExcept($keys);
        }

        /**
         * Flush all of the old input from the session.
         *
         * @return void
         * @static
         */
        public static function flush()
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flush();
        }

        /**
         * Retrieve a server variable from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null
         * @static
         */
        public static function server($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->server($key, $default);
        }

        /**
         * Determine if a header is set on the request.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function hasHeader($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasHeader($key);
        }

        /**
         * Retrieve a header from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null
         * @static
         */
        public static function header($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->header($key, $default);
        }

        /**
         * Get the bearer token from the request headers.
         *
         * @return string|null
         * @static
         */
        public static function bearerToken()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->bearerToken();
        }

        /**
         * Get the keys for all of the input and files.
         *
         * @return array
         * @static
         */
        public static function keys()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->keys();
        }

        /**
         * Get all of the input and files for the request.
         *
         * @param mixed $keys
         * @return array
         * @static
         */
        public static function all($keys = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->all($keys);
        }

        /**
         * Retrieve an input item from the request.
         *
         * @param string|null $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function input($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->input($key, $default);
        }

        /**
         * Retrieve input from the request as a Fluent object instance.
         *
         * @param array|string|null $key
         * @param array $default
         * @return \Illuminate\Support\Fluent
         * @static
         */
        public static function fluent($key = null, $default = [])
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fluent($key, $default);
        }

        /**
         * Retrieve a query string item from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null
         * @static
         */
        public static function query($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->query($key, $default);
        }

        /**
         * Retrieve a request payload item from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null
         * @static
         */
        public static function post($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->post($key, $default);
        }

        /**
         * Determine if a cookie is set on the request.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function hasCookie($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasCookie($key);
        }

        /**
         * Retrieve a cookie from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null
         * @static
         */
        public static function cookie($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->cookie($key, $default);
        }

        /**
         * Get an array of all of the files on the request.
         *
         * @return array<string, \Illuminate\Http\UploadedFile|\Illuminate\Http\UploadedFile[]>
         * @static
         */
        public static function allFiles()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->allFiles();
        }

        /**
         * Determine if the uploaded data contains a file.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function hasFile($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasFile($key);
        }

        /**
         * Retrieve a file from the request.
         *
         * @param string|null $key
         * @param mixed $default
         * @return ($key is null ? array<string, \Illuminate\Http\UploadedFile|\Illuminate\Http\UploadedFile[]> : \Illuminate\Http\UploadedFile|\Illuminate\Http\UploadedFile[]|null)
         * @static
         */
        public static function file($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->file($key, $default);
        }

        /**
         * Retrieve a file from the request as an image instance.
         *
         * @static
         */
        public static function image($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->image($key);
        }

        /**
         * Dump the items.
         *
         * @param mixed $keys
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function dump($keys = [])
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->dump($keys);
        }

        /**
         * Dump the given arguments and terminate execution.
         *
         * @param mixed $args
         * @return never
         * @static
         */
        public static function dd(...$args)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->dd(...$args);
        }

        /**
         * Determine if the data contains a given key.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function exists($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->exists($key);
        }

        /**
         * Determine if the data contains a given key.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function has($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->has($key);
        }

        /**
         * Determine if the instance contains any of the given keys.
         *
         * @param string|array $keys
         * @return bool
         * @static
         */
        public static function hasAny($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasAny($keys);
        }

        /**
         * Apply the callback if the instance contains the given key.
         *
         * @template TReturn
         * @template TReturnDefault = never
         * @param string $key
         * @param callable(mixed):  TReturn  $callback
         * @param (callable(): TReturnDefault)|null $default
         * @return $this|TReturn|\Illuminate\Http\TReturnDefault
         * @static
         */
        public static function whenHas($key, $callback, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->whenHas($key, $callback, $default);
        }

        /**
         * Determine if the instance contains a non-empty value for the given key.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function filled($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->filled($key);
        }

        /**
         * Determine if the instance contains an empty value for the given key.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function isNotFilled($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isNotFilled($key);
        }

        /**
         * Determine if the instance contains a non-empty value for any of the given keys.
         *
         * @param string|array $keys
         * @return bool
         * @static
         */
        public static function anyFilled($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->anyFilled($keys);
        }

        /**
         * Apply the callback if the instance contains a non-empty value for the given key.
         *
         * @template TReturn
         * @template TReturnDefault = never
         * @param string $key
         * @param callable(mixed):  TReturn  $callback
         * @param (callable(): TReturnDefault)|null $default
         * @return $this|TReturn|\Illuminate\Http\TReturnDefault
         * @static
         */
        public static function whenFilled($key, $callback, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->whenFilled($key, $callback, $default);
        }

        /**
         * Apply the callback if the instance contains a valid enum value for the given key.
         *
         * @template TEnum of \BackedEnum
         * @template TReturn
         * @template TReturnDefault = never
         * @param string $key
         * @param class-string<TEnum> $enumClass
         * @param callable(TEnum):TReturn $callback
         * @param (callable(): TReturnDefault)|null $default
         * @return $this|TReturn|\Illuminate\Http\TReturnDefault
         * @static
         */
        public static function whenEnum($key, $enumClass, $callback, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->whenEnum($key, $enumClass, $callback, $default);
        }

        /**
         * Determine if the instance is missing a given key.
         *
         * @param string|array $key
         * @return bool
         * @static
         */
        public static function missing($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->missing($key);
        }

        /**
         * Apply the callback if the instance is missing the given key.
         *
         * @template TReturn
         * @template TReturnDefault = never
         * @param string $key
         * @param callable(mixed):  TReturn  $callback
         * @param (callable(): TReturnDefault)|null $default
         * @return $this|TReturn|\Illuminate\Http\TReturnDefault
         * @static
         */
        public static function whenMissing($key, $callback, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->whenMissing($key, $callback, $default);
        }

        /**
         * Retrieve data from the instance as a Stringable instance.
         *
         * @param string $key
         * @param mixed $default
         * @return \Illuminate\Support\Stringable
         * @static
         */
        public static function str($key, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->str($key, $default);
        }

        /**
         * Retrieve data from the instance as a Stringable instance.
         *
         * @param string $key
         * @param mixed $default
         * @return \Illuminate\Support\Stringable
         * @static
         */
        public static function string($key, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->string($key, $default);
        }

        /**
         * Retrieve data as a boolean value.
         *
         * Returns true when value is "1", "true", "on", and "yes". Otherwise, returns false.
         *
         * @param string|null $key
         * @param bool $default
         * @return bool
         * @static
         */
        public static function boolean($key = null, $default = false)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->boolean($key, $default);
        }

        /**
         * Retrieve data as an integer value.
         *
         * @param string $key
         * @param int $default
         * @return int
         * @static
         */
        public static function integer($key, $default = 0)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->integer($key, $default);
        }

        /**
         * Retrieve data as a float value.
         *
         * @param string $key
         * @param float $default
         * @return float
         * @static
         */
        public static function float($key, $default = 0.0)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->float($key, $default);
        }

        /**
         * Retrieve data clamped between min and max values.
         *
         * @param string $key
         * @param int|float $min
         * @param int|float $max
         * @param int|float $default
         * @return float|int
         * @static
         */
        public static function clamp($key, $min, $max, $default = 0)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->clamp($key, $min, $max, $default);
        }

        /**
         * Retrieve data from the instance as a Carbon instance.
         *
         * @param string $key
         * @param string|null $format
         * @param \UnitEnum|string|null $tz
         * @return \Illuminate\Support\Carbon|null
         * @throws \Carbon\Exceptions\InvalidFormatException
         * @static
         */
        public static function date($key, $format = null, $tz = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->date($key, $format, $tz);
        }

        /**
         * Retrieve data from the instance as a CarbonInterval instance.
         *
         * @param string $key
         * @param \Carbon\Unit|string|null $unit
         * @return \Carbon\CarbonInterval|null
         * @static
         */
        public static function interval($key, $unit = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->interval($key, $unit);
        }

        /**
         * Retrieve data from the instance as an enum.
         *
         * @template TEnum of \BackedEnum
         * @template TDefault of TEnum|null
         * @param string $key
         * @param class-string<TEnum> $enumClass
         * @param TDefault $default
         * @return TEnum|TDefault
         * @static
         */
        public static function enum($key, $enumClass, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->enum($key, $enumClass, $default);
        }

        /**
         * Retrieve data from the instance as an array of enums.
         *
         * @template TEnum of \BackedEnum
         * @param string $key
         * @param class-string<TEnum> $enumClass
         * @return TEnum[]
         * @static
         */
        public static function enums($key, $enumClass)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->enums($key, $enumClass);
        }

        /**
         * Retrieve data from the instance as an array.
         *
         * @param array|string|null $key
         * @return array
         * @static
         */
        public static function array($key = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->array($key);
        }

        /**
         * Retrieve data from the instance as a collection.
         *
         * @param array|string|null $key
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static function collect($key = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->collect($key);
        }

        /**
         * Get a subset containing the provided keys with values from the instance data.
         *
         * @param mixed $keys
         * @return array
         * @static
         */
        public static function only($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->only($keys);
        }

        /**
         * Get all of the data except for a specified array of items.
         *
         * @param mixed $keys
         * @return array
         * @static
         */
        public static function except($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->except($keys);
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) truthy.
         *
         * @template TWhenParameter
         * @template TWhenReturnType
         * @param (\Closure($this): TWhenParameter)|TWhenParameter|null $value
         * @param (callable($this, TWhenParameter): TWhenReturnType)|null $callback
         * @param (callable($this, TWhenParameter): TWhenReturnType)|null $default
         * @return $this|TWhenReturnType
         * @static
         */
        public static function when($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->when($value, $callback, $default);
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) falsy.
         *
         * @template TUnlessParameter
         * @template TUnlessReturnType
         * @param (\Closure($this): TUnlessParameter)|TUnlessParameter|null $value
         * @param (callable($this, TUnlessParameter): TUnlessReturnType)|null $callback
         * @param (callable($this, TUnlessParameter): TUnlessReturnType)|null $default
         * @return $this|TUnlessReturnType
         * @static
         */
        public static function unless($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->unless($value, $callback, $default);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Http\Request::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Http\Request::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Http\Request::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Http\Request::flushMacros();
        }

        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param array $rules
         * @param mixed $params
         * @static
         */
        public static function validate($rules, ...$params)
        {
            return \Illuminate\Http\Request::validate($rules, ...$params);
        }

        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param string $errorBag
         * @param array $rules
         * @param mixed $params
         * @static
         */
        public static function validateWithBag($errorBag, $rules, ...$params)
        {
            return \Illuminate\Http\Request::validateWithBag($errorBag, $rules, ...$params);
        }

        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $absolute
         * @static
         */
        public static function hasValidSignature($absolute = true)
        {
            return \Illuminate\Http\Request::hasValidSignature($absolute);
        }

        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static
         */
        public static function hasValidRelativeSignature()
        {
            return \Illuminate\Http\Request::hasValidRelativeSignature();
        }

        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $ignoreQuery
         * @param mixed $absolute
         * @static
         */
        public static function hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
        {
            return \Illuminate\Http\Request::hasValidSignatureWhileIgnoring($ignoreQuery, $absolute);
        }

        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $ignoreQuery
         * @static
         */
        public static function hasValidRelativeSignatureWhileIgnoring($ignoreQuery = [])
        {
            return \Illuminate\Http\Request::hasValidRelativeSignatureWhileIgnoring($ignoreQuery);
        }

            }
    /**
     * @see \Illuminate\Routing\ResponseFactory
     */
    class Response {
        /**
         * Create a new response instance.
         *
         * @param mixed $content
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response
         * @static
         */
        public static function make($content = '', $status = 200, $headers = [])
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->make($content, $status, $headers);
        }

        /**
         * Create a new "no content" response.
         *
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response
         * @static
         */
        public static function noContent($status = 204, $headers = [])
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->noContent($status, $headers);
        }

        /**
         * Create a new response for a given view.
         *
         * @param string|array $view
         * @param array $data
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response
         * @static
         */
        public static function view($view, $data = [], $status = 200, $headers = [])
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->view($view, $data, $status, $headers);
        }

        /**
         * Create a new JSON response instance.
         *
         * @param mixed $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Illuminate\Http\JsonResponse
         * @static
         */
        public static function json($data = [], $status = 200, $headers = [], $options = 0)
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->json($data, $status, $headers, $options);
        }

        /**
         * Create a new JSONP response instance.
         *
         * @param string $callback
         * @param mixed $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Illuminate\Http\JsonResponse
         * @static
         */
        public static function jsonp($callback, $data = [], $status = 200, $headers = [], $options = 0)
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->jsonp($callback, $data, $status, $headers, $options);
        }

        /**
         * Create a new event stream response.
         *
         * @param \Closure $callback
         * @param array $headers
         * @param \Illuminate\Http\StreamedEvent|string|null $endStreamWith
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @static
         */
        public static function eventStream($callback, $headers = [], $endStreamWith = '</stream>')
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->eventStream($callback, $headers, $endStreamWith);
        }

        /**
         * Create a new streamed response instance.
         *
         * @param callable|null $callback
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @static
         */
        public static function stream($callback, $status = 200, $headers = [])
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->stream($callback, $status, $headers);
        }

        /**
         * Create a new streamed JSON response instance.
         *
         * @param array $data
         * @param int $status
         * @param array $headers
         * @param int $encodingOptions
         * @return \Symfony\Component\HttpFoundation\StreamedJsonResponse
         * @static
         */
        public static function streamJson($data, $status = 200, $headers = [], $encodingOptions = 15)
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->streamJson($data, $status, $headers, $encodingOptions);
        }

        /**
         * Create a new streamed response instance as a file download.
         *
         * @param callable $callback
         * @param string|null $name
         * @param array $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @throws \Illuminate\Routing\Exceptions\StreamedResponseException
         * @static
         */
        public static function streamDownload($callback, $name = null, $headers = [], $disposition = 'attachment')
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->streamDownload($callback, $name, $headers, $disposition);
        }

        /**
         * Create a new file download response.
         *
         * @param \SplFileInfo|string $file
         * @param string|null $name
         * @param array $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
         * @static
         */
        public static function download($file, $name = null, $headers = [], $disposition = 'attachment')
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->download($file, $name, $headers, $disposition);
        }

        /**
         * Return the raw contents of a binary file.
         *
         * @param \SplFileInfo|string $file
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
         * @static
         */
        public static function file($file, $headers = [])
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->file($file, $headers);
        }

        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function redirectTo($path, $status = 302, $headers = [], $secure = null)
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->redirectTo($path, $status, $headers, $secure);
        }

        /**
         * Create a new redirect response to a named route.
         *
         * @param \BackedEnum|string $route
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function redirectToRoute($route, $parameters = [], $status = 302, $headers = [])
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->redirectToRoute($route, $parameters, $status, $headers);
        }

        /**
         * Create a new redirect response to a controller action.
         *
         * @param array|string $action
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function redirectToAction($action, $parameters = [], $status = 302, $headers = [])
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->redirectToAction($action, $parameters, $status, $headers);
        }

        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function redirectGuest($path, $status = 302, $headers = [], $secure = null)
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->redirectGuest($path, $status, $headers, $secure);
        }

        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse
         * @static
         */
        public static function redirectToIntended($default = '/', $status = 302, $headers = [], $secure = null)
        {
            /** @var \Illuminate\Routing\ResponseFactory $instance */
            return $instance->redirectToIntended($default, $status, $headers, $secure);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\ResponseFactory::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Routing\ResponseFactory::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\ResponseFactory::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Routing\ResponseFactory::flushMacros();
        }

            }
    /**
     * @method static \Illuminate\Routing\RouteRegistrar attribute(string $key, mixed $value)
     * @method static \Illuminate\Routing\RouteRegistrar metadata(array $metadata)
     * @method static \Illuminate\Routing\RouteRegistrar whereAlpha(array|string $parameters)
     * @method static \Illuminate\Routing\RouteRegistrar whereAlphaNumeric(array|string $parameters)
     * @method static \Illuminate\Routing\RouteRegistrar whereNumber(array|string $parameters)
     * @method static \Illuminate\Routing\RouteRegistrar whereUlid(array|string $parameters)
     * @method static \Illuminate\Routing\RouteRegistrar whereUuid(array|string $parameters)
     * @method static \Illuminate\Routing\RouteRegistrar whereIn(array|string $parameters, array $values)
     * @method static \Illuminate\Routing\RouteRegistrar as(string $value)
     * @method static \Illuminate\Routing\RouteRegistrar can(\UnitEnum|string $ability, array|string $models = [])
     * @method static \Illuminate\Routing\RouteRegistrar controller(string $controller)
     * @method static \Illuminate\Routing\RouteRegistrar domain(\BackedEnum|string $value)
     * @method static \Illuminate\Routing\RouteRegistrar middleware(array|string|null $middleware)
     * @method static \Illuminate\Routing\RouteRegistrar missing(\Closure $missing)
     * @method static \Illuminate\Routing\RouteRegistrar name(\BackedEnum|string $value)
     * @method static \Illuminate\Routing\RouteRegistrar namespace(string|null $value)
     * @method static \Illuminate\Routing\RouteRegistrar prefix(string $prefix)
     * @method static \Illuminate\Routing\RouteRegistrar scopeBindings()
     * @method static \Illuminate\Routing\RouteRegistrar where(array $where)
     * @method static \Illuminate\Routing\RouteRegistrar withoutMiddleware(array|string $middleware)
     * @method static \Illuminate\Routing\RouteRegistrar withoutScopedBindings()
     * @see \Illuminate\Routing\Router
     */
    class Route {
        /**
         * Register a new GET route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function get($uri, $action = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->get($uri, $action);
        }

        /**
         * Register a new POST route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function post($uri, $action = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->post($uri, $action);
        }

        /**
         * Register a new PUT route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function put($uri, $action = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->put($uri, $action);
        }

        /**
         * Register a new PATCH route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function patch($uri, $action = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->patch($uri, $action);
        }

        /**
         * Register a new DELETE route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function delete($uri, $action = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->delete($uri, $action);
        }

        /**
         * Register a new OPTIONS route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function options($uri, $action = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->options($uri, $action);
        }

        /**
         * Register a new route responding to all verbs.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function any($uri, $action = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->any($uri, $action);
        }

        /**
         * Register a new fallback route with the router.
         *
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function fallback($action)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->fallback($action);
        }

        /**
         * Create a redirect from one URI to another.
         *
         * @param string $uri
         * @param string $destination
         * @param int $status
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function redirect($uri, $destination, $status = 302)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->redirect($uri, $destination, $status);
        }

        /**
         * Create a permanent redirect from one URI to another.
         *
         * @param string $uri
         * @param string $destination
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function permanentRedirect($uri, $destination)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->permanentRedirect($uri, $destination);
        }

        /**
         * Register a new route that returns a view.
         *
         * @param string $uri
         * @param string $view
         * @param array $data
         * @param int|array $status
         * @param array $headers
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function view($uri, $view, $data = [], $status = 200, $headers = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->view($uri, $view, $data, $status, $headers);
        }

        /**
         * Register a new route with the given verbs.
         *
         * @param array|string $methods
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function match($methods, $uri, $action = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->match($methods, $uri, $action);
        }

        /**
         * Register an array of resource controllers.
         *
         * @param array $resources
         * @param array $options
         * @return void
         * @static
         */
        public static function resources($resources, $options = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->resources($resources, $options);
        }

        /**
         * Register an array of resource controllers that can be soft deleted.
         *
         * @param array $resources
         * @param array $options
         * @return void
         * @static
         */
        public static function softDeletableResources($resources, $options = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->softDeletableResources($resources, $options);
        }

        /**
         * Route a resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingResourceRegistration
         * @static
         */
        public static function resource($name, $controller, $options = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->resource($name, $controller, $options);
        }

        /**
         * Register an array of API resource controllers.
         *
         * @param array $resources
         * @param array $options
         * @return void
         * @static
         */
        public static function apiResources($resources, $options = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->apiResources($resources, $options);
        }

        /**
         * Route an API resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingResourceRegistration
         * @static
         */
        public static function apiResource($name, $controller, $options = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->apiResource($name, $controller, $options);
        }

        /**
         * Register an array of singleton resource controllers.
         *
         * @param array $singletons
         * @param array $options
         * @return void
         * @static
         */
        public static function singletons($singletons, $options = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->singletons($singletons, $options);
        }

        /**
         * Route a singleton resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingSingletonResourceRegistration
         * @static
         */
        public static function singleton($name, $controller, $options = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->singleton($name, $controller, $options);
        }

        /**
         * Register an array of API singleton resource controllers.
         *
         * @param array $singletons
         * @param array $options
         * @return void
         * @static
         */
        public static function apiSingletons($singletons, $options = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->apiSingletons($singletons, $options);
        }

        /**
         * Route an API singleton resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingSingletonResourceRegistration
         * @static
         */
        public static function apiSingleton($name, $controller, $options = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->apiSingleton($name, $controller, $options);
        }

        /**
         * Create a route group with shared attributes.
         *
         * @param array $attributes
         * @param \Closure|array|string $routes
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static function group($attributes, $routes)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->group($attributes, $routes);
        }

        /**
         * Merge the given array with the last group stack.
         *
         * @param array $new
         * @param bool $prependExistingPrefix
         * @return array
         * @static
         */
        public static function mergeWithLastGroup($new, $prependExistingPrefix = true)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->mergeWithLastGroup($new, $prependExistingPrefix);
        }

        /**
         * Get the prefix from the last group on the stack.
         *
         * @return string
         * @static
         */
        public static function getLastGroupPrefix()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getLastGroupPrefix();
        }

        /**
         * Add a route to the underlying route collection.
         *
         * @param array|string $methods
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function addRoute($methods, $uri, $action)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->addRoute($methods, $uri, $action);
        }

        /**
         * Create a new Route object.
         *
         * @param array|string $methods
         * @param string $uri
         * @param mixed $action
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function newRoute($methods, $uri, $action)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->newRoute($methods, $uri, $action);
        }

        /**
         * Return the response returned by the given route.
         *
         * @param string $name
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static function respondWithRoute($name)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->respondWithRoute($name);
        }

        /**
         * Dispatch the request to the application.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static function dispatch($request)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->dispatch($request);
        }

        /**
         * Dispatch the request to a route and return the response.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static function dispatchToRoute($request)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->dispatchToRoute($request);
        }

        /**
         * Gather the middleware for the given route with resolved class names.
         *
         * @param \Illuminate\Routing\Route $route
         * @return array
         * @static
         */
        public static function gatherRouteMiddleware($route)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->gatherRouteMiddleware($route);
        }

        /**
         * Resolve a flat array of middleware classes from the provided array.
         *
         * @param array $middleware
         * @param array $excluded
         * @return array
         * @static
         */
        public static function resolveMiddleware($middleware, $excluded = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->resolveMiddleware($middleware, $excluded);
        }

        /**
         * Create a response instance from the given value.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static function prepareResponse($request, $response)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->prepareResponse($request, $response);
        }

        /**
         * Static version of prepareResponse.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */
        public static function toResponse($request, $response)
        {
            return \Illuminate\Routing\Router::toResponse($request, $response);
        }

        /**
         * Substitute the route bindings onto the route.
         *
         * @param \Illuminate\Routing\Route $route
         * @return \Illuminate\Routing\Route
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
         * @throws \Illuminate\Routing\Exceptions\BackedEnumCaseNotFoundException
         * @static
         */
        public static function substituteBindings($route)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->substituteBindings($route);
        }

        /**
         * Substitute the implicit route bindings for the given route.
         *
         * @param \Illuminate\Routing\Route $route
         * @return void
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
         * @throws \Illuminate\Routing\Exceptions\BackedEnumCaseNotFoundException
         * @static
         */
        public static function substituteImplicitBindings($route)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->substituteImplicitBindings($route);
        }

        /**
         * Register a callback to run after implicit bindings are substituted.
         *
         * @param callable $callback
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static function substituteImplicitBindingsUsing($callback)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->substituteImplicitBindingsUsing($callback);
        }

        /**
         * Register a route matched event listener.
         *
         * @param string|callable $callback
         * @return void
         * @static
         */
        public static function matched($callback)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->matched($callback);
        }

        /**
         * Get all of the defined middleware short-hand names.
         *
         * @return array
         * @static
         */
        public static function getMiddleware()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getMiddleware();
        }

        /**
         * Register a short-hand name for a middleware.
         *
         * @param string $name
         * @param string $class
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static function aliasMiddleware($name, $class)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->aliasMiddleware($name, $class);
        }

        /**
         * Check if a middlewareGroup with the given name exists.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMiddlewareGroup($name)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->hasMiddlewareGroup($name);
        }

        /**
         * Get all of the defined middleware groups.
         *
         * @return array
         * @static
         */
        public static function getMiddlewareGroups()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getMiddlewareGroups();
        }

        /**
         * Register a group of middleware.
         *
         * @param string $name
         * @param array $middleware
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static function middlewareGroup($name, $middleware)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->middlewareGroup($name, $middleware);
        }

        /**
         * Add a middleware to the beginning of a middleware group.
         *
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static function prependMiddlewareToGroup($group, $middleware)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->prependMiddlewareToGroup($group, $middleware);
        }

        /**
         * Add a middleware to the end of a middleware group.
         *
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static function pushMiddlewareToGroup($group, $middleware)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->pushMiddlewareToGroup($group, $middleware);
        }

        /**
         * Remove the given middleware from the specified group.
         *
         * @param string $group
         * @param string $middleware
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static function removeMiddlewareFromGroup($group, $middleware)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->removeMiddlewareFromGroup($group, $middleware);
        }

        /**
         * Flush the router's middleware groups.
         *
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static function flushMiddlewareGroups()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->flushMiddlewareGroups();
        }

        /**
         * Add a new route parameter binder.
         *
         * @param string $key
         * @param string|callable $binder
         * @return void
         * @static
         */
        public static function bind($key, $binder)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->bind($key, $binder);
        }

        /**
         * Register a model binder for a wildcard.
         *
         * @param string $key
         * @param string $class
         * @param \Closure|null $callback
         * @return void
         * @static
         */
        public static function model($key, $class, $callback = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->model($key, $class, $callback);
        }

        /**
         * Get the binding callback for a given binding.
         *
         * @param string $key
         * @return \Closure|null
         * @static
         */
        public static function getBindingCallback($key)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getBindingCallback($key);
        }

        /**
         * Get the global "where" patterns.
         *
         * @return array
         * @static
         */
        public static function getPatterns()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getPatterns();
        }

        /**
         * Set a global where pattern on all routes.
         *
         * @param string $key
         * @param string $pattern
         * @return void
         * @static
         */
        public static function pattern($key, $pattern)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->pattern($key, $pattern);
        }

        /**
         * Set a group of global where patterns on all routes.
         *
         * @param array $patterns
         * @return void
         * @static
         */
        public static function patterns($patterns)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->patterns($patterns);
        }

        /**
         * Determine if the router currently has a group stack.
         *
         * @return bool
         * @static
         */
        public static function hasGroupStack()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->hasGroupStack();
        }

        /**
         * Get the current group stack for the router.
         *
         * @return array
         * @static
         */
        public static function getGroupStack()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getGroupStack();
        }

        /**
         * Get a route parameter for the current route.
         *
         * @param string $key
         * @param string|null $default
         * @return mixed
         * @static
         */
        public static function input($key, $default = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->input($key, $default);
        }

        /**
         * Get the request currently being dispatched.
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function getCurrentRequest()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getCurrentRequest();
        }

        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route|null
         * @static
         */
        public static function getCurrentRoute()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getCurrentRoute();
        }

        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route|null
         * @static
         */
        public static function current()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->current();
        }

        /**
         * Check if a route with the given name exists.
         *
         * @param string|array $name
         * @return bool
         * @static
         */
        public static function has($name)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->has($name);
        }

        /**
         * Get the current route name.
         *
         * @return string|null
         * @static
         */
        public static function currentRouteName()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->currentRouteName();
        }

        /**
         * Alias for the "currentRouteNamed" method.
         *
         * @param mixed $patterns
         * @return bool
         * @static
         */
        public static function is(...$patterns)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->is(...$patterns);
        }

        /**
         * Determine if the current route matches a pattern.
         *
         * @param mixed $patterns
         * @return bool
         * @static
         */
        public static function currentRouteNamed(...$patterns)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->currentRouteNamed(...$patterns);
        }

        /**
         * Get the current route action.
         *
         * @return string|null
         * @static
         */
        public static function currentRouteAction()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->currentRouteAction();
        }

        /**
         * Alias for the "currentRouteUses" method.
         *
         * @param array|string $patterns
         * @return bool
         * @static
         */
        public static function uses(...$patterns)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->uses(...$patterns);
        }

        /**
         * Determine if the current route action matches a given action.
         *
         * @param string $action
         * @return bool
         * @static
         */
        public static function currentRouteUses($action)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->currentRouteUses($action);
        }

        /**
         * Set the unmapped global resource parameters to singular.
         *
         * @param bool $singular
         * @return void
         * @static
         */
        public static function singularResourceParameters($singular = true)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->singularResourceParameters($singular);
        }

        /**
         * Set the global resource parameter mapping.
         *
         * @param array $parameters
         * @return void
         * @static
         */
        public static function resourceParameters($parameters = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->resourceParameters($parameters);
        }

        /**
         * Get or set the verbs used in the resource URIs.
         *
         * @param array $verbs
         * @return array|null
         * @static
         */
        public static function resourceVerbs($verbs = [])
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->resourceVerbs($verbs);
        }

        /**
         * Get the underlying route collection.
         *
         * @return \Illuminate\Routing\RouteCollectionInterface
         * @static
         */
        public static function getRoutes()
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->getRoutes();
        }

        /**
         * Set the route collection instance.
         *
         * @param \Illuminate\Routing\RouteCollection $routes
         * @return void
         * @static
         */
        public static function setRoutes($routes)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->setRoutes($routes);
        }

        /**
         * Set the compiled route collection instance.
         *
         * @param array $routes
         * @return void
         * @static
         */
        public static function setCompiledRoutes($routes)
        {
            /** @var \Illuminate\Routing\Router $instance */
            $instance->setCompiledRoutes($routes);
        }

        /**
         * Remove any duplicate middleware from the given array.
         *
         * @param array $middleware
         * @return array
         * @static
         */
        public static function uniqueMiddleware($middleware)
        {
            return \Illuminate\Routing\Router::uniqueMiddleware($middleware);
        }

        /**
         * Set the container instance used by the router.
         *
         * @param \Illuminate\Container\Container $container
         * @return \Illuminate\Routing\Router
         * @static
         */
        public static function setContainer($container)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->setContainer($container);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\Router::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Routing\Router::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\Router::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Routing\Router::flushMacros();
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static function macroCall($method, $parameters)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->macroCall($method, $parameters);
        }

        /**
         * Call the given Closure with this instance then return the instance.
         *
         * @param (callable($this): mixed)|null $callback
         * @return ($callback is null ? \Illuminate\Support\HigherOrderTapProxy : $this)
         * @static
         */
        public static function tap($callback = null)
        {
            /** @var \Illuminate\Routing\Router $instance */
            return $instance->tap($callback);
        }

        /**
         * @see \Livewire\Mechanisms\HandleRouting\HandleRouting::register()
         * @param mixed $uri
         * @param mixed $component
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function livewire($uri, $component)
        {
            return \Illuminate\Routing\Router::livewire($uri, $component);
        }

        /**
         * @see \Laravel\Ui\AuthRouteMethods::auth()
         * @param mixed $options
         * @static
         */
        public static function auth($options = [])
        {
            return \Illuminate\Routing\Router::auth($options);
        }

        /**
         * @see \Laravel\Ui\AuthRouteMethods::resetPassword()
         * @static
         */
        public static function resetPassword()
        {
            return \Illuminate\Routing\Router::resetPassword();
        }

        /**
         * @see \Laravel\Ui\AuthRouteMethods::confirmPassword()
         * @static
         */
        public static function confirmPassword()
        {
            return \Illuminate\Routing\Router::confirmPassword();
        }

        /**
         * @see \Laravel\Ui\AuthRouteMethods::emailVerification()
         * @static
         */
        public static function emailVerification()
        {
            return \Illuminate\Routing\Router::emailVerification();
        }

            }
    /**
     * @see \Illuminate\Database\Schema\Builder
     */
    class Schema {
        /**
         * Drop all tables from the database.
         *
         * @return void
         * @static
         */
        public static function dropAllTables()
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->dropAllTables();
        }

        /**
         * Drop all views from the database.
         *
         * @return void
         * @static
         */
        public static function dropAllViews()
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->dropAllViews();
        }

        /**
         * Get the names of current schemas for the connection.
         *
         * @return string[]
         * @static
         */
        public static function getCurrentSchemaListing()
        {
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getCurrentSchemaListing();
        }

        /**
         * Set the default string length for migrations.
         *
         * @param non-negative-int $length
         * @return void
         * @static
         */
        public static function defaultStringLength($length)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            \Illuminate\Database\Schema\MySqlBuilder::defaultStringLength($length);
        }

        /**
         * Set the default time precision for migrations.
         *
         * @static
         */
        public static function defaultTimePrecision($precision)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            return \Illuminate\Database\Schema\MySqlBuilder::defaultTimePrecision($precision);
        }

        /**
         * Set the default morph key type for migrations.
         *
         * @param string $type
         * @return void
         * @throws \InvalidArgumentException
         * @static
         */
        public static function defaultMorphKeyType($type)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            \Illuminate\Database\Schema\MySqlBuilder::defaultMorphKeyType($type);
        }

        /**
         * Set the default morph key type for migrations to UUIDs.
         *
         * @return void
         * @static
         */
        public static function morphUsingUuids()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            \Illuminate\Database\Schema\MySqlBuilder::morphUsingUuids();
        }

        /**
         * Set the default morph key type for migrations to ULIDs.
         *
         * @return void
         * @static
         */
        public static function morphUsingUlids()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            \Illuminate\Database\Schema\MySqlBuilder::morphUsingUlids();
        }

        /**
         * Create a database in the schema.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function createDatabase($name)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->createDatabase($name);
        }

        /**
         * Drop a database from the schema if the database exists.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function dropDatabaseIfExists($name)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->dropDatabaseIfExists($name);
        }

        /**
         * Get the schemas that belong to the connection.
         *
         * @return \Illuminate\Database\Schema\list<array{name: string, path: string|null, default: bool}>
         * @static
         */
        public static function getSchemas()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getSchemas();
        }

        /**
         * Determine if the given table exists.
         *
         * @param string $table
         * @return bool
         * @static
         */
        public static function hasTable($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->hasTable($table);
        }

        /**
         * Determine if the given view exists.
         *
         * @param string $view
         * @return bool
         * @static
         */
        public static function hasView($view)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->hasView($view);
        }

        /**
         * Get the tables that belong to the connection.
         *
         * @param string|string[]|null $schema
         * @return \Illuminate\Database\Schema\list<array{name: string, schema: string|null, schema_qualified_name: string, size: int|null, comment: string|null, collation: string|null, engine: string|null}>
         * @static
         */
        public static function getTables($schema = null)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getTables($schema);
        }

        /**
         * Get the names of the tables that belong to the connection.
         *
         * @param string|string[]|null $schema
         * @param bool $schemaQualified
         * @return list<string>
         * @static
         */
        public static function getTableListing($schema = null, $schemaQualified = true)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getTableListing($schema, $schemaQualified);
        }

        /**
         * Get the views that belong to the connection.
         *
         * @param string|string[]|null $schema
         * @return \Illuminate\Database\Schema\list<array{name: string, schema: string|null, schema_qualified_name: string, definition: string}>
         * @static
         */
        public static function getViews($schema = null)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getViews($schema);
        }

        /**
         * Get the user-defined types that belong to the connection.
         *
         * @param string|string[]|null $schema
         * @return \Illuminate\Database\Schema\list<array{name: string, schema: string, schema_qualified_name: string, type: string, category: string, implicit: bool}>
         * @static
         */
        public static function getTypes($schema = null)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getTypes($schema);
        }

        /**
         * Determine if the given table has a given column.
         *
         * @param string $table
         * @param string $column
         * @return bool
         * @static
         */
        public static function hasColumn($table, $column)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->hasColumn($table, $column);
        }

        /**
         * Determine if the given table has given columns.
         *
         * @param string $table
         * @param array<string> $columns
         * @return bool
         * @static
         */
        public static function hasColumns($table, $columns)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->hasColumns($table, $columns);
        }

        /**
         * Execute a table builder callback if the given table has a given column.
         *
         * @param string $table
         * @param string $column
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function whenTableHasColumn($table, $column, $callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->whenTableHasColumn($table, $column, $callback);
        }

        /**
         * Execute a table builder callback if the given table doesn't have a given column.
         *
         * @param string $table
         * @param string $column
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function whenTableDoesntHaveColumn($table, $column, $callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->whenTableDoesntHaveColumn($table, $column, $callback);
        }

        /**
         * Execute a table builder callback if the given table has a given index.
         *
         * @param string $table
         * @param string|array $index
         * @param \Closure $callback
         * @param string|null $type
         * @return void
         * @static
         */
        public static function whenTableHasIndex($table, $index, $callback, $type = null)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->whenTableHasIndex($table, $index, $callback, $type);
        }

        /**
         * Execute a table builder callback if the given table doesn't have a given index.
         *
         * @param string $table
         * @param string|array $index
         * @param \Closure $callback
         * @param string|null $type
         * @return void
         * @static
         */
        public static function whenTableDoesntHaveIndex($table, $index, $callback, $type = null)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->whenTableDoesntHaveIndex($table, $index, $callback, $type);
        }

        /**
         * Get the data type for the given column name.
         *
         * @param string $table
         * @param string $column
         * @param bool $fullDefinition
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static function getColumnType($table, $column, $fullDefinition = false)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getColumnType($table, $column, $fullDefinition);
        }

        /**
         * Get the column listing for a given table.
         *
         * @param string $table
         * @return list<string>
         * @static
         */
        public static function getColumnListing($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getColumnListing($table);
        }

        /**
         * Get the columns for a given table.
         *
         * @param string $table
         * @return \Illuminate\Database\Schema\list<array{name: string, type: string, type_name: string, collation: string|null, nullable: bool, default: mixed, auto_increment: bool, comment: string|null, generation: array{type: string, expression: string|null}|null}>
         * @static
         */
        public static function getColumns($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getColumns($table);
        }

        /**
         * Get the indexes for a given table.
         *
         * @param string $table
         * @return \Illuminate\Database\Schema\list<array{name: string, columns: list<string>, type: string, unique: bool, primary: bool}>
         * @static
         */
        public static function getIndexes($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getIndexes($table);
        }

        /**
         * Get the names of the indexes for a given table.
         *
         * @param string $table
         * @return list<string>
         * @static
         */
        public static function getIndexListing($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getIndexListing($table);
        }

        /**
         * Determine if the given table has a given index.
         *
         * @param string $table
         * @param string|array $index
         * @param string|null $type
         * @return bool
         * @static
         */
        public static function hasIndex($table, $index, $type = null)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->hasIndex($table, $index, $type);
        }

        /**
         * Determine if the table has a given foreign key.
         *
         * @param string $table
         * @param array|string $foreignKey
         * @return bool
         * @static
         */
        public static function hasForeignKey($table, $foreignKey)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->hasForeignKey($table, $foreignKey);
        }

        /**
         * Get the foreign keys for a given table.
         *
         * @param string $table
         * @return \Illuminate\Database\Schema\list<array{name: string|null, columns: list<string>, foreign_schema: string|null, foreign_table: string, foreign_columns: list<string>, on_update: string|null, on_delete: string|null}>
         * @static
         */
        public static function getForeignKeys($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getForeignKeys($table);
        }

        /**
         * Modify a table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function table($table, $callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->table($table, $callback);
        }

        /**
         * Create a new table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function create($table, $callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->create($table, $callback);
        }

        /**
         * Drop a table from the schema.
         *
         * @param string $table
         * @return void
         * @static
         */
        public static function drop($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->drop($table);
        }

        /**
         * Drop a table from the schema if it exists.
         *
         * @param string $table
         * @return void
         * @static
         */
        public static function dropIfExists($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->dropIfExists($table);
        }

        /**
         * Drop columns from a table schema.
         *
         * @param string $table
         * @param string|array<string> $columns
         * @return void
         * @static
         */
        public static function dropColumns($table, $columns)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->dropColumns($table, $columns);
        }

        /**
         * Drop all types from the database.
         *
         * @return void
         * @throws \LogicException
         * @static
         */
        public static function dropAllTypes()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->dropAllTypes();
        }

        /**
         * Rename a table on the schema.
         *
         * @param string $from
         * @param string $to
         * @return void
         * @static
         */
        public static function rename($from, $to)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->rename($from, $to);
        }

        /**
         * Enable foreign key constraints.
         *
         * @return bool
         * @static
         */
        public static function enableForeignKeyConstraints()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->enableForeignKeyConstraints();
        }

        /**
         * Disable foreign key constraints.
         *
         * @return bool
         * @static
         */
        public static function disableForeignKeyConstraints()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->disableForeignKeyConstraints();
        }

        /**
         * Disable foreign key constraints during the execution of a callback.
         *
         * @template TReturn
         * @param (\Closure(): TReturn) $callback
         * @return TReturn
         * @static
         */
        public static function withoutForeignKeyConstraints($callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->withoutForeignKeyConstraints($callback);
        }

        /**
         * Create the vector extension on the schema if it does not exist.
         *
         * @param string|null $schema
         * @return void
         * @static
         */
        public static function ensureVectorExtensionExists($schema = null)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->ensureVectorExtensionExists($schema);
        }

        /**
         * Create a new extension on the schema if it does not exist.
         *
         * @param string $name
         * @param string|null $schema
         * @return void
         * @throws \RuntimeException
         * @static
         */
        public static function ensureExtensionExists($name, $schema = null)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->ensureExtensionExists($name, $schema);
        }

        /**
         * Get the default schema name for the connection.
         *
         * @return string|null
         * @static
         */
        public static function getCurrentSchemaName()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getCurrentSchemaName();
        }

        /**
         * Parse the given database object reference and extract the schema and table.
         *
         * @param string $reference
         * @param string|bool|null $withDefaultSchema
         * @return array{string|null, string}
         * @throws \InvalidArgumentException
         * @static
         */
        public static function parseSchemaAndTable($reference, $withDefaultSchema = null)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->parseSchemaAndTable($reference, $withDefaultSchema);
        }

        /**
         * Get the database connection instance.
         *
         * @return \Illuminate\Database\Connection
         * @static
         */
        public static function getConnection()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            return $instance->getConnection();
        }

        /**
         * Set the Schema Blueprint resolver callback.
         *
         * @param \Closure(\Illuminate\Database\Connection, string, \Closure|null):  \Illuminate\Database\Schema\Blueprint  $resolver
         * @return void
         * @static
         */
        public static function blueprintResolver($resolver)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            /** @var \Illuminate\Database\Schema\MySqlBuilder $instance */
            $instance->blueprintResolver($resolver);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            \Illuminate\Database\Schema\MySqlBuilder::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            \Illuminate\Database\Schema\MySqlBuilder::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            return \Illuminate\Database\Schema\MySqlBuilder::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder 
            \Illuminate\Database\Schema\MySqlBuilder::flushMacros();
        }

            }
    /**
     * @see \Illuminate\Session\SessionManager
     */
    class Session {
        /**
         * Determine if requests for the same session should wait for each to finish before executing.
         *
         * @return bool
         * @static
         */
        public static function shouldBlock()
        {
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->shouldBlock();
        }

        /**
         * Get the name of the cache store / driver that should be used to acquire session locks.
         *
         * @return string|null
         * @static
         */
        public static function blockDriver()
        {
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->blockDriver();
        }

        /**
         * Get the maximum number of seconds the session lock should be held for.
         *
         * @return int
         * @static
         */
        public static function defaultRouteBlockLockSeconds()
        {
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->defaultRouteBlockLockSeconds();
        }

        /**
         * Get the maximum number of seconds to wait while attempting to acquire a route block session lock.
         *
         * @return int
         * @static
         */
        public static function defaultRouteBlockWaitSeconds()
        {
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->defaultRouteBlockWaitSeconds();
        }

        /**
         * Get the session configuration.
         *
         * @return array
         * @static
         */
        public static function getSessionConfig()
        {
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->getSessionConfig();
        }

        /**
         * Get the default session driver name.
         *
         * @return string|null
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Set the default session driver name.
         *
         * @param \UnitEnum|string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name)
        {
            /** @var \Illuminate\Session\SessionManager $instance */
            $instance->setDefaultDriver($name);
        }

        /**
         * Get a driver instance.
         *
         * @param \UnitEnum|string|null $driver
         * @return mixed
         * @throws \InvalidArgumentException
         * @static
         */
        public static function driver($driver = null)
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->driver($driver);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param-closure-this $this  $callback
         * @return \Illuminate\Session\SessionManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Get all of the created "drivers".
         *
         * @return array<string, mixed>
         * @static
         */
        public static function getDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->getDrivers();
        }

        /**
         * Get the container instance used by the manager.
         *
         * @return \Illuminate\Contracts\Container\Container
         * @static
         */
        public static function getContainer()
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->getContainer();
        }

        /**
         * Set the container instance used by the manager.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return \Illuminate\Session\SessionManager
         * @static
         */
        public static function setContainer($container)
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->setContainer($container);
        }

        /**
         * Forget all of the resolved driver instances.
         *
         * @return \Illuminate\Session\SessionManager
         * @static
         */
        public static function forgetDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Illuminate\Session\SessionManager $instance */
            return $instance->forgetDrivers();
        }

        /**
         * Start the session, reading the data from a handler.
         *
         * @return bool
         * @static
         */
        public static function start()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->start();
        }

        /**
         * Save the session data to storage.
         *
         * @return void
         * @static
         */
        public static function save()
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->save();
        }

        /**
         * Age the flash data for the session.
         *
         * @return void
         * @static
         */
        public static function ageFlashData()
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->ageFlashData();
        }

        /**
         * Get all of the session data.
         *
         * @return array
         * @static
         */
        public static function all()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->all();
        }

        /**
         * Get a subset of the session data.
         *
         * @param array $keys
         * @return array
         * @static
         */
        public static function only($keys)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->only($keys);
        }

        /**
         * Get all the session data except for a specified array of items.
         *
         * @param array $keys
         * @return array
         * @static
         */
        public static function except($keys)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->except($keys);
        }

        /**
         * Checks if a key exists.
         *
         * @param \UnitEnum|string|array $key
         * @return bool
         * @static
         */
        public static function exists($key)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->exists($key);
        }

        /**
         * Determine if the given key is missing from the session data.
         *
         * @param \UnitEnum|string|array $key
         * @return bool
         * @static
         */
        public static function missing($key)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->missing($key);
        }

        /**
         * Determine if a key is present and not null.
         *
         * @param \UnitEnum|string|array $key
         * @return bool
         * @static
         */
        public static function has($key)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->has($key);
        }

        /**
         * Determine if any of the given keys are present and not null.
         *
         * @param \UnitEnum|string|array $key
         * @return bool
         * @static
         */
        public static function hasAny($key)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->hasAny($key);
        }

        /**
         * Get an item from the session.
         *
         * @param \UnitEnum|string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function get($key, $default = null)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->get($key, $default);
        }

        /**
         * Get the value of a given key and then forget it.
         *
         * @param \UnitEnum|string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function pull($key, $default = null)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->pull($key, $default);
        }

        /**
         * Determine if the session contains old input.
         *
         * @param string|null $key
         * @return bool
         * @static
         */
        public static function hasOldInput($key = null)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->hasOldInput($key);
        }

        /**
         * Get the requested item from the flashed input array.
         *
         * @param string|null $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function getOldInput($key = null, $default = null)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->getOldInput($key, $default);
        }

        /**
         * Replace the given session attributes entirely.
         *
         * @param array $attributes
         * @return void
         * @static
         */
        public static function replace($attributes)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->replace($attributes);
        }

        /**
         * Put a key / value pair or array of key / value pairs in the session.
         *
         * @param \UnitEnum|string|array $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function put($key, $value = null)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->put($key, $value);
        }

        /**
         * Get an item from the session, or store the default value.
         *
         * @param \UnitEnum|string $key
         * @param \Closure $callback
         * @return mixed
         * @static
         */
        public static function remember($key, $callback)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->remember($key, $callback);
        }

        /**
         * Push a value onto a session array.
         *
         * @param \UnitEnum|string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function push($key, $value)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->push($key, $value);
        }

        /**
         * Increment the value of an item in the session.
         *
         * @param \UnitEnum|string $key
         * @param int $amount
         * @return mixed
         * @static
         */
        public static function increment($key, $amount = 1)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->increment($key, $amount);
        }

        /**
         * Decrement the value of an item in the session.
         *
         * @param \UnitEnum|string $key
         * @param int $amount
         * @return int
         * @static
         */
        public static function decrement($key, $amount = 1)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->decrement($key, $amount);
        }

        /**
         * Flash a key / value pair to the session.
         *
         * @param \UnitEnum|string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function flash($key, $value = true)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->flash($key, $value);
        }

        /**
         * Flash a key / value pair to the session for immediate use.
         *
         * @param \UnitEnum|string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function now($key, $value)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->now($key, $value);
        }

        /**
         * Reflash all of the session flash data.
         *
         * @return void
         * @static
         */
        public static function reflash()
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->reflash();
        }

        /**
         * Reflash a subset of the current flash data.
         *
         * @param mixed $keys
         * @return void
         * @static
         */
        public static function keep($keys = null)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->keep($keys);
        }

        /**
         * Flash an input array to the session.
         *
         * @param array $value
         * @return void
         * @static
         */
        public static function flashInput($value)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->flashInput($value);
        }

        /**
         * Get the session cache instance.
         *
         * @return \Illuminate\Contracts\Cache\Repository
         * @static
         */
        public static function cache()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->cache();
        }

        /**
         * Remove an item from the session, returning its value.
         *
         * @param \UnitEnum|string $key
         * @return mixed
         * @static
         */
        public static function remove($key)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->remove($key);
        }

        /**
         * Remove one or many items from the session.
         *
         * @param \UnitEnum|string|array $keys
         * @return void
         * @static
         */
        public static function forget($keys)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->forget($keys);
        }

        /**
         * Remove all of the items from the session.
         *
         * @return void
         * @static
         */
        public static function flush()
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->flush();
        }

        /**
         * Flush the session data and regenerate the ID.
         *
         * @return bool
         * @static
         */
        public static function invalidate()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->invalidate();
        }

        /**
         * Generate a new session identifier.
         *
         * @param bool $destroy
         * @return bool
         * @static
         */
        public static function regenerate($destroy = false)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->regenerate($destroy);
        }

        /**
         * Generate a new session ID for the session.
         *
         * @param bool $destroy
         * @return bool
         * @static
         */
        public static function migrate($destroy = false)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->migrate($destroy);
        }

        /**
         * Determine if the session has been started.
         *
         * @return bool
         * @static
         */
        public static function isStarted()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->isStarted();
        }

        /**
         * Get the name of the session.
         *
         * @return string
         * @static
         */
        public static function getName()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->getName();
        }

        /**
         * Set the name of the session.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setName($name)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->setName($name);
        }

        /**
         * Get the current session ID.
         *
         * @return string
         * @static
         */
        public static function id()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->id();
        }

        /**
         * Get the current session ID.
         *
         * @return string
         * @static
         */
        public static function getId()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->getId();
        }

        /**
         * Set the session ID.
         *
         * @param string|null $id
         * @return void
         * @static
         */
        public static function setId($id)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->setId($id);
        }

        /**
         * Determine if this is a valid session ID.
         *
         * @param string|null $id
         * @return bool
         * @static
         */
        public static function isValidId($id)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->isValidId($id);
        }

        /**
         * Set the existence of the session on the handler if applicable.
         *
         * @param bool $value
         * @return void
         * @static
         */
        public static function setExists($value)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->setExists($value);
        }

        /**
         * Get the CSRF token value.
         *
         * @return string
         * @static
         */
        public static function token()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->token();
        }

        /**
         * Regenerate the CSRF token value.
         *
         * @return void
         * @static
         */
        public static function regenerateToken()
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->regenerateToken();
        }

        /**
         * Determine if the previous URI is available.
         *
         * @return bool
         * @static
         */
        public static function hasPreviousUri()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->hasPreviousUri();
        }

        /**
         * Get the previous URL from the session as a URI instance.
         *
         * @return \Illuminate\Support\Uri
         * @throws \RuntimeException
         * @static
         */
        public static function previousUri()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->previousUri();
        }

        /**
         * Get the previous URL from the session.
         *
         * @return string|null
         * @static
         */
        public static function previousUrl()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->previousUrl();
        }

        /**
         * Set the "previous" URL in the session.
         *
         * @param string $url
         * @return void
         * @static
         */
        public static function setPreviousUrl($url)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->setPreviousUrl($url);
        }

        /**
         * Get the previous route name from the session.
         *
         * @return string|null
         * @static
         */
        public static function previousRoute()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->previousRoute();
        }

        /**
         * Set the "previous" route name in the session.
         *
         * @param string|null $route
         * @return void
         * @static
         */
        public static function setPreviousRoute($route)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->setPreviousRoute($route);
        }

        /**
         * Specify that the user has confirmed their password.
         *
         * @return void
         * @static
         */
        public static function passwordConfirmed()
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->passwordConfirmed();
        }

        /**
         * Get the underlying session handler implementation.
         *
         * @return \SessionHandlerInterface
         * @static
         */
        public static function getHandler()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->getHandler();
        }

        /**
         * Set the underlying session handler implementation.
         *
         * @param \SessionHandlerInterface $handler
         * @return \SessionHandlerInterface
         * @static
         */
        public static function setHandler($handler)
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->setHandler($handler);
        }

        /**
         * Determine if the session handler needs a request.
         *
         * @return bool
         * @static
         */
        public static function handlerNeedsRequest()
        {
            /** @var \Illuminate\Session\Store $instance */
            return $instance->handlerNeedsRequest();
        }

        /**
         * Set the request on the handler instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return void
         * @static
         */
        public static function setRequestOnHandler($request)
        {
            /** @var \Illuminate\Session\Store $instance */
            $instance->setRequestOnHandler($request);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Session\Store::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Session\Store::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Session\Store::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Session\Store::flushMacros();
        }

            }
    /**
     * @method static bool has(string $location)
     * @method static string read(string $location)
     * @method static \League\Flysystem\DirectoryListing listContents(string $location, bool $deep = false)
     * @method static int fileSize(string $path)
     * @method static string visibility(string $path)
     * @method static void write(string $location, string $contents, array $config = [])
     * @method static void createDirectory(string $location, array $config = [])
     * @see \Illuminate\Filesystem\FilesystemManager
     */
    class Storage {
        /**
         * Get a filesystem instance.
         *
         * @param \UnitEnum|string|null $name
         * @return \Illuminate\Filesystem\LocalFilesystemAdapter
         * @static
         */
        public static function drive($name = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->drive($name);
        }

        /**
         * Get a filesystem instance.
         *
         * @param \UnitEnum|string|null $name
         * @return \Illuminate\Filesystem\LocalFilesystemAdapter
         * @static
         */
        public static function disk($name = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->disk($name);
        }

        /**
         * Get a default cloud filesystem instance.
         *
         * @return \Illuminate\Contracts\Filesystem\Cloud
         * @static
         */
        public static function cloud()
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->cloud();
        }

        /**
         * Build an on-demand disk.
         *
         * @param string|array $config
         * @return \Illuminate\Filesystem\LocalFilesystemAdapter
         * @static
         */
        public static function build($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->build($config);
        }

        /**
         * Create an instance of the local driver.
         *
         * @param array $config
         * @param string $name
         * @return \Illuminate\Filesystem\LocalFilesystemAdapter
         * @static
         */
        public static function createLocalDriver($config, $name = 'local')
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createLocalDriver($config, $name);
        }

        /**
         * Create an instance of the ftp driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\LocalFilesystemAdapter
         * @static
         */
        public static function createFtpDriver($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createFtpDriver($config);
        }

        /**
         * Create an instance of the sftp driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\LocalFilesystemAdapter
         * @static
         */
        public static function createSftpDriver($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createSftpDriver($config);
        }

        /**
         * Create an instance of the Amazon S3 driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud
         * @static
         */
        public static function createS3Driver($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createS3Driver($config);
        }

        /**
         * Create a scoped driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\LocalFilesystemAdapter
         * @throws \InvalidArgumentException
         * @static
         */
        public static function createScopedDriver($config)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->createScopedDriver($config);
        }

        /**
         * Set the given disk instance.
         *
         * @param string $name
         * @param mixed $disk
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static function set($name, $disk)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->set($name, $disk);
        }

        /**
         * Get the default driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Get the default cloud driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultCloudDriver()
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->getDefaultCloudDriver();
        }

        /**
         * Unset the given disk instances.
         *
         * @param array|string $disk
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static function forgetDisk($disk)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->forgetDisk($disk);
        }

        /**
         * Disconnect the given disk and remove from local cache.
         *
         * @param string|null $name
         * @return void
         * @static
         */
        public static function purge($name = null)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            $instance->purge($name);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @param-closure-this $this  $callback
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Filesystem\FilesystemManager
         * @static
         */
        public static function setApplication($app)
        {
            /** @var \Illuminate\Filesystem\FilesystemManager $instance */
            return $instance->setApplication($app);
        }

        /**
         * Determine if temporary URLs can be generated.
         *
         * @return bool
         * @static
         */
        public static function providesTemporaryUrls()
        {
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->providesTemporaryUrls();
        }

        /**
         * Determine if temporary upload URLs can be generated.
         *
         * @return bool
         * @static
         */
        public static function providesTemporaryUploadUrls()
        {
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->providesTemporaryUploadUrls();
        }

        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string
         * @throws \RuntimeException
         * @static
         */
        public static function temporaryUrl($path, $expiration, $options = [])
        {
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->temporaryUrl($path, $expiration, $options);
        }

        /**
         * Get a temporary upload URL for the file at the given path.
         *
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return array
         * @throws \RuntimeException
         * @static
         */
        public static function temporaryUploadUrl($path, $expiration, $options = [])
        {
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->temporaryUploadUrl($path, $expiration, $options);
        }

        /**
         * Specify the name of the disk the adapter is managing.
         *
         * @param string $disk
         * @return \Illuminate\Filesystem\LocalFilesystemAdapter
         * @static
         */
        public static function diskName($disk)
        {
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->diskName($disk);
        }

        /**
         * Indicate that signed URLs should serve the corresponding files.
         *
         * @param bool $serve
         * @param \Closure|null $urlGeneratorResolver
         * @return \Illuminate\Filesystem\LocalFilesystemAdapter
         * @static
         */
        public static function shouldServeSignedUrls($serve = true, $urlGeneratorResolver = null)
        {
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->shouldServeSignedUrls($serve, $urlGeneratorResolver);
        }

        /**
         * Assert that the given file or directory exists.
         *
         * @param string|array $path
         * @param string|null $content
         * @return \Illuminate\Filesystem\LocalFilesystemAdapter
         * @static
         */
        public static function assertExists($path, $content = null)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->assertExists($path, $content);
        }

        /**
         * Assert that the number of files in path equals the expected count.
         *
         * @param string $path
         * @param int $count
         * @param bool $recursive
         * @return \Illuminate\Filesystem\LocalFilesystemAdapter
         * @static
         */
        public static function assertCount($path, $count, $recursive = false)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->assertCount($path, $count, $recursive);
        }

        /**
         * Assert that the given file or directory does not exist.
         *
         * @param string|array $path
         * @return \Illuminate\Filesystem\LocalFilesystemAdapter
         * @static
         */
        public static function assertMissing($path)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->assertMissing($path);
        }

        /**
         * Assert that the given directory is empty.
         *
         * @param string $path
         * @return \Illuminate\Filesystem\LocalFilesystemAdapter
         * @static
         */
        public static function assertDirectoryEmpty($path)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->assertDirectoryEmpty($path);
        }

        /**
         * Assert that the disk contains no files.
         *
         * @return \Illuminate\Filesystem\LocalFilesystemAdapter
         * @static
         */
        public static function assertEmpty()
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->assertEmpty();
        }

        /**
         * Determine if a file or directory exists.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function exists($path)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->exists($path);
        }

        /**
         * Determine if a file or directory is missing.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function missing($path)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->missing($path);
        }

        /**
         * Determine if a file exists.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function fileExists($path)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->fileExists($path);
        }

        /**
         * Determine if a file is missing.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function fileMissing($path)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->fileMissing($path);
        }

        /**
         * Determine if a directory exists.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function directoryExists($path)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->directoryExists($path);
        }

        /**
         * Determine if a directory is missing.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function directoryMissing($path)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->directoryMissing($path);
        }

        /**
         * Get the full path to the file that exists at the given relative path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function path($path)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->path($path);
        }

        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @return string|null
         * @static
         */
        public static function get($path)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->get($path);
        }

        /**
         * Get the contents of a file as decoded JSON.
         *
         * @param string $path
         * @param int $flags
         * @return array|null
         * @static
         */
        public static function json($path, $flags = 0)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->json($path, $flags);
        }

        /**
         * Create a streamed response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @throws UnableToRetrieveMetadata
         * @static
         */
        public static function response($path, $name = null, $headers = [], $disposition = 'inline')
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->response($path, $name, $headers, $disposition);
        }

        /**
         * Create a streamed download response for a given file.
         *
         * @param \Illuminate\Http\Request $request
         * @param string $path
         * @param string|null $name
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @throws UnableToRetrieveMetadata
         * @static
         */
        public static function serve($request, $path, $name = null, $headers = [])
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->serve($request, $path, $name, $headers);
        }

        /**
         * Create a streamed download response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse
         * @throws UnableToRetrieveMetadata
         * @static
         */
        public static function download($path, $name = null, $headers = [])
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->download($path, $name, $headers);
        }

        /**
         * Create an image instance from a file in storage.
         *
         * @static
         */
        public static function image($path)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->image($path);
        }

        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param \Psr\Http\Message\StreamInterface|\Illuminate\Http\File|\Illuminate\Http\UploadedFile|string|resource $contents
         * @param mixed $options
         * @return string|bool
         * @static
         */
        public static function put($path, $contents, $options = [])
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->put($path, $contents, $options);
        }

        /**
         * Store the uploaded file on the disk.
         *
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string|array|null $file
         * @param mixed $options
         * @return string|false
         * @static
         */
        public static function putFile($path, $file = null, $options = [])
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->putFile($path, $file, $options);
        }

        /**
         * Store the uploaded file on the disk with a given name.
         *
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string|array|null $file
         * @param string|array|null $name
         * @param mixed $options
         * @return string|false
         * @static
         */
        public static function putFileAs($path, $file, $name = null, $options = [])
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->putFileAs($path, $file, $name, $options);
        }

        /**
         * Get the visibility for the given path.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function getVisibility($path)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->getVisibility($path);
        }

        /**
         * Set the visibility for the given path.
         *
         * @param string $path
         * @param string $visibility
         * @return bool
         * @static
         */
        public static function setVisibility($path, $visibility)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->setVisibility($path, $visibility);
        }

        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return bool
         * @static
         */
        public static function prepend($path, $data, $separator = '
')
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->prepend($path, $data, $separator);
        }

        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return bool
         * @static
         */
        public static function append($path, $data, $separator = '
')
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->append($path, $data, $separator);
        }

        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool
         * @static
         */
        public static function delete($paths)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->delete($paths);
        }

        /**
         * Copy a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool
         * @static
         */
        public static function copy($from, $to)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->copy($from, $to);
        }

        /**
         * Move a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool
         * @static
         */
        public static function move($from, $to)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->move($from, $to);
        }

        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int
         * @static
         */
        public static function size($path)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->size($path);
        }

        /**
         * Get the checksum for a file.
         *
         * @return string|false
         * @throws UnableToProvideChecksum
         * @static
         */
        public static function checksum($path, $options = [])
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->checksum($path, $options);
        }

        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false
         * @throws UnableToRetrieveMetadata
         * @static
         */
        public static function mimeType($path)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->mimeType($path);
        }

        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int
         * @static
         */
        public static function lastModified($path)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->lastModified($path);
        }

        /**
         * Get a resource to read the file.
         *
         * @param string $path
         * @return resource|null The path resource or null on failure.
         * @static
         */
        public static function readStream($path)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->readStream($path);
        }

        /**
         * Write a new file using a stream.
         *
         * @param string $path
         * @param resource $resource
         * @param array $options
         * @return bool
         * @static
         */
        public static function writeStream($path, $resource, $options = [])
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->writeStream($path, $resource, $options);
        }

        /**
         * Get the URL for the file at the given path.
         *
         * @param string $path
         * @return string
         * @throws \RuntimeException
         * @static
         */
        public static function url($path)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->url($path);
        }

        /**
         * Get an array of all files in a directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array
         * @static
         */
        public static function files($directory = null, $recursive = false)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->files($directory, $recursive);
        }

        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string|null $directory
         * @return array
         * @static
         */
        public static function allFiles($directory = null)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->allFiles($directory);
        }

        /**
         * Get all of the directories within a given directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array
         * @static
         */
        public static function directories($directory = null, $recursive = false)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->directories($directory, $recursive);
        }

        /**
         * Get all the directories within a given directory (recursive).
         *
         * @param string|null $directory
         * @return array
         * @static
         */
        public static function allDirectories($directory = null)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->allDirectories($directory);
        }

        /**
         * Create a directory.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function makeDirectory($path)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->makeDirectory($path);
        }

        /**
         * Recursively delete a directory.
         *
         * @param string $directory
         * @return bool
         * @static
         */
        public static function deleteDirectory($directory)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->deleteDirectory($directory);
        }

        /**
         * Get the Flysystem driver.
         *
         * @return \League\Flysystem\FilesystemOperator
         * @static
         */
        public static function getDriver()
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->getDriver();
        }

        /**
         * Get the Flysystem adapter.
         *
         * @return \League\Flysystem\FilesystemAdapter
         * @static
         */
        public static function getAdapter()
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->getAdapter();
        }

        /**
         * Get the configuration values.
         *
         * @return array
         * @static
         */
        public static function getConfig()
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->getConfig();
        }

        /**
         * Define a custom callback that generates file download responses.
         *
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function serveUsing($callback)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            $instance->serveUsing($callback);
        }

        /**
         * Define a custom temporary URL builder callback.
         *
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function buildTemporaryUrlsUsing($callback)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            $instance->buildTemporaryUrlsUsing($callback);
        }

        /**
         * Define a custom temporary upload URL builder callback.
         *
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function buildTemporaryUploadUrlsUsing($callback)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            $instance->buildTemporaryUploadUrlsUsing($callback);
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) truthy.
         *
         * @template TWhenParameter
         * @template TWhenReturnType
         * @param (\Closure($this): TWhenParameter)|TWhenParameter|null $value
         * @param (callable($this, TWhenParameter): TWhenReturnType)|null $callback
         * @param (callable($this, TWhenParameter): TWhenReturnType)|null $default
         * @return $this|TWhenReturnType
         * @static
         */
        public static function when($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->when($value, $callback, $default);
        }

        /**
         * Apply the callback if the given "value" is (or resolves to) falsy.
         *
         * @template TUnlessParameter
         * @template TUnlessReturnType
         * @param (\Closure($this): TUnlessParameter)|TUnlessParameter|null $value
         * @param (callable($this, TUnlessParameter): TUnlessReturnType)|null $callback
         * @param (callable($this, TUnlessParameter): TUnlessReturnType)|null $default
         * @return $this|TUnlessReturnType
         * @static
         */
        public static function unless($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->unless($value, $callback, $default);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            \Illuminate\Filesystem\LocalFilesystemAdapter::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            \Illuminate\Filesystem\LocalFilesystemAdapter::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            return \Illuminate\Filesystem\LocalFilesystemAdapter::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            \Illuminate\Filesystem\LocalFilesystemAdapter::flushMacros();
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static function macroCall($method, $parameters)
        {
            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter 
            /** @var \Illuminate\Filesystem\LocalFilesystemAdapter $instance */
            return $instance->macroCall($method, $parameters);
        }

            }
    /**
     * @see \Illuminate\Routing\UrlGenerator
     */
    class URL {
        /**
         * Get the full URL for the current request.
         *
         * @return string
         * @static
         */
        public static function full()
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->full();
        }

        /**
         * Get the current URL for the request.
         *
         * @return string
         * @static
         */
        public static function current()
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->current();
        }

        /**
         * Get the URL for the previous request.
         *
         * @param mixed $fallback
         * @return string
         * @static
         */
        public static function previous($fallback = false)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->previous($fallback);
        }

        /**
         * Get the previous path info for the request.
         *
         * @param mixed $fallback
         * @return string
         * @static
         */
        public static function previousPath($fallback = false)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->previousPath($fallback);
        }

        /**
         * Generate an absolute URL to the given path.
         *
         * @param string $path
         * @param mixed $extra
         * @param bool|null $secure
         * @return string
         * @static
         */
        public static function to($path, $extra = [], $secure = null)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->to($path, $extra, $secure);
        }

        /**
         * Generate an absolute URL with the given query parameters.
         *
         * @param string $path
         * @param array $query
         * @param mixed $extra
         * @param bool|null $secure
         * @return string
         * @static
         */
        public static function query($path, $query = [], $extra = [], $secure = null)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->query($path, $query, $extra, $secure);
        }

        /**
         * Generate a secure, absolute URL to the given path.
         *
         * @param string $path
         * @param array $parameters
         * @return string
         * @static
         */
        public static function secure($path, $parameters = [])
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->secure($path, $parameters);
        }

        /**
         * Generate the URL to an application asset.
         *
         * @param string $path
         * @param bool|null $secure
         * @return string
         * @static
         */
        public static function asset($path, $secure = null)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->asset($path, $secure);
        }

        /**
         * Generate the URL to a secure asset.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function secureAsset($path)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->secureAsset($path);
        }

        /**
         * Generate the URL to an asset from a custom root domain such as CDN, etc.
         *
         * @param string $root
         * @param string $path
         * @param bool|null $secure
         * @return string
         * @static
         */
        public static function assetFrom($root, $path, $secure = null)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->assetFrom($root, $path, $secure);
        }

        /**
         * Get the default scheme for a raw URL.
         *
         * @param bool|null $secure
         * @return string
         * @static
         */
        public static function formatScheme($secure = null)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->formatScheme($secure);
        }

        /**
         * Create a signed route URL for a named route.
         *
         * @param \BackedEnum|string $name
         * @param mixed $parameters
         * @param \DateTimeInterface|\DateInterval|int|null $expiration
         * @param bool $absolute
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static function signedRoute($name, $parameters = [], $expiration = null, $absolute = true)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->signedRoute($name, $parameters, $expiration, $absolute);
        }

        /**
         * Create a temporary signed route URL for a named route.
         *
         * @param \BackedEnum|string $name
         * @param \DateTimeInterface|\DateInterval|int $expiration
         * @param array $parameters
         * @param bool $absolute
         * @return string
         * @static
         */
        public static function temporarySignedRoute($name, $expiration, $parameters = [], $absolute = true)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->temporarySignedRoute($name, $expiration, $parameters, $absolute);
        }

        /**
         * Determine if the given request has a valid signature.
         *
         * @param \Illuminate\Http\Request $request
         * @param bool $absolute
         * @param \Closure|array $ignoreQuery
         * @return bool
         * @static
         */
        public static function hasValidSignature($request, $absolute = true, $ignoreQuery = [])
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->hasValidSignature($request, $absolute, $ignoreQuery);
        }

        /**
         * Determine if the given request has a valid signature for a relative URL.
         *
         * @param \Illuminate\Http\Request $request
         * @param \Closure|array $ignoreQuery
         * @return bool
         * @static
         */
        public static function hasValidRelativeSignature($request, $ignoreQuery = [])
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->hasValidRelativeSignature($request, $ignoreQuery);
        }

        /**
         * Determine if the signature from the given request matches the URL.
         *
         * @param \Illuminate\Http\Request $request
         * @param bool $absolute
         * @param \Closure|array $ignoreQuery
         * @return bool
         * @static
         */
        public static function hasCorrectSignature($request, $absolute = true, $ignoreQuery = [])
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->hasCorrectSignature($request, $absolute, $ignoreQuery);
        }

        /**
         * Determine if the expires timestamp from the given request is not from the past.
         *
         * @param \Illuminate\Http\Request $request
         * @return bool
         * @static
         */
        public static function signatureHasNotExpired($request)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->signatureHasNotExpired($request);
        }

        /**
         * Get the URL to a named route.
         *
         * @param \BackedEnum|string $name
         * @param mixed $parameters
         * @param bool $absolute
         * @return string
         * @throws \Symfony\Component\Routing\Exception\RouteNotFoundException|\InvalidArgumentException
         * @static
         */
        public static function route($name, $parameters = [], $absolute = true)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->route($name, $parameters, $absolute);
        }

        /**
         * Get the URL for a given route instance.
         *
         * @param \Illuminate\Routing\Route $route
         * @param mixed $parameters
         * @param bool $absolute
         * @return string
         * @throws \Illuminate\Routing\Exceptions\UrlGenerationException
         * @static
         */
        public static function toRoute($route, $parameters, $absolute)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->toRoute($route, $parameters, $absolute);
        }

        /**
         * Get the URL to a controller action.
         *
         * @param string|array $action
         * @param mixed $parameters
         * @param bool $absolute
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static function action($action, $parameters = [], $absolute = true)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->action($action, $parameters, $absolute);
        }

        /**
         * Format the array of URL parameters.
         *
         * @param mixed $parameters
         * @return array
         * @static
         */
        public static function formatParameters($parameters)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->formatParameters($parameters);
        }

        /**
         * Get the base URL for the request.
         *
         * @param string $scheme
         * @param string|null $root
         * @return string
         * @static
         */
        public static function formatRoot($scheme, $root = null)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->formatRoot($scheme, $root);
        }

        /**
         * Format the given URL segments into a single URL.
         *
         * @param string $root
         * @param string $path
         * @param \Illuminate\Routing\Route|null $route
         * @return string
         * @static
         */
        public static function format($root, $path, $route = null)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->format($root, $path, $route);
        }

        /**
         * Determine if the given path is a valid URL.
         *
         * @param string $path
         * @return bool
         * @static
         */
        public static function isValidUrl($path)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->isValidUrl($path);
        }

        /**
         * Set the default named parameters used by the URL generator.
         *
         * @param array $defaults
         * @return void
         * @static
         */
        public static function defaults($defaults)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            $instance->defaults($defaults);
        }

        /**
         * Get the default named parameters used by the URL generator.
         *
         * @return array
         * @static
         */
        public static function getDefaultParameters()
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->getDefaultParameters();
        }

        /**
         * Force the scheme for URLs.
         *
         * @param string|null $scheme
         * @return void
         * @static
         */
        public static function forceScheme($scheme)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            $instance->forceScheme($scheme);
        }

        /**
         * Force the use of the HTTPS scheme for all generated URLs.
         *
         * @param bool $force
         * @return void
         * @static
         */
        public static function forceHttps($force = true)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            $instance->forceHttps($force);
        }

        /**
         * Set the URL origin for all generated URLs.
         *
         * @param string|null $root
         * @return void
         * @static
         */
        public static function useOrigin($root)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            $instance->useOrigin($root);
        }

        /**
         * Set the forced root URL.
         *
         * @param string|null $root
         * @return void
         * @deprecated Use useOrigin
         * @static
         */
        public static function forceRootUrl($root)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            $instance->forceRootUrl($root);
        }

        /**
         * Set the URL origin for all generated asset URLs.
         *
         * @param string|null $root
         * @return void
         * @static
         */
        public static function useAssetOrigin($root)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            $instance->useAssetOrigin($root);
        }

        /**
         * Set a callback to be used to format the host of generated URLs.
         *
         * @param \Closure $callback
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static function formatHostUsing($callback)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->formatHostUsing($callback);
        }

        /**
         * Set a callback to be used to format the path of generated URLs.
         *
         * @param \Closure $callback
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static function formatPathUsing($callback)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->formatPathUsing($callback);
        }

        /**
         * Get the path formatter being used by the URL generator.
         *
         * @return \Closure
         * @static
         */
        public static function pathFormatter()
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->pathFormatter();
        }

        /**
         * Get the request instance.
         *
         * @return \Illuminate\Http\Request
         * @static
         */
        public static function getRequest()
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->getRequest();
        }

        /**
         * Set the current request instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return void
         * @static
         */
        public static function setRequest($request)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            $instance->setRequest($request);
        }

        /**
         * Set the route collection.
         *
         * @param \Illuminate\Routing\RouteCollectionInterface $routes
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static function setRoutes($routes)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->setRoutes($routes);
        }

        /**
         * Set the session resolver for the generator.
         *
         * @param callable $sessionResolver
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static function setSessionResolver($sessionResolver)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->setSessionResolver($sessionResolver);
        }

        /**
         * Set the encryption key resolver.
         *
         * @param callable $keyResolver
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static function setKeyResolver($keyResolver)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->setKeyResolver($keyResolver);
        }

        /**
         * Clone a new instance of the URL generator with a different encryption key resolver.
         *
         * @param callable $keyResolver
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static function withKeyResolver($keyResolver)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->withKeyResolver($keyResolver);
        }

        /**
         * Set the callback that should be used to attempt to resolve missing named routes.
         *
         * @param callable $missingNamedRouteResolver
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static function resolveMissingNamedRoutesUsing($missingNamedRouteResolver)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->resolveMissingNamedRoutesUsing($missingNamedRouteResolver);
        }

        /**
         * Get the root controller namespace.
         *
         * @return string
         * @static
         */
        public static function getRootControllerNamespace()
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->getRootControllerNamespace();
        }

        /**
         * Set the root controller namespace.
         *
         * @param string $rootNamespace
         * @return \Illuminate\Routing\UrlGenerator
         * @static
         */
        public static function setRootControllerNamespace($rootNamespace)
        {
            /** @var \Illuminate\Routing\UrlGenerator $instance */
            return $instance->setRootControllerNamespace($rootNamespace);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\UrlGenerator::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Routing\UrlGenerator::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\UrlGenerator::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\Routing\UrlGenerator::flushMacros();
        }

            }
    /**
     * @see \Illuminate\Validation\Factory
     */
    class Validator {
        /**
         * Create a new Validator instance.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $attributes
         * @return \Illuminate\Validation\Validator
         * @static
         */
        public static function make($data, $rules, $messages = [], $attributes = [])
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->make($data, $rules, $messages, $attributes);
        }

        /**
         * Validate the given data against the provided rules.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $attributes
         * @return array
         * @throws \Illuminate\Validation\ValidationException
         * @static
         */
        public static function validate($data, $rules, $messages = [], $attributes = [])
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->validate($data, $rules, $messages, $attributes);
        }

        /**
         * Register a custom validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string|null $message
         * @return void
         * @static
         */
        public static function extend($rule, $extension, $message = null)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->extend($rule, $extension, $message);
        }

        /**
         * Register a custom implicit validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string|null $message
         * @return void
         * @static
         */
        public static function extendImplicit($rule, $extension, $message = null)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->extendImplicit($rule, $extension, $message);
        }

        /**
         * Register a custom dependent validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string|null $message
         * @return void
         * @static
         */
        public static function extendDependent($rule, $extension, $message = null)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->extendDependent($rule, $extension, $message);
        }

        /**
         * Register a custom validator message replacer.
         *
         * @param string $rule
         * @param \Closure|string $replacer
         * @return void
         * @static
         */
        public static function replacer($rule, $replacer)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->replacer($rule, $replacer);
        }

        /**
         * Indicate that unvalidated array keys should be included in validated data when the parent array is validated.
         *
         * @return void
         * @static
         */
        public static function includeUnvalidatedArrayKeys()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->includeUnvalidatedArrayKeys();
        }

        /**
         * Indicate that unvalidated array keys should be excluded from the validated data, even if the parent array was validated.
         *
         * @return void
         * @static
         */
        public static function excludeUnvalidatedArrayKeys()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->excludeUnvalidatedArrayKeys();
        }

        /**
         * Set the Validator instance resolver.
         *
         * @param \Closure $resolver
         * @return void
         * @static
         */
        public static function resolver($resolver)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->resolver($resolver);
        }

        /**
         * Get the Translator implementation.
         *
         * @return \Illuminate\Contracts\Translation\Translator
         * @static
         */
        public static function getTranslator()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->getTranslator();
        }

        /**
         * Get the Presence Verifier implementation.
         *
         * @return \Illuminate\Validation\PresenceVerifierInterface
         * @static
         */
        public static function getPresenceVerifier()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->getPresenceVerifier();
        }

        /**
         * Set the Presence Verifier implementation.
         *
         * @param \Illuminate\Validation\PresenceVerifierInterface $presenceVerifier
         * @return void
         * @static
         */
        public static function setPresenceVerifier($presenceVerifier)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->setPresenceVerifier($presenceVerifier);
        }

        /**
         * Get the container instance used by the validation factory.
         *
         * @return \Illuminate\Contracts\Container\Container|null
         * @static
         */
        public static function getContainer()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->getContainer();
        }

        /**
         * Set the container instance used by the validation factory.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return \Illuminate\Validation\Factory
         * @static
         */
        public static function setContainer($container)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->setContainer($container);
        }

            }
    /**
     * @see \Illuminate\View\Factory
     */
    class View {
        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $path
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View
         * @static
         */
        public static function file($path, $data = [], $mergeData = [])
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->file($path, $data, $mergeData);
        }

        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $view
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View
         * @static
         */
        public static function make($view, $data = [], $mergeData = [])
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->make($view, $data, $mergeData);
        }

        /**
         * Get the first view that actually exists from the given list.
         *
         * @param array $views
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View
         * @throws \InvalidArgumentException
         * @static
         */
        public static function first($views, $data = [], $mergeData = [])
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->first($views, $data, $mergeData);
        }

        /**
         * Get the rendered content of the view based on a given condition.
         *
         * @param bool $condition
         * @param string $view
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         * @return string
         * @static
         */
        public static function renderWhen($condition, $view, $data = [], $mergeData = [])
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->renderWhen($condition, $view, $data, $mergeData);
        }

        /**
         * Get the rendered content of the view based on the negation of a given condition.
         *
         * @param bool $condition
         * @param string $view
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         * @return string
         * @static
         */
        public static function renderUnless($condition, $view, $data = [], $mergeData = [])
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->renderUnless($condition, $view, $data, $mergeData);
        }

        /**
         * Get the rendered contents of a partial from a loop.
         *
         * @param string $view
         * @param array $data
         * @param string $iterator
         * @param string $empty
         * @return string
         * @static
         */
        public static function renderEach($view, $data, $iterator, $empty = 'raw|')
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->renderEach($view, $data, $iterator, $empty);
        }

        /**
         * Determine if a given view exists.
         *
         * @param string $view
         * @return bool
         * @static
         */
        public static function exists($view)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->exists($view);
        }

        /**
         * Get the appropriate view engine for the given path.
         *
         * @param string $path
         * @return \Illuminate\Contracts\View\Engine
         * @throws \InvalidArgumentException
         * @static
         */
        public static function getEngineFromPath($path)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getEngineFromPath($path);
        }

        /**
         * Add a piece of shared data to the environment.
         *
         * @param array|string $key
         * @param mixed $value
         * @return mixed
         * @static
         */
        public static function share($key, $value = null)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->share($key, $value);
        }

        /**
         * Increment the rendering counter.
         *
         * @return void
         * @static
         */
        public static function incrementRender()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->incrementRender();
        }

        /**
         * Decrement the rendering counter.
         *
         * @return void
         * @static
         */
        public static function decrementRender()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->decrementRender();
        }

        /**
         * Check if there are no active render operations.
         *
         * @return bool
         * @static
         */
        public static function doneRendering()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->doneRendering();
        }

        /**
         * Determine if the given once token has been rendered.
         *
         * @param string $id
         * @return bool
         * @static
         */
        public static function hasRenderedOnce($id)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->hasRenderedOnce($id);
        }

        /**
         * Mark the given once token as having been rendered.
         *
         * @param string $id
         * @return void
         * @static
         */
        public static function markAsRenderedOnce($id)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->markAsRenderedOnce($id);
        }

        /**
         * Add a location to the array of view locations.
         *
         * @param string $location
         * @return void
         * @static
         */
        public static function addLocation($location)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->addLocation($location);
        }

        /**
         * Prepend a location to the array of view locations.
         *
         * @param string $location
         * @return void
         * @static
         */
        public static function prependLocation($location)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->prependLocation($location);
        }

        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return \Illuminate\View\Factory
         * @static
         */
        public static function addNamespace($namespace, $hints)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->addNamespace($namespace, $hints);
        }

        /**
         * Prepend a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return \Illuminate\View\Factory
         * @static
         */
        public static function prependNamespace($namespace, $hints)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->prependNamespace($namespace, $hints);
        }

        /**
         * Replace the namespace hints for the given namespace.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return \Illuminate\View\Factory
         * @static
         */
        public static function replaceNamespace($namespace, $hints)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->replaceNamespace($namespace, $hints);
        }

        /**
         * Register a valid view extension and its engine.
         *
         * @param string $extension
         * @param string $engine
         * @param \Closure|null $resolver
         * @return void
         * @static
         */
        public static function addExtension($extension, $engine, $resolver = null)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->addExtension($extension, $engine, $resolver);
        }

        /**
         * Flush all of the factory state like sections and stacks.
         *
         * @return void
         * @static
         */
        public static function flushState()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->flushState();
        }

        /**
         * Flush all of the section contents if done rendering.
         *
         * @return void
         * @static
         */
        public static function flushStateIfDoneRendering()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->flushStateIfDoneRendering();
        }

        /**
         * Get the extension to engine bindings.
         *
         * @return array
         * @static
         */
        public static function getExtensions()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getExtensions();
        }

        /**
         * Get the engine resolver instance.
         *
         * @return \Illuminate\View\Engines\EngineResolver
         * @static
         */
        public static function getEngineResolver()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getEngineResolver();
        }

        /**
         * Get the view finder instance.
         *
         * @return \Illuminate\View\ViewFinderInterface
         * @static
         */
        public static function getFinder()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getFinder();
        }

        /**
         * Set the view finder instance.
         *
         * @param \Illuminate\View\ViewFinderInterface $finder
         * @return void
         * @static
         */
        public static function setFinder($finder)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->setFinder($finder);
        }

        /**
         * Flush the cache of views located by the finder.
         *
         * @return void
         * @static
         */
        public static function flushFinderCache()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->flushFinderCache();
        }

        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher
         * @static
         */
        public static function getDispatcher()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getDispatcher();
        }

        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void
         * @static
         */
        public static function setDispatcher($events)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->setDispatcher($events);
        }

        /**
         * Get the IoC container instance.
         *
         * @return \Illuminate\Contracts\Container\Container
         * @static
         */
        public static function getContainer()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getContainer();
        }

        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return void
         * @static
         */
        public static function setContainer($container)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->setContainer($container);
        }

        /**
         * Get an item from the shared data.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function shared($key, $default = null)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->shared($key, $default);
        }

        /**
         * Get all of the shared data for the environment.
         *
         * @return array
         * @static
         */
        public static function getShared()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getShared();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Illuminate\View\Factory::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\View\Factory::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Illuminate\View\Factory::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Illuminate\View\Factory::flushMacros();
        }

        /**
         * Start a component rendering process.
         *
         * @param \Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Htmlable|\Closure|string $view
         * @param array $data
         * @return void
         * @static
         */
        public static function startComponent($view, $data = [])
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startComponent($view, $data);
        }

        /**
         * Get the first view that actually exists from the given list, and start a component.
         *
         * @param array $names
         * @param array $data
         * @return void
         * @static
         */
        public static function startComponentFirst($names, $data = [])
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startComponentFirst($names, $data);
        }

        /**
         * Render the current component.
         *
         * @return string
         * @static
         */
        public static function renderComponent()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->renderComponent();
        }

        /**
         * Get an item from the component data that exists above the current component.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function getConsumableComponentData($key, $default = null)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getConsumableComponentData($key, $default);
        }

        /**
         * Start the slot rendering process.
         *
         * @param string $name
         * @param string|null $content
         * @param array $attributes
         * @return void
         * @static
         */
        public static function slot($name, $content = null, $attributes = [])
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->slot($name, $content, $attributes);
        }

        /**
         * Save the slot content for rendering.
         *
         * @return void
         * @static
         */
        public static function endSlot()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->endSlot();
        }

        /**
         * Register a view creator event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         * @return array
         * @static
         */
        public static function creator($views, $callback)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->creator($views, $callback);
        }

        /**
         * Register multiple view composers via an array.
         *
         * @param array $composers
         * @return array
         * @static
         */
        public static function composers($composers)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->composers($composers);
        }

        /**
         * Register a view composer event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         * @return array
         * @static
         */
        public static function composer($views, $callback)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->composer($views, $callback);
        }

        /**
         * Call the composer for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         * @return void
         * @static
         */
        public static function callComposer($view)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->callComposer($view);
        }

        /**
         * Call the creator for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         * @return void
         * @static
         */
        public static function callCreator($view)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->callCreator($view);
        }

        /**
         * Start injecting content into a fragment.
         *
         * @param string $fragment
         * @return void
         * @static
         */
        public static function startFragment($fragment)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startFragment($fragment);
        }

        /**
         * Stop injecting content into a fragment.
         *
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static function stopFragment()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->stopFragment();
        }

        /**
         * Get the contents of a fragment.
         *
         * @param string $name
         * @param string|null $default
         * @return mixed
         * @static
         */
        public static function getFragment($name, $default = null)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getFragment($name, $default);
        }

        /**
         * Get the entire array of rendered fragments.
         *
         * @return array
         * @static
         */
        public static function getFragments()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getFragments();
        }

        /**
         * Flush all of the fragments.
         *
         * @return void
         * @static
         */
        public static function flushFragments()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->flushFragments();
        }

        /**
         * Start injecting content into a section.
         *
         * @param string $section
         * @param string|null $content
         * @return void
         * @static
         */
        public static function startSection($section, $content = null)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startSection($section, $content);
        }

        /**
         * Inject inline content into a section.
         *
         * @param string $section
         * @param string $content
         * @return void
         * @static
         */
        public static function inject($section, $content)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->inject($section, $content);
        }

        /**
         * Stop injecting content into a section and return its contents.
         *
         * @return string
         * @static
         */
        public static function yieldSection()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->yieldSection();
        }

        /**
         * Stop injecting content into a section.
         *
         * @param bool $overwrite
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static function stopSection($overwrite = false)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->stopSection($overwrite);
        }

        /**
         * Stop injecting content into a section and append it.
         *
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static function appendSection()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->appendSection();
        }

        /**
         * Get the string contents of a section.
         *
         * @param string $section
         * @param string $default
         * @return string
         * @static
         */
        public static function yieldContent($section, $default = '')
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->yieldContent($section, $default);
        }

        /**
         * Get the parent placeholder for the current request.
         *
         * @param string $section
         * @return string
         * @static
         */
        public static function parentPlaceholder($section = '')
        {
            return \Illuminate\View\Factory::parentPlaceholder($section);
        }

        /**
         * Check if section exists.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasSection($name)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->hasSection($name);
        }

        /**
         * Check if section does not exist.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function sectionMissing($name)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->sectionMissing($name);
        }

        /**
         * Get the contents of a section.
         *
         * @param string $name
         * @param string|null $default
         * @return mixed
         * @static
         */
        public static function getSection($name, $default = null)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getSection($name, $default);
        }

        /**
         * Get the entire array of sections.
         *
         * @return array
         * @static
         */
        public static function getSections()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getSections();
        }

        /**
         * Flush all of the sections.
         *
         * @return void
         * @static
         */
        public static function flushSections()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->flushSections();
        }

        /**
         * Add new loop to the stack.
         *
         * @param \Countable|array $data
         * @return void
         * @static
         */
        public static function addLoop($data)
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->addLoop($data);
        }

        /**
         * Increment the top loop's indices.
         *
         * @return void
         * @static
         */
        public static function incrementLoopIndices()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->incrementLoopIndices();
        }

        /**
         * Pop a loop from the top of the loop stack.
         *
         * @return void
         * @static
         */
        public static function popLoop()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->popLoop();
        }

        /**
         * Get an instance of the last loop in the stack.
         *
         * @return \stdClass|null
         * @static
         */
        public static function getLastLoop()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getLastLoop();
        }

        /**
         * Get the entire loop stack.
         *
         * @return array
         * @static
         */
        public static function getLoopStack()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->getLoopStack();
        }

        /**
         * Start injecting content into a push section.
         *
         * @param string $section
         * @param string $content
         * @return void
         * @static
         */
        public static function startPush($section, $content = '')
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startPush($section, $content);
        }

        /**
         * Stop injecting content into a push section.
         *
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static function stopPush()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->stopPush();
        }

        /**
         * Start prepending content into a push section.
         *
         * @param string $section
         * @param string $content
         * @return void
         * @static
         */
        public static function startPrepend($section, $content = '')
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startPrepend($section, $content);
        }

        /**
         * Stop prepending content into a push section.
         *
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static function stopPrepend()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->stopPrepend();
        }

        /**
         * Get the string contents of a push section.
         *
         * @param string $section
         * @param string $default
         * @return string
         * @static
         */
        public static function yieldPushContent($section, $default = '')
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->yieldPushContent($section, $default);
        }

        /**
         * Determine if the stack has any content in it.
         *
         * @static
         */
        public static function isStackEmpty($section)
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->isStackEmpty($section);
        }

        /**
         * Flush all of the stacks.
         *
         * @return void
         * @static
         */
        public static function flushStacks()
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->flushStacks();
        }

        /**
         * Start a translation block.
         *
         * @param array $replacements
         * @return void
         * @static
         */
        public static function startTranslation($replacements = [])
        {
            /** @var \Illuminate\View\Factory $instance */
            $instance->startTranslation($replacements);
        }

        /**
         * Render the current translation.
         *
         * @return string
         * @static
         */
        public static function renderTranslation()
        {
            /** @var \Illuminate\View\Factory $instance */
            return $instance->renderTranslation();
        }

            }
    }

namespace Collective\Html {
    /**
     * @see \Collective\Html\FormBuilder
     */
    class FormFacade {
        /**
         * Open up a new HTML form.
         *
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function open($options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->open($options);
        }

        /**
         * Create a new model based form builder.
         *
         * @param mixed $model
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function model($model, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->model($model, $options);
        }

        /**
         * Set the model instance on the form builder.
         *
         * @param mixed $model
         * @return void
         * @static
         */
        public static function setModel($model)
        {
            /** @var \Collective\Html\FormBuilder $instance */
            $instance->setModel($model);
        }

        /**
         * Get the current model instance on the form builder.
         *
         * @return mixed $model
         * @static
         */
        public static function getModel()
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->getModel();
        }

        /**
         * Close the current form.
         *
         * @return string
         * @static
         */
        public static function close()
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->close();
        }

        /**
         * Generate a hidden field with the current CSRF token.
         *
         * @return string
         * @static
         */
        public static function token()
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->token();
        }

        /**
         * Create a form label element.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @param bool $escape_html
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function label($name, $value = null, $options = [], $escape_html = true)
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->label($name, $value, $options, $escape_html);
        }

        /**
         * Create a form input field.
         *
         * @param string $type
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function input($type, $name, $value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->input($type, $name, $value, $options);
        }

        /**
         * Create a text input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function text($name, $value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->text($name, $value, $options);
        }

        /**
         * Create a password input field.
         *
         * @param string $name
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function password($name, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->password($name, $options);
        }

        /**
         * Create a range input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function range($name, $value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->range($name, $value, $options);
        }

        /**
         * Create a hidden input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function hidden($name, $value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->hidden($name, $value, $options);
        }

        /**
         * Create a search input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function search($name, $value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->search($name, $value, $options);
        }

        /**
         * Create an e-mail input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function email($name, $value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->email($name, $value, $options);
        }

        /**
         * Create a tel input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function tel($name, $value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->tel($name, $value, $options);
        }

        /**
         * Create a number input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function number($name, $value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->number($name, $value, $options);
        }

        /**
         * Create a date input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function date($name, $value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->date($name, $value, $options);
        }

        /**
         * Create a datetime input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function datetime($name, $value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->datetime($name, $value, $options);
        }

        /**
         * Create a datetime-local input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function datetimeLocal($name, $value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->datetimeLocal($name, $value, $options);
        }

        /**
         * Create a time input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function time($name, $value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->time($name, $value, $options);
        }

        /**
         * Create a url input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function url($name, $value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->url($name, $value, $options);
        }

        /**
         * Create a week input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function week($name, $value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->week($name, $value, $options);
        }

        /**
         * Create a file input field.
         *
         * @param string $name
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function file($name, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->file($name, $options);
        }

        /**
         * Create a textarea input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function textarea($name, $value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->textarea($name, $value, $options);
        }

        /**
         * Create a select box field.
         *
         * @param string $name
         * @param array $list
         * @param string|bool $selected
         * @param array $selectAttributes
         * @param array $optionsAttributes
         * @param array $optgroupsAttributes
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function select($name, $list = [], $selected = null, $selectAttributes = [], $optionsAttributes = [], $optgroupsAttributes = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->select($name, $list, $selected, $selectAttributes, $optionsAttributes, $optgroupsAttributes);
        }

        /**
         * Create a select range field.
         *
         * @param string $name
         * @param string $begin
         * @param string $end
         * @param string $selected
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function selectRange($name, $begin, $end, $selected = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->selectRange($name, $begin, $end, $selected, $options);
        }

        /**
         * Create a select year field.
         *
         * @param string $name
         * @param string $begin
         * @param string $end
         * @param string $selected
         * @param array $options
         * @return mixed
         * @static
         */
        public static function selectYear()
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->selectYear();
        }

        /**
         * Create a select month field.
         *
         * @param string $name
         * @param string $selected
         * @param array $options
         * @param string $format
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function selectMonth($name, $selected = null, $options = [], $format = '%B')
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->selectMonth($name, $selected, $options, $format);
        }

        /**
         * Get the select option for the given value.
         *
         * @param string $display
         * @param string $value
         * @param string $selected
         * @param array $attributes
         * @param array $optgroupAttributes
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function getSelectOption($display, $value, $selected, $attributes = [], $optgroupAttributes = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->getSelectOption($display, $value, $selected, $attributes, $optgroupAttributes);
        }

        /**
         * Create a checkbox input field.
         *
         * @param string $name
         * @param mixed $value
         * @param bool $checked
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function checkbox($name, $value = 1, $checked = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->checkbox($name, $value, $checked, $options);
        }

        /**
         * Create a radio button input field.
         *
         * @param string $name
         * @param mixed $value
         * @param bool $checked
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function radio($name, $value = null, $checked = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->radio($name, $value, $checked, $options);
        }

        /**
         * Create a HTML reset input element.
         *
         * @param string $value
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function reset($value, $attributes = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->reset($value, $attributes);
        }

        /**
         * Create a HTML image input element.
         *
         * @param string $url
         * @param string $name
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function image($url, $name = null, $attributes = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->image($url, $name, $attributes);
        }

        /**
         * Create a month input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function month($name, $value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->month($name, $value, $options);
        }

        /**
         * Create a color input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function color($name, $value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->color($name, $value, $options);
        }

        /**
         * Create a submit button element.
         *
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function submit($value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->submit($value, $options);
        }

        /**
         * Create a button element.
         *
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function button($value = null, $options = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->button($value, $options);
        }

        /**
         * Create a datalist box field.
         *
         * @param string $id
         * @param array $list
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function datalist($id, $list = [])
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->datalist($id, $list);
        }

        /**
         * Get the ID attribute for a field name.
         *
         * @param string $name
         * @param array $attributes
         * @return string
         * @static
         */
        public static function getIdAttribute($name, $attributes)
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->getIdAttribute($name, $attributes);
        }

        /**
         * Get the value that should be assigned to the field.
         *
         * @param string $name
         * @param string $value
         * @return mixed
         * @static
         */
        public static function getValueAttribute($name, $value = null)
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->getValueAttribute($name, $value);
        }

        /**
         * Take Request in fill process
         *
         * @param bool $consider
         * @static
         */
        public static function considerRequest($consider = true)
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->considerRequest($consider);
        }

        /**
         * Get a value from the session's old input.
         *
         * @param string $name
         * @return mixed
         * @static
         */
        public static function old($name)
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->old($name);
        }

        /**
         * Determine if the old input is empty.
         *
         * @return bool
         * @static
         */
        public static function oldInputIsEmpty()
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->oldInputIsEmpty();
        }

        /**
         * Get the session store implementation.
         *
         * @return \Illuminate\Contracts\Session\Session $session
         * @static
         */
        public static function getSessionStore()
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->getSessionStore();
        }

        /**
         * Set the session store implementation.
         *
         * @param \Illuminate\Contracts\Session\Session $session
         * @return \Collective\Html\FormBuilder
         * @static
         */
        public static function setSessionStore($session)
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->setSessionStore($session);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Collective\Html\FormBuilder::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Collective\Html\FormBuilder::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Collective\Html\FormBuilder::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Collective\Html\FormBuilder::flushMacros();
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static function macroCall($method, $parameters)
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->macroCall($method, $parameters);
        }

        /**
         * Register a custom component.
         *
         * @param $name
         * @param $view
         * @param array $signature
         * @return void
         * @static
         */
        public static function component($name, $view, $signature)
        {
            \Collective\Html\FormBuilder::component($name, $view, $signature);
        }

        /**
         * Check if a component is registered.
         *
         * @param $name
         * @return bool
         * @static
         */
        public static function hasComponent($name)
        {
            return \Collective\Html\FormBuilder::hasComponent($name);
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return \Illuminate\Contracts\View\View|mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static function componentCall($method, $parameters)
        {
            /** @var \Collective\Html\FormBuilder $instance */
            return $instance->componentCall($method, $parameters);
        }

            }
    /**
     * @see \Collective\Html\HtmlBuilder
     */
    class HtmlFacade {
        /**
         * Convert an HTML string to entities.
         *
         * @param string $value
         * @return string
         * @static
         */
        public static function entities($value)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->entities($value);
        }

        /**
         * Convert entities to HTML characters.
         *
         * @param string $value
         * @return string
         * @static
         */
        public static function decode($value)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->decode($value);
        }

        /**
         * Generate a link to a JavaScript file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function script($url, $attributes = [], $secure = null)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->script($url, $attributes, $secure);
        }

        /**
         * Generate a link to a CSS file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function style($url, $attributes = [], $secure = null)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->style($url, $attributes, $secure);
        }

        /**
         * Generate an HTML image element.
         *
         * @param string $url
         * @param string $alt
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function image($url, $alt = null, $attributes = [], $secure = null)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->image($url, $alt, $attributes, $secure);
        }

        /**
         * Generate a link to a Favicon file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function favicon($url, $attributes = [], $secure = null)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->favicon($url, $attributes, $secure);
        }

        /**
         * Generate a HTML link.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $secure
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function link($url, $title = null, $attributes = [], $secure = null, $escape = true)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->link($url, $title, $attributes, $secure, $escape);
        }

        /**
         * Generate a HTTPS HTML link.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function secureLink($url, $title = null, $attributes = [], $escape = true)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->secureLink($url, $title, $attributes, $escape);
        }

        /**
         * Generate a HTML link to an asset.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $secure
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function linkAsset($url, $title = null, $attributes = [], $secure = null, $escape = true)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->linkAsset($url, $title, $attributes, $secure, $escape);
        }

        /**
         * Generate a HTTPS HTML link to an asset.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function linkSecureAsset($url, $title = null, $attributes = [], $escape = true)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->linkSecureAsset($url, $title, $attributes, $escape);
        }

        /**
         * Generate a HTML link to a named route.
         *
         * @param string $name
         * @param string $title
         * @param array $parameters
         * @param array $attributes
         * @param bool $secure
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function linkRoute($name, $title = null, $parameters = [], $attributes = [], $secure = null, $escape = true)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->linkRoute($name, $title, $parameters, $attributes, $secure, $escape);
        }

        /**
         * Generate a HTML link to a controller action.
         *
         * @param string $action
         * @param string $title
         * @param array $parameters
         * @param array $attributes
         * @param bool $secure
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function linkAction($action, $title = null, $parameters = [], $attributes = [], $secure = null, $escape = true)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->linkAction($action, $title, $parameters, $attributes, $secure, $escape);
        }

        /**
         * Generate a HTML link to an email address.
         *
         * @param string $email
         * @param string $title
         * @param array $attributes
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function mailto($email, $title = null, $attributes = [], $escape = true)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->mailto($email, $title, $attributes, $escape);
        }

        /**
         * Obfuscate an e-mail address to prevent spam-bots from sniffing it.
         *
         * @param string $email
         * @return string
         * @static
         */
        public static function email($email)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->email($email);
        }

        /**
         * Generates non-breaking space entities based on number supplied.
         *
         * @param int $num
         * @return string
         * @static
         */
        public static function nbsp($num = 1)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->nbsp($num);
        }

        /**
         * Generate an ordered list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString|string
         * @static
         */
        public static function ol($list, $attributes = [])
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->ol($list, $attributes);
        }

        /**
         * Generate an un-ordered list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString|string
         * @static
         */
        public static function ul($list, $attributes = [])
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->ul($list, $attributes);
        }

        /**
         * Generate a description list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function dl($list, $attributes = [])
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->dl($list, $attributes);
        }

        /**
         * Build an HTML attribute string from an array.
         *
         * @param array $attributes
         * @return string
         * @static
         */
        public static function attributes($attributes)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->attributes($attributes);
        }

        /**
         * Obfuscate a string to prevent spam-bots from sniffing it.
         *
         * @param string $value
         * @return string
         * @static
         */
        public static function obfuscate($value)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->obfuscate($value);
        }

        /**
         * Generate a meta tag.
         *
         * @param string $name
         * @param string $content
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function meta($name, $content, $attributes = [])
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->meta($name, $content, $attributes);
        }

        /**
         * Generate an html tag.
         *
         * @param string $tag
         * @param mixed $content
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString
         * @static
         */
        public static function tag($tag, $content, $attributes = [])
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->tag($tag, $content, $attributes);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Collective\Html\HtmlBuilder::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Collective\Html\HtmlBuilder::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Collective\Html\HtmlBuilder::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Collective\Html\HtmlBuilder::flushMacros();
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static function macroCall($method, $parameters)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->macroCall($method, $parameters);
        }

        /**
         * Register a custom component.
         *
         * @param $name
         * @param $view
         * @param array $signature
         * @return void
         * @static
         */
        public static function component($name, $view, $signature)
        {
            \Collective\Html\HtmlBuilder::component($name, $view, $signature);
        }

        /**
         * Check if a component is registered.
         *
         * @param $name
         * @return bool
         * @static
         */
        public static function hasComponent($name)
        {
            return \Collective\Html\HtmlBuilder::hasComponent($name);
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return \Illuminate\Contracts\View\View|mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static function componentCall($method, $parameters)
        {
            /** @var \Collective\Html\HtmlBuilder $instance */
            return $instance->componentCall($method, $parameters);
        }

            }
    }

namespace Musonza\Chat\Facades {
    /**
     */
    class ChatFacade {
        /**
         * Creates a new conversation.
         *
         * @return \Musonza\Chat\Models\Conversation
         * @static
         */
        public static function createConversation($participants, $data = [], $name = null)
        {
            /** @var \Musonza\Chat\Chat $instance */
            return $instance->createConversation($participants, $data, $name);
        }

        /**
         * @static
         */
        public static function makeDirect()
        {
            /** @var \Musonza\Chat\Chat $instance */
            return $instance->makeDirect();
        }

        /**
         * Sets message.
         *
         * @param string $message
         * @return \Musonza\Chat\Services\MessageService
         * @static
         */
        public static function message($message)
        {
            /** @var \Musonza\Chat\Chat $instance */
            return $instance->message($message);
        }

        /**
         * Gets MessageService.
         *
         * @return \Musonza\Chat\Services\MessageService
         * @static
         */
        public static function messages()
        {
            /** @var \Musonza\Chat\Chat $instance */
            return $instance->messages();
        }

        /**
         * Sets Conversation.
         *
         * @return \Musonza\Chat\Services\ConversationService
         * @static
         */
        public static function conversation($conversation)
        {
            /** @var \Musonza\Chat\Chat $instance */
            return $instance->conversation($conversation);
        }

        /**
         * Gets ConversationService.
         *
         * @return \Musonza\Chat\Services\ConversationService
         * @static
         */
        public static function conversations()
        {
            /** @var \Musonza\Chat\Chat $instance */
            return $instance->conversations();
        }

        /**
         * Get unread notifications.
         *
         * @return \Musonza\Chat\Models\MessageNotification
         * @static
         */
        public static function unReadNotifications()
        {
            /** @var \Musonza\Chat\Chat $instance */
            return $instance->unReadNotifications();
        }

        /**
         * Should the messages be broadcasted.
         *
         * @return bool
         * @static
         */
        public static function broadcasts()
        {
            return \Musonza\Chat\Chat::broadcasts();
        }

        /**
         * @static
         */
        public static function sentMessageEvent()
        {
            return \Musonza\Chat\Chat::sentMessageEvent();
        }

        /**
         * @static
         */
        public static function senderFieldsWhitelist()
        {
            return \Musonza\Chat\Chat::senderFieldsWhitelist();
        }

        /**
         * Check if message encryption is enabled.
         *
         * @static
         */
        public static function shouldEncryptMessages()
        {
            return \Musonza\Chat\Chat::shouldEncryptMessages();
        }

        /**
         * Sets participant.
         *
         * @return \Musonza\Chat\Chat
         * @static
         */
        public static function setParticipant($participant)
        {
            /** @var \Musonza\Chat\Chat $instance */
            return $instance->setParticipant($participant);
        }

        /**
         * Sets the participant that's sending the message.
         *
         * @return \Musonza\Chat\Chat
         * @static
         */
        public static function from($sender)
        {
            /** @var \Musonza\Chat\Chat $instance */
            return $instance->from($sender);
        }

        /**
         * Sets the participant to receive the message.
         *
         * @return \Musonza\Chat\Chat
         * @static
         */
        public static function to($recipient)
        {
            /** @var \Musonza\Chat\Chat $instance */
            return $instance->to($recipient);
        }

            }
    }

namespace AnourValar\EloquentSerialize\Facades {
    /**
     */
    class EloquentSerializeFacade {
        /**
         * Pack
         *
         * @param \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Relations\Relation $builder
         * @return string
         * @throws \RuntimeException
         * @static
         */
        public static function serialize($builder)
        {
            /** @var \AnourValar\EloquentSerialize\Service $instance */
            return $instance->serialize($builder);
        }

        /**
         * Unpack
         *
         * @param mixed $package
         * @throws \LogicException
         * @return \Illuminate\Database\Eloquent\Builder
         * @static
         */
        public static function unserialize($package)
        {
            /** @var \AnourValar\EloquentSerialize\Service $instance */
            return $instance->unserialize($package);
        }

            }
    }

namespace Artesaos\SEOTools\Facades {
    /**
     * SEOTools is a facade for the `SEOTools` implementation access.
     *
     * @see \Artesaos\SEOTools\Contracts\SEOTools
     */
    class SEOTools {
        /**
         * @return \Artesaos\SEOTools\Contracts\MetaTags
         * @static
         */
        public static function metatags()
        {
            /** @var \Artesaos\SEOTools\SEOTools $instance */
            return $instance->metatags();
        }

        /**
         * @return \Artesaos\SEOTools\Contracts\OpenGraph
         * @static
         */
        public static function opengraph()
        {
            /** @var \Artesaos\SEOTools\SEOTools $instance */
            return $instance->opengraph();
        }

        /**
         * @return \Artesaos\SEOTools\Contracts\TwitterCards
         * @static
         */
        public static function twitter()
        {
            /** @var \Artesaos\SEOTools\SEOTools $instance */
            return $instance->twitter();
        }

        /**
         * @return \Artesaos\SEOTools\Contracts\JsonLd
         * @static
         */
        public static function jsonLd()
        {
            /** @var \Artesaos\SEOTools\SEOTools $instance */
            return $instance->jsonLd();
        }

        /**
         * @return \Artesaos\SEOTools\Contracts\JsonLdMulti
         * @static
         */
        public static function jsonLdMulti()
        {
            /** @var \Artesaos\SEOTools\SEOTools $instance */
            return $instance->jsonLdMulti();
        }

        /**
         * Setup title for all seo providers.
         *
         * @param string $title
         * @param bool $appendDefault
         * @return static
         * @static
         */
        public static function setTitle($title, $appendDefault = true)
        {
            /** @var \Artesaos\SEOTools\SEOTools $instance */
            return $instance->setTitle($title, $appendDefault);
        }

        /**
         * Setup description for all seo providers.
         *
         * @param string $description
         * @return static
         * @static
         */
        public static function setDescription($description)
        {
            /** @var \Artesaos\SEOTools\SEOTools $instance */
            return $instance->setDescription($description);
        }

        /**
         * Sets the canonical URL.
         *
         * @param string $url
         * @return static
         * @static
         */
        public static function setCanonical($url)
        {
            /** @var \Artesaos\SEOTools\SEOTools $instance */
            return $instance->setCanonical($url);
        }

        /**
         * Add one or more images urls.
         *
         * @param array|string $urls
         * @return static
         * @static
         */
        public static function addImages($urls)
        {
            /** @var \Artesaos\SEOTools\SEOTools $instance */
            return $instance->addImages($urls);
        }

        /**
         * Get current title from metatags.
         *
         * @param bool $session
         * @return string
         * @static
         */
        public static function getTitle($session = false)
        {
            /** @var \Artesaos\SEOTools\SEOTools $instance */
            return $instance->getTitle($session);
        }

        /**
         * Generate from all seo providers.
         *
         * @param bool $minify
         * @return string
         * @static
         */
        public static function generate($minify = false)
        {
            /** @var \Artesaos\SEOTools\SEOTools $instance */
            return $instance->generate($minify);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Artesaos\SEOTools\SEOTools::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Artesaos\SEOTools\SEOTools::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Artesaos\SEOTools\SEOTools::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Artesaos\SEOTools\SEOTools::flushMacros();
        }

            }
    /**
     * JsonLd is a facade for the `JsonLd` implementation access.
     *
     * @see \Artesaos\SEOTools\Contracts\JsonLd
     */
    class JsonLd {
        /**
         * Check if all attribute are empty
         *
         * @return static
         * @static
         */
        public static function isEmpty()
        {
            /** @var \Artesaos\SEOTools\JsonLd $instance */
            return $instance->isEmpty();
        }

        /**
         * Generates linked data script tag.
         *
         * @param bool $minify
         * @return string
         * @static
         */
        public static function generate($minify = false)
        {
            /** @var \Artesaos\SEOTools\JsonLd $instance */
            return $instance->generate($minify);
        }

        /**
         * @return string[]|string[][]
         * @static
         */
        public static function convertToArray()
        {
            /** @var \Artesaos\SEOTools\JsonLd $instance */
            return $instance->convertToArray();
        }

        /**
         * @param string $key
         * @param string|array $value
         * @return static
         * @static
         */
        public static function addValue($key, $value)
        {
            /** @var \Artesaos\SEOTools\JsonLd $instance */
            return $instance->addValue($key, $value);
        }

        /**
         * @param array $values
         * @return static
         * @static
         */
        public static function addValues($values)
        {
            /** @var \Artesaos\SEOTools\JsonLd $instance */
            return $instance->addValues($values);
        }

        /**
         * @param string $type
         * @return static
         * @static
         */
        public static function setType($type)
        {
            /** @var \Artesaos\SEOTools\JsonLd $instance */
            return $instance->setType($type);
        }

        /**
         * @param string $title
         * @return static
         * @static
         */
        public static function setTitle($title)
        {
            /** @var \Artesaos\SEOTools\JsonLd $instance */
            return $instance->setTitle($title);
        }

        /**
         * @param string $site
         * @return static
         * @static
         */
        public static function setSite($site)
        {
            /** @var \Artesaos\SEOTools\JsonLd $instance */
            return $instance->setSite($site);
        }

        /**
         * @param string $description
         * @return static
         * @static
         */
        public static function setDescription($description)
        {
            /** @var \Artesaos\SEOTools\JsonLd $instance */
            return $instance->setDescription($description);
        }

        /**
         * @param string|null|bool $url
         * @return static
         * @static
         */
        public static function setUrl($url)
        {
            /** @var \Artesaos\SEOTools\JsonLd $instance */
            return $instance->setUrl($url);
        }

        /**
         * @param string|array $images
         * @return static
         * @static
         */
        public static function setImages($images)
        {
            /** @var \Artesaos\SEOTools\JsonLd $instance */
            return $instance->setImages($images);
        }

        /**
         * @param string|array $image
         * @return static
         * @static
         */
        public static function addImage($image)
        {
            /** @var \Artesaos\SEOTools\JsonLd $instance */
            return $instance->addImage($image);
        }

        /**
         * {@inheritdoc}
         *
         * @static
         */
        public static function setImage($image)
        {
            /** @var \Artesaos\SEOTools\JsonLd $instance */
            return $instance->setImage($image);
        }

            }
    /**
     * SEOMeta is a facade for the `MetaTags` implementation access.
     *
     * @see \Artesaos\SEOTools\Contracts\MetaTags
     */
    class SEOMeta {
        /**
         * Generates meta tags HTML./
         *
         * @param bool $minify
         * @return string
         * @static
         */
        public static function generate($minify = false)
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->generate($minify);
        }

        /**
         * Set the title.
         *
         * @param string $title
         * @param bool $appendDefault
         * @return static
         * @static
         */
        public static function setTitle($title, $appendDefault = true)
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->setTitle($title, $appendDefault);
        }

        /**
         * Sets the default title tag.
         *
         * @param string $default
         * @return static
         * @static
         */
        public static function setTitleDefault($default)
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->setTitleDefault($default);
        }

        /**
         * Set the title separator.
         *
         * @param string $separator
         * @return static
         * @static
         */
        public static function setTitleSeparator($separator)
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->setTitleSeparator($separator);
        }

        /**
         * Set the description.
         *
         * @param string $description
         * @return static
         * @static
         */
        public static function setDescription($description)
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->setDescription($description);
        }

        /**
         * Sets the list of keywords, you can send an array or string separated with commas
         * also clears the previously set keywords.
         *
         * @param string|array $keywords
         * @return static
         * @static
         */
        public static function setKeywords($keywords)
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->setKeywords($keywords);
        }

        /**
         * Add a keyword.
         *
         * @param string|array $keyword
         * @return static
         * @static
         */
        public static function addKeyword($keyword)
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->addKeyword($keyword);
        }

        /**
         * Remove a metatag.
         *
         * @param string $key
         * @return static
         * @static
         */
        public static function removeMeta($key)
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->removeMeta($key);
        }

        /**
         * Add a custom meta tag.
         *
         * @param string|array $meta
         * @param string|null $value
         * @param string $name
         * @return static
         * @static
         */
        public static function addMeta($meta, $value = null, $name = 'name')
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->addMeta($meta, $value, $name);
        }

        /**
         * Sets the canonical URL.
         *
         * @param string $url
         * @return static
         * @static
         */
        public static function setCanonical($url)
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->setCanonical($url);
        }

        /**
         * Sets the AMP html URL.
         *
         * @param string $url
         * @return \Artesaos\SEOTools\Contracts\MetaTags
         * @static
         */
        public static function setAmpHtml($url)
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->setAmpHtml($url);
        }

        /**
         * Sets the prev URL.
         *
         * @param string $url
         * @return static
         * @static
         */
        public static function setPrev($url)
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->setPrev($url);
        }

        /**
         * Sets the next URL.
         *
         * @param string $url
         * @return static
         * @static
         */
        public static function setNext($url)
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->setNext($url);
        }

        /**
         * Add an alternate language.
         *
         * @param string $lang language code in format ISO 639-1
         * @param string $url
         * @return static
         * @static
         */
        public static function addAlternateLanguage($lang, $url)
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->addAlternateLanguage($lang, $url);
        }

        /**
         * Add alternate languages.
         *
         * @param array $languages
         * @return static
         * @static
         */
        public static function addAlternateLanguages($languages)
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->addAlternateLanguages($languages);
        }

        /**
         * Set an alternate language.
         *
         * @param string $lang language code in format ISO 639-1
         * @param string $url
         * @return static
         * @static
         */
        public static function setAlternateLanguage($lang, $url)
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->setAlternateLanguage($lang, $url);
        }

        /**
         * Set alternate languages.
         *
         * @param array $languages
         * @return static
         * @static
         */
        public static function setAlternateLanguages($languages)
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->setAlternateLanguages($languages);
        }

        /**
         * Sets the meta robots.
         *
         * @param string $robots
         * @return \Artesaos\SEOTools\Contracts\MetaTags
         * @static
         */
        public static function setRobots($robots)
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->setRobots($robots);
        }

        /**
         * Get the title formatted for display.
         *
         * @return string
         * @static
         */
        public static function getTitle()
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->getTitle();
        }

        /**
         * Takes the default title.
         *
         * @return string
         * @static
         */
        public static function getDefaultTitle()
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->getDefaultTitle();
        }

        /**
         * Get the title that was set.
         *
         * @return string
         * @static
         */
        public static function getTitleSession()
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->getTitleSession();
        }

        /**
         * Get the title separator that was set.
         *
         * @return string
         * @static
         */
        public static function getTitleSeparator()
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->getTitleSeparator();
        }

        /**
         * Get the Meta keywords.
         *
         * @return array
         * @static
         */
        public static function getKeywords()
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->getKeywords();
        }

        /**
         * Get all metatags.
         *
         * @return array
         * @static
         */
        public static function getMetatags()
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->getMetatags();
        }

        /**
         * Get the Meta description.
         *
         * @return string|null
         * @static
         */
        public static function getDescription()
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->getDescription();
        }

        /**
         * Get the canonical URL.
         *
         * @return string
         * @static
         */
        public static function getCanonical()
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->getCanonical();
        }

        /**
         * Get the AMP html URL.
         *
         * @return string
         * @static
         */
        public static function getAmpHtml()
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->getAmpHtml();
        }

        /**
         * Get the prev URL.
         *
         * @return string
         * @static
         */
        public static function getPrev()
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->getPrev();
        }

        /**
         * Get the next URL.
         *
         * @return string
         * @static
         */
        public static function getNext()
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->getNext();
        }

        /**
         * Get alternate languages.
         *
         * @return array
         * @static
         */
        public static function getAlternateLanguages()
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->getAlternateLanguages();
        }

        /**
         * Get meta robots.
         *
         * @return string
         * @static
         */
        public static function getRobots()
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            return $instance->getRobots();
        }

        /**
         * Reset all data.
         *
         * @return void
         * @static
         */
        public static function reset()
        {
            /** @var \Artesaos\SEOTools\SEOMeta $instance */
            $instance->reset();
        }

            }
    /**
     * TwitterCard is a facade for the `TwitterCards` implementation access.
     *
     * @see \Artesaos\SEOTools\Contracts\TwitterCards
     */
    class TwitterCard {
        /**
         * @param bool $minify
         * @return string
         * @static
         */
        public static function generate($minify = false)
        {
            /** @var \Artesaos\SEOTools\TwitterCards $instance */
            return $instance->generate($minify);
        }

        /**
         * @param string $key
         * @param string|array $value
         * @return static
         * @static
         */
        public static function addValue($key, $value)
        {
            /** @var \Artesaos\SEOTools\TwitterCards $instance */
            return $instance->addValue($key, $value);
        }

        /**
         * @param string $title
         * @return static
         * @static
         */
        public static function setTitle($title)
        {
            /** @var \Artesaos\SEOTools\TwitterCards $instance */
            return $instance->setTitle($title);
        }

        /**
         * @param string $type
         * @return static
         * @static
         */
        public static function setType($type)
        {
            /** @var \Artesaos\SEOTools\TwitterCards $instance */
            return $instance->setType($type);
        }

        /**
         * @param string $site
         * @return static
         * @static
         */
        public static function setSite($site)
        {
            /** @var \Artesaos\SEOTools\TwitterCards $instance */
            return $instance->setSite($site);
        }

        /**
         * @param string $description
         * @return static
         * @static
         */
        public static function setDescription($description)
        {
            /** @var \Artesaos\SEOTools\TwitterCards $instance */
            return $instance->setDescription($description);
        }

        /**
         * @param string $url
         * @return static
         * @static
         */
        public static function setUrl($url)
        {
            /** @var \Artesaos\SEOTools\TwitterCards $instance */
            return $instance->setUrl($url);
        }

        /**
         * @deprecated use setImage($image) instead
         * @param string|array $image
         * @return static
         * @static
         */
        public static function addImage($image)
        {
            /** @var \Artesaos\SEOTools\TwitterCards $instance */
            return $instance->addImage($image);
        }

        /**
         * @deprecated use setImage($image) instead
         * @param string|array $images
         * @return static
         * @static
         */
        public static function setImages($images)
        {
            /** @var \Artesaos\SEOTools\TwitterCards $instance */
            return $instance->setImages($images);
        }

        /**
         * @param $image
         * @return \Artesaos\SEOTools\Contracts\TwitterCards
         * @static
         */
        public static function setImage($image)
        {
            /** @var \Artesaos\SEOTools\TwitterCards $instance */
            return $instance->setImage($image);
        }

            }
    /**
     * OpenGraph is a facade for the `OpenGraph` implementation access.
     *
     * @see \Artesaos\SEOTools\Contracts\OpenGraph
     */
    class OpenGraph {
        /**
         * Generates open graph tags.
         *
         * @param bool $minify
         * @return string
         * @static
         */
        public static function generate($minify = false)
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->generate($minify);
        }

        /**
         * Add or update property.
         *
         * @param string $key
         * @param string|array $value
         * @return static
         * @static
         */
        public static function addProperty($key, $value)
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->addProperty($key, $value);
        }

        /**
         * Set Article properties.
         *
         * @param array $attributes
         * @return static
         * @static
         */
        public static function setArticle($attributes = [])
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->setArticle($attributes);
        }

        /**
         * Set Profile properties.
         *
         * @param array $attributes
         * @return static
         * @static
         */
        public static function setProfile($attributes = [])
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->setProfile($attributes);
        }

        /**
         * Set Book properties.
         *
         * @param array $attributes
         * @return static
         * @static
         */
        public static function setBook($attributes = [])
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->setBook($attributes);
        }

        /**
         * Set Music Song properties.
         *
         * @param array $attributes
         * @return static
         * @static
         */
        public static function setMusicSong($attributes = [])
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->setMusicSong($attributes);
        }

        /**
         * Set Music Album properties.
         *
         * @param array $attributes
         * @return static
         * @static
         */
        public static function setMusicAlbum($attributes = [])
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->setMusicAlbum($attributes);
        }

        /**
         * Set Music Playlist properties.
         *
         * @param array $attributes
         * @return static
         * @static
         */
        public static function setMusicPlaylist($attributes = [])
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->setMusicPlaylist($attributes);
        }

        /**
         * Set Music  RadioStation properties.
         *
         * @param array $attributes
         * @return static
         * @static
         */
        public static function setMusicRadioStation($attributes = [])
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->setMusicRadioStation($attributes);
        }

        /**
         * Set Video Movie properties.
         *
         * @param array $attributes
         * @return static
         * @static
         */
        public static function setVideoMovie($attributes = [])
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->setVideoMovie($attributes);
        }

        /**
         * Set Video Episode properties.
         *
         * @param array $attributes
         * @return static
         * @static
         */
        public static function setVideoEpisode($attributes = [])
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->setVideoEpisode($attributes);
        }

        /**
         * Set Video Episode properties.
         *
         * @param array $attributes
         * @return static
         * @static
         */
        public static function setVideoOther($attributes = [])
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->setVideoOther($attributes);
        }

        /**
         * Set Video Episode properties.
         *
         * @param array $attributes
         * @return static
         * @static
         */
        public static function setVideoTVShow($attributes = [])
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->setVideoTVShow($attributes);
        }

        /**
         * Add Video properties.
         *
         * @param string|null $source
         * @param array $attributes
         * @return static
         * @static
         */
        public static function addVideo($source = null, $attributes = [])
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->addVideo($source, $attributes);
        }

        /**
         * Add audio properties.
         *
         * @param string|null $source
         * @param array $attributes
         * @return static
         * @static
         */
        public static function addAudio($source = null, $attributes = [])
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->addAudio($source, $attributes);
        }

        /**
         * Set place properties.
         *
         * @param array $attributes opengraph place attributes
         * @return \Artesaos\SEOTools\Contracts\OpenGraph
         * @static
         */
        public static function setPlace($attributes = [])
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->setPlace($attributes);
        }

        /**
         * Set product properties.
         *
         * Reference: https://developers.facebook.com/docs/marketing-api/catalog/reference/#example-feeds
         *
         * @param array $attributes opengraph product attributes
         * @return \Artesaos\SEOTools\Contracts\OpenGraph
         * @static
         */
        public static function setProduct($attributes = [])
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->setProduct($attributes);
        }

        /**
         * Remove property.
         *
         * @param string $key
         * @return static
         * @static
         */
        public static function removeProperty($key)
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->removeProperty($key);
        }

        /**
         * Add image to properties.
         *
         * @param string $url
         * @param array $attributes
         * @return static
         * @static
         */
        public static function addImage($source = null, $attributes = [])
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->addImage($source, $attributes);
        }

        /**
         * Add images to properties.
         *
         * @param array $urls
         * @return static
         * @static
         */
        public static function addImages($urls)
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->addImages($urls);
        }

        /**
         * Define type property.
         *
         * @param string|null $type set the opengraph type
         * @return static
         * @static
         */
        public static function setType($type = null)
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->setType($type);
        }

        /**
         * Define title property.
         *
         * @param string $title
         * @return static
         * @static
         */
        public static function setTitle($title = null)
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->setTitle($title);
        }

        /**
         * Define description property.
         *
         * @param string $description
         * @return static
         * @static
         */
        public static function setDescription($description = null)
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->setDescription($description);
        }

        /**
         * Define url property.
         *
         * @param string $url
         * @return static
         * @static
         */
        public static function setUrl($url)
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->setUrl($url);
        }

        /**
         * Define site_name property.
         *
         * @param string $name
         * @return static
         * @static
         */
        public static function setSiteName($name)
        {
            /** @var \Artesaos\SEOTools\OpenGraph $instance */
            return $instance->setSiteName($name);
        }

            }
    }

namespace Bgaze\BootstrapForm\Support\Facades {
    /**
     */
    class BF {
        /**
         * Returns the "inheritable" forms settings.
         *
         * @return \Illuminate\Support\Collection
         * @static
         */
        public static function settings()
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->settings();
        }

        /**
         * Returns the Illuminate HtmlBuilder instance.
         *
         * @return \Collective\Html\HtmlBuilder
         * @static
         */
        public static function htmlBuilder()
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->htmlBuilder();
        }

        /**
         * Returns the Illuminate FormBuilder instance.
         *
         * @return \Collective\Html\FormBuilder
         * @static
         */
        public static function formBuilder()
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->formBuilder();
        }

        /**
         * Open a form.
         *
         * @param array $options
         * @return string
         * @static
         */
        public static function open($options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->open($options);
        }

        /**
         * Reset and close the form.
         *
         * @return string
         * @static
         */
        public static function close()
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->close();
        }

        /**
         * Open a vertical Bootstrap form.
         *
         * @param array $options
         * @return string
         * @static
         */
        public static function vertical($options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->vertical($options);
        }

        /**
         * Open an inline Bootstrap form.
         *
         * @param array $options
         * @return string
         * @static
         */
        public static function inline($options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->inline($options);
        }

        /**
         * Open a horizontal Bootstrap form.
         *
         * @param array $options
         * @return string
         * @static
         */
        public static function horizontal($options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->horizontal($options);
        }

        /**
         * Create a Bootstrap text field input.
         *
         * @param string $name
         * @param string $label
         * @param string $value
         * @param array $options
         * @return string
         * @static
         */
        public static function text($name, $label = null, $value = null, $options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->text($name, $label, $value, $options);
        }

        /**
         * Create a Bootstrap email field input.
         *
         * @param string $name
         * @param string $label
         * @param string $value
         * @param array $options
         * @return string
         * @static
         */
        public static function email($name = 'email', $label = null, $value = null, $options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->email($name, $label, $value, $options);
        }

        /**
         * Create a Bootstrap URL field input.
         *
         * @param string $name
         * @param string $label
         * @param string $value
         * @param array $options
         * @return string
         * @static
         */
        public static function url($name, $label = null, $value = null, $options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->url($name, $label, $value, $options);
        }

        /**
         * Create a Bootstrap tel field input.
         *
         * @param string $name
         * @param string $label
         * @param string $value
         * @param array $options
         * @return string
         * @static
         */
        public static function tel($name, $label = null, $value = null, $options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->tel($name, $label, $value, $options);
        }

        /**
         * Create a Bootstrap number field input.
         *
         * @param string $name
         * @param string $label
         * @param string $value
         * @param array $options
         * @return string
         * @static
         */
        public static function number($name, $label = null, $value = null, $options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->number($name, $label, $value, $options);
        }

        /**
         * Create a Bootstrap date field input.
         *
         * @param string $name
         * @param string $label
         * @param string $value
         * @param array $options
         * @return string
         * @static
         */
        public static function date($name, $label = null, $value = null, $options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->date($name, $label, $value, $options);
        }

        /**
         * Create a Bootstrap email time input.
         *
         * @param string $name
         * @param string $label
         * @param string $value
         * @param array $options
         * @return string
         * @static
         */
        public static function time($name, $label = null, $value = null, $options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->time($name, $label, $value, $options);
        }

        /**
         * Create a Bootstrap password field input.
         *
         * @param string $name
         * @param string $label
         * @param array $options
         * @return string
         * @static
         */
        public static function password($name, $label = null, $options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->password($name, $label, $options);
        }

        /**
         * Create a Bootstrap color field input.
         *
         * @param string $name
         * @param string $label
         * @param array $options
         * @return string
         * @static
         */
        public static function color($name, $label = null, $value = null, $options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->color($name, $label, $value, $options);
        }

        /**
         * Create a Bootstrap textarea field input.
         *
         * @param string $name
         * @param string $label
         * @param string $value
         * @param array $options
         * @return string
         * @static
         */
        public static function textarea($name, $label = null, $value = null, $options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->textarea($name, $label, $value, $options);
        }

        /**
         * Create a select box field.
         *
         * @param string $name
         * @param string $label
         * @param array $choices
         * @param string $selected
         * @param array $options
         * @return string
         * @static
         */
        public static function select($name, $label = null, $choices = [], $selected = null, $options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->select($name, $label, $choices, $selected, $options);
        }

        /**
         * Create a Boostrap file upload button.
         *
         * @param string $name
         * @param string $label
         * @param array $options
         * @return string
         * @static
         */
        public static function file($name, $label = null, $options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->file($name, $label, $options);
        }

        /**
         * Create a Boostrap file upload button.
         *
         * @param string $name
         * @param string $label
         * @param string $value
         * @param array $options
         * @return string
         * @static
         */
        public static function range($name, $label = null, $value = null, $options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->range($name, $label, $value, $options);
        }

        /**
         * Create a hidden field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string
         * @static
         */
        public static function hidden($name, $value = null, $options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->hidden($name, $value, $options);
        }

        /**
         * Create a Bootstrap checkbox input.
         *
         * @param string $name
         * @param string $label
         * @param mixed $value
         * @param bool $checked
         * @param array $options
         * @return string
         * @static
         */
        public static function checkbox($name, $label = null, $value = 1, $checked = null, $options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->checkbox($name, $label, $value, $checked, $options);
        }

        /**
         * Create a collection of Bootstrap checkboxes.
         *
         * @param string $name
         * @param string $label
         * @param array $choices
         * @param mixed $checked
         * @param array $options
         * @return string
         * @static
         */
        public static function checkboxes($name, $label = null, $choices = [], $checked = null, $options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->checkboxes($name, $label, $choices, $checked, $options);
        }

        /**
         * Create a Bootstrap radio input.
         *
         * @param string $name
         * @param string $label
         * @param mixed $value
         * @param bool $checked
         * @param array $options
         * @return string
         * @static
         */
        public static function radio($name, $label = null, $value = null, $checked = null, $options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->radio($name, $label, $value, $checked, $options);
        }

        /**
         * Create a collection of Bootstrap radio inputs.
         *
         * @param string $name
         * @param string $label
         * @param array $choices
         * @param mixed $checked
         * @param array $options
         * @return string
         * @static
         */
        public static function radios($name, $label = null, $choices = [], $checked = null, $options = [])
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->radios($name, $label, $choices, $checked, $options);
        }

        /**
         * Create a Bootstrap label.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string
         * @static
         */
        public static function label($name, $value = null, $options = [], $escapeHtml = false)
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->label($name, $value, $options, $escapeHtml);
        }

        /**
         * Create a Boostrap submit button.
         *
         * @param string $value
         * @param mixed $options
         * @return string
         * @static
         */
        public static function submit($value = null, $options = null)
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->submit($value, $options);
        }

        /**
         * Create a Boostrap reset button.
         *
         * @param string $value
         * @param mixed $options
         * @return string
         * @static
         */
        public static function reset($value = null, $options = null)
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->reset($value, $options);
        }

        /**
         * Create a Boostrap button.
         *
         * @param string $value
         * @param mixed $options
         * @return string
         * @static
         */
        public static function button($value = null, $options = null)
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->button($value, $options);
        }

        /**
         * Create a Boostrap link button.
         *
         * @param string $url
         * @param string $title
         * @param mixed $options
         * @return string
         * @static
         */
        public static function link($url, $title = null, $options = null)
        {
            /** @var \Bgaze\BootstrapForm\BootstrapForm $instance */
            return $instance->link($url, $title, $options);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Bgaze\BootstrapForm\BootstrapForm::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Bgaze\BootstrapForm\BootstrapForm::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Bgaze\BootstrapForm\BootstrapForm::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Bgaze\BootstrapForm\BootstrapForm::flushMacros();
        }

            }
    }

namespace Intervention\Image\Facades {
    /**
     */
    class Image {
        /**
         * Overrides configuration settings
         *
         * @param array $config
         * @return self
         * @static
         */
        public static function configure($config = [])
        {
            /** @var \Intervention\Image\ImageManager $instance */
            return $instance->configure($config);
        }

        /**
         * Initiates an Image instance from different input types
         *
         * @param mixed $data
         * @return \Intervention\Image\Image
         * @static
         */
        public static function make($data)
        {
            /** @var \Intervention\Image\ImageManager $instance */
            return $instance->make($data);
        }

        /**
         * Creates an empty image canvas
         *
         * @param int $width
         * @param int $height
         * @param mixed $background
         * @return \Intervention\Image\Image
         * @static
         */
        public static function canvas($width, $height, $background = null)
        {
            /** @var \Intervention\Image\ImageManager $instance */
            return $instance->canvas($width, $height, $background);
        }

        /**
         * Create new cached image and run callback
         * (requires additional package intervention/imagecache)
         *
         * @param \Closure $callback
         * @param int $lifetime
         * @param boolean $returnObj
         * @return \Image
         * @static
         */
        public static function cache($callback, $lifetime = null, $returnObj = false)
        {
            /** @var \Intervention\Image\ImageManager $instance */
            return $instance->cache($callback, $lifetime, $returnObj);
        }

            }
    }

namespace Laravel\Mcp\Facades {
    /**
     * @see Registrar
     */
    class Mcp {
        /**
         * @param class-string<Server> $serverClass
         * @static
         */
        public static function web($route, $serverClass)
        {
            /** @var \Laravel\Mcp\Server\Registrar $instance */
            return $instance->web($route, $serverClass);
        }

        /**
         * @param class-string<Server> $serverClass
         * @static
         */
        public static function local($handle, $serverClass)
        {
            /** @var \Laravel\Mcp\Server\Registrar $instance */
            return $instance->local($handle, $serverClass);
        }

        /**
         * @param \Closure():  Client  $factory
         * @static
         */
        public static function registerClient($name, $factory)
        {
            /** @var \Laravel\Mcp\Server\Registrar $instance */
            return $instance->registerClient($name, $factory);
        }

        /**
         * @static
         */
        public static function client($name)
        {
            /** @var \Laravel\Mcp\Server\Registrar $instance */
            return $instance->client($name);
        }

        /**
         * @param \Closure(string, TokenSet):  mixed|array{0: class-string, 1: string}  $handler
         * @param array<int, string>|string $middleware
         * @static
         */
        public static function oAuthRoutesFor($client, $handler, $middleware = 'web', $connectUri = null, $callbackUri = null)
        {
            /** @var \Laravel\Mcp\Server\Registrar $instance */
            return $instance->oAuthRoutesFor($client, $handler, $middleware, $connectUri, $callbackUri);
        }

        /**
         * @static
         */
        public static function getLocalServer($handle)
        {
            /** @var \Laravel\Mcp\Server\Registrar $instance */
            return $instance->getLocalServer($handle);
        }

        /**
         * @static
         */
        public static function getWebServer($route)
        {
            /** @var \Laravel\Mcp\Server\Registrar $instance */
            return $instance->getWebServer($route);
        }

        /**
         * @return array<string, callable|Route>
         * @static
         */
        public static function servers()
        {
            /** @var \Laravel\Mcp\Server\Registrar $instance */
            return $instance->servers();
        }

        /**
         * @static
         */
        public static function oauthRoutes($oauthPrefix = 'oauth')
        {
            /** @var \Laravel\Mcp\Server\Registrar $instance */
            return $instance->oauthRoutes($oauthPrefix);
        }

        /**
         * @return array<string, string>
         * @static
         */
        public static function ensureMcpScope()
        {
            return \Laravel\Mcp\Server\Registrar::ensureMcpScope();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Laravel\Mcp\Server\Registrar::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Laravel\Mcp\Server\Registrar::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Laravel\Mcp\Server\Registrar::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Laravel\Mcp\Server\Registrar::flushMacros();
        }

            }
    }

namespace Laravel\Socialite\Facades {
    /**
     */
    class Socialite {
        /**
         * Get a driver instance.
         *
         * @param string $driver
         * @return mixed
         * @static
         */
        public static function with($driver)
        {
            /** @var \Laravel\Socialite\SocialiteManager $instance */
            return $instance->with($driver);
        }

        /**
         * Build an OAuth 2 provider instance.
         *
         * @param string $provider
         * @param array $config
         * @return \Laravel\Socialite\Two\AbstractProvider
         * @static
         */
        public static function buildProvider($provider, $config)
        {
            /** @var \Laravel\Socialite\SocialiteManager $instance */
            return $instance->buildProvider($provider, $config);
        }

        /**
         * Format the server configuration.
         *
         * @param array $config
         * @return array
         * @static
         */
        public static function formatConfig($config)
        {
            /** @var \Laravel\Socialite\SocialiteManager $instance */
            return $instance->formatConfig($config);
        }

        /**
         * Forget all of the resolved driver instances.
         *
         * @return \Laravel\Socialite\SocialiteManager
         * @static
         */
        public static function forgetDrivers()
        {
            /** @var \Laravel\Socialite\SocialiteManager $instance */
            return $instance->forgetDrivers();
        }

        /**
         * Set the container instance used by the manager.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return \Laravel\Socialite\SocialiteManager
         * @static
         */
        public static function setContainer($container)
        {
            /** @var \Laravel\Socialite\SocialiteManager $instance */
            return $instance->setContainer($container);
        }

        /**
         * Get the default driver name.
         *
         * @return string
         * @throws \InvalidArgumentException
         * @static
         */
        public static function getDefaultDriver()
        {
            /** @var \Laravel\Socialite\SocialiteManager $instance */
            return $instance->getDefaultDriver();
        }

        /**
         * Get a driver instance.
         *
         * @param \UnitEnum|string|null $driver
         * @return mixed
         * @throws \InvalidArgumentException
         * @static
         */
        public static function driver($driver = null)
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Laravel\Socialite\SocialiteManager $instance */
            return $instance->driver($driver);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param-closure-this $this  $callback
         * @return \Laravel\Socialite\SocialiteManager
         * @static
         */
        public static function extend($driver, $callback)
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Laravel\Socialite\SocialiteManager $instance */
            return $instance->extend($driver, $callback);
        }

        /**
         * Get all of the created "drivers".
         *
         * @return array<string, mixed>
         * @static
         */
        public static function getDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Laravel\Socialite\SocialiteManager $instance */
            return $instance->getDrivers();
        }

        /**
         * Get the container instance used by the manager.
         *
         * @return \Illuminate\Contracts\Container\Container
         * @static
         */
        public static function getContainer()
        {
            //Method inherited from \Illuminate\Support\Manager 
            /** @var \Laravel\Socialite\SocialiteManager $instance */
            return $instance->getContainer();
        }

            }
    }

namespace Livewire {
    /**
     * @see \Livewire\LivewireManager
     */
    class Livewire {
        /**
         * @static
         */
        public static function setProvider($provider)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->setProvider($provider);
        }

        /**
         * @static
         */
        public static function provide($callback)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->provide($callback);
        }

        /**
         * @static
         */
        public static function component($name, $class = null)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->component($name, $class);
        }

        /**
         * @static
         */
        public static function addComponent($name, $viewPath = null, $class = null)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->addComponent($name, $viewPath, $class);
        }

        /**
         * @static
         */
        public static function addLocation($viewPath = null, $classNamespace = null)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->addLocation($viewPath, $classNamespace);
        }

        /**
         * @static
         */
        public static function addNamespace($namespace, $viewPath = null, $classNamespace = null, $classPath = null, $classViewPath = null)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->addNamespace($namespace, $viewPath, $classNamespace, $classPath, $classViewPath);
        }

        /**
         * @static
         */
        public static function componentHook($hook)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->componentHook($hook);
        }

        /**
         * @static
         */
        public static function propertySynthesizer($synth)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->propertySynthesizer($synth);
        }

        /**
         * @static
         */
        public static function directive($name, $callback)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->directive($name, $callback);
        }

        /**
         * @static
         */
        public static function precompiler($callback)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->precompiler($callback);
        }

        /**
         * @static
         */
        public static function prepareViewsForCompilationUsing($callback)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->prepareViewsForCompilationUsing($callback);
        }

        /**
         * @static
         */
        public static function new($name, $id = null)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->new($name, $id);
        }

        /**
         * @deprecated This method will be removed in a future version. Use exists() instead.
         * @static
         */
        public static function isDiscoverable($componentNameOrClass)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->isDiscoverable($componentNameOrClass);
        }

        /**
         * @static
         */
        public static function exists($componentNameOrClass)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->exists($componentNameOrClass);
        }

        /**
         * @static
         */
        public static function resolveMissingComponent($resolver)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->resolveMissingComponent($resolver);
        }

        /**
         * @static
         */
        public static function mount($name, $params = [], $key = null, $slots = [])
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->mount($name, $params, $key, $slots);
        }

        /**
         * @static
         */
        public static function snapshot($component, $context = null)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->snapshot($component, $context);
        }

        /**
         * @static
         */
        public static function fromSnapshot($snapshot)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->fromSnapshot($snapshot);
        }

        /**
         * @static
         */
        public static function listen($eventName, $callback)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->listen($eventName, $callback);
        }

        /**
         * @static
         */
        public static function current()
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->current();
        }

        /**
         * @static
         */
        public static function findSynth($keyOrTarget, $component)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->findSynth($keyOrTarget, $component);
        }

        /**
         * @static
         */
        public static function update($snapshot, $diff, $calls)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->update($snapshot, $diff, $calls);
        }

        /**
         * @static
         */
        public static function updateProperty($component, $path, $value)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->updateProperty($component, $path, $value);
        }

        /**
         * @static
         */
        public static function isLivewireRequest()
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->isLivewireRequest();
        }

        /**
         * @static
         */
        public static function componentHasBeenRendered()
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->componentHasBeenRendered();
        }

        /**
         * @static
         */
        public static function forceAssetInjection()
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->forceAssetInjection();
        }

        /**
         * @static
         */
        public static function setUpdateRoute($callback)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->setUpdateRoute($callback);
        }

        /**
         * @static
         */
        public static function getUriPrefix()
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->getUriPrefix();
        }

        /**
         * @static
         */
        public static function getUpdateUri()
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->getUpdateUri();
        }

        /**
         * @static
         */
        public static function setScriptRoute($callback)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->setScriptRoute($callback);
        }

        /**
         * @static
         */
        public static function useScriptTagAttributes($attributes)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->useScriptTagAttributes($attributes);
        }

        /**
         * @static
         */
        public static function withUrlParams($params)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->withUrlParams($params);
        }

        /**
         * @static
         */
        public static function withQueryParams($params)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->withQueryParams($params);
        }

        /**
         * @static
         */
        public static function withCookie($name, $value)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->withCookie($name, $value);
        }

        /**
         * @static
         */
        public static function withCookies($cookies)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->withCookies($cookies);
        }

        /**
         * @static
         */
        public static function withHeaders($headers)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->withHeaders($headers);
        }

        /**
         * @static
         */
        public static function withoutLazyLoading()
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->withoutLazyLoading();
        }

        /**
         * @template TComponent of \Livewire\Component
         * @param class-string<TComponent>|TComponent|string|array<array-key, \Livewire\Component> $name
         * @param array $params
         * @return Testable<TComponent>
         * @static
         */
        public static function test($name, $params = [])
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->test($name, $params);
        }

        /**
         * @static
         */
        public static function visit($name, $args = [])
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->visit($name, $args);
        }

        /**
         * @static
         */
        public static function actingAs($user, $driver = null)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->actingAs($user, $driver);
        }

        /**
         * @static
         */
        public static function isRunningServerless()
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->isRunningServerless();
        }

        /**
         * @static
         */
        public static function addPersistentMiddleware($middleware)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->addPersistentMiddleware($middleware);
        }

        /**
         * @static
         */
        public static function setPersistentMiddleware($middleware)
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->setPersistentMiddleware($middleware);
        }

        /**
         * @static
         */
        public static function getPersistentMiddleware()
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->getPersistentMiddleware();
        }

        /**
         * @static
         */
        public static function zap()
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->zap();
        }

        /**
         * @static
         */
        public static function flushState()
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->flushState();
        }

        /**
         * @static
         */
        public static function originalUrl()
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->originalUrl();
        }

        /**
         * @static
         */
        public static function originalPath()
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->originalPath();
        }

        /**
         * @static
         */
        public static function originalMethod()
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->originalMethod();
        }

        /**
         * @static
         */
        public static function isCspSafe()
        {
            /** @var \Livewire\LivewireManager $instance */
            return $instance->isCspSafe();
        }

            }
    }

namespace Opcodes\LogViewer\Facades {
    /**
     * @see LogViewerService
     */
    class LogViewer {
        /**
         * @static
         */
        public static function timezone()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->timezone();
        }

        /**
         * @static
         */
        public static function basePathForLogs()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->basePathForLogs();
        }

        /**
         * @return \Opcodes\LogViewer\LogFileCollection|\Opcodes\LogViewer\LogFile[]
         * @static
         */
        public static function getFiles()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->getFiles();
        }

        /**
         * @static
         */
        public static function getFilesGroupedByFolder()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->getFilesGroupedByFolder();
        }

        /**
         * Find the file with the given identifier or file name.
         *
         * @static
         */
        public static function getFile($fileIdentifier)
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->getFile($fileIdentifier);
        }

        /**
         * @static
         */
        public static function getFolder($folderIdentifier)
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->getFolder($folderIdentifier);
        }

        /**
         * @static
         */
        public static function supportsHostsFeature()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->supportsHostsFeature();
        }

        /**
         * @static
         */
        public static function resolveHostsUsing($callback)
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->resolveHostsUsing($callback);
        }

        /**
         * @static
         */
        public static function getHosts()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->getHosts();
        }

        /**
         * @static
         */
        public static function getHost($hostIdentifier)
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->getHost($hostIdentifier);
        }

        /**
         * @static
         */
        public static function clearFileCache()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->clearFileCache();
        }

        /**
         * @static
         */
        public static function getRouteDomain()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->getRouteDomain();
        }

        /**
         * @static
         */
        public static function getRoutePrefix()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->getRoutePrefix();
        }

        /**
         * @static
         */
        public static function getRouteMiddleware()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->getRouteMiddleware();
        }

        /**
         * @static
         */
        public static function auth($callback = null)
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->auth($callback);
        }

        /**
         * @static
         */
        public static function hasAuthCallback()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->hasAuthCallback();
        }

        /**
         * @static
         */
        public static function lazyScanChunkSize()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->lazyScanChunkSize();
        }

        /**
         * @static
         */
        public static function lazyScanTimeout()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->lazyScanTimeout();
        }

        /**
         * Get the maximum number of bytes of the log that we should display.
         *
         * @static
         */
        public static function maxLogSize()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->maxLogSize();
        }

        /**
         * @static
         */
        public static function setMaxLogSize($bytes)
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->setMaxLogSize($bytes);
        }

        /**
         * @static
         */
        public static function extend($type, $class)
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->extend($type, $class);
        }

        /**
         * @static
         */
        public static function useLogFileClass($class)
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->useLogFileClass($class);
        }

        /**
         * @static
         */
        public static function useLogReaderClass($class)
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->useLogReaderClass($class);
        }

        /**
         * @static
         */
        public static function logReaderClass()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->logReaderClass();
        }

        /**
         * @static
         */
        public static function setViewLayout($layout)
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->setViewLayout($layout);
        }

        /**
         * @static
         */
        public static function getViewLayout()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->getViewLayout();
        }

        /**
         * Get the CSS for the Log Viewer dashboard.
         *
         * @static
         */
        public static function css()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->css();
        }

        /**
         * Get the JS for the Log Viewer dashboard.
         *
         * @static
         */
        public static function js()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->js();
        }

        /**
         * Get the favicon for the Log Viewer dashboard as a base64 data URI.
         *
         * @static
         */
        public static function favicon()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->favicon();
        }

        /**
         * Determine if Log Viewer's assets have been published.
         *
         * @static
         */
        public static function assetsArePublished()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->assetsArePublished();
        }

        /**
         * Determine if Log Viewer's published assets are up-to-date.
         *
         * @throws \RuntimeException
         * @deprecated Publishing assets is no longer required. Assets are now served directly from the vendor directory.
         *             This method will be removed in the next major version.
         * @static
         */
        public static function assetsAreCurrent()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->assetsAreCurrent();
        }

        /**
         * Get the current version of the Log Viewer
         *
         * @static
         */
        public static function version()
        {
            /** @var \Opcodes\LogViewer\LogViewerService $instance */
            return $instance->version();
        }

            }
    }

namespace RealRashid\SweetAlert\Facades {
    /**
     * @see \RealRashid\SweetAlert\Toaster
     */
    class Alert {
        /**
         * The default configuration for middleware alert.
         *
         * @return \RealRashid\SweetAlert\$config
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function middleware()
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->middleware();
        }

        /**
         * Flash an alert message.
         *
         * @param string $title
         * @param string $text
         * @param array $icon
         * @return void
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function alert($title = '', $text = '', $icon = null)
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            $instance->alert($title, $text, $icon);
        }

        /**
         * Show confirm alert before deleting data.
         *
         * @param string $title
         * @param string $text
         * @param string $deleteUrl
         * @param string $deleteMethod
         * @return void
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function confirmDelete($title, $text = null)
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            $instance->confirmDelete($title, $text);
        }

        /**
         * Display a success typed alert message with a text and a title.
         *
         * @param string $title
         * @param string $text
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function success($title = '', $text = '')
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->success($title, $text);
        }

        /**
         * Display a info typed alert message with a text and a title.
         *
         * @param string $title
         * @param string $text
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function info($title = '', $text = '')
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->info($title, $text);
        }

        /**
         * Display a warning typed alert message with a text and a title.
         *
         * @param string $title
         * @param string $text
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function warning($title = '', $text = '')
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->warning($title, $text);
        }

        /**
         * Display a question typed alert message with a text and a title.
         *
         * @param string $title
         * @param string $text
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function question($title = '', $text = '')
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->question($title, $text);
        }

        /**
         * Display a error typed alert message with a text and a title.
         *
         * @param string $title
         * @param string $text
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function error($title = '', $text = '')
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->error($title, $text);
        }

        /**
         * Display a message with a custom image and CSS animation disabled.
         *
         * @param string $title
         * @param string $text
         * @param string $imageUrl
         * @param integer $imageWidth
         * @param integer $imageHeight
         * @param string $imageAlt
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function image($title, $text, $imageUrl, $imageWidth, $imageHeight, $imageAlt = null)
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->image($title, $text, $imageUrl, $imageWidth, $imageHeight, $imageAlt);
        }

        /**
         * Display a html typed alert message with html code.
         *
         * @param string $title
         * @param string $code
         * @param string $icon
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function html($title = '', $code = '', $icon = '')
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->html($title, $code, $icon);
        }

        /**
         * Display an html typed alert message which is generated from a view
         *
         * @param string $title
         * @param string $view
         * @param array $data
         * @param array $mergeData
         * @param string $icon
         * @author Keller Martin <kellerjmrtn@gmail.com>
         * @static
         */
        public static function view($title, $view, $data = [], $mergeData = [], $icon = '')
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->view($title, $view, $data, $mergeData, $icon);
        }

        /**
         * Display a toast message
         *
         * @param string $title
         * @param string $icon
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function toast($title = '', $icon = '')
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->toast($title, $icon);
        }

        /**
         * Convert any alert modal to Toast
         *
         * @param string $position
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function toToast($position = '')
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->toToast($position);
        }

        /**
         * Convert any alert modal to html
         *
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function toHtml()
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->toHtml();
        }

        /**
         * Add a custom image to alert
         *
         * @param string $imageUrl
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function addImage($imageUrl)
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->addImage($imageUrl);
        }

        /**
         * Add footer section to alert()
         *
         * @param string $code
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function footer($code)
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->footer($code);
        }

        /**
         * positioned alert dialog
         *
         * @param string $position
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function position($position = 'top-end')
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->position($position);
        }

        /**
         * Modal window width
         * including paddings
         * (box-sizing: border-box).
         *
         * Can be in px or %. The default width is 32rem
         *
         * @param string $width
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function width($width = '32rem')
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->width($width);
        }

        /**
         * Modal window padding.
         *
         * The default padding is 1.25rem.
         *
         * @param string $padding
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function padding($padding = '1.25rem')
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->padding($padding);
        }

        /**
         * Modal window background
         * (CSS background property).
         *
         * The default background is '#fff'.
         *
         * @param string $background
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function background($background = '#fff')
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->background($background);
        }

        /**
         * Set to false if you want to
         * focus the first element in tab
         * order instead of "Confirm"-button by default.
         *
         * @param boolean $focus
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function focusConfirm($focus = true)
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->focusConfirm($focus);
        }

        /**
         * Set to true if you want to focus the
         * "Cancel"-button by default.
         *
         * @param boolean $focus
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function focusCancel($focus = false)
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->focusCancel($focus);
        }

        /**
         * Custom animation with [Animate.css](https://daneden.github.io/animate.css/)
         * CSS classes for animations when showing a popup (fade in):
         * CSS classes for animations when hiding a popup (fade out):
         *
         * @param string $showAnimation
         * @param string $hideAnimation
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function animation($showAnimation, $hideAnimation)
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->animation($showAnimation, $hideAnimation);
        }

        /**
         * Persistent the alert modal
         *
         * @param boolean $showConfirmBtn
         * @param boolean $showCloseBtn
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function persistent($showConfirmBtn = true, $showCloseBtn = false)
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->persistent($showConfirmBtn, $showCloseBtn);
        }

        /**
         * auto close alert modal after
         * specifid time
         *
         * @param integer $milliseconds
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function autoClose($milliseconds = 5000)
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->autoClose($milliseconds);
        }

        /**
         * Display confirm button
         *
         * @param string $btnText
         * @param string $btnColor
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function showConfirmButton($btnText = 'Ok', $btnColor = '#3085d6')
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->showConfirmButton($btnText, $btnColor);
        }

        /**
         * Display cancel button
         *
         * @param string $btnText
         * @param string $btnColor
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function showCancelButton($btnText = 'Cancel', $btnColor = '#aaa')
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->showCancelButton($btnText, $btnColor);
        }

        /**
         * Display close button
         *
         * @param string $closeButtonAriaLabel
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function showCloseButton($closeButtonAriaLabel = 'aria-label')
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->showCloseButton($closeButtonAriaLabel);
        }

        /**
         * Hide close button from alert or toast
         *
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function hideCloseButton()
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->hideCloseButton();
        }

        /**
         * Apply default styling to buttons.
         *
         * If you want to use your own classes (e.g. Bootstrap classes)
         * set this parameter to false.
         *
         * @param boolean $buttonsStyling
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function buttonsStyling($buttonsStyling)
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->buttonsStyling($buttonsStyling);
        }

        /**
         * Use any HTML inside icons (e.g. Font Awesome)
         *
         * @param string $iconHtml
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function iconHtml($iconHtml)
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->iconHtml($iconHtml);
        }

        /**
         * If set to true, the timer will have a progress bar at the bottom of a popup.
         *
         * Mostly, this feature is useful with toasts.
         *
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function timerProgressBar()
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->timerProgressBar();
        }

        /**
         * Reverse buttons position
         *
         * @author Faber44 <https://github.com/Faber44>
         * @static
         */
        public static function reverseButtons()
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->reverseButtons();
        }

        /**
         * Flash the config options for alert.
         *
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function flash($type = 'config')
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->flash($type);
        }

        /**
         * Build Flash config options for flashing.
         *
         * @author Rashid Ali <realrashid05@gmail.com>
         * @static
         */
        public static function buildConfig()
        {
            /** @var \RealRashid\SweetAlert\Toaster $instance */
            return $instance->buildConfig();
        }

            }
    }

namespace Spatie\Fractal\Facades {
    /**
     * @see \Spatie\Fractal\Fractal
     */
    class Fractal {
        /**
         * @param null|mixed $data
         * @param null|string|callable|\League\Fractal\TransformerAbstract $transformer
         * @param null|\League\Fractal\Serializer\SerializerAbstract $serializer
         * @return static
         * @static
         */
        public static function create($data = null, $transformer = null, $serializer = null)
        {
            return \Spatie\Fractal\Fractal::create($data, $transformer, $serializer);
        }

        /**
         * @static
         */
        public static function respond($statusCode = 200, $headers = [], $options = 0)
        {
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->respond($statusCode, $headers, $options);
        }

        /**
         * Set the collection data that must be transformed.
         *
         * @param mixed $data
         * @param null|string|callable|\League\Fractal\TransformerAbstract $transformer
         * @param null|string $resourceName
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static function collection($data, $transformer = null, $resourceName = null)
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->collection($data, $transformer, $resourceName);
        }

        /**
         * Set the item data that must be transformed.
         *
         * @param mixed $data
         * @param null|string|callable|\League\Fractal\TransformerAbstract $transformer
         * @param null|string $resourceName
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static function item($data, $transformer = null, $resourceName = null)
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->item($data, $transformer, $resourceName);
        }

        /**
         * Set the primitive data that must be transformed.
         *
         * @param mixed $data
         * @param null|string|callable|\League\Fractal\TransformerAbstract $transformer
         * @param null|string $resourceName
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static function primitive($data, $transformer = null, $resourceName = null)
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->primitive($data, $transformer, $resourceName);
        }

        /**
         * Set the data that must be transformed.
         *
         * @param string $dataType
         * @param mixed $data
         * @param null|string|callable|\League\Fractal\TransformerAbstract $transformer
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static function data($dataType, $data, $transformer = null)
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->data($dataType, $data, $transformer);
        }

        /**
         * Set the class or function that will perform the transform.
         *
         * @param string|callable|\League\Fractal\TransformerAbstract|null $transformer
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static function transformWith($transformer)
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->transformWith($transformer);
        }

        /**
         * Set the serializer to be used.
         *
         * @param string|\League\Fractal\Serializer\SerializerAbstract $serializer
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static function serializeWith($serializer)
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->serializeWith($serializer);
        }

        /**
         * Set a Fractal paginator for the data.
         *
         * @param \League\Fractal\Pagination\PaginatorInterface $paginator
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static function paginateWith($paginator)
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->paginateWith($paginator);
        }

        /**
         * Set a Fractal cursor for the data.
         *
         * @param \League\Fractal\Pagination\CursorInterface $cursor
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static function withCursor($cursor)
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->withCursor($cursor);
        }

        /**
         * Specify the includes.
         *
         * @param array|string $includes Array or string of resources to include.
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static function parseIncludes($includes)
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->parseIncludes($includes);
        }

        /**
         * Specify the excludes.
         *
         * @param array|string $excludes Array or string of resources to exclude.
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static function parseExcludes($excludes)
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->parseExcludes($excludes);
        }

        /**
         * Specify the fieldsets to include in the response.
         *
         * @param array $fieldsets array with key = resourceName and value = fields to include
         *                                (array or comma separated string with field names)
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static function parseFieldsets($fieldsets)
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->parseFieldsets($fieldsets);
        }

        /**
         * Set the meta data.
         *
         * @param $array,...
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static function addMeta()
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->addMeta();
        }

        /**
         * Set the resource name, to replace 'data' as the root of the collection or item.
         *
         * @param string $resourceName
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static function withResourceName($resourceName)
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->withResourceName($resourceName);
        }

        /**
         * Upper limit to how many levels of included data are allowed.
         *
         * @param int $recursionLimit
         * @return \Spatie\Fractal\Fractal
         * @static
         */
        public static function limitRecursion($recursionLimit)
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->limitRecursion($recursionLimit);
        }

        /**
         * Perform the transformation to json.
         *
         * @param int $options
         * @return string
         * @static
         */
        public static function toJson($options = 0)
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->toJson($options);
        }

        /**
         * Perform the transformation to array.
         *
         * @return array|null
         * @static
         */
        public static function toArray()
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->toArray();
        }

        /**
         * Create fractal data.
         *
         * @return \League\Fractal\Scope
         * @throws \Spatie\Fractalistic\Exceptions\InvalidTransformation
         * @throws \Spatie\Fractalistic\Exceptions\NoTransformerSpecified
         * @static
         */
        public static function createData()
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->createData();
        }

        /**
         * Get the resource class.
         *
         * @return string
         * @throws \Spatie\Fractalistic\Exceptions\InvalidTransformation
         * @static
         */
        public static function getResourceClass()
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->getResourceClass();
        }

        /**
         * Get the resource.
         *
         * @return \League\Fractal\Resource\ResourceInterface
         * @throws \Spatie\Fractalistic\Exceptions\InvalidTransformation
         * @static
         */
        public static function getResource()
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->getResource();
        }

        /**
         * Return the name of the resource.
         *
         * @return string|null
         * @static
         */
        public static function getResourceName()
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->getResourceName();
        }

        /**
         * Convert the object into something JSON serializable.
         *
         * @return array|null
         * @static
         */
        public static function jsonSerialize()
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->jsonSerialize();
        }

        /**
         * Get the transformer.
         *
         * @return string|callable|\League\Fractal\TransformerAbstract|null
         * @static
         */
        public static function getTransformer()
        {
            //Method inherited from \Spatie\Fractalistic\Fractal 
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->getTransformer();
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @param-closure-this static  $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro)
        {
            \Spatie\Fractal\Fractal::macro($name, $macro);
        }

        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void
         * @throws \ReflectionException
         * @static
         */
        public static function mixin($mixin, $replace = true)
        {
            \Spatie\Fractal\Fractal::mixin($mixin, $replace);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name)
        {
            return \Spatie\Fractal\Fractal::hasMacro($name);
        }

        /**
         * Flush the existing macros.
         *
         * @return void
         * @static
         */
        public static function flushMacros()
        {
            \Spatie\Fractal\Fractal::flushMacros();
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static function macroCall($method, $parameters)
        {
            /** @var \Spatie\Fractal\Fractal $instance */
            return $instance->macroCall($method, $parameters);
        }

            }
    }

namespace Spatie\Health\Facades {
    /**
     * @mixin \Spatie\Health\Health
     */
    class Health {
        /**
         * @param array<int, Check> $checks
         * @static
         */
        public static function checks($checks)
        {
            /** @var \Spatie\Health\Health $instance */
            return $instance->checks($checks);
        }

        /**
         * @static
         */
        public static function clearChecks()
        {
            /** @var \Spatie\Health\Health $instance */
            return $instance->clearChecks();
        }

        /**
         * @return Collection<int, Check>
         * @static
         */
        public static function registeredChecks()
        {
            /** @var \Spatie\Health\Health $instance */
            return $instance->registeredChecks();
        }

        /**
         * @return Collection<int, ResultStore>
         * @static
         */
        public static function resultStores()
        {
            /** @var \Spatie\Health\Health $instance */
            return $instance->resultStores();
        }

        /**
         * @static
         */
        public static function inlineStylesheet($stylesheet)
        {
            /** @var \Spatie\Health\Health $instance */
            return $instance->inlineStylesheet($stylesheet);
        }

        /**
         * @static
         */
        public static function assets()
        {
            /** @var \Spatie\Health\Health $instance */
            return $instance->assets();
        }

            }
    }

namespace Spatie\LaravelIgnition\Facades {
    /**
     * @see \Spatie\FlareClient\Flare
     */
    class Flare {
        /**
         * @static
         */
        public static function make($apiKey = null, $contextDetector = null)
        {
            return \Spatie\FlareClient\Flare::make($apiKey, $contextDetector);
        }

        /**
         * @static
         */
        public static function setApiToken($apiToken)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->setApiToken($apiToken);
        }

        /**
         * @static
         */
        public static function apiTokenSet()
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->apiTokenSet();
        }

        /**
         * @static
         */
        public static function setBaseUrl($baseUrl)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->setBaseUrl($baseUrl);
        }

        /**
         * @static
         */
        public static function setStage($stage)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->setStage($stage);
        }

        /**
         * @static
         */
        public static function sendReportsImmediately()
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->sendReportsImmediately();
        }

        /**
         * @static
         */
        public static function determineVersionUsing($determineVersionCallable)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->determineVersionUsing($determineVersionCallable);
        }

        /**
         * @static
         */
        public static function reportErrorLevels($reportErrorLevels)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->reportErrorLevels($reportErrorLevels);
        }

        /**
         * @static
         */
        public static function filterExceptionsUsing($filterExceptionsCallable)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->filterExceptionsUsing($filterExceptionsCallable);
        }

        /**
         * @static
         */
        public static function filterReportsUsing($filterReportsCallable)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->filterReportsUsing($filterReportsCallable);
        }

        /**
         * @param array<class-string<ArgumentReducer>|ArgumentReducer>|\Spatie\Backtrace\Arguments\ArgumentReducers|null $argumentReducers
         * @static
         */
        public static function argumentReducers($argumentReducers)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->argumentReducers($argumentReducers);
        }

        /**
         * @static
         */
        public static function withStackFrameArguments($withStackFrameArguments = true, $forcePHPIniSetting = false)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->withStackFrameArguments($withStackFrameArguments, $forcePHPIniSetting);
        }

        /**
         * @param class-string $exceptionClass
         * @static
         */
        public static function overrideGrouping($exceptionClass, $type = 'exception_message_and_class')
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->overrideGrouping($exceptionClass, $type);
        }

        /**
         * @static
         */
        public static function version()
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->version();
        }

        /**
         * @return array<int, FlareMiddleware|class-string<FlareMiddleware>>
         * @static
         */
        public static function getMiddleware()
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->getMiddleware();
        }

        /**
         * @static
         */
        public static function setContextProviderDetector($contextDetector)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->setContextProviderDetector($contextDetector);
        }

        /**
         * @static
         */
        public static function setContainer($container)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->setContainer($container);
        }

        /**
         * @static
         */
        public static function registerFlareHandlers()
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->registerFlareHandlers();
        }

        /**
         * @static
         */
        public static function registerExceptionHandler()
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->registerExceptionHandler();
        }

        /**
         * @static
         */
        public static function registerErrorHandler($errorLevels = null)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->registerErrorHandler($errorLevels);
        }

        /**
         * @param \Spatie\FlareClient\FlareMiddleware\FlareMiddleware|array<FlareMiddleware>|class-string<FlareMiddleware>|callable $middleware
         * @return \Spatie\FlareClient\Flare
         * @static
         */
        public static function registerMiddleware($middleware)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->registerMiddleware($middleware);
        }

        /**
         * @return array<int,FlareMiddleware|class-string<FlareMiddleware>>
         * @static
         */
        public static function getMiddlewares()
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->getMiddlewares();
        }

        /**
         * @param string $name
         * @param string $messageLevel
         * @param array<int, mixed> $metaData
         * @return \Spatie\FlareClient\Flare
         * @static
         */
        public static function glow($name, $messageLevel = 'info', $metaData = [])
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->glow($name, $messageLevel, $metaData);
        }

        /**
         * @static
         */
        public static function handleException($throwable)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->handleException($throwable);
        }

        /**
         * @return mixed
         * @static
         */
        public static function handleError($code, $message, $file = '', $line = 0)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->handleError($code, $message, $file, $line);
        }

        /**
         * @static
         */
        public static function applicationPath($applicationPath)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->applicationPath($applicationPath);
        }

        /**
         * @static
         */
        public static function report($throwable, $callback = null, $report = null, $handled = null)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->report($throwable, $callback, $report, $handled);
        }

        /**
         * @static
         */
        public static function reportHandled($throwable)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->reportHandled($throwable);
        }

        /**
         * @static
         */
        public static function reportMessage($message, $logLevel, $callback = null)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->reportMessage($message, $logLevel, $callback);
        }

        /**
         * @static
         */
        public static function sendTestReport($throwable)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->sendTestReport($throwable);
        }

        /**
         * @static
         */
        public static function reset()
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->reset();
        }

        /**
         * @static
         */
        public static function anonymizeIp()
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->anonymizeIp();
        }

        /**
         * @param array<int, string> $fieldNames
         * @return \Spatie\FlareClient\Flare
         * @static
         */
        public static function censorRequestBodyFields($fieldNames)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->censorRequestBodyFields($fieldNames);
        }

        /**
         * @static
         */
        public static function createReport($throwable)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->createReport($throwable);
        }

        /**
         * @static
         */
        public static function createReportFromMessage($message, $logLevel)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->createReportFromMessage($message, $logLevel);
        }

        /**
         * @static
         */
        public static function stage($stage)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->stage($stage);
        }

        /**
         * @static
         */
        public static function messageLevel($messageLevel)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->messageLevel($messageLevel);
        }

        /**
         * @param string $groupName
         * @param mixed $default
         * @return array<int, mixed>
         * @static
         */
        public static function getGroup($groupName = 'context', $default = [])
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->getGroup($groupName, $default);
        }

        /**
         * @static
         */
        public static function context($key, $value)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->context($key, $value);
        }

        /**
         * @param string $groupName
         * @param array<string, mixed> $properties
         * @return \Spatie\FlareClient\Flare
         * @static
         */
        public static function group($groupName, $properties)
        {
            /** @var \Spatie\FlareClient\Flare $instance */
            return $instance->group($groupName, $properties);
        }

            }
    }

namespace Spatie\ResponseCache\Facades {
    /**
     * @method static ?Response getCachedResponseFor(Request $request, array $tags = [])
     */
    class ResponseCache {
        /**
         * @static
         */
        public static function enabled($request)
        {
            /** @var \Spatie\ResponseCache\ResponseCache $instance */
            return $instance->enabled($request);
        }

        /**
         * @static
         */
        public static function shouldCache($request, $response)
        {
            /** @var \Spatie\ResponseCache\ResponseCache $instance */
            return $instance->shouldCache($request, $response);
        }

        /**
         * @static
         */
        public static function shouldBypass($request)
        {
            /** @var \Spatie\ResponseCache\ResponseCache $instance */
            return $instance->shouldBypass($request);
        }

        /**
         * @static
         */
        public static function cacheResponse($request, $response, $lifetimeInSeconds = null, $tags = [])
        {
            /** @var \Spatie\ResponseCache\ResponseCache $instance */
            return $instance->cacheResponse($request, $response, $lifetimeInSeconds, $tags);
        }

        /**
         * @static
         */
        public static function hasBeenCached($request, $tags = [])
        {
            /** @var \Spatie\ResponseCache\ResponseCache $instance */
            return $instance->hasBeenCached($request, $tags);
        }

        /**
         * @static
         */
        public static function getCachedResponseFor($request, $tags = [])
        {
            /** @var \Spatie\ResponseCache\ResponseCache $instance */
            return $instance->getCachedResponseFor($request, $tags);
        }

        /**
         * @static
         */
        public static function clear($tags = [])
        {
            /** @var \Spatie\ResponseCache\ResponseCache $instance */
            return $instance->clear($tags);
        }

        /**
         * @param string[] $tags
         * @static
         */
        public static function forget($uris, $tags = [])
        {
            /** @var \Spatie\ResponseCache\ResponseCache $instance */
            return $instance->forget($uris, $tags);
        }

        /**
         * @static
         */
        public static function selectCachedItems()
        {
            /** @var \Spatie\ResponseCache\ResponseCache $instance */
            return $instance->selectCachedItems();
        }

        /**
         * Get a cached response using flexible/SWR (stale-while-revalidate) strategy.
         *
         * @param array{0: int, 1: int} $seconds [fresh_seconds, total_seconds]
         * @param \Closure $callback Callback that returns a Response object
         * @static
         */
        public static function flexible($key, $seconds, $callback, $tags = [])
        {
            /** @var \Spatie\ResponseCache\ResponseCache $instance */
            return $instance->flexible($key, $seconds, $callback, $tags);
        }

            }
    }

namespace Spatie\SignalAwareCommand\Facades {
    /**
     * @see \Spatie\SignalAwareCommand\Signal
     */
    class Signal {
        /**
         * @static
         */
        public static function handle($signal, $callable)
        {
            /** @var \Spatie\SignalAwareCommand\Signal $instance */
            return $instance->handle($signal, $callable);
        }

        /**
         * @static
         */
        public static function executeSignalHandlers($signal, $command)
        {
            /** @var \Spatie\SignalAwareCommand\Signal $instance */
            return $instance->executeSignalHandlers($signal, $command);
        }

        /**
         * @static
         */
        public static function clearHandlers($signal = null)
        {
            /** @var \Spatie\SignalAwareCommand\Signal $instance */
            return $instance->clearHandlers($signal);
        }

            }
    }

namespace Illuminate\Support {
    /**
     * @template TKey of array-key
     * @template-covariant TValue
     * @implements \ArrayAccess<TKey, TValue>
     * @implements \Illuminate\Support\Enumerable<TKey, TValue>
     */
    class Collection {
        /**
         * @see \Spatie\Fractal\FractalServiceProvider::packageBooted()
         * @param mixed $transformer
         * @static
         */
        public static function transformWith($transformer)
        {
            return \Illuminate\Support\Collection::transformWith($transformer);
        }

            }
    /**
     */
    class Str {
        /**
         * @see \Filament\Support\SupportServiceProvider::packageBooted()
         * @param string $html
         * @return string
         * @static
         */
        public static function sanitizeHtml($html)
        {
            return \Illuminate\Support\Str::sanitizeHtml($html);
        }

        /**
         * @see \Filament\Support\SupportServiceProvider::packageBooted()
         * @param string|null $url
         * @param array $allowedSchemes
         * @return string|null
         * @static
         */
        public static function sanitizeUrl($url, $allowedSchemes = [])
        {
            return \Illuminate\Support\Str::sanitizeUrl($url, $allowedSchemes);
        }

            }
    /**
     */
    class Stringable {
        /**
         * @see \Filament\Support\SupportServiceProvider::packageBooted()
         * @return \Illuminate\Support\Stringable
         * @static
         */
        public static function sanitizeHtml()
        {
            return \Illuminate\Support\Stringable::sanitizeHtml();
        }

        /**
         * @see \Filament\Support\SupportServiceProvider::packageBooted()
         * @param array $allowedSchemes
         * @return \Illuminate\Support\Stringable
         * @static
         */
        public static function sanitizeUrl($allowedSchemes = [])
        {
            return \Illuminate\Support\Stringable::sanitizeUrl($allowedSchemes);
        }

            }
    }

namespace Illuminate\Http {
    /**
     */
    class Request extends \Symfony\Component\HttpFoundation\Request {
        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param array $rules
         * @param mixed $params
         * @static
         */
        public static function validate($rules, ...$params)
        {
            return \Illuminate\Http\Request::validate($rules, ...$params);
        }

        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param string $errorBag
         * @param array $rules
         * @param mixed $params
         * @static
         */
        public static function validateWithBag($errorBag, $rules, ...$params)
        {
            return \Illuminate\Http\Request::validateWithBag($errorBag, $rules, ...$params);
        }

        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $absolute
         * @static
         */
        public static function hasValidSignature($absolute = true)
        {
            return \Illuminate\Http\Request::hasValidSignature($absolute);
        }

        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static
         */
        public static function hasValidRelativeSignature()
        {
            return \Illuminate\Http\Request::hasValidRelativeSignature();
        }

        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $ignoreQuery
         * @param mixed $absolute
         * @static
         */
        public static function hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
        {
            return \Illuminate\Http\Request::hasValidSignatureWhileIgnoring($ignoreQuery, $absolute);
        }

        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $ignoreQuery
         * @static
         */
        public static function hasValidRelativeSignatureWhileIgnoring($ignoreQuery = [])
        {
            return \Illuminate\Http\Request::hasValidRelativeSignatureWhileIgnoring($ignoreQuery);
        }

            }
    }

namespace Illuminate\Routing {
    /**
     * @mixin \Illuminate\Routing\RouteRegistrar
     */
    class Router {
        /**
         * @see \Livewire\Mechanisms\HandleRouting\HandleRouting::register()
         * @param mixed $uri
         * @param mixed $component
         * @return \Illuminate\Routing\Route
         * @static
         */
        public static function livewire($uri, $component)
        {
            return \Illuminate\Routing\Router::livewire($uri, $component);
        }

        /**
         * @see \Laravel\Ui\AuthRouteMethods::auth()
         * @param mixed $options
         * @static
         */
        public static function auth($options = [])
        {
            return \Illuminate\Routing\Router::auth($options);
        }

        /**
         * @see \Laravel\Ui\AuthRouteMethods::resetPassword()
         * @static
         */
        public static function resetPassword()
        {
            return \Illuminate\Routing\Router::resetPassword();
        }

        /**
         * @see \Laravel\Ui\AuthRouteMethods::confirmPassword()
         * @static
         */
        public static function confirmPassword()
        {
            return \Illuminate\Routing\Router::confirmPassword();
        }

        /**
         * @see \Laravel\Ui\AuthRouteMethods::emailVerification()
         * @static
         */
        public static function emailVerification()
        {
            return \Illuminate\Routing\Router::emailVerification();
        }

            }
    /**
     */
    class Route {
        /**
         * @see \Livewire\Features\SupportLazyLoading\SupportLazyLoading::registerRouteMacro()
         * @param mixed $enabled
         * @static
         */
        public static function lazy($enabled = true)
        {
            return \Illuminate\Routing\Route::lazy($enabled);
        }

        /**
         * @see \Livewire\Features\SupportLazyLoading\SupportLazyLoading::registerRouteMacro()
         * @param mixed $enabled
         * @static
         */
        public static function defer($enabled = true)
        {
            return \Illuminate\Routing\Route::defer($enabled);
        }

        /**
         * @see \Spatie\Permission\PermissionServiceProvider::registerMacroHelpers()
         * @param mixed $roles
         * @static
         */
        public static function role($roles = [])
        {
            return \Illuminate\Routing\Route::role($roles);
        }

        /**
         * @see \Spatie\Permission\PermissionServiceProvider::registerMacroHelpers()
         * @param mixed $permissions
         * @static
         */
        public static function permission($permissions = [])
        {
            return \Illuminate\Routing\Route::permission($permissions);
        }

        /**
         * @see \Spatie\Permission\PermissionServiceProvider::registerMacroHelpers()
         * @param mixed $rolesOrPermissions
         * @static
         */
        public static function roleOrPermission($rolesOrPermissions = [])
        {
            return \Illuminate\Routing\Route::roleOrPermission($rolesOrPermissions);
        }

            }
    }

namespace Illuminate\Database\Query {
    /**
     */
    class Builder {
        /**
         * @see \Kirschbaum\PowerJoins\Mixins\QueryBuilderExtraMethods::getGroupBy()
         * @static
         */
        public static function getGroupBy()
        {
            return \Illuminate\Database\Query\Builder::getGroupBy();
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\QueryBuilderExtraMethods::getSelect()
         * @static
         */
        public static function getSelect()
        {
            return \Illuminate\Database\Query\Builder::getSelect();
        }

            }
    }

namespace Illuminate\Database\Eloquent\Relations {
    /**
     * @template TRelatedModel of \Illuminate\Database\Eloquent\Model
     * @template TDeclaringModel of \Illuminate\Database\Eloquent\Model
     * @template TResult
     * @mixin \Illuminate\Database\Eloquent\Builder<TRelatedModel>
     */
    class Relation {
        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoins()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @param string|null $morphable
         * @param bool $hasCheck
         * @static
         */
        public static function performJoinForEloquentPowerJoins($builder, $joinType = 'leftJoin', $callback = null, $alias = null, $disableExtraConditions = false, $morphable = null, $hasCheck = false)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoins($builder, $joinType, $callback, $alias, $disableExtraConditions, $morphable, $hasCheck);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForBelongsTo()
         * @param mixed $query
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @static
         */
        public static function performJoinForEloquentPowerJoinsForBelongsTo($query, $joinType, $callback = null, $alias = null, $disableExtraConditions = false)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForBelongsTo($query, $joinType, $callback, $alias, $disableExtraConditions);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForBelongsToMany()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @static
         */
        public static function performJoinForEloquentPowerJoinsForBelongsToMany($builder, $joinType, $callback = null, $alias = null, $disableExtraConditions = false)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForBelongsToMany($builder, $joinType, $callback, $alias, $disableExtraConditions);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForMorphToMany()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @static
         */
        public static function performJoinForEloquentPowerJoinsForMorphToMany($builder, $joinType, $callback = null, $alias = null, $disableExtraConditions = false)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForMorphToMany($builder, $joinType, $callback, $alias, $disableExtraConditions);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForMorph()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @static
         */
        public static function performJoinForEloquentPowerJoinsForMorph($builder, $joinType, $callback = null, $alias = null, $disableExtraConditions = false)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForMorph($builder, $joinType, $callback, $alias, $disableExtraConditions);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForMorphTo()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @param string|null $morphable
         * @static
         */
        public static function performJoinForEloquentPowerJoinsForMorphTo($builder, $joinType, $callback = null, $alias = null, $disableExtraConditions = false, $morphable = null)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForMorphTo($builder, $joinType, $callback, $alias, $disableExtraConditions, $morphable);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForHasMany()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @param bool $hasCheck
         * @static
         */
        public static function performJoinForEloquentPowerJoinsForHasMany($builder, $joinType, $callback = null, $alias = null, $disableExtraConditions = false, $hasCheck = false)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForHasMany($builder, $joinType, $callback, $alias, $disableExtraConditions, $hasCheck);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performJoinForEloquentPowerJoinsForHasManyThrough()
         * @param mixed $builder
         * @param mixed $joinType
         * @param mixed $callback
         * @param mixed $alias
         * @param bool $disableExtraConditions
         * @static
         */
        public static function performJoinForEloquentPowerJoinsForHasManyThrough($builder, $joinType, $callback = null, $alias = null, $disableExtraConditions = false)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::performJoinForEloquentPowerJoinsForHasManyThrough($builder, $joinType, $callback, $alias, $disableExtraConditions);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::performHavingForEloquentPowerJoins()
         * @param mixed $builder
         * @param mixed $operator
         * @param mixed $count
         * @param string|null $morphable
         * @static
         */
        public static function performHavingForEloquentPowerJoins($builder, $operator, $count, $morphable = null)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::performHavingForEloquentPowerJoins($builder, $operator, $count, $morphable);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::usesSoftDeletes()
         * @param mixed $model
         * @static
         */
        public static function usesSoftDeletes($model)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::usesSoftDeletes($model);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::getThroughParent()
         * @static
         */
        public static function getThroughParent()
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::getThroughParent();
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::getFarParent()
         * @static
         */
        public static function getFarParent()
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::getFarParent();
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::applyExtraConditions()
         * @param \Kirschbaum\PowerJoins\PowerJoinClause $join
         * @static
         */
        public static function applyExtraConditions($join)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::applyExtraConditions($join);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::applyBasicCondition()
         * @param mixed $join
         * @param mixed $condition
         * @static
         */
        public static function applyBasicCondition($join, $condition)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::applyBasicCondition($join, $condition);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::applyNullCondition()
         * @param mixed $join
         * @param mixed $condition
         * @static
         */
        public static function applyNullCondition($join, $condition)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::applyNullCondition($join, $condition);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::applyNotNullCondition()
         * @param mixed $join
         * @param mixed $condition
         * @static
         */
        public static function applyNotNullCondition($join, $condition)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::applyNotNullCondition($join, $condition);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::applyNestedCondition()
         * @param mixed $join
         * @param mixed $condition
         * @static
         */
        public static function applyNestedCondition($join, $condition)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::applyNestedCondition($join, $condition);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::shouldNotApplyExtraCondition()
         * @param mixed $condition
         * @static
         */
        public static function shouldNotApplyExtraCondition($condition)
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::shouldNotApplyExtraCondition($condition);
        }

        /**
         * @see \Kirschbaum\PowerJoins\Mixins\RelationshipsExtraMethods::getPowerJoinExistenceCompareKey()
         * @static
         */
        public static function getPowerJoinExistenceCompareKey()
        {
            return \Illuminate\Database\Eloquent\Relations\Relation::getPowerJoinExistenceCompareKey();
        }

            }
    }

namespace Livewire\Features\SupportTesting {
    /**
     * @template TComponent of \Livewire\Component
     * @mixin \Illuminate\Testing\TestResponse
     */
    class Testable {
        /**
         * @see \Filament\Actions\Testing\TestsActions::mountAction()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param array $arguments
         * @return static
         * @static
         */
        public static function mountAction($actions, $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::mountAction($actions, $arguments);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::unmountAction()
         * @return static
         * @static
         */
        public static function unmountAction()
        {
            return \Livewire\Features\SupportTesting\Testable::unmountAction();
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::setActionData()
         * @param array $data
         * @return static
         * @static
         */
        public static function setActionData($data)
        {
            return \Livewire\Features\SupportTesting\Testable::setActionData($data);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionDataSet()
         * @param \Closure|array $data
         * @return static
         * @static
         */
        public static function assertActionDataSet($data)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionDataSet($data);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::callAction()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param array $data
         * @param array $arguments
         * @return static
         * @static
         */
        public static function callAction($actions, $data = [], $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::callAction($actions, $data, $arguments);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::callMountedAction()
         * @param array $arguments
         * @return static
         * @static
         */
        public static function callMountedAction($arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::callMountedAction($arguments);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionExists()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param \Closure|null $checkActionUsing
         * @param \Closure|null $generateMessageUsing
         * @param array $arguments
         * @return static
         * @static
         */
        public static function assertActionExists($actions, $checkActionUsing = null, $generateMessageUsing = null, $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionExists($actions, $checkActionUsing, $generateMessageUsing, $arguments);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionDoesNotExist()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param \Closure|null $checkActionUsing
         * @param \Closure|null $generateMessageUsing
         * @return static
         * @static
         */
        public static function assertActionDoesNotExist($actions, $checkActionUsing = null, $generateMessageUsing = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionDoesNotExist($actions, $checkActionUsing, $generateMessageUsing);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionVisible()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param array $arguments
         * @return static
         * @static
         */
        public static function assertActionVisible($actions, $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionVisible($actions, $arguments);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionHidden()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param array $arguments
         * @return static
         * @static
         */
        public static function assertActionHidden($actions, $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionHidden($actions, $arguments);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionEnabled()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @return static
         * @static
         */
        public static function assertActionEnabled($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionEnabled($actions);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionDisabled()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @return static
         * @static
         */
        public static function assertActionDisabled($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionDisabled($actions);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionHasIcon()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param \BackedEnum|string $icon
         * @return static
         * @static
         */
        public static function assertActionHasIcon($actions, $icon)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionHasIcon($actions, $icon);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionDoesNotHaveIcon()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param \BackedEnum|string $icon
         * @return static
         * @static
         */
        public static function assertActionDoesNotHaveIcon($actions, $icon)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionDoesNotHaveIcon($actions, $icon);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionHasLabel()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param string $label
         * @return static
         * @static
         */
        public static function assertActionHasLabel($actions, $label)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionHasLabel($actions, $label);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionDoesNotHaveLabel()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param string $label
         * @return static
         * @static
         */
        public static function assertActionDoesNotHaveLabel($actions, $label)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionDoesNotHaveLabel($actions, $label);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionHasColor()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param array|string $color
         * @return static
         * @static
         */
        public static function assertActionHasColor($actions, $color)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionHasColor($actions, $color);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionDoesNotHaveColor()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param array|string $color
         * @return static
         * @static
         */
        public static function assertActionDoesNotHaveColor($actions, $color)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionDoesNotHaveColor($actions, $color);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionHasUrl()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param string $url
         * @return static
         * @static
         */
        public static function assertActionHasUrl($actions, $url)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionHasUrl($actions, $url);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionDoesNotHaveUrl()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param string $url
         * @return static
         * @static
         */
        public static function assertActionDoesNotHaveUrl($actions, $url)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionDoesNotHaveUrl($actions, $url);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionShouldOpenUrlInNewTab()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @return static
         * @static
         */
        public static function assertActionShouldOpenUrlInNewTab($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionShouldOpenUrlInNewTab($actions);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionShouldNotOpenUrlInNewTab()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @return static
         * @static
         */
        public static function assertActionShouldNotOpenUrlInNewTab($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionShouldNotOpenUrlInNewTab($actions);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionMounted()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @return static
         * @static
         */
        public static function assertActionMounted($actions = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionMounted($actions);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionNotMounted()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @return static
         * @static
         */
        public static function assertActionNotMounted($actions = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionNotMounted($actions);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertMountedActionModalSee()
         * @param array|string $values
         * @param mixed $escape
         * @static
         */
        public static function assertMountedActionModalSee($values, $escape = true)
        {
            return \Livewire\Features\SupportTesting\Testable::assertMountedActionModalSee($values, $escape);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertMountedActionModalDontSee()
         * @param array|string $values
         * @param bool $escape
         * @static
         */
        public static function assertMountedActionModalDontSee($values, $escape = true)
        {
            return \Livewire\Features\SupportTesting\Testable::assertMountedActionModalDontSee($values, $escape);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertMountedActionModalSeeHtml()
         * @param array|string $values
         * @static
         */
        public static function assertMountedActionModalSeeHtml($values)
        {
            return \Livewire\Features\SupportTesting\Testable::assertMountedActionModalSeeHtml($values);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertMountedActionModalDontSeeHtml()
         * @param array|string $values
         * @static
         */
        public static function assertMountedActionModalDontSeeHtml($values)
        {
            return \Livewire\Features\SupportTesting\Testable::assertMountedActionModalDontSeeHtml($values);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionMounted()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @return static
         * @static
         */
        public static function assertActionHalted($actions = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionHalted($actions);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionMounted()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @return static
         * @static
         */
        public static function assertActionHeld($actions = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionHeld($actions);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertHasActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasActionErrors($keys);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertHasNoActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasNoActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasNoActionErrors($keys);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::assertActionListInOrder()
         * @param array $names
         * @param array $actions
         * @param string $actionType
         * @param string $actionClass
         * @return self
         * @static
         */
        public static function assertActionListInOrder($names, $actions, $actionType, $actionClass)
        {
            return \Livewire\Features\SupportTesting\Testable::assertActionListInOrder($names, $actions, $actionType, $actionClass);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::parseNestedActions()
         * @param \Filament\Actions\Testing\TestAction|array|string $actions
         * @param array $arguments
         * @param bool $areRelativeToMountedActions
         * @return array
         * @static
         */
        public static function parseNestedActions($actions, $arguments = [], $areRelativeToMountedActions = true)
        {
            return \Livewire\Features\SupportTesting\Testable::parseNestedActions($actions, $arguments, $areRelativeToMountedActions);
        }

        /**
         * @see \Filament\Actions\Testing\TestsActions::getMountedActionModalHtml()
         * @return string
         * @static
         */
        public static function getMountedActionModalHtml()
        {
            return \Livewire\Features\SupportTesting\Testable::getMountedActionModalHtml();
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::fillForm()
         * @param \Closure|array $state
         * @param string|null $form
         * @return static
         * @static
         */
        public static function fillForm($state = [], $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::fillForm($state, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormSet()
         * @param \Closure|array $state
         * @param string $form
         * @return static
         * @static
         */
        public static function assertFormSet($state, $form = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormSet($state, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertHasFormErrors()
         * @param array $keys
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertHasFormErrors($keys = [], $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasFormErrors($keys, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertHasNoFormErrors()
         * @param array $keys
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertHasNoFormErrors($keys = [], $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasNoFormErrors($keys, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormExists()
         * @param string $name
         * @return static
         * @static
         */
        public static function assertFormExists($name = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormExists($name);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormComponentExists()
         * @param string $componentKey
         * @param \Closure|string $form
         * @param \Closure|null $checkComponentUsing
         * @return static
         * @static
         */
        public static function assertFormComponentExists($componentKey, $form = 'form', $checkComponentUsing = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentExists($componentKey, $form, $checkComponentUsing);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormComponentDoesNotExist()
         * @param string $componentKey
         * @param string $form
         * @return static
         * @static
         */
        public static function assertFormComponentDoesNotExist($componentKey, $form = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentDoesNotExist($componentKey, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldExists()
         * @param string $key
         * @param \Closure|string|null $form
         * @param \Closure|null $checkFieldUsing
         * @return static
         * @static
         */
        public static function assertFormFieldExists($key, $form = null, $checkFieldUsing = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldExists($key, $form, $checkFieldUsing);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldDoesNotExist()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldDoesNotExist($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldDoesNotExist($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldDisabled()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldDisabled($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldDisabled($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldDisabled()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldIsDisabled($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldIsDisabled($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldEnabled()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldEnabled($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldEnabled($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldEnabled()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldIsEnabled($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldIsEnabled($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldReadOnly()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldReadOnly($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldReadOnly($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldReadOnly()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldIsReadOnly($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldIsReadOnly($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldHidden()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldHidden($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldHidden($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldHidden()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldIsHidden($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldIsHidden($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldVisible()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldVisible($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldVisible($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsForms::assertFormFieldVisible()
         * @param string $key
         * @param string|null $form
         * @return static
         * @static
         */
        public static function assertFormFieldIsVisible($key, $form = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormFieldIsVisible($key, $form);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::mountFormComponentAction()
         * @param array|string $components
         * @param array|string $actions
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function mountFormComponentAction($components, $actions, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::mountFormComponentAction($components, $actions, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::unmountFormComponentAction()
         * @return static
         * @static
         */
        public static function unmountFormComponentAction()
        {
            return \Livewire\Features\SupportTesting\Testable::unmountFormComponentAction();
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::setFormComponentActionData()
         * @param array $data
         * @return static
         * @static
         */
        public static function setFormComponentActionData($data)
        {
            return \Livewire\Features\SupportTesting\Testable::setFormComponentActionData($data);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionDataSet()
         * @param \Closure|array $data
         * @return static
         * @static
         */
        public static function assertFormComponentActionDataSet($data)
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionDataSet($data);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::callFormComponentAction()
         * @param array|string $components
         * @param array|string $actions
         * @param array $data
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function callFormComponentAction($components, $actions, $data = [], $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::callFormComponentAction($components, $actions, $data, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::callMountedFormComponentAction()
         * @param array $arguments
         * @return static
         * @static
         */
        public static function callMountedFormComponentAction($arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::callMountedFormComponentAction($arguments);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionExists()
         * @param array|string $components
         * @param array|string $actions
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionExists($components, $actions, $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionExists($components, $actions, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionDoesNotExist()
         * @param array|string $components
         * @param array|string $actions
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionDoesNotExist($components, $actions, $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionDoesNotExist($components, $actions, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionVisible()
         * @param array|string $components
         * @param array|string $actions
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionVisible($components, $actions, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionVisible($components, $actions, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionHidden()
         * @param array|string $components
         * @param array|string $actions
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionHidden($components, $actions, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionHidden($components, $actions, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionEnabled()
         * @param array|string $components
         * @param array|string $actions
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionEnabled($components, $actions, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionEnabled($components, $actions, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionDisabled()
         * @param array|string $components
         * @param array|string $actions
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionDisabled($components, $actions, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionDisabled($components, $actions, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionHasIcon()
         * @param array|string $components
         * @param array|string $actions
         * @param \BackedEnum|string $icon
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionHasIcon($components, $actions, $icon, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionHasIcon($components, $actions, $icon, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionDoesNotHaveIcon()
         * @param array|string $components
         * @param array|string $actions
         * @param \BackedEnum|string $icon
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionDoesNotHaveIcon($components, $actions, $icon, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionDoesNotHaveIcon($components, $actions, $icon, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionHasLabel()
         * @param array|string $components
         * @param array|string $actions
         * @param string $label
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionHasLabel($components, $actions, $label, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionHasLabel($components, $actions, $label, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionDoesNotHaveLabel()
         * @param array|string $components
         * @param array|string $actions
         * @param string $label
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionDoesNotHaveLabel($components, $actions, $label, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionDoesNotHaveLabel($components, $actions, $label, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionHasColor()
         * @param array|string $components
         * @param array|string $actions
         * @param array|string $color
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionHasColor($components, $actions, $color, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionHasColor($components, $actions, $color, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionDoesNotHaveColor()
         * @param array|string $components
         * @param array|string $actions
         * @param array|string $color
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionDoesNotHaveColor($components, $actions, $color, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionDoesNotHaveColor($components, $actions, $color, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionHasUrl()
         * @param array|string $components
         * @param array|string $actions
         * @param string $url
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionHasUrl($components, $actions, $url, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionHasUrl($components, $actions, $url, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionDoesNotHaveUrl()
         * @param array|string $components
         * @param array|string $actions
         * @param string $url
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionDoesNotHaveUrl($components, $actions, $url, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionDoesNotHaveUrl($components, $actions, $url, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionShouldOpenUrlInNewTab()
         * @param array|string $components
         * @param array|string $actions
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionShouldOpenUrlInNewTab($components, $actions, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionShouldOpenUrlInNewTab($components, $actions, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionShouldNotOpenUrlInNewTab()
         * @param array|string $components
         * @param array|string $actions
         * @param array $arguments
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionShouldNotOpenUrlInNewTab($components, $actions, $arguments = [], $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionShouldNotOpenUrlInNewTab($components, $actions, $arguments, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionMounted()
         * @param array|string $components
         * @param array|string $actions
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionMounted($components, $actions, $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionMounted($components, $actions, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionNotMounted()
         * @param array|string $components
         * @param array|string $actions
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionNotMounted($components, $actions, $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionNotMounted($components, $actions, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertFormComponentActionMounted()
         * @param array|string $components
         * @param array|string $actions
         * @param string $formName
         * @return static
         * @static
         */
        public static function assertFormComponentActionHalted($components, $actions, $formName = 'form')
        {
            return \Livewire\Features\SupportTesting\Testable::assertFormComponentActionHalted($components, $actions, $formName);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertHasFormComponentActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasFormComponentActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasFormComponentActionErrors($keys);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::assertHasNoFormComponentActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasNoFormComponentActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasNoFormComponentActionErrors($keys);
        }

        /**
         * @see \Filament\Forms\Testing\TestsFormComponentActions::parseNestedFormComponentActions()
         * @param array|string $components
         * @param array|string $actions
         * @param string $form
         * @param array $arguments
         * @return array
         * @static
         */
        public static function parseNestedFormComponentActions($components, $actions, $form, $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::parseNestedFormComponentActions($components, $actions, $form, $arguments);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::mountInfolistAction()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function mountInfolistAction($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::mountInfolistAction($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::unmountInfolistAction()
         * @return static
         * @static
         */
        public static function unmountInfolistAction()
        {
            return \Livewire\Features\SupportTesting\Testable::unmountInfolistAction();
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::setInfolistActionData()
         * @param array $data
         * @return static
         * @static
         */
        public static function setInfolistActionData($data)
        {
            return \Livewire\Features\SupportTesting\Testable::setInfolistActionData($data);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionDataSet()
         * @param \Closure|array $data
         * @return static
         * @static
         */
        public static function assertInfolistActionDataSet($data)
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionDataSet($data);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::callInfolistAction()
         * @param string $component
         * @param array|string $actions
         * @param array $data
         * @param array $arguments
         * @param string $schema
         * @return static
         * @static
         */
        public static function callInfolistAction($component, $actions, $data = [], $arguments = [], $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::callInfolistAction($component, $actions, $data, $arguments, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::callMountedInfolistAction()
         * @param array $arguments
         * @return static
         * @static
         */
        public static function callMountedInfolistAction($arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::callMountedInfolistAction($arguments);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionExists()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionExists($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionExists($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionDoesNotExist()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionDoesNotExist($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionDoesNotExist($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionVisible()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionVisible($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionVisible($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionHidden()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionHidden($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionHidden($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionEnabled()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionEnabled($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionEnabled($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionDisabled()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionDisabled($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionDisabled($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionHasIcon()
         * @param string $component
         * @param array|string $actions
         * @param \BackedEnum|string $icon
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionHasIcon($component, $actions, $icon, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionHasIcon($component, $actions, $icon, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionDoesNotHaveIcon()
         * @param string $component
         * @param array|string $actions
         * @param \BackedEnum|string $icon
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionDoesNotHaveIcon($component, $actions, $icon, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionDoesNotHaveIcon($component, $actions, $icon, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionHasLabel()
         * @param string $component
         * @param array|string $actions
         * @param string $label
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionHasLabel($component, $actions, $label, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionHasLabel($component, $actions, $label, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionDoesNotHaveLabel()
         * @param string $component
         * @param array|string $actions
         * @param string $label
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionDoesNotHaveLabel($component, $actions, $label, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionDoesNotHaveLabel($component, $actions, $label, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionHasColor()
         * @param string $component
         * @param array|string $actions
         * @param array|string $color
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionHasColor($component, $actions, $color, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionHasColor($component, $actions, $color, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionDoesNotHaveColor()
         * @param string $component
         * @param array|string $actions
         * @param array|string $color
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionDoesNotHaveColor($component, $actions, $color, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionDoesNotHaveColor($component, $actions, $color, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionHasUrl()
         * @param string $component
         * @param array|string $actions
         * @param string $url
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionHasUrl($component, $actions, $url, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionHasUrl($component, $actions, $url, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionDoesNotHaveUrl()
         * @param string $component
         * @param array|string $actions
         * @param string $url
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionDoesNotHaveUrl($component, $actions, $url, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionDoesNotHaveUrl($component, $actions, $url, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionShouldOpenUrlInNewTab()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionShouldOpenUrlInNewTab($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionShouldOpenUrlInNewTab($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionShouldNotOpenUrlInNewTab()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionShouldNotOpenUrlInNewTab($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionShouldNotOpenUrlInNewTab($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionMounted()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionMounted($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionMounted($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionNotMounted()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionNotMounted($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionNotMounted($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertInfolistActionMounted()
         * @param string $component
         * @param array|string $actions
         * @param string $schema
         * @return static
         * @static
         */
        public static function assertInfolistActionHalted($component, $actions, $schema = 'infolist')
        {
            return \Livewire\Features\SupportTesting\Testable::assertInfolistActionHalted($component, $actions, $schema);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertHasInfolistActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasInfolistActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasInfolistActionErrors($keys);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::assertHasNoInfolistActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasNoInfolistActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasNoInfolistActionErrors($keys);
        }

        /**
         * @see \Filament\Infolists\Testing\TestsInfolistActions::parseNestedInfolistActions()
         * @param string $component
         * @param array|string $actions
         * @param string $infolist
         * @param array $arguments
         * @return array
         * @static
         */
        public static function parseNestedInfolistActions($component, $actions, $infolist, $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::parseNestedInfolistActions($component, $actions, $infolist, $arguments);
        }

        /**
         * @see \Filament\Notifications\Testing\TestsNotifications::assertNotified()
         * @param \Filament\Notifications\Notification|string|null $notification
         * @return static
         * @static
         */
        public static function assertNotified($notification = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertNotified($notification);
        }

        /**
         * @see \Filament\Notifications\Testing\TestsNotifications::assertNotNotified()
         * @param \Filament\Notifications\Notification|string|null $notification
         * @return static
         * @static
         */
        public static function assertNotNotified($notification = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertNotNotified($notification);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::assertSchemaComponentExists()
         * @param string $key
         * @param string|null $schema
         * @param \Closure|null $checkComponentUsing
         * @return static
         * @static
         */
        public static function assertSchemaComponentExists($key, $schema = null, $checkComponentUsing = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertSchemaComponentExists($key, $schema, $checkComponentUsing);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::assertSchemaComponentDoesNotExist()
         * @param string $key
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function assertSchemaComponentDoesNotExist($key, $schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertSchemaComponentDoesNotExist($key, $schema);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::assertSchemaComponentVisible()
         * @param string $key
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function assertSchemaComponentVisible($key, $schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertSchemaComponentVisible($key, $schema);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::assertSchemaComponentHidden()
         * @param string $key
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function assertSchemaComponentHidden($key, $schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertSchemaComponentHidden($key, $schema);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::assertSchemaExists()
         * @param string $name
         * @return static
         * @static
         */
        public static function assertSchemaExists($name)
        {
            return \Livewire\Features\SupportTesting\Testable::assertSchemaExists($name);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::assertSchemaStateSet()
         * @param \Closure|array $state
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function assertSchemaStateSet($state, $schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertSchemaStateSet($state, $schema);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::assertSchemaComponentStateSet()
         * @param string $key
         * @param mixed|null $state
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function assertSchemaComponentStateSet($key, $state, $schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertSchemaComponentStateSet($key, $state, $schema);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::assertSchemaComponentStateNotSet()
         * @param string $key
         * @param mixed|null $state
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function assertSchemaComponentStateNotSet($key, $state, $schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertSchemaComponentStateNotSet($key, $state, $schema);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::assertWizardStepExists()
         * @param int $step
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function assertWizardStepExists($step, $schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertWizardStepExists($step, $schema);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::assertWizardCurrentStep()
         * @param int $step
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function assertWizardCurrentStep($step, $schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertWizardCurrentStep($step, $schema);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::goToWizardStep()
         * @param int $step
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function goToWizardStep($step, $schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::goToWizardStep($step, $schema);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::goToNextWizardStep()
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function goToNextWizardStep($schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::goToNextWizardStep($schema);
        }

        /**
         * @see \Filament\Schemas\Testing\TestsSchemas::goToPreviousWizardStep()
         * @param string|null $schema
         * @return static
         * @static
         */
        public static function goToPreviousWizardStep($schema = null)
        {
            return \Livewire\Features\SupportTesting\Testable::goToPreviousWizardStep($schema);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::mountTableAction()
         * @param array|string $actions
         * @param mixed $record
         * @return static
         * @static
         */
        public static function mountTableAction($actions, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::mountTableAction($actions, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::unmountTableAction()
         * @return static
         * @static
         */
        public static function unmountTableAction()
        {
            return \Livewire\Features\SupportTesting\Testable::unmountTableAction();
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::setTableActionData()
         * @param array $data
         * @return static
         * @static
         */
        public static function setTableActionData($data)
        {
            return \Livewire\Features\SupportTesting\Testable::setTableActionData($data);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDataSet()
         * @param \Closure|array $data
         * @return static
         * @static
         */
        public static function assertTableActionDataSet($data)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionDataSet($data);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::callTableAction()
         * @param array|string $actions
         * @param mixed $record
         * @param array $data
         * @param array $arguments
         * @return static
         * @static
         */
        public static function callTableAction($actions, $record = null, $data = [], $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::callTableAction($actions, $record, $data, $arguments);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::callMountedTableAction()
         * @param array $arguments
         * @return static
         * @static
         */
        public static function callMountedTableAction($arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::callMountedTableAction($arguments);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionExists()
         * @param array|string $actions
         * @param \Closure|null $checkActionUsing
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionExists($actions, $checkActionUsing = null, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionExists($actions, $checkActionUsing, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDoesNotExist()
         * @param array|string $actions
         * @param \Closure|null $checkActionUsing
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionDoesNotExist($actions, $checkActionUsing = null, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionDoesNotExist($actions, $checkActionUsing, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionsExistInOrder()
         * @param array $names
         * @return static
         * @static
         */
        public static function assertTableActionsExistInOrder($names)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionsExistInOrder($names);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableHeaderActionsExistInOrder()
         * @param array $names
         * @return static
         * @static
         */
        public static function assertTableHeaderActionsExistInOrder($names)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableHeaderActionsExistInOrder($names);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableEmptyStateActionsExistInOrder()
         * @param array $names
         * @return static
         * @static
         */
        public static function assertTableEmptyStateActionsExistInOrder($names)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableEmptyStateActionsExistInOrder($names);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionVisible()
         * @param array|string $actions
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionVisible($actions, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionVisible($actions, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionHidden()
         * @param array|string $actions
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionHidden($actions, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionHidden($actions, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionEnabled()
         * @param array|string $actions
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionEnabled($actions, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionEnabled($actions, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDisabled()
         * @param array|string $actions
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionDisabled($actions, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionDisabled($actions, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionHasIcon()
         * @param array|string $actions
         * @param \BackedEnum|string $icon
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionHasIcon($actions, $icon, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionHasIcon($actions, $icon, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDoesNotHaveIcon()
         * @param array|string $actions
         * @param \BackedEnum|string $icon
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionDoesNotHaveIcon($actions, $icon, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionDoesNotHaveIcon($actions, $icon, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionHasLabel()
         * @param array|string $actions
         * @param string $label
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionHasLabel($actions, $label, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionHasLabel($actions, $label, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDoesNotHaveLabel()
         * @param array|string $actions
         * @param string $label
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionDoesNotHaveLabel($actions, $label, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionDoesNotHaveLabel($actions, $label, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionHasColor()
         * @param array|string $actions
         * @param array|string $color
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionHasColor($actions, $color, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionHasColor($actions, $color, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDoesNotHaveColor()
         * @param array|string $actions
         * @param array|string $color
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionDoesNotHaveColor($actions, $color, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionDoesNotHaveColor($actions, $color, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionHasUrl()
         * @param array|string $actions
         * @param string $url
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionHasUrl($actions, $url, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionHasUrl($actions, $url, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionDoesNotHaveUrl()
         * @param array|string $actions
         * @param string $url
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionDoesNotHaveUrl($actions, $url, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionDoesNotHaveUrl($actions, $url, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionShouldOpenUrlInNewTab()
         * @param array|string $actions
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionShouldOpenUrlInNewTab($actions, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionShouldOpenUrlInNewTab($actions, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionShouldNotOpenUrlInNewTab()
         * @param array|string $actions
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableActionShouldNotOpenUrlInNewTab($actions, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionShouldNotOpenUrlInNewTab($actions, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionMounted()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableActionMounted($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionMounted($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionNotMounted()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableActionNotMounted($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionNotMounted($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionMounted()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableActionHalted($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionHalted($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertTableActionMounted()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableActionHeld($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableActionHeld($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertHasTableActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasTableActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasTableActionErrors($keys);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::assertHasNoTableActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasNoTableActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasNoTableActionErrors($keys);
        }

        /**
         * @see \Filament\Tables\Testing\TestsActions::parseNestedTableActions()
         * @param array|string $actions
         * @param mixed $record
         * @param array $arguments
         * @return array
         * @static
         */
        public static function parseNestedTableActions($actions, $record = null, $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::parseNestedTableActions($actions, $record, $arguments);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::selectTableRecords()
         * @param \Illuminate\Support\Collection|array $records
         * @return static
         * @static
         */
        public static function selectTableRecords($records)
        {
            return \Livewire\Features\SupportTesting\Testable::selectTableRecords($records);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::mountTableBulkAction()
         * @param array|string $actions
         * @param \Illuminate\Support\Collection|array $records
         * @return static
         * @static
         */
        public static function mountTableBulkAction($actions, $records)
        {
            return \Livewire\Features\SupportTesting\Testable::mountTableBulkAction($actions, $records);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::setTableBulkActionData()
         * @param array $data
         * @return static
         * @static
         */
        public static function setTableBulkActionData($data)
        {
            return \Livewire\Features\SupportTesting\Testable::setTableBulkActionData($data);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionDataSet()
         * @param \Closure|array $data
         * @return static
         * @static
         */
        public static function assertTableBulkActionDataSet($data)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionDataSet($data);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::callTableBulkAction()
         * @param array|string $actions
         * @param \Illuminate\Support\Collection|array $records
         * @param array $data
         * @param array $arguments
         * @return static
         * @static
         */
        public static function callTableBulkAction($actions, $records, $data = [], $arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::callTableBulkAction($actions, $records, $data, $arguments);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::callMountedTableBulkAction()
         * @param array $arguments
         * @return static
         * @static
         */
        public static function callMountedTableBulkAction($arguments = [])
        {
            return \Livewire\Features\SupportTesting\Testable::callMountedTableBulkAction($arguments);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionExists()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionExists($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionExists($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionDoesNotExist()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionDoesNotExist($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionDoesNotExist($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionsExistInOrder()
         * @param array $names
         * @return static
         * @static
         */
        public static function assertTableBulkActionsExistInOrder($names)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionsExistInOrder($names);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionVisible()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionVisible($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionVisible($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionHidden()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionHidden($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionHidden($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionEnabled()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionEnabled($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionEnabled($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionDisabled()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionDisabled($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionDisabled($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionHasIcon()
         * @param array|string $actions
         * @param \BackedEnum|string $icon
         * @return static
         * @static
         */
        public static function assertTableBulkActionHasIcon($actions, $icon)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionHasIcon($actions, $icon);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionDoesNotHaveIcon()
         * @param array|string $actions
         * @param \BackedEnum|string $icon
         * @return static
         * @static
         */
        public static function assertTableBulkActionDoesNotHaveIcon($actions, $icon)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionDoesNotHaveIcon($actions, $icon);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionHasLabel()
         * @param array|string $actions
         * @param string $label
         * @return static
         * @static
         */
        public static function assertTableBulkActionHasLabel($actions, $label)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionHasLabel($actions, $label);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionDoesNotHaveLabel()
         * @param array|string $actions
         * @param string $label
         * @return static
         * @static
         */
        public static function assertTableBulkActionDoesNotHaveLabel($actions, $label)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionDoesNotHaveLabel($actions, $label);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionHasColor()
         * @param array|string $actions
         * @param array|string $color
         * @return static
         * @static
         */
        public static function assertTableBulkActionHasColor($actions, $color)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionHasColor($actions, $color);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionDoesNotHaveColor()
         * @param array|string $actions
         * @param array|string $color
         * @return static
         * @static
         */
        public static function assertTableBulkActionDoesNotHaveColor($actions, $color)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionDoesNotHaveColor($actions, $color);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionMounted()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionMounted($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionMounted($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionNotMounted()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionNotMounted($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionNotMounted($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionMounted()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionHalted($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionHalted($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertTableBulkActionMounted()
         * @param array|string $actions
         * @return static
         * @static
         */
        public static function assertTableBulkActionHeld($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableBulkActionHeld($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertHasTableBulkActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasTableBulkActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasTableBulkActionErrors($keys);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::assertHasNoTableBulkActionErrors()
         * @param array $keys
         * @return static
         * @static
         */
        public static function assertHasNoTableBulkActionErrors($keys = [])
        {
            return \Livewire\Features\SupportTesting\Testable::assertHasNoTableBulkActionErrors($keys);
        }

        /**
         * @see \Filament\Tables\Testing\TestsBulkActions::parseNestedTableBulkActions()
         * @param array|string $actions
         * @return array
         * @static
         */
        public static function parseNestedTableBulkActions($actions)
        {
            return \Livewire\Features\SupportTesting\Testable::parseNestedTableBulkActions($actions);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertCanRenderTableColumn()
         * @param string $name
         * @return static
         * @static
         */
        public static function assertCanRenderTableColumn($name)
        {
            return \Livewire\Features\SupportTesting\Testable::assertCanRenderTableColumn($name);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertCanNotRenderTableColumn()
         * @param string $name
         * @return static
         * @static
         */
        public static function assertCanNotRenderTableColumn($name)
        {
            return \Livewire\Features\SupportTesting\Testable::assertCanNotRenderTableColumn($name);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableRecordKeyExists()
         * @param string|null $recordKey
         * @return static
         * @static
         */
        public static function assertTableRecordKeyExists($recordKey)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableRecordKeyExists($recordKey);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnExists()
         * @param string $name
         * @param \Closure|null $checkColumnUsing
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableColumnExists($name, $checkColumnUsing = null, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnExists($name, $checkColumnUsing, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnDoesNotExist()
         * @param string $name
         * @param \Closure|null $checkColumnUsing
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableColumnDoesNotExist($name, $checkColumnUsing = null, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnDoesNotExist($name, $checkColumnUsing, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnVisible()
         * @param string $name
         * @return static
         * @static
         */
        public static function assertTableColumnVisible($name)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnVisible($name);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnHidden()
         * @param string $name
         * @return static
         * @static
         */
        public static function assertTableColumnHidden($name)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnHidden($name);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnStateSet()
         * @param string $name
         * @param mixed $state
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableColumnStateSet($name, $state, $record)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnStateSet($name, $state, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnStateNotSet()
         * @param string $name
         * @param mixed $state
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableColumnStateNotSet($name, $state, $record)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnStateNotSet($name, $state, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnFormattedStateSet()
         * @param string $name
         * @param mixed $state
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableColumnFormattedStateSet($name, $state, $record)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnFormattedStateSet($name, $state, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnFormattedStateNotSet()
         * @param string $name
         * @param mixed $state
         * @param mixed $record
         * @return static
         * @static
         */
        public static function assertTableColumnFormattedStateNotSet($name, $state, $record)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnFormattedStateNotSet($name, $state, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnHasExtraAttributes()
         * @param string $name
         * @param array $attributes
         * @param mixed $record
         * @static
         */
        public static function assertTableColumnHasExtraAttributes($name, $attributes, $record)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnHasExtraAttributes($name, $attributes, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnDoesNotHaveExtraAttributes()
         * @param string $name
         * @param array $attributes
         * @param mixed $record
         * @static
         */
        public static function assertTableColumnDoesNotHaveExtraAttributes($name, $attributes, $record)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnDoesNotHaveExtraAttributes($name, $attributes, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnHasDescription()
         * @param string $name
         * @param mixed $description
         * @param mixed $record
         * @param string $position
         * @static
         */
        public static function assertTableColumnHasDescription($name, $description, $record, $position = 'below')
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnHasDescription($name, $description, $record, $position);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableColumnDoesNotHaveDescription()
         * @param string $name
         * @param mixed $description
         * @param mixed $record
         * @param string $position
         * @static
         */
        public static function assertTableColumnDoesNotHaveDescription($name, $description, $record, $position = 'below')
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnDoesNotHaveDescription($name, $description, $record, $position);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableSelectColumnHasOptions()
         * @param string $name
         * @param array $options
         * @param mixed $record
         * @static
         */
        public static function assertTableSelectColumnHasOptions($name, $options, $record)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableSelectColumnHasOptions($name, $options, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::assertTableSelectColumnDoesNotHaveOptions()
         * @param string $name
         * @param array $options
         * @param mixed $record
         * @static
         */
        public static function assertTableSelectColumnDoesNotHaveOptions($name, $options, $record)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableSelectColumnDoesNotHaveOptions($name, $options, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::callTableColumnAction()
         * @param string $name
         * @param mixed $record
         * @return static
         * @static
         */
        public static function callTableColumnAction($name, $record = null)
        {
            return \Livewire\Features\SupportTesting\Testable::callTableColumnAction($name, $record);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::sortTable()
         * @param string|null $name
         * @param string|null $direction
         * @return static
         * @static
         */
        public static function sortTable($name = null, $direction = null)
        {
            return \Livewire\Features\SupportTesting\Testable::sortTable($name, $direction);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::searchTable()
         * @param string|null $search
         * @return static
         * @static
         */
        public static function searchTable($search = null)
        {
            return \Livewire\Features\SupportTesting\Testable::searchTable($search);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::searchTableColumns()
         * @param array $searches
         * @return static
         * @static
         */
        public static function searchTableColumns($searches)
        {
            return \Livewire\Features\SupportTesting\Testable::searchTableColumns($searches);
        }

        /**
         * @see \Filament\Tables\Testing\TestsColumns::toggleAllTableColumns()
         * @param bool $condition
         * @return static
         * @static
         */
        public static function toggleAllTableColumns($condition = true)
        {
            return \Livewire\Features\SupportTesting\Testable::toggleAllTableColumns($condition);
        }

        /**
         * @see \Filament\Tables\Testing\TestsFilters::filterTable()
         * @param string $name
         * @param mixed $data
         * @return static
         * @static
         */
        public static function filterTable($name, $data = null)
        {
            return \Livewire\Features\SupportTesting\Testable::filterTable($name, $data);
        }

        /**
         * @see \Filament\Tables\Testing\TestsFilters::resetTableFilters()
         * @return static
         * @static
         */
        public static function resetTableFilters()
        {
            return \Livewire\Features\SupportTesting\Testable::resetTableFilters();
        }

        /**
         * @see \Filament\Tables\Testing\TestsFilters::removeTableFilter()
         * @param string $filter
         * @param string|null $field
         * @return static
         * @static
         */
        public static function removeTableFilter($filter, $field = null)
        {
            return \Livewire\Features\SupportTesting\Testable::removeTableFilter($filter, $field);
        }

        /**
         * @see \Filament\Tables\Testing\TestsFilters::removeTableFilters()
         * @return static
         * @static
         */
        public static function removeTableFilters()
        {
            return \Livewire\Features\SupportTesting\Testable::removeTableFilters();
        }

        /**
         * @see \Filament\Tables\Testing\TestsFilters::assertTableFilterExists()
         * @param string $name
         * @param \Closure|null $checkFilterUsing
         * @return static
         * @static
         */
        public static function assertTableFilterExists($name, $checkFilterUsing = null)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableFilterExists($name, $checkFilterUsing);
        }

        /**
         * @see \Filament\Tables\Testing\TestsFilters::assertTableFilterVisible()
         * @param string $name
         * @return static
         * @static
         */
        public static function assertTableFilterVisible($name)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableFilterVisible($name);
        }

        /**
         * @see \Filament\Tables\Testing\TestsFilters::assertTableFilterHidden()
         * @param string $name
         * @return static
         * @static
         */
        public static function assertTableFilterHidden($name)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableFilterHidden($name);
        }

        /**
         * @see \Filament\Tables\Testing\TestsRecords::assertCanSeeTableRecords()
         * @param \Illuminate\Support\Collection|array $records
         * @param bool $inOrder
         * @return static
         * @static
         */
        public static function assertCanSeeTableRecords($records, $inOrder = false)
        {
            return \Livewire\Features\SupportTesting\Testable::assertCanSeeTableRecords($records, $inOrder);
        }

        /**
         * @see \Filament\Tables\Testing\TestsRecords::assertCanNotSeeTableRecords()
         * @param \Illuminate\Support\Collection|array $records
         * @return static
         * @static
         */
        public static function assertCanNotSeeTableRecords($records)
        {
            return \Livewire\Features\SupportTesting\Testable::assertCanNotSeeTableRecords($records);
        }

        /**
         * @see \Filament\Tables\Testing\TestsRecords::assertCountTableRecords()
         * @param int $count
         * @return static
         * @static
         */
        public static function assertCountTableRecords($count)
        {
            return \Livewire\Features\SupportTesting\Testable::assertCountTableRecords($count);
        }

        /**
         * @see \Filament\Tables\Testing\TestsRecords::loadTable()
         * @return static
         * @static
         */
        public static function loadTable()
        {
            return \Livewire\Features\SupportTesting\Testable::loadTable();
        }

        /**
         * @see \Filament\Tables\Testing\TestsSummaries::assertTableColumnSummarySet()
         * @param string $columnName
         * @param string $summarizerId
         * @param mixed $state
         * @param bool $isCurrentPaginationPageOnly
         * @return static
         * @static
         */
        public static function assertTableColumnSummarySet($columnName, $summarizerId, $state, $isCurrentPaginationPageOnly = false)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnSummarySet($columnName, $summarizerId, $state, $isCurrentPaginationPageOnly);
        }

        /**
         * @see \Filament\Tables\Testing\TestsSummaries::assertTableColumnSummaryNotSet()
         * @param string $columnName
         * @param string $summarizerId
         * @param mixed $state
         * @param bool $isCurrentPaginationPageOnly
         * @return static
         * @static
         */
        public static function assertTableColumnSummaryNotSet($columnName, $summarizerId, $state, $isCurrentPaginationPageOnly = false)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnSummaryNotSet($columnName, $summarizerId, $state, $isCurrentPaginationPageOnly);
        }

        /**
         * @see \Filament\Tables\Testing\TestsSummaries::assertTableColumnSummarizerExists()
         * @param string $columnName
         * @param string $summarizerId
         * @return static
         * @static
         */
        public static function assertTableColumnSummarizerExists($columnName, $summarizerId)
        {
            return \Livewire\Features\SupportTesting\Testable::assertTableColumnSummarizerExists($columnName, $summarizerId);
        }

            }
    }

namespace Illuminate\View {
    /**
     */
    class ComponentAttributeBag {
        /**
         * @see \Filament\Support\SupportServiceProvider::packageBooted()
         * @param \Filament\Support\View\Components\Contracts\HasColor|string $component
         * @param array|string|null $color
         * @return \Illuminate\View\ComponentAttributeBag
         * @static
         */
        public static function color($component, $color)
        {
            return \Illuminate\View\ComponentAttributeBag::color($component, $color);
        }

        /**
         * @see \Filament\Support\SupportServiceProvider::packageBooted()
         * @param array|int|null $columns
         * @param \Filament\Support\Enums\GridDirection $direction
         * @return \Illuminate\View\ComponentAttributeBag
         * @static
         */
        public static function grid($columns = [], $direction = \Filament\Support\Enums\GridDirection::Row)
        {
            return \Illuminate\View\ComponentAttributeBag::grid($columns, $direction);
        }

        /**
         * @see \Filament\Support\SupportServiceProvider::packageBooted()
         * @param array|string|int|null $span
         * @param array|int|null $start
         * @param array|string|int|null $order
         * @param bool $isHidden
         * @return \Illuminate\View\ComponentAttributeBag
         * @static
         */
        public static function gridColumn($span = [], $start = [], $order = [], $isHidden = false)
        {
            return \Illuminate\View\ComponentAttributeBag::gridColumn($span, $start, $order, $isHidden);
        }

        /**
         * @see \Livewire\Features\SupportBladeAttributes\SupportBladeAttributes::provide()
         * @param mixed $name
         * @static
         */
        public static function wire($name)
        {
            return \Illuminate\View\ComponentAttributeBag::wire($name);
        }

            }
    /**
     */
    class View {
        /**
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $data
         * @static
         */
        public static function layoutData($data = [])
        {
            return \Illuminate\View\View::layoutData($data);
        }

        /**
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $section
         * @static
         */
        public static function section($section)
        {
            return \Illuminate\View\View::section($section);
        }

        /**
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $title
         * @static
         */
        public static function title($title)
        {
            return \Illuminate\View\View::title($title);
        }

        /**
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $slot
         * @static
         */
        public static function slot($slot)
        {
            return \Illuminate\View\View::slot($slot);
        }

        /**
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $view
         * @param mixed $params
         * @static
         */
        public static function extends($view, $params = [])
        {
            return \Illuminate\View\View::extends($view, $params);
        }

        /**
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $view
         * @param mixed $params
         * @static
         */
        public static function layout($view, $params = [])
        {
            return \Illuminate\View\View::layout($view, $params);
        }

        /**
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param callable $callback
         * @static
         */
        public static function response($callback)
        {
            return \Illuminate\View\View::response($callback);
        }

            }
    }

namespace Bgaze\BootstrapForm\Support {
    /**
     * Customize Collection class to ease HTML attributes set manipulation.
     *
     */
    class Attributes extends \Illuminate\Support\Collection {
            }
    }


namespace  {
    class App extends \Illuminate\Support\Facades\App {}
    class Arr extends \Illuminate\Support\Arr {}
    class Artisan extends \Illuminate\Support\Facades\Artisan {}
    class Auth extends \Illuminate\Support\Facades\Auth {}
    class Blade extends \Illuminate\Support\Facades\Blade {}
    class Broadcast extends \Illuminate\Support\Facades\Broadcast {}
    class Bus extends \Illuminate\Support\Facades\Bus {}
    class Cache extends \Illuminate\Support\Facades\Cache {}
    class Config extends \Illuminate\Support\Facades\Config {}
    class Cookie extends \Illuminate\Support\Facades\Cookie {}
    class Crypt extends \Illuminate\Support\Facades\Crypt {}
    class DB extends \Illuminate\Support\Facades\DB {}
    class Event extends \Illuminate\Support\Facades\Event {}
    class File extends \Illuminate\Support\Facades\File {}
    class Gate extends \Illuminate\Support\Facades\Gate {}
    class Hash extends \Illuminate\Support\Facades\Hash {}
    class Lang extends \Illuminate\Support\Facades\Lang {}
    class Log extends \Illuminate\Support\Facades\Log {}
    class Mail extends \Illuminate\Support\Facades\Mail {}
    class Notification extends \Illuminate\Support\Facades\Notification {}
    class Password extends \Illuminate\Support\Facades\Password {}
    class Queue extends \Illuminate\Support\Facades\Queue {}
    class Redirect extends \Illuminate\Support\Facades\Redirect {}
    class Request extends \Illuminate\Support\Facades\Request {}
    class Response extends \Illuminate\Support\Facades\Response {}
    class Route extends \Illuminate\Support\Facades\Route {}
    class Schema extends \Illuminate\Support\Facades\Schema {}
    class Session extends \Illuminate\Support\Facades\Session {}
    class Storage extends \Illuminate\Support\Facades\Storage {}
    class Str extends \Illuminate\Support\Str {}
    class URL extends \Illuminate\Support\Facades\URL {}
    class Validator extends \Illuminate\Support\Facades\Validator {}
    class View extends \Illuminate\Support\Facades\View {}
    class Form extends \Collective\Html\FormFacade {}
    class Html extends \Collective\Html\HtmlFacade {}
    class Chat extends \Musonza\Chat\Facades\ChatFacade {}
    class EloquentSerialize extends \AnourValar\EloquentSerialize\Facades\EloquentSerializeFacade {}
    class SEO extends \Artesaos\SEOTools\Facades\SEOTools {}
    class JsonLd extends \Artesaos\SEOTools\Facades\JsonLd {}
    class SEOMeta extends \Artesaos\SEOTools\Facades\SEOMeta {}
    class Twitter extends \Artesaos\SEOTools\Facades\TwitterCard {}
    class OpenGraph extends \Artesaos\SEOTools\Facades\OpenGraph {}
    class BF extends \Bgaze\BootstrapForm\Support\Facades\BF {}
    class Image extends \Intervention\Image\Facades\Image {}
    class Horizon extends \Laravel\Horizon\Horizon {}
    class Mcp extends \Laravel\Mcp\Facades\Mcp {}
    class Socialite extends \Laravel\Socialite\Facades\Socialite {}
    class Livewire extends \Livewire\Livewire {}
    class LogViewer extends \Opcodes\LogViewer\Facades\LogViewer {}
    class Alert extends \RealRashid\SweetAlert\Facades\Alert {}
    class Fractal extends \Spatie\Fractal\Facades\Fractal {}
    class Health extends \Spatie\Health\Facades\Health {}
    class Flare extends \Spatie\LaravelIgnition\Facades\Flare {}
    class ResponseCache extends \Spatie\ResponseCache\Facades\ResponseCache {}
    class Signal extends \Spatie\SignalAwareCommand\Facades\Signal {}
}





