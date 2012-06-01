<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
require_once("env.inc.php");
date_default_timezone_set('Asia/Shanghai');

global $Query_Times,$SET,$cfg,$time_Ls,$LIB;

class lib {
    public function cls_getsettings() {
        global $SET,$cfg;
        require_once("getsettings.php");
    }
    public function cls_reg() {
        require_once("registercheck.php");
    }
    public function cls_dbaccess() {
        require_once("db.php");
    }
    public function stdfunc() {
        global $pri, $cfg;
        require_once("standardfunc.php");
        require_once("gravatar.php");
        require_once("privilege.inc.php");
    }
    public function cls_compile() {
        require_once("compobj.php");
    }
    public function cls_dbctrl() {
        require_once("dbcontrol.php");
    }
    public function cls_sendmail() {
        require_once("sendmail.inc.php");
    }
    public function cls_usersquare() {
        require_once("usersquare.inc.php");
    }
    public function func_socket() {
        require_once("socket.php");
    }
    public function get_userinfo($uid) {
        require_once("getuserinfo.php");
    }
    public function usersquare($uid) {
        require_once("usersquare.inc.php");
    }
    public function sendverfymail($uid) {
        global $SET;
        require_once("sendverfy.inc.php");
    }
    public function getsubgroup($p,$gid) {
        global $SET;
        require("getsubgroup.inc.php");
        return $g;
    }
    public function hlighter() {
        global $SET;
        require("hlighter.inc.php");
    }
    public function editor($edname) {
        global $SET;
        require("editor.inc.php");
    }
    public function tradsimp() {
        global $SET;
        require("tradsimp.inc.php");
    }
    public function htmldom() {
        global $SET;
        require("simple_html_dom.php");
    }
}

$Query_Times=0;

$LIB=new lib;
$LIB->stdfunc();
if ($DBT==1) {
    $LIB->cls_database();
} else {
    $LIB->cls_dbaccess();
}
$LIB->cls_usersquare();


$time_Ls=gettime();

require_once("string.inc.php");

?>