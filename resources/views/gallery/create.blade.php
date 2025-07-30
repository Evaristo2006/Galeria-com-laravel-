<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', sans-serif;
        background-color: #f2f2f2;
    }

    .container {
        max-width: 960px;
        margin: 40px auto;
        background: #fff;
        padding: 30px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        border-radius: 10px;
    }

    h1, h2 {
        text-align: center;
        margin-bottom: 30px;
        color: #333;
    }

    .action {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-weight: 600;
    }

    input[type="text"],
    input[type="file"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
    }

    button {
        background-color: #007bff;
        color: white;
        padding: 10px 18px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 16px;
        transition: background 0.3s ease;
    }

    button:hover {
        background-color: #0056b3;
    }

    a {
        display: inline-block;
        margin-left: 15px;
        color: #333;
        text-decoration: none;
        font-weight: 600;
    }

    .row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }

    .colum {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        overflow: hidden;
        transition: transform 0.3s;
    }

    .colum:hover {
        transform: scale(1.02);
    }

    .sombra img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-bottom: 1px solid #eee;
    }

    .card {
        padding: 12px;
    }

    .paragrafo {
        text-align: center;
        color: #555;
        font-size: 16px;
        margin: 0;
    }

    .btn-remove {
        display: block;
        margin: 10px auto 0;
        background-color: crimson;
        color: #fff;
        padding: 8px 14px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-remove:hover {
        background-color: darkred;
    }

    @media (max-width: 600px) {
        h1, h2 {
            font-size: 22px;
        }

        .container {
            padding: 20px;
        }
    }
</style>

</head>
<body>
    <div class="container">
        <h2>Upload nova imagem</h2>


         <form action="{{ route('gallery.store')}}" method="post" enctype="multipart/form-data">
  @csrf

  <div class="action">
    <label for="title">Título</label>
    <input type="text" name="title" id="title" class="form" placeholder="🕸opcional🕸">
  </div>

  <div class="action">
    <label for="image">Escolher imagem</label>
    <input type="file" name="image" id="image" required>
  </div>

  <button type="submit">Enviar</button>
  <a href="{{ route('gallery.index') }}">Voltar ✔</a>
</form>
    </div>

</body>
</html>
