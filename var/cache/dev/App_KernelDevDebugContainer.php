<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBs9xvQq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBs9xvQq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBs9xvQq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBs9xvQq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBs9xvQq\App_KernelDevDebugContainer([
    'container.build_hash' => 'Bs9xvQq',
    'container.build_id' => '605bac00',
    'container.build_time' => 1664880944,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBs9xvQq');
