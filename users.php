<?php
include 'menus.php';
?>
    <form action="actions.php" method="post">
        <!--    Create Input for Username-->
        <div>
            <?php
            if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            }
            ?>
        </div>
        <input type="hidden" name="userId" value="<?php valueOfUserId();?>">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Username Goes Here" <?php valueOfUsername();?>>
        <br>
        <br>
        <!--    Create a textarea for the page content-->
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password here..." <?php valueOfPassword();?>>
        <!--    Create a submit Button-->
        <input type="submit" <?php valueofSubmit();?>>
    </form>

    <table>
        <thead>
        <tr>
            <th>
                Username
            </th>
            <th>
                Action_Edit
            </th>
            <th>
                Action_Delete
            </th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = "select * from users";
        $query = mysqli_query($db, $sql);
        while ($users = mysqli_fetch_array($query)):
            ?>
            <tr>
                <td><?=$users['username']?></td>
                <td><a href="users.php?userId=<?=$users['userId']?>">Edit</a></td>
                <td><a href="actions.php?deleteUser=<?=$users['userId']?>">Delete</a></td>
            </tr>
        <?php
        endwhile;
        ?>
        </tbody>
    </table>
<?php
include 'footer.php';
?>