<?php

namespace Container3dSPiVo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M5VHZDoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.M5VHZDo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.M5VHZDo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'result' => ['privates', '.errored..service_locator.M5VHZDo.App\\Entity\\Result', NULL, 'Cannot autowire service ".service_locator.M5VHZDo": it references class "App\\Entity\\Result" but no such service exists.'],
        ], [
            'result' => 'App\\Entity\\Result',
        ]);
    }
}
