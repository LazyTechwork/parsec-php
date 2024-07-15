<?php /** @noinspection ALL */

use PhpCsFixer\Config;
use PhpCsFixer\Finder;
use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

return (new Config())
    ->setRules([
        '@PSR12' => true,
        '@Symfony' => true,
    ])
    ->setParallelConfig(ParallelConfigFactory::detect())
    ->setFinder((new Finder())->in(__DIR__));
