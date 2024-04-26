<!DOCTYPE html>
<html>
  <head>
    <title>Mental Maze Survey</title>
    <link type="text/css" rel="stylesheet" href="Survey.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="Survey.js"></script>
  </head>

  <body>
  <div class="container">
  <h1>Welcome to Mental Maze Survey</h1>
  <div class="content" id="intro-messages">
      <p>Hello and welcome to our personality survey!</p>
      <p>Today, we're excited to delve into the fascinating world of personality traits and preferences.</p>
      <p>By answering a series of thought-provoking questions, you'll help us gain a deeper understanding of how you navigate social interactions, make decisions, and approach tasks.</p>
      <p>Your participation in this survey will provide valuable insights into your unique personality, shedding light on what sets you apart from others.</p>
      <p>Thank you for joining us on this journey of self-discovery!</p>
      <p>Let's get started!</p>
    </div>
    <!-- Gender Selection Page -->
    <div id="gender-page">
      <form id="gender-form">
        <h2>Let's Begin</h2>
        <p>To get started, we invite you to share a bit about yourself before we navigate through the maze of questions.</p>
        <p>Select your gender to tailor your survey experience:</p>
        <input type="radio" name="gender" id="male" value="male" /><label for="male" class="gender-label">Male</label>
        <input type="radio" name="gender" id="female" value="female" /><label for="female" class="gender-label">Female</label>
        <button id="gender-continue-button">Continue</button>
      </form>
    </div>

    <!-- Survey questions - Page 1 -->
    <div class="survey-page" id="survey-page1">
      <form id="survey-form-page1">
        <!-- Question 1 -->
        <p>
          Q1: You enjoy solitary hobbies or activities more than group
          ones.
        </p>
        <div class="slider-container">
          <!-- rating box here -->
          <label for="captivation-rating"></label>
          <div
            class="rating-box"
            id="captivation-rating"
            data-rating="50"
            tabindex="0"
          >
            <div class="rating-bar"></div>
            <span class="rating-label">50%</span>
          </div>
        </div>

        <!-- Question 2 -->
        <p>
          Q2: You would love a job that requires you to work alone most
          of the time. 
        </p>
        <div class="slider-container">
          <!-- rating box here -->
          <label for="captivation-rating"></label>
          <div
            class="rating-box"
            id="captivation-rating"
            data-rating="50"
            tabindex="0"
          >
            <div class="rating-bar"></div>
            <span class="rating-label">50%</span>
          </div>
        </div>

        <!-- Question 3 -->
        <p>Q3: You feel energized after spending time alone, rather than
          drained.
          </p>
        <div class="slider-container">
          <!-- Your rating box here -->
          <label for="captivation-rating"></label>
          <div
            class="rating-box"
            id="captivation-rating"
            data-rating="50"
            tabindex="0"
          >
            <div class="rating-bar"></div>
            <span class="rating-label">50%</span>
          </div>
        </div>

        <!-- Question 4 -->
        <p>Q 4:You often find yourself daydreaming or lost in thought.</p>
        <div class="slider-container">
          <!-- rating box here -->
          <label for="captivation-rating"></label>
          <div
            class="rating-box"
            id="captivation-rating"
            data-rating="50"
            tabindex="0"
          >
            <div class="rating-bar"></div>
            <span class="rating-label">50%</span>
          </div>
        </div>

        <!-- Question 5 -->
        <p>
          Q5: You prefer exploring new ideas and concepts rather than
          sticking to familiar routines.
          
        </p>
        <div class="slider-container">
          <!-- rating box here -->
          <label for="captivation-rating"></label>
          <div
            class="rating-box"
            id="captivation-rating"
            data-rating="50"
            tabindex="0"
          >
            <div class="rating-bar"></div>
            <span class="rating-label">50%</span>
          </div>
        </div>
        <br />

        <!-- Continue button -->
        <button class="continue-button">Continue</button>
      </form>
    </div>

    <!-- Survey questions - Page 2 -->
    <div class="survey-page" id="survey-page2">
      <form id="survey-form-page2">
        <!-- Add next 5 questions here -->
        <p>
          Q6: You prefer tasks that require you to come up with creative
          solutions rather than follow concrete steps.
        </p>
        <div class="slider-container">
          <label for="captivation-rating"></label>
          <div
            class="rating-box"
            id="captivation-rating"
            data-rating="50"
            tabindex="0"
          >
            <div class="rating-bar"></div>
            <span class="rating-label">50%</span>
          </div>
        </div>

        <br />
        <p>
          Q7: You are more likely to rely on emotional intuition than
          logical reasoning when making a choice.
        </p>
        <div class="slider-container">
          <label for="captivation-rating"></label>
          <div
            class="rating-box"
            id="captivation-rating"
            data-rating="50"
            tabindex="0"
          >
            <div class="rating-bar"></div>
            <span class="rating-label">50%</span>
          </div>
        </div>

        <br />
        <p>
          Q8: When making decisions, you focus more on how the affected
          people might feel than on what is most logical or efficient.
        </p>
        <div class="slider-container">
          <label for="captivation-rating"></label>
          <div
            class="rating-box"
            id="captivation-rating"
            data-rating="50"
            tabindex="0"
          >
            <div class="rating-bar"></div>
            <span class="rating-label">50%</span>
          </div>
        </div>
        <br />

        <p>
          Q9:When making plans, I tend to be spontaneous and go with
          the flow.
           
        </p>
        <div class="slider-container">
          <label for="captivation-rating"></label>
          <div
            class="rating-box"
            id="captivation-rating"
            data-rating="50"
            tabindex="0"
          >
            <div class="rating-bar"></div>
            <span class="rating-label">50%</span>
          </div>
        </div>
        <br />

        <p>
          Q10: Your emotions control you more than you control them.</p>
        <div class="slider-container">
          <label for="captivation-rating"></label>
          <div
            class="rating-box"
            id="captivation-rating"
            data-rating="50"
            tabindex="0"
          >
            <div class="rating-bar"></div>
            <span class="rating-label">50%</span>
          </div>
        </div>
        <br />
        <!-- Continue button -->
        <button class="continue-button">Continue</button>
      </form>
    </div>

    <!-- Survey questions - Page 3 -->
    <div class="survey-page" id="survey-page3">
      <form id="survey-form-page3">
        <!-- Add next 5 questions here -->
        <input type="hidden" id="total-score" name="total-score" value="0" />

        <p>
          Q11: You can easily connect with people you have just met.</p>
        <div class="slider-container">
          <label for="captivation-rating"></label>
          <div
            class="rating-box"
            id="captivation-rating"
            data-rating="50"
            tabindex="0"
          >
            <div class="rating-bar"></div>
            <span class="rating-label">50%</span>
          </div>
        </div>

        <br />
        <p>
          Q12: You find it challenging to express your emotions
          verbally.
        </p>
        <div class="slider-container">
          <label for="captivation-rating"></label>
          <div
            class="rating-box"
            id="captivation-rating"
            data-rating="50"
            tabindex="0"
          >
            <div class="rating-bar"></div>
            <span class="rating-label">50%</span>
          </div>
        </div>

        <br />
        <p>
          Q13: When faced with a problem, I prefer to trust my instincts
          and jump into finding a solution.
        </p>
        <div class="slider-container">
          <label for="captivation-rating"></label>
          <div
            class="rating-box"
            id="captivation-rating"
            data-rating="50"
            tabindex="0"
          >
            <div class="rating-bar"></div>
            <span class="rating-label">50%</span>
          </div>
        </div>
        <br />
        <p>
          Q14: You are not too interested in discussions about various
          interpretations of creative works.
          
        </p>
        <div class="slider-container">
          <label for="captivation-rating"></label>
          <div
            class="rating-box"
            id="captivation-rating"
            data-rating="50"
            tabindex="0"
          >
            <div class="rating-bar"></div>
            <span class="rating-label">50%</span>
          </div>
        </div>
        <br />

        <p>
          Q15: You believe that intuition plays a significant role in
          decision-making, alongside logic and reason.
        </p>
        <div class="slider-container">
          <label for="captivation-rating"></label>
          <div
            class="rating-box"
            id="captivation-rating"
            data-rating="50"
            tabindex="0"
          >
            <div class="rating-bar"></div>
            <span class="rating-label">50%</span>
          </div>
        </div>
        <br />

        <!-- Submit button -->
        <input type="submit" value="Submit" id="submit-button" />
      </form>
    </div>

    <!-- Survey Result Page -->
    <div id="survey-page4">
      <h2>Survey Result</h2>
      <p>Congratulations on completing the Mental Maze Survey!</p>
      <p>By delving into your responses, we've uncovered intriguing insights into your unique psychological makeup.</p>
      <p>Your answers to a series of thought-provoking questions have unveiled distinct patterns, shedding light on your preferences, tendencies, and perspectives.</p>
      <div id="result"></div>
      
    </div>

    <!-- jQuery script for handling page transitions -->
  
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $gender = $_POST['gender'];
        $scores = $_POST['scores']; // Assuming 'scores' is an array containing the ratings for each question
    
        // Connect to MySQL database
        $servername = "localhost";
        $username = "username"; // Your MySQL username
        $password = "password"; // Your MySQL password
        $dbname = "survey_database"; // Your MySQL database name
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Prepare and bind SQL statement to insert survey responses
        $stmt = $conn->prepare("INSERT INTO survey_responses (gender, score1, score2, score3, score4, score5, score6, score7, score8, score9, score10, score11, score12, score13, score14, score15) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("siiiiiiiiiiiiiii", $gender, ...$scores);
    
        // Execute the SQL statement
        if ($stmt->execute() === TRUE) {
            echo "Survey responses inserted successfully";
        } else {
            echo "Error: " . $stmt->error;
        }
    
        // Close statement and database connection
        $stmt->close();
        $conn->close();
    }
    ?>
    
  </body>
</html>
