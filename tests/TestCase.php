<?php

namespace Modules\Blog\Test;

use Orchestra\Testbench\TestCase as Orchestra;
use Modules\Blog\Providers\BlogServiceProvider;

abstract class TestCase extends Orchestra
{
    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            // maybe VainServiceProvider::class is necessary, too?
            BlogServiceProvider::class,
        ];
    }
}