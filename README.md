# sonnys
Sonnys Evaluation

Please see the live web application: 

http://crystalbit.us/ 

PHP Team
Candidate Evaluation


This goal of this evaluation is to get an assessment of your knowledge and proficiency in PHP and related technology such as MySQL and Linux. As with many things in the programming world, many of the questions will have more than one solution. There isn't a time limit on the exam, so take your time and good luck!
Unless otherwise specified, you should assume the following:
* PHP >= 7.1
* error_reporting = E_ALL 
* Apache >= 2.4
* 64-bit Linux
* MySQL >= 5.5


PHP


PHP Section 1: Code Analysis


This section focuses on your ability to analyze, debug, and repair existing php code. The code samples given may emit php error messages, contain logic errors, or fail to run at all.


For each question, please provide as much detail as possible:


1. Identify mistakes, describe problems caused, and propose a fix for them.
2. Recommendations for general improvements and an explanation of why the change(s) would improve the code.
3. Predict the output of the corrected code.




Question 1.1


Assume that SupportBase is declared elsewhere and successfully loaded by the autoloader.
Given the described class definitions, what is the output of index.php?


Application/Widget.php
  



Support/Widget.php
  



index.php
  



Answer 1.1
(Provide your answer below.  Use as much space as necessary.)













Question 1.2


Assume that the Exam class will be successfully loaded by the autoloader. Given the described class definition, what is the output of index.php?


Exam.php
  



index.php
  





Answer 1.2
(Provide your answer below.  Use as much space as necessary.)






Question 1.3


Assume that the Greeter and InformalGreeter classes will be successfully loaded by the autoloader. 
Given the described class definitions, what is the output of index.php? 


Greeter.php
  

InformalGreeter.php
  
Index.php
  


Answer 1.3
(Provide your answer below.  Use as much space as necessary.)




________________
Section 2: Code Writing


In this section, you will be required to write actual code according to the instructions given. Your top priority is creating code which meets the functional and technical requirements of each question. However, the code will be evaluated using the following criteria:


1. Accuracy – How well did the code meet the given instructions?
2. Clarity – How easy is it to understand the intent of the code?
3. Syntax – Would the code execute without errors, warnings, and notices?
4. Conciseness – Simple code is good code; is the solution unnecessarily complex?
5. Extensibility – How easily can the code be modified to meet future needs?
6. Best Practices – Does the code follow common coding best-practices?




You may use any and all tools provided to you by the PHP language. You may also add any notes you feel necessary to further explain your coding decisions.




Question 2.1


1. Create a class to represent a Person. Each Person must have a first name a the last name. They may also have a middle name.


2. Add a class to represent and Employee. An Employee is a special kind of Person who must have a first name, last name, and employee id. An Employee may also have a middle name.


3. Add a class to represent a Pet. A Pet must have a first name. It may also have a middle name and/or a last name.






Answer 2.1
(Provide your answer below.  Use as much space as necessary.)














Question 2.2


Assuming that you are working on an API endpoint that retrieves a given Order made by a Customer and that your OrderLoader receives an id as a parameter and returns an instance of Order. Considering the following class structure write a method that would ensure that the Order being retrieved belongs to the logged Customer.


Action.php
  



Customer.php
  

Order.php
  

Answer 2.2
(Provide your answer below.  Use as much space as necessary.)


________________
Question 2.3


Without altering the given code:
* Represent a universal remote that can turn on a television and a cable box.  
* Represent a remote control user which can push the `power on’ button of a remote control.
* Have a remote control user push the `power on’ button of a tv remote.
* Have the same remote control user push the `power on’ button of a universal remote.

  

Answer 2.3
(Provide your answer below.  Use as much space as necessary.)






Question 2.4


Provide Horse, Bird, and Pegasus classes given the following rules:
   * A Horse gallops.
   * A Bird fly.
   * A Pegasus flies in exactly the same way as a Bird.
   * A Pegasus gallops in exactly the same way as a Horse.


Note:         Since galloping and flying are complicated operations, they are assumed to require several lines of non-trivial code.  The details of these algorithms are irrelevant to this question. You may represent them in your code using comments. For example:


  



Answer 2.4
(Provide your answer below.  Use as much space as necessary.)


________________


MySQL
Section 1
This section focuses on your ability to analyze, debug, and repair existing MySQL code. The code samples given may emit error messages, contain logic errors, or fail to run at all.


For each question, please provide as much detail as possible:


   1. Identify mistakes, describe problems caused, and propose a fix for them.
   2. Recommendations for general improvements and an explanation of why the change(s) would improve the code.
   3. Predict the output of the corrected code.


Question 1.1
Assuming that in an ECommerce application you have a table for Orders and another for OrderItems and their relationship is one to many, the following query was written:


  



Although it returned all results, including the expected ones, the performance was poor and pagination was not available. Rewrite the query so the performance can be improved and pagination can be achieved.


Answer 1.1
(Provide your answer below.  Use as much space as necessary.)


Question 1.2


While running a command line job, an insert query returned the following error:


  

Considering the code and table structure below what (and why) needs to be modified to ensure the correct execution of the code.


console.php
  



Order table
  

Answer 1.2
(Provide your answer below.  Use as much space as necessary.)














Question 1.3
The most commons ways of improving the response time of a query are by:


   * Adding indexes.
   * Ensuring that the query has proper joins, filtering, and group clauses.
   * Using the Explain to gather more information on the query result.


Considering that you have a very large table, with millions of rows, that is joined by many other tables to get a common result, what can be done in MySQL, aside of what is mentioned above, to improve the performance of retrieving results?


Answer 1.3
(Provide your answer below.  Use as much space as necessary.)










Linux
Section 1
This section focuses on your ability to analyze, debug, and execute Linux commands.


For each question, please provide as much detail as possible:


   1. Identify mistakes, describe problems caused, and propose a fix for them.
   2. Recommendations for general improvements and an explanation of why the change(s) to achieve the desired result.








Question 1.1
While executing a php script through the cron job queue the following error was returned:


  

Assuming that both the script being executed and the bash file were properly created, what needs to be done to ensure the execution of the script?


Answer 1.1
 (Provide your answer below.  Use as much space as necessary.)








Question 1.2
Troubleshooting a production issue can be very hard especially if you don’t have the necessary information. Log filtering is a necessary skill to find and identify an given error on any application (PHP, MySQL, etc). What commands can you use to gather an error from a  errors.log file? Please give some examples.




Answer 1.2
(Provide your answer below.  Use as much space as necessary.)


















Question 1.3
Using your favorite Linux distribution, how would you restart Apache or MySQL?
Answer 1.3
(Provide your answer below.  Use as much space as necessary.)










Question 1.4
Considering that you are on a Windows or OSX environment with a proper terminal write the ssh command to login into development box. 


Variables:


   * Domain: controls
   * Username: Your first name first letter + your last name
   * Password: mysecretpassword
   * Server location: test.dockermachines.local


Answer 1.4
(Provide your answer below.  Use as much space as necessary.)


________________

Candidate:                Date:
