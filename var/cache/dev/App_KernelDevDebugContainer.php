<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDeJRhCI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDeJRhCI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDeJRhCI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDeJRhCI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDeJRhCI\App_KernelDevDebugContainer([
    'container.build_hash' => 'DeJRhCI',
    'container.build_id' => 'c733722b',
    'container.build_time' => 1664862409,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDeJRhCI');
