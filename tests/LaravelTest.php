<?php

namespace Tests;

use PhpCsFixer\Console\Application;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;

class LaravelTest extends TestCase
{
    /** @test */
    public function does_not_fix_laravel_source()
    {
        $application = new Application();
        $application->setAutoExit(false);
        $input = new ArrayInput([
            'command'   => 'fix',
            'path'      => [__DIR__.'/../vendor/laravel/framework/src/Illuminate/'],
            '--config'  => __DIR__.'/../laravel.php_cs',
            '--dry-run' => true,
            '--format'  => 'json',
        ]);
        $output = new BufferedOutput();
        $application->run($input, $output);
        $content = json_decode($output->fetch(), true);

        $this->assertEmpty(
            $content['files'],
            'Expected original Laravel source code not to be fixed.'
        );
    }
}
