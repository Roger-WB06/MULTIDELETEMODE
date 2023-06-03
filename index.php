<?php
include("lib/config.php");
include("lib/db_connect.php");
include("class/user/user_db.php");

$set_page_title = "User List";
$user_db = new user_db();

$flag = isset($_POST['flag']) ? $_POST['flag'] : '';

$userLists = $user_db->usersList();

if($flag == 'delflag')
{
    $userId = explode(',',$_POST['recid']);
    for($i=0; $i<count($userId);$i++)
    {
        $user_db->DelUser($userId[$i]);
    }
    header('location: index.php');
    exit;
}



include("templates/indexBody.php")
?>