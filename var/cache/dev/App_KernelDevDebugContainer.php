<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1NAwScQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1NAwScQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1NAwScQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1NAwScQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1NAwScQ\App_KernelDevDebugContainer([
    'container.build_hash' => '1NAwScQ',
    'container.build_id' => '463deb66',
    'container.build_time' => 1668326735,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1NAwScQ');
