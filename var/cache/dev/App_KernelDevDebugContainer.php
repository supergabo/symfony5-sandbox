<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerY5IX0nV\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerY5IX0nV/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerY5IX0nV.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerY5IX0nV\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerY5IX0nV\App_KernelDevDebugContainer([
    'container.build_hash' => 'Y5IX0nV',
    'container.build_id' => '7d71e942',
    'container.build_time' => 1579571451,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerY5IX0nV');
