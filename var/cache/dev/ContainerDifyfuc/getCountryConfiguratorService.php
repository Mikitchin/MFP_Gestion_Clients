<?php

namespace ContainerDifyfuc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCountryConfiguratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CountryConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CountryConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Contracts'.\DIRECTORY_SEPARATOR.'Field'.\DIRECTORY_SEPARATOR.'FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Field'.\DIRECTORY_SEPARATOR.'Configurator'.\DIRECTORY_SEPARATOR.'CountryConfigurator.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CountryConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CountryConfigurator(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage'] ?? $container->load('getAssetPackageService')));
    }
}
