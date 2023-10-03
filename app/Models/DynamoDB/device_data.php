<?php

namespace App\Models\DynamoDB;

use Kitar\Dynamodb\Model\Model;

class device_data extends Model
{
    protected $table = 'device_data';
    protected $primaryKey = 'timestamp';
    protected $sortKey = 'timestamp';
}

