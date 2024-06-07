<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        *{
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }
        #dynamicOutput {
            display: none;
        }

    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <nav class=" navbar fixed-top navbar-expand-lg bg-body-tertiary ps-5 pe-5">
        <div class="container">
            <a class="brand navbar-brand " href="#atas">DAFTAR MATERI YANG DIPELAJARI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.html">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../materi.php">Kembali</a>
                </li>           
            </div>
        </div>
    </nav>


<!-- konten penjelasan tugas  -->
    <h3 class="text-center" style="margin-top: 70px;">Printing Variable</h3>
    <div class="container d-flex flex-column" style="border: solid gray 1px;">
        <div class="d-flex flex-row" style="border-bottom: solid gray 1px;">
            <div class="w-50" style=" border-right: solid gray 1px;">
                <p class=" fs-4 text-center" style="border-bottom: solid gray 1px;">Source Code</p>
<pre>
&lt;?php
$x = 20;
$y[] = 10;
$z['name'] = "John Doe";

echo $x; // 20
echo "x=$x, "; // x=20
echo 'x=$x, '; // x=$x
echo 'x='.$x ; // x=20
//echo $y; 
echo $y[0]; // 10
echo "$y[0], "; // 10
echo '$y[0], '; // $y[0]
echo "Name = ".$z['name']; // Name = John Doe
echo "Name = $z[name], "; // Name = John Doe
echo $z['name']; // John Doe
?>
</pre>
            </div>
            <div class="w-50">
                <p class=" fs-4 text-center" style="border-bottom: solid gray 1px;">Output</p>
                <div class="ps-3" id="dynamicOutput">
                <?php
                $x = 20;
                $y[] = 10;
                $z['name'] = "John Doe";

                echo $x; // 20
                echo "x=$x, "; // x=20
                echo 'x=$x, '; // x=$x
                echo 'x='.$x ; // x=20
                //echo $y; // Array to string conversion warning, instead we will print individual elements
                echo $y[0]; // 10
                echo "$y[0], "; // 10
                echo '$y[0], '; // $y[0]
                echo "Name = ".$z['name']; // Name = John Doe
                echo "Name = $z[name], "; // Name = John Doe
                echo $z['name']; // John Doe
                ?>

                </div>
                <div class="container mt-4 mb-3">
                    <button class="btn btn-primary" onclick="showOutput()">Tampilkan Output</button>
                </div>
            
                <script>
                    function showOutput() {
                        document.getElementById('dynamicOutput').style.display = 'block';
                    }
                </script>
            </div>
        </div>
        <div>
            <p  class=" fs-4 text-center">penjelasan</p>
            <p>Kode PHP tersebut mendeklarasikan variabel $x dengan nilai 20, menambahkan elemen pertama 10 ke array $y, dan menetapkan "John Doe" ke kunci 'name' dari array asosiatif $z. Output yang dihasilkan adalah sebagai berikut: pertama, mencetak nilai $x yang menghasilkan "20"; kedua, mencetak "x=$x" dengan interpolasi variabel dalam tanda kutip ganda menghasilkan "x=20"; ketiga, mencetak 'x=$x' tanpa interpolasi dalam tanda kutip tunggal menghasilkan "x=$x"; keempat, mencetak 'x=' . $x dengan penggabungan string menghasilkan "x=20"; kelima, mencoba mencetak array $y langsung yang menghasilkan peringatan "Array to string conversion"; keenam, mencetak elemen pertama $y[0] yang menghasilkan "10"; ketujuh, mencetak "$y[0]" dengan interpolasi dalam tanda kutip ganda menghasilkan "10"; kedelapan, mencetak '$y[0]' tanpa interpolasi dalam tanda kutip tunggal menghasilkan "$y[0]"; kesembilan, mencetak "Name = " . $z['name'] yang menghasilkan "Name = John Doe"; kesepuluh, mencetak "Name = $z[name]" dengan interpolasi variabel array asosiatif dalam tanda kutip ganda menghasilkan "Name = John Doe"; dan terakhir mencetak $z['name'] yang menghasilkan "John Doe".</p>
        </div>
    </div>
        
</body>
</html>