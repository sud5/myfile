<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Availability password - Settings file
 *
 * @package    availability_password
 * @copyright  2016 Davo Smith, Synergy Learning UK on behalf of Alexander Bias, Ulm University <alexander.bias@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
      $settings->add(new admin_setting_configtext('availability_enrol/coupon1', 
          get_string('coupon1', 'availability_enrol'), get_string('coupon1descp', 'availability_enrol'), "", PARAM_TEXT, 12));
      $settings->add(new admin_setting_configtext('availability_enrol/coupon2', 
          get_string('coupon2', 'availability_enrol'), get_string('coupon2descp', 'availability_enrol'), "", PARAM_TEXT, 12));
      
}