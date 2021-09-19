<?php 

namespace Sonnys\Application;

class Database {

  private static $pdo_objects;

  /**
   * @param bool
   * @return object
   * Return a PDO instance
   */
  public static function PDOCreate($cache = TRUE) {




    // Parse INI file with sections
   // $ini_array = parse_ini_file(\INI_PATH, true);
/*
    if ($cache) {
      if (isset(self::$pdo_objects[$uri])) {
        self::$pdo_objects[$uri]['count']++;
        return self::$pdo_objects[$uri]['dbh'];
      }

      self::$pdo_objects[$uri]['count'] = 1;
    }

    // Format the DSN string to match how the PDO driver expects the data
    $dsn = '';
    $dbtype = $ini_array['third_section']['mysql_settings']['scheme'];
    $server = $ini_array['third_section']['mysql_settings']['host'];
    $port = $ini_array['third_section']['mysql_settings']['port'];
    $dbname = $ini_array['third_section']['mysql_settings']['dbname'];

    switch (strtolower($dbtype)) {
      case 'mysql':
        $dsn = 'mysql:host='.$server;
        $dsn .= ';port=' . $port;

        if (!empty($dbname)) {
          $dsn .= ';dbname='.$dbname; 
        }
        $dsn .= ';charset=utf8';

        break;
      default:
        throw new Exception('Unknown database type: '.$uri);
        break;
    }
    syslog(LOG_INFO, sprintf('[%s] creating PDO with DSN: %s', __CLASS__, $dsn));

    // User and Password Credentials
    $user = $ini_array['third_section']['mysql_settings']['user'];
    $pass = $ini_array['third_section']['mysql_settings']['pass'];
*/
    $db = null; /*
    $db = new \PDO($dsn, $user, $pass );

    if ($cache) {
      self::$pdo_objects[$uri]['dbh'] = $db; 
    }

    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    // Execute post-creation SQL
    switch (strtolower($dbtype)) {
      default:
      case 'mysql':
      $db->prepare("set names 'UTF8'")->execute();
      break;
    } */
    return $db; 
  }
}