<?php
$conn = mysqli_connect("localhost", "root", "", "apartemen");

if (isset($_POST["submit"])) {
    if ($_POST["submit"] == "Add") {
        add();
    } else if ($_POST["submit"] == "Edit") {
        edit();
    } else {
        delete();
    }
}

function add()
{
    global $conn;
    $image1 = $_FILES['file1']['name'];
    $image2 = $_FILES['file2']['name'];
    $image3 = $_FILES['file3']['name'];
    $judul = $_POST["judul"];
    $desc_apart = $_POST["des_apart"];
    $image4 = $_FILES['file4']['name'];
    $image5 = $_FILES['file5']['name'];
    $image6 = $_FILES['file6']['name'];
    $image7 = $_FILES['file7']['name'];
    $image8 = $_FILES['file8']['name'];
    $image9 = $_FILES['file9']['name'];
    $desc_fasil = $_POST["desk_fas"];
    $image10 = $_FILES['file10']['name'];
    $image11 = $_FILES['file11']['name'];
    $image12 = $_FILES['file12']['name'];
    $title_type1 = $_POST['title_tipe1'];
    $desc_tipe1 = $_POST["desk_tipe1"];
    $image13 = $_FILES['file13']['name'];
    $image14 = $_FILES['file14']['name'];
    $image15 = $_FILES['file15']['name'];
    $title_type2 = $_POST['title_tipe2'];
    $desc_tipe2 = $_POST["desk_tipe2"];
    $image16 = $_FILES['file16']['name'];
    $image17 = $_FILES['file17']['name'];
    $image18 = $_FILES['file18']['name'];
    $title_type3 = $_POST['title_tipe3'];
    $desc_tipe3 = $_POST["desk_tipe3"];

    // Upload images
    move_uploaded_file($_FILES['file1']['tmp_name'], 'uploads/' . $image1);
    move_uploaded_file($_FILES['file2']['tmp_name'], 'uploads/' . $image2);
    move_uploaded_file($_FILES['file3']['tmp_name'], 'uploads/' . $image3);
    move_uploaded_file($_FILES['file4']['tmp_name'], 'uploads/' . $image4);
    move_uploaded_file($_FILES['file5']['tmp_name'], 'uploads/' . $image5);
    move_uploaded_file($_FILES['file6']['tmp_name'], 'uploads/' . $image6);
    move_uploaded_file($_FILES['file7']['tmp_name'], 'uploads/' . $image7);
    move_uploaded_file($_FILES['file8']['tmp_name'], 'uploads/' . $image8);
    move_uploaded_file($_FILES['file9']['tmp_name'], 'uploads/' . $image9);
    move_uploaded_file($_FILES['file10']['tmp_name'], 'uploads/' . $image10);
    move_uploaded_file($_FILES['file11']['tmp_name'], 'uploads/' . $image11);
    move_uploaded_file($_FILES['file12']['tmp_name'], 'uploads/' . $image12);
    move_uploaded_file($_FILES['file13']['tmp_name'], 'uploads/' . $image13);
    move_uploaded_file($_FILES['file14']['tmp_name'], 'uploads/' . $image14);
    move_uploaded_file($_FILES['file15']['tmp_name'], 'uploads/' . $image15);
    move_uploaded_file($_FILES['file16']['tmp_name'], 'uploads/' . $image16);
    move_uploaded_file($_FILES['file17']['tmp_name'], 'uploads/' . $image17);
    move_uploaded_file($_FILES['file18']['tmp_name'], 'uploads/' . $image18);

    $query = "INSERT INTO web VALUES('','$image1','$image2','$image3','$judul','$desc_apart','$image4',
    '$image5','$image6','$image7','$image8','$image9','$desc_fasil','$image10','$image11','$image12',
    '$title_type1','$desc_tipe1','$image13','$image14', '$image15','$title_type2','$desc_tipe2','$image16',
    '$image17','$image18','$title_type3','$desc_tipe3')";
    mysqli_query($conn, $query);
    echo
    "
<script> alert('done'); document.location.href = 'index2.php';</script>
";
}

function edit()
{
    global $conn;
    $id = $_GET['id'];

    if ($_FILES["file1"]["error"] != 4) {
        $image1 = $_FILES['file1']['name'];
        move_uploaded_file($_FILES['file1']['tmp_name'], 'uploads/' . $image1);
        $query1 = "UPDATE web SET img1 = '$image1' WHERE id = $id";
        mysqli_query($conn, $query1);
    };
    if ($_FILES["file2"]["error"] != 4) {
        $image2 = $_FILES['file2']['name'];
        move_uploaded_file($_FILES['file2']['tmp_name'], 'uploads/' . $image2);
        $query2 = "UPDATE web SET img2 = '$image2' WHERE id = $id";
        mysqli_query($conn, $query2);
    };
    if ($_FILES["file3"]["error"] != 4) {
        $image3 = $_FILES['file3']['name'];
        move_uploaded_file($_FILES['file3']['tmp_name'], 'uploads/' . $image3);
        $query3 = "UPDATE web SET img3 = '$image3' WHERE id = $id";
        mysqli_query($conn, $query3);
    };
    $judul = $_POST["judul"];

    $query4 = "UPDATE web SET title = '$judul' WHERE id = '$id'";
    mysqli_query($conn, $query4);

    $desc_apart = $_POST["des_apart"];
    $query5 = "UPDATE web SET des_apartemen = '$desc_apart' WHERE id = '$id'";
    mysqli_query($conn, $query5);

    if ($_FILES["file4"]["error"] != 4) {
        $image4 = $_FILES['file4']['name'];
        move_uploaded_file($_FILES['file4']['tmp_name'], 'uploads/' . $image4);
        $query6 = "UPDATE web SET img4 = '$image4' WHERE id = $id";
        mysqli_query($conn, $query6);
    };
    if ($_FILES["file5"]["error"] != 4) {
        $image5 = $_FILES['file5']['name'];
        move_uploaded_file($_FILES['file5']['tmp_name'], 'uploads/' . $image5);
        $query7 = "UPDATE web SET img5 = '$image5' WHERE id = $id";
        mysqli_query($conn, $query7);
    };
    if ($_FILES["file6"]["error"] != 4) {
        $image6 = $_FILES['file6']['name'];
        move_uploaded_file($_FILES['file6']['tmp_name'], 'uploads/' . $image6);
        $query8 = "UPDATE web SET img6 = '$image6' WHERE id = $id";
        mysqli_query($conn, $query8);
    };
    if ($_FILES["file7"]["error"] != 4) {
        $image7 = $_FILES['file7']['name'];
        move_uploaded_file($_FILES['file7']['tmp_name'], 'uploads/' . $image7);
        $query9 = "UPDATE web SET img7 = '$image7' WHERE id = $id";
        mysqli_query($conn, $query9);
    };
    if ($_FILES["file8"]["error"] != 4) {
        $image8 = $_FILES['file8']['name'];
        move_uploaded_file($_FILES['file8']['tmp_name'], 'uploads/' . $image8);
        $query10 = "UPDATE web SET img8 = '$image8' WHERE id = $id";
        mysqli_query($conn, $query10);
    };
    if ($_FILES["file9"]["error"] != 4) {
        $image9 = $_FILES['file9']['name'];
        move_uploaded_file($_FILES['file9']['tmp_name'], 'uploads/' . $image9);
        $query11 = "UPDATE web SET img9 = '$image9' WHERE id = $id";
        mysqli_query($conn, $query11);
    };

    $desc_fasil = $_POST["desk_fas"];
    $query12 = "UPDATE web SET des_fasilitas = '$desc_fasil' WHERE id = '$id'";
    mysqli_query($conn, $query12);

    if ($_FILES["file10"]["error"] != 4) {
        $image10 = $_FILES['file10']['name'];
        move_uploaded_file($_FILES['file10']['tmp_name'], 'uploads/' . $image10);
        $query13 = "UPDATE web SET img10 = '$image10' WHERE id = $id";
        mysqli_query($conn, $query13);
    };
    if ($_FILES["file11"]["error"] != 4) {
        $image11 = $_FILES['file11']['name'];
        move_uploaded_file($_FILES['file11']['tmp_name'], 'uploads/' . $image11);
        $query14 = "UPDATE web SET img11 = '$image11' WHERE id = $id";
        mysqli_query($conn, $query14);
    };
    if ($_FILES["file12"]["error"] != 4) {
        $image12 = $_FILES['file12']['name'];
        move_uploaded_file($_FILES['file12']['tmp_name'], 'uploads/' . $image12);
        $query15 = "UPDATE web SET img12 = '$image12' WHERE id = $id";
        mysqli_query($conn, $query15);
    };
    $desc_tipe1 = $_POST["desk_tipe1"];
    $query16 = "UPDATE web SET desk_tipe1 = '$desc_tipe1' WHERE id = '$id'";
    mysqli_query($conn, $query16);

    if ($_FILES["file13"]["error"] != 4) {
        $image13 = $_FILES['file13']['name'];
        move_uploaded_file($_FILES['file13']['tmp_name'], 'uploads/' . $image13);
        $query17 = "UPDATE web SET img13 = '$image13' WHERE id = $id";
        mysqli_query($conn, $query17);
    };

    if ($_FILES["file14"]["error"] != 4) {
        $image14 = $_FILES['file14']['name'];
        move_uploaded_file($_FILES['file14']['tmp_name'], 'uploads/' . $image14);
        $query18 = "UPDATE web SET img14 = '$image14' WHERE id = $id";
        mysqli_query($conn, $query18);
    };


    if ($_FILES["file15"]["error"] != 4) {
        $image15 = $_FILES['file15']['name'];
        move_uploaded_file($_FILES['file15']['tmp_name'], 'uploads/' . $image15);
        $query19 = "UPDATE web SET img15 = '$image15' WHERE id = $id";
        mysqli_query($conn, $query19);
    };
    $desc_tipe2 = $_POST["desk_tipe2"];
    $query20 = "UPDATE web SET desk_tipe2 = '$desc_tipe2' WHERE id = '$id'";
    mysqli_query($conn, $query20);

    if ($_FILES["file16"]["error"] != 4) {
        $image16 = $_FILES['file16']['name'];
        move_uploaded_file($_FILES['file16']['tmp_name'], 'uploads/' . $image16);
        $query21 = "UPDATE web SET img16 = '$image16' WHERE id = $id";
        mysqli_query($conn, $query21);
    };

    if ($_FILES["file17"]["error"] != 4) {
        $image17 = $_FILES['file17']['name'];
        move_uploaded_file($_FILES['file17']['tmp_name'], 'uploads/' . $image17);
        $query22 = "UPDATE web SET img17 = '$image17' WHERE id = $id";
        mysqli_query($conn, $query22);
    };

    if ($_FILES["file18"]["error"] != 4) {
        $image18 = $_FILES['file18']['name'];
        move_uploaded_file($_FILES['file18']['tmp_name'], 'uploads/' . $image18);
        $query23 = "UPDATE web SET img18 = '$image18' WHERE id = $id";
        mysqli_query($conn, $query23);
    };

    $desc_tipe3 = $_POST["desk_tipe3"];
    $query24 = "UPDATE web SET desk_tipe3 = '$desc_tipe3' WHERE id = '$id'";
    mysqli_query($conn, $query24);

    $title_type1 = $_POST['title_tipe1'];
    $query25 = "UPDATE web SET title_tipe1 = '$title_type1' WHERE id = '$id'";
    mysqli_query($conn, $query25);

    $title_type2 = $_POST['title_tipe2'];
    $query26 = "UPDATE web SET title_tipe2 = '$title_type2' WHERE id = '$id'";
    mysqli_query($conn, $query26);

    $title_type3 = $_POST['title_tipe3'];
    $query27 = "UPDATE web SET title_tipe3 = '$title_type3' WHERE id = '$id'";
    mysqli_query($conn, $query27);

    echo "<script> alert('done'); document.location.href = 'admin.php';</script>";
}
function delete()
{
    global $conn;
    $id = $_POST["submit"];
    $query = "DELETE FROM web WHERE id = $id";
    mysqli_query($conn, $query);
    echo " <script>alert ('delet sukses'); document.location.href = 'admin.php';  </script>";
};
function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["confirm-password"]);

    //cek username
    $result = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo " <script>alert ('username sudah dipakai');  </script>";
        return false;
    }


    //konfirmasi password
    if ($password != $password2) {
        echo " <script>alert ('konfirmasi password tidak sesuai');  </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO admin VALUES ('','$username','$password') ");
    return mysqli_affected_rows($conn);
}
