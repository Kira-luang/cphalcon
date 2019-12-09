<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Test\Integration\Forms\Element\Radio;

use IntegrationTester;

/**
 * Class HasMessagesCest
 */
class HasMessagesCest
{
    /**
     * Tests Phalcon\Forms\Element\Radio :: hasMessages()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function formsElementRadioHasMessages(IntegrationTester $I)
    {
        $I->wantToTest('Forms\Element\Radio - hasMessages()');
        $I->skipTest('Need implementation');
    }
}
