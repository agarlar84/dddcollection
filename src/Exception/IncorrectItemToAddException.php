<?php

namespace DDDCollection\Exception;

class IncorrectItemToAddException extends \Exception
{
    public function __construct($aClassName, $theInvalidObjectToAdd)
    {
        parent::__construct(
            sprintf('Object class is %s, should be a %s class', $aClassName, get_class($theInvalidObjectToAdd))
        );
    }
}