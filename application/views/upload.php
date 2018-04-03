<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php echo form_open_multipart('MainController/save'); ?>
    <table class="table">
        <tr>
            <td>Titlu</td>
            <td><?php echo form_input('title');?></td>
        </tr>
        <tr>
            <td>Imagine</td>
            <td><?php echo form_upload('poza');?></td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo form_submit('submit','Save','class="btn btn-primary"')?></td>
        </tr>
    </table>
</body>
</html>


