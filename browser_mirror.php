<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Browser Mirror</title>
    <style type="text/css">
    body{
      margin: 0;
      padding: 0;
      background: #f1ddfd;
    }
    #main-content {
      margin: 30px;
      text-align: center;
      color: #05464f;
    }
    #main-content h1{
      font: 40px Arial, Helvetica, sans-serif;
    }
    #main-content p {
      font: 24px "Times New Roman", Times, Georgia, serif;
      text-align: left;
    }
    #main-content p strong {
      font-size 70px;
      color: #000000;
    }
    </style>
  </head>
  <body>
    <div id='main-content'>
      <h1>Browser Mirror</h1>
        <?php date_default_timezone_set("Europe/London"); ?>

        <p>Remote IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
        <p>User Agent: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
        <p>Referer: <?php echo $_SERVER['HTTP_REFERER']; ?></p>
        <p>Request Time (Unix): <?php echo $_SERVER['REQUEST_TIME']; ?></p>
        <p>Request Time (formatted): <?php echo date('D, M, y, g:ia', $_SERVER['REQUEST_TIME']); ?></p>
        <p>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></p>
        <p>Request Method: <?php echo $_SERVER['REQUEST_METHOD']; ?></p>
        <p>Query String: <?php echo $_SERVER['QUERY_STRING']; ?></p>
        <p>HTTP Accept: <?php echo $_SERVER['HTTP_ACCEPT']; ?></p>
        <p>HTTP Accept Charset: <?php echo $_SERVER['HTTP_ACCEPT_CHARSET']; ?></p>
        <p>HTTP Accept Encoding: <?php echo $_SERVER['HTTP_ACCEPT_ENCODING']; ?></p>
        <p>HTTP Accept Language: <?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; ?></p>
        <p>HTTPS?: <?php if(isset($_SERVER['HTTPS'])) {echo 'YES';} else {echo 'No';} ?></p>
        <p>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></p>

    </div>
  </body>
</html>
