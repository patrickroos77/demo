<?php
namespace TEST;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 TEST
 *
 *  All rights reserved
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Class TestClassWithValidCamelCase
 * @package TEST
 */
class TestClassWithValidCamelCase
{
    /**
     * @var string
     */
    private $privateVar;

    /**
     * @var string
     */
    public $publicVar;

    /**
     * @return string
     */
    public function getPrivateVar()
    {
        return $this->privateVar;
    }

    /**
     * @param string $privateVar
     */
    public function setPrivateVar($privateVar)
    {
        $this->privateVar = $privateVar;
    }

    /**
     * @return string
     */
    public function getPublicVar()
    {
        return $this->publicVar;
    }

    /**
     * @param string $publicVar
     */
    public function setPublicVar($publicVar)
    {
        $this->publicVar = $publicVar;
    }
}
