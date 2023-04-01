<?php
include 'menus.php';
?>
<form action="#" method="post">
<!--    Create Input for Page Title-->
    <label for="pageTitle">Page Title</label>
    <input type="text" name="pageTitle" id="pageTitle" placeholder="Title Goes Here">
    <br>
    <br>
<!--    Create a textarea for the page content-->
    <label for="pageContent">Content</label>
    <textarea name="pageContent" id="pageContent" placeholder="Your Content Here..."></textarea>
<!--    Create a submit Button-->
    <input type="submit" name="addPage" value="Add">
</form>

<table>
    <thead>
    <tr>
        <th>
            Page Title
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
    <tr>
        <td>Hello World</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <tr>
        <td>Hello World</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <tr>
        <td>Hello World</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <tr>
        <td>Hello World</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    </tbody>
</table>
<?php
include 'footer.php';
?>