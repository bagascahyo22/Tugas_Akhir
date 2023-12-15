<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #E0FFFF;
            color: #000000;
            padding: 10px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
        }

        article {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }

    
    </style>
</head>
<body>
@extends('layouts.main')
@section('content')
    <header>
        <h1>Profesional Fotografi</h1>
    </header>
    <main>
        <article>
            <h2>TENTANG FOTOGRAFI</h2>
            <p>Fotografi merupakan metode penghasilan foto atau gambar. Fotografi sering dilakukan untuk mengabadikan momen, baik dalam produksi berita, pembuatan iklan dapat diartikan juga sebagai proses melukis atau menulis dengan menggunakan media cahaya.</p>
        </article>

        <article> 
            <h2>Judul Artikel Kedua</h2>
            <p>Teks artikel kedua...</p>
        </article>
    </main>

    @endsection
</body>
</html>