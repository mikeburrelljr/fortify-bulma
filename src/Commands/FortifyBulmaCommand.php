<?php

namespace MikeBurrellJr\FortifyBulma\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class FortifyBulmaCommand extends Command
{
    public $signature = 'fortify-ui:bulma';

    public $description = 'Install Bulma preset, with views and resources';

    public function handle()
    {
        $this->publishAssets();
        $this->updateRoutes();

        $this->comment('Bulma is now installed.');
        $this->info('Remember to run npm i && npm run dev!');
    }

    protected function publishAssets()
    {
        $this->callSilent('vendor:publish', ['--tag' => 'fortify-bulma-resources', '--force' => true]);

        File::deleteDirectory(resource_path('css'));
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
