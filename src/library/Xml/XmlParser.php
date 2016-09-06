<?php

namespace src\library\Xml;

/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 06.09.2016
 * Time: 14:38
 */
class XmlParser
{
    public $sitemapUrl;

    public function __construct($sitemapUrl) {
        $this->sitemapUrl= $sitemapUrl;
    }

    public function parse(){

        $urls =array();

        $reader = new \XMLReader();
        $reader->open($this->sitemapUrl);

        while ($reader->read()) {
            /* If you're at an element named 'book' */
            if ($reader->nodeType == \XMLREADER::ELEMENT &&
                $reader->localName == 'loc') {
                $reader->read();
                $urls[] = $reader->value;
            }
        }
        return $urls;

    }

    public function search(){

        $urls =array();

        $reader = new \XMLReader();
        $reader->open($this->sitemapUrl);

        do {
            if ($reader->moveToAttribute('isbn') &&
                isset($isbns[$reader->value])) {
                while ($reader->read()) {
                    switch ($reader->nodeType) {
                        case \XMLREADER::ELEMENT:
                            print $reader->localName . ": ";
                            break;
                        case \XMLREADER::TEXT:
                            print $reader->value . "\n";
                            break;
                        case \XMLREADER::END_ELEMENT;
                            if ($reader->localName == 'book') {
                                break 2;
                            }
                    }
                }
            }
        } while ($reader->next());

        return $urls;
    }

}