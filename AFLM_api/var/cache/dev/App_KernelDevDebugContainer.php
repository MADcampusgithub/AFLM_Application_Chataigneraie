<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerG54s0sd\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerG54s0sd/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerG54s0sd.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerG54s0sd\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerG54s0sd\App_KernelDevDebugContainer([
    'container.build_hash' => 'G54s0sd',
    'container.build_id' => '650ec41e',
    'container.build_time' => 1646295696,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerG54s0sd');
