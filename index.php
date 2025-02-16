<?php
session_start();
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" maximum-scale=1.0, user-scalable=0>
  <title>Public Welfare Schemes</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/FwbCBHF/fotor-2023-1-29-10-51-0.png">

  <!-- custom css link -->
  <link rel="stylesheet" href="assets/style.css">

  <!-- google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700;900&family=Quicksand:wght@400;500;600;700&display=swap"
    rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:wght@300;400&display=swap"
    rel="stylesheet">

  <!-- Internal Css For This -->
  <style>
        /* General Styles */
        body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    line-height: 1.6;
    color: #333;
    background-color: #f8f0e3; /* Light cream/beige */
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Header */
.header {
    background-color: #b5c4ad; /* Soft sage green */
    color: #fff;
    padding: 15px 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo img {
    max-height: 50px;
}

.navbar ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.navbar li {
    margin-left: 20px;
}

.navbar a {
    text-decoration: none;
    color: #fff;
    padding: 8px 15px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.navbar a:hover {
    background-color: rgba(255, 255, 255, 0.2);
}

/* Main Content Area */
.main-content {
    display: flex;
    margin-top: 20px;
}

.sidebar {
    width: 250px;
    background-color: #fff8ef; /* Light beige */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.sidebar ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.sidebar li {
    margin-bottom: 15px;
}

.sidebar a {
    display: block;
    text-decoration: none;
    color: #333;
    padding: 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.sidebar a:hover {
    background-color: #f0f0f0;
    color: #007bff;
}

.content {
    flex: 1;
    padding: 20px;
    background-color: #fff8ef; /* Light beige */
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-left: 20px;
}

/* Slideshow */
.slideshow-container {
    width: 100%;
    overflow: hidden;
    margin-bottom: 20px;
}

.mySlides {
    display: none;
}

.mySlides img {
    width: 100%;
    height: auto;
}

/* Hero Section */
.hero {
    padding: 40px 0;
    text-align: center;
    background-color: #f9f5ef; /* Lighter beige */
}

.hero-content {
    max-width: 800px;
    margin: 0 auto;
}

.hero h1 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

/* About Section */
.about {
    padding: 40px 0;
}

.about-content {
    text-align: center;
    margin-bottom: 40px;
}

.about-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 20px;
}

.about-card {
    border: 1px solid #ddd;
    padding: 20px;
    text-align: center;
    border-radius: 8px;
    transition: transform 0.3s ease;
    background-color: #fff8ef; /* Light beige */
}

.about-card:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-icon img {
    max-width: 80px;
    margin-bottom: 10px;
}

.card-title {
    margin-bottom: 10px;
}

/* Footer */
footer {
    background-color: #96ab91; /* Slightly darker sage green */
    color: #fff;
    padding: 20px 0;
    text-align: center;
    margin-top: 20px;
}

.footer-top {
    padding-bottom: 20px;
    border-bottom: 1px solid #666;
}

.footer-brand {
    margin-bottom: 20px;
}

.footer-brand img {
    max-width: 200px;
}

.social-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
}

.social-link {
    color: #fff;
    margin: 0 10px;
    font-size: 1.2em;
}

.footer-link-box {
    display: flex;
    justify-content: space-around;
}

.footer-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-item-title {
    font-weight: bold;
    margin-bottom: 10px;
}

.footer-link {
    color: #fff;
    text-decoration: none;
}

.copyright {
    margin-top: 20px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .main-content {
        flex-direction: column;
    }

    .sidebar {
        width: 100%;
        margin-bottom: 20px;
    }

    .header .container {
        flex-direction: column;
        align-items: center;
        text-align: center; /* Center header content */
    }

    .logo {
        margin-bottom: 10px;
    }

    .navbar ul {
        flex-direction: column;
    }

    .navbar li {
        margin: 10px 0;
        margin-left: 0;
    }

    .navbar a {
        text-align: center;
        width: 100%;
    }

    .slideshow-container {
        margin-bottom: 20px;
    }

    .hero h1 {
        font-size: 2em;
    }

    .about-list {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }

    .about-card {
        padding: 15px;
    }

    .footer-link-box {
        flex-direction: column;
        align-items: center;
    }

    .footer-list {
        margin-bottom: 20px;
    }

    .footer-item-title {
        text-align: center;
    }

    .social-list {
        justify-content: center;
    }
}
</style>

</head>

<body>

  <!-- HEADER -->

  <header class="header" data-header>
    <div class="container">

      <a href="index.html" class="logo">
        <img src="gs.jpg" alt="Welfare Schemes Logo" width="100px"
          class="nav-logo">
      </a>

      <button class="menu-toggle-btn" data-nav-toggle-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar">
        <ul class="navbar-list">

          <li>
            <a href="index.php" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#about" class="navbar-link">About</a>
          </li>

          <li>
            <a href="#lasted" class="navbar-link">Lasted Schemes</a>
          </li>

          <li>
            <a href="schemefind.php" class="navbar-link">Schemes For You</a>
          </li>

          <li>
            <a href="login.php" class="navbar-link">Login</a>
          </li>

          <li>
            <div class="google_translate">
              <a href="#" class="disclaimer" data-toggle="tooltip" data-placement="top">
                <i class="icon icon-information2"></i>
              </a>
              <div id="google_translate_element"></div>
            </div>
          </li>

          <li>
            <div class="google_translate">
              <div id="google_translate_element"></div>
            </div>
          </li>

          <button id="voiceAssistant">🎤 Voice Assistant</button>
          <p id="statusMessage"></p>

        </ul>

      </nav>

    </div>
  </header>

  <!-- Slider Code -->
  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="https://cmogujarat.gov.in/wp-content/uploads/2023/01/Botad-dev-works-nth.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="https://cmogujarat.gov.in/wp-content/uploads/2022/10/Jamnagar-dev-10top.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="https://gujaratindia.gov.in/Portal/HomeFlashGallery/261_pmwelcome-nth_07.jpg" style="width:100%">
    </div>

  </div>
  <br>

  <div style="text-align:center; display: none;">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <!-- Slider code END -->

  <main>
    <article>

      <!-- HERO -->

      <section class="hero" id="about">
        <div class="container">
          <div class="hero-content" id="taluka">
            <br><br>
            <h1 class="h1"><b>Gyaansutra</b></h1>

            <br>
            <br><br>
            Public-Welfare-Schemes is a user-friendly platform that connects citizens with government welfare schemes effortlessly. 
            Designed for accessibility and transparency, the app provides multilingual support, personalized scheme recommendations, 
            real-time application tracking, and a voice assistant for easy navigation. With a secure database and AI-driven recommendations, 
            users can discover, apply for, and monitor their applications seamlessly, while government officers efficiently process requests.
            By bridging the gap between citizens and welfare programs, Public-Welfare-Schemes enhances governance and ensures that benefits reach those who need them most.

          </div>

        </div>
      </section>

    </article>

  </main>

  <!-- ABOUT -->
  <section class="about" id="services">
    <div class="container">

      <div class="about-content">

        <div class="about-icon">
          <ion-icon name="cube"></ion-icon>
        </div>

        <h2 class="h2 about-title">Schemes</h2>

        <p class="about-text">
          Empowering Citizens, Simplifying Access to Welfare.
        </p>

        <a href="all-schemes.php">
          <button class="btn btn-outline">View All</button>
        </a>

      </div>

      <ul class="about-list">
        <li>
          <div class="about-card">

            <div class="card-icon">
              <img src="https://www.digitalgujarat.gov.in/images/citizen/Income.png" alt="" width="50%">
            </div>

            <h3 class="h3 card-title">Kisan Sahay Yojana</h3>

            <p class="card-text">
              Kisan Sahay Yojana" translates to "Farmer Assistance Scheme" in English. It likely refers to a government program aimed at providing support and assistance to farmers.
            </p>

          </div>
        </li>

        <li>
          <div class="about-card">

            <div class="card-icon">
              <img src="https://www.digitalgujarat.gov.in/images/citizen/ChangeName_RC.png" alt="" width="55%">
            </div>

            <a href="certificate.php">
              <h3 class="h3 card-title">Unemployment Allowance Scheme</h3>
              <p class="card-text">
                Unemployment Allowance Scheme provides financial support to those without jobs, promoting social
                security and economic stability.
              </p>
            </a>

          </div>
        </li>

        <li>
          <div class="about-card">

            <div class="card-icon">
              <img src="https://www.digitalgujarat.gov.in/images/citizen/RemoveName_RC.png" alt="" width="55%">
            </div>

            <h3 class="h3 card-title">Child Development Services</h3>
            <p class="card-text">
              The Child Development Scheme focuses on nurturing the potential of every child, providing essential support and resources for their physical, emotional, and educational growth. 
            </p>

          </div>
        </li>

        <li>
          <div class="about-card">

            <div class="card-icon">
              <img src="https://www.digitalgujarat.gov.in/images/citizen/SeniorCitizen.png" alt="" width="60%">
            </div>

            <h3 class="h3 card-title">Senior Citizen Scheme </h3>
            <p class="card-text">
              Discover peace of mind and financial security with the Senior Citizen Scheme! Tailored for our beloved
              seniors.
            </p>

          </div>
        </li>

      </ul>

    </div>
  </section>

  <!-- FOOTER -->
  <footer>

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="https://i.ibb.co/ctVwdSx/menu-logo.png" alt="Landio logo" width="280px">
          </a>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-item-title">ABOUT US</p>
            </li>

            <li>
              <a href="" class="footer-link">Works</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-item-title">CUSTOMERS</p>
            </li>

            <li>
              <a href="track-id.php" class="footer-link">Track Application</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-item-title">SUPPORT</p>
            </li>

            <li>
              <a href="#" class="footer-link">Guide</a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <!-- Copyright -->
    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          &copy; 2023 <a href="">Jamnagar Public Welfare Schemes</a> All Right Reserved
        </p>
      </div>
    </div>

  </footer>

  <!-- translat website using google_translate -->
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({ 
        pageLanguage: 'en', 
        includedLanguages: 'hi,te,en,ta',  // Hindi (hi), Telugu (te), English (en), Tamil (ta)
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE 
      }, 'google_translate_element');
    }
  </script>
  <script type="text/javascript"
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <!-- custom js link -->
  <script src="./assets/js/script.js"></script>

  <!-- ionicon link -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const voiceButton = document.getElementById("voiceAssistant");
      const statusDisplay = document.getElementById("statusMessage");

      if (!("webkitSpeechRecognition" in window)) {
        alert("Your browser does not support voice recognition.");
        return;
      }

      const recognition = new webkitSpeechRecognition();
      recognition.continuous = false; // Stop after one query
      recognition.interimResults = false; // Only final results
      recognition.lang = "en-US"; // Default to English

      voiceButton.addEventListener("click", function () {
        console.log("Voice button clicked.");
        statusDisplay.innerText = "Listening...";

        // Start recognition after a short delay to ensure the UI updates
        setTimeout(() => {
          recognition.start();
        }, 500);
      });

      recognition.onstart = function () {
        console.log("Recognition started. Microphone is active.");
        statusDisplay.innerText = "Listening...";
      };

      recognition.onresult = function (event) {
        console.log("Recognition result received.");
        statusDisplay.innerText = ""; // Clear the status message
        const transcript = event.results[0][0].transcript.toLowerCase();
        console.log("You said:", transcript);

        // Detect language
        const isEnglish = detectLanguage(transcript);
        console.log("Detected language:", isEnglish ? "English" : "Hindi");

        // Set recognition and speech synthesis language
        recognition.lang = isEnglish ? "en-US" : "hi-IN";

        // Scheme-related keywords and their URLs
        const schemes = {
          "kisan sahay yojana": "kisan-sahay.php",
          "unemployment scheme": "unemployment.php",
          "child development": "child-development.php",
          "senior citizen scheme": "senior-citizen.php",
          "किसान सहायता योजना": "kisan-sahay.php",
          "बेरोजगारी योजना": "unemployment.php",
          "बच्चों का विकास": "child-development.php",
          "वरिष्ठ नागरिक योजना": "senior-citizen.php",
        };

        let matchedScheme = Object.keys(schemes).find((key) =>
          transcript.includes(key)
        );

        if (matchedScheme) {
          console.log("Matched scheme:", matchedScheme);
          speak(`Redirecting to ${matchedScheme}`, isEnglish ? "en-US" : "hi-IN", () => {
            window.location.href = schemes[matchedScheme];
          });
        } else if (transcript.includes("help") || transcript.includes("मदद")) {
          speak(
            "You can ask about government schemes. For example, say 'Kisan Sahay Yojana' or 'बेरोजगारी योजना'.",
            isEnglish ? "en-US" : "hi-IN",
            () => {
              recognition.stop(); // Stop recognition before restarting
              recognition.start();
            }
          );
        } else if (transcript.includes("hello") || transcript.includes("namaste") || transcript.includes("नमस्ते")) {
          speak(
            isEnglish ? "Hello! How can I assist you?" : "नमस्ते! मैं आपकी कैसे मदद कर सकता हूँ?",
            isEnglish ? "en-US" : "hi-IN",
            () => {
              recognition.stop(); // Stop recognition before restarting
              recognition.start();
            }
          );
        } else if (transcript.includes("what should i do to login") || transcript.includes("लॉगिन कैसे करूं")) {
          speak(
            isEnglish
              ? "To log in, enter your registered email and password. If you forgot your password, click on 'Forgot Password' to reset it."
              : "लॉगिन करने के लिए, अपना पंजीकृत ईमेल और पासवर्ड दर्ज करें। यदि आप पासवर्ड भूल गए हैं, तो 'पासवर्ड भूल गए' पर क्लिक करें।",
            isEnglish ? "en-US" : "hi-IN",
            () => {
              recognition.stop(); // Stop recognition before restarting
              recognition.start();
            }
          );
        } else if (transcript.includes("customer support") || transcript.includes("संपर्क करें")) {
          speak(
            isEnglish
              ? "For customer support, call our helpline at 1800-123-456 or email us at support@example.com."
              : "ग्राहक सहायता के लिए, हमारी हेल्पलाइन 1800-123-456 पर कॉल करें या support@example.com पर ईमेल करें।",
            isEnglish ? "en-US" : "hi-IN",
            () => {
              recognition.stop(); // Stop recognition before restarting
              recognition.start();
            }
          );
        } else {
          speak(
            "Sorry, I couldn't understand. Please try again.",
            isEnglish ? "en-US" : "hi-IN",
            () => {
              recognition.stop(); // Stop recognition before restarting
              recognition.start();
            }
          );
        }
      };

      recognition.onerror = function (event) {
        console.log("Error occurred:", event.error);
        statusDisplay.innerText = "";
        speak("There was an issue with voice recognition. Please try again.", "en-US");
      };

      recognition.onend = function () {
        console.log("Recognition ended.");
        statusDisplay.innerText = ""; // Clear the status message
      };

      function speak(text, lang, callback) {
        console.log("Speaking:", text);
        const speech = new SpeechSynthesisUtterance();
        speech.text = text;
        speech.lang = lang; // Set the language explicitly

        speech.onend = function () {
          console.log("Speech synthesis ended.");
          if (callback) callback(); // Call the function after speaking
        };

        window.speechSynthesis.speak(speech);
      }

      function detectLanguage(text) {
        // Check if the text contains only Latin characters (English)
        const isEnglish = /^[a-zA-Z\s.,!?0-9]*$/.test(text);
        return isEnglish;
      }
});

</script>

  

</body>

</html>