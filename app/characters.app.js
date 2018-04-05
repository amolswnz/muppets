(function() {
  angular.module('muppetsApp', ['ngSanitize'])
    .controller('CharactersController', function($http) {
      var muppets = this;
      $http.get('api/getMuppetsList.php')
        .then(function(res) {
          muppets.list = res.data;
          console.log(res.data);
        });

      muppets.showDetail = function(id) {
        $http.get('api/getMuppet.php?id=' + id)
          .then(function(res) {
            muppets.currentMuppet = res.data;
          });
      }

    });

})();
