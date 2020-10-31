<?php
/*
$GLOBALS['BE_MOD']['content']['calendar'] = array
(
    'tables'      => array(
        'tl_kom_course',
        'tl_kom_course_schedule',
    ),
    'table'       => array('Contao\TableWizard', 'importTable'),
    'list'        => array('Contao\ListWizard', 'importList')
);
*/

$GLOBALS['FE_MOD']['courses'] = array(
    'courseschedule' => 'Kommunikatisten\ModuleCourseSchedule',
    'courselist' => 'Kommunikatisten\ModuleCourseList',
);
