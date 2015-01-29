<?php
namespace Chrisbjr\ApiGuard;
/**
 * Class ApiKey
 */
class ApiLog extends \Moloquent
{
    protected $table = 'api_logs';

    public function user()
    {
        return $this->hasOne('ApiKey');
    }

}