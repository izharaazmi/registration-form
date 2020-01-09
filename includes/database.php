<?php

// This class is responsible for handling all database related task (MySQLi specific only)
class MysqliDatabase
{
    protected $connection;

    public function __construct($host, $user, $password, $database, $port)
    {
        $this->connection = new Mysqli($host, $user, $password, $database, $port);

        if (!$this->isConnected())
        {
            throw new Exception($this->connection->error, $this->connection->errno);
        }
    }

    public function isConnected()
    {
        return is_object($this->connection) && $this->connection->ping();
    }

    public function query($query)
    {
        return $this->connection->query($query);
    }

    public function escape($text)
    {
        $this->connection->real_escape_string($text);
    }

    public function __destruct()
    {
        if ($this->isConnected())
        {
            $this->connection->close();
        }
    }
}