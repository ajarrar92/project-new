<html lang="en">
    
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet"> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
    <script src = "js/angular.min.js"></script>
  </head>

  <body>
      
      <div ng-app="newApp">
          <div data-ng-controller ="myCtrl" class = "main">
              <ul >
                  <li data-ng-repeat="list in listItem">{{list}}</li>
              </ul>
              <div data-ng-repeat="list in pepole" class = "item-list">
                  <div class = "item">
                      <img src ="images/{{list.name}}.png">
                      <h2>{{list.name}}</h2>
                      <p class = "{{}}">{{list.desc}}</p>
                  </div>
              </div>
                  
                  <ahmad-footer></ahmad-footer>
          </div> <!-- End div controller -->
      </div>
      
      
      <script src ="js/bootstrap.min.js"></script>
     <script src ="js/script.js"></script>
  </body>
  
</html>