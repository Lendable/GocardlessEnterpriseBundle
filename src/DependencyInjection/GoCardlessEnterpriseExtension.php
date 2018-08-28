<?php

namespace Lendable\GoCardlessEnterpriseBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension as SymfonyExtension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class GoCardlessEnterpriseExtension extends SymfonyExtension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $this->processConfiguration($configuration, $configs);

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
