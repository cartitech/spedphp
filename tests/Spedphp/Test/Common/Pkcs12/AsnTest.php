<?php

namespace SpedPHP\Test\Common\Pkcs12;

use SpedPHP\Common\Pkcs12\Asn;

/**
 * @category   SpedPHP
 * @package    SpedPHP\Test\Common\PKcs12
 * @copyright  Copyright (c) 2013
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL v.3
 * @author     Roberto L. Machado <linux.rlm@gmail.com>
 */
class AsnTest extends \PHPUnit_Framework_TestCase
{

    public function testgetCNPJCert()
    {
        $certPem = '-----BEGIN CERTIFICATE-----
MIIINTCCBh2gAwIBAgIQWufQDEELA3CHkxgeQCQy0zANBgkqhkiG9w0BAQsFADB0
MQswCQYDVQQGEwJCUjETMBEGA1UEChMKSUNQLUJyYXNpbDEtMCsGA1UECxMkQ2Vy
dGlzaWduIENlcnRpZmljYWRvcmEgRGlnaXRhbCBTLkEuMSEwHwYDVQQDExhBQyBD
ZXJ0aXNpZ24gTXVsdGlwbGEgRzUwHhcNMTMwNTIzMDAwMDAwWhcNMTQwNTIyMjM1
OTU5WjCBwDELMAkGA1UEBhMCQlIxEzARBgNVBAoUCklDUC1CcmFzaWwxIjAgBgNV
BAsUGUF1dGVudGljYWRvIHBvciBBUiBEYXNjaGkxGzAZBgNVBAsUEkFzc2luYXR1
cmEgVGlwbyBBMTEVMBMGA1UECxQMSUQgLSA0NjIwNDg1MRwwGgYDVQQDExNGaW1h
dGVjIFRleHRpbCBMdGRhMSYwJAYJKoZIhvcNAQkBFhdmZXJuYW5kb0BmaW1hdGVj
LmNvbS5icjCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAIx+IpZCYEzx
whiQq9iiUw7c3XxMXh9ZjSNJVCGWvCCegXNzzI+tSzzm12PMEgU9llHjA7Zu5gRf
chuVnqAYbGYuQDTOc/PukFcN2H2EWubEiIvuPnz9/AhwXYvppOwFpNZJ+b6Rk6Zf
J2pjEdpc+RH5/FKGIZp3VASfeRNSaEf9KRN2gPjL++bN7qeuhOxUWx/OclOxajln
k7JSJdCMKda03zYUzNpcAQZE2+dvkgxzJaxMXVihdEJ+iXi4LO5eEsajLxeiBYum
W7YFBAArO17Ygrc/banmfii0Q8WT2u6lnH3CA1lZXGU1CCFxsNOOalHg2UC1pqXS
FIRTuthYWl0CAwEAAaOCA3QwggNwMIG6BgNVHREEgbIwga+gPQYFYEwBAwSgNAQy
MjAxMDE5NTkwNTIyNTUzNzg4MDAwMDAwMDAwMDAwMDAwMDAwMDg4NzQzNzJYU1NQ
U1CgIQYFYEwBAwKgGAQWRkVSTkFORE8gSk9TRSBLQUlSQUxMQaAZBgVgTAEDA6AQ
BA41ODcxNjUyMzAwMDExOaAXBgVgTAEDB6AOBAwwMDAwMDAwMDAwMDCBF2Zlcm5h
bmRvQGZpbWF0ZWMuY29tLmJyMAkGA1UdEwQCMAAwHwYDVR0jBBgwFoAUnVDPvf8k
yq+xM+sX4kJ6jmkqjlMwDgYDVR0PAQH/BAQDAgXgMIGJBgNVHSAEgYEwfzB9BgZg
TAECAQswczBxBggrBgEFBQcCARZlaHR0cDovL2ljcC1icmFzaWwuY2VydGlzaWdu
LmNvbS5ici9yZXBvc2l0b3Jpby9kcGMvQUNfQ2VydGlzaWduX011bHRpcGxhL0RQ
Q19BQ19DZXJ0aVNpZ25NdWx0aXBsYS5wZGYwggElBgNVHR8EggEcMIIBGDBcoFqg
WIZWaHR0cDovL2ljcC1icmFzaWwuY2VydGlzaWduLmNvbS5ici9yZXBvc2l0b3Jp
by9sY3IvQUNDZXJ0aXNpZ25NdWx0aXBsYUc1L0xhdGVzdENSTC5jcmwwW6BZoFeG
VWh0dHA6Ly9pY3AtYnJhc2lsLm91dHJhbGNyLmNvbS5ici9yZXBvc2l0b3Jpby9s
Y3IvQUNDZXJ0aXNpZ25NdWx0aXBsYUc1L0xhdGVzdENSTC5jcmwwW6BZoFeGVWh0
dHA6Ly9yZXBvc2l0b3Jpby5pY3BicmFzaWwuZ292LmJyL2xjci9DZXJ0aXNpZ24v
QUNDZXJ0aXNpZ25NdWx0aXBsYUc1L0xhdGVzdENSTC5jcmwwHQYDVR0lBBYwFAYI
KwYBBQUHAwIGCCsGAQUFBwMEMIGgBggrBgEFBQcBAQSBkzCBkDBkBggrBgEFBQcw
AoZYaHR0cDovL2ljcC1icmFzaWwuY2VydGlzaWduLmNvbS5ici9yZXBvc2l0b3Jp
by9jZXJ0aWZpY2Fkb3MvQUNfQ2VydGlzaWduX011bHRpcGxhX0c1LnA3YzAoBggr
BgEFBQcwAYYcaHR0cDovL29jc3AuY2VydGlzaWduLmNvbS5icjANBgkqhkiG9w0B
AQsFAAOCAgEAOTGdep5fXgk89vomAgZjW2EaGdFnBum1UP5wNDSykLjt0Vy9rGyv
jqGaIr3XTcP2ZSZTROlMxhB77/ZUTrz919IOOWipclMitXDpZmvAZ9Ap6bfx97Ok
TDt7kFOVL2gzhNLNgv4G51DTOw3ewt8rnHhRQZPckxkhPVxfvIkNm9Jf/1US57m3
TROzYt0PD0Ro4Fm2XADVCJSgIr4V4OGgk69Bxc1pYCtZAqvXrfGbY3VyXma33gek
HI/fP2+82FjtKfowWD3+BhUCp3O6KyZLpOKmRV9Rs529TCfjV9wtE8uU2qhXNpOR
kJ/NSgzj8bStqP+3GZTpmR8MNCQUXb7k+zNnvI8r6pz7OsWrGeKWqwQu7h+jgPyR
iN6vbTnypeTNLTAREaZNptXkXCzgAB1tggpT8gKP3YSvV+Im5PnKAzkSyNh0K9Ae
o46jhx5jFg9CYhi+2M2gpyhdWiq9P87hQspCURrf9iMTAYBsbWtl3ig8eO3twcCT
L+6KO0uLsQvw/9grnCv9a6zhg1sGUJbgzIpWY5HiTcCCEzNorrtcSD8JbxmJ6nhE
nrOy+8D55udGb1OaosbiDXe6GItDglhY8TODl+9KtSbPrDmgzamSAUOZuIYo7+YN
AnsPWLuKH6wLsfdsZVQ8ComysYxOUuC/TKVrDwSWGAQQSx+2YM9STFI=
-----END CERTIFICATE-----
';
        
        $cnpj='58716523000119';
        $asnpk = new Asn();
        $certcnpj = $asnpk->getCNPJCert($certPem);
        $this->assertEquals($cnpj, $certcnpj);
    }
}
