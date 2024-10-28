<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>PHP MVC Frameworks</title>
            <link rel="icon" type="image/x-icon" href="favicon.ico" />
            <link rel="stylesheet" href="{{ asset('/assets/css/foundation.css')}}">
            <link rel="stylesheet" href="{{ asset('/assets/css/app.css')}}">
    <meta class="foundation-mq"></head>
    <body>

    <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
            <li role="menuitem">PHP MVC Frameworks</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    <div class="row">
      <h4>Index</h4>
      <div class="medium-12  columns">
      
      <table>
          <tr>
            <th>Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th width="200">Action</th>
          </tr>

          foreach ($clients as $client)
          <tr>
            <td>{{$client['name']}}</td>  
            <td>Vega</td>
            <td>vincent@domain.com</td>
            <td><a class="button hollow" href="./details.html">VIEW DETAILS</a></td>
          </tr>
          endforeach ()
          <tr>
            <td>Mia</td>
            <td>Wallace</td>
            <td>mia@domain.com</td>
            <td><a class="button hollow" href="./details.html">VIEW DETAILS</a></td>
          </tr>
          <tr>
            <td>Jules</td>
            <td>Winnfield</td>
            <td>jules@domain.com</td>
            <td><a class="button hollow" href="./details.html">VIEW DETAILS</a></td>
          </tr>
        </table>
      </div>
    </div>

    <div class="row column">
      <hr>
      <ul class="menu">
        <li class="float-right">Copyright Footer</li>
      </ul>
    </div>

        <script src="./assets/js/vendor/jquery.js"></script>
        <script src="./assets/js/vendor/what-input.js"></script>
        <script src="./assets/js/vendor/foundation.js"></script>
        <script src="./assets/js/app.js"></script>
    </body>
</html>