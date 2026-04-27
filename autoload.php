<?php declare(strict_types=1);
/*
 * This file is part of Webisters.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
require __DIR__ . '/../autoload/src/Autoloader.php';

use Framework\Autoload\Autoloader;

$webistersDir = dirname(__DIR__) . \DIRECTORY_SEPARATOR;

return (new Autoloader())->setClasses([
    'Webisters' => __DIR__ . '/src/Webisters.php',
])->setNamespaces([
    'Framework\Autoload' => $webistersDir . 'autoload/src',
    'Framework\Cache' => $webistersDir . 'cache/src',
    'Framework\CLI' => $webistersDir . 'cli/src',
    'Framework\CLI\Commands' => $webistersDir . 'dev-commands/src',
    'Framework\Config' => $webistersDir . 'config/src',
    'Framework\Crypto' => $webistersDir . 'crypto/src',
    'Framework\Database' => $webistersDir . 'database/src',
    'Framework\Database\Extra' => $webistersDir . 'database-extra/src',
    'Framework\Date' => $webistersDir . 'date/src',
    'Framework\Debug' => $webistersDir . 'debug/src',
    'Framework\Email' => $webistersDir . 'email/src',
    'Framework\Events' => $webistersDir . 'events/src',
    'Framework\Factories' => $webistersDir . 'factories/src',
    'Framework\Helpers' => $webistersDir . 'helpers/src',
    'Framework\HTTP' => $webistersDir . 'http/src',
    'Framework\HTTP\Client' => $webistersDir . 'http-client/src',
    'Framework\Image' => $webistersDir . 'image/src',
    'Framework\Language' => $webistersDir . 'language/src',
    'Framework\Log' => $webistersDir . 'log/src',
    'Framework\MVC' => $webistersDir . 'mvc/src',
    'Framework\Pagination' => $webistersDir . 'pagination/src',
    'Framework\Routing' => $webistersDir . 'routing/src',
    'Framework\Session' => $webistersDir . 'session/src',
    'Framework\Validation' => $webistersDir . 'validation/src',
]);
