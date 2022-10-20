<h1 style="text-align: center; color: red;">App Send Mail</h1>

<h2 style="text-align: center; color: black;">Introduction</h2>
<p>The original source of this project is from a <a href="https://www.udemy.com/course/web-completo/">Web Development</a> course on Udemy, which I made little changes, Involving the class I've developed to use the <a href="https://github.com/PHPMailer/PHPMailer">PHPMailer Library</a>.</p>

<h2 style="text-align: center; color: black;">About the project</h2>
<p>This project consists of sending emails through a PHP code with the PHPMailer library, configured to send through a gmail address inserted. <br/>
On index.php, there is a form where you insert the recipient, the subject and the message of the email, and the page will return the information, whether the email was sent or not. <br/>
About the process.php, is where I created the class that process the information that was entered in the form, and there is the class related to the PHPMailer to be able to send an email. I didn't push this file because it contains informations such as my generated google passwords, so instead, I pushed a file that require the "original" process.php and it will be possible to see the class Message through the screenshot bellow </p>

