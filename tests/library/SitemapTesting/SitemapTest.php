<?php

namespace tests\library\SitemapTesting;

use src\library\SitemapTesting\BuildSitemapTest;
use src\library\Xml\XmlParser;

/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 06.09.2016
 * Time: 14:32
 */
class SitemapTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Run build test class for testing the sitemap
     */
    public function testSitemap(){
        $sitemap = new XmlParser('http://dev.meineke-redesign.beta-directory.com/page-sitemap.xml');
        $urls = $sitemap->parse();

        $build = new BuildSitemapTest($urls);
        $build->create();
    }
}