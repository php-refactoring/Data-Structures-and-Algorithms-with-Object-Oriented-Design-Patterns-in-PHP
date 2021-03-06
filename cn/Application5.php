<?php
/**
 * @copyright Copyright (c) 2005 by Bruno R. Preiss, P.Eng.
 *
 * @author $Author: brpreiss $
 * @version $Id: Application5.php,v 1.5 2005/12/09 01:11:06 brpreiss Exp $
 * @package Opus11
 */

/**
 */
require_once 'Opus11/Algorithms.php';

/**
 * Provides application program number 5.
 *
 * @package Opus11
 */
class Application5
{
    /**
     * Main program.
     *
     * @param array $args Command-line arguments.
     * @return integer Zero on success; non-zero on failure.
     */
    public static function main($args)
    {
        printf("Application program number 5. (word counter)\n");
        $status = 0;
        Algorithms::wordCounter(STDIN, STDOUT);
        return $status;
    }
}

if (realpath($argv[0]) == realpath(__FILE__))
{
    exit(Application5::main(array_slice($argv, 1)));
}
?>
