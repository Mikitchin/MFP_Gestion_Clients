<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX9MAa0Q\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX9MAa0Q/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerX9MAa0Q.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerX9MAa0Q\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerX9MAa0Q\App_KernelDevDebugContainer([
    'container.build_hash' => 'X9MAa0Q',
    'container.build_id' => '36eadcda',
    'container.build_time' => 1676789482,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX9MAa0Q');
