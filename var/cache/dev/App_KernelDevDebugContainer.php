<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOxstBKI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOxstBKI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOxstBKI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOxstBKI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOxstBKI\App_KernelDevDebugContainer([
    'container.build_hash' => 'OxstBKI',
    'container.build_id' => '4ac7207a',
    'container.build_time' => 1664860617,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOxstBKI');
