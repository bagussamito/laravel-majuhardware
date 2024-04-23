<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Tambah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* Container style */
        .container {
            margin-top: 50px;
        }

        /* Card style */
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
            padding: 20px;
        }

        /* Card header style */
        .card-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        /* Form style */
        .form-group {
            margin-bottom: 20px;
        }

        /* Label style */
        label {
            font-weight: bold;
            color: #333;
        }

        /* Input style */
        .form-control {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }

        /* Textarea style */
        textarea.form-control {
            resize: vertical;
            width: 100%;
        }

        /* Button style */
        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        /* Button hover style */
        .btn-primary:hover {
            background-color: #0056b3;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>

<body>
    <a class="add-link" href="{{ route('pages.admin') }}">Lihat Data</a>
    <!-- Konten dari template lain -->
    <div class="container">

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Tambah Gambar</div>

                    <div class="card-body">
                        <form action="{{ route('submit-data') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="type">Tipe Gambar</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="carousel">Carousel</option>
                                    <option value="promo_gadget">Promo Gadget</option>
                                    <option value="promo_laptop">Promo Laptop</option>
                                    <option value="promo_komputer">Promo Komputer</option>
                                    <option value="promo_elektronik">Promo Elektronik</option>
                                    <option value="promo_aksesoris">Promo Aksessoris</option>
                                    <option value="promo_elcvehicle">Promo Elc. Vehicle</option>
                                    <!-- Tambahkan pilihan lainnya sesuai kebutuhan -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Nama Gambar</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="image">Unggah Gambar</label>
                                <input type="file" name="image" id="image" class="form-control-file">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
