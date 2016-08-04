var app = angular.module('app', ['ngTouch', 'ui.grid', 'ui.grid.pagination']);

app.controller('MainCtrl', ['$scope', '$http', function ($scope, $http) {
 $scope.setIdle = function(id){
  if(confirm("Apakah anda yakin ingin menon-aktifkan member ini?")){
    $http.delete(route.idle +"/"+ id)
    .success(function() {
     $http.get(route.get)
     .success(function (data) {
      $scope.MemberGrid.data = data;

    });
   });;  
  }

};

 $scope.resetPass = function(id){
  if(confirm("Apakah anda yakin ingin mereset password member ini?")){
    $http.put(route.reset +"/"+ id)
    .success(function() {
     
      
  alert("Password sudah terkirim ke email member")
   });;  
  }
  
};
$scope.MemberGrid = {
  paginationPageSizes: [25, 50, 75],
  paginationPageSize: 25,
  enableFiltering: true,
  columnDefs: [
  { name: 'nama' , width:'25%'},
  { name: 'email', width:'20%' },
  { name: 'Tanggal Bergabung',field:'join_date' , width:'20%'},
  {
    name:'Action', width:'35%',
    cellTemplate: '<div><button class="btn btn-warning btn-xs" ng-click="grid.appScope.resetPass(row.entity.id)"><i class="fa fa-refresh"></i> Reset Password</button> <button class="btn btn-danger btn-xs" ng-click="grid.appScope.setIdle(row.entity.id)"><i class="fa fa-remove"></i> Hapus</button></div>'
  },

  ]
};





$http.get(route.get)
.success(function (data) {
  $scope.MemberGrid.data = data;

});
}]);