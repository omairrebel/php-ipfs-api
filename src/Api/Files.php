<?php

declare(strict_types=1);

/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <https://github.com/digitalkaoz/php-ipfs>
 */

namespace IPFS\Api;

use IPFS\Annotation\Api as Endpoint;
use IPFS\Command\Command;

/**
 * @author Robert Schönthal <robert.schoenthal@gmail.com>
 * @autogenerated
 * @codeCoverageIgnore
 */
final class Files implements Api
{
    /**
     * Copy files into mfs.
     *
     * @Endpoint(primary=false, name="files:cp")
     *
     * @param string $arg  source object to copy
     * @param string $arg1 destination to copy object to
     *
     * @return Command
     */
    public function cp(string $arg, string $arg1): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Flush a given path's data to disk.
     *
     * @Endpoint(primary=false, name="files:flush")
     *
     * @param string $arg path to flush
     *
     * @return Command
     */
    public function flush(string $arg = null): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * List directories.
     *
     * @Endpoint(primary=false, name="files:ls")
     *
     * @param string $arg path to show listing for
     * @param bool   $l   use long listing format
     *
     * @return Command
     */
    public function ls(string $arg = null, bool $l = null): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Make directories.
     *
     * @Endpoint(primary=false, name="files:mkdir")
     *
     * @param string $arg     path to dir to make
     * @param bool   $parents no error if existing, make parent directories as needed
     *
     * @return Command
     */
    public function mkdir(string $arg, bool $parents = null): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Move files.
     *
     * @Endpoint(primary=false, name="files:mv")
     *
     * @param string $arg  source file to move
     * @param string $arg1 destination path for file to be moved to
     *
     * @return Command
     */
    public function mv(string $arg, string $arg1): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Read a file in a given mfs.
     *
     * @Endpoint(primary=false, name="files:read")
     *
     * @param string $arg    path to file to be read
     * @param int    $offset byte offset to begin reading from
     * @param int    $count  maximum number of bytes to read
     *
     * @return Command
     */
    public function read(string $arg, int $offset = 0, int $count = 0): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Remove a file.
     *
     * @Endpoint(primary=false, name="files:rm")
     *
     * @param string $arg       file to remove
     * @param bool   $recursive recursively remove directories
     *
     * @return Command
     */
    public function rm(string $arg, bool $recursive = null): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Display file status.
     *
     * @Endpoint(primary=false, name="files:stat")
     *
     * @param string $arg    path to node to stat
     * @param string $format print statistics in given format
     * @param bool   $hash   print only hash
     * @param bool   $size   print only size
     *
     * @return Command
     */
    public function stat(string $arg, string $format = null, bool $hash = null, bool $size = null): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }

    /**
     * Write to a mutable file in a given filesystem.
     *
     * @Endpoint(primary=false, name="files:write")
     *
     * @param string $arg      path to write to
     * @param string $file     data to write
     * @param int    $offset   byte offset to begin writing at
     * @param bool   $create   create the file if it does not exist
     * @param bool   $truncate truncate the file to size zero before writing
     * @param int    $count    maximum number of bytes to read
     *
     * @return Command
     */
    public function write(string $arg, string $file, int $offset = 0, bool $create = null, bool $truncate = null, int $count = 0): Command
    {
        return new Command(__METHOD__, get_defined_vars());
    }
}