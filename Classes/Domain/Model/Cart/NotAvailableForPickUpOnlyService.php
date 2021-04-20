<?php
declare(strict_types=1);

namespace Extcode\CartPickUpOnly\Domain\Model\Cart;

/*
 * This file is part of the package extcode/cart-pick-up-only.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

class NotAvailableForPickUpOnlyService extends \Extcode\Cart\Domain\Model\Cart\Service
{
    /**
     * @return bool
     */
    public function isAvailable(): bool
    {
        foreach ($this->cart->getProducts() as $product) {
            if ($product->getServiceAttribute3()) {
                return false;
            }
        }

        return parent::isAvailable();
    }
}