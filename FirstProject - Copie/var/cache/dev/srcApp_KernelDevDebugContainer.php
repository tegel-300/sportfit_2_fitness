<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXqttMIG\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXqttMIG/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXqttMIG.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXqttMIG\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXqttMIG\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XqttMIG',
    'container.build_id' => 'edcf3d07',
    'container.build_time' => 1652305540,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXqttMIG');