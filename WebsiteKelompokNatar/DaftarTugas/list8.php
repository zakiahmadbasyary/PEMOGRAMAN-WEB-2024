
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MateriPHP</title>
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
    <h3 class="text-center" style="margin-top: 70px;">Materi PHP Loop-While</h3>
    <div class="container d-flex flex-column" style="border: solid gray 1px;">
        <div class="d-flex flex-row" style="border-bottom: solid gray 1px;">
            <div class="w-50" style=" border-right: solid gray 1px;">
                <p class=" fs-4 text-center" style="border-bottom: solid gray 1px;">Source Code</p>
<pre>
&lt;?php
$x = 10;
do {
    echo $x;
} while ($x < 9);
?>
</pre>
            </div>
            <div class="w-50">
                <p class=" fs-4 text-center" style="border-bottom: solid gray 1px;">Output</p>
                <div class="ps-3" id="dynamicOutput">
                    <?php
                        $x = 10;
                        do {
                            echo $x;
                        } while ($x < 9);
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
            <p class=" fs-4 text-center">penjelasan</p>
            <p>Pada baris awal variabel '$x' diinisialisasi dengan nilai '10'. Pada baris berikutnya terdapat fungsi perulangan 'do-while', bagian 'do' ini akan dijalankan setidaknya sekali tanpa memeriksa kondisi awalnya. Di dalam fungsi 'do', terdapat perintah 'echo $x;' yang akan mencetak nilai '$x' ke layar. 
            Pada baris berikutnya terdapat perulangan 'while', setelah fungsi 'do' dieksekusi, kondisi di dalam 'while' ('$x < 9') akan diperiksa. Jika kondisi 'while' bernilai 'true', maka perulangan 'do' akan dieksekusi lagi. Jika kondisi 'while' bernilai 'false', maka eksekusi akan berhenti. 
            Kode ini mencetak nilai '10' sekali karena perulangan 'do' selalu dieksekusi setidaknya sekali, terlepas dari kondisi 'while'. Setelah menjalankan pernyataan 'echo $x;', kondisi 'while' ('$x < 9') dievaluasi, dan karena kondisi ini 'false', perulangan tidak diulang</p>
        </div>
    </div> 
</body>
</html>
