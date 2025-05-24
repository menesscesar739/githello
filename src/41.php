<?php
    // This is an example of a simple PHP script.
    // It reads data from stdin and prints it to stdout.

    $stdin = file('stdin', FILE_IGNORE_MODE);
    while (list($line) = each($stdin)) {
        if (strpos($line, "example") !== false) {
            echo "Found the word 'example' in line: $line\n";
        }
    }
