#!/usr/bin/env php
<?php

error_reporting(E_ALL);

$hasError = false;
while(!feof(STDIN)) {
    $line = fgets(STDIN, 8096);

    if (!$hasError && preg_match('/^::error /', $line) === 1) {
        $hasError = true;
    }

    echo $line;
}

exit($hasError ? 1 : 0);