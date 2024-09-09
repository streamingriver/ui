<?php

namespace Modules\IptvAppOverride\Services;
use Modules\IptvApp\Services\IptvAppService;

class IptvAppOverrideService extends IptvAppService
{
    public function index()
    {
        return view("iptvappoverride::index");
    }

}
