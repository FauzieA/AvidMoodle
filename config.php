<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'dpg-d0v5l7h5pdvs7384rqu0-a';
$CFG->dbname    = 'avid_db';
$CFG->dbuser    = 'avid_db_user';
$CFG->dbpass    = '9uPn14QC4R7KXtwbRUUPHyggX3Q0DMGP';
$CFG->sslproxy  = true;
$CFG->prefix    = 'mdl_';

$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 5432,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'https://avidmoodle.onrender.com';
$CFG->dataroot  = '/var/www/moodledata';
$CFG->dirroot   = '/opt/render/project/src';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

@error_reporting(E_ALL | E_STRICT);
@ini_set('display_errors', '1');
$CFG->debug = (E_ALL | E_STRICT);
$CFG->debugdisplay = 1;
