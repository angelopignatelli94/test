<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerN9hdyvo\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerN9hdyvo/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerN9hdyvo.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerN9hdyvo\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerN9hdyvo\appDevDebugProjectContainer([
    'container.build_hash' => 'N9hdyvo',
    'container.build_id' => 'cb428bb3',
    'container.build_time' => 1581084485,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerN9hdyvo');
