<?php
  
  $riel = 2103942;
  $kyat = 19092;
  $krone = 109;
  $lek = 9094;

  echo "At the start of your transaction you had $riel riel, $kyat kyat, $krone krones, and $lek lek.";

  $riel_usd = 0.00024;
  $kyat_usd = 0.00047;
  $krone_usd = 0.13;
  $lek_usd = 0.0084;

  $usd_from_riel = $riel * $riel_usd;
  echo "\nYour $riel riel were exchanged for $$usd_from_riel usd.";

  $usd_from_kyat = $kyat * $kyat_usd;
  echo "\nYour $kyat kyat were exchanged for $$usd_from_kyat usd.";

  $usd_from_krone = $krone * $krone_usd;
  echo"\nYour $krone krones were exchanged for $$usd_from_krone usd.";

  $usd_from_lek = $lek * $lek_usd;
  echo "\nYour $lek lek were exchanged for $$usd_from_lek usd.";

  $final = $usd_from_riel + $usd_from_kyat + $usd_from_krone + $usd_from_lek - 4;
  echo "\nTotal amount recieved minus fees equals $$final usd.";
