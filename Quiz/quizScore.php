<?php 
           $answer1 = $_POST['Marvel1'];
           $answer2 = $_POST['Marvel2'];
           $answer3 = $_POST['Marvel3'];
           $answer4 = $_POST['Marvel4'];
           $answer5 = $_POST['Marvel5'];  

           $Score = 0;
           echo "Who is the strongest there is?", "<br>";
           echo "<br>";
           if($answer1 == "Hulk")
           {
               echo "You Answered: ", $answer1, "<br>";
               echo "The correct Answer is: ", $answer1, "<br>";
               echo "<br>";
               $Score++;
           }
           else if($answer1 != "Hulk")
           {
            echo "You Answered: ", $answer1, "<br>";
            echo "The correct Answer is: Hulk", "<br>";
            echo "<br>";
           }
           echo "What does Thanos collect?", "<br>";
           echo "<br>";
           if($answer2 == "Infinity Stones")
           {
            echo "You Answered: ", $answer2, "<br>";
            echo "The correct Answer is: ", $answer2, "<br>";
            echo "<br>";
            $Score++;
           }
           else if($answer2 != "Infinity Stones")
           {
            echo "You Answered: ", $answer2, "<br>";
            echo "The correct Answer is: Infinity Stones", "<br>";
            echo "<br>";
           }
           echo "Which Symbiote is a serial killer?", "<br>";
           echo "<br>";
           if($answer3 == "Carnage")
           {
            echo "You Answered: ", $answer3, "<br>";
            echo "The correct Answer is: ", $answer3, "<br>";
            echo "<br>";
               $Score++;
           }
           else if($answer3 != "Carnage")
           {
            echo "You Answered: ", $answer3, "<br>";
            echo "The correct Answer is: Carnage", "<br>";
            echo "<br>";
           }
           echo "What Organization did Red Skull Run?", "<br>";
           echo "<br>";
           if($answer4 == "Hydra")
           {
               echo "You Answered: ", $answer4, "<br>";
               echo "The correct Answer is: ", $answer4, "<br>";
               echo "<br>";
               $Score++;
           }
           else if($answer4 != "Hydra")
           {
            echo "You Answered: ", $answer4, "<br>";
            echo "The correct Answer is: Hydra", "<br>";
            echo "<br>";
           }
           echo "How many rings does Shang-Chi Have?", "<br>";
           echo "<br>";
           if($answer5 == "10 Rings")
           {
               echo "You Answered: ", $answer5, "<br>";
               echo "The correct Answer is ", $answer5, "<br>";
               echo "<br>";
               $Score++;
           }
           else if($answer5 != "10 Rings")
           {
            echo "You Answered: ", $answer5, "<br>";
            echo "The correct Answer is: 10 Rings", "<br>";
            echo "<br>";
           }
           $percentage = $Score/5 * 100;
           echo "You got a ", $Score, "/5" ,"<br>";
           echo "That is a ", $percentage, "%";
        ?>