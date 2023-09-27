<?php
  $banners = array ();
  $banners[1] = '<a href=""><img src=""></a>';
  $banners[2] = '<a href=""><img src=""></a>';
  $banners[3] = '<a href=""><img src=""></a>';
  echo $banners[array_rand ($banners)];
?>
