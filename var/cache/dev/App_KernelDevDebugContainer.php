<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNMMRTyh\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNMMRTyh/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNMMRTyh.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNMMRTyh\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNMMRTyh\App_KernelDevDebugContainer([
    'container.build_hash' => 'NMMRTyh',
    'container.build_id' => '88ee59e2',
    'container.build_time' => 1621078778,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNMMRTyh');
