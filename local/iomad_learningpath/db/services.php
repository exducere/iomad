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
 * Declare web services
 *
 * @package    local_iomadlearninpath
 * @copyright  2018 Howard Miller (howardsmiller@gmail.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

$functions = array(

    'local_iomad_learningpath_activate' => array(
        'classname' => 'local_iomad_learningpath_external',
        'methodname' => 'activate',
        'classpath' => 'local/iomad_learningpath/externallib.php',
        'description' => 'Activates / deactivates learning path',
        'type' => 'write',
        'ajax' => true,
    ),

    'local_iomad_learningpath_getprospectivecourses' => array(
        'classname' => 'local_iomad_learningpath_external',
        'methodname' => 'getprospectivecourses',
        'classpath' => 'local/iomad_learningpath/externallib.php',
        'description' => 'Read set of filtered courses for given company',
        'type' => 'read',
        'ajax' => true,
    ),

    'local_iomad_learningpath_addcourses' => array(
        'classname' => 'local_iomad_learningpath_external',
        'methodname' => 'addcourses',
        'classpath' => 'local/iomad_learningpath/externallib.php',
        'description' => 'Add courses to learning path',
        'type' => 'write',
        'ajax' => true,
    ),

    'local_iomad_learningpath_removecourses' => array(
        'classname' => 'local_iomad_learningpath_external',
        'methodname' => 'removecourses',
        'classpath' => 'local/iomad_learningpath/externallib.php',
        'description' => 'Remove courses from learning path',
        'type' => 'write',
        'ajax' => true,
    ),

    'local_iomad_learningpath_getcourses' => array(
        'classname' => 'local_iomad_learningpath_external',
        'methodname' => 'getcourses',
        'classpath' => 'local/iomad_learningpath/externallib.php',
        'description' => 'Read list of courses for given learning',
        'type' => 'read',
        'ajax' => true,
    ),
);