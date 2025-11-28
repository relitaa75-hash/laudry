<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contoh Footer</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
    }

    footer {
      background-color: #222;
      color: #fff;
      padding: 40px 20px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }

    footer h3 {
      margin-bottom: 15px;
      font-size: 18px;
      border-bottom: 2px solid #ffcc00;
      display: inline-block;
      padding-bottom: 5px;
    }

    footer ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    footer ul li {
      margin-bottom: 10px;
    }

    footer ul li a {
      color: #bbb;
      text-decoration: none;
      transition: 0.3s;
    }

    footer ul li a:hover {
      color: #ffcc00;
    }

    .footer-bottom {
      text-align: center;
      padding: 15px;
      background-color: #111;
      font-size: 14px;
      margin-top: 20px;
    }
  </style>
</head>
<body>
 
  <!-- Footer -->
  <footer>
    <div>
      <h3>about litull</h3>
      <p>haii, nama saya relita anggraeni. saya seorang siswi SMK yg tertarik pada desain web. website ini saya buat sebagai latihan sekaligus berbagai informasi dan peengalaman.</p>
    </div>
    <div>
      <h3>Menu</h3>
      <ul>
        <li><a href="#">Jumlah pelanggan</a></li>
        <li><a href="#">Jumlah cucian diproses</a></li>
        <li><a href="#">Jumlah cucian siap diambil</a></li>
        <li><a href="#">Jumlah cucian selesai</a></li>
      </ul>
    </div>
    <div>
      <h3>Kontak</h3>
      <ul>
        <li>Email: relita75@gmail.com</li>
        <li>Telp: 00123456789</li>
        <li>Alamat: Kendal, singorojo</li>
      </ul>
    </div>
  </footer>

  <div class="footer-bottom">
    &copy; 2025 WebsiteKu. All Rights Reserved.
  </div>

</body>
</html>


