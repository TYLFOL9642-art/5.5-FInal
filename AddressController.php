<?php

require_once
'Model/AddressModel.php';

$model =
new AddressModel();

if(isset($_POST['add']))
{
    $model->addAddress(
    $_POST['First'],
    $_POST['Last'],
    $_POST['Street'],
    $_POST['City'],
    $_POST['State'],
    $_POST['Zip']
    );
}

if(isset($_POST['update']))
{
    $model->updateAddress(
    $_POST['AddressNo'],
    $_POST['First'],
    $_POST['Last'],
    $_POST['Street'],
    $_POST['City'],
    $_POST['State'],
    $_POST['Zip']
    );
}

if(isset($_GET['delete']))
{
    $model->deleteAddress(
    $_GET['delete']
    );
}

$result =
$model->getAllAddresses();
?>