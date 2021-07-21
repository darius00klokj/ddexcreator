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

    /**
     * 
     * @var \Net_SFTP
     */
    private $sftp;

    function __construct($host, $user = '', $password = '', $port = 22) {

        include_once dirname(__FILE__) . '/phpseclib/autoload.php';

        $this->user = $user;
        $this->host = $host;
        $this->password = $password;
        $this->port = $port;

        $this->login();
    }

    /**
     * Logs into the server
     * 
     * @return boolean
     * @throws Exception
     */
    function login() {

        $this->sftp = new \Net_SFTP($this->getHost());
        if (!$this->sftp->login($this->getUser(), $this->getPassword())) {
            throw \Exception('Unable to login to SFTP server.');
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
        return $this->sftp->put($remote_file, $local_file, NET_SFTP_LOCAL_FILE);
    }

    /**
     * Uploads a file to the SFTP server.
     * 
     * @param type $local_file
     * @param type $remote_file
     * @return boolean
     * @throws Exception
     */
    public function read($remote_file) {
        return $this->sftp->stat($remote_file);
    }

    /**
     * Uploads a file to the SFTP server.
     * 
     * @param type $local_file
     * @param type $remote_file
     * @return boolean
     * @throws Exception
     */
    public function delete($remote_file) {
        return $this->sftp->delete($remote_file);
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
