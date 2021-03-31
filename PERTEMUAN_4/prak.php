<!-- ----Pembahasan Modul 5---- -->
<!-- Modul ini bahas biar bisa interaksi sama user ndak hanya backend -->
<!-- <?php
	if (isset($_POST['submit_btn'])) {
        if (strlen($_POST['diameter']) > 0) {
            echo "login !";
		} else {
            echo "Diisii";
		}
	}
?> -->

<?php
$luas = 0;
$volume = 4;
 
  if (isset($_POST['button submit'])) {
       $diamater = $_POST['diameter'];
       $tinggi = $_POST['tinggi'];

       echo "Diameter $diamater";
       echo "Tinggi $tinggi ";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
	<form action="" method="post">
		<input type="text" name="diameter" value="14">
		<button>Submit</button>
	</form>
</body>
    <!-- <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button>Hitung</button>

        <hr>

        <ul>
            <li>Luas Sisi : 0</li>
            <li>Volume : 0</li>
        </ul>
    </form> -->
</body>
</html>

<?php
    class tabung {
        private $diameter;
        private $tinggi;
        private $r;
        private $luas_selimut;
        private $phi =3.14;

        // public function_constructor 
        public function setDiameter($value) {
            $this->diameter=$value;
            $this->r=$this->diameter/2;
        }
        public function setTinggi($value) {
            $this->tinggi=$value;
        }

        public function hitungLuas() {
            $this->luas_selimut=3.14*$this->diameter*$this->tinggi;
        }

        public function getLuas() {
            return $this->luas_selimut;
        }
?>
--------------CATATAN----------------
<!-- rata-rata kalok pakek constractor harus isi -->
<!-- nerapin class, property, method sama ngisi  -->