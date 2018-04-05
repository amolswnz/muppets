(function() {
  angular.module('muppetsApp', ['ngSanitize'])
    .controller('HomeController', function($http) {
      var featuredMuppet = this;
      // featuredMuppet.database = 'xxxx';
      $http.get('api/getRandomMuppet.php')
        .then(function(res) {
          featuredMuppet.muppet = res.data;
          console.log(res.data, featuredMuppet);
        });
    });
})();
