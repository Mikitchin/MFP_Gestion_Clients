<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVAXJipW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVAXJipW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVAXJipW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVAXJipW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVAXJipW\App_KernelDevDebugContainer([
    'container.build_hash' => 'VAXJipW',
    'container.build_id' => 'e40a0980',
    'container.build_time' => 1667906257,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVAXJipW');
