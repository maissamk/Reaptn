<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9tnLlEK\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9tnLlEK/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9tnLlEK.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9tnLlEK\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container9tnLlEK\App_KernelDevDebugContainer([
    'container.build_hash' => '9tnLlEK',
    'container.build_id' => 'c2afae3a',
    'container.build_time' => 1739673584,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container9tnLlEK');
