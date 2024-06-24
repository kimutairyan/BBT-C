<?php
    date_default_timezone_set("Africa/Nairobi");
    
    print "This is the first php lesson";
    //Displaying a sentence or a string

    print "<br>";

    echo 'Today is <span style="color: #FF0040;">Monday</span>'; //Applying css in php

    print '<br>';
    
    print 1586; //this is an integer
    
    print '<br>';
    
    print '4564'; //this is a string
    
    print '<br>';
    
    print "15 + 45"; //this is a string
    
    print '<br>';
    
    print 15 + 45; //this will display the result of the operation
    
    //php will help us display dynamic content (Time/Space)
    print '<br>';
    
    print date('l'); //Display the current week day
    
    print '<br>';

    print date('l', strtotime("tomorrow")); //Display the week day of tomorrow
    
    print '<br>';

    print date('jS F Y, l');

    // print date('jS F Y, l', strtotime("+5 months"));

    print '<br>';

    print date('l, jS F Y H:i:s');

    print '<br>'; //Using HTML to break  a line
    
    print "Today is: " . date('l, F jS Y');
    
    print '<br>'; //Using HTML to break  a line
    
    $fname = "Alex Okama"; //Declaration of a variable or string [or a (group of) word]
    
    $yob = 2006; //Creating (Declaring) a PHP variable (integer)
    
    $user_dob = $yob . "-05-21";

    print $fname;
    print '<br>'; //Using HTML to break  a line
    
    // print $user_dob;
    
    print '<br>'; //Using HTML to break  a line
    $age = date('Y') - $yob;

    $birthdate = new DateTime($user_dob);
    $today = new DateTime('today');

    $interval = $birthdate->diff($today);

    // echo '<pre>';
    // print_r($interval);
    // echo '</pre>';
    
    print $fname . " was born on " . date('l, F jS Y', strtotime($user_dob));
    print '<br>'; //Using HTML to break  a line
    print $fname . " is " . $interval->y . " years, " . $interval->m . " months, and " . $interval->d . " days old.";
    
    print '<br>'; //Using HTML to break  a line
    $adult_age = 18;

    if($interval->y >= $adult_age){
        print $fname . " is an adult"; //{} event in block will happen if the condition is true
    }else{
        print $fname . " is NOT an adult"; //{} event in block will happen if the condition is false
    }
    print '<br>'; //Using HTML to break  a line
    
    
    //Variable Characteristics
    
    $lname = 'Okama'; // $lname >< $Lname
    
    print "His last name is $lname";
  
    print '<br>'; //Using HTML to break  a line
    
    print 'His last name is ' . $lname;
    
    print '<br>'; //Using HTML to break  a line
    
    $pers['lname'] = "Okama";
    print $pers['lname'];
    
    print '<br>'; //Using HTML to break  a line
    define('lname', 'Okama');
    print lname;


    ?>