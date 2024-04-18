# updatedDatabaseCode
THANK YOU LORD FOR THIS NEW CODE

So to explain this in layman's terms we need to create a database first.
use php/admin

The first thing to do is to define the items in php that go into your database. As an example below,

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

Above are a bunch of items and their corresponding IDs that we defined in the HTML.
$_POST is a method that tells the php code to collect the input values from the input fields and to put it somewhere.

//DATABASE CONNECTION 

$conn = new mysqli('localhost','root','','test');

The code above begins with '$conn' which stands for connection and is the result of a new MySQLi connection. The items inside the parentheses are specific details about the connection such as what 'localhost' is being used, the root(the username of the user.), a password (the empty string), and test (the database name).

//

if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} 

The snippet above is an 'if statement'. The statement begins with parameters being set. The paramaters check if the connection has run into some error(connect_error).
If an error has occured, it is to echo(display) a string that the connection haas run into an error. Afterwards the code is now to stop and display another message that says the connection has failed.

//

else {
    $stmt = $conn->prepare("INSERT INTO registration (firstName, lastName, gender, email, password, number) VALUES (?, ?, ?, ?, ?, ?)");

This snippet is an else statement. If the connection above has not run into an error, the connection is to prepare executing an 
SQL statement. The SQL is then to insert into the 'registration' database the following input values of the items within the parentheses.
 VALUES is an extension that specifies the values that will be inserted in the database. And because there are 6 values in our project, there are 6 question marks.

//

 if (!$stmt) {
        echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
    } 

The !$stmt is a variable that holds the SQL statement and the exclamation comes before it, checks to see if it is true(or if it is set to something).
If it is false or not set, the code is to display the code has run into an error.

// 

 else {
        $stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
        $execval = $stmt->execute();
        if (!$execval) {
            echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
        } else {
            echo "Registration successful...";
        }
        $stmt->close();
    }

If the code does not run into an error, we are giving an instruction to PHP how to handle the SQL treatment and the values it holds.
The parameter is firstly, given the number of strings and number of integers inside the SQL statement. We have 6 strings and 1 value that is a number in which we will define as an integer or i. 
The beginning of the parameter will begin with the corresponding amount of string values we have and amount of integers we want to insert to the database "sssssi". The $execval variable is the result in which the SQL statement is to be executed. 
