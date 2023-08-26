<html>
    <head>
        <title>Display record</title>
        <style>
            .result,.result td, .result th{
                border: 1px solid black;
                border-collapse: collapse;
                padding: 7px
                margin; auto;
                background-color: lightblue;
            }
            .result th{
                background-color: lightskyblue;
            }
        </style>
            
    </head>
    <body>
    <a href="<?=base_url('demo/myproject')?>">Go to demo</a>
    <?php
    if (isset($data)){
    
        ?>
        <?php
    }
    ?>
    <form action="<?= base_url('demo/update')?>"method="post">
        <table cellspacing="20">
            <tr>
                <td>Id</td>
                <td><input name="stid" value="<?=$data[0]->id?>"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input name="stname" value="<?=$data[0]->student_name?>"></td>
                <td></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input name="stemail" value="<?=$data[0]->student_email?>"></td>
                <td></td>
            </tr>
            <tr>
                <td>mobile</td>
                <td><input name="stmobile" value="<?=$data[0]->student_mobile?>"></td>
                <td></td>
            </tr>
        </table>
    </form>
        <table class="result">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
             </tr>
        <?php
        if(isset($table)){
            foreach($table as $row){
                ?>
                <tr>
                 <td><a href="<?=base_url('demo/edit/')?>.$row->id>Edit</a></td>   
                <td><?=$row->id?></td>
                <td><?=$row->student_name?></td>
                <td><?=$row->student_email?></td>
                <td><?=$row->student_mobile?></td>
            </tr>
            <?php
            }
        }
        ?>
        </table>
    </body>
</html>