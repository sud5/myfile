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


require_once($CFG->dirroot . '/mod/quiz/backup/moodle2/restore_mod_quiz_access_subplugin.class.php');

defined('MOODLE_INTERNAL') || die();


/**
 * Restore code for the quizaccess_reattemptchecker plugin.
 * @package   quizaccess_reattemptchecker
 * @copyright 2015 Amir Shurrab
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
class restore_quizaccess_reattemptchecker_subplugin extends restore_mod_quiz_access_subplugin {

    protected function define_quiz_subplugin_structure() {

        $paths = array();

        $elename = $this->get_namefor('');
        $elepath = $this->get_pathfor('/quizaccess_reattemptchecker');
        $paths[] = new restore_path_element($elename, $elepath);

        return $paths;
    }

    /**
     * Processes the quizaccess_reattemptchecker element, if it is in the file.
     * @param array $data the data read from the XML file.
     */
    public function process_quizaccess_reattemptchecker($data) {
        global $DB;

        $data = (object)$data;
        $data->quizid = $this->get_new_parentid('quiz');
        $DB->insert_record('quizaccess_reattemptchecker', $data);
    }
}
