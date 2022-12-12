<?php 
$name ="";
$email ="";
$groupnumber ="";
$classdetails ="";
$gender = "";
$courses ="";
$agree = "";

$nameError = "";
$emailError = "";
$genderError= "";
$agreeError = "";
//

if(isset($_REQUEST["submitKey"]))
{

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameerr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            echo "<font color=red>" .$nameError . "</font>" . "<br>";
        }
    }
//
    if(!empty($_REQUEST["email"])){
        $email = test_input($_REQUEST["email"]). "</br>";
     } else{
          $emailError = "The Email is required"; 
          echo "<font color=red>" .$emailError . "</font>" . "<br>";
     }
//
     if(!empty($_REQUEST["groupnumber"])){
        $groupnumber = test_input($_REQUEST["groupnumber"]). "</br>";
     } else{
          $groupnumber = " ";  
     }
//
     if(!empty($_REQUEST["classdetails"])){
        $classdetails = test_input($_REQUEST["classdetails"]). "</br>";
     } else{
         $classdetails = " ";  
     }
// 
     if(!empty($_REQUEST["gender"])){
        $gender = test_input($_REQUEST["gender"]). "</br>";
     } else{
          $genderError = "The Gender is required";  
     }
// 
     if(!empty($_REQUEST["courses"])){
        $courses = test_input($_REQUEST["courses"]). "</br>";
     } else{
          $coursesError = " ";  
     }
//agree
     if(!empty($_REQUEST["agree"]))
     {
       $agree = test_input($_REQUEST["agree"]). "</br>";
     } else
     {
          $agreeError =  "Please Agree";  
          exit();
     }
}
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
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
                            <input size="10" type="text" name="name"  id="name" />
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
                            <input size="10"  type="email" name="email" id="email"  />
                            <span class="error"><?php echo $emailError; ?></span>
                        </td>
                    </tr>

                    <tr>
                       <td>
                            <label>
                              Your Group Number
                            </label>
                       </td>
                        <td> 
                            <input type="number" name="groupnumber" >
                        </td>
                    </tr>

                    <tr>
                       <td>
                            <label>
                             Class details
                            </label>
                       </td>

                        <td>
                         <textarea  name="classdetails"  placeholder= "Please Fill Out This Filed" style="width:200px; height:100px;"> 
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
                            <input type="radio" name="gender" value="Female" /> Female
                            <input type="radio" name="gender" value="Male" /> Male
                            <span style="color:red;"> *</span>
                            <span class="error"><?php echo $genderError; ?></span>
                       </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Select Courses</label>
                        </td>
                        <td>
                            <select name="courses"  id="courses" multiple>
                                <option value="select" disabled selected>----------Select----------</option>
                                <option value="PHP">PHP</option>
                                <option value="HTML">HTML</option>
                                <option value="JavaScript">JavaScript</option>
                                <option value="MYSQL">EnglanMYSQLd</option>
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

                </tbody>

              </table>
              <?php
echo "<h2> Your given values as: </h2>";

echo "Name: ".$name;
echo "E-mail: ".$email;
echo "Group #: ".$groupnumber;
echo "Class details: ".$classdetails;
echo "Gender: ".$gender;
echo "Your courses are: ".$courses;
?>
        </body>
    </html>