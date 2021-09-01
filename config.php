<?php


class Connect
{
    private $db;

    public function __construct($dsn ="mysql:host=localhost;dbname=krzysztofpa_api", $username = "root", $password = "root")
    {

        $this->db = new PDO($dsn, $username, $password, '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

}