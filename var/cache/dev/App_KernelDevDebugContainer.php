<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9lPSdi9\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9lPSdi9/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9lPSdi9.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9lPSdi9\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container9lPSdi9\App_KernelDevDebugContainer([
    'container.build_hash' => '9lPSdi9',
    'container.build_id' => '3dab56a2',
    'container.build_time' => 1741044736,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container9lPSdi9');
