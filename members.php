<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TravelClub";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>


<section class="container" id="members">
    <div class="row">
        <div class="row header">
            <h1>Members</h1>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Gender</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td>
                                <?php echo $row['firstName']; ?>
                            </td>
                            <td>
                                <?php echo $row['lastName']; ?>
                            </td>
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <td>
                                <?php echo $row['userName']; ?>
                            </td>
                            <td>
                                <?php echo $row['email']; ?>
                            </td>
                            <td>
                                <?php echo $row['phone']; ?>
                            </td>
                            <td>
                                <?php
                                if($row['gender']== "F") {
                                    echo "Female";
                                }
                                else echo "Male";
                                
                                ?>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
            <?php
            mysqli_free_result($result);
            mysqli_close($conn);
            ?>

        </div>
    </div>
</section>