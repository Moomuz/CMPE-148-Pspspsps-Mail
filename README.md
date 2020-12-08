Product belongs to Team PSPSPS @ SJSU Fall2021 CMPE148 - Computer Networks, Term Project 
----------------------------------------------------PSPSPSPSMail-------------------------------------------------
The webapp is made following that of a client server protocol.
Operating Systems Compatibility: Windows, Unix, Mac, iOs, Android.
Inspired by SMTP
Tools/languages used: PHP, HTML, JavaScript, CSS
IDE: Atom, Visual Studio Code, and XAMPP 
So our project is a server client mailing system.
Features:
Users can create an Account
Users can view their inbox
Users can message other users
Users can choose the type of message they are sending
Users can Logout and Log in to alternative accounts
Messages stay in the inbox for 7 days
Messages contains the sent date
Users can enjoy a picture of a cat in the background


How to run the program:
If you haven’t done so already, install XAMPP to run Pspsps Mail on a localhost (since we were not able to implement the application for online deployment).
Open the XAMPP control panel, and make sure Apache and MySQL are running.
Download the PspspsMail.zip folder, then after unzipping its contents, move the whole folder into the htdocs folder within the XAMPP folder. 
In your preferred browser, type “localhost/PspspsMail” or “localhost/whatever you renamed the folder to”
Press Enter, and the program should run.
If not, then oh well!

Demo:
Make new account
Click on “If you don’t have an account, then sign up!”
Fill in the sign up form
Click “SIGN UP” and a new account is created

Log in
Enter your username and password
Click “LOG IN”

Send mail from self to self (with new account)
Once signed in, click “New Message”
Fill in the form, making sure that the field “To:” is set to your own username, and click “Send Message”

Send mails from self to existing account
Once signed in, click “New Message”
Fill in the form, making sure that the field “To:” is set to your own another user, and click “Send Message”

Logout
When signed in, click on “Logout” on the upper left corner


