<?php
/**
 * Test class for VarFloat
 *
 * @author  Adrien <aimbert@solire.fr>
 * @license MIT http://mit-license.org/
 */

namespace Solire\Form\Process\tests\unit;

use atoum;
use Solire\Form\Process\Phone as TestClass;

/**
 * Test class for VarFloat
 *
 * @author  Adrien <aimbert@solire.fr>
 * @license MIT http://mit-license.org/
 */
class Phone extends atoum
{
    /**
     * Contrôle validations de valeurs simple
     *
     * @return void
     */
    public function testCtrl()
    {
        $this
            ->boolean(TestClass::validate(5))
                ->isFalse()
            ->boolean(TestClass::validate('01 42 53 68 95'))
                ->isTrue()
            ->boolean(TestClass::validate('0142536895'))
                ->isTrue()
            ->boolean(TestClass::validate('01-42-53-68-95'))
                ->isTrue()
            ->boolean(TestClass::validate('01.42.53.68.95'))
                ->isTrue()
            ->boolean(TestClass::validate('nope'))
                ->isFalse()

        ;
    }
}
