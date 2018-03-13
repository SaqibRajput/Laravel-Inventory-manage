var app = angular.module('myApp', ['ngRoute', 'ui.bootstrap', 'ngAnimate']);

app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
    when('/', {
      title: 'Products',
      templateUrl: 'products',
      controller: 'productsCtrl'
    })
    .otherwise({
      redirectTo: '/'
    });;
}]);
    