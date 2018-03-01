<?php include('header.php') ?>
    <main>
    <div><?php echo "Ovo je test!"; ?></div>

    <?php
    $arr = array(1 => "Miodrag Lapcevic", 2 => "Pera Peric", 3 => "Nikola Nikolic" );
     ?>

     <h1>PHP lista</h1>
     <ul>
       <?php
       foreach ($arr as $key => $value) {
         echo "<li>$key. $value</li>";
       }

        ?>
     </ul>

     <h1>HTML lista</h1>
    <ul>
      <li>1. Miodrag Lapcevic</li>
      <li>2. Pera Peric</li>
      <li>3. Nikola Nikolic</li>
    </ul>


<table style="border: 1px solid black;">
  <thead>
  <tr>
    <th>Index</th>
    <th>Ime i prezime</th>
  </tr>
</thead>
<tbody>
  <?php
  foreach ($arr as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
  }

  ?>
</tbody>
</table>
</main>
<?php include('footer.php') ?>
