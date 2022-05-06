<?php
/*
 * List of users table
 */
require "config.php";

// Create connection
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$conn->close();
?>
<h2>User List</h2>
<table style="border: 1px solid black; width: 100%; text-align: left;">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
<?php
if($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      ?>
      <tr>
          <td><?php echo $row['id'];?></td>
          <td><?php echo $row['username'];?></td>
          <td><?php echo $row['role'];?></td>
      </tr>
  <?php }
} else {
    ?>
    <tr>
        <td colspan="3">There are 0 users</td>
    </tr>
    <?php } ?>
    </tbody>
    <?php if($result->num_rows > 0){ ?>
        <tfoot>
            <tr>
                <td colspan="3">There are <?php echo $result->num_rows ;?> users</td>
            </tr>
        </tfoot>
    <?php } ?>
</table>

