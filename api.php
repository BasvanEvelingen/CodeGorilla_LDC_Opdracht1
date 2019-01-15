$client = new GuzzleHttp\Client();

$res = $client->request(‘GET’, 'https://staging.ldc.nl', [
    {
    "class": "LdcApiRequest",
    "apikey": "744B1E6D-7973-1DE4-BEDD-0C57444466DA",
    "calls": [
    {
    "class": "LdcApiGetSomethingWiths"
    }
    ]
    }
])

