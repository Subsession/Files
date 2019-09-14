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

use Subsession\Files\Exceptions\FileNotFoundException;
use Subsession\Files\Exceptions\FilePermissionException;
use Subsession\Files\File;
use Subsession\Files\Internal\FileContent;

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
class FileReader
{
    /**
     * Read a file's content
     *
     * @param File $file File to read from
     *
     * @static
     * @access public
     * @throws FilePermissionException if it cannot read from file
     * @return FileContent
     */
    public static function read(File $file)
    {
        if (!file_exists($file->getFullName())) {
            throw new FileNotFoundException("File not found");
        }

        if (!is_readable($file->getFullName())) {
            throw new FilePermissionException("File is not readable");
        }

        $content = file_get_contents($file->getFullName());

        if (!$content) {
            //
        }

        return new FileContent($content);
    }
}
