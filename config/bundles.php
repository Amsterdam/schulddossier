<?php

use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\MakerBundle\MakerBundle;
use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle;
use Symfony\Bundle\SecurityBundle\SecurityBundle;
use Symfony\Bundle\MonologBundle\MonologBundle;
use Symfony\Bundle\WebProfilerBundle\WebProfilerBundle;
use Symfony\Bundle\TwigBundle\TwigBundle;
use Symfony\Bundle\DebugBundle\DebugBundle;
use Knp\Bundle\PaginatorBundle\KnpPaginatorBundle;
use Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle;
use Http\HttplugBundle\HttplugBundle;
use Symfony\WebpackEncoreBundle\WebpackEncoreBundle;
use Nelmio\SecurityBundle\NelmioSecurityBundle;

return [
    FrameworkBundle::class => ['all' => true],
    MakerBundle::class => ['dev' => true],
    DoctrineBundle::class => ['all' => true],
    DoctrineMigrationsBundle::class => ['all' => true],
    SecurityBundle::class => ['all' => true],
    MonologBundle::class => ['all' => true],
    WebProfilerBundle::class => ['dev' => true, 'test' => true],
    TwigBundle::class => ['all' => true],
    DebugBundle::class => ['dev' => true, 'test' => true],
    KnpPaginatorBundle::class => ['all' => true],
    DoctrineFixturesBundle::class => ['dev' => true, 'test' => true],
    HttplugBundle::class => ['all' => true],
    WebpackEncoreBundle::class => ['all' => true],
    NelmioSecurityBundle::class => ['all' => true],
];
