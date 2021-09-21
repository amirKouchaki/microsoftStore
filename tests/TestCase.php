<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function remove_stored_dir($path){
        unlink($path);
        rmdir(dirname($path));
    }
}
