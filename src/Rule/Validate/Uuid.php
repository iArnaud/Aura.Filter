<?php
/**
 *
 * This file is part of the Aura project for PHP.
 *
 * @package Aura.Filter
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 *
 */
namespace Aura\Filter\Rule\Validate;

use Aura\Filter\Rule\AbstractUuid;

/**
 *
 * Validates that the value is a canonical human-readable Universally Unique
 * Identifier (UUID).
 *
 * @package Aura.Filter
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 *
 */
class Uuid extends AbstractUuid
{
    /**
     *
     * Validates that the value is a canonical human-readable UUID.
     *
     * @return bool True if valid, false if not.
     *
     */
    public function __invoke($subject, $field)
    {
        return $this->isCanonical($subject->$field);
    }
}
