<?php

namespace Comsave\SafeSalesforceSaverBundle\Exception;

class TimeoutException extends SafeSalesforceSaverException
{
    public function __construct(string $model)
    {
        parent::__construct(sprintf('The time limit expired while trying to save to Salesforce. Serialized message of the failed call: %s', $model));
    }
}