<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .card-header-title {
            font-weight: bold;
            font-size: 1.2rem;
        }
        .button.is-primary {
            background-color: #3273dc;
            border-radius: 8px;
            transition: 0.3s;
        }
        .button.is-primary:hover {
            background-color: #2753a6;
        }
    </style>
</head>
<body>
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-5">
                    <div class="card">
                        <header class="card-header has-background-primary">
                            <p class="card-header-title has-text-white is-centered">Form Pendaftaran</p>
                        </header>
                        <div class="card-content">
                            <form action="{{ route('user.store') }}" method="POST">
                                @csrf
                                <div class="field">
                                    <label class="label">Nama</label>
                                    <div class="control">
                                        <input type="text" class="input" name="nama" placeholder="Masukkan nama" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">NPM</label>
                                    <div class="control">
                                        <input type="text" class="input" name="npm" placeholder="Masukkan NPM" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Kelas</label>
                                    <div class="control">
                                        <input type="text" class="input" name="kelas" placeholder="Masukkan kelas" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <button type="submit" class="button is-primary is-fullwidth">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <p class="has-text-centered mt-4"><a href="/" class="has-text-primary">Kembali ke Beranda</a></p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
