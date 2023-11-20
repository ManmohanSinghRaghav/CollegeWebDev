<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        body, .prof, form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
            font-size: 20px;
        }
        body{
            height: max-content;
            width: 100vw;
            overflow: hidden;
        }
        .prof{
            width: 70vw;
            height: 20vh;
            padding: 20px;
            background-color: lightgreen;
            color: green;
            border: 5px solid green;
        }
        form{
            width: 70vw;
            height: max-content;
            margin-top: 10px;
            padding: 20px;
            background-color: lightgreen;
            color: green;
            border: 5px solid green; 
        }
        input{
            margin: 5px 0 10px 0;
            height: 30px;
            width: 300px;
            padding-left: 10px;
        }
    </style>
</head>
<body>

<div class="prof">
<span>
 <?php
class Student{
    public $id;
    public $name;
    public $per;
}
$S = new Student();
if (($_POST['s_id']=='')||($_POST['s_name']=='')||($_POST['s_per']=='')){
    $S->id = 2315510120;
    $S->name = 'Manmohan Singh';
    $S->per = 100;
} else {
    $S->id = $_POST['s_id'];
    $S->name = $_POST['s_name'];
    $S->per = $_POST['s_per'];
}

print('<div> Student Id         : '. $S->id.'</div>');
print('<div> Student Name       : '. $S->name.'</div>');
print('<div> Student Percentage : '. $S->per.'%</div>');

?>
</span>
</div>

<form method="post">
    <label for="s_id">- Student Id -</label>
    <input type="text" name="s_id" id="s_id" class="s_id" pl3aceholder="Enter Id Here . . . ">
    <label for="s_id">- Student Name -</label>
    <input type="text" name="s_name" id="s_name" class="s_name" placeholder="Enter Name . . . ">
    <label for="s_id">- Student Percentage -</label>
    <input type="text" name="s_per" id="s_per" class="s_per" placeholder="Enter Percentage . . . ">
    <input type="submit" value="Change">
</form>

    <button id="btn" onclick="menu()"></button>
    <div id="nav">
    <ul>
        <li><a href="EditPro.html">Change Profile</a></li>
        <li><a href="School.html">School</a></li>
        <li><a href="College.html">College</a></li>
        <li><a href="Job.html">Job</a></li>
        <li><a href="Hobby.html">Hobby</a></li>
    </ul>
</div> 
</body></html>