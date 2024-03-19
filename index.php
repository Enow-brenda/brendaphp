<?php
//All Functions
function triangle($b,$h){
    return (0.5*$b*$h);
}
function calculate($first,$second,$operator){
if($operator==1){
    $result=($first)+($second);
   
}
else if($operator==2){
    $result=($first)-($second);
}
else if($operator==3){
    $result=($first)/($second);
}
if($operator==4){
    $result=($first)*($second);
}
return $result;
}
function calculate_bill($units) {
    $unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.20;
    $unit_cost_fourth = 6.50;

    if($units <= 50) {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $unit_cost_second);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    }
    else {
        $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
    return number_format((float)$bill, 2, '.', '');
}
 $result_str = $result1 = '';
 if (isset($_POST['unit-submit'])) {
 $units = $_POST['units'];
 if (!empty($units)) {
     $result1 = calculate_bill($units);
     $result_str = 'Total amount of ' . $units . ' - ' . $result1;
 }
}
$finaldisplay='';
if(isset($_POST['calculate'])){
    $first=$_POST['first'];
    $second=$_POST['second'];
    $operation=$_POST['operation'];
    if($first==""){
        $first=0;
    } if($second==""){
        $first=0;
    }
    
    $final=calculate($first,$second,$operation);
    $finaldisplay='Result is '. $final;

    
}$display="";
$area="";
$dir="";
if(isset($_POST['vote'])){
    $age=$_POST['age'];
    
    if($age>=21){
        $display="User is Eligible";
    }else{
        $display="User is Not Eligible";
    }
    
}
$grade="";
if(isset($_POST['checkmark'])){
    $marks=$_POST['marks'];
    
    if ($marks>=60)
    {
        $grade = "First Division";
    }
    else if($marks>=45)
    {
        $grade = "Second Division";
    }
    else if($marks>=33)
    {
        $grade = "Third Division";
    }
    else
    {
        $grade = "Fail";
    }

    
}

if(isset($_POST['checkday'])){
    $day=$_POST['day'];
    
    switch ($day) {
        case "1":
            $display= "It is Monday!";
            break;
        case "2":
            $display="It is tuesday!";
            break;
        case "3":
            $display= "It is Wednesday!";
            break;
        case "4":
            $display= "It is Thursday!";
            break;
        case "5":
            $display= "It is Friday!";
            break;
        case "6":
            $display="It is Saturday!";
            break;
        case "7":
            $display= "It is Sunday!";
            break;
        default:
        $display= "Invalid number!";
    }

    
}
if(isset($_POST['check'])){
    $age=$_POST['number'];
    
    if($age>0){
        $dir="Number is Positive";
    }
    else if($age<0){
        $dir="Number is Negative";
    }else if($age==0){
        $dir="Number is 0";
    }
    
}
if(isset($_POST['triangle'])){
    $b=$_POST['base'];
    $h=$_POST['height'];
    $area="Area of triangle :".triangle($b,$h)." m2 ";
    
}
$number="";
if(isset($_GET['submit1'])){
    $number=$_GET['number'];
    
}
 ?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       <div class="heading">
        <p>Brenda's PHP Work</p>
       </div> 
       <div class="body">
            <form id="form1" method="GET" action="index.php">
            <p class="top">Menu</p>
            <div class="element">
            <p>Enter the Number of the Assignment you want to view</p>
            <input type="text" name="number" value="<?php echo $number?>"><input type="submit" name="submit1"> 
            <div class="list">
            <p>1. Program to count 5 to 15 using PHP loop</p>
            <p>2. program to print “Hello World” using echo</p>
            <p>3. program to print “Hello PHP” using variable</p>
            <p>4. program to print a string using echo+variable</p>
            <p>5. program to print two variables in single echo</p>
            <p>6. program to check student grade based on marks</p>
            <p>7. program to show day of the week using switch</p>
            <p>8. factorial program using for loop in php</p>
            <p>9. Factorial program in PHP using recursive function</p>
            <p>10. program to create Chess board in PHP using for loop</p>
            <p>11. Program to create given pattern with * using for loop</p>
            <p>12. program to add two numbers</p>
            <p>13. program to calculate Electricity bill in PHP</p>
            <p>14. simple calculator program in PHP using switch case</p>
            <p>15. Remove specific element by value from an array in PHP</p>
            <p>16. PHP program to check if a person is eligible to vote</p>
            <p>17. PHP program to calculate area of rectangle</p>
            <p>18. PHP program to check whether a number is positive, negative or zero</p>
            <p>19. PHP program to reverse the string</p>
            <p>20. PHP program to find the length of the string</p>
            <p>21. PHP program to count the words in the string</p>
            <p>22. PHP program to convert a string into uppercase</p>
            <p>23. PHP Array to String Conversion (favourite colours chosen by user)</p>
            <p>24. PHP program to  check if an array is a subset of another in PHP?</p>
            </div>
           
            </div>
           
            </form>
            <div class="output">
                <p class="top">Output</p>
                <div class="element">
                    <?php
                    if($number==1){
                        $count = 5;
                        echo "Program to count 5 to 15 using PHP loop:";
                        echo "<br>" ;
                        while($count <= 15)
                        {
                        echo $count;
                        echo "<br>" ;

                        $count++;
                        }
                    }
                    else if($number==2){
                        echo "program to print “Hello World” using echo:";
                        echo "<br>" ;
                        echo "Hello World";
                    }
                    else if($number==3){
                        echo "program to print “Hello PHP” using variable:";
                        echo "<br>" ;
                        $message = "Hello PHP";
                        echo $message;
                    }
                    else if($number==4){
                        echo "program to print a string using echo+variable:";
                        echo "<br>" ;
                        $message = "Welcome to the PHP World";
                        echo $message;
                    }
                    else if($number==5){
                        echo "program to print two variables in single echo:";
                        echo "<br>" ;
                        $message_1 = "Good Morning.";
                        $message_2 = "Have a nice day!";
                        echo $message_1." ". $message_2;
                    }
                    else if($number==6){
                        echo "program to check student grade based on marks:";
                        echo "<br>" ;?>
                        <form action="" method="post">
                            Enter student Mark:<input type="number" name="marks"><input type="submit" name="checkmark">
                        </form>
                        <?php
                       
                       echo "Student grade: $grade";
                           
                    }
                    else if ($number==7){
                        echo "program to show day of the week using switch:";
                        echo "<br>";?>
                        <form action="" method="post">
                            Enter Day Number:<input type="number" name="day"><input type="submit" name="checkday">
                        </form>
                        <?php
                       echo $display;

                        
                    }
                    else if ($number==8){
                        echo "factorial program using for loop in php:";
                        echo "<br>";
                        $num = 3;
                        $factorial = 1;

                        for ($x=$num; $x>=1; $x--)
                        {
                            $factorial = $factorial * $x;
                        }

                            echo "The factorial of $num is $factorial";
                    }
                     else if ($number==9){
                        echo "Factorial program in PHP using recursive function:";
                        echo "<br>";
                        function factorial($number) {

                            if ($number < 2) {
                                return 1;
                            } else {
                                return ($number * factorial($number-1));
                            }
                        }
                        
                        echo factorial(4);
                    }
                    else if ($number==10){
                        echo "program to create Chess board in PHP using for loop:";
                        echo "<br>";?>
                         <table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
                        <?php
                        for($row=1;$row<=8;$row++)
                        {
                            echo "<tr>";
                            for($column=1;$column<=8;$column++)
                            {
                                $total=$row+$column;
                                if($total%2==0)
                                {
                                    echo "<td height=35px width=30px bgcolor=#FFFFFF></td>";
                                }
                                else
                                {
                                    echo "<td height=35px width=30px bgcolor=#000000></td>";
                                }
                            }
                            echo "</tr>";
                        }
                        ?>
                        </table>
                        <?php
                    }
                    else if ($number==11){
                        echo "Program to create given pattern with * using for loop:";
                        echo "<br>";
                        for($row=1;$row<=8;$row++)
                        {
                        for ($star=1;$star<=$row;$star++)
                            {
                            echo "*";
                            }
                        echo "<br>";
                        }
                       
                    }
                    else if ($number==12){
                        echo"program to add two numbers:";
                        echo "<br>";
                        $first = 15;
                        $second = 10;
                        $sum = $first + $second;
                        echo "Result: ".$sum;
                    }
                    else if ($number==13){
                        echo "program to calculate Electricity bill in PHP:";
                        echo "<br>";
                       
                ?>

                <body>
                    <div id="page-wrap">
                        <h2>Php - Calculate Electricity Bill</h2>

                        <form action="" method="post" id="quiz-form">
                                <input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
                                <input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
                        </form>

                        <div>
                            <?php echo '<br />' . $result_str; ?>
                        </div>
                    </div><?php
                    }
                    else if ($number==14){
                        echo "simple calculator program in PHP using switch case:";
                        echo "<br><br><br>";
                        ?>
                        <form action="" method="post">
                        <label>Enter First Value:</label><input type="number" name="first"><br><br>
                        <label>Enter Second Value:</label><input type="number" name="second"><br><br>
                        Choose Operation:<select name="operation">
                            <option value="1">Addition(+)</option>
                            <option value="2">Substraction(-)</option>
                            <option value="3">Division(/)</option>
                            <option value="4">Multiplication(*)</option>
                        </select><input type="submit" name="calculate">
                        </form>
                       
                        <?php
                        echo $finaldisplay;
                    }
                    else if ($number==15){
                        echo " Remove specific element by value from an array in PHP:";
                        echo "<br>";
                        $delete_item = 'april';
                        // take a list of months in an array
                        $months = array('jan', 'feb', 'march', 'april', 'may'); // for april, the key is 4
                        foreach (array_keys($months, $delete_item) as $key) {
                            unset($months[$key]);
}

// print array to see latest values
var_dump($months);
                    }
                    else if ($number==16){
                        echo "PHP program to check if a person is eligible to vote:";
                        echo "<br><br>";
                        ?>
                        <form action="" method="post">
                            Enter Person Age:<input type="number" name="age"><input type="submit" name="vote">
                        </form>
                        <?php
                        echo $display;
                    }
                    else if ($number==17){
                        echo "PHP program to calculate area of a triangle:";
                        echo "<br><br>";
                        ?>
                        <form action="" method="post">
                            Enter base in m:<input type="number" name="base"><br>
                            Enter height in m:<input type="number" name="height"><input type="submit" name="triangle">
                        </form>
                        <?php
                        echo $area;
                    }
                    else if ($number==18){
                        echo "PHP program to check whether a number is positive ,negative or zero";
                        echo "<br><br>";
                        ?>
                        <form action="" method="post">
                            Enter number:<input type="number" name="number"><input type="submit" name="check">
                        </form>
                        <?php
                        echo $dir;
                    }
                    else if ($number==19){
                        echo "PHP program to reverse the string:";
                        echo "<br>";
                        $str = "Tutorials Class";
                        echo strrev($str);
                    }
                    else if ($number==20){
                        echo "PHP program to find the length of the string:";
                        echo "<br><br>";
                        $str = "Tutorials Class";
                        echo strlen($str);
                    }
                    else if ($number==21){
                        echo "PHP program to count the words in the string:";
                        echo "<br><br>";
                        $sample_words = "This is Tutorials Class, learn programming tutorials here.";
                        echo str_word_count($sample_words);
                    }
                    else if ($number==22){
                        echo "PHP program to convert a string into uppercase:";
                        echo "<br><br>";
                        $str = "Tutorials Class";
                        echo strtoupper($str);
                    }
                    else if ($number==23){
                        echo ":";
                        echo "<br>";
                    }
                    else if ($number==24){
                        echo "Program to find if an array is a subset of another:";
                        echo "<br>";
                        // Define two array
                        $array1 = array('a','1','2','3','4');
                        $array2 = array('a','3');

                        // intersect/matched values should be equal to first array
                        if (array_intersect($array2, $array1) === $array2) {
                        echo "It is a subset";
                        } else {
                        echo "Not a subset";
                        }
                    }
                  
                    ?>
                </div>
            
            </div>
       </div>
       
    </body>
</html>