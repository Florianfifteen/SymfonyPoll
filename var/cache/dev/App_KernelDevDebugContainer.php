<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSdcPL6K\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSdcPL6K/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSdcPL6K.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSdcPL6K\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSdcPL6K\App_KernelDevDebugContainer([
    'container.build_hash' => 'SdcPL6K',
    'container.build_id' => '33b0bc99',
    'container.build_time' => 1621077227,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSdcPL6K');
