<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVdk7Gv3\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVdk7Gv3/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVdk7Gv3.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVdk7Gv3\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVdk7Gv3\App_KernelDevDebugContainer([
    'container.build_hash' => 'Vdk7Gv3',
    'container.build_id' => '31cc85f9',
    'container.build_time' => 1741035843,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVdk7Gv3');
