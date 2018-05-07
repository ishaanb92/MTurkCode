<?php
if(isset($_POST['submit'])){

    //write responses to a txt file
    $file = fopen('responses.txt','w');
    foreach ($_POST as $item) {
        fwrite($file,$item."\n");
    }
    fclose($file);
}

//if their are errors display them
if(isset($error)){
    foreach($error as $error){
        echo "<p style='color:#ff0000'>$error</p>";
    }
}
?>

<html>
<body>
<form action = '' method='post'>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Original Image</th>
      <th>Model 1</th>
      <th>Model 2</th>
      <th>Choose Model 1</th>
      <th>Choose Model 2</th>
      <th>Unsure</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/0/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/0/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/0/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "0" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/0/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "0" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/0/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "0" value="Unsure"></td>
    </tr>
    <tr>
      <th>1</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/1/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/1/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/1/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "1" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/1/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "1" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/1/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "1" value="Unsure"></td>
    </tr>
    <tr>
      <th>2</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/8/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/8/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/8/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "8" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/8/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "8" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/8/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "8" value="Unsure"></td>
    </tr>
    <tr>
      <th>3</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/9/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/9/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/9/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "9" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/9/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "9" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/9/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "9" value="Unsure"></td>
    </tr>
    <tr>
      <th>4</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/10/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/10/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/10/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "10" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/10/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "10" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/10/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "10" value="Unsure"></td>
    </tr>
    <tr>
      <th>5</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/13/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/13/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/13/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "13" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/13/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "13" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/13/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "13" value="Unsure"></td>
    </tr>
    <tr>
      <th>6</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/16/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/16/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/16/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "16" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/16/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "16" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/16/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "16" value="Unsure"></td>
    </tr>
    <tr>
      <th>7</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/20/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/20/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/20/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "20" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/20/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "20" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/20/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "20" value="Unsure"></td>
    </tr>
    <tr>
      <th>8</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/21/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/21/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/21/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "21" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/21/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "21" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/21/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "21" value="Unsure"></td>
    </tr>
    <tr>
      <th>9</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/23/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/23/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/23/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "23" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/23/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "23" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/23/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "23" value="Unsure"></td>
    </tr>
    <tr>
      <th>10</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/24/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/24/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/24/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "24" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/24/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "24" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/24/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "24" value="Unsure"></td>
    </tr>
    <tr>
      <th>11</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/26/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/26/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/26/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "26" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/26/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "26" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/26/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "26" value="Unsure"></td>
    </tr>
    <tr>
      <th>12</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/28/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/28/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/28/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "28" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/28/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "28" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/28/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "28" value="Unsure"></td>
    </tr>
    <tr>
      <th>13</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/29/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/29/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/29/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "29" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/29/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "29" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/29/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "29" value="Unsure"></td>
    </tr>
    <tr>
      <th>14</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/30/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/30/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/30/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "30" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/30/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "30" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/30/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "30" value="Unsure"></td>
    </tr>
    <tr>
      <th>15</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/31/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/31/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/31/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "31" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/31/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "31" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/31/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "31" value="Unsure"></td>
    </tr>
    <tr>
      <th>16</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/32/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/32/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/32/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "32" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/32/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "32" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/32/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "32" value="Unsure"></td>
    </tr>
    <tr>
      <th>17</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/33/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/33/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/33/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "33" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/33/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "33" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/33/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "33" value="Unsure"></td>
    </tr>
    <tr>
      <th>18</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/35/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/35/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/35/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "35" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/35/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "35" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/35/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "35" value="Unsure"></td>
    </tr>
    <tr>
      <th>19</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/36/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/36/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/36/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "36" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/36/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "36" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/36/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "36" value="Unsure"></td>
    </tr>
    <tr>
      <th>20</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/37/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/37/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/37/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "37" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/37/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "37" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/37/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "37" value="Unsure"></td>
    </tr>
    <tr>
      <th>21</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/38/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/38/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/38/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "38" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/38/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "38" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/38/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "38" value="Unsure"></td>
    </tr>
    <tr>
      <th>22</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/39/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/39/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/39/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "39" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/39/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "39" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/39/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "39" value="Unsure"></td>
    </tr>
    <tr>
      <th>23</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/40/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/40/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/40/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "40" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/40/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "40" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/40/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "40" value="Unsure"></td>
    </tr>
    <tr>
      <th>24</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/42/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/42/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/42/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "42" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/42/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "42" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/42/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "42" value="Unsure"></td>
    </tr>
    <tr>
      <th>25</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/43/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/43/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/43/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "43" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/43/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "43" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/43/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "43" value="Unsure"></td>
    </tr>
    <tr>
      <th>26</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/47/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/47/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/47/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "47" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/47/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "47" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/47/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "47" value="Unsure"></td>
    </tr>
    <tr>
      <th>27</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/58/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/58/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/58/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "58" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/58/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "58" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/58/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "58" value="Unsure"></td>
    </tr>
    <tr>
      <th>28</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/60/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/60/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/60/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "60" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/60/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "60" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/60/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "60" value="Unsure"></td>
    </tr>
    <tr>
      <th>29</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/61/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/61/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/61/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "61" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/61/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "61" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/61/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "61" value="Unsure"></td>
    </tr>
    <tr>
      <th>30</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/65/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/65/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/65/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "65" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/65/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "65" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/65/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "65" value="Unsure"></td>
    </tr>
    <tr>
      <th>31</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/76/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/76/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/76/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "76" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/76/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "76" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/76/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "76" value="Unsure"></td>
    </tr>
    <tr>
      <th>32</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/77/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/77/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/77/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "77" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/77/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "77" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/77/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "77" value="Unsure"></td>
    </tr>
    <tr>
      <th>33</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/81/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/81/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/81/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "81" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/81/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "81" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/81/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "81" value="Unsure"></td>
    </tr>
    <tr>
      <th>34</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/82/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/82/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/82/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "82" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/82/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "82" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/82/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "82" value="Unsure"></td>
    </tr>
    <tr>
      <th>35</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/85/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/85/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/85/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "85" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/85/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "85" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/85/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "85" value="Unsure"></td>
    </tr>
    <tr>
      <th>36</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/90/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/90/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/90/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "90" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/90/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "90" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/90/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "90" value="Unsure"></td>
    </tr>
    <tr>
      <th>37</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/92/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/92/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/92/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "92" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/92/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "92" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/92/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "92" value="Unsure"></td>
    </tr>
    <tr>
      <th>38</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/95/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/95/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/95/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "95" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/95/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "95" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/95/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "95" value="Unsure"></td>
    </tr>
    <tr>
      <th>39</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/96/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/96/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/96/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "96" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/96/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "96" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/96/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "96" value="Unsure"></td>
    </tr>
    <tr>
      <th>40</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/104/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/104/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/104/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "104" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/104/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "104" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/104/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "104" value="Unsure"></td>
    </tr>
    <tr>
      <th>41</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/108/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/108/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/108/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "108" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/108/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "108" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/108/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "108" value="Unsure"></td>
    </tr>
    <tr>
      <th>42</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/111/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/111/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/111/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "111" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/111/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "111" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/111/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "111" value="Unsure"></td>
    </tr>
    <tr>
      <th>43</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/112/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/112/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/112/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "112" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/112/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "112" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/112/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "112" value="Unsure"></td>
    </tr>
    <tr>
      <th>44</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/115/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/115/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/115/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "115" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/115/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "115" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/115/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "115" value="Unsure"></td>
    </tr>
    <tr>
      <th>45</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/116/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/116/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/116/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "116" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/116/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "116" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/116/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "116" value="Unsure"></td>
    </tr>
    <tr>
      <th>46</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/121/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/121/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/121/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "121" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/121/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "121" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/121/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "121" value="Unsure"></td>
    </tr>
    <tr>
      <th>47</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/123/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/123/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/123/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "123" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/123/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "123" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/123/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "123" value="Unsure"></td>
    </tr>
    <tr>
      <th>48</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/124/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/124/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/124/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "124" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/124/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "124" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/124/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "124" value="Unsure"></td>
    </tr>
    <tr>
      <th>49</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/125/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/125/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/125/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "125" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/125/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "125" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/125/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "125" value="Unsure"></td>
    </tr>
    <tr>
      <th>50</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/127/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/127/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/127/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "127" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/127/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "127" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/127/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "127" value="Unsure"></td>
    </tr>
    <tr>
      <th>51</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/128/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/128/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/128/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "128" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/128/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "128" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/128/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "128" value="Unsure"></td>
    </tr>
    <tr>
      <th>52</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/132/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/132/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/132/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "132" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/132/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "132" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/132/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "132" value="Unsure"></td>
    </tr>
    <tr>
      <th>53</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/133/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/133/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/133/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "133" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/133/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "133" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/133/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "133" value="Unsure"></td>
    </tr>
    <tr>
      <th>54</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/134/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/134/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/134/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "134" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/134/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "134" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/134/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "134" value="Unsure"></td>
    </tr>
    <tr>
      <th>55</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/135/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/135/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/135/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "135" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/135/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "135" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/135/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "135" value="Unsure"></td>
    </tr>
    <tr>
      <th>56</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/139/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/139/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/139/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "139" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/139/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "139" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/139/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "139" value="Unsure"></td>
    </tr>
    <tr>
      <th>57</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/141/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/141/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/141/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "141" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/141/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "141" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/141/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "141" value="Unsure"></td>
    </tr>
    <tr>
      <th>58</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/146/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/146/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/146/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "146" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/146/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "146" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/146/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "146" value="Unsure"></td>
    </tr>
    <tr>
      <th>59</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/148/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/148/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/148/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "148" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/148/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "148" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/148/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "148" value="Unsure"></td>
    </tr>
    <tr>
      <th>60</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/149/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/149/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/149/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "149" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/149/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "149" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/149/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "149" value="Unsure"></td>
    </tr>
    <tr>
      <th>61</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/150/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/150/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/150/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "150" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/150/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "150" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/150/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "150" value="Unsure"></td>
    </tr>
    <tr>
      <th>62</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/151/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/151/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/151/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "151" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/151/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "151" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/151/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "151" value="Unsure"></td>
    </tr>
    <tr>
      <th>63</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/152/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/152/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/152/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "152" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/152/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "152" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/152/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "152" value="Unsure"></td>
    </tr>
    <tr>
      <th>64</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/155/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/155/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/155/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "155" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/155/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "155" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/155/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "155" value="Unsure"></td>
    </tr>
    <tr>
      <th>65</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/159/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/159/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/159/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "159" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/159/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "159" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/159/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "159" value="Unsure"></td>
    </tr>
    <tr>
      <th>66</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/163/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/163/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/163/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "163" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/163/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "163" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/163/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "163" value="Unsure"></td>
    </tr>
    <tr>
      <th>67</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/165/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/165/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/165/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "165" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/165/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "165" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/165/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "165" value="Unsure"></td>
    </tr>
    <tr>
      <th>68</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/168/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/168/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/168/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "168" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/168/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "168" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/168/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "168" value="Unsure"></td>
    </tr>
    <tr>
      <th>69</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/176/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/176/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/176/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "176" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/176/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "176" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/176/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "176" value="Unsure"></td>
    </tr>
    <tr>
      <th>70</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/180/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/180/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/180/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "180" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/180/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "180" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/180/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "180" value="Unsure"></td>
    </tr>
    <tr>
      <th>71</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/181/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/181/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/181/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "181" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/181/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "181" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/181/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "181" value="Unsure"></td>
    </tr>
    <tr>
      <th>72</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/188/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/188/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/188/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "188" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/188/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "188" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/188/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "188" value="Unsure"></td>
    </tr>
    <tr>
      <th>73</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/190/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/190/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/190/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "190" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/190/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "190" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/190/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "190" value="Unsure"></td>
    </tr>
    <tr>
      <th>74</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/193/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/193/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/193/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "193" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/193/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "193" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/193/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "193" value="Unsure"></td>
    </tr>
    <tr>
      <th>75</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/196/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/196/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/196/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "196" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/196/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "196" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/196/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "196" value="Unsure"></td>
    </tr>
    <tr>
      <th>76</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/202/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/202/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/202/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "202" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/202/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "202" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/202/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "202" value="Unsure"></td>
    </tr>
    <tr>
      <th>77</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/203/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/203/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/203/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "203" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/203/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "203" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/203/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "203" value="Unsure"></td>
    </tr>
    <tr>
      <th>78</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/205/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/205/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/205/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "205" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/205/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "205" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/205/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "205" value="Unsure"></td>
    </tr>
    <tr>
      <th>79</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/207/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/207/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/207/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "207" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/207/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "207" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/207/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "207" value="Unsure"></td>
    </tr>
    <tr>
      <th>80</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/208/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/208/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/208/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "208" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/208/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "208" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/208/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "208" value="Unsure"></td>
    </tr>
    <tr>
      <th>81</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/210/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/210/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/210/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "210" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/210/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "210" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/210/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "210" value="Unsure"></td>
    </tr>
    <tr>
      <th>82</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/212/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/212/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/212/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "212" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/212/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "212" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/212/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "212" value="Unsure"></td>
    </tr>
    <tr>
      <th>83</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/213/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/213/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/213/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "213" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/213/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "213" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/213/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "213" value="Unsure"></td>
    </tr>
    <tr>
      <th>84</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/214/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/214/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/214/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "214" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/214/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "214" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/214/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "214" value="Unsure"></td>
    </tr>
    <tr>
      <th>85</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/219/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/219/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/219/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "219" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/219/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "219" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/219/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "219" value="Unsure"></td>
    </tr>
    <tr>
      <th>86</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/221/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/221/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/221/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "221" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/221/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "221" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/221/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "221" value="Unsure"></td>
    </tr>
    <tr>
      <th>87</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/226/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/226/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/226/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "226" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/226/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "226" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/226/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "226" value="Unsure"></td>
    </tr>
    <tr>
      <th>88</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/229/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/229/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/229/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "229" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/229/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "229" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/229/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "229" value="Unsure"></td>
    </tr>
    <tr>
      <th>89</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/233/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/233/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/233/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "233" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/233/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "233" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/233/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "233" value="Unsure"></td>
    </tr>
    <tr>
      <th>90</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/235/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/235/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/235/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "235" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/235/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "235" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/235/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "235" value="Unsure"></td>
    </tr>
    <tr>
      <th>91</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/240/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/240/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/240/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "240" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/240/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "240" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/240/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "240" value="Unsure"></td>
    </tr>
    <tr>
      <th>92</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/245/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/245/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/245/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "245" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/245/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "245" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/245/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "245" value="Unsure"></td>
    </tr>
    <tr>
      <th>93</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/254/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/254/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/254/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "254" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/254/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "254" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/254/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "254" value="Unsure"></td>
    </tr>
    <tr>
      <th>94</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/255/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/255/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/255/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "255" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/255/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "255" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/255/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "255" value="Unsure"></td>
    </tr>
    <tr>
      <th>95</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/257/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/257/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/257/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "257" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/257/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "257" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/257/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "257" value="Unsure"></td>
    </tr>
    <tr>
      <th>96</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/258/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/258/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/258/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "258" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/258/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "258" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/258/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "258" value="Unsure"></td>
    </tr>
    <tr>
      <th>97</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/259/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/259/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/259/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "259" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/259/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "259" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/259/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "259" value="Unsure"></td>
    </tr>
    <tr>
      <th>98</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/261/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/261/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/261/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "261" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/261/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "261" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/261/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "261" value="Unsure"></td>
    </tr>
    <tr>
      <th>99</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/263/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/263/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/263/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "263" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/263/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "263" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/263/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "263" value="Unsure"></td>
    </tr>
    <tr>
      <th>100</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/266/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/266/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/266/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "266" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/266/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "266" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/266/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "266" value="Unsure"></td>
    </tr>
    <tr>
      <th>101</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/269/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/269/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/269/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "269" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/269/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "269" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/269/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "269" value="Unsure"></td>
    </tr>
    <tr>
      <th>102</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/270/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/270/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/270/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "270" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/270/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "270" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/270/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "270" value="Unsure"></td>
    </tr>
    <tr>
      <th>103</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/271/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/271/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/271/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "271" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/271/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "271" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/271/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "271" value="Unsure"></td>
    </tr>
    <tr>
      <th>104</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/273/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/273/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/273/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "273" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/273/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "273" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/273/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "273" value="Unsure"></td>
    </tr>
    <tr>
      <th>105</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/275/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/275/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/275/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "275" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/275/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "275" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/275/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "275" value="Unsure"></td>
    </tr>
    <tr>
      <th>106</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/276/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/276/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/276/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "276" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/276/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "276" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/276/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "276" value="Unsure"></td>
    </tr>
    <tr>
      <th>107</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/284/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/284/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/284/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "284" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/284/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "284" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/284/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "284" value="Unsure"></td>
    </tr>
    <tr>
      <th>108</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/289/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/289/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/289/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "289" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/289/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "289" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/289/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "289" value="Unsure"></td>
    </tr>
    <tr>
      <th>109</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/294/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/294/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/294/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "294" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/294/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "294" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/294/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "294" value="Unsure"></td>
    </tr>
    <tr>
      <th>110</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/295/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/295/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/295/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "295" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/295/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "295" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/295/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "295" value="Unsure"></td>
    </tr>
    <tr>
      <th>111</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/297/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/297/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/297/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "297" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/297/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "297" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/297/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "297" value="Unsure"></td>
    </tr>
    <tr>
      <th>112</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/298/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/298/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/298/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "298" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/298/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "298" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/298/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "298" value="Unsure"></td>
    </tr>
    <tr>
      <th>113</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/300/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/300/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/300/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "300" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/300/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "300" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/300/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "300" value="Unsure"></td>
    </tr>
    <tr>
      <th>114</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/302/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/302/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/302/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "302" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/302/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "302" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/302/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "302" value="Unsure"></td>
    </tr>
    <tr>
      <th>115</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/303/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/303/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/303/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "303" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/303/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "303" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/303/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "303" value="Unsure"></td>
    </tr>
    <tr>
      <th>116</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/312/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/312/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/312/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "312" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/312/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "312" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/312/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "312" value="Unsure"></td>
    </tr>
    <tr>
      <th>117</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/315/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/315/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/315/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "315" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/315/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "315" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/315/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "315" value="Unsure"></td>
    </tr>
    <tr>
      <th>118</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/316/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/316/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/316/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "316" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/316/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "316" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/316/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "316" value="Unsure"></td>
    </tr>
    <tr>
      <th>119</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/319/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/319/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/319/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "319" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/319/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "319" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/319/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "319" value="Unsure"></td>
    </tr>
    <tr>
      <th>120</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/320/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/320/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/320/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "320" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/320/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "320" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/320/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "320" value="Unsure"></td>
    </tr>
    <tr>
      <th>121</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/321/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/321/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/321/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "321" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/321/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "321" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/321/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "321" value="Unsure"></td>
    </tr>
    <tr>
      <th>122</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/325/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/325/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/325/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "325" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/325/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "325" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/325/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "325" value="Unsure"></td>
    </tr>
    <tr>
      <th>123</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/326/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/326/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/326/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "326" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/326/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "326" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/326/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "326" value="Unsure"></td>
    </tr>
    <tr>
      <th>124</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/328/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/328/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/328/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "328" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/328/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "328" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/328/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "328" value="Unsure"></td>
    </tr>
    <tr>
      <th>125</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/329/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/329/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/329/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "329" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/329/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "329" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/329/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "329" value="Unsure"></td>
    </tr>
    <tr>
      <th>126</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/330/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/330/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/330/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "330" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/330/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "330" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/330/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "330" value="Unsure"></td>
    </tr>
    <tr>
      <th>127</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/331/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/331/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/331/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "331" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/331/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "331" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/331/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "331" value="Unsure"></td>
    </tr>
    <tr>
      <th>128</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/333/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/333/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/333/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "333" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/333/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "333" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/333/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "333" value="Unsure"></td>
    </tr>
    <tr>
      <th>129</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/336/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/336/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/336/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "336" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/336/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "336" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/336/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "336" value="Unsure"></td>
    </tr>
    <tr>
      <th>130</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/337/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/337/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/337/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "337" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/337/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "337" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/337/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "337" value="Unsure"></td>
    </tr>
    <tr>
      <th>131</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/338/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/338/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/338/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "338" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/338/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "338" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/338/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "338" value="Unsure"></td>
    </tr>
    <tr>
      <th>132</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/342/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/342/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/342/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "342" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/342/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "342" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/342/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "342" value="Unsure"></td>
    </tr>
    <tr>
      <th>133</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/345/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/345/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/345/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "345" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/345/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "345" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/345/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "345" value="Unsure"></td>
    </tr>
    <tr>
      <th>134</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/349/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/349/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/349/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "349" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/349/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "349" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/349/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "349" value="Unsure"></td>
    </tr>
    <tr>
      <th>135</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/353/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/353/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/353/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "353" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/353/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "353" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/353/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "353" value="Unsure"></td>
    </tr>
    <tr>
      <th>136</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/355/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/355/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/355/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "355" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/355/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "355" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/355/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "355" value="Unsure"></td>
    </tr>
    <tr>
      <th>137</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/359/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/359/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/359/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "359" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/359/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "359" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/359/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "359" value="Unsure"></td>
    </tr>
    <tr>
      <th>138</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/361/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/361/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/361/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "361" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/361/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "361" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/361/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "361" value="Unsure"></td>
    </tr>
    <tr>
      <th>139</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/363/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/363/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/363/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "363" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/363/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "363" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/363/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "363" value="Unsure"></td>
    </tr>
    <tr>
      <th>140</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/370/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/370/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/370/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "370" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/370/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "370" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/370/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "370" value="Unsure"></td>
    </tr>
    <tr>
      <th>141</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/373/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/373/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/373/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "373" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/373/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "373" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/373/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "373" value="Unsure"></td>
    </tr>
    <tr>
      <th>142</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/374/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/374/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/374/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "374" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/374/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "374" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/374/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "374" value="Unsure"></td>
    </tr>
    <tr>
      <th>143</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/376/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/376/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/376/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "376" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/376/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "376" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/376/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "376" value="Unsure"></td>
    </tr>
    <tr>
      <th>144</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/377/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/377/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/377/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "377" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/377/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "377" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/377/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "377" value="Unsure"></td>
    </tr>
    <tr>
      <th>145</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/379/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/379/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/379/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "379" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/379/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "379" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/379/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "379" value="Unsure"></td>
    </tr>
    <tr>
      <th>146</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/380/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/380/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/380/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "380" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/380/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "380" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/380/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "380" value="Unsure"></td>
    </tr>
    <tr>
      <th>147</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/382/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/382/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/382/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "382" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/382/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "382" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/382/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "382" value="Unsure"></td>
    </tr>
    <tr>
      <th>148</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/383/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/383/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/383/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "383" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/383/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "383" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/383/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "383" value="Unsure"></td>
    </tr>
    <tr>
      <th>149</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/387/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/387/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/387/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "387" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/387/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "387" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/387/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "387" value="Unsure"></td>
    </tr>
    <tr>
      <th>150</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/388/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/388/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/388/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "388" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/388/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "388" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/388/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "388" value="Unsure"></td>
    </tr>
    <tr>
      <th>151</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/390/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/390/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/390/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "390" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/390/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "390" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/390/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "390" value="Unsure"></td>
    </tr>
    <tr>
      <th>152</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/393/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/393/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/393/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "393" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/393/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "393" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/393/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "393" value="Unsure"></td>
    </tr>
    <tr>
      <th>153</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/394/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/394/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/394/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "394" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/394/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "394" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/394/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "394" value="Unsure"></td>
    </tr>
    <tr>
      <th>154</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/395/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/395/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/395/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "395" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/395/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "395" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/395/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "395" value="Unsure"></td>
    </tr>
    <tr>
      <th>155</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/396/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/396/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/396/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "396" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/396/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "396" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/396/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "396" value="Unsure"></td>
    </tr>
    <tr>
      <th>156</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/401/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/401/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/401/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "401" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/401/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "401" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/401/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "401" value="Unsure"></td>
    </tr>
    <tr>
      <th>157</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/404/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/404/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/404/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "404" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/404/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "404" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/404/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "404" value="Unsure"></td>
    </tr>
    <tr>
      <th>158</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/405/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/405/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/405/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "405" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/405/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "405" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/405/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "405" value="Unsure"></td>
    </tr>
    <tr>
      <th>159</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/408/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/408/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/408/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "408" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/408/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "408" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/408/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "408" value="Unsure"></td>
    </tr>
    <tr>
      <th>160</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/411/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/411/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/411/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "411" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/411/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "411" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/411/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "411" value="Unsure"></td>
    </tr>
    <tr>
      <th>161</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/417/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/417/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/417/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "417" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/417/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "417" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/417/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "417" value="Unsure"></td>
    </tr>
    <tr>
      <th>162</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/420/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/420/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/420/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "420" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/420/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "420" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/420/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "420" value="Unsure"></td>
    </tr>
    <tr>
      <th>163</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/421/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/421/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/421/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "421" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/421/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "421" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/421/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "421" value="Unsure"></td>
    </tr>
    <tr>
      <th>164</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/423/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/423/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/423/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "423" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/423/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "423" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/423/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "423" value="Unsure"></td>
    </tr>
    <tr>
      <th>165</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/428/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/428/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/428/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "428" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/428/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "428" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/428/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "428" value="Unsure"></td>
    </tr>
    <tr>
      <th>166</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/433/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/433/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/433/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "433" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/433/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "433" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/433/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "433" value="Unsure"></td>
    </tr>
    <tr>
      <th>167</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/435/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/435/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/435/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "435" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/435/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "435" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/435/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "435" value="Unsure"></td>
    </tr>
    <tr>
      <th>168</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/439/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/439/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/439/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "439" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/439/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "439" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/439/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "439" value="Unsure"></td>
    </tr>
    <tr>
      <th>169</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/441/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/441/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/441/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "441" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/441/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "441" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/441/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "441" value="Unsure"></td>
    </tr>
    <tr>
      <th>170</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/444/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/444/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/444/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "444" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/444/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "444" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/444/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "444" value="Unsure"></td>
    </tr>
    <tr>
      <th>171</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/447/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/447/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/447/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "447" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/447/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "447" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/447/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "447" value="Unsure"></td>
    </tr>
    <tr>
      <th>172</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/453/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/453/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/453/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "453" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/453/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "453" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/453/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "453" value="Unsure"></td>
    </tr>
    <tr>
      <th>173</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/454/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/454/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/454/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "454" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/454/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "454" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/454/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "454" value="Unsure"></td>
    </tr>
    <tr>
      <th>174</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/457/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/457/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/457/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "457" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/457/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "457" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/457/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "457" value="Unsure"></td>
    </tr>
    <tr>
      <th>175</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/460/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/460/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/460/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "460" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/460/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "460" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/460/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "460" value="Unsure"></td>
    </tr>
    <tr>
      <th>176</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/461/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/461/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/461/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "461" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/461/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "461" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/461/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "461" value="Unsure"></td>
    </tr>
    <tr>
      <th>177</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/466/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/466/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/466/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "466" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/466/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "466" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/466/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "466" value="Unsure"></td>
    </tr>
    <tr>
      <th>178</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/467/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/467/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/467/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "467" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/467/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "467" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/467/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "467" value="Unsure"></td>
    </tr>
    <tr>
      <th>179</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/468/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/468/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/468/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "468" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/468/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "468" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/468/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "468" value="Unsure"></td>
    </tr>
    <tr>
      <th>180</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/469/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/469/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/469/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "469" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/469/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "469" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/469/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "469" value="Unsure"></td>
    </tr>
    <tr>
      <th>181</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/471/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/471/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/471/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "471" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/471/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "471" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/471/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "471" value="Unsure"></td>
    </tr>
    <tr>
      <th>182</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/474/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/474/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/474/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "474" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/474/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "474" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/474/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "474" value="Unsure"></td>
    </tr>
    <tr>
      <th>183</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/475/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/475/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/475/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "475" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/475/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "475" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/475/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "475" value="Unsure"></td>
    </tr>
    <tr>
      <th>184</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/477/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/477/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/477/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "477" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/477/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "477" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/477/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "477" value="Unsure"></td>
    </tr>
    <tr>
      <th>185</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/478/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/478/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/478/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "478" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/478/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "478" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/478/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "478" value="Unsure"></td>
    </tr>
    <tr>
      <th>186</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/479/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/479/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/479/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "479" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/479/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "479" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/479/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "479" value="Unsure"></td>
    </tr>
    <tr>
      <th>187</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/480/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/480/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/480/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "480" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/480/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "480" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/480/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "480" value="Unsure"></td>
    </tr>
    <tr>
      <th>188</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/481/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/481/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/481/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "481" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/481/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "481" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/481/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "481" value="Unsure"></td>
    </tr>
    <tr>
      <th>189</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/482/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/482/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/482/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "482" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/482/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "482" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/482/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "482" value="Unsure"></td>
    </tr>
    <tr>
      <th>190</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/484/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/484/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/484/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "484" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/484/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "484" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/484/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "484" value="Unsure"></td>
    </tr>
    <tr>
      <th>191</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/486/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/486/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/486/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "486" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/486/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "486" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/486/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "486" value="Unsure"></td>
    </tr>
    <tr>
      <th>192</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/488/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/488/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/488/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "488" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/488/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "488" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/488/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "488" value="Unsure"></td>
    </tr>
    <tr>
      <th>193</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/489/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/489/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/489/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "489" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/489/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "489" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/489/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "489" value="Unsure"></td>
    </tr>
    <tr>
      <th>194</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/490/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/490/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/490/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "490" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/490/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "490" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/490/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "490" value="Unsure"></td>
    </tr>
    <tr>
      <th>195</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/491/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/491/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/491/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "491" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/491/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "491" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/491/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "491" value="Unsure"></td>
    </tr>
    <tr>
      <th>196</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/492/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/492/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/492/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "492" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/492/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "492" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/492/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "492" value="Unsure"></td>
    </tr>
    <tr>
      <th>197</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/494/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/494/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/494/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "494" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/494/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "494" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/494/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "494" value="Unsure"></td>
    </tr>
    <tr>
      <th>198</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/498/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/498/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/498/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "498" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/498/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "498" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/498/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "498" value="Unsure"></td>
    </tr>
    <tr>
      <th>199</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/504/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/504/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/504/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "504" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/504/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "504" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/504/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "504" value="Unsure"></td>
    </tr>
    <tr>
      <th>200</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/505/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/505/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/505/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "505" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/505/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "505" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/505/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "505" value="Unsure"></td>
    </tr>
    <tr>
      <th>201</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/507/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/507/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/507/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "507" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/507/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "507" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/507/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "507" value="Unsure"></td>
    </tr>
    <tr>
      <th>202</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/508/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/508/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/508/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "508" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/508/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "508" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/508/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "508" value="Unsure"></td>
    </tr>
    <tr>
      <th>203</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/509/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/509/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/509/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "509" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/509/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "509" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/509/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "509" value="Unsure"></td>
    </tr>
    <tr>
      <th>204</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/510/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/510/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/510/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "510" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/510/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "510" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/510/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "510" value="Unsure"></td>
    </tr>
    <tr>
      <th>205</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/516/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/516/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/516/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "516" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/516/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "516" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/516/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "516" value="Unsure"></td>
    </tr>
    <tr>
      <th>206</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/518/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/518/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/518/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "518" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/518/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "518" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/518/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "518" value="Unsure"></td>
    </tr>
    <tr>
      <th>207</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/519/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/519/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/519/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "519" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/519/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "519" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/519/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "519" value="Unsure"></td>
    </tr>
    <tr>
      <th>208</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/520/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/520/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/520/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "520" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/520/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "520" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/520/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "520" value="Unsure"></td>
    </tr>
    <tr>
      <th>209</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/521/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/521/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/521/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "521" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/521/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "521" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/521/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "521" value="Unsure"></td>
    </tr>
    <tr>
      <th>210</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/523/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/523/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/523/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "523" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/523/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "523" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/523/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "523" value="Unsure"></td>
    </tr>
    <tr>
      <th>211</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/524/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/524/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/524/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "524" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/524/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "524" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/524/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "524" value="Unsure"></td>
    </tr>
    <tr>
      <th>212</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/526/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/526/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/526/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "526" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/526/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "526" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/526/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "526" value="Unsure"></td>
    </tr>
    <tr>
      <th>213</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/527/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/527/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/527/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "527" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/527/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "527" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/527/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "527" value="Unsure"></td>
    </tr>
    <tr>
      <th>214</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/529/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/529/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/529/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "529" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/529/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "529" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/529/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "529" value="Unsure"></td>
    </tr>
    <tr>
      <th>215</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/530/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/530/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/530/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "530" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/530/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "530" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/530/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "530" value="Unsure"></td>
    </tr>
    <tr>
      <th>216</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/531/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/531/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/531/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "531" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/531/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "531" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/531/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "531" value="Unsure"></td>
    </tr>
    <tr>
      <th>217</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/532/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/532/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/532/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "532" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/532/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "532" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/532/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "532" value="Unsure"></td>
    </tr>
    <tr>
      <th>218</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/533/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/533/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/533/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "533" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/533/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "533" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/533/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "533" value="Unsure"></td>
    </tr>
    <tr>
      <th>219</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/543/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/543/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/543/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "543" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/543/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "543" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/543/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "543" value="Unsure"></td>
    </tr>
    <tr>
      <th>220</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/544/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/544/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/544/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "544" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/544/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "544" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/544/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "544" value="Unsure"></td>
    </tr>
    <tr>
      <th>221</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/545/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/545/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/545/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "545" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/545/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "545" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/545/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "545" value="Unsure"></td>
    </tr>
    <tr>
      <th>222</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/548/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/548/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/548/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "548" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/548/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "548" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/548/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "548" value="Unsure"></td>
    </tr>
    <tr>
      <th>223</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/552/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/552/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/552/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "552" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/552/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "552" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/552/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "552" value="Unsure"></td>
    </tr>
    <tr>
      <th>224</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/553/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/553/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/553/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "553" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/553/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "553" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/553/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "553" value="Unsure"></td>
    </tr>
    <tr>
      <th>225</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/558/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/558/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/558/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "558" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/558/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "558" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/558/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "558" value="Unsure"></td>
    </tr>
    <tr>
      <th>226</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/559/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/559/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/559/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "559" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/559/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "559" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/559/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "559" value="Unsure"></td>
    </tr>
    <tr>
      <th>227</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/561/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/561/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/561/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "561" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/561/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "561" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/561/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "561" value="Unsure"></td>
    </tr>
    <tr>
      <th>228</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/566/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/566/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/566/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "566" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/566/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "566" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/566/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "566" value="Unsure"></td>
    </tr>
    <tr>
      <th>229</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/567/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/567/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/567/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "567" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/567/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "567" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/567/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "567" value="Unsure"></td>
    </tr>
    <tr>
      <th>230</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/569/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/569/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/569/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "569" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/569/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "569" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/569/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "569" value="Unsure"></td>
    </tr>
    <tr>
      <th>231</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/571/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/571/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/571/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "571" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/571/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "571" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/571/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "571" value="Unsure"></td>
    </tr>
    <tr>
      <th>232</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/576/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/576/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/576/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "576" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/576/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "576" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/576/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "576" value="Unsure"></td>
    </tr>
    <tr>
      <th>233</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/577/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/577/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/577/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "577" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/577/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "577" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/577/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "577" value="Unsure"></td>
    </tr>
    <tr>
      <th>234</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/578/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/578/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/578/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "578" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/578/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "578" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/578/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "578" value="Unsure"></td>
    </tr>
    <tr>
      <th>235</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/579/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/579/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/579/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "579" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/579/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "579" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/579/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "579" value="Unsure"></td>
    </tr>
    <tr>
      <th>236</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/583/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/583/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/583/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "583" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/583/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "583" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/583/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "583" value="Unsure"></td>
    </tr>
    <tr>
      <th>237</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/587/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/587/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/587/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "587" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/587/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "587" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/587/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "587" value="Unsure"></td>
    </tr>
    <tr>
      <th>238</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/588/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/588/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/588/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "588" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/588/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "588" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/588/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "588" value="Unsure"></td>
    </tr>
    <tr>
      <th>239</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/589/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/589/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/589/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "589" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/589/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "589" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/589/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "589" value="Unsure"></td>
    </tr>
    <tr>
      <th>240</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/592/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/592/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/592/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "592" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/592/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "592" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/592/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "592" value="Unsure"></td>
    </tr>
    <tr>
      <th>241</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/593/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/593/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/593/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "593" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/593/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "593" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/593/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "593" value="Unsure"></td>
    </tr>
    <tr>
      <th>242</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/594/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/594/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/594/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "594" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/594/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "594" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/594/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "594" value="Unsure"></td>
    </tr>
    <tr>
      <th>243</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/597/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/597/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/597/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "597" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/597/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "597" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/597/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "597" value="Unsure"></td>
    </tr>
    <tr>
      <th>244</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/599/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/599/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/599/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "599" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/599/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "599" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/599/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "599" value="Unsure"></td>
    </tr>
    <tr>
      <th>245</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/601/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/601/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/601/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "601" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/601/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "601" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/601/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "601" value="Unsure"></td>
    </tr>
    <tr>
      <th>246</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/603/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/603/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/603/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "603" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/603/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "603" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/603/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "603" value="Unsure"></td>
    </tr>
    <tr>
      <th>247</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/605/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/605/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/605/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "605" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/605/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "605" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/605/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "605" value="Unsure"></td>
    </tr>
    <tr>
      <th>248</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/606/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/606/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/606/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "606" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/606/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "606" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/606/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "606" value="Unsure"></td>
    </tr>
    <tr>
      <th>249</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/607/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/607/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/607/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "607" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/607/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "607" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/607/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "607" value="Unsure"></td>
    </tr>
    <tr>
      <th>250</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/610/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/610/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/610/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "610" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/610/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "610" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/610/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "610" value="Unsure"></td>
    </tr>
    <tr>
      <th>251</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/613/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/613/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/613/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "613" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/613/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "613" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/613/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "613" value="Unsure"></td>
    </tr>
    <tr>
      <th>252</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/616/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/616/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/616/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "616" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/616/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "616" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/616/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "616" value="Unsure"></td>
    </tr>
    <tr>
      <th>253</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/617/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/617/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/617/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "617" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/617/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "617" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/617/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "617" value="Unsure"></td>
    </tr>
    <tr>
      <th>254</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/618/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/618/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/618/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "618" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/618/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "618" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/618/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "618" value="Unsure"></td>
    </tr>
    <tr>
      <th>255</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/621/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/621/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/621/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "621" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/621/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "621" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/621/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "621" value="Unsure"></td>
    </tr>
    <tr>
      <th>256</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/628/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/628/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/628/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "628" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/628/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "628" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/628/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "628" value="Unsure"></td>
    </tr>
    <tr>
      <th>257</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/629/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/629/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/629/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "629" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/629/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "629" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/629/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "629" value="Unsure"></td>
    </tr>
    <tr>
      <th>258</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/630/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/630/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/630/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "630" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/630/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "630" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/630/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "630" value="Unsure"></td>
    </tr>
    <tr>
      <th>259</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/631/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/631/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/631/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "631" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/631/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "631" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/631/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "631" value="Unsure"></td>
    </tr>
    <tr>
      <th>260</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/632/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/632/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/632/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "632" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/632/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "632" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/632/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "632" value="Unsure"></td>
    </tr>
    <tr>
      <th>261</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/634/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/634/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/634/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "634" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/634/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "634" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/634/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "634" value="Unsure"></td>
    </tr>
    <tr>
      <th>262</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/639/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/639/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/639/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "639" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/639/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "639" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/639/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "639" value="Unsure"></td>
    </tr>
    <tr>
      <th>263</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/641/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/641/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/641/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "641" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/641/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "641" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/641/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "641" value="Unsure"></td>
    </tr>
    <tr>
      <th>264</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/642/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/642/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/642/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "642" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/642/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "642" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/642/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "642" value="Unsure"></td>
    </tr>
    <tr>
      <th>265</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/643/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/643/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/643/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "643" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/643/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "643" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/643/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "643" value="Unsure"></td>
    </tr>
    <tr>
      <th>266</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/646/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/646/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/646/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "646" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/646/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "646" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/646/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "646" value="Unsure"></td>
    </tr>
    <tr>
      <th>267</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/647/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/647/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/647/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "647" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/647/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "647" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/647/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "647" value="Unsure"></td>
    </tr>
    <tr>
      <th>268</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/648/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/648/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/648/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "648" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/648/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "648" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/648/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "648" value="Unsure"></td>
    </tr>
    <tr>
      <th>269</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/651/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/651/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/651/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "651" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/651/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "651" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/651/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "651" value="Unsure"></td>
    </tr>
    <tr>
      <th>270</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/653/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/653/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/653/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "653" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/653/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "653" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/653/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "653" value="Unsure"></td>
    </tr>
    <tr>
      <th>271</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/659/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/659/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/659/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "659" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/659/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "659" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/659/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "659" value="Unsure"></td>
    </tr>
    <tr>
      <th>272</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/660/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/660/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/660/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "660" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/660/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "660" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/660/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "660" value="Unsure"></td>
    </tr>
    <tr>
      <th>273</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/661/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/661/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/661/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "661" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/661/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "661" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/661/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "661" value="Unsure"></td>
    </tr>
    <tr>
      <th>274</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/663/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/663/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/663/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "663" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/663/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "663" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/663/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "663" value="Unsure"></td>
    </tr>
    <tr>
      <th>275</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/668/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/668/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/668/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "668" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/668/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "668" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/668/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "668" value="Unsure"></td>
    </tr>
    <tr>
      <th>276</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/669/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/669/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/669/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "669" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/669/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "669" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/669/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "669" value="Unsure"></td>
    </tr>
    <tr>
      <th>277</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/671/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/671/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/671/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "671" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/671/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "671" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/671/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "671" value="Unsure"></td>
    </tr>
    <tr>
      <th>278</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/676/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/676/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/676/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "676" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/676/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "676" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/676/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "676" value="Unsure"></td>
    </tr>
    <tr>
      <th>279</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/679/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/679/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/679/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "679" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/679/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "679" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/679/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "679" value="Unsure"></td>
    </tr>
    <tr>
      <th>280</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/680/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/680/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/680/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "680" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/680/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "680" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/680/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "680" value="Unsure"></td>
    </tr>
    <tr>
      <th>281</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/681/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/681/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/681/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "681" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/681/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "681" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/681/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "681" value="Unsure"></td>
    </tr>
    <tr>
      <th>282</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/683/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/683/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/683/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "683" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/683/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "683" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/683/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "683" value="Unsure"></td>
    </tr>
    <tr>
      <th>283</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/685/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/685/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/685/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "685" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/685/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "685" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/685/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "685" value="Unsure"></td>
    </tr>
    <tr>
      <th>284</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/686/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/686/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/686/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "686" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/686/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "686" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/686/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "686" value="Unsure"></td>
    </tr>
    <tr>
      <th>285</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/687/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/687/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/687/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "687" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/687/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "687" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/687/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "687" value="Unsure"></td>
    </tr>
    <tr>
      <th>286</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/690/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/690/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/690/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "690" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/690/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "690" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/690/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "690" value="Unsure"></td>
    </tr>
    <tr>
      <th>287</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/693/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/693/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/693/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "693" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/693/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "693" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/693/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "693" value="Unsure"></td>
    </tr>
    <tr>
      <th>288</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/701/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/701/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/701/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "701" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/701/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "701" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/701/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "701" value="Unsure"></td>
    </tr>
    <tr>
      <th>289</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/702/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/702/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/702/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "702" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/702/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "702" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/702/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "702" value="Unsure"></td>
    </tr>
    <tr>
      <th>290</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/703/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/703/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/703/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "703" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/703/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "703" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/703/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "703" value="Unsure"></td>
    </tr>
    <tr>
      <th>291</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/705/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/705/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/705/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "705" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/705/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "705" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/705/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "705" value="Unsure"></td>
    </tr>
    <tr>
      <th>292</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/707/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/707/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/707/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "707" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/707/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "707" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/707/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "707" value="Unsure"></td>
    </tr>
    <tr>
      <th>293</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/708/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/708/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/708/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "708" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/708/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "708" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/708/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "708" value="Unsure"></td>
    </tr>
    <tr>
      <th>294</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/709/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/709/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/709/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "709" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/709/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "709" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/709/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "709" value="Unsure"></td>
    </tr>
    <tr>
      <th>295</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/710/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/710/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/710/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "710" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/710/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "710" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/710/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "710" value="Unsure"></td>
    </tr>
    <tr>
      <th>296</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/713/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/713/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/713/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "713" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/713/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "713" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/713/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "713" value="Unsure"></td>
    </tr>
    <tr>
      <th>297</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/714/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/714/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/714/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "714" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/714/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "714" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/714/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "714" value="Unsure"></td>
    </tr>
    <tr>
      <th>298</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/716/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/716/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/716/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "716" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/716/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "716" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/716/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "716" value="Unsure"></td>
    </tr>
    <tr>
      <th>299</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/717/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/717/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/717/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "717" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/717/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "717" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/717/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "717" value="Unsure"></td>
    </tr>
    <tr>
      <th>300</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/718/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/718/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/718/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "718" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/718/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "718" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/718/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "718" value="Unsure"></td>
    </tr>
    <tr>
      <th>301</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/719/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/719/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/719/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "719" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/719/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "719" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/719/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "719" value="Unsure"></td>
    </tr>
    <tr>
      <th>302</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/722/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/722/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/722/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "722" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/722/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "722" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/722/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "722" value="Unsure"></td>
    </tr>
    <tr>
      <th>303</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/723/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/723/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/723/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "723" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/723/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "723" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/723/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "723" value="Unsure"></td>
    </tr>
    <tr>
      <th>304</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/726/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/726/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/726/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "726" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/726/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "726" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/726/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "726" value="Unsure"></td>
    </tr>
    <tr>
      <th>305</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/727/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/727/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/727/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "727" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/727/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "727" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/727/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "727" value="Unsure"></td>
    </tr>
    <tr>
      <th>306</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/729/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/729/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/729/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "729" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/729/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "729" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/729/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "729" value="Unsure"></td>
    </tr>
    <tr>
      <th>307</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/737/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/737/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/737/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "737" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/737/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "737" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/737/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "737" value="Unsure"></td>
    </tr>
    <tr>
      <th>308</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/738/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/738/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/738/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "738" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/738/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "738" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/738/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "738" value="Unsure"></td>
    </tr>
    <tr>
      <th>309</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/739/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/739/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/739/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "739" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/739/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "739" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/739/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "739" value="Unsure"></td>
    </tr>
    <tr>
      <th>310</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/743/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/743/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/743/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "743" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/743/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "743" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/743/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "743" value="Unsure"></td>
    </tr>
    <tr>
      <th>311</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/744/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/744/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/744/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "744" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/744/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "744" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/744/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "744" value="Unsure"></td>
    </tr>
    <tr>
      <th>312</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/748/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/748/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/748/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "748" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/748/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "748" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/748/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "748" value="Unsure"></td>
    </tr>
    <tr>
      <th>313</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/749/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/749/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/749/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "749" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/749/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "749" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/749/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "749" value="Unsure"></td>
    </tr>
    <tr>
      <th>314</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/759/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/759/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/759/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "759" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/759/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "759" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/759/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "759" value="Unsure"></td>
    </tr>
    <tr>
      <th>315</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/765/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/765/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/765/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "765" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/765/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "765" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/765/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "765" value="Unsure"></td>
    </tr>
    <tr>
      <th>316</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/766/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/766/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/766/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "766" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/766/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "766" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/766/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "766" value="Unsure"></td>
    </tr>
    <tr>
      <th>317</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/768/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/768/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/768/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "768" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/768/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "768" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/768/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "768" value="Unsure"></td>
    </tr>
    <tr>
      <th>318</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/771/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/771/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/771/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "771" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/771/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "771" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/771/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "771" value="Unsure"></td>
    </tr>
    <tr>
      <th>319</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/773/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/773/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/773/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "773" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/773/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "773" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/773/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "773" value="Unsure"></td>
    </tr>
    <tr>
      <th>320</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/775/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/775/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/775/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "775" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/775/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "775" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/775/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "775" value="Unsure"></td>
    </tr>
    <tr>
      <th>321</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/776/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/776/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/776/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "776" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/776/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "776" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/776/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "776" value="Unsure"></td>
    </tr>
    <tr>
      <th>322</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/778/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/778/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/778/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "778" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/778/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "778" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/778/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "778" value="Unsure"></td>
    </tr>
    <tr>
      <th>323</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/780/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/780/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/780/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "780" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/780/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "780" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/780/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "780" value="Unsure"></td>
    </tr>
    <tr>
      <th>324</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/784/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/784/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/784/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "784" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/784/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "784" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/784/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "784" value="Unsure"></td>
    </tr>
    <tr>
      <th>325</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/788/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/788/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/788/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "788" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/788/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "788" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/788/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "788" value="Unsure"></td>
    </tr>
    <tr>
      <th>326</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/790/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/790/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/790/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "790" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/790/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "790" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/790/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "790" value="Unsure"></td>
    </tr>
    <tr>
      <th>327</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/791/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/791/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/791/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "791" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/791/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "791" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/791/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "791" value="Unsure"></td>
    </tr>
    <tr>
      <th>328</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/792/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/792/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/792/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "792" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/792/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "792" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/792/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "792" value="Unsure"></td>
    </tr>
    <tr>
      <th>329</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/793/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/793/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/793/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "793" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/793/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "793" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/793/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "793" value="Unsure"></td>
    </tr>
    <tr>
      <th>330</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/794/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/794/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/794/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "794" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/794/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "794" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/794/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "794" value="Unsure"></td>
    </tr>
    <tr>
      <th>331</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/798/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/798/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/798/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "798" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/798/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "798" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/798/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "798" value="Unsure"></td>
    </tr>
    <tr>
      <th>332</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/800/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/800/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/800/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "800" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/800/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "800" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/800/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "800" value="Unsure"></td>
    </tr>
    <tr>
      <th>333</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/803/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/803/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/803/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "803" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/803/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "803" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/803/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "803" value="Unsure"></td>
    </tr>
    <tr>
      <th>334</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/809/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/809/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/809/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "809" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/809/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "809" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/809/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "809" value="Unsure"></td>
    </tr>
    <tr>
      <th>335</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/810/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/810/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/810/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "810" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/810/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "810" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/810/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "810" value="Unsure"></td>
    </tr>
    <tr>
      <th>336</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/818/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/818/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/818/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "818" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/818/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "818" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/818/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "818" value="Unsure"></td>
    </tr>
    <tr>
      <th>337</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/820/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/820/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/820/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "820" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/820/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "820" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/820/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "820" value="Unsure"></td>
    </tr>
    <tr>
      <th>338</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/821/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/821/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/821/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "821" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/821/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "821" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/821/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "821" value="Unsure"></td>
    </tr>
    <tr>
      <th>339</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/824/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/824/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/824/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "824" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/824/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "824" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/824/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "824" value="Unsure"></td>
    </tr>
    <tr>
      <th>340</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/826/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/826/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/826/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "826" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/826/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "826" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/826/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "826" value="Unsure"></td>
    </tr>
    <tr>
      <th>341</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/828/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/828/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/828/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "828" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/828/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "828" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/828/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "828" value="Unsure"></td>
    </tr>
    <tr>
      <th>342</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/829/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/829/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/829/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "829" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/829/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "829" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/829/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "829" value="Unsure"></td>
    </tr>
    <tr>
      <th>343</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/830/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/830/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/830/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "830" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/830/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "830" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/830/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "830" value="Unsure"></td>
    </tr>
    <tr>
      <th>344</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/833/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/833/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/833/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "833" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/833/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "833" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/833/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "833" value="Unsure"></td>
    </tr>
    <tr>
      <th>345</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/835/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/835/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/835/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "835" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/835/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "835" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/835/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "835" value="Unsure"></td>
    </tr>
    <tr>
      <th>346</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/836/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/836/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/836/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "836" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/836/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "836" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/836/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "836" value="Unsure"></td>
    </tr>
    <tr>
      <th>347</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/843/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/843/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/843/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "843" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/843/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "843" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/843/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "843" value="Unsure"></td>
    </tr>
    <tr>
      <th>348</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/844/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/844/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/844/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "844" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/844/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "844" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/844/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "844" value="Unsure"></td>
    </tr>
    <tr>
      <th>349</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/846/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/846/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/846/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "846" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/846/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "846" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/846/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "846" value="Unsure"></td>
    </tr>
    <tr>
      <th>350</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/852/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/852/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/852/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "852" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/852/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "852" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/852/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "852" value="Unsure"></td>
    </tr>
    <tr>
      <th>351</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/856/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/856/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/856/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "856" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/856/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "856" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/856/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "856" value="Unsure"></td>
    </tr>
    <tr>
      <th>352</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/860/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/860/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/860/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "860" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/860/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "860" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/860/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "860" value="Unsure"></td>
    </tr>
    <tr>
      <th>353</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/871/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/871/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/871/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "871" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/871/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "871" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/871/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "871" value="Unsure"></td>
    </tr>
    <tr>
      <th>354</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/873/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/873/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/873/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "873" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/873/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "873" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/873/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "873" value="Unsure"></td>
    </tr>
    <tr>
      <th>355</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/880/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/880/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/880/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "880" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/880/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "880" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/880/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "880" value="Unsure"></td>
    </tr>
    <tr>
      <th>356</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/886/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/886/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/886/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "886" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/886/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "886" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/886/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "886" value="Unsure"></td>
    </tr>
    <tr>
      <th>357</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/887/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/887/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/887/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "887" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/887/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "887" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/887/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "887" value="Unsure"></td>
    </tr>
    <tr>
      <th>358</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/888/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/888/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/888/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "888" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/888/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "888" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/888/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "888" value="Unsure"></td>
    </tr>
    <tr>
      <th>359</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/892/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/892/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/892/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "892" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/892/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "892" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/892/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "892" value="Unsure"></td>
    </tr>
    <tr>
      <th>360</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/898/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/898/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/898/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "898" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/898/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "898" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/898/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "898" value="Unsure"></td>
    </tr>
    <tr>
      <th>361</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/900/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/900/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/900/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "900" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/900/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "900" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/900/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "900" value="Unsure"></td>
    </tr>
    <tr>
      <th>362</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/901/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/901/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/901/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "901" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/901/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "901" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/901/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "901" value="Unsure"></td>
    </tr>
    <tr>
      <th>363</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/902/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/902/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/902/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "902" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/902/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "902" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/902/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "902" value="Unsure"></td>
    </tr>
    <tr>
      <th>364</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/903/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/903/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/903/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "903" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/903/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "903" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/903/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "903" value="Unsure"></td>
    </tr>
    <tr>
      <th>365</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/904/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/904/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/904/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "904" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/904/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "904" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/904/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "904" value="Unsure"></td>
    </tr>
    <tr>
      <th>366</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/905/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/905/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/905/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "905" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/905/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "905" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/905/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "905" value="Unsure"></td>
    </tr>
    <tr>
      <th>367</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/906/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/906/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/906/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "906" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/906/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "906" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/906/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "906" value="Unsure"></td>
    </tr>
    <tr>
      <th>368</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/912/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/912/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/912/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "912" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/912/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "912" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/912/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "912" value="Unsure"></td>
    </tr>
    <tr>
      <th>369</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/913/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/913/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/913/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "913" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/913/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "913" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/913/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "913" value="Unsure"></td>
    </tr>
    <tr>
      <th>370</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/914/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/914/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/914/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "914" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/914/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "914" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/914/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "914" value="Unsure"></td>
    </tr>
    <tr>
      <th>371</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/916/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/916/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/916/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "916" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/916/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "916" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/916/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "916" value="Unsure"></td>
    </tr>
    <tr>
      <th>372</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/920/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/920/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/920/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "920" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/920/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "920" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/920/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "920" value="Unsure"></td>
    </tr>
    <tr>
      <th>373</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/921/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/921/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/921/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "921" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/921/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "921" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/921/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "921" value="Unsure"></td>
    </tr>
    <tr>
      <th>374</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/925/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/925/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/925/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "925" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/925/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "925" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/925/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "925" value="Unsure"></td>
    </tr>
    <tr>
      <th>375</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/930/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/930/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/930/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "930" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/930/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "930" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/930/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "930" value="Unsure"></td>
    </tr>
    <tr>
      <th>376</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/932/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/932/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/932/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "932" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/932/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "932" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/932/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "932" value="Unsure"></td>
    </tr>
    <tr>
      <th>377</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/936/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/936/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/936/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "936" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/936/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "936" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/936/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "936" value="Unsure"></td>
    </tr>
    <tr>
      <th>378</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/939/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/939/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/939/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "939" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/939/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "939" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/939/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "939" value="Unsure"></td>
    </tr>
    <tr>
      <th>379</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/940/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/940/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/940/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "940" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/940/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "940" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/940/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "940" value="Unsure"></td>
    </tr>
    <tr>
      <th>380</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/942/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/942/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/942/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "942" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/942/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "942" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/942/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "942" value="Unsure"></td>
    </tr>
    <tr>
      <th>381</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/945/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/945/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/945/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "945" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/945/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "945" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/945/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "945" value="Unsure"></td>
    </tr>
    <tr>
      <th>382</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/950/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/950/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/950/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "950" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/950/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "950" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/950/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "950" value="Unsure"></td>
    </tr>
    <tr>
      <th>383</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/954/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/954/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/954/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "954" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/954/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "954" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/954/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "954" value="Unsure"></td>
    </tr>
    <tr>
      <th>384</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/955/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/955/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/955/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "955" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/955/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "955" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/955/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "955" value="Unsure"></td>
    </tr>
    <tr>
      <th>385</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/956/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/956/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/956/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "956" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/956/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "956" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/956/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "956" value="Unsure"></td>
    </tr>
    <tr>
      <th>386</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/960/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/960/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/960/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "960" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/960/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "960" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/960/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "960" value="Unsure"></td>
    </tr>
    <tr>
      <th>387</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/963/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/963/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/963/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "963" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/963/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "963" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/963/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "963" value="Unsure"></td>
    </tr>
    <tr>
      <th>388</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/967/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/967/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/967/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "967" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/967/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "967" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/967/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "967" value="Unsure"></td>
    </tr>
    <tr>
      <th>389</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/968/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/968/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/968/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "968" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/968/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "968" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/968/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "968" value="Unsure"></td>
    </tr>
    <tr>
      <th>390</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/969/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/969/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/969/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "969" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/969/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "969" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/969/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "969" value="Unsure"></td>
    </tr>
    <tr>
      <th>391</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/973/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/973/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/973/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "973" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/973/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "973" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/973/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "973" value="Unsure"></td>
    </tr>
    <tr>
      <th>392</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/975/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/975/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/975/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "975" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/975/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "975" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/975/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "975" value="Unsure"></td>
    </tr>
    <tr>
      <th>393</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/978/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/978/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/978/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "978" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/978/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "978" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/978/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "978" value="Unsure"></td>
    </tr>
    <tr>
      <th>394</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/983/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/983/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/983/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "983" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/983/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "983" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/983/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "983" value="Unsure"></td>
    </tr>
    <tr>
      <th>395</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/984/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/984/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/984/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "984" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/984/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "984" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/984/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "984" value="Unsure"></td>
    </tr>
    <tr>
      <th>396</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/986/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/986/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/986/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "986" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/986/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "986" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/986/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "986" value="Unsure"></td>
    </tr>
    <tr>
      <th>397</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/987/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/987/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/987/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "987" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/987/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "987" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/987/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "987" value="Unsure"></td>
    </tr>
    <tr>
      <th>398</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/989/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/989/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/989/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "989" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/989/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "989" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/989/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "989" value="Unsure"></td>
    </tr>
    <tr>
      <th>399</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/990/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/990/gen/dcgan.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/990/gen/dcgan-gp.jpg"/></td>
      <td><input type="radio" name = "990" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/990/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "990" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/990/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "990" value="Unsure"></td>
    </tr>
    <tr>
      <th>400</th>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/997/original.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/997/gen/dcgan-gp.jpg"/></td>
      <td><img src="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/997/gen/dcgan.jpg"/></td>
      <td><input type="radio" name = "997" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/997/gen/dcgan-gp.jpg"></td>
      <td><input type="radio" name = "997" value="https://s3-us-west-1.amazonaws.com/facesdb/gans_compare/celeba_fixed/997/gen/dcgan.jpg"></td>
      <td><input type="radio" name = "997" value="Unsure"></td>
    </tr>
  </tbody>
</table>
<div>
   <button type="submit" name="submit">Submit</button>
</div>
</form >

</body>
</html>
