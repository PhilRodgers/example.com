<!DOCTYPE html>
<html lang="en">

  <head>



    <!-- Add sanitized content -->
    <?php if(!empty($meta)): ?>

    <?php if(!empty($meta['title'])): ?>
      <title><?php echo $meta['title']; ?></title>
    <?php endif; ?>

    <?php if(!empty($meta['description'])): ?>
      <meta name="description" content="<?php echo $meta['description']; ?>">
    <?php endif; ?>

    <?php if(!empty($meta['keywords'])): ?>
      <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
    <?php endif; ?>

    <?php endif; ?>
    <!-- End sanitized content -->



    <meta charset="UTF-8">
    <title>Hello</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="description" content="Microtrain2101 home page">
    <meta name="keywords" content="full stack, web developer, full stack web developer, CSM, Scrum Master, home page"> -->
    <link rel="stylesheet" type="text/css" href="../dist/css/main.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="../site.webmanifest">
  </head>

  <body>

    <header>
      <span class="logo">Phil's Website</span>
      <a id="toggleMenu">Menu<a>
        <nav>
          <ul>
            <li><a href="../../public/index.php">Home</a></li>
            <li><a href="../../public/resume.php">Resume</a></li>
            <li><a href="../../public/contact.php">Contact</a></li>
            <li><a href="../../public/users/index.php">Users</a></li>
            <li><a href="../../public/posts/index.php">Posts</a></li>
          </ul>
        </nav>
    </header>

    <div class="row">
        <div id="Content">
            <?php echo $content; ?>
        </div>
        <div id="Sidebar">
          <div id="AboutMe">
          </div>
        </div>
    </div>

  </body>

</html>
