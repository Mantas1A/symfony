<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXis1INV\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXis1INV/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXis1INV.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXis1INV\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXis1INV\App_KernelDevDebugContainer([
    'container.build_hash' => 'Xis1INV',
    'container.build_id' => 'a3801602',
    'container.build_time' => 1578609049,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXis1INV');
