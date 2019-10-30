<?php
 include_once 'Connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        body{
        margin: 0px;
        border: 0px;
    }
    #header
    {
        width: 100%;
        height: 120px;
        background:black;
        color: white;
    }
    #sidebar
    {
        width: 300px;
        height: 400px;
        background:#d32f2f;
        float: left;
    }
    #data
    {
        height: 700px;
        color: black;
        font-size: 25px;

    }
    #AdminLogo
    {
        width: 50px;
        height: 50px;
        border-radius: 50px;

    }
    ul li
    {
         padding: 20px;
         border-bottom: 2px solid grey;
    }
    ul li:hover
    {
        background:#d32f2f;
        color: white;
    }
    #Main
    {
        background-image: url(https://wallpapercave.com/w/wp4038528.jpg);
    }
        table.striped-columns tbody td:nth-of-type(even),
table.striped-columns th:nth-of-type(even){
    background: rgb(235, 227, 209);
}

table.border {
    border-collapse: collapse;
    border-spacing: 0;
}
table.border td,
table.border th {
    border: 1px solid grey;
    padding: 3px;
}

    </style>

</head>

<body>
    
<div id="header">
        <img src="Admin.jpeg" alt="AdminLogo" id="AdminLogo"> <br><h3>THE DOG REGISTRATION KE</h3>
    </div>
    <div id="Main">

    <div id="sidebar">
        <ul> 
            <a href="results.php"><li>View results</li></a>
            <a href="ViewData.php"><li>View Data</li></a>
        </ul>
    </div>
    <div id="data"><br>
        <form action="VetControl.php" method="post">
        <center><h3>Hello Vet Officer</h3></center>
        Enter Dog ID: <input type="text" name="id" required>
        <p> </p>
        <table class="striped-columns border">
    <thead>
        <tr>
            <th>Question</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>Is Enthusiastic?</td>
            <td><input type="radio" value="1" name="enthusiasm"/></td>
            <td><input type="radio" value="2" name="enthusiasm"/></td>
            <td><input type="radio" value="3" name="enthusiasm"/></td>
            <td><input type="radio" value="4" name="enthusiasm"/></td>
            <td><input type="radio" value="5" name="enthusiasm"/></td>
        </tr>
        <tr>
            <td>Is it taken for walks frequently?</td>
            <td><input type="radio" value="1" name="walk"/></td>
            <td><input type="radio" value="2" name="walk"/></td>
            <td><input type="radio" value="3" name="walk"/></td>
            <td><input type="radio" value="4" name="walk"/></td>
            <td><input type="radio" value="5" name="walk"/></td>
        </tr>
        <tr>
            <td>Are vaccines given on Time?</td>
            <td><input type="radio" value="1" name="vaccine"/></td>
            <td><input type="radio" value="2" name="vaccine"/></td>
            <td><input type="radio" value="3" name="vaccine"/></td>
            <td><input type="radio" value="4" name="vaccine"/></td>
            <td><input type="radio" value="5" name="vaccine"/></td>
        </tr>
        <tr>
            <td>Does the dog exercise often?</td>
            <td><input type="radio" value="1" name="exercise"/></td>
            <td><input type="radio" value="2" name="exercise"/></td>
            <td><input type="radio" value="3" name="exercise"/></td>
            <td><input type="radio" value="4" name="exercise"/></td>
            <td><input type="radio" value="5" name="exercise"/></td>
        </tr>

        <tr>
            <td>Is it trained?</td>
            <td><input type="radio" value="1" name="trained"/></td>
            <td><input type="radio" value="2" name="trained"/></td>
            <td><input type="radio" value="3" name="trained"/></td>
            <td><input type="radio" value="4" name="trained"/></td>
            <td><input type="radio" value="5" name="trained"/></td>
        </tr>

         <tr>
            <td>Does the dog interact with others well?</td>
            <td><input type="radio" value="1" name="interacts"/></td>
            <td><input type="radio" value="2" name="interacts"/></td>
            <td><input type="radio" value="3" name="interacts"/></td>
            <td><input type="radio" value="4" name="interacts"/></td>
            <td><input type="radio" value="5" name="interacts"/></td>
        </tr>

        <tr>
            <td>Is the dog healthy?</td>
            <td><input type="radio" value="1" name="healthy"/></td>
            <td><input type="radio" value="2" name="healthy"/></td>
            <td><input type="radio" value="3" name="healthy"/></td>
            <td><input type="radio" value="4" name="healthy"/></td>
            <td><input type="radio" value="5" name="healthy"/></td>
        </tr>

        <tr>
            <td>Is the dog active?</td>
            <td><input type="radio" value="1" name="active"/></td>
            <td><input type="radio" value="2" name="active"/></td>
            <td><input type="radio" value="3" name="active"/></td>
            <td><input type="radio" value="4" name="active"/></td>
            <td><input type="radio" value="5" name="active"/></td>
        </tr>
    </tbody>

</table>
<center><input  type="submit" value="Submit"></center>
</form>


 </div>
 

</div>

</body>

</html>

