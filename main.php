<?php

$gitVersion = trim(shell_exec('git -C ../.. describe --long --tags | sed \'s/\([^-]*-g\)/r\1/;s/-/./g\''));

return [
    'Git-Commit' => $gitVersion
];