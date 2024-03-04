<?php

namespace HubSpot\Discovery\Crm\Objects\PostalMail;

use HubSpot\Client\Crm\Objects\PostalMail\Api\BasicApi;
use HubSpot\Client\Crm\Objects\PostalMail\Api\BatchApi;
use HubSpot\Client\Crm\Objects\PostalMail\Api\GDPRApi;
use HubSpot\Client\Crm\Objects\PostalMail\Api\PublicObjectApi;
use HubSpot\Client\Crm\Objects\PostalMail\Api\SearchApi;
use HubSpot\Client\Crm\Objects\PostalMail\Configuration;
use HubSpot\Discovery\DiscoveryBase;

/**
 * @method BasicApi        basicApi()
 * @method BatchApi        batchApi()
 * @method GDPRApi         gdprApi()
 * @method PublicObjectApi publicObjectApi()
 * @method SearchApi       searchApi()
 */
class Discovery extends DiscoveryBase
{
    public function gdprApi()
    {
        $config = $this->config->convertToClientConfig(Configuration::class);

        return new GDPRApi($this->client, $config);
    }
}
