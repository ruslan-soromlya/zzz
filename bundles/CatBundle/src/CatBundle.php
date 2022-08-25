<?php
namespace ruslanchyk\CatBundle;

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;


class CatBundle extends Bundle
{
    // public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    // {
    //     // load an XML, PHP or Yaml file
    //     $container->import('../config/services.yaml');
    // }

    

    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}