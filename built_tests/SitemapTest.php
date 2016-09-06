<?php

namespace built_tests;

use Goutte\Client;
use PHPUnit_Framework_TestCase;

class SitemapTest extends PHPUnit_Framework_TestCase
{
    public function testSitemapUrl0()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/sitemap/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/app/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl2()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl3()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl4()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/rewards/my_account/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl5()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/rewards/dashboard/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl6()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/rewards/login/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl7()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/rewards/register/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl8()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/rewards/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl9()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/roadhazard/guidelines/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl10()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/tire-protection-program/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl11()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/services/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl12()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/auto-service-repair-all/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl13()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/coupons-and-deals/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl14()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/coming-soon/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl15()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/featured-shops/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl16()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/careers/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl17()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/fleet-services/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl18()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/dictionary/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl19()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/blog/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl20()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/about/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl21()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/meineke-fleet-solutions-mastercard/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl22()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/roadside-assistance/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl23()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/about/meineke-credit-card/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl24()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/about/international-locations/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl25()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/about/real-estate/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl26()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/rewards/terms-and-conditions/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl27()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/privacy-policy/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl28()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/rewards/mobile-registration/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl29()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl30()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pr/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl31()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl32()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl33()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl34()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ms/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl35()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl36()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl37()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl38()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl39()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl40()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl41()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl42()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ut/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl43()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl44()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl45()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl46()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl47()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl48()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl49()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ar/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl50()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl51()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl52()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mi/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl53()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl54()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ok/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl55()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sd/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl56()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl57()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl58()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl59()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl60()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wv/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl61()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mn/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl62()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tn/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl63()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl64()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl65()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/me/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl66()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mt/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl67()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/al/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl68()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nm/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl69()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ia/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl70()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/de/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl71()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl72()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl73()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nd/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl74()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ak/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl75()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wy/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl76()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ri/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl77()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ne/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl78()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/careers/meineke-service-advisor/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl79()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/careers/meineke-general-service-jobs/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl80()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/careers/meineke-center-manager/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl81()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/careers/meineke-automotive-technician/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl82()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/roselle/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl83()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pr/guaynabo/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl84()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pr/bayamon/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl85()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/college-station/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl86()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl87()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/avon/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl88()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ms/gulfport/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl89()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/lacey/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl90()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/charlotte/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl91()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/boston/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl92()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/columbus/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl93()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/san-diego/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl94()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/louisville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl95()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/oakland/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl96()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/milwaukee/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl97()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/racine/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl98()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/seattle/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl99()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ut/salt-lake-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl100()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/dallas/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl101()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/long-island/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl102()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/baltimore/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl103()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/south-bend/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl104()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/atlanta/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl105()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/indianapolis/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl106()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/springfield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl107()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/orland-park/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl108()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/bethel/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl109()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/denver/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl110()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/san-bernadino/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl111()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/elizabethtown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl112()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl113()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/lagrange/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl114()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ar/north-little-rock/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl115()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/south-dartmouth/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl116()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/concord/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl117()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/austin/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl118()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/antioch/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl119()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/kennesaw/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl120()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/canton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl121()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/marietta/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl122()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/acworth/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl123()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/acworth/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl124()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/woodstock/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl125()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/lawrenceville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl126()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/norcross/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl127()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/orlando/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl128()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/orlando/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl129()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl130()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/charlotte/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl131()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/aston/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl132()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/wood-river/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl133()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/evansville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl134()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/york/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl135()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mi/comstock-park/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl136()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/west-grove/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl137()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/loveland/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl138()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ar/pine-bluff/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl139()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/tucson/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl140()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ok/edmond/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl141()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/anthem/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl142()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ut/layton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl143()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/modesto/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl144()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ok/midwest-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl145()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/escondido/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl146()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/lewisville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl147()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/san-diego/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl148()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/thornton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl149()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/poway/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl150()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/fallbrook/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl151()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl152()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/lakewood/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl153()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/austin/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl154()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/placentia/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl155()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/san-antonio/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl156()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/stockton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl157()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/santa-barbara/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl158()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/san-diego/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl159()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/san-luis-obispo/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl160()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/tucson/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl161()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl162()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/riverdale/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl163()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/henderson/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl164()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/oceanside/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl165()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/sacramento/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl166()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/oxnard/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl167()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/san-bernardino/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl168()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/oceanside/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl169()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/garden-grove/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl170()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/anaheim/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl171()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl172()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/gold-river/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl173()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/west-sacramento/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl174()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sd/rapid-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl175()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/san-jose/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl176()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/south-elgin/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl177()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/charlotte/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl178()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/san-angelo/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl179()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/radcliff/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl180()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/summerville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl181()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ok/broken-arrow/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl182()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/sylva/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl183()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/nampa/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl184()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/port-orchard/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl185()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/bloomington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl186()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ok/sapulpa/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl187()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/wichita/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl188()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl189()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/flagstaff/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl190()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/boise/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl191()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/carrollton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl192()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/tucson/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl193()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/ventura/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl194()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/atlanta/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl195()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/temecula/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl196()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/plano/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl197()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/bremerton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl198()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/yorba-linda/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl199()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/san-antonio/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl200()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/yuma/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl201()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/aliso-viejo/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl202()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/corona/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl203()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/perris/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl204()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/lake-elsinore/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl205()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/fairfield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl206()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/san-bernardino/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl207()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/hemet/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl208()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/north-highlands/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl209()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/corona/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl210()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/riverside/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl211()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/yorba-linda/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl212()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/glendora/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl213()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/lakewood/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl214()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/plano/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl215()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/riverside/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl216()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ar/fort-smith/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl217()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/beaumont/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl218()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ut/taylorsville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl219()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/winchester/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl220()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/glendale/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl221()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/peoria/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl222()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/surprise/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl223()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/everett/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl224()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/boise/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl225()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/boise/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl226()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/meridian/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl227()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/mesa/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl228()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/longmont/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl229()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/chandler/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl230()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/phoenix/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl231()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/arlington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl232()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl233()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/scottsdale/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl234()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/phoenix/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl235()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/concord/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl236()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mi/holland/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl237()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ut/murray/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl238()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/fremont/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl239()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/pinellas-park/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl240()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/wichita/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl241()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/wichita/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl242()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/plainfield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl243()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/marietta/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl244()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/milford/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl245()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/tracy/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl246()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wv/bluefield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl247()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/fort-worth/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl248()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/york/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl249()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mn/saint-paul/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl250()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/st-matthews/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl251()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tn/lenoir-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl252()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mn/hopkins/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl253()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/blackwood/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl254()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/highland/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl255()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/mascoutah/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl256()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/stafford/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl257()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/paoli/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl258()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/hialeah-gardens/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl259()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/monroe/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl260()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mn/brooklyn-park/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl261()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/miami/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl262()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/hagerstown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl263()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/miami/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl264()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/pocatello/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl265()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/turlock/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl266()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/boca-raton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl267()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/henderson/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl268()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl269()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl270()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/henderson/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl271()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl272()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl273()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/fort-worth/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl274()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/pleasant-hills/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl275()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl276()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/richmond/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl277()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tn/murfreesboro/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl278()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl279()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/fort-worth/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl280()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/temple/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl281()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ok/tulsa/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl282()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ut/orem/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl283()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/santa-clara/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl284()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl285()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/roseville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl286()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/mckinney/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl287()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/orlando/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl288()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/bartlett/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl289()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/pantego/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl290()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/arlington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl291()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/willimantic/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl292()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/cottage-grove/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl293()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/land-o-lakes/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl294()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/fort-myers/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl295()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/royal-palm-beach/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl296()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/san-mateo/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl297()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/asheville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl298()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/martinez/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl299()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/winter-park/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl300()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/marysville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl301()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/maiden/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl302()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/columbus/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl303()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ut/draper/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl304()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/myrtle-beach/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl305()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/philadelphia/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl306()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/rialto/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl307()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/broussard/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl308()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/rocky-hill/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl309()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/montebello/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl310()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/louisville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl311()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mn/burnsville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl312()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/moscow/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl313()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/seminole/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl314()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/modesto/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl315()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/oakland/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl316()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/walkertown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl317()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/boise/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl318()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/seattle/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl319()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/seattle/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl320()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/renton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl321()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/edmonds/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl322()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/marysville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl323()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/gig-harbor/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl324()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/puyallup/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl325()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/olympia/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl326()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/tacoma/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl327()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/puyallup/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl328()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/tacoma/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl329()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/tacoma/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl330()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/newberg/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl331()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/norfolk/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl332()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/ocala/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl333()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/clayton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl334()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/irving/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl335()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/napa/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl336()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/fair-lawn/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl337()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/jacksonville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl338()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/me/scarborough/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl339()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/portland/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl340()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/little-elm/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl341()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/dundalk/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl342()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/anaheim/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl343()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/bossier-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl344()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/pasadena/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl345()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/elk-grove/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl346()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/garland/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl347()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/bridgewater/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl348()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/texarkana/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl349()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mt/missoula/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl350()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mi/wixom/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl351()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/jamestown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl352()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/west-chester/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl353()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/broomfield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl354()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mi/fraser/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl355()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/wylie/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl356()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/hatboro/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl357()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/idaho-falls/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl358()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/al/bessemer/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl359()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/seaside/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl360()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/vancouver/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl361()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nm/albuquerque/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl362()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mt/helena/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl363()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/hutchinson/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl364()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/racine/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl365()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/charlestown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl366()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/carol-stream/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl367()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/baton-rouge/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl368()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/costa-mesa/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl369()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/lauderhill/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl370()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/des-moines/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl371()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/wilton-manors/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl372()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/cary/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl373()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/clementon/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl374()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/lake-villa/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl375()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/silverdale/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl376()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/raleigh/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl377()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/colchester/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl378()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/crystal-lake/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl379()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/torrance/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl380()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/wake-forest/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl381()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/gilroy/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl382()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/fort-mill/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl383()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/kill-devil-hills/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl384()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/indian-land/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl385()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/port-washington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl386()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ia/west-des-moines/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl387()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/east-syracuse/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl388()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/boiling-springs/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl389()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/anderson/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl390()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/mcminnville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl391()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/troy/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl392()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/greenville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl393()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/aberdeen/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl394()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/emmaus/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl395()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/lincolnton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl396()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/fort-wayne/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl397()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/leland/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl398()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/appleton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl399()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/davie/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl400()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sd/sioux-falls/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl401()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/phoenix/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl402()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mn/ham-lake/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl403()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ok/idabel/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl404()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mi/shelby-township/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl405()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/burlington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl406()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/new-braunfels/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl407()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/greenville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl408()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl409()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/supply/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl410()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ar/harrison/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl411()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ar/rogers/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl412()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/woodstock/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl413()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/spartanburg/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl414()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/dallas/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl415()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/longview/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl416()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/northridge/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl417()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/north-richland-hills/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl418()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/durham/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl419()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/brunswick/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl420()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/fort-myers/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl421()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/rockville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl422()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/katy/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl423()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/fort-worth/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl424()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/colonia/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl425()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/mundelein/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl426()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/pensacola/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl427()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/sun-prairie/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl428()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/denver/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl429()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/romeoville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl430()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/franklin/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl431()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/tappahannock/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl432()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/gaffney/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl433()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/spring-hill/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl434()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/fountain/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl435()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/manteca/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl436()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/manahawkin/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl437()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/statesville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl438()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/albany/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl439()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ia/davenport/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl440()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ia/muscatine/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl441()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ia/burlington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl442()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/derby/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl443()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/wichita/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl444()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/wichita/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl445()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/wichita/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl446()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ok/oklahoma-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl447()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ok/tulsa/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl448()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/quakertown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl449()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/santa-maria/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl450()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/easley/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl451()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/middletown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl452()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/north-charleston/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl453()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/naperville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl454()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/cathedral-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl455()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/carrboro/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl456()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/charlotte/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl457()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/bradenton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl458()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/post-falls/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl459()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/myrtle-beach/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl460()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/el-paso/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl461()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/al/florence/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl462()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/peachtree-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl463()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/clemmons/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl464()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/de/lewes/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl465()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/alexandria/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl466()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/mclean/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl467()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/raleigh/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl468()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/chicago/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl469()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/jersey-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl470()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/mooresville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl471()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mi/walled-lake/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl472()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/murrells-inlet/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl473()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/garner/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl474()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mn/columbia-heights/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl475()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/indianapolis/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl476()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/de-land/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl477()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/lubbock/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl478()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/rochester/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl479()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/franklin/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl480()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/indian-trail/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl481()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/holyoke/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl482()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/greer/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl483()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/wake-forest/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl484()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/bloomington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl485()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tn/jackson/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl486()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/apopka/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl487()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/new-albany/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl488()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/belleville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl489()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/oak-creek/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl490()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ms/olive-branch/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl491()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/winterville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl492()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/fort-worth/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl493()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/springfield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl494()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/webster/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl495()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nd/fargo/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl496()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/noblesville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl497()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/fuquay-varina/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl498()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/amarillo/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl499()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/douglasville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl500()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/altoona/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl501()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/gainesville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl502()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/north-charleston/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl503()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/beaumont/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl504()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/lexington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl505()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/cranberry-township/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl506()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/elkton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl507()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/harrisburg/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl508()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/west-bridgewater/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl509()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/morrisville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl510()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/lexington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl511()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/versailles/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl512()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/baltimore/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl513()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/fairfield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl514()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/rancho-cucamonga/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl515()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/bolingbrook/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl516()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/richmond/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl517()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/passaic/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl518()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/columbia/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl519()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/lafayette/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl520()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/mansfield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl521()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/crest-hill/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl522()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/littleton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl523()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/pineville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl524()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/houma/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl525()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/brandon/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl526()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/santee/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl527()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/blue-springs/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl528()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/east-brunswick/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl529()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/al/montgomery/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl530()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/brighton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl531()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/indianapolis/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl532()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/farmington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl533()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/falcon/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl534()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/milwaukee/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl535()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/harrison/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl536()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/west-chester/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl537()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/matthews/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl538()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ms/horn-lake/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl539()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/lees-summit/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl540()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/midlothian/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl541()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/clearwater/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl542()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/chesterfield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl543()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/oakville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl544()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/madison/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl545()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/berlin/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl546()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/missouri-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl547()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/norcross/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl548()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ms/tupelo/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl549()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/parma/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl550()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/canton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl551()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl552()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/caldwell/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl553()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/san-marcos/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl554()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ar/jonesboro/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl555()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/asheville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl556()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/peoria/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl557()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/indianapolis/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl558()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nm/albuquerque/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl559()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/decatur/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl560()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/universal-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl561()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/colorado-springs/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl562()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sd/sioux-falls/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl563()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/laconia/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl564()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/valley-stream/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl565()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/dublin/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl566()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/columbus/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl567()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/decatur/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl568()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/pueblo/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl569()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/forest/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl570()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/la-plata/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl571()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/fredericksburg/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl572()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/o-fallon/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl573()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/wilmington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl574()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/louisville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl575()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/pflugerville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl576()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/oregon-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl577()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/vancouver/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl578()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/brookfield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl579()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nm/santa-fe/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl580()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/vernon-rockville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl581()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/overland/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl582()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/binghamton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl583()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/west-mifflin/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl584()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/wilmington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl585()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/louisville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl586()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ak/anchorage/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl587()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/lawrence/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl588()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/olathe/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl589()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/overland-park/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl590()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/lenexa/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl591()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/overland-park/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl592()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/kansas-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl593()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/amarillo/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl594()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/hickory/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl595()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/sinking-spring/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl596()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wy/cheyenne/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl597()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/saint-peters/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl598()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ms/diberville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl599()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/concord/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl600()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/nashua/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl601()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/hilliard/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl602()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/columbus/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl603()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/newark/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl604()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/york/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl605()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/raleigh/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl606()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/weston/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl607()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/mansfield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl608()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/louisville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl609()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/stafford/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl610()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/raynham/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl611()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/vidalia/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl612()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/greensboro/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl613()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tn/clarksville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl614()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/alpharetta/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl615()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/sherwood/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl616()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/vestal/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl617()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/portland/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl618()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/hillsboro/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl619()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/louisville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl620()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/louisville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl621()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/tampa/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl622()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/richmond/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl623()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/baton-rouge/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl624()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/fort-collins/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl625()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/lawrenceville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl626()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/ephrata/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl627()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/reno/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl628()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tn/knoxville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl629()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/maplewood/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl630()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/centennial/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl631()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/temple-terrace/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl632()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/gardner/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl633()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/indianapolis/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl634()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/me/augusta/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl635()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/humble/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl636()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/rock-hill/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl637()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/lynn/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl638()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/denver/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl639()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/castle-rock/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl640()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/portsmouth/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl641()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/horseheads/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl642()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/pittsburgh/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl643()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl644()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/irmo/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl645()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/denbigh/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl646()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/brighton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl647()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/loveland/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl648()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/cape-coral/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl649()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/bordentown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl650()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/stoughton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl651()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tn/johnson-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl652()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/reynoldsburg/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl653()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/lawrence/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl654()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/exton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl655()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/lynnwood/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl656()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/white-plains/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl657()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/whitehall/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl658()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/fairfield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl659()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/snellville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl660()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/manchester/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl661()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/richmond/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl662()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/beaverton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl663()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/anderson/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl664()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/bakersfield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl665()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/wallingford/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl666()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/worcester/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl667()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/dumfries/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl668()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/de/new-castle/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl669()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/castleton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl670()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/damascus/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl671()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/indianapolis/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl672()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/williamsburg/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl673()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/portland/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl674()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/santa-rosa/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl675()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/highlands-ranch/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl676()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/winchester/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl677()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/philadelphia/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl678()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/norwich/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl679()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/indianapolis/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl680()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/doylestown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl681()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/west-melbourne/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl682()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mn/maplewood/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl683()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/harrisburg/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl684()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/ft-myers/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl685()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/hudson/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl686()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/quincy/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl687()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/bourbonnais/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl688()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/roanoke/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl689()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/college-park/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl690()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/boulder/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl691()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/des-plaines/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl692()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/norwood/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl693()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/shrewsbury/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl694()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/california/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl695()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/grafton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl696()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/decatur/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl697()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/harmar-township/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl698()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/monroe/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl699()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ri/woonsocket/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl700()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/abington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl701()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/lancaster/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl702()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/columbia/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl703()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/milford/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl704()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/sumter/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl705()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/ellicott-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl706()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/greenfield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl707()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/normal/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl708()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/dover/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl709()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/forest-park/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl710()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/fenton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl711()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/me/biddeford/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl712()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/phillipsburg/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl713()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/denver/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl714()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/germantown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl715()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/urbana/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl716()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/southampton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl717()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/fredericksburg/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl718()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/castle-shannon/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl719()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/clinton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl720()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/edison/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl721()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/bridgeport/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl722()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/greensburg/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl723()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/newtown-square/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl724()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/tewksbury/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl725()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/killeen/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl726()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/englewood/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl727()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/chester/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl728()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/seabrook/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl729()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/gastonia/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl730()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/merrimack/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl731()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/jersey-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl732()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/monroe/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl733()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/happy-valley/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl734()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/charlotte/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl735()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/pittsburgh/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl736()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/hershey/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl737()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/indianapolis/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl738()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/colonial-heights/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl739()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/redwood-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl740()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/turnersville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl741()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/naugatuck/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl742()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/stroudsburg/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl743()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/amherst/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl744()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/east-wareham/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl745()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/cartersville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl746()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/de/claymont/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl747()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/eldersburg/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl748()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/statesboro/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl749()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/roswell/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl750()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ia/dubuque/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl751()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/denver/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl752()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/bloomington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl753()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/fayetteville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl754()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/indianapolis/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl755()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/longmont/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl756()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ne/omaha/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl757()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ne/omaha/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl758()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/north-huntingdon/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl759()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/pineville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl760()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/de/dover/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl761()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/greenwood/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl762()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/perrine/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl763()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/pearland/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl764()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/south-attleboro/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl765()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/east-saint-louis/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl766()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/palos-heights/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl767()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/reno/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl768()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/hampton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl769()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/pittsburgh/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl770()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/westchester/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl771()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/hendersonville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl772()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/chicopee/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl773()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/staten-island/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl774()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/de/wilmington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl775()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/philadelphia/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl776()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/cinnaminson/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl777()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/mount-prospect/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl778()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/granite-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl779()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/madison-heights/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl780()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/downingtown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl781()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/chesterfield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl782()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/new-britain/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl783()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/glassboro/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl784()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/ossining/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl785()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/portsmouth/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl786()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/philadelphia/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl787()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/woodbury/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl788()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/enfield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl789()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tn/memphis/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl790()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/salem/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl791()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/bethlehem/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl792()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/allentown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl793()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/lumberton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl794()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/newark/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl795()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/amherst/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl796()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/peoria/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl797()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/monroeville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl798()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/hawthorne/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl799()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/forest-park/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl800()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/decatur/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl801()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/harrisburg/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl802()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/westmont/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl803()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/gloucester/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl804()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/katy/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl805()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/peoria/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl806()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/austin/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl807()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/rochester/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl808()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/howell/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl809()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/san-antonio/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl810()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/old-saybrook/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl811()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/hightstown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl812()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/sterling/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl813()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/o-fallon/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl814()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/brooklyn/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl815()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/district-heights/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl816()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/north-arlington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl817()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/colorado-springs/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl818()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/cedar-grove/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl819()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ia/cedar-rapids/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl820()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/springfield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl821()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/ansonia/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl822()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/groton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl823()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/silver-spring/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl824()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/nederland/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl825()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/de/ogletown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl826()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/fishkill/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl827()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/lowell/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl828()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/jacksonville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl829()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/fairview-heights/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl830()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/northbrook/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl831()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/vineland/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl832()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/colorado-springs/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl833()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/arnold/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl834()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mi/wyoming/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl835()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/beverly/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl836()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wy/casper/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl837()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ne/omaha/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl838()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/baltimore/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl839()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/st-louis/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl840()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/derry/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl841()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/kingston/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl842()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/bensalem/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl843()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/bridgeton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl844()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/raleigh/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl845()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/marlton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl846()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/seguin/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl847()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/philadelphia/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl848()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/wayne/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl849()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/salem/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl850()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/me/auburn/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl851()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/aurora/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl852()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/madison/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl853()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/butler/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl854()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/annapolis/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl855()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/peabody/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl856()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/bristol/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl857()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/charlottesville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl858()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/boca-raton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl859()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/philadelphia/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl860()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/middletown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl861()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/columbus/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl862()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/smithtown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl863()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/plaistow/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl864()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/norristown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl865()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/ledgewood/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl866()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/cincinnati/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl867()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/maspeth/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl868()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/branford/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl869()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/virginia-beach/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl870()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/belleville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl871()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/mountainside/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl872()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/evanston/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl873()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/marietta/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl874()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/brooklyn/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl875()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/fairless-hills/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl876()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/arlington-heights/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl877()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/fayetteville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl878()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/cockeysville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl879()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/new-carrollton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl880()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/new-rochelle/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl881()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/saint-louis/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl882()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/eatontown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl883()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/addison/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl884()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/smyrna/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl885()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/rockford/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl886()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/brockton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl887()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/manchester/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl888()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/philadelphia/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl889()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/wilmington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl890()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/ballwin/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl891()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/fairfax/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl892()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/portland/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl893()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/kenwood/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl894()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/arvada/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl895()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/joliet/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl896()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/schaumburg/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl897()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/alton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl898()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/easton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl899()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/collinsville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl900()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/oak-lawn/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl901()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/naperville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl902()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/riverhead/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl903()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/worcester/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl904()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/catonsville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl905()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/savannah/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl906()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/south-plainfield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl907()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/glen-burnie/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl908()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/staten-island/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl909()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/me/portland/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl910()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/mechanicsburg/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl911()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/newark/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl912()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/pittsburgh/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl913()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/reading/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl914()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/sparks/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl915()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/middletown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl916()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/bristol/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl917()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/chicago/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl918()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/downers-grove/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl919()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/west-caldwell/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl920()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/south-toms-river/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl921()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl922()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/philadelphia/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl923()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/audubon/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl924()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/rosenberg/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl925()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/aurora/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl926()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/virginia-beach/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl927()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tn/madison/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl928()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/brentwood/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl929()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/brooklyn/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl930()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/greensboro/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl931()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/bossier-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl932()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/brooklyn/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl933()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/south-holland/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl934()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/mastic/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl935()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/cherry-hill/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl936()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/new-london/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl937()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/mckeesport/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl938()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/berlin/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl939()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/atlanta/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl940()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/waldorf/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl941()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/west-hartford/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl942()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/bronx/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl943()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/pleasantville/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl944()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/atlanta/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl945()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/conroe/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl946()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/darby/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl947()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/dover/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl948()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/columbus/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl949()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/saint-charles/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl950()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/ferguson/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl951()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/edison/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl952()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/torrington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl953()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/yonkers/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl954()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/meriden/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl955()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/freehold/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl956()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/trenton/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl957()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/cincinnati/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl958()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/patchogue/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl959()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/webster/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl960()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/danbury/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl961()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/muncie/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl962()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/new-haven/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl963()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/milford/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl964()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/malden/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl965()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/amarillo/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl966()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/elizabeth/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl967()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/ramsey/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl968()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/arlington/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl969()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/newburgh/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl970()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/charlotte/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl971()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/baltimore/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl972()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/englewood/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl973()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/queens-village/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl974()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ut/salt-lake-city/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl975()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/west-new-york/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl976()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/oakdale/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl977()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/lake-charles/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl978()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/stamford/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl979()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/ronkonkoma/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl980()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/waterbury/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl981()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/coram/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl982()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/huntington-station/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl983()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/levittown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl984()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/charlotte/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl985()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/north-plainfield/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl986()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/brick-town/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl987()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/pompano-beach/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl988()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/new-hyde-park/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl989()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/lodi/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl990()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl991()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/saint-louis/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl992()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/saint-louis/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl993()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/florissant/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl994()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl995()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/baytown/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl996()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl997()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl998()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl999()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/roselle-2721/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1000()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pr/guaynabo-2716/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1001()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pr/bayamon-2715/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1002()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/college-station-2717/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1003()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas-2710/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1004()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/avon-2707/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1005()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ms/gulfport-2702/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1006()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/lacey-2698/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1007()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/charlotte-6198/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1008()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/boston-6916/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1009()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/columbus-6600/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1010()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/san-diego-6594/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1011()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/louisville-6592/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1012()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/oakland-6591/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1013()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/milwaukee-6587/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1014()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/racine-6586/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1015()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/seattle-6584/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1016()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ut/salt-lake-city-6580/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1017()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/dallas-6577/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1018()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/long-island-6554/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1019()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/baltimore-6534/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1020()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/south-bend-6531/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1021()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/atlanta-6917/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1022()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/indianapolis-6530/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1023()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/springfield-6528/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1024()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/orland-park-6527/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1025()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/bethel-6515/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1026()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/denver-6513/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1027()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/san-bernadino-6508/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1028()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/elizabethtown-2687/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1029()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas-2684/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1030()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/lagrange-2683/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1031()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ar/north-little-rock-2681/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1032()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/south-dartmouth-2675/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1033()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/concord-2672/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1034()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/austin-2664/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1035()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/antioch-2661/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1036()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/kennesaw-2544/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1037()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/canton-2543/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1038()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/marietta-2542/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1039()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/acworth-2541/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1040()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/acworth-2540/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1041()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/woodstock-2539/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1042()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/lawrenceville-2538/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1043()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/norcross-2537/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1044()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/orlando-2659/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1045()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/orlando-2657/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1046()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas-2656/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1047()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/charlotte-4302/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1048()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/aston-2645/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1049()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/wood-river-2644/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1050()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/evansville-2640/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1051()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/york-2639/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1052()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mi/comstock-park-2637/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1053()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/west-grove-2636/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1054()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/loveland-2635/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1055()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ar/pine-bluff-4384/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1056()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/tucson-4378/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1057()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ok/edmond-4365/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1058()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/anthem-4337/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1059()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ut/layton-4329/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1060()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/modesto-4316/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1061()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ok/midwest-city-4312/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1062()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/escondido-4257/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1063()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/lewisville-4241/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1064()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/san-diego-4229/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1065()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/thornton-4226/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1066()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/poway-4197/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1067()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/fallbrook-4195/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1068()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas-4168/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1069()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/lakewood-4164/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1070()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/austin-4156/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1071()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/placentia-4154/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1072()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/san-antonio-4144/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1073()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/stockton-4130/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1074()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/santa-barbara-4118/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1075()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/san-diego-4113/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1076()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/san-luis-obispo-4107/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1077()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/tucson-4089/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1078()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas-4086/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1079()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/riverdale-4085/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1080()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/henderson-4075/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1081()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/oceanside-4068/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1082()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/sacramento-4063/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1083()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/oxnard-4052/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1084()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/san-bernardino-4024/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1085()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/oceanside-4023/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1086()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/garden-grove-4009/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1087()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/anaheim-4004/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1088()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas-2435/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1089()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/gold-river-2355/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1090()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/west-sacramento-2354/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1091()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sd/rapid-city-2352/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1092()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/san-jose-2296/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1093()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/south-elgin-2275/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1094()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/charlotte-2267/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1095()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/san-angelo-2193/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1096()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/radcliff-2171/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1097()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/summerville-2164/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1098()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ok/broken-arrow-2005/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1099()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/sylva-4394/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1100()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/nampa-4393/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1101()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/port-orchard-4374/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1102()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/bloomington-4366/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1103()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ok/sapulpa-4363/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1104()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/wichita-4362/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1105()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston-4327/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1106()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/flagstaff-4286/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1107()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/boise-4251/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1108()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/carrollton-4239/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1109()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/tucson-4217/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1110()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/ventura-4202/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1111()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/atlanta-4184/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1112()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/temecula-4181/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1113()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/plano-4180/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1114()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/bremerton-4174/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1115()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/yorba-linda-4155/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1116()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/san-antonio-4139/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1117()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/yuma-4134/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1118()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/aliso-viejo-4129/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1119()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/corona-4114/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1120()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/perris-4097/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1121()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/lake-elsinore-4074/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1122()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/fairfield-4067/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1123()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/san-bernardino-4065/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1124()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/hemet-4060/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1125()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/north-highlands-4059/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1126()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/corona-4054/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1127()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/riverside-4047/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1128()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/yorba-linda-4046/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1129()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/glendora-4038/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1130()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/lakewood-4034/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1131()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/plano-2252/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1132()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/riverside-2227/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1133()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ar/fort-smith-2200/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1134()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/beaumont-2192/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1135()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ut/taylorsville-2158/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1136()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/winchester-2154/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1137()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/glendale-4369/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1138()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/peoria-4350/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1139()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/surprise-4338/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1140()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/everett-4333/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1141()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/boise-4326/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1142()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/boise-4310/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1143()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/meridian-4305/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1144()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/mesa-4264/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1145()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/longmont-4237/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1146()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/chandler-4236/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1147()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/phoenix-4234/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1148()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/arlington-4169/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1149()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas-4146/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1150()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/scottsdale-4135/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1151()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/phoenix-4128/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1152()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/concord-4000/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1153()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mi/holland-2632/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1154()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ut/murray-2631/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1155()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/fremont-2626/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1156()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/pinellas-park-2617/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1157()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/wichita-2616/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1158()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/wichita-2615/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1159()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/plainfield-2610/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1160()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/marietta-2609/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1161()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/milford-2608/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1162()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/tracy-2604/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1163()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wv/bluefield-2602/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1164()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/fort-worth-2597/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1165()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/york-2596/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1166()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mn/saint-paul-2593/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1167()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/st-matthews-2592/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1168()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tn/lenoir-city-2590/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1169()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mn/hopkins-2588/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1170()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/blackwood-2587/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1171()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/highland-2586/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1172()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/mascoutah-2585/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1173()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/stafford-2583/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1174()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/paoli-2581/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1175()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/hialeah-gardens-2578/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1176()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/monroe-2572/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1177()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mn/brooklyn-park-2569/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1178()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/miami-2567/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1179()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/hagerstown-2566/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1180()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/miami-2555/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1181()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/pocatello-2554/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1182()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/turlock-2536/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1183()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/boca-raton-2534/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1184()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/henderson-2533/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1185()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas-2532/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1186()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas-2531/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1187()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/henderson-2530/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1188()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas-2529/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1189()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas-2527/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1190()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/fort-worth-2524/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1191()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/pleasant-hills-2517/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1192()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston-2516/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1193()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/richmond-2514/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1194()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tn/murfreesboro-2513/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1195()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston-2510/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1196()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/fort-worth-2505/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1197()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/temple-2504/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1198()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ok/tulsa-2502/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1199()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ut/orem-2496/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1200()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/santa-clara-2492/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1201()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston-2490/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1202()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/roseville-2489/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1203()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/mckinney-2487/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1204()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/orlando-2486/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1205()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/bartlett-2482/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1206()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/pantego-2479/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1207()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/arlington-2478/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1208()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/willimantic-2475/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1209()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/cottage-grove-2474/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1210()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/land-o-lakes-2473/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1211()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/fort-myers-2472/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1212()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/royal-palm-beach-2470/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1213()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/san-mateo-2469/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1214()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/asheville-2467/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1215()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/martinez-2465/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1216()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/winter-park-2461/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1217()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/marysville-2460/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1218()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/maiden-2453/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1219()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/columbus-2451/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1220()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ut/draper-2450/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1221()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/myrtle-beach-2443/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1222()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/philadelphia-2439/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1223()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/rialto-2438/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1224()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/broussard-2436/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1225()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/rocky-hill-2434/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1226()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/montebello-2432/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1227()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/louisville-2431/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1228()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mn/burnsville-2425/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1229()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/moscow-2410/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1230()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/seminole-2408/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1231()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/modesto-2401/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1232()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/oakland-2397/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1233()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/walkertown-2394/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1234()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/boise-2390/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1235()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/seattle-2389/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1236()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/seattle-2388/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1237()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/renton-2385/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1238()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/edmonds-2384/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1239()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/marysville-2383/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1240()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/gig-harbor-2382/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1241()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/puyallup-2380/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1242()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/olympia-2379/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1243()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/tacoma-2378/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1244()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/puyallup-2377/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1245()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/tacoma-2376/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1246()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/tacoma-2375/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1247()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/newberg-2374/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1248()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/norfolk-2373/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1249()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/ocala-2372/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1250()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/clayton-2370/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1251()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/irving-2369/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1252()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/napa-2364/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1253()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/fair-lawn-2362/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1254()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/jacksonville-2358/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1255()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/me/scarborough-2351/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1256()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/portland-2345/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1257()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/little-elm-2344/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1258()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/dundalk-2342/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1259()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/anaheim-2334/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1260()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/bossier-city-2332/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1261()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/pasadena-2330/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1262()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/elk-grove-2328/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1263()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/garland-2316/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1264()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/bridgewater-2312/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1265()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/texarkana-2307/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1266()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mt/missoula-2306/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1267()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mi/wixom-2305/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1268()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/jamestown-2304/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1269()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/west-chester-2303/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1270()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/broomfield-2302/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1271()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mi/fraser-2301/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1272()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/wylie-2300/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1273()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/hatboro-2295/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1274()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/idaho-falls-2294/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1275()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/al/bessemer-2285/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1276()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/seaside-2284/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1277()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/vancouver-2282/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1278()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nm/albuquerque-2281/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1279()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mt/helena-2278/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1280()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/hutchinson-2272/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1281()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/racine-2271/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1282()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/charlestown-2265/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1283()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/carol-stream-2263/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1284()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/baton-rouge-2262/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1285()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/costa-mesa-2256/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1286()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/lauderhill-2254/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1287()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/des-moines-2253/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1288()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/wilton-manors-2251/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1289()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/cary-2249/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1290()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/clementon-2247/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1291()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/lake-villa-2244/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1292()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/silverdale-2240/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1293()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/raleigh-2235/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1294()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/colchester-2231/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1295()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/crystal-lake-2230/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1296()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/torrance-2224/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1297()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/wake-forest-2222/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1298()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/gilroy-2221/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1299()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/fort-mill-2203/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1300()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/kill-devil-hills-2199/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1301()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/indian-land-2197/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1302()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/port-washington-2195/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1303()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ia/west-des-moines-2194/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1304()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/east-syracuse-2191/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1305()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/boiling-springs-2190/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1306()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/anderson-2183/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1307()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/mcminnville-2177/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1308()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/troy-2176/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1309()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/greenville-2169/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1310()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/aberdeen-2161/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1311()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/emmaus-2160/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1312()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/lincolnton-2159/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1313()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/fort-wayne-2150/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1314()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/leland-2140/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1315()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/appleton-2136/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1316()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/davie-2134/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1317()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sd/sioux-falls-2129/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1318()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/phoenix-2128/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1319()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mn/ham-lake-2126/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1320()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ok/idabel-2124/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1321()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mi/shelby-township-2122/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1322()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/burlington-2118/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1323()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/new-braunfels-2115/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1324()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/greenville-2111/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1325()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas-2110/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1326()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/supply-2107/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1327()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ar/harrison-2105/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1328()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ar/rogers-2104/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1329()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/woodstock-2103/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1330()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/spartanburg-2102/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1331()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/dallas-2098/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1332()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/longview-2096/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1333()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/northridge-2093/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1334()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/north-richland-hills-2085/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1335()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/durham-2084/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1336()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/brunswick-2083/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1337()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/fort-myers-2077/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1338()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/rockville-2071/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1339()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/katy-2067/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1340()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/fort-worth-2064/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1341()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/colonia-2061/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1342()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/mundelein-2060/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1343()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/pensacola-2058/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1344()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/sun-prairie-2057/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1345()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/denver-2056/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1346()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/romeoville-2052/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1347()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/franklin-2042/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1348()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/tappahannock-2038/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1349()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/gaffney-2036/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1350()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/spring-hill-2033/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1351()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/fountain-2032/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1352()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/manteca-2028/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1353()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/manahawkin-2027/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1354()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/statesville-2023/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1355()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/albany-2020/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1356()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ia/davenport-2013/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1357()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ia/muscatine-2012/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1358()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ia/burlington-2011/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1359()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/derby-2010/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1360()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/wichita-2009/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1361()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/wichita-2008/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1362()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/wichita-2007/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1363()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ok/oklahoma-city-2006/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1364()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ok/tulsa-2004/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1365()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/quakertown-2001/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1366()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/santa-maria-1990/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1367()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/easley-1988/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1368()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/middletown-1987/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1369()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/north-charleston-1985/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1370()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/naperville-1982/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1371()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/cathedral-city-1981/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1372()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/carrboro-1980/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1373()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/charlotte-1979/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1374()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/bradenton-1973/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1375()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/post-falls-1970/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1376()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/myrtle-beach-1969/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1377()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/el-paso-1963/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1378()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/al/florence-1959/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1379()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/peachtree-city-1957/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1380()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/clemmons-1955/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1381()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/de/lewes-1954/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1382()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/alexandria-1944/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1383()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/mclean-1943/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1384()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/raleigh-1942/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1385()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/chicago-1939/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1386()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/jersey-city-1935/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1387()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/mooresville-1931/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1388()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mi/walled-lake-1923/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1389()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/murrells-inlet-1921/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1390()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/garner-1917/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1391()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mn/columbia-heights-1916/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1392()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/indianapolis-1913/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1393()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/de-land-1906/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1394()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/lubbock-1903/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1395()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/rochester-1901/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1396()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/franklin-1898/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1397()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/indian-trail-1892/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1398()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/holyoke-1888/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1399()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/greer-1882/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1400()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/wake-forest-1875/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1401()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/bloomington-1867/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1402()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tn/jackson-1863/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1403()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/apopka-1859/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1404()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/new-albany-1858/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1405()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/belleville-1856/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1406()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/oak-creek-1855/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1407()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ms/olive-branch-1853/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1408()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/winterville-1849/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1409()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/fort-worth-1846/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1410()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/springfield-1843/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1411()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/webster-1840/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1412()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nd/fargo-1837/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1413()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/noblesville-1832/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1414()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/fuquay-varina-1830/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1415()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/amarillo-1821/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1416()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/douglasville-1819/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1417()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/altoona-1818/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1418()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/gainesville-1811/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1419()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/north-charleston-1810/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1420()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/beaumont-1809/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1421()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/lexington-1808/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1422()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/cranberry-township-1800/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1423()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/elkton-1798/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1424()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/harrisburg-1791/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1425()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/west-bridgewater-1790/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1426()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/morrisville-1786/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1427()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/lexington-1784/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1428()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/versailles-1783/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1429()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/baltimore-1782/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1430()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/fairfield-1781/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1431()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/rancho-cucamonga-1780/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1432()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/bolingbrook-1776/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1433()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/richmond-1743/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1434()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/passaic-1740/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1435()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/columbia-1738/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1436()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/lafayette-1732/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1437()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/mansfield-1730/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1438()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/crest-hill-1726/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1439()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/littleton-1723/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1440()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/pineville-1718/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1441()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/houma-1714/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1442()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/brandon-1713/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1443()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/santee-1711/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1444()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/blue-springs-1707/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1445()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/east-brunswick-1701/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1446()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/al/montgomery-1700/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1447()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/brighton-1699/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1448()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/indianapolis-1697/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1449()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/farmington-1696/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1450()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/falcon-1688/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1451()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/milwaukee-1675/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1452()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/harrison-1673/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1453()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/west-chester-1672/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1454()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/matthews-1669/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1455()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ms/horn-lake-1668/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1456()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/lees-summit-1667/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1457()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/midlothian-1664/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1458()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/clearwater-1659/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1459()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/chesterfield-1655/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1460()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/oakville-1652/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1461()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/madison-1649/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1462()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/berlin-1645/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1463()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/missouri-city-1644/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1464()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/norcross-1638/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1465()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ms/tupelo-1632/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1466()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/parma-1626/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1467()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/canton-1625/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1468()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/las-vegas-1603/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1469()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/id/caldwell-1600/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1470()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/san-marcos-1599/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1471()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ar/jonesboro-1598/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1472()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/asheville-1596/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1473()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/az/peoria-1593/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1474()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/indianapolis-1592/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1475()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nm/albuquerque-1591/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1476()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/decatur-1586/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1477()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/universal-city-1577/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1478()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/colorado-springs-1547/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1479()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sd/sioux-falls-1542/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1480()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/laconia-1541/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1481()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/valley-stream-1539/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1482()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/dublin-1536/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1483()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/columbus-1535/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1484()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/decatur-1522/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1485()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/pueblo-1521/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1486()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/forest-1499/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1487()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/la-plata-1492/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1488()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/fredericksburg-1490/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1489()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/o-fallon-1479/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1490()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/wilmington-1475/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1491()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/louisville-1468/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1492()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/pflugerville-1460/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1493()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/oregon-city-1442/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1494()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/vancouver-1440/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1495()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/brookfield-1435/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1496()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nm/santa-fe-1433/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1497()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/vernon-rockville-1423/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1498()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/overland-1422/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1499()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/binghamton-1420/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1500()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/west-mifflin-1417/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1501()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/wilmington-1408/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1502()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/louisville-1407/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1503()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ak/anchorage-1397/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1504()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/lawrence-1381/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1505()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/olathe-1380/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1506()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/overland-park-1377/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1507()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/lenexa-1375/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1508()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ks/overland-park-1372/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1509()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/kansas-city-1370/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1510()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/amarillo-1363/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1511()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/hickory-1358/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1512()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/sinking-spring-1351/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1513()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wy/cheyenne-1347/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1514()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/saint-peters-1340/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1515()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ms/diberville-1334/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1516()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/concord-1332/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1517()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/nashua-1331/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1518()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/hilliard-1325/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1519()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/columbus-1323/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1520()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/newark-1320/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1521()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/york-1314/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1522()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/raleigh-1312/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1523()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/weston-1311/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1524()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/mansfield-1303/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1525()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/louisville-1297/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1526()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/stafford-1288/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1527()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/raynham-1287/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1528()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/vidalia-1270/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1529()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/greensboro-1269/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1530()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tn/clarksville-1264/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1531()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/alpharetta-1260/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1532()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/sherwood-1257/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1533()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/vestal-1256/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1534()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/portland-1255/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1535()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/hillsboro-1250/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1536()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/louisville-1248/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1537()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ky/louisville-1247/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1538()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/tampa-1227/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1539()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/richmond-1226/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1540()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/baton-rouge-1223/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1541()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/fort-collins-1222/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1542()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/lawrenceville-1204/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1543()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/ephrata-1184/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1544()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/reno-1176/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1545()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tn/knoxville-1172/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1546()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/maplewood-1171/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1547()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/centennial-1165/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1548()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/temple-terrace-1164/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1549()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/gardner-1151/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1550()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/indianapolis-1143/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1551()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/me/augusta-1138/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1552()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/humble-1136/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1553()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/rock-hill-1134/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1554()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/lynn-1121/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1555()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/denver-1120/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1556()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/castle-rock-1115/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1557()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/portsmouth-1114/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1558()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/horseheads-1113/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1559()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/pittsburgh-1109/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1560()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston-1094/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1561()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/irmo-1092/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1562()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/denbigh-1088/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1563()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/brighton-1083/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1564()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/loveland-1081/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1565()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/cape-coral-1078/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1566()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/bordentown-1077/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1567()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/stoughton-1074/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1568()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tn/johnson-city-1072/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1569()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/reynoldsburg-1065/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1570()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/lawrence-1064/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1571()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/exton-1062/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1572()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wa/lynnwood-1052/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1573()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/white-plains-1024/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1574()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/whitehall-1019/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1575()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/fairfield-1013/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1576()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/snellville-1012/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1577()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/manchester-1008/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1578()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/richmond-998/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1579()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/beaverton-991/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1580()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/anderson-980/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1581()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/bakersfield-975/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1582()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/wallingford-966/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1583()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/worcester-951/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1584()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/dumfries-950/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1585()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/de/new-castle-949/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1586()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/castleton-944/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1587()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/damascus-943/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1588()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/indianapolis-940/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1589()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/williamsburg-938/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1590()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/portland-935/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1591()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/santa-rosa-933/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1592()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/highlands-ranch-931/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1593()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/winchester-928/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1594()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/philadelphia-921/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1595()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/norwich-917/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1596()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/indianapolis-913/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1597()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/doylestown-905/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1598()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/west-melbourne-904/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1599()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mn/maplewood-897/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1600()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/harrisburg-892/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1601()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/ft-myers-890/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1602()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/hudson-889/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1603()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/quincy-886/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1604()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/bourbonnais-884/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1605()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/roanoke-880/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1606()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/college-park-879/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1607()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/boulder-873/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1608()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/des-plaines-871/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1609()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/norwood-866/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1610()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/shrewsbury-865/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1611()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/california-858/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1612()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/grafton-851/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1613()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/decatur-850/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1614()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/harmar-township-849/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1615()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/monroe-841/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1616()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ri/woonsocket-840/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1617()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/abington-836/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1618()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/lancaster-828/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1619()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/columbia-824/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1620()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/milford-822/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1621()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/sc/sumter-820/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1622()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/ellicott-city-814/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1623()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/greenfield-812/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1624()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/normal-801/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1625()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/dover-794/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1626()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/forest-park-791/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1627()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/fenton-790/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1628()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/me/biddeford-788/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1629()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/phillipsburg-787/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1630()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/denver-782/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1631()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/germantown-781/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1632()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/urbana-773/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1633()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/southampton-768/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1634()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/fredericksburg-766/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1635()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/castle-shannon-765/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1636()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/clinton-763/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1637()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/edison-762/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1638()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/bridgeport-758/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1639()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/greensburg-754/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1640()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/newtown-square-745/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1641()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/tewksbury-743/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1642()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/killeen-742/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1643()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/englewood-739/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1644()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/chester-733/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1645()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/seabrook-731/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1646()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/gastonia-730/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1647()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/merrimack-727/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1648()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/jersey-city-726/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1649()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/monroe-722/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1650()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/happy-valley-720/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1651()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/charlotte-717/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1652()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/pittsburgh-716/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1653()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/hershey-712/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1654()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/indianapolis-704/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1655()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/colonial-heights-702/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1656()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ca/redwood-city-699/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1657()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/turnersville-696/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1658()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/naugatuck-695/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1659()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/stroudsburg-691/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1660()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/amherst-689/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1661()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/east-wareham-682/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1662()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/cartersville-675/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1663()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/de/claymont-671/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1664()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/eldersburg-670/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1665()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/statesboro-648/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1666()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/roswell-646/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1667()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ia/dubuque-645/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1668()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/denver-642/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1669()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/bloomington-639/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1670()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/fayetteville-628/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1671()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/indianapolis-625/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1672()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/longmont-624/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1673()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ne/omaha-622/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1674()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ne/omaha-611/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1675()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/north-huntingdon-610/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1676()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/pineville-608/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1677()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/de/dover-607/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1678()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/greenwood-599/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1679()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/perrine-594/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1680()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/pearland-593/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1681()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/south-attleboro-592/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1682()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/east-saint-louis-591/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1683()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/palos-heights-588/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1684()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/reno-586/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1685()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/hampton-584/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1686()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/pittsburgh-582/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1687()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/westchester-581/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1688()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/hendersonville-577/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1689()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/chicopee-576/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1690()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/staten-island-571/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1691()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/de/wilmington-569/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1692()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/philadelphia-564/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1693()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/cinnaminson-563/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1694()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/mount-prospect-558/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1695()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/granite-city-557/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1696()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/madison-heights-556/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1697()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/downingtown-555/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1698()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/chesterfield-554/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1699()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/new-britain-553/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1700()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/glassboro-550/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1701()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/ossining-545/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1702()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/portsmouth-544/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1703()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/philadelphia-539/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1704()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/woodbury-538/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1705()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/enfield-536/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1706()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tn/memphis-535/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1707()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/salem-533/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1708()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/bethlehem-530/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1709()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/allentown-529/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1710()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/lumberton-528/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1711()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/newark-524/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1712()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/amherst-520/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1713()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/peoria-515/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1714()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/monroeville-512/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1715()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/hawthorne-511/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1716()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/forest-park-509/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1717()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/decatur-505/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1718()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/harrisburg-495/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1719()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/westmont-493/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1720()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/gloucester-491/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1721()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/katy-490/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1722()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/peoria-488/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1723()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/austin-483/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1724()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/rochester-482/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1725()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/howell-479/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1726()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/san-antonio-477/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1727()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/old-saybrook-476/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1728()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/hightstown-474/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1729()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/sterling-472/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1730()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/o-fallon-469/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1731()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/brooklyn-468/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1732()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/district-heights-463/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1733()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/north-arlington-456/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1734()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/colorado-springs-455/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1735()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/cedar-grove-453/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1736()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ia/cedar-rapids-451/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1737()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/springfield-446/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1738()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/ansonia-440/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1739()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/groton-437/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1740()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/silver-spring-435/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1741()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/nederland-430/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1742()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/de/ogletown-428/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1743()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/fishkill-426/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1744()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/lowell-425/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1745()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/jacksonville-419/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1746()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/fairview-heights-418/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1747()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/northbrook-415/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1748()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/vineland-414/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1749()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/colorado-springs-413/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1750()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/arnold-407/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1751()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mi/wyoming-400/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1752()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/beverly-398/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1753()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wy/casper-396/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1754()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ne/omaha-395/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1755()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/baltimore-394/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1756()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/st-louis-392/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1757()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/derry-384/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1758()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/kingston-381/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1759()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/bensalem-380/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1760()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/bridgeton-376/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1761()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/raleigh-374/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1762()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/marlton-373/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1763()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/seguin-369/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1764()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/philadelphia-367/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1765()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/wayne-366/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1766()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/salem-365/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1767()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/me/auburn-360/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1768()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/aurora-359/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1769()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/wi/madison-355/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1770()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/butler-353/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1771()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/annapolis-352/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1772()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/peabody-347/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1773()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/bristol-346/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1774()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/charlottesville-342/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1775()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/boca-raton-341/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1776()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/philadelphia-340/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1777()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/middletown-338/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1778()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/columbus-337/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1779()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/smithtown-334/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1780()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/plaistow-332/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1781()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/norristown-331/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1782()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/ledgewood-327/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1783()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/cincinnati-325/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1784()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/maspeth-317/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1785()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/branford-316/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1786()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/virginia-beach-312/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1787()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/belleville-310/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1788()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/mountainside-309/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1789()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/evanston-306/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1790()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/marietta-304/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1791()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/brooklyn-303/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1792()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/fairless-hills-302/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1793()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/arlington-heights-301/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1794()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/fayetteville-300/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1795()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/cockeysville-298/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1796()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/new-carrollton-297/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1797()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/new-rochelle-296/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1798()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/saint-louis-295/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1799()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/eatontown-294/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1800()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/addison-293/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1801()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/smyrna-292/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1802()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/rockford-291/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1803()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/brockton-290/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1804()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nh/manchester-288/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1805()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/philadelphia-287/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1806()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/wilmington-282/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1807()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/ballwin-279/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1808()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/fairfax-274/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1809()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/or/portland-272/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1810()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/kenwood-269/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1811()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/co/arvada-267/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1812()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/joliet-266/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1813()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/schaumburg-265/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1814()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/alton-264/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1815()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/easton-263/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1816()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/collinsville-262/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1817()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/oak-lawn-261/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1818()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/naperville-259/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1819()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/riverhead-258/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1820()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/worcester-257/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1821()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/catonsville-251/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1822()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/savannah-250/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1823()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/south-plainfield-249/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1824()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/glen-burnie-246/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1825()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/staten-island-245/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1826()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/me/portland-243/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1827()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/mechanicsburg-240/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1828()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/newark-239/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1829()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/pittsburgh-232/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1830()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/reading-231/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1831()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nv/sparks-229/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1832()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/middletown-228/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1833()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/bristol-227/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1834()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/chicago-226/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1835()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/downers-grove-225/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1836()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/west-caldwell-217/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1837()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/south-toms-river-214/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1838()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston-210/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1839()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/philadelphia-207/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1840()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/audubon-205/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1841()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/rosenberg-202/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1842()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/aurora-201/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1843()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/va/virginia-beach-197/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1844()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tn/madison-196/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1845()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/brentwood-195/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1846()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/brooklyn-194/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1847()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/greensboro-188/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1848()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/bossier-city-187/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1849()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/brooklyn-186/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1850()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/il/south-holland-182/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1851()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/mastic-180/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1852()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/cherry-hill-179/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1853()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/new-london-178/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1854()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/mckeesport-176/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1855()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/berlin-174/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1856()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/atlanta-171/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1857()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/waldorf-169/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1858()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/west-hartford-165/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1859()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/bronx-164/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1860()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/pleasantville-162/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1861()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/atlanta-161/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1862()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/conroe-160/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1863()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/pa/darby-157/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1864()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/dover-156/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1865()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ga/columbus-155/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1866()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/saint-charles-154/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1867()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/ferguson-153/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1868()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/edison-148/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1869()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/torrington-146/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1870()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/yonkers-145/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1871()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/meriden-140/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1872()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/freehold-137/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1873()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/trenton-135/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1874()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/oh/cincinnati-132/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1875()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/patchogue-131/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1876()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/webster-126/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1877()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/danbury-125/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1878()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/in/muncie-124/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1879()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/new-haven-122/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1880()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/milford-121/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1881()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/malden-119/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1882()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/amarillo-116/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1883()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/elizabeth-115/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1884()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/ramsey-112/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1885()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ma/arlington-109/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1886()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/newburgh-105/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1887()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/charlotte-104/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1888()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/md/baltimore-99/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1889()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/englewood-81/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1890()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/queens-village-77/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1891()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ut/salt-lake-city-70/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1892()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/west-new-york-67/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1893()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/oakdale-63/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1894()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/la/lake-charles-62/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1895()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/stamford-60/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1896()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/ronkonkoma-59/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1897()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ct/waterbury-54/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1898()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/coram-53/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1899()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/huntington-station-51/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1900()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/levittown-50/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1901()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nc/charlotte-49/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1902()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/north-plainfield-48/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1903()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/brick-town-45/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1904()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/fl/pompano-beach-43/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1905()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/ny/new-hyde-park-39/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1906()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/nj/lodi-37/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1907()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston-33/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1908()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/saint-louis-30/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1909()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/saint-louis-28/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1910()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/mo/florissant-26/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1911()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston-24/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1912()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/baytown-19/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1913()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston-10/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1914()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston-8/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }

    public function testSitemapUrl1915()
    {
$client = new Client();
$crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/locations/tx/houston-4/');

$this->assertEquals(200, $client->getResponse()->getStatus());

    }
}
