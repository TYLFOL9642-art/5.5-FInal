<?php

class AddressModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli(
            "localhost",
            "root",
            "",
            "sdc310_midterm"
        );
    }

    public function getAllAddresses()
    {
        return $this->conn->query(
            "SELECT * FROM addresses"
        );
    }

    public function addAddress(
        $first,
        $last,
        $street,
        $city,
        $state,
        $zip
    )
    {
        $sql = "INSERT INTO addresses
        (First,Last,Street,City,State,Zip)
        VALUES
        (
        '$first',
        '$last',
        '$street',
        '$city',
        '$state',
        '$zip'
        )";

        $this->conn->query($sql);
    }

    public function updateAddress(
        $id,
        $first,
        $last,
        $street,
        $city,
        $state,
        $zip
    )
    {
        $sql = "UPDATE addresses SET
        First='$first',
        Last='$last',
        Street='$street',
        City='$city',
        State='$state',
        Zip='$zip'
        WHERE AddressNo=$id";

        $this->conn->query($sql);
    }

    public function deleteAddress($id)
    {
        $this->conn->query(
            "DELETE FROM addresses
             WHERE AddressNo=$id"
        );
    }
}
?>