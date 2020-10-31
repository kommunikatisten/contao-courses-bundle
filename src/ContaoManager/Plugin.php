<?php

/*
 * This file is part of Kommunikatisten.
 *
 * (c) kommunikatisten.net
 *
 * @license LGPL-3.0-or-later
 */

namespace Kommunikatisten\CoursesBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Kommunikatisten\CoursesBundle\KommunikatistenCoursesBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(KommunikatistenCoursesBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
