<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerExAAgff\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerExAAgff/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerExAAgff.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerExAAgff\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerExAAgff\App_KernelDevDebugContainer([
    'container.build_hash' => 'ExAAgff',
    'container.build_id' => '1219f2db',
    'container.build_time' => 1672224441,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerExAAgff');
