<?php
include("include/header.php")
?>

<div class="container_fluid">
    <table>
        <thead>
            <tr>
                <th>
                    <input type="checkbox" name="alldel" id="alldel">
                </th>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            if($userLists !== 0)
            {
                $i=0;
                foreach($userLists as $userList)
                {
            ?>
            <tr>
                <td>
                    <input type="checkbox" id="<?=$i?>" value="<?= $userList['id'];?>">
                </td>
                <td><?= $userList['id'];?></td>
                <td><?= $userList['name'];?></td>
                <td><?= $userList['email'];?></td>
            </tr>
            <?php
            $i++;
            }
            }
            ?>
        </tbody>
    </table>
    <form id="delForm" name="delForm" method="post" action="">
        <input type="hidden" name="rowperpage" id="rowperpage" value="<?=count($userLists);?>" />
        <input type="hidden" value="delflag" id="delFlag" name="flag" />
        <input type="hidden" name="recid" id="recid">
        <a href="javascript:void(0)" id="delBtn">Delete</a>
    </form>
</div>