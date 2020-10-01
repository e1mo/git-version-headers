<?php

$gitVersion = trim(shell_exec('git -C '. __DIR__ .'/../.. describe --long --tags | sed \'s/\([^-]*-g\)/r\1/;s/-/./g\''));

return [
    'Git-Commit' => $gitVersion
];