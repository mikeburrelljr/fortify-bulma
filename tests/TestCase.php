<?php

namespace MikeBurrellJr\FortifyBulma\Tests;

use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            FortifyBulmaServiceProvider::class,
        ];
    }
}
