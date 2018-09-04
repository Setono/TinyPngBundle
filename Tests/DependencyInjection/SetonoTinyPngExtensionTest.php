<?php

declare(strict_types=1);

namespace Loevgaard\SyliusOptimizeImagesPlugin\Tests\DependencyInjection;

use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;
use Setono\TinyPngBundle\DependencyInjection\SetonoTinyPngExtension;

class SetonoTinyPngExtensionTest extends AbstractExtensionTestCase
{
    protected function getContainerExtensions()
    {
        return [
            new SetonoTinyPngExtension()
        ];
    }

    protected function getMinimalConfiguration()
    {
        return [
            'api_key' => 'api key',
            'proxy' => 'proxy'
        ];
    }


    /**
     * @test
     */
    public function parametersHasBeenSet()
    {
        $this->load();

        $this->assertContainerBuilderHasParameter('setono.tiny_png.api_key', 'api key');
        $this->assertContainerBuilderHasParameter('setono.tiny_png.proxy', 'proxy');
    }
}
