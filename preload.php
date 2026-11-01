<?php declare(strict_types=1);
/*
 * This file is part of Webisters.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
require __DIR__ . '/../autoload/src/Preloader.php';

use Framework\Autoload\Preloader;

$preloader = new Preloader();
$files = $preloader->load();
echo 'Preloading Webisters: ' . \PHP_EOL;
foreach ($files as $index => $file) {
    echo ++$index . ') ' . $file . \PHP_EOL;
}
echo 'Total of ' . count($files) . ' preloaded files.' . \PHP_EOL;

// A class may reference a type from a package listed only under "suggest", so
// load() skips the file rather than aborting the whole preload. Reporting what
// was skipped is the point of recording it: a silently shorter preload looks
// like a working one.
$failed = $preloader->getFailedFiles();
if ($failed !== []) {
    echo \PHP_EOL . 'Skipped ' . count($failed) . ' file(s):' . \PHP_EOL;
    $index = 0;
    foreach ($failed as $file => $message) {
        echo ++$index . ') ' . $file . \PHP_EOL . '   ' . $message . \PHP_EOL;
    }
    echo 'Install the suggested packages to preload these too.' . \PHP_EOL;
}
echo \PHP_EOL;
