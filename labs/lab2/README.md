# waph-nagpalvv
# WAPH-Web Application Programming and Hacking
# Lab 2 Report

## Instructor: Dr. Phu Phung

## Student

**Name**: Viplav Nagpal

**Email**: nagpalvv@mail.uc.edu (viplavnagpal1704@gmail.com)

**Short-bio**: I love programming and building stuff. I took this course to learn how to build stuff and add security for the stuff I build, including websites, machine learning models and so much more.

![A personal headshot of the student, Viplav Nagpal.](images/Headshot.jpeg)

# Lab 2 - Front-end Web Development

## The lab's overview:
Through this lab, I gained a comprehensive understanding of how the three core pillars of the web—HTML, CSS, and JavaScript—interact to create dynamic, user-friendly applications. I learned how to structure semantic webpages using HTML and style them cleanly using external and internal CSS layouts. 

Crucially, I developed a strong grasp of asynchronous programming and the Document Object Model (DOM). By implementing vanilla Ajax and the jQuery library, I learned how to seamlessly send and receive data from a server in the background, updating specific parts of a webpage without interrupting the user experience with a hard reload. Furthermore, integrating the Joke API and Agify API taught me how to parse complex JSON payloads and handle cross-origin resource sharing (CORS) security policies using modern `fetch()` protocols. Overall, this lab successfully bridged the gap between static web design and interactive, API-driven front-end development.

**Link to this lab report**: [https://github.com/nagpalvv/waph-nagpalvv/tree/main/labs/lab2]

---

## Task 1: Basic HTML with forms, and JavaScript

### a. HTML
We developed a foundational HTML file named `waph-nagpalvv.html`. This page includes structural header tags, an image of my headshot, and basic HTML forms configured to send data via HTTP GET and POST requests.

![Sublime Text editor showing the foundational HTML skeleton, including header tags and form inputs.](images/Task1_Code.png)

![The initial browser rendering of the HTML page, displaying the headshot, headings, and HTTP GET/POST forms.](images/Task_1.png)

![Further progression of the HTML layout before styling is applied.](images/Task1_Output.png)

![The completed basic layout of Task 1 showing all integrated elements.](images/Task1_Final.png)

### b. Simple JavaScript
We implemented various JavaScript techniques to make the webpage interactive:

* **Inline JavaScript:** We added an `onclick` event to a `<div>` to display the current date and time, and an `onkeypress` event to the form input fields to log keystrokes to the console.

![Code snippet demonstrating inline JavaScript for handling click events to show the date.](images/Task1_js_inline_code.png)

![Code snippet showing the onkeypress event listener added directly to the form input fields.](images/Tas2_js_inline_code.png)

![Browser output successfully displaying the current date and time when triggered by the user's click.](images/Task1_js_inline_output.png)

* **Email JS:** We separated the logic to toggle the visibility of an email address into an external file (`email.js`) to protect it from basic scraping.

![External JavaScript logic used to safely toggle the visibility of the user's email address.](images/Task1_js_emailjs_code.png)

* **Digital and Analog Clocks:** We used a `<script>` tag within the HTML to create a `setInterval` function that dynamically updates a digital clock every 500 milliseconds. Furthermore, we utilized an external JavaScript file to draw a functioning analog clock on a `<canvas>`.

![The script block containing the setInterval function for the digital clock and canvas setup for the analog clock.](images/Task1_js_script_code.png)

![A split view showing the clock implementation code alongside its live rendering in the browser.](images/Task1_Clock_code_output.png)

---

## Task 2: Ajax, CSS, jQuery, and Web API integration

### a. Ajax
We added a new input field and a button to handle asynchronous requests. Using vanilla JavaScript and the `XMLHttpRequest` object, we constructed an `xhttp.open("GET", ...)` request that grabs the user's input and sends it to our local `echo.php` application without reloading the webpage.

![JavaScript code defining the getEcho function, which manually configures an XMLHttpRequest.](images/Task2_AJAX_code.png)

![The webpage dynamically displaying the server's response from echo.php without a full page reload.](images/Task2_Ajax_output.png)

### b. CSS
We enhanced the visual layout of the page by incorporating CSS. We linked a remote external stylesheet (`style1.css`) for the overall container and layout wrapper structure, and added internal styling classes for the buttons and response containers.

![HTML head section showing the link tag successfully importing the remote style1.css stylesheet.](images/Task2_CSS_External_code.png)

![The browser view showing the webpage transformed by CSS into a clean, two-column layout with a green header.](images/Task2_CSS_External_output.png)

### c. jQuery
To streamline our Ajax calls, we imported the jQuery 3.7.1 library. We then replicated the vanilla Ajax functionality using jQuery's simplified syntax for both GET and POST requests securely in the background.

![The browser's Network tab confirming a successful 200 OK GET request sent via jQuery.](images/Task2_JQuery_GET.png)

![The browser's Network tab confirming the payload data was successfully transmitted via a jQuery POST request.](images/Task2_JQuery_POST.png)

### d. Web API integration

#### i. Joke API (jQuery)
We configured an automatic API call using jQuery's `$.get()` that triggers as soon as the JavaScript block runs. It fetches a random programming joke from `v2.jokeapi.dev` and dynamically displays it inside the response `<div>`.

![Network tools showing the successful automated GET request to the remote Joke API server.](images/Joke_Webpage_network_check.png)

![The developer console printing the raw, stringified JSON payload received from the Joke API.](images/Joke_Console_output.png)

#### ii. Agify API (Fetch)
We utilized modern asynchronous JavaScript (`async/await`) alongside the `fetch()` API to predict a user's age based on their name. We updated the endpoint to `https://` to bypass CORS and mixed-content restrictions, successfully grabbing the input, querying `api.agify.io`, parsing the returned JSON, and updating the DOM.

![The final integrated webpage utilizing the modern fetch API to guess the user's age and display it in an orange notification box.](images/Age_Fetch_api_output.png)