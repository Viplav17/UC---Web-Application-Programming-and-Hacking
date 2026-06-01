# waph-nagpalvv
# WAPH-Web Application Programming and Hacking
# Lab 1 Report

## Instructor: Dr. Phu Phung

## Student

**Name**: Viplav Nagpal

**Email**: nagpalvv@mail.uc.edu (viplavnagpal1704@gmail.com)

**Short-bio**: I love programming and building stuff. I took this course to learn how to build stuff and add security for the stuff I build, including websites, machine learning models and so much more.

![Viplav's headshot](../../Images-main/Headshot.jpeg)

# Lab 1 - Foundations of the Web 

## The lab's overview:
In this lab, we explore foundational web protocols by using Wireshark, Telnet, and curl to inspect and manually construct HTTP GET and POST requests. Additionally, we develop and deploy basic server-side web applications, including a CGI program in C and an interactive user-input script in PHP.
**Link to this lab report**: [https://github.com/nagpalvv/waph-nagpalvv/tree/main/labs/lab1]

## Part 1: The Web and HTTP Protocol

### Task 1: Familiar with the Wireshark tool and HTTP protocol
To examine the HTTP protocol, we started a Wireshark packet capture on our network interface and visited an unencrypted HTTP website. After stopping the capture, we applied the http filter to isolate the relevant traffic. This allowed us to inspect the raw data of the initial HTTP GET request sent by the browser and the corresponding 200 OK HTTP Response from the server. Finally, we used the "Follow > HTTP Stream" feature to view the entire plain-text conversation between the client and the server.
Issues faced: Always got 404 NotFound as the HTTP response for **http://example.com/index.html** but worked completely fine for **http://example.com**

![HTTP Request to "http://example.com"](images/HTTP_Request_Example_com.png)

![HTTP Response from "http://example.com"](images/HTTP_Response_Example_com.png)

![HTTP Stream for "http://example.com"](images/HTTP_Stream_Example_com.png)

![HTTP Stream for "http://example.com/index.html" which shows 404 Not Found](images/HTTP_Stream_Example_Index_com.png)

### Task 2: Understanding HTTP using telnet and Wireshark
We used the terminal-based telnet utility to connect to an HTTP server on port 80 and manually issue a minimal GET request, allowing us to view the raw server response directly in the console. Simultaneously, we captured this exchange in Wireshark to inspect the packet data

#### 1.
![terminal showing the HTTP Request and HTTP response from the server. ](images/Telnet_Wireshark_Terminal.png)

#### 2.
![HTTP Request message in Wireshark](images/Telnet_Wireshark_Report.png)

**Ans.** Yes, there is a massive difference between the manual Telnet request and the browser request. Our manual Telnet request was extremely minimal, containing only the request line (GET / HTTP/1.0) and a single header (Host: example.com).

#### 3. 
![HTTP Response message in Wireshark that the server responded](images/Telnet_Wireshark_Report.png)

**Ans.** Yes, The browser response optimizes the exchange by keeping the connection open (keep-alive) and compressing the data (gzip). In contrast, the manual Telnet response receives raw, uncompressed text and immediately closes the connection (close).

## Part 2: Basic Web Application Programming

### Task 1: CGI Web applications in C

#### a:
We wrote a basic C program that outputs standard HTTP text headers, compiled it using gcc, and moved the executable into the server's CGI directory. After ensuring the file had the correct execution permissions, we successfully invoked the script through our web browser to display the dynamic output.
![CGI program is invoked properly in a browser](images/CGI_Application_1.png)

#### b:
![Source Code of the C code I wrote on my own and the resulting webpage](images/C_Self_Written_Code.png)

### Task 2: A simple PHP Web Application with user input

#### a: 
We authored a helloworld.php script containing an echo statement for our name and the phpinfo() function to expose the server's environment settings.
We placed this file in the web root directory and navigated to it in our browser, verifying the server successfully interpreted and executed the PHP code.
![developed a simple helloworld.php PHP page with my name](images/PHP_Test_Browser.png)

#### b:
![developed and deployed an echo Web application in PHP](images/Echo_php.png)
This creates a critical Cross-Site Scripting (XSS) vulnerability, as the application fails to sanitize input, allowing malicious executable scripts to be injected and run.

### Task 3: Understanding HTTP GET and POST requests

#### a:
We started a Wireshark packet capture, accessed the echo.php page with our name appended as a URL parameter, and filtered the captured traffic for HTTP.
Inspecting the captured packets revealed our specific input explicitly visible within the requested URI string of the HTTP GET Request message.
![HTTP GET Request for the echo.php page with my name in the data](images/Echo_PHP_GET_Wireshark_Request.png)

![HTTP GET Response for the echo.php page with my name in the data](images/Echo_PHP_GET_Wireshark_Response.png)

#### b:
We executed the curl command with the -d flag to manually transmit an HTTP POST request containing our name as payload data to the server.
Running Wireshark concurrently allowed us to capture this traffic and verify that the POST request successfully delivered the data hidden within the message body.
![Output from curl command in terminal](images/Curl_Command_Result.png)
![HTTP POST Request for the echo.php page with my name in the data](images/Echo_PHP_POST_Wireshark_Request.png)

![HTTP POST Response for the echo.php page with my name in the data](images/Echo_PHP_POST_Wireshark_Response.png)

![HTTP stream for echo.php through POST](images/HTTP_Stream_Echo_PHP_POST.png)

#### c:
While both methods yielded identical 200 OK server responses and HTML output, they differed completely in how they transmitted the user data to the server.
The GET request exposed our input openly within the URL string, whereas the POST request safely encapsulated the input within the HTTP message body.
