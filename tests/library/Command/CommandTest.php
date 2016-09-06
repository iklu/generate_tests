<?php
namespace tests\library\Command;
use MrRio\ShellWrap as sh;

/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 05.09.2016
 * Time: 17:07
 */
class CommandTest extends \PHPUnit_Framework_TestCase
{
    public function testCommand() {

        // List all files in current dir
        echo sh::ls();

        // Checkout a branch in git
        sh::git('checkout', 'master');

        // You can also pipe the output of one command, into another
        // This downloads example.com through cURL, follows location, then pipes through grep to
        // filter for 'html'
        echo sh::grep('html', sh::curl('http://example.com', array(
            'location' => true
        )));

        // Touch a file to create it
        sh::touch('file.html');

        // Remove file
        sh::rm('file.html');

        // Remove file again (this fails, and throws an exception because the file doesn't exist)

        try {
            sh::rm('file.html');
        } catch (ShellWrapException $e) {
            echo 'Caught failing sh::rm() call';
        }


        // This throws an exception, as 'invalidoption' is not a valid argument
        try {
            echo sh::ls(array('invalidoption' => true));
        } catch (ShellWrapException $e) {
            echo 'Caught failing sh::ls() call';
        }

        // Commands can be written multiple ways
        sh::git('reset', array('hard' => true), 'HEAD');
        sh::git('reset', '--hard', 'HEAD');
        sh::git(array('reset', '--hard', 'HEAD'));

        // Arguments passed in are automatically escaped, this expands to
        // date --date '2012-10-10 10:00:00'
        echo sh::date(array(
            'date' => '2012-10-10 10:00:00'
        ));

        // If arg keys are one letter, is assumes one dash prefixing it
        // date -d '2012-10-10 10:00:00'
        echo sh::date(array(
            'd' => '2012-10-10 10:00:00'
        ));
    }
}