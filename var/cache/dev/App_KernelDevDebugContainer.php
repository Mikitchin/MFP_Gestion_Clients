<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXqkbZ5G\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXqkbZ5G/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXqkbZ5G.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXqkbZ5G\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXqkbZ5G\App_KernelDevDebugContainer([
    'container.build_hash' => 'XqkbZ5G',
    'container.build_id' => 'bc6d8732',
    'container.build_time' => 1677853648,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXqkbZ5G');
