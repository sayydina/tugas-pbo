<?php

class dbController
{

    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'sekolah';
    private $koneksi;

    public function __construct()
    {
        $this->koneksi = $this-> koneksiDB();
    }

    public function koneksiDB()
    {
        $koneksi = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        return $koneksi;
    }

    public function getALL($sql)
    {
        $result = mysqli_query($this->koneksi, $sql);
        while ($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        return $data;
    }

    public function getITEM($sql)
    {
        $result = mysqli_query($his->koneksi, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function rowCount($sql)
    {
        $result = mysqli_query($this->koneksi, $sql);
        $count = mysqli_num_rows($result);
    }

    public function runSQL()
    {
        $result = mysqli_query($this->koneksi, $sql);
    }
    
    public function pesan ($text = '')
    {
        echo $text;
    }
}