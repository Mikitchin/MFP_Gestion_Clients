<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

<<<<<<< HEAD
if (\class_exists(\Container1NAwScQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1NAwScQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1NAwScQ.legacy');
=======
if (\class_exists(\ContainerZtzLXh1\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZtzLXh1/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZtzLXh1.legacy');
>>>>>>> 6666b8ea91ededcc049ed49a3746a46c07ba5f05

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
<<<<<<< HEAD
    \class_alias(\Container1NAwScQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1NAwScQ\App_KernelDevDebugContainer([
    'container.build_hash' => '1NAwScQ',
    'container.build_id' => '463deb66',
    'container.build_time' => 1668326735,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1NAwScQ');
=======
    \class_alias(\ContainerZtzLXh1\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZtzLXh1\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZtzLXh1',
    'container.build_id' => '17966378',
    'container.build_time' => 1668423239,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZtzLXh1');
>>>>>>> 6666b8ea91ededcc049ed49a3746a46c07ba5f05
