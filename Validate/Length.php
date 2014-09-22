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
class Length implements ParamInterface
{
    /**
     * Test si le parametre n'est pas vide.
     *
     * @param mixed $data  Valeur à tester
     * @param mixed $param Signe et valeur minimum **par exemple >=2**
     *
     * @return boolean
     */
    public static function validate($data, $param)
    {
        $sign = preg_replace('#([0-9]+)#', '', $param);
        $length = str_replace($sign, '', $param);

        switch ($sign) {
            case '=':
                if (strlen($data) == $length) {
                    return true;
                }
                break;
            case '>=':
                if (strlen($data) >= $length) {
                    return true;
                }
                break;
            case '<=':
                if (strlen($data) <= $length) {
                    return true;
                }
                break;
            case '>':
                if (strlen($data) > $length) {
                    return true;
                }
                break;
            case '<':
                if (strlen($data) < $length) {
                    return true;
                }
                break;

        }

        return false;
    }
}
