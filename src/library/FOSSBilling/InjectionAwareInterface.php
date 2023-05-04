<?php declare(strict_types=1);
/**
 * FOSSBilling
 *
 * @copyright FOSSBilling (https://www.fossbilling.org)
 * @license   Apache-2.0
 *
 * This file may contain code previously used in the BoxBilling project.
 * Copyright BoxBilling, Inc 2011-2021
 *
 * This source file is subject to the Apache-2.0 License that is bundled
 * with this source code in the file LICENSE
 */

namespace FOSSBilling;

interface InjectionAwareInterface
{
    /**
     * @param \Pimple\Container $di
     * @return void
     */
    public function setDi(\Pimple\Container $di): void;

    /**
     * @return \Pimple\Container|null
     */
    public function getDi(): ?\Pimple\Container;
}