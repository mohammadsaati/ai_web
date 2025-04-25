<?php

 namespace App\Services;

use App\Models\SiteOrder;
use App\Services\Service;

 class SiteOrderService extends Service
{

    public function create(array $data): SiteOrder
    {
        return SiteOrder::create($data);
    }

}
