<?php

namespace MikeBurrellJr\FortifyUIBulma;

use Illuminate\Support\ServiceProvider;
use MikeBurrellJr\FortifyUIBulma\Commands\FortifyUIBulmaCommand;

class FortifyUIBulmaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../stubs/resources/views' => base_path('resources/views'),
                __DIR__ . '/../stubs/resources/scss' => base_path('resources/scss'),
                __DIR__ . '/../stubs/resources/js' => base_path('resources/js'),
                __DIR__ . '/../stubs/package.json' => base_path('package.json'),
                __DIR__ . '/../stubs/webpack.mix.js' => base_path('webpack.mix.js'),
            ], 'fortify-ui-bulma-resources');

            $this->commands([
                FortifyUIBulmaCommand::class,
            ]);
        }
    }
}
