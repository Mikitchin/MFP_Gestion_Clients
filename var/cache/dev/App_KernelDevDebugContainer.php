<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVE3VIHx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVE3VIHx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVE3VIHx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVE3VIHx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVE3VIHx\App_KernelDevDebugContainer([
    'container.build_hash' => 'VE3VIHx',
    'container.build_id' => 'e008978e',
    'container.build_time' => 1668124136,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVE3VIHx');
