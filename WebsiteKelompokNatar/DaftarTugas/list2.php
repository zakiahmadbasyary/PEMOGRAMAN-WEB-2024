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
    <h3 class="text-center" style="margin-top: 70px;">Local Scope</h3>
    <div class="container d-flex flex-column" style="border: solid gray 1px;">
        <div class="d-flex flex-row" style="border-bottom: solid gray 1px;">
            <div class="w-50" style=" border-right: solid gray 1px;">
                <p class=" fs-4 text-center" style="border-bottom: solid gray 1px;">Source Code</p>
<pre>
&lt;?php

function send_data() {
    $my_data = "Inside data";
    echo $my_data; //echoes $my_data value
}
// throws an error messages
echo $my_data
?>
</pre>
            </div>
            <div class="w-50">
                <p class=" fs-4 text-center" style="border-bottom: solid gray 1px;">Output</p>
                <div class="ps-3" id="dynamicOutput">
                    <?php

                    function send_data() {
                        $my_data = "Inside data";
                        echo $my_data; //echoes $my_data value
                    }
                    // throws an error messages
                    echo $my_data
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
            <p>Kode PHP di atas mendefinisikan fungsi `send_data` yang mendeklarasikan variabel lokal `$my_data` dengan nilai "Inside data" dan mencetak nilai tersebut menggunakan `echo`. Namun, saat mencoba mencetak `$my_data` di luar fungsi, terjadi kesalahan karena `$my_data` tidak ada di ruang lingkup global. Berikut penjelasannya dalam satu paragraf:

Kode PHP mendefinisikan fungsi `send_data` yang mendeklarasikan variabel lokal `$my_data` dengan nilai "Inside data" dan mencetak nilainya menggunakan `echo $my_data`. Namun, saat kode mencoba mencetak `$my_data` di luar fungsi dengan `echo $my_data`, ini menyebabkan kesalahan karena `$my_data` adalah variabel lokal yang hanya dikenal di dalam fungsi `send_data` dan tidak dapat diakses dari luar fungsi tersebut. Karena itu, ketika `echo $my_data` dieksekusi di luar fungsi, PHP akan memberikan pesan kesalahan bahwa variabel `$my_data` tidak terdefinisi.</p>
        </div>
    </div>
        
</body>
</html>