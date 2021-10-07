<?php

    class Calculator
    {
        private $operator;
        private $num1;
        private $num2;

        public function calc($operator = "@", $num1 = 0, $num2 = -1)
        {
            if($operator == "@" || $num2 == -1)
            {
                return "<br>You must enter a string and two numbers";
            }
            else if($num2 == 0)
            {
                return "Cannot divide by zero";
            }
            else if($operator == "+")
            {
                echo "<br>The sum of the numbers is ";
                return ($num1 + $num2);
            }
            else if($operator == "-")
            {
                echo "<br>The difference of the numbers is ";
                return ($num1 - $num2);
            }
            else if($operator == "*")
            {
                echo "<br>The product of the numbers is ";
                return ($num1 * $num2);
            }
            else if($operator == "/")
            {
                echo "<br>The division of the numbers is ";
                return ($num1 / $num2);
            }
        }
    }

?>
