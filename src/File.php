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
 * @package  Subsession\Files
 * @author   Cristian Moraru <cristian@subsession.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @version  GIT: &Id&
 * @link     https://github.com/Subsession/Files
 */

namespace Subsession\Files;

/**
 * Undocumented class
 *
 * @category Files
 * @package  Subsession\Files
 * @author   Cristian Moraru <cristian@subsession.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @version  Release: 1.0.0
 * @link     https://github.com/Subsession/Files
 */
class File
{
    /**
     * File name
     *
     * @access private
     * @var    string
     */
    private $name;

    /**
     * File extension
     *
     * @access private
     * @var    string
     */
    private $extension;

    /**
     * File name + extension
     *
     * @access private
     * @var    string
     */
    private $fullName;

    /**
     * File content
     *
     * @access private
     * @var    FileContent|null
     */
    private $content;

    /**
     * Constructor
     *
     * @param string $name File name
     */
    public function __construct($name = null)
    {
        if (is_null($name)) {
            return;
        }

        $this->content = null;

        $parts = explode(".", $name);

        if (count($parts) > 1) {
            $extension = array_pop($parts);
            $name = implode(".", $parts);

            $this->setName($name);
            $this->setExtension($extension);
        }
    }

    /**
     * Destructor
     */
    public function __destruct()
    {
        foreach ($this as $key => $value) {
            unset($this->{$key});
        }
    }

    /**
     * Get the file name
     *
     * @access public
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the file name
     *
     * @param string $name File name
     *
     * @access public
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the file extension
     *
     * @access public
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set the file extension
     *
     * @param string $extension File extension
     *
     * @access public
     * @return self
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get the file's full name
     *
     * @access public
     * @return string
     */
    public function getFullName()
    {
        if (isset($this->fullName)) {
            $this->setFullName();
        }

        return $this->fullName;
    }

    /**
     * Set the file's full name
     *
     * @access private
     * @return self
     */
    private function setFullName()
    {
        $this->fullName = $this->getName() . "." . $this->getExtension();
    }

    /**
     * Get the file's content
     *
     * @access public
     * @return FileContent|null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the file content
     *
     * @param mixed $content File content
     *
     * @access public
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
}
