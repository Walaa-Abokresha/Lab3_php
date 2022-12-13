<?php 
$name ="";
$mail ="";
$groupnumber ="";
$classdetails ="";
$gender = "";
$courses ="";
$agree = "";

$nameError = "";
$mailError = "";
$genderError= "";
$agreeError = "";


if(isset($_POST["submitKey"]))
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameError = "The name is required";
            echo "<font color=red>" .$nameError . "</font>" . "<br>";
            echo "<br>";
       } else {
           $name = ($_POST["name"]);
       }
   }
//
    if (empty($_POST["mail"])) {
        $mailError = "The email is required";
        echo "<font color=red>" .$mailError . "</font>" . "<br>";
        echo "<br>";
    } else {
    $mail = ($_POST["mail"]);
    }

//
     if(!empty($_POST["groupnumber"])){
        $groupnumber = ($_POST["groupnumber"]). "</br>";}
//
     if(!empty($_POST["classdetails"])){
        $classdetails = ($_POST["classdetails"]). "</br>";}
// 
if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
} else {
    $gender = $_POST["gender"];
}
// 
     if(!empty($_POST["agree"]))
     {
       $agree = test_input($_POST["agree"]). "</br>";
     } else
     {
          $agreeError =  "Please Agree";  
          echo "<font color=red>" .$agreeError . "</font>" . "<br>";
          exit();
     }
}
    function test_input($data) 
    {
        return $data;
    }

?>

<html>
        <head>
            <meta charset="UTF-8"/>
            <title>Registration Form</title>
            <meta name="description" content="CMS ITI "/>
        </head> 
        <body>
              <table class="center">

                <thead style="align-items: center;">
                    <tr>
                        <td style="color:rgb(81, 158, 104);
                        font-weight: bolder;
                        font-size: larger;"> Application name: AAST_BIS class registration</td>
                       
                    </tr>
                    <tr>
                        <td style="background-color:rgba(150, 218, 150, 0.658)">Field Marked with * are compulsory fields </td>
                    
                    </tr>
                </thead>
                <tbody>
                    <form action="<?php $_PHP_SELF ?>" method="post">
                    <tr>
                        <td>
                            <label >
                                <span style="color:red;">*</span>Your Name
                            </label>
                        </td>
                        <td>
                            <input size="10" type="text" name="name"  id="name" value="<?php echo $name;?>" />
                            <span class="error"><?php echo $nameError; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>
                                <span style="color:red;">*</span>Email
                            </label>
                        </td>
                        <td>
                            <input size="10"  type="email" name="mail" id="mail" value="<?php echo $mail;?>" />
                            <span class="error"> <?php echo $mailError; ?></span>

                        </td>
                    </tr>

                    <tr>
                       <td>
                            <label>
                              Your Group Number
                            </label>
                       </td>
                        <td> 
                            <input type="number" name="groupnumber" value="<?php echo $groupnumber;?>" >
                        </td>
                    </tr>

                    <tr>
                       <td>
                            <label>
                             Class details
                            </label>
                       </td>

                        <td>
                         <textarea  name="classdetails"  placeholder= "Please Fill Out This Filed" style="width:200px; height:100px;" value="<?php echo($_POST['classdetails']);?>"> 
                        </textarea>
                        </td>
                    </tr>
                    <tr>

                    <tr>
                        <td>
                            <label>
                                <span style="color:red;">*</span>Gender
                            </label>
                        </td>

                         <td> 
                         <span style="color:red;"> *</span>
                         <input type="radio" name="gender"
                            <?php if (isset($gender) && $gender=="female") echo "checked";?>
                            value="female">Female
                        <input type="radio" name="gender"
                            <?php if (isset($gender) && $gender=="male") echo "checked";?>
                            value="male">Male
                       </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Select Courses</label>
                        </td>
                        <td>
                            <select name="courses[]"  id="courses" multiple size ="4">
                                <option value="select" disabled selected>----------Select----------</option>
                                <option value="PHP">PHP</option>
                                <option value="HTML">HTML</option>
                                <option value="JavaScript">JavaScript</option>
                                <option value="MYSQL">MYSQL</option>
                            </select>
                        </td>
                    </tr>

                    <tr>

                        <td>
                            <input type="checkbox" name="agree" > <span style="color:red;"> *</span>
                            Agree
                            <span class="error"><?php echo $agreeError; ?></span>
    
                        </td>
                    </tr>

                    <tr>
                        <td style="align-items:center">
                            <input type="submit" name="submitKey" value="Submit">
                        </td>
                    </tr>

                </form>
                <?php
        echo"<h1> Your given values are as:</h1>" ;
        echo "Your Name is:".$name;
        echo"<br>";
        echo"Your E-mail is:".$mail;
        echo"<br>";
        echo"Your Group Nmuber:".$groupnumber;
        echo"<br>";
        echo"class details:".$classdetails;
        echo"<br>";
        echo"Gender:".$gender;
        echo"<br>";
        echo"Your Courses:";
        if (!empty($_POST["courses"])) {
            foreach($_POST["courses"] as $courses){
            echo " ".$courses." ";}}

?>

                </tbody>

              </table>

              
        </body>
    </html>
