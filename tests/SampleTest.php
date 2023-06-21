<?php
namespace Bohdan\Dnsgetrecord\Tests;

use Tests\TestCase;
use Bohdan\Dnsgetrecord\DNSService;

class SampleTest extends TestCase
{
    private const EMPTY_ARRAY = [];
    private const CORRECT_URL = 'gmail.com';
    private const WRONG_URL = 'gmailcom';
    private const EMPTY_URL = '';

    public function testDNSServiceCalledWithWrongParameter()
    {
        #testing two failed cases with a wrong url and an empty url
        $DNSService = new DNSService();
        $result = $DNSService->getDnsRecords(self::WRONG_URL);
        $this->assertSame(self::EMPTY_ARRAY, $result);

        $result = $DNSService->getDnsRecords(self::EMPTY_URL);
        $this->assertSame(self::EMPTY_ARRAY, $result);
    }

    public function testDNSServiceCalledWithCorrectParameter()
    {
        #testing a successful case with the correct url
        $DNSService = new DNSService();
        $result = $DNSService->getDnsRecords(self::CORRECT_URL);
        $this->assertNotSame(self::EMPTY_ARRAY, $result);
    }
}
