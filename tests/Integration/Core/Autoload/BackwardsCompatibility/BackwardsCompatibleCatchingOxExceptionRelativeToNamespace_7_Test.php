<?php
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace OxidEsales\EshopCommunity\Tests\Integration\Core\Autoload\BackwardsCompatibility;

class BackwardsCompatibleCatchingOxExceptionRelativeToNamespace_7_Test extends \PHPUnit_Framework_TestCase
{

    /**
     * Try to catch an \oxException when a given Exception is thrown
     *
     * @throws \Exception $exception
     */
    public function testBackwardsCompatibleCatchingOxExceptionRelativeToNamespace()
    {
        $exception = new \OxidEsales\EshopCommunity\Core\Exception\StandardException();
        try {
            throw $exception;
        } catch (oxException $exception) {
            /** If the exception has been caught, the test has failed */
            $this->fail( 'The given exception (new \OxidEsales\EshopCommunity\Core\Exception\StandardException()) was caught as oxException');
        } catch (\Exception $exception) {
            /** If the exception has not been caught before, the test has passed */
            $this->assertTrue(true, 'The given exception (new \OxidEsales\EshopCommunity\Core\Exception\StandardException()) was not caught as oxException');
        }
    }
}
