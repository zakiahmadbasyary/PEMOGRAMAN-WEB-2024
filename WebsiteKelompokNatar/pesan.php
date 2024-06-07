<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Kritik dan Saran</title>
</head>
<body class="d-flex justify-content-center align-items-center" style="background-color:#545454;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <div class="container text-light p-4" style=" width: 70rem; border: 2px solid aliceblue; border-radius: 30px;" >
            <form action="" method="post" id="myForm" autocomplete="off">
                <div class="mb-3 text-center">
                    <p class="fs-2 fw-semibold">Pesan</p>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama </label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Anda">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>

                <div class="Pesan Kepada">
                    <label for="kepada" class="form-label">Kritik</label>
                    <input type="text" class="form-control" id="kepada" name="kepada" placeholder="Pesan untuk siapa dari kami berempat" </input>
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea class="form-control" id="pesan" name="pesan" placeholder="Masukkan Saran anda" ></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button onclick="showAlert()" class="btn btn-dark w-100"  type="button" name="submit">Kirim</button>
                    <script>
                        function showAlert() {
                            alert("Kritik dan Saran Terkirim");
                            document.location.href = 'index.html';
                        }
                    </script>
                    <a href="index.html"><button class="btn btn-outline-dark w-100" type="button">Kembali</button></a>
                </div>
            </form>
        </div>
</body>
</html>