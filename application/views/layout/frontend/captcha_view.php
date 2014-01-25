<html>
<head> 
  <title>Add a Captcha!</title>
</head>
<body>
  <h1>Adding a captcha</h1>
  <p>Take a look at <code style="background:rgb(220,220,220);">application/controllers/captcha.php</code> to look at the 
      controller used to generate the captcha.</p>
  
  <?php echo validation_errors(); ?>
  
<form action="">
  
  <p>
    <label for="name">Name:
      <input id="name" name="name" type="text" />
    </label>
  </p>
  
  <?php echo $image; ?>
  
  <p>
    <label for="name">Captcha:
      <input id="captcha" name="captcha" type="text" />
    </label>
  </p>

  <input type="submit">


</form>
  

  

  
</body>
</html>
