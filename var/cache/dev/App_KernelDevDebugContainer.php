<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZNtAvxp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZNtAvxp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZNtAvxp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZNtAvxp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZNtAvxp\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZNtAvxp',
    'container.build_id' => 'e668de81',
    'container.build_time' => 1739672029,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZNtAvxp');
