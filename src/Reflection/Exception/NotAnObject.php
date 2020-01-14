<?php

declare(strict_types=1);

namespace Roave\BetterReflection\Reflection\Exception;

use InvalidArgumentException;
use function gettype;
use function sprintf;

class NotAnObject extends InvalidArgumentException
{
    /**
     * @param bool|int|float|string|array|resource|null $nonObject
     * @psalm-param scalar|array|resource|null $nonObject
     */
    public static function fromNonObject($nonObject) : self
    {
        return new self(sprintf('Provided "%s" is not an object', gettype($nonObject)));
    }
}
