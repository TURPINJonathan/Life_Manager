<?php

declare(strict_types=1);

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class            => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class                      => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class              => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class             => ['all' => true],
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],
    Nelmio\CorsBundle\NelmioCorsBundle::class                        => ['all' => true],
    ApiPlatform\Symfony\Bundle\ApiPlatformBundle::class              => ['all' => true],
    Symfony\Bundle\MakerBundle\MakerBundle::class                    => ['dev' => true],
];