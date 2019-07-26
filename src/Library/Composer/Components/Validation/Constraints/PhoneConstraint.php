<?php

namespace Solspace\Freeform\Library\Composer\Components\Validation\Constraints;

use Solspace\Freeform\Library\Composer\Components\Validation\Errors\ConstraintViolationList;

class PhoneConstraint implements ConstraintInterface
{
    /** @var string */
    private $message;

    /**
     * The pattern is going to look like this:
     * (xxx) xxxx xxx
     * Anything other than an X is going to be assumed literal
     * an X stands for any digit between 0 and 9
     *
     * @var string
     */
    private $pattern;

    /**
     * RegexConstraint constructor.
     *
     * @param string $message
     * @param string $pattern
     */
    public function __construct($message = 'Invalid phone number', $pattern = null)
    {
        $this->message = $message;
        $this->pattern = !empty($pattern) ? $pattern : null;
    }

    /**
     * @inheritDoc
     */
    public function validate($value)
    {
        $violationList = new ConstraintViolationList();
        return $violationList;
    }
}
