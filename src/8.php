<?php

$phrases = array(
    "Hello, world!",
    "Welcome to GitHub Pages!",
    "Let's get started.",
    "It looks like you are new here. Welcome!"
);

$randomPhrase = $phrases[array_rand($phrases)];

echo $randomPhrase;
