<?php

namespace Lendable\GoCardlessEnterpriseBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('gocardless_enterprise');
        if (method_exists($treeBuilder, 'getRootNode')) {
            $rootNode = $treeBuilder->getRootNode();
        } else {
            $rootNode = $treeBuilder->root('gocardless_enterprise');
        }

        $rootNode
            ->arrayPrototype()
            ->children()
            ->scalarNode('baseUrl')->isRequired()->cannotBeEmpty()->end()
            ->scalarNode('gocardlessVersion')->isRequired()->cannotBeEmpty()->end()
            ->scalarNode('webhook_secret')->isRequired()->cannotBeEmpty()->end()
            ->scalarNode('token')->isRequired()->cannotBeEmpty()->end()
            ->end();

        return $treeBuilder;
    }
}
