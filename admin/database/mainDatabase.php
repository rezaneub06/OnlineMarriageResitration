<?php
    class DataBaseConnection
    {
        public static function getMysqlConnection()
        {
            try{
                $conn=new PDO("mysql:host=localhost;dbname=onlinemarriage","root","");
                 return $conn;
            }
            catch(Exception $e)
            {
                echo $e->getMessage();
            }
        }
    }
?>