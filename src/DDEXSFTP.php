<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DDEX;

/**
 * Description of DDEXSFTP
 *
 * @author darius
 */
class DDEXSFTP {

    private $user;
    private $host;
    private $port;
    private $password;
    private $connection;
    private $sftp;

    function __construct($host, $user = '', $password = '', $port = 22) {
        $this->user = $user;
        $this->host = $host;
        $this->password = $password;
        $this->port = $port;
    }

    /**
     * Logs into the server
     * 
     * @return boolean
     * @throws Exception
     */
    function login() {
        
        /**
         * Lets first connect to the host.
         */
        $this->connect();

        /**
         * Now authenticate
         */
        if (!ssh2_auth_password($this->connection, $this->getUser(), $this->getPassword())) {
            throw new Exception("Could not authenticate SFTP.");
        }

        $this->sftp = ssh2_sftp($this->connection);
        if (!$this->sftp) {
            throw new Exception("Could not initialize SFTP subsystem.");
        }
        
        return true;
    }

    /**
     * Connects to the host
     * 
     * @return boolean
     * @throws Exception
     */
    function connect() {
        $this->connection = ssh2_connect($this->getHost(), $this->getPort());
        if (!$this->connection) {
            throw new Exception("Could not connect to {$this->getHost()} on port {$this->getPort()}.");
        }
        
        return true;
    }

    /**
     * Uploads a file to the SFTP server.
     * 
     * @param type $local_file
     * @param type $remote_file
     * @return boolean
     * @throws Exception
     */
    public function uploadFile($local_file, $remote_file) {
        $sftp = $this->sftp;
        $stream = fopen("ssh2.sftp://$sftp$remote_file", 'w');

        if (!$stream) {
            throw new Exception("Could not open file: $remote_file");
        }

        $data_to_send = file_get_contents($local_file);
        if ($data_to_send === false) {
            throw new Exception("Could not open local file: $local_file.");
        }

        if (fwrite($stream, $data_to_send) === false) {
            throw new Exception("Could not send data from file: $local_file.");
        }
        
        fclose($stream);
        
        return true;
    }

    function getUser() {
        return $this->user;
    }

    function getHost() {
        return $this->host;
    }

    function getPassword() {
        return $this->password;
    }

    function setUser($user): void {
        $this->user = $user;
    }

    function setHost($host): void {
        $this->host = $host;
    }

    function setPassword($password): void {
        $this->password = $password;
    }

    function getPort() {
        return $this->port;
    }

    function setPort($port): void {
        $this->port = $port;
    }

}

class SFTPConnection {

    private $connection;
    private $sftp;

    public function __construct($host, $port = 22) {
        $this->connection = @ssh2_connect($host, $port);
        if (!$this->connection)
            throw new Exception("Could not connect to $host on port $port.");
    }

    public function login($username, $password) {
        if (!@ssh2_auth_password($this->connection, $username, $password))
            throw new Exception("Could not authenticate with username $username " .
                            "and password $password.");

        $this->sftp = @ssh2_sftp($this->connection);
        if (!$this->sftp)
            throw new Exception("Could not initialize SFTP subsystem.");
    }

    public function uploadFile($local_file, $remote_file) {
        $sftp = $this->sftp;
        $stream = @fopen("ssh2.sftp://$sftp$remote_file", 'w');

        if (!$stream)
            throw new Exception("Could not open file: $remote_file");

        $data_to_send = @file_get_contents($local_file);
        if ($data_to_send === false)
            throw new Exception("Could not open local file: $local_file.");

        if (@fwrite($stream, $data_to_send) === false)
            throw new Exception("Could not send data from file: $local_file.");

        @fclose($stream);
    }

}
