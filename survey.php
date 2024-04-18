<!DOCTYPE html>
<html>
  <head>
    <title>Mental Maze Survey</title>
    <link type="text/css" rel="stylesheet" href="survey.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="Survey.js"></script>
  </head>

  <body>
    <h2>Welcome to Mental Maze Survey</h2>
    <form>
      <input type="radio" name="female" value="female">Female
      <input type="radio" name="male" value="male">Male
    </form>

    <!-- Survey questions - Page 1 -->
    <form id="survey-form-page1" method="post" action="survey_process.php">
      <form method="post" action="survey_process.php">
        <p>Question 1: You are not too interested in discussions about various interpretations of creative works.</p>
        <input type="radio" name="question1" value=1> Strongly Disagree<br>
        <input type="radio" name="question1" value=2> Disagree<br>
        <input type="radio" name="question1" value=3> Somewhat<br>
        <input type="radio" name="question1" value=4> Agree<br>
        <input type="radio" name="question1" value=5> Strongly Agree<br>
        <br>
      
        
        <p>Question 2: You enjoy solitary hobbies or activities more than group ones.</p>
        <input type="radio" name="question2" value=1> Strongly Disagree<br>
        <input type="radio" name="question2" value=2> Disagree<br>
        <input type="radio" name="question2" value=3> Somewhat<br>
        <input type="radio" name="question2" value=4> Agree<br>
        <input type="radio" name="question2" value=5> Strongly Agree<br>
        <br>

        
        <p>Question 3: You can easily connect with people you have just met.</p>
        <input type="radio" name="question3" value=1> Strongly Disagree<br>
        <input type="radio" name="question3" value=2> Disagree<br>
        <input type="radio" name="question3" value=3> Somewhat<br>
        <input type="radio" name="question3" value=4> Agree<br>
        <input type="radio" name="question3" value=5> Strongly Agree<br>
        <br>

        
        <p>Question 4: Your emotions control you more than you control them.</p>
        <input type="radio" name="question4" value=1> Strongly Disagree<br>
        <input type="radio" name="question4" value=2> Disagree<br>
        <input type="radio" name="question4" value=3> Somewhat<br>
        <input type="radio" name="question4" value=4> Agree<br>
        <input type="radio" name="question4" value=5> Strongly Agree<br>
        <br>

        
        <p>Question 5: When making decisions, you focus more on how the affected people might feel than on what is most logical or efficient.</p>
        <input type="radio" name="question5" value=1> Strongly Disagree<br>
        <input type="radio" name="question5" value=2> Disagree<br>
        <input type="radio" name="question5" value=3> Somewhat<br>
        <input type="radio" name="question5" value=4> Agree<br>
        <input type="radio" name="question5" value=5> Strongly Agree<br>
        <br>

    </form>

    <!-- Survey questions - Page 2 -->
    <form
      id="survey-form-page2"
      method="post"
      action="survey_process.php"
      style="display: none"
    >
    <p>Question 6: You would love a job that requires you to work alone most of the time.</p>
    <input type="radio" name="question8" value=1> Strongly Disagree<br>
    <input type="radio" name="question8" value=2> Disagree<br>
    <input type="radio" name="question8" value=3> Somewhat<br>
    <input type="radio" name="question8" value=4> Agree<br>
    <input type="radio" name="question8" value=5> Strongly Agree<br>
    <br>

    
    <p>Question 7: You prefer tasks that require you to come up with creative solutions rather than follow concrete steps.</p>
    <input type="radio" name="question7" value=1> Strongly Disagree<br>
    <input type="radio" name="question7" value=2> Disagree<br>
    <input type="radio" name="question7" value=3> Somewhat<br>
    <input type="radio" name="question7" value=4> Agree<br>
    <input type="radio" name="question7" value=5> Strongly Agree<br>
    <br>

    
    <p>Question 8: You are more likely to rely on emotional intuition than logical reasoning when making a choice.</p>
    <input type="radio" name="question8" value=1> Strongly Disagree<br>
    <input type="radio" name="question8" value=2> Disagree<br>
    <input type="radio" name="question8" value=3> Somewhat<br>
    <input type="radio" name="question8" value=4> Agree<br>
    <input type="radio" name="question8" value=5> Strongly Agree<br>
    <br>

    
    <p>Question 9: When faced with a problem, I prefer to trust my instincts and jump into finding a solution.</p>
    <input type="radio" name="question9" value=1> Strongly Disagree<br>
    <input type="radio" name="question9" value=2> Disagree<br>
    <input type="radio" name="question9" value=3> Somewhat<br>
    <input type="radio" name="question9" value=4> Agree<br>
    <input type="radio" name="question9" value=5> Strongly Agree<br>
    <br>

  
    <p>Question 10: When making plans, I tend to be spontaneous and go with the flow.</p>
    <input type="radio" name="question10" value=1> Strongly Disagree<br>
    <input type="radio" name="question10" value=2> Disagree<br>
    <input type="radio" name="question10" value=3> Somewhat<br>
    <input type="radio" name="question10" value=4> Agree<br>
    <input type="radio" name="question10" value=5> Strongly Agree<br>
    <br>
    </form>

    <!-- Survey questions - Page 3 -->
    <form
      id="survey-form-page3"
      method="post"
      action="survey_process.php"
      style="display: none"
    >
    <p>Question 11: You find it challenging to express your emotions verbally.</p>
    <input type="radio" name="question11" value="Strongly Disagree"> Strongly Disagree<br>
    <input type="radio" name="question11" value="Disagree"> Disagree<br>
    <input type="radio" name="question11" value="Somewhat"> Somewhat<br>
    <input type="radio" name="question11" value="Agree"> Agree<br>
    <input type="radio" name="question11" value="Strongly Agree"> Strongly Agree<br>
    <br>

    <p>Question 12: You feel energized after spending time alone, rather than drained.</p>
    <input type="radio" name="question12" value=1> Strongly Disagree<br>
    <input type="radio" name="question12" value=2> Disagree<br>
    <input type="radio" name="question12" value=3> Somewhat<br>
    <input type="radio" name="question12" value=4> Agree<br>
    <input type="radio" name="question12" value=5> Strongly Agree<br>
    <br>

    <p>Question 13: You often find yourself daydreaming or lost in thought.</p>
    <input type="radio" name="question13" value=1> Strongly Disagree<br>
    <input type="radio" name="question13" value=2> Disagree<br>
    <input type="radio" name="question13" value=3> Somewhat<br>
    <input type="radio" name="question13" value=4> Agree<br>
    <input type="radio" name="question13" value=5> Strongly Agree<br>
    <br>

    <p>Question 14: You prefer exploring new ideas and concepts rather than sticking to familiar routines.</p>
    <input type="radio" name="question14" value=1> Strongly Disagree<br>
    <input type="radio" name="question14" value=2> Disagree<br>
    <input type="radio" name="question14" value=3> Somewhat<br>
    <input type="radio" name="question14" value=4> Agree<br>
    <input type="radio" name="question14" value=5> Strongly Agree<br>
    <br>

    <p>Question 15: You believe that intuition plays a significant role in decision-making, alongside logic and reason.</p>
    <input type="radio" name="question15" value=1> Strongly Disagree<br>
    <input type="radio" name="question15" value=2> Disagree<br>
    <input type="radio" name="question15" value=3> Somewhat<br>
    <input type="radio" name="question15" value=4> Agree<br>
    <input type="radio" name="question15" value=5> Strongly Agree<br>
    <br>
    </form>

    <!-- Continue buttons -->
    <button id="continue-button-page1">Continue</button>
    <button id="continue-button-page2" style="display: none">Continue</button>
    <input
      type="submit"
      value="Submit"
      id="submit-button"
      style="display: none"
    />

    <!-- jQuery script for handling page transitions -->
    <script>
      $(document).ready(function () {
        $("#continue-button-page1").click(function () {
          // Hide page 1, show page 2 and the continue button for page 2
          $("#survey-form-page1").hide();
          $("#survey-form-page2").show();
          $("#continue-button-page2").show();
        });

        $("#continue-button-page2").click(function () {
          // Hide page 2, show page 3 and the submit button
          $("#survey-form-page2").hide();
          $("#survey-form-page3").show();
          $("#submit-button").show();
       
        });
      });
    </script>

    <?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			
			// Connect to MySQL Database Server Using mysqli
		  // Object Oriented way
			$conn = new mysqli($servername, $username, $password);
			
			// Check connection
			if ($conn->connect_error) {
				       //Print a message and terminate the current script
					die("Connection failed: " . $conn->connect_error);
			}
			echo "Connected successfully";
      echo $question1;
      echo "<br>";
      echo $question2;
      echo "<br>";
      echo $question3;
      echo "<br>";
      echo $question4;
      echo "<br>";
      echo $question5;
      echo "<br>";
      echo $question6;
      echo "<br>";
      echo $question7;
      echo "<br>";
      echo $question8;
      echo "<br>";
      echo $question9;
      echo "<br>";
      echo $question10;
      echo "<br>";
      echo $question11;
      echo "<br>";
      echo $question12;
      echo "<br>";
      echo $question13;
      echo "<br>";
      echo $question14;
      echo "<br>";
      echo $question15;
      echo "<br>";

			$conn->close(); //disconnect from the MySQL database
		?>

  </body>
</html>
