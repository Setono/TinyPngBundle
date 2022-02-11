<?php

declare(strict_types=1);

namespace Setono\TinyPngBundle\tests\DependencyInjection;

use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;
use Setono\TinyPngBundle\DependencyInjection\SetonoTinyPngExtension;

class SetonoTinyPngExtensionTest extends AbstractExtensionTestCase
{
    protected function getContainerExtensions(): array
    {
        return [
            new SetonoTinyPngExtension(),
        ];
    }

    protected function getMinimalConfiguration(): array
    {
        return [
            'api_key' => 'api key',
            'proxy' => 'proxy',
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
