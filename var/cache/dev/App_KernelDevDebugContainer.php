<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTrxDgfD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTrxDgfD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTrxDgfD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTrxDgfD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTrxDgfD\App_KernelDevDebugContainer([
    'container.build_hash' => 'TrxDgfD',
    'container.build_id' => 'a36fda14',
    'container.build_time' => 1667332951,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTrxDgfD');
