<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1rnT05G\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1rnT05G/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1rnT05G.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1rnT05G\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container1rnT05G\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '1rnT05G',
    'container.build_id' => '1b04f36b',
    'container.build_time' => 1591180898,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1rnT05G');
