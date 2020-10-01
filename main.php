<?php

$gitVersion = trim(shell_exec('git -C '. __DIR__ .'/../.. describe --long --tags --dirty --broken'));

return [
    'Git-Commit' => $gitVersion
];
