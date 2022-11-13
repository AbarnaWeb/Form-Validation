<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<style>
   *{
text-align: center;
background:yellow;
   } 
.table{
    text-align: center;
}
    </style>
<body>
    <h1>Registration Form</h1>
  
    <table border="solid">
        <form action="get.php" method="POST">
            <tr>
                <th><label for="fname">First name</label></th>
                <td><input type="text" id="fname" name="fname" placeholder="Enter your firstname" size="30" required></td>
            </tr>
            <tr>
                <th><label for="lname">Last name</label></th>
                <td><input type="text" id="lname" name="lname" placeholder="Enter your lastname"  size="30" required></td>
            </tr>
            <tr>
            <th>
                <label for="email">Email</label></th>
                <td><input type="text" id="email" name="email" placeholder="Enter your email" size="30" required></td>
            </tr>
            <tr>
                <th><label for="pwd">Password</label></th>
                <td><input type="password" id="pwd" name="pwd" placeholder="Enter your password"  size="30" required></td>
            </tr>
            <tr>
                <th><label for="gender">Gender</th>
                <td><input type="radio" id="gender" name="gender">Male
                <input type="radio" id="gender" name="gender">Female
                <input type="radio" id="gender" name="gender">Others</td>
            </tr>
            <!-- <tr>
                <th><label for="gender">Gender</th>
                <td><select id="gender"><option value="male">Male</option>
                <option value="female">Female</option> </td>
            </tr> -->
            <tr>
                <th><label for="address">Address</th>
                <td><textarea id="address" name="address"></textarea></td>
            </tr>
            <tr>
                <th><label for="hobbies">Habbies</th>
                <td><input type="checkbox" id="sing" name="sing" value="sing">Singing
                <input type="checkbox" id="reading" name="reading" value="reading">Books Reading
                <input type="checkbox" id="draw" name="draw" value="draw">Drawing
                <input type="checkbox" id="cook" name="cook" value="cook">Cooking</td> 
            </tr>
            <tr>
                <th><label for="num">Phone No</label></th>
                <td><input type="num" id="num"  pattern="[0-9]{10}" required></td>
            </tr>
            <tr>
                <th><td><input type="submit" value="Submit" required></th></td>    
            </tr>
        </form>
    </table>

   
</body>

</html>
<!-- npx create-react-app my-app
cd my-app
npm start -->

