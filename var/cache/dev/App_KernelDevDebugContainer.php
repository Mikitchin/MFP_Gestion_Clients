<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFpZ0Lm9\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFpZ0Lm9/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFpZ0Lm9.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFpZ0Lm9\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFpZ0Lm9\App_KernelDevDebugContainer([
    'container.build_hash' => 'FpZ0Lm9',
    'container.build_id' => 'da674d46',
    'container.build_time' => 1672782561,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFpZ0Lm9');
