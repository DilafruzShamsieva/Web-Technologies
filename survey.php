<!DOCTYPE html>
<html>
    <head>
      <title>Mental Maze Survey</title>
        <link type="text/css" rel="stylesheet" href="survey.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script type="text/javascript" src="Survey.js"></script>
    </head>
    
    <body>
      <!--tHIS is THE CORRECT FILE -->
      <!--We also want to ask about the gender of the person taking the survey-->
      <!--Welcome page that has the name of the test taker and developer list-->
      <!-- Ask for a name before displaying the questions-->


      <h2>Mental Maze Survey</h2>

        <form method="post" action="survey_process.php">
        <p>Question 1: You are not too interested in discussions about various interpretations of creative works.</p>
        <input type="radio" name="question1" value="Strongly Disagree"> Strongly Disagree<br>
        <input type="radio" name="question1" value="Disagree"> Disagree<br>
        <input type="radio" name="question1" value="Somewhat"> Somewhat<br>
        <input type="radio" name="question1" value="Agree"> Agree<br>
        <input type="radio" name="question1" value="Strongly Agree"> Strongly Agree<br>
        <br>
      
        
        <p>Question 2: You enjoy solitary hobbies or activities more than group ones.</p>
        <input type="radio" name="question2" value="Strongly Disagree"> Strongly Disagree<br>
        <input type="radio" name="question2" value="Disagree"> Disagree<br>
        <input type="radio" name="question2" value="Somewhat"> Somewhat<br>
        <input type="radio" name="question2" value="Agree"> Agree<br>
        <input type="radio" name="question2" value="Strongly Agree"> Strongly Agree<br>
        <br>

        
        <p>Question 3: You can easily connect with people you have just met.</p>
        <input type="radio" name="question3" value="Strongly Disagree"> Strongly Disagree<br>
        <input type="radio" name="question3" value="Disagree"> Disagree<br>
        <input type="radio" name="question3" value="Somewhat"> Somewhat<br>
        <input type="radio" name="question3" value="Agree"> Agree<br>
        <input type="radio" name="question3" value="Strongly Agree"> Strongly Agree<br>
        <br>

        
        <p>Question 4: Your emotions control you more than you control them.</p>
        <input type="radio" name="question4" value="Strongly Disagree"> Strongly Disagree<br>
        <input type="radio" name="question4" value="Disagree"> Disagree<br>
        <input type="radio" name="question4" value="Somewhat"> Somewhat<br>
        <input type="radio" name="question4" value="Agree"> Agree<br>
        <input type="radio" name="question4" value="Strongly Agree"> Strongly Agree<br>
        <br>

        
        <p>Question 5: When making decisions, you focus more on how the affected people might feel than on what is most logical or efficient.</p>
        <input type="radio" name="question5" value="Strongly Disagree"> Strongly Disagree<br>
        <input type="radio" name="question5" value="Disagree"> Disagree<br>
        <input type="radio" name="question5" value="Somewhat"> Somewhat<br>
        <input type="radio" name="question5" value="Agree"> Agree<br>
        <input type="radio" name="question5" value="Strongly Agree"> Strongly Agree<br>
        <br>

      
        <p>Question 6: You would love a job that requires you to work alone most of the time.</p>
        <input type="radio" name="question6" value="Strongly Disagree"> Strongly Disagree<br>
        <input type="radio" name="question6" value="Disagree"> Disagree<br>
        <input type="radio" name="question6" value="Somewhat"> Somewhat<br>
        <input type="radio" name="question6" value="Agree"> Agree<br>
        <input type="radio" name="question6" value="Strongly Agree"> Strongly Agree<br>
        <br>

        
        <p>Question 7: You prefer tasks that require you to come up with creative solutions rather than follow concrete steps.</p>
        <input type="radio" name="question7" value="Strongly Disagree"> Strongly Disagree<br>
        <input type="radio" name="question7" value="Disagree"> Disagree<br>
        <input type="radio" name="question7" value="Somewhat"> Somewhat<br>
        <input type="radio" name="question7" value="Agree"> Agree<br>
        <input type="radio" name="question7" value="Strongly Agree"> Strongly Agree<br>
        <br>

        
        <p>Question 8: You are more likely to rely on emotional intuition than logical reasoning when making a choice.</p>
        <input type="radio" name="question8" value="Strongly Disagree"> Strongly Disagree<br>
        <input type="radio" name="question8" value="Disagree"> Disagree<br>
        <input type="radio" name="question8" value="Somewhat"> Somewhat<br>
        <input type="radio" name="question8" value="Agree"> Agree<br>
        <input type="radio" name="question8" value="Strongly Agree"> Strongly Agree<br>
        <br>

        
        <p>Question 9: When faced with a problem, I prefer to trust my instincts and jump into finding a solution.</p>
        <input type="radio" name="question9" value="Strongly Disagree"> Strongly Disagree<br>
        <input type="radio" name="question9" value="Disagree"> Disagree<br>
        <input type="radio" name="question9" value="Somewhat"> Somewhat<br>
        <input type="radio" name="question9" value="Agree"> Agree<br>
        <input type="radio" name="question9" value="Strongly Agree"> Strongly Agree<br>
        <br>

      
        <p>Question 10: When making plans, I tend to be spontaneous and go with the flow.</p>
        <input type="radio" name="question10" value="Strongly Disagree"> Strongly Disagree<br>
        <input type="radio" name="question10" value="Disagree"> Disagree<br>
        <input type="radio" name="question10" value="Somewhat"> Somewhat<br>
        <input type="radio" name="question10" value="Agree"> Agree<br>
        <input type="radio" name="question10" value="Strongly Agree"> Strongly Agree<br>
        <br>

        <p>Question 11: You find it challenging to express your emotions verbally.</p>
        <input type="radio" name="question10" value="Strongly Disagree"> Strongly Disagree<br>
        <input type="radio" name="question10" value="Disagree"> Disagree<br>
        <input type="radio" name="question10" value="Somewhat"> Somewhat<br>
        <input type="radio" name="question10" value="Agree"> Agree<br>
        <input type="radio" name="question10" value="Strongly Agree"> Strongly Agree<br>
        <br>

        <p>Question 12: You feel energized after spending time alone, rather than drained.</p>
        <input type="radio" name="question10" value="Strongly Disagree"> Strongly Disagree<br>
        <input type="radio" name="question10" value="Disagree"> Disagree<br>
        <input type="radio" name="question10" value="Somewhat"> Somewhat<br>
        <input type="radio" name="question10" value="Agree"> Agree<br>
        <input type="radio" name="question10" value="Strongly Agree"> Strongly Agree<br>
        <br>

        <p>Question 13: You often find yourself daydreaming or lost in thought.</p>
        <input type="radio" name="question10" value="Strongly Disagree"> Strongly Disagree<br>
        <input type="radio" name="question10" value="Disagree"> Disagree<br>
        <input type="radio" name="question10" value="Somewhat"> Somewhat<br>
        <input type="radio" name="question10" value="Agree"> Agree<br>
        <input type="radio" name="question10" value="Strongly Agree"> Strongly Agree<br>
        <br>

        <p>Question 14: You prefer exploring new ideas and concepts rather than sticking to familiar routines.</p>
        <input type="radio" name="question10" value="Strongly Disagree"> Strongly Disagree<br>
        <input type="radio" name="question10" value="Disagree"> Disagree<br>
        <input type="radio" name="question10" value="Somewhat"> Somewhat<br>
        <input type="radio" name="question10" value="Agree"> Agree<br>
        <input type="radio" name="question10" value="Strongly Agree"> Strongly Agree<br>
        <br>

        <p>Question 15: You believe that intuition plays a significant role in decision-making, alongside logic and reason.</p>
        <input type="radio" name="question10" value="Strongly Disagree"> Strongly Disagree<br>
        <input type="radio" name="question10" value="Disagree"> Disagree<br>
        <input type="radio" name="question10" value="Somewhat"> Somewhat<br>
        <input type="radio" name="question10" value="Agree"> Agree<br>
        <input type="radio" name="question10" value="Strongly Agree"> Strongly Agree<br>
        <br>
      
        </form>

        <!--We are going to add 5 more questions -->  
        



        <input type="submit" value="Submit">
    </form>

    


        
    </body>
    
</html>