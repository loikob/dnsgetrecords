<?php
namespace Bohdan\Dnsgetrecord;

interface DNS
{
    #a simple interface with one public method to implement
    public function getDnsRecords(string $url): array;
}
