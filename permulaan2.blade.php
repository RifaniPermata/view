<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Siswa-siswi</title>

	<link href="/css/my-style.css" rel="stylesheet">
</head>
<body>
	<h1>Nama-nama yang lanjut kuliah:</h1>
  <ol>
  	<?php
  	foreach ($siswa as $nama) {
    echo "<li>$nama</li>";
    

    }
    ?>
  </ol>

  <div style="color:grey"> 
  	Copyright @<?= date("Y");?> DuniaSMK
  </div>
  <script src="/js/my-script.js"></script>
</body>
</html>