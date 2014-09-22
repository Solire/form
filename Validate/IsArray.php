<?php
/**
 * Contrôle de variables
 *
 * @author  Adrien <aimbert@solire.fr>
 * @license CC by-nc http://creativecommons.org/licenses/by-nc/3.0/fr/
 */

namespace Sowork\Formulaire\Validate;

use Sowork\Formulaire\ParamInterface;

/**
 * Contrôle de variables
 *
 * @author  Adrien <aimbert@solire.fr>
 * @license CC by-nc http://creativecommons.org/licenses/by-nc/3.0/fr/
 */
class IsArray implements ParamInterface
{
    /**
     * Test si le parametre est un tableau
     *
     * @param mixed $data Valeur à tester
     *
     * @return boolean
     */
    public static function validate($data, $param)
    {
        if (is_array($data)) {
            return true;
        }
        return false;
    }
}
