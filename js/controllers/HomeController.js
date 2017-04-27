'use strict';
app.controller('HomeController', ['$scope', 'suggests', function HomeController($scope, suggests) {
  $scope.posts = suggests.posts;

  $scope.addSuggestion = function() {

    if(!$scope.title || $scope.title === "") {
      return;
    }

    $scope.posts.push({
      title: $scope.title,
      upvotes: 0,
      comments: [],
    });

    $scope.title = '';
  }

  $scope.upVote = function(post) {
    post.upvotes++;
  }
}]);
