<?php

namespace App\Twig\Runtime;

use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Twig\Extension\RuntimeExtensionInterface;

class AppExtensionRuntime implements RuntimeExtensionInterface
{
    public function __construct(
        private readonly HttpClientInterface $client,
        private readonly CacheInterface $issLocationPool,
        private readonly int $issLocationCacheTtl
    )
    {
        // Inject dependencies if needed
    }

    public function getIssLocationData()
    {
        // use of cache for GET request
        return $this->issLocationPool->get('iss_location_data', function($item): array {
            $item->expiresAfter($this->issLocationCacheTtl);
            $response = $this->client->request('GET', 'https://api.wheretheiss.at/v1/satellites/25544');
            return $response->toArray();
        });
    }
}
