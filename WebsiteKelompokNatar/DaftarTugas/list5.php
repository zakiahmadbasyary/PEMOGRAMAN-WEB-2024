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
    <h3 class="text-center" style="margin-top: 70px;">Materi PHP Array</h3>
    <div class="container d-flex flex-column" style="border: solid gray 1px;">
        <div class="d-flex flex-row" style="border-bottom: solid gray 1px;">
            <div class="w-50" style=" border-right: solid gray 1px;">
                <p class=" fs-4 text-center" style="border-bottom: solid gray 1px;">Source Code</p>
<pre>
&lt;?php
$arr1 = array('1','2','3');
$arr1[] = '4';
$arr['name']='John Doe';
$arr = array('name'=>'John Doe');
echo $arr1[0]; // prints 1
echo $arr1[1]; // prints 2
echo $arr1[2]; // prints 3
echo $arr1[3]; // prints 4
echo $arr['name']; // prints John Doe
?>
</pre>
            </div>
            <div class="w-50">
                <p class=" fs-4 text-center" style="border-bottom: solid gray 1px;">Output</p>
                <div class="ps-3" id="dynamicOutput">
                    <?php
                    $arr1 = array('1','2','3');
                    $arr1[] = '4';
                    $arr['name']='John Doe';
                    $arr = array('name'=>'John Doe');
                    echo $arr1[0]; // prints 1
                    echo $arr1[1]; // prints 2
                    echo $arr1[2]; // prints 3
                    echo $arr1[3]; // prints 4
                    echo $arr['name']; // prints John Doe
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
            <p>Kode tersebut mendemonstrasikan manipulasi array dalam PHP. Pada awalnya, array $arr berisi tiga elemen string ('1', '2', '3'). Elemen '4' kemudian ditambahkan ke array tersebut menggunakan sintaks $arr[]. Selanjutnya, sebuah elemen dengan kunci 'name' dan nilai 'John Doe' ditambahkan ke array. Namun, array kemudian diubah menjadi hanya berisi satu elemen dengan kunci 'name' dan nilai 'John Doe', sehingga elemen-elemen sebelumnya ('1', '2', '3', '4') hilang. Pernyataan echo yang mencoba mencetak elemen-elemen dengan kunci indeks (0, 1, 2, 3) akan menghasilkan kesalahan karena elemen-elemen tersebut tidak ada lagi setelah array diubah. Hanya pernyataan echo $arr['name']; yang akan berhasil mencetak 'John Doe'.</p>
        </div>
    </div>
        
</body>
</html>