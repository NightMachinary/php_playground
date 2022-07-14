<?php

declare(strict_types=1);

namespace Nightmachinary\Tina;

function announce(): void
{
    // echo "Hello, ALICE_auto!";

    $a = array("foo", "bar", "hello", "world");
    $b = "4 4";
    echo "<pre>" . shell_exec("brishzq.zsh re ec '1 1' 2 \"3 3\" " . escapeshellarg($b)) . "</pre>";
}
