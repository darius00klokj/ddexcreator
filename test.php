<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author darius
 */

include 'autoload.php';
use DDEX\DDEXSFTP;
//
$sftp = new DDEXSFTP('sftp-europe.soundrepublica.com', 'chillhopmusic', 'c2f2856GTGSu4i');
//var_dump($sftp);