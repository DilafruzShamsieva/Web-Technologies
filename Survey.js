$(document).ready(function () {
  $("#gender-continue-button").click(function () {
    $("#intro-messages").hide();
    $("#gender-page").show(); // Show the next page
  });
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

  // Continue button click event handler for Page3
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
    // Display the result on Page 4
    $("#result-text").text(
      "Your result category is: " + result.category + ". " + result.description
    );
    // Hide previous pages and show the result page (Page 4)
    $(".survey-page").hide();
    $("#survey-page4").show();
  });

  // Handle form submission
  // Handle form submission
  $("#survey-form-page3").submit(function (e) {
    // Prevent the default form submission
    e.preventDefault();

    // Retrieve gender value
    const gender = $('input[name="gender"]:checked').val();
    console.log("Gender:", gender); // Log the gender value

    // Calculate the total score
    const totalScore = calculateTotalScore();

    // Determine the result category and personality description
    const result = determineResult(totalScore, gender);

    // Display the result
    $("#result").empty(); // Clear previous result if any
    if (result) {
      $("#result").append(
        "<p>Your result category is: " + result.category + "</p>"
      );
      $("#result").append("<p>" + result.description + "</p>");
    } else {
      $("#result").append(
        "<p>We couldn't determine your personality type based on your responses.</p>"
      );
    }

    // Show the result section
    $("#result").show();
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
          "You tend to be reserved and introspective, preferring to spend time alone or with close friends rather than large groups. You may find discussions about various interpretations of creative works less engaging and prefer solitary hobbies or activities over group ones. Connecting with new people might not come as easily to you, and you may feel that your emotions sometimes control you more than you control them. When making decisions, you may prioritize how affected people might feel over what is most logical or efficient.",
      },
      {
        category: "Adventurous",
        minScore: 201,
        maxScore: 400,
        description:
          "You have an adventurous spirit, always seeking out new experiences and challenges to push your boundaries. You enjoy solitary activities, as well as tasks that require creative solutions rather than following concrete steps. While you may rely on emotional intuition in decision-making, you are also spontaneous and tend to go with the flow when making plans. Expressing emotions verbally might not be your strong suit, but you feel energized after spending time alone and often find yourself daydreaming or lost in thought.",
      },
      {
        category: "Empathetic",
        minScore: 401,
        maxScore: 600,
        description:
          "You are highly empathetic and compassionate, often putting the needs of others before your own and forming deep connections easily. While you may enjoy solitary activities, you also have no trouble connecting with new people and can easily understand their emotions. Your emotions play a significant role in your decision-making process, and you prioritize how affected people might feel over logical reasoning. You prefer exploring new ideas and concepts rather than sticking to familiar routines.",
      },
      {
        category: "Analytical",
        minScore: 601,
        maxScore: 800,
        description:
          "You have a strong analytical mind, preferring logical reasoning and problem-solving to emotional intuition when making decisions. While you may enjoy solitary activities and find it challenging to express emotions verbally, you feel energized after spending time alone. You often find yourself daydreaming or lost in thought, and you prefer exploring new ideas and concepts rather than sticking to familiar routines. When faced with a problem, you trust your instincts and jump into finding a solution.",
      },
      {
        category: "Innovative",
        minScore: 801,
        maxScore: 1000,
        description:
          "You are highly innovative and creative, constantly generating new ideas and exploring unconventional solutions to challenges. You enjoy solitary activities and prefer tasks that require you to come up with creative solutions rather than follow concrete steps. While you may rely on emotional intuition in decision-making, you also believe that intuition plays a significant role alongside logic and reason. You tend to be spontaneous when making plans and prefer exploring new ideas and concepts.",
      },
    ];

    let resultCategory = "Unknown";
    let description =
      "We couldn't determine your personality type based on your responses.";
    let percentage = 0;

    for (const category of resultCategories) {
      if (totalScore >= category.minScore && totalScore <= category.maxScore) {
        resultCategory = category.category;
        description = category.description;
        percentage =
          ((totalScore - category.minScore) /
            (category.maxScore - category.minScore)) *
          100;
        break;
      }
    }

    // Add gender-specific description at the beginning if gender is provided
    if (gender === "male") {
      description =
        "As a male, you may also exhibit leadership qualities and a preference for problem-solving. <br>" +
        description;
    } else if (gender === "female") {
      description =
        "As a female, you may also have strong nurturing instincts and empathy towards others. <br>" +
        description;
    }

    return {
      category: resultCategory,
      description: description,
      percentage: percentage.toFixed(2),
    };
  }
});
