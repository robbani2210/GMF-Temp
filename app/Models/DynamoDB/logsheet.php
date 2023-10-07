<?php

namespace App\Models\DynamoDB;

use Kitar\Dynamodb\Model\Model;

class logsheet extends Model
{
    protected $table = 'logsheet';
    protected $primaryKey = 'timestamp';
    protected $sortKey = 'timestamp';
}

