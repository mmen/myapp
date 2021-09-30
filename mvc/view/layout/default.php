<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo isset($title_for_layout)?$title_for_layout:'Mon Site'; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
      <a class="navbar-brand" href="#">Mon Site</a>
      <ul class="navbar-nav">
        <?php foreach ($pages as $p): ?>
          <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL.'/pages/view/'.$p->id; ?>" title="<?php echo $p->name; ?>"><?php echo $p->name; ?></a></li>
        <?php endforeach; ?>
        
      </ul>
  </nav>

  <div class="container-fluid pt-3">
      <?php echo $content_for_layout; ?>
      
  </div>

</body>
</html>