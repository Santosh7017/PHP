<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Student Registration Form</h1>
    <form >
        <table align="center" >
            <tr>
                <td>Firstname</td>
            </tr>
            <tr>
                <td><input type="text" name="firstname" placeholder="Firstname"/></td>
            </tr>
            <tr>
                <td>Middlename</td>
            </tr>
            <tr>
                <td><input type="text" name="middlename" placeholder="Middlename"/></td>
            </tr>
            <tr>
                <td>Lastname</td>
            </tr>
            <tr>
                <td><input type="text" name="lastname" placeholder="Lastname"/></td>
            </tr>
            <tr>
                <td>course</td>
                <td>
                    <select name="course" placeholder="course" >
                        <option>cse</option>
                        <option>btech</option>
                        <option>bca</option>
                        <option>BBA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>gender:</label></td>
                <td>
                <input type="radio" name="gender"/>male
                <input type="radio" name="gender"/>female
                <input type="radio" name="gender"/>others</td>
            </tr>
            <tr>
                <td>phone:</td></br>
                <td>+91<input type="number" name="phone no."/></td>
            </tr>
            <tr>
                <td>current address</td></br>
                <td><textarea rows="5" cols="24" name="address"></textarea></td>
            </tr>
            <tr>
                <td>email</td><br>
                <td><input type="email" placeholder="enter email" name="email"/></td>
            </tr>
            <tr>
                <td>password</td><br>
                <td><input type="password" placeholder="enter password" name="password"/></td>
            </tr>
            <tr>
                <td>re-type password</td><br>
                <td><input type="password" placeholder="retype password"/></td>
            </tr>
            <tr>
                <td>Which Game do you play</td><br>
                <td><input type="checkbox" name="checkbox" /> <label>Game 1</label></td>
                
                <td><input type="checkbox" name="checkbox"/> <label>Game 2</label></td>
            </tr>
            <tr>
                
                <td><input type="file" name="file"/></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit"/>
                 <input type="reset" value="clear"/></td>
                 
            </tr> 
        </table>
    </form>
</body>
</html>
