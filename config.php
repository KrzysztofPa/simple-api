<?php


class Connect extends \PDO
{
    private $db = null;

    public function __construct($dsn ="mysql:host=localhost;dbname=krzysztofpa_api", $username = "root", $password = "root", $options = [])
    {
        parent::__construct($dsn, $username, $password, $options);

        $this->db = new PDO($dsn, $username, $password, []);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

}