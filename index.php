<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<h2>Seed Starter Temps</h2>'; ?>
    <?php
      $recordsArray = file('/home/gbk/data/weatherTracker/seedStarter/seedStarterTemps20170301.txt')
      foreach($recordsArray as $line) {
        echo $line;
      }
    ?>
  </body>
</html>
