<?php

namespace MikeBurrellJr\FortifyUIBulma\Commands;

use Illuminate\Console\Command;

class FortifyUIBulmaCommand extends Command
{
    public $signature = 'fortify-ui:bulma';

    public $description = 'Install Bulma preset, with views and resources.';

    public function handle()
    {
        $this->publishAssets();
        $this->updateWebpackUrl();
        $this->updateRoutes();

        $this->comment('Bulma is now installed.');
        $this->info('Remember to run npm i && npm run dev!');
    }

    protected function publishAssets()
    {
        $this->callSilent('vendor:publish', ['--tag' => 'fortify-ui-bulma-resources', '--force' => true]);

        File::deleteDirectory(resource_path('css'));
    }

    protected function updateWebpackUrl()
    {
        File::put(
            base_path('webpack.mix.js'),
            str_replace(
                'http://CHANGE_ME.test',
                env('APP_URL'),
                File::get(base_path('webpack.mix.js'))
            )
        );
    }

    protected function updateRoutes()
    {
        file_put_contents(
            base_path('routes/web.php'),
            "\nRoute::prefix('user')->middleware(['auth', 'verified'])->group(function () {\n\tRoute::view('profile', 'profile.show');\n});\n",
            FILE_APPEND
        );
    }
}
