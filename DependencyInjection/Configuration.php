<?php

declare(strict_types=1);

namespace Setono\TinyPngBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('setono_tiny_png');
        $rootNode = $treeBuilder->getRootNode();
        /** @psalm-suppress PossiblyUndefinedMethod */
        $rootNode
            ->children()
                ->scalarNode('api_key')
                    ->isRequired()
                    ->cannotBeEmpty()
                    ->info('Your TinyPNG API key')
                ->end()
                ->scalarNode('proxy')
                    ->defaultNull()
                    ->cannotBeEmpty()
                    ->info('The proxy to use')
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
