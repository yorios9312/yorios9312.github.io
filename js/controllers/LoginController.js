'use strict';

app.controller('LoginController', function($scope, loginService) {
  $scope.login = function(user) {
    loginService.login(user); //call login service
  }
})
