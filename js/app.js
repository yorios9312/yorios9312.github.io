'use strict';
var app = angular.module('SuggestionBox', ['ngRoute'])
  .config(function($routeProvider) {
    $routeProvider.when('/', {
      controller: 'HomeController',
      templateUrl: '../views/home.html'
    })
    .when('/post/:id', {
      controller: 'PostController',
      templateUrl: '../views/posts.html'
    })
    .when('/login', {
      controller: 'LoginController',
      templateUrl: '../views/login-view.html'
    })
    .otherwise({redirectTo: '/'});

  });
