<!--I have update the file please take a look at it-->
<!--I have add the part to calculate the result-->
<!DOCTYPE html>
<html>
  <head>
    <title>Mental Maze Survey</title>
    <link type="text/css" rel="stylesheet" href="survey.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="Survey.js"></script>

    <style>
      /* Your CSS styles here */
      .rating-box {
        width: 200px;
        height: 50px;
        border: none;
        position: relative;
        cursor: pointer;
        overflow: hidden;
        border-radius: 10px;
        background: linear-gradient(to right, #5effa0, #00b4db);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      }

      .rating-bar {
        height: 100%;
        background-color: #fff;
        position: absolute;
        top: 0;
        left: 0;
        width: 0%;
        transition: width 0.3s ease;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }

      .rating-label {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 18px;
        color: #fff;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
      }

      /* Add hover effect */
      .rating-box:hover .rating-bar {
        background-color: rgba(255, 255, 255, 0.9);
      }

      /* Add focus effect */
      .rating-box:focus-within .rating-bar {
        background-color: rgba(255, 255, 255, 0.9);
      }

      /* Add continue button styling */
      .continue-button {
        margin-top: 30px;
        padding: 15px 30px;
        background-color: #ff9800;
        color: #fff;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-size: 20px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        transition: background-color 0.3s ease;
      }

      .continue-button:hover {
        background-color: #f57c00;
      }

      /* Result section */
      #result {
        display: none;
        margin-top: 30px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
      }
    </style>
  </head>

  <body>
    <h2>Welcome to Mental Maze Survey</h2>
    <!-- Gender Selection Page -->
    <div id="gender-page">
      <form id="gender-form">
        <input type="radio" name="gender" value="female" />Female
        <input type="radio" name="gender" value="male" />Male
        <button id="gender-continue-button">Continue</button>
      </form>
    </div>

    <!-- Survey questions - Page 1 -->
    <div class="survey-page" id="survey-page1" style="display: none">
      <form id="survey-form-page1">
        <!-- Add first 5 questions here -->
        <!-- Question 1 -->
        <p>
          Question 1: You are not too interested in discussions about various
          interpretations of creative works.
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

        <!-- Question 2 -->
        <p>
          Question 2: You enjoy solitary hobbies or activities more than group
          ones.
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

        <!-- Question 3 -->
        <p>Question 3: You can easily connect with people you have just met.</p>
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
        <p>Question 4: Your emotions control you more than you control them.</p>
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

        <!-- Question 5 -->
        <p>
          Question 5: When making decisions, you focus more on how the affected
          people might feel than on what is most logical or efficient.
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
        <br />

        <!-- Continue button -->
        <button class="continue-button">Continue</button>
      </form>
    </div>

    <!-- Survey questions - Page 2 -->
    <div class="survey-page" id="survey-page2" style="display: none">
      <form id="survey-form-page2">
        <!-- Add next 5 questions here -->
        <p>
          Question 6: You would love a job that requires you to work alone most
          of the time.
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
          Question 7: You prefer tasks that require you to come up with creative
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
          Question 8: You are more likely to rely on emotional intuition than
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
          Question 9: When faced with a problem, I prefer to trust my instincts
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
          Question 10: When making plans, I tend to be spontaneous and go with
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
        <!-- Continue button -->
        <button class="continue-button">Continue</button>
      </form>
    </div>

    <!-- Survey questions - Page 3 -->
    <div class="survey-page" id="survey-page3" style="display: none">
      <form id="survey-form-page3">
        <!-- Add next 5 questions here -->
        <!-- Add a hidden input field to store the total score -->
        <input type="hidden" id="total-score" name="total-score" value="0" />

        <p>
          Question 11: You find it challenging to express your emotions
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
          Question 12: You feel energized after spending time alone, rather than
          drained.
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
          Question 13: You often find yourself daydreaming or lost in thought.
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
          Question 14: You prefer exploring new ideas and concepts rather than
          sticking to familiar routines.
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
          Question 15: You believe that intuition plays a significant role in
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

    <!-- Result section -->
    <div id="result">
      <h2>Survey Result</h2>
      <p id="result-text"></p>
    </div>

    <!-- jQuery script for handling page transitions -->
    <script>
      $(document).ready(function () {
        // Function to update the rating display
        function updateRating(box, rating) {
          box.dataset.rating = rating;
          box.querySelector(".rating-bar").style.width = rating + "%";
          box.querySelector(".rating-label").textContent = rating + "%";
        }

        // Update ratings when mouse moves over rating box
        $(".rating-box").on("mousemove", function (e) {
          const rect = this.getBoundingClientRect();
          const rating = Math.round(
            ((e.clientX - rect.left) / this.offsetWidth) * 100
          );
          if (rating >= 0 && rating <= 100) {
            updateRating(this, rating);
          }
        });

        // Gender selection form submission
        $("#gender-continue-button").click(function (e) {
          e.preventDefault();
          $("#gender-page").hide();
          $("#survey-page1").show(); // Show the first page of survey questions
        });

        // Continue button click event handler for Page 1
        $("#survey-page1 .continue-button").click(function (e) {
          e.preventDefault();
          $("#survey-page1").hide();
          $("#survey-page2").show(); // Show the second page of survey questions
        });

        // Continue button click event handler for Page 2
        $("#survey-page2 .continue-button").click(function (e) {
          e.preventDefault();
          $("#survey-page2").hide();
          $("#survey-page3").show(); // Show the third page of survey questions
        });

        // Continue button click event handler for Page 3
        $("#survey-page3 .continue-button").click(function (e) {
          e.preventDefault();
          // Calculate the total score
          const totalScore = calculateTotalScore();
          // Determine the result category and personality description
          const result = determineResult(
            totalScore,
            $('input[name="gender"]:checked').val()
          );
          // Display the result
          $("#result-text").text(
            "Your result category is: " +
              result.category +
              ". " +
              result.description
          );
          $("#result").show();
        });

        // Handle form submission
        $("#survey-form-page3").submit(function (e) {
          // Prevent the default form submission
          e.preventDefault();
          // Calculate the total score
          const totalScore = calculateTotalScore();
          // Determine the result category and personality description
          const result = determineResult(
            totalScore,
            $('input[name="gender"]:checked').val()
          );
          // Display the result
          $("#result-text").text(
            "Your result category is: " +
              result.category +
              ". " +
              result.description
          );
          $("#result").show();
          // Optionally, you can submit the form data here
        });

        // Placeholder function to calculate total score
        function calculateTotalScore() {
          // Placeholder implementation
          let totalScore = 0;
          $(".rating-box").each(function () {
            const rating = parseInt($(this).data("rating"));
            totalScore += rating;
          });
          return totalScore;
        }

        // Placeholder function to determine result category and personality description
        function determineResult(totalScore, gender) {
          const resultCategories = [
            {
              category: "Reserved",
              minScore: 0,
              maxScore: 200,
              description:
                "You tend to be reserved and introspective, preferring to spend time alone or with close friends rather than large groups.",
            },
            {
              category: "Adventurous",
              minScore: 201,
              maxScore: 400,
              description:
                "You have an adventurous spirit, always seeking out new experiences and challenges to push your boundaries.",
            },
            {
              category: "Empathetic",
              minScore: 401,
              maxScore: 600,
              description:
                "You are highly empathetic and compassionate, often putting the needs of others before your own and forming deep connections easily.",
            },
            {
              category: "Analytical",
              minScore: 601,
              maxScore: 800,
              description:
                "You have a strong analytical mind, preferring logical reasoning and problem-solving to emotional intuition when making decisions.",
            },
            {
              category: "Innovative",
              minScore: 801,
              maxScore: 1000,
              description:
                "You are highly innovative and creative, constantly generating new ideas and exploring unconventional solutions to challenges.",
            },
          ];

          let resultCategory = "Unknown";
          let description =
            "We couldn't determine your personality type based on your responses.";

          for (const category of resultCategories) {
            if (
              totalScore >= category.minScore &&
              totalScore <= category.maxScore
            ) {
              resultCategory = category.category;
              description = category.description;
              break;
            }
          }

          if (gender === "female") {
            description +=
              " As a female, you may also have strong nurturing instincts and empathy towards others.";
          } else if (gender === "male") {
            description +=
              " As a male, you may also exhibit leadership qualities and a preference for problem-solving.";
          }

          return { category: resultCategory, description: description };
        }
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
