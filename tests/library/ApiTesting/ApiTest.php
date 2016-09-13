<?php

namespace tests\library\ApiTesting;
use Goutte\Client;
/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 12.09.2016
 * Time: 12:18
 */
class ApiTest extends \PHPUnit_Framework_TestCase
{
    public function testPOST()
    {
        $api = 'http://192.168.0.159/API/web';

        // create our http client
        $client = new Client();

        $data = array(
            'storeId'=> '',
            'jobId'=>'2',
            'location'=>'houston, TX',
            'firstName'=> 'ovidiu',
            'lastName'=> 'dragoi',
            'email'=> 'dragoiovsdffaidiutest@yahoo.com',
            'phone'=> '0749620628',
            'message'=> 'Testing with Goutte , please ignore',
        );

        $contentQuery = implode('&', $data);

        $contentJson = json_encode($data);

        $crawler = $client->request('POST', $api.'/api/jobs/', [], [], ['HTTP_CONTENT_TYPE' => 'application/x-www-form-urlencoded'], $contentQuery);
        $crawler = $client->request('POST', $api.'/api/jobs/', [], [], ['HTTP_CONTENT_TYPE' => 'application/json'], $contentJson);

        echo $client->getResponse()->getContent();

    }
}