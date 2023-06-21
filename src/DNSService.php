<?php
namespace Bohdan\Dnsgetrecord;

class DNSService implements DNS
{
    #a pattern to check the correctness of the url given
    private const URL_PATTERN = '/[A-Za-z]+\\.[A-Za-z]+/i';

    #a public method that returns the array of data, connected with the correct url or returns an empty array
    public function getDnsRecords(string $url): array
    {
        return  !preg_match(self::URL_PATTERN, $url) ? [] : dns_get_record($url);
    }
}
