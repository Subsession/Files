<?php
/**
 * PHP Version 7
 *
 * LICENSE:
 * Permission is hereby granted, free of charge, to any
 * person obtaining a copy of this software and associated
 * documentation files (the "Software"), to deal in the
 * Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute,
 * sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall
 * be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 * @category Files
 * @package  Comertis\Files
 * @author   Cristian Moraru <cristian@comertis.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @version  GIT: &Id&
 * @link     https://github.com/Comertis/Files
 */

namespace Comertis\Files\Internal;

/**
 * Undocumented class
 *
 * @category Files
 * @package  Comertis\Files
 * @author   Cristian Moraru <cristian@comertis.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @version  Release: 1.0.0
 * @link     https://github.com/Comertis/Files
 */
class FileContent
{
    /**
     * File content
     *
     * @access private
     * @var    mixed
     */
    private $_content;

    /**
     * Constructor
     *
     * @param mixed $content File content
     */
    public function __construct($content)
    {
        $this->_content = $content;
    }

    /**
     * Read file content as string
     *
     * @access public
     * @return string
     */
    public function __toString()
    {
        return (string) $this->_content;
    }

    /**
     * Read file content raw
     *
     * @access public
     * @return mixed
     */
    public function raw()
    {
        return $this->_content;
    }

    /**
     * Read file content json_decoded
     *
     * @access public
     * @return object|mixed
     */
    public function json()
    {
        return json_decode($this->_content);
    }
}