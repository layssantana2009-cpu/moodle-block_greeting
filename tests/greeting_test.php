<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

namespace block_greeting;

use advanced_testcase;

/**
 * PHPUnit tests for the greeting block.
 *
 * @package    block_greeting
 * @category   test
 * @copyright  2026
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @covers     \block_greeting
 * @covers     \block_greeting\local\greeting_text
 */
final class greeting_test extends advanced_testcase {
    /**
     * Test that the block exposes the expected format and language-driven greeting.
     */
    public function test_application_and_message(): void {
        $this->resetAfterTest();

        $block = new \block_greeting();

        $this->assertSame(['all' => true], $block->applicable_formats());
        $this->assertSame(get_string('greeting', 'block_greeting'), \block_greeting\local\greeting_text::get_message());
    }
}
