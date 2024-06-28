<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        
        h1{
            text-align: center;
        }
        table, tr, th, td {
      border: solid 1px grey;
      border-collapse: collapse;
  } 

  th, td { 
      padding: 10px;
  }


  tr first-child, tr:nth-child(even) {
    background-color: lightgray;
  }

  tr:hover {
    background-color: gray;
  }
  img {
      width: 200px;
      height: 150px;
    border-collapse: collapse;
  }

  button {
    margin-top: 10%;
  }
  img:hover {
  transform: scaleX(-1);
}
</style>

</head>
<body>
    <h1>Doc Coba Eval</h1>
    <div>
    <table border="1">
       <tr>
        <th>Nama</th>
        <th>NPM</th>
        <th>Nilai</th>
        <th>Icon</th>
       </tr>
       <tr>
        <td>Eka Wulan Y</td>
        <td>230202059</td>
        <td>80</td>
        <td> <img src="https://cdn.rri.co.id/berita/26/images/1693104203207-Bunga-lily-of-the-valley.-eskipaper.com_/1693104203207-Bunga-lily-of-the-valley.-eskipaper.com_.jpg" ondblclick="changeImage(this)"
             alt="bunga1"></td>
       </tr>

       <tr>
        <td>Aulia</td>
        <td>230202055</td>
        <td>80</td>
        <td> <img src="https://www.youngontop.com/wp-content/uploads/2023/05/pexels-pixabay-54186-1024x739.jpg" ondblclick="changeImage(this)"
            alt="bunga2"></td>
       </tr>

       <tr>
        <td>Arya Dirham</td>
        <td>230202054</td>
        <td>96</td>
        <td><img src="https://upload.wikimedia.org/wikipedia/commons/f/f8/Lion_in_masai_mara.jpg" ondblclick="changeImage(this)"
             alt="singa"></td>
       </tr>

       <tr>
        <td>Kristian Dimas</td>
        <td>230202065</td>
        <td>90</td>
        <td><img src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2019/02/19/2199401387.jpg" ondblclick="changeImage(this)"
             alt="harimau"></td>
       </tr>

       <tr>
        <td>Alle</td>
        <td>230202053</td>
        <td>90</td>
        <td><img src="https://cdn.pixabay.com/photo/2023/10/17/14/00/ai-generated-8321400_640.jpg" ondblclick="changeImage(this)"
             alt="macan kumbang"></td>
       </tr>
    </table>
</div>
<script>
    function changeImage(img) {
        if (img.alt === "bunga1") {
            img.src = "https://cdn.idntimes.com/content-images/community/2022/05/gambar-1-684a088d62ed1bb99b051a68fc9ec929-ddd6876c2d5fb9cebec396eec6a69244.jpg";
            img.alt = "new_bunga1";
        } else if (img.alt === "bunga2") {
            img.src = "https://encrypted-tbn3.gstatic.com/licensed-image?q=tbn:ANd9GcSPluVRBdxkzlQsE5bH6qPCNH_PHPhct8mOSYJaKihUtQBQRn2w3a-lSz1ES92bWG4SesPQ851wyh9J7HU";
            img.alt = "new_bunga2";
        } else if (img.alt === "singa") {
            img.src = "https://thumb.viva.co.id/media/frontend/thumbs3/2024/02/21/65d5b1d30ea26-singa_1265_711.jpg";
            img.alt = "new_singa";
        } else if (img.alt === "harimau") {
            img.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Tigress_at_Jim_Corbett_National_Park.jpg/1200px-Tigress_at_Jim_Corbett_National_Park.jpg";
            img.alt = "new_harimau";
        } else if (img.alt === "macan kumbang") {
            img.src = "https://cdn.pixabay.com/photo/2023/01/01/13/32/panther-7690091_640.jpg";
            img.alt = "new_macan kumbang";
        }
    }
</script>
</body>
</html>