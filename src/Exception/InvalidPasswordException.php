<?php

namespace Chubbyphp\Security\Exception;

final class InvalidPasswordException extends AbstractLoginException
{
    /**
     * @return InvalidPasswordException
     */
    public static function create(): self
    {
        return new self('Invalid password');
    }
}
