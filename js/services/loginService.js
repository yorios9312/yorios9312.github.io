'use strict';

app.factory('loginService', function($http) {
  return {
    login: function(user) {
      var $promise = $http.post('data/user.json', user);
      $promise.then(function(msg) {
        if (msg.data === "success") console.log("login successful");
        else console.log("Login failed!");
      });
    }
  }
});
