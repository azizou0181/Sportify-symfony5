<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXxl2IuK\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXxl2IuK/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXxl2IuK.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXxl2IuK\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXxl2IuK\App_KernelDevDebugContainer([
    'container.build_hash' => 'Xxl2IuK',
    'container.build_id' => 'd7589b54',
    'container.build_time' => 1677763453,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXxl2IuK');