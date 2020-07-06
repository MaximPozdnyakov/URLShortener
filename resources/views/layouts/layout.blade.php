
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Short URL</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
    </head> 
    <body class="bg-secondary ">
      <div class="d-flex flex-column justify-content-between" style="min-height: 100vh;">
        <div class="container">
          <h4 class="text-primary text-center my-3 display-4"><strong>Short URL</strong></h4>
          @yield('content')
        </div>
        <footer class="bg-dark p-4">
          <p class="text-white text-center m-0">Made by Maxim Pozdnyakow. 2020</p>
        </footer>
      </div>
        <script>
          function copyTextFromElement(elementID) {
            let element = document.getElementById(elementID); 
            let elementText = element.textContent; 
            copyText(elementText); 
          }
          function copyText(text) {
            navigator.clipboard.writeText(text);
          }
          let a = 0;
        </script>
    </body>
</html>