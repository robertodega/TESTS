<?php

    namespace app\DB;

    use app\db\DbPdo;
    use Exception;
    use InvalidArgumentException;
    use PDOException;

    class DbFactory{                                                                            //  classe di tipo Factory
        public static function create(array $options)
        {
            if(!array_key_exists('charset',$options)){$options['charset'] = 'utf8';}
            if(!array_key_exists('dsn',$options)){                                              //  costruisce il dsn (se non già impostato) in base al tipo di driver
                if(!array_key_exists('driver',$options)){                                       //  check presenza parametro 'driver' in file di configurazione db
                    throw new InvalidArgumentException("nessun driver predefinito");
                }

                $dsn = "";
                switch($options["driver"]){
                    case'mysql':
                    case'oracle':
                    case'mssql':
                        $dsn = $options["driver"].":host=".$options["host"];
                        $dsn .= ";dbname=".$options["database"].";charset=".$options["charset"];
                        break;
                    case'sqllite':
                        $dsn = "sqllite:".$options["database"];
                        break;
                    default:
                        throw new InvalidArgumentException("driver non impostato o sconosciuto");
                }
                $options["dsn"] = $dsn;
            }

            return DbPdo::getInstance($options);

        }
    }