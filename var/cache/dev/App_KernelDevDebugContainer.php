<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMPrmaoU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMPrmaoU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMPrmaoU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMPrmaoU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMPrmaoU\App_KernelDevDebugContainer([
    'container.build_hash' => 'MPrmaoU',
    'container.build_id' => 'c01e51f2',
    'container.build_time' => 1675864330,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMPrmaoU');
