<?php

return [
    '^$' => ['controller' => 'Inbox'],
    '^(?P<controller>[a-z-]+):?(?P<action>[a-z-]+)?/?$' => [],
];