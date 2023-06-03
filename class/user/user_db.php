<?php

class user_db extends DB 
{
    public function usersList()
    {
        $sql = "SELECT * FROM `users` WHERE `del_flag` = 'N'";

        $result = $this->execute_query($sql);
        $usersList = array();
        if($this->get_num_rows($result) > 0)
        {
            while($rows = $this->fetch_data($result))
            {
                $usersList[] = $rows;
            }

            return $usersList;
        }
        else
        {
            return 0;
        }
    }

    public function DelUser($user_id)
    {
        $sql = "UPDATE `users` SET `del_flag` = 'Y' WHERE `id` = '$user_id'";

        return $this->execute_query($sql);
    }
}




?>