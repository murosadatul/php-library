<?php
//PHP order array by date
$data = array(
      array(
          "title" => "Penjualan Buku",
          "date"  => "2021-12-30"
      ),
      array(
          "title" => "Penjualan Rak Buku",
          "date"  => "2021-12-12"
      )
  );

  // asc sorting data
  function sortFunction( $a, $b ) {
      return strtotime($a["date"]) - strtotime($b["date"]);
  }
  
  usort($data, "sortFunction");
  var_dump($data);

  //desc sorting data
  function sortFunction( $a, $b ) {
      return strtotime($b["date"]) - strtotime($a["date"]);
  }
  
  usort($data, "sortFunction");
  var_dump($data);
  
  ?>
