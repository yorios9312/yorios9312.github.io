app.controller('PostController', ['$scope', 'suggests', '$routeParams', function PostController($scope, suggests, $routeParams) {
  $scope.post = suggests.posts[$routeParams.id];

  $scope.addComment = function() {

    if(!$scope.new_comment || $scope.new_comment === "") {
      return;
    }

    $scope.post.comments.push({
      body: $scope.new_comment,
      upvote: 0,
    });

    $scope.new_comment = "";

  }

  $scope.upVote = function(comment) {
    comment.upvote++;
  }

}]);
