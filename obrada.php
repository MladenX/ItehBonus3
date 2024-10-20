<?php
require "dbBroker.php";
require "model/prijava.php";

if (isset($_POST['submit']) && $_POST['submit'] == 'izmeni' && isset($_POST['id_predmeta'])) {
    $prijava = new Prijava(
        $_POST['id_predmeta'],
        $_POST['predmet'],
        $_POST['katedra'],
        $_POST['sala'],
        $_POST['datum']
    );

    $status = Prijava::update($prijava, $conn);

    if ($status) {
        echo "Uspesno izmenjena prijava";
    } else {
        echo "Doslo je do problema prilikom izmene prijave";
    }

    header("Location: home.php");
    exit();
}
?>