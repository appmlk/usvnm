<?php
/**
 * Class with usefull static method for console.
 *
 * @author Team USVN <contact@usvn.info>
 * @link http://www.usvn.info
 * @license http://www.cecill.info/licences/Licence_CeCILL_V2-en.txt CeCILL V2
 * @copyright Copyright 2007, Team USVN
 * @since 0.5
 * @package client
 * @subpackage console
 *
 * This software has been written at EPITECH <http://www.epitech.net>
 * EPITECH, European Institute of Technology, Paris - FRANCE -
 * This project has been realised as part of
 * end of studies project.
 *
 * $Id: ConsoleUtilsTest.php 1188 2007-10-06 12:03:17Z crivis_s $
 */
// Call USVN_ConsoleUtilsTest::main() if this source file is executed directly.
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "USVN_ConsoleUtilsTest::main");
}

require_once "PHPUnit/Framework/TestCase.php";
require_once "PHPUnit/Framework/TestSuite.php";

require_once "library/USVN/autoload.php";

/**
 * Test class for USVN_ConsoleUtils.
 * Generated by PHPUnit_Util_Skeleton on 2007-04-06 at 14:40:03.
 */
class USVN_ConsoleUtilsTest extends PHPUnit_Framework_TestCase {
    /**
     * Runs the test methods of this class.
     *
     * @access public
     * @static
     */
    public static function main() {
        require_once "PHPUnit/TextUI/TestRunner.php";

        $suite  = new PHPUnit_Framework_TestSuite("USVN_ConsoleUtilsTest");
        $result = PHPUnit_TextUI_TestRunner::run($suite);
    }

    public function testRunCmdCaptureMessage() {
		if (!(substr(php_uname(), 0, 7) == "Windows")) {
			$this->assertEquals("test\n", USVN_ConsoleUtils::runCmdCaptureMessage("echo test", $return));
			$this->assertEquals(0, $return);
		}
    }

    public function testRunCmd() {
		if (!(substr(php_uname(), 0, 7) == "Windows")) {
			$this->assertEquals(0, USVN_ConsoleUtils::runCmd("ls"));
			$this->assertEquals(1, USVN_ConsoleUtils::runCmd("test 1 = 2"));
		}
    }
}

// Call USVN_ConsoleUtilsTest::main() if this source file is executed directly.
if (PHPUnit_MAIN_METHOD == "USVN_ConsoleUtilsTest::main") {
    USVN_ConsoleUtilsTest::main();
}
?>
