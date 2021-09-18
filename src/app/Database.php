<?php 
class Database {
  public static function PDOCreate( $uri, $cache = true )
  {
        if ($cache) {
            if (isset(self::$pdo_objects[$uri])) {
                self::$pdo_objects[$uri]['count']++;
                return self::$pdo_objects[$uri]['dbh'];
            }

            self::$pdo_objects[$uri]['count'] = 1;
        }

        $args = parse_url($uri);

        $dbtype = $args['scheme'];
        $server = $args['host'];
        $port = null;
        $user = $args['user'];
        $pass = $args['pass'];
        $database = $args['path'];

        while ($database[0] == '/')
          $database = substr($database,1);
          $db = null;

          /*
           * Here we will format the DSN string to match
           * how the PDO driver expects the data
           */

        $dsn = '';

        switch (strtolower($dbtype)) {
            case 'mysql':

              $dsn = 'mysql:host='.$server;

              //if( ! empty($port) )
                $dsn .= ';port=3307'; // .$port;

              if( ! empty($database) )
                $dsn .= ';dbname='.$database;

              $dsn .= ';charset=utf8';

                break;
      default:
        throw new Exception('Unknown database type: '.$uri);
        break;
        }



        //echo "\nCreating PDO with DSN: $dsn \n\n";

         $db = new PDO( $dsn, $user, $pass );


        if ($cache)
            self::$pdo_objects[$uri]['dbh'] = $db;

      $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


      /*
      * Execute post-creation SQL
      */
      switch (strtolower($dbtype)) {
           case 'mysql':
            $db->prepare("set names 'UTF8'")->execute();
            break;
      }


        return $db;
    }
}
