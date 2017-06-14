<!doctype html>
<html ng-app="miApp">
  <head>
  <meta charset="utf-8">
      <title>Extensão Universitária UFPR</title>
  </head>
  <body ng-controller="mainController">
    <h4>Testando o Github</h4>
    <ul>
      <label>Filtro:</label>
		<input ng-model="query">
      <hr>
      <li ng-repeat="city in cities | filter:query">
        {{city.name}} - {{city.country}}
      </li>
    </ul>
    <hr>
    <h4>Agregar ciudad</h4>
    <input type="text" ng-model="newCity"    placeholder="¿A qué ciudad?">
    <input type="text" ng-model="newCountry" placeholder="¿En qué país?">
    <button ng-click="agregar()">Agregar</button>
      
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.10/angular.min.js">
    </script>
    <script src="main.js"></script>

  </body>
</html>