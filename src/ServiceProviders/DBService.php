<?php
/**
 * Class DBService
 *
 * @package  ${NAMESPACE}
 * @author   canngo
 *
 */

namespace Est\TodoApp\ServiceProviders;

class DBService extends \SQLite3
{
    function __construct($dbPath)
    {
        //echo $dbPath;
        $ret = $this->open($dbPath);

        // if(!$ret){
        //     echo $this->lastErrorMsg();
        // } else {
        //     echo "Table created successfully\n";
        // }
    }

    public function __destruct()
    {
        $this->close();
    }


}
