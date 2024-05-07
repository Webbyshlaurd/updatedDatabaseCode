<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time tables</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
  <?php 
$conn = new mysqli('localhost', 'root', '', 'userdb');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

$sql = "SELECT * FROM tb_data";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    $username = $row['username'];
    $password = $row['password'];
    $email = $row['email'];
    echo "<tr>
            <th scope='row'>$id</th>
            <td>$username</td>
            <td>$password</td>
            <td>$email</td>
          </tr>";
}

$conn->close();
?>
  </tbody>
</table>
    </div>
</body>
</html>