<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
        }
        .calculator {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        input, button {
            margin: 5px 0;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            text-align: center;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .result {
            box-sizing: border-box;
            margin-top: 10px;
            font-weight: bold;
            text-align: center;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            background-color: #e9ecef;
        }
        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Kalkulator Tambah</h2>
        <label for="angka1">Angka 1</label>
        <input type="number" id="angka1" placeholder="Masukkan Angka 1">
        <label for="angka2">Angka 2</label>
        <input type="number" id="angka2" placeholder="Masukkan Angka 2">
        <button onclick="tambah()">Tambah</button>
        <div class="result" id="hasil">Hasil</div>
    </div>

    <script>
        function tambah() {
            var angka1 = parseFloat(document.getElementById('angka1').value);
            var angka2 = parseFloat(document.getElementById('angka2').value);
            var hasil = angka1 + angka2;
            document.getElementById('hasil').textContent = "Hasil: " + hasil;
        }
    </script>
</body>
</html>
