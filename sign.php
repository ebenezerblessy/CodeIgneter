<!DOCTYPE html>
<html>
    <head>
        <title>Your Registration Form</title>
    </head>
        <body>
            <?php
            if (isset($status)){
                echo $status;
                echo '<br>'.$test;
            }
            if (isset($msg)) {
                echo '<h2>'.$msg.'<h2>';
            }
            ?>
            <form action="<? base_url('demo/savedata/') ?>" method="post">
           <table cellspacing="20">
            <tr>
                <td>name</td>
                <td><input type="text" name="stname"></td>
            </tr>
            <tr>
                <td>mail</td>
                <td><td input type="mail" name="stmail"></td>
            </tr>
            <tr>
                <td>mobile</td>
                <td><input type="number" name="stnumber"></input>
            </tr>
                <td><input type="submit" name="Register" value="sign">
                <a href="<?=base_url('demo/fetchdata')?>"> View Record</a>
                </td></tr>
            </table>
        </body>
</html>