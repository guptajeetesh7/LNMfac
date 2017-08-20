var app = angular.module('myApp',[]);

app.controller('feedback',function($scope,$http){
	
	$scope.send = function(){

		if($scope.year!=undefined && $scope.branch!=undefined && $scope.course!=undefined && $scope.faculty!=undefined && $scope.feedback!=undefined){

			$http.post('includes/feedback.php',{year : $scope.year , branch : $scope.branch , faculty: $scope.faculty , course : $scope.course , feedback : $scope.feedback})
			.then(function(Response){
				console.log(Response);
				alert('Response Recorded Successfully');

				$scope.year = undefined;
				$scope.branch = undefined;
				$scope.course = undefined;
				$scope.faculty = undefined;
				$scope.feedback = undefined;
			},function(){
				alert('Server Down');
			});

		}else{
			alert('Please fill all feilds');
		}	
	};

});