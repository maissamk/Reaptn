<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKOlUvJU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKOlUvJU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKOlUvJU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKOlUvJU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKOlUvJU\App_KernelDevDebugContainer([
    'container.build_hash' => 'KOlUvJU',
    'container.build_id' => '0899b0e3',
    'container.build_time' => 1739279763,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKOlUvJU');
