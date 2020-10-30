<?php

/*
 * This file is part of [package name].
 *
 * (c) kommunikatisten
 *
 * @license MIT
 */

namespace Kommunikatisten\CoursesBundle\Tests;

use Kommunikatisten\CoursesBundle\KommunikatistenCoursesBundle;
use PHPUnit\Framework\TestCase;

class KommunikatistenCoursesBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new KommunikatistenCoursesBundle();

        $this->assertInstanceOf('Kommunikatisten\CoursesBundle\KommunikatistenCoursesBundle', $bundle);
    }
}
