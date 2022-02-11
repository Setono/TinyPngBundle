<?php

declare(strict_types=1);

namespace Setono\TinyPngBundle\DependencyInjection;

use Exception;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

final class SetonoTinyPngExtension extends Extension
{
    /**
     * {@inheritdoc}
     *
     * @throws Exception
     *
     * @psalm-suppress PossiblyNullArgument
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $configs = $this->processConfiguration($this->getConfiguration([], $container), $configs);
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));

        $container->setParameter('setono.tiny_png.api_key', $configs['api_key']);
        $container->setParameter('setono.tiny_png.proxy', $configs['proxy']);

        $loader->load('services.xml');
    }
}
