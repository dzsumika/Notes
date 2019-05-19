<?php
require('assets/header.php');
require('scripts/connect.php');

$name = $_SESSION['name'];

$conn = connect();

$sql = 'SELECT subject, note FROM `' . $name . '` ORDER BY subject ASC';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    $to_left = 0;
    
    while($row = $result->fetch_assoc()) {
        if(($row['subject'] && $row['note']) != NULL) {
            echo '<div class="note" style="left: ' . $to_left . 'px;"> <h4> ' . $row['subject'] . ' </h4> <p> ' . $row['note'] . ' </p> </div>';
        }
        
        $to_left += 150;
    }
}
$conn->close();

?>

<div class="create_note">
    <p> Create a Note </p>
</div>

    <form class="create_note_form" action="scripts/add_note.php" method="POST">
        <p> Subject </p>
        <input type="text" maxlength="27" size="27" name="subject" required>
        <p> Note </p> <textarea name="note" rows="4" cols="20" required></textarea>
        <br/>
        <br/>
        <input type="submit" value="POST" id="send_form_button">
    </form>

<div class="show_notes">
    <p> Show My Notes </p>
</div>


<?php
require('assets/footer.php');
?>
