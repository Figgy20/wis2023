<?php
    # Integers
    $int_var = 12345;

    $another_int = -12345 + 12345;

    $many = 2.2888800;
    $many_2 = 2.2111200;
    $few = $many + $many_2; 
    print("$many + $many_2 = $few<br>");
    # unsure why this code doesnt work.
?>
<?php  
    # Booleans
    if (TRUE)
    print("This will always print<br>");
   else
    print("This will never print<br>");

    $true_num = 3 + 0.14159;
    $true_str = "Tried and true";
    $true_array[49] = "An array element";
    $false_array = array();
    $false_null = NULL;
    $false_num = 999 - 999;
    $false_str = "";

    $my_var = NULL;
    $my_var = null;
?>
<?php
    # Strings
    $string_1 = "This is a string in double quotes";
    $string_2 = "This is a somewhat longer, singly quoted string";
    $string_39 = "This string has thirty-nine characters";
    $string_0 = ""; // a string with zero characters

    $variable = "name";
    $literally = 'My $variable will not print! \n';
    print($literally);
    $literally = "My $variable will print! \n <br><br>";
    print($literally);

?>

<?php
    # Functions
    $x = 4;
    function assignx () 
    {
        $x = 0;
        print "\$x inside function is $x.<br>";
    }
    assignx();
    print "\$x outside of function is $x.<br>";
?>

<?php
    # Static Variables
    function keep_track() {
        STATIC $count = 0;
        $count++;
        print $count;
        print "";
    }
    keep_track();
    keep_track();
    keep_track();
?>