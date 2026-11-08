<?php
require_once 'Controller/AddressController.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Tyler Follis - Final </title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<table>

<tr>
    <th>Address #</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Street Address</th>
    <th>City</th>
    <th>State</th>
    <th>Zip Code</th>
    <th></th>
    <th></th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>

<tr>
<form method="post">

<td>
    <?php echo $row['AddressNo']; ?>
    <input
        type="hidden"
        name="AddressNo"
        value="<?php echo $row['AddressNo']; ?>">
</td>

<td>
    <input
        type="text"
        name="First"
        value="<?php echo $row['First']; ?>">
</td>

<td>
    <input
        type="text"
        name="Last"
        value="<?php echo $row['Last']; ?>">
</td>

<td>
    <input
        type="text"
        name="Street"
        value="<?php echo $row['Street']; ?>">
</td>

<td>
    <input
        type="text"
        name="City"
        value="<?php echo $row['City']; ?>">
</td>

<td>
    <input
        type="text"
        name="State"
        value="<?php echo $row['State']; ?>">
</td>

<td>
    <input
        type="text"
        name="Zip"
        value="<?php echo $row['Zip']; ?>">
</td>

<td>
    <input
        type="submit"
        name="update"
        value="Update">
</td>

<td>
    <a href="?delete=<?php echo $row['AddressNo']; ?>">
        Delete
    </a>
</td>

</form>
</tr>

<?php } ?>

</table>

<br><br>

<form method="post">

<p>
First Name:
<input type="text" name="First" required>
</p>

<p>
Last Name:
<input type="text" name="Last" required>
</p>

<p>
Street:
<input type="text" name="Street" required>
</p>

<p>
City:
<input type="text" name="City" required>
</p>

<p>
State:
<input type="text" name="State" maxlength="2" required>
</p>

<p>
Zip:
<input type="text" name="Zip" required>
</p>

<input
    type="submit"
    name="add"
    value="Add User">

</form>

</body>
</html>