<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYVCl4qz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYVCl4qz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYVCl4qz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYVCl4qz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYVCl4qz\App_KernelDevDebugContainer([
    'container.build_hash' => 'YVCl4qz',
    'container.build_id' => '49c5b327',
    'container.build_time' => 1741034896,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYVCl4qz');
