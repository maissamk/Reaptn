<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSaZuODR\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSaZuODR/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSaZuODR.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSaZuODR\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSaZuODR\App_KernelDevDebugContainer([
    'container.build_hash' => 'SaZuODR',
    'container.build_id' => 'd4da060c',
    'container.build_time' => 1741050645,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSaZuODR');
