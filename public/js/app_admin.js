var app = angular.module('app', ['ngTouch', 'ui.grid', 'ui.grid.pagination']);
 
app.controller('MainCtrl', ['$scope', '$http', function ($scope, $http) {
  $scope.MemberGrid = {
    paginationPageSizes: [25, 50, 75],
    paginationPageSize: 25,
     enableFiltering: true,
    columnDefs: [
      { name: 'nama' },
      { name: 'email' },
      { name: 'join_Date' }
    ]
  };
 

 

 
  $http.get(route)
  .success(function (data) {
    $scope.MemberGrid.data = data;
    
  });
}]);