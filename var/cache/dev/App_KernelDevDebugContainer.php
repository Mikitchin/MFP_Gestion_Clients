<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWImCKhQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWImCKhQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWImCKhQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWImCKhQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWImCKhQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'WImCKhQ',
    'container.build_id' => '55fc888e',
    'container.build_time' => 1666718994,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWImCKhQ');
