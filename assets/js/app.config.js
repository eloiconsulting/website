var app = angular.module('app',['ngRoute']).config(['$routeProvider',
	
	]);


//Home page controller
app.controller('HomepageCtrl',['$window', '$scope', '$location', '$http', function($window, $scope, $loction, $http){          

    $scope.construct = function()
    {
       $scope.form={};
       $scope.lists={};
       $scope.getproductsLists();

    }

    //Products list function
        
        $scope.getproductsLists = function()
        {
            
             $http.post('./api/HomepageCtrl/index',{
              
        }).then(function(result){
            
            console.log(result);
           
            $scope.lists = result.data;
            console.log($scope.lists);
               
            });
        }
    //End Here

    $scope.cart = function(data)
        {
            console.log(data);
            $http.post('./api/HomepageCtrl/addcart',{
              "data": data
        }).then(function(result){
            
            //console.log(result);
            alert("Product Added to cart");
            window.location.reload();
           
               
            });

        }
    
}]);
app.controller('SinglepageCtrl',['$window', '$scope', '$location', '$http','$routeParams', function($window, $scope, $loction, $http, $routeParams){          

    $scope.construct = function()
    {
       $scope.form={};
       $scope.list={};
       $scope.getproductsLists();
       // var url = new Url(window.location.href);
       //  var newurl = url.searchParams('id');
     console.log($routeParams.id);
    }
    
    //Products list function
        
        $scope.getproductsLists = function()
        {
            
             $http.post('./api/SinglepageCtrl/index',{
              'data' : $routeParams.id
        }).then(function(result){
             console.log(result);
               // var str = result.data.pr_desc;
               // var res = str.replace(/<\/?[^>]+(>|$)/g," ");
            $scope.list.pr_id = result.data.pr_id;
            $scope.list.pr_name = result.data.pr_name;
            $scope.list.pr_price = result.data.pr_price;
            $scope.list.pr_desc = result.data.pr_desc;
            $scope.list.pr_img_url = result.data.pr_img_url;
            //console.log($scope.lists);
               
            });
        }
    //End Here

    $scope.FormValidate = function()
    {
        if(!$scope.form.username || $scope.form.username =='' || $scope.form.username==null)
        {
           alert("Enter User Name...")   
        }else if(!$scope.form.email || $scope.form.email =='' || $scope.form.email==null)
        {
           alert("Enter Email...")   
        }else if(!$scope.form.phone || $scope.form.phone =='' || $scope.form.phone==null)
        {
           alert("Enter Contact No..")   
          
        }else{
            console.log($scope.form);
            $http.post('./api/SinglepageCtrl/sendmail',{
                            'data' : $scope.form,
                            'id':$scope.list.pr_id,
                        }).then(function(result){
                            console.log(result)
                            if(result.data.status == 'true'){
                                alert("Mail Sent  Successfully");
                                $scope.construct(); 

                            }else{
                                alert("Failed to Sent a Mail");
                                                   
                            }
                        });
        }
    }
    
}]);

app.controller('ContactpageCtrl',['$window', '$scope', '$location', '$http','$routeParams', function($window, $scope, $loction, $http, $routeParams){          

    $scope.construct = function()
    {
       $scope.form={};
       $scope.list={};
       $scope.getproductsLists();
       // var url = new Url(window.location.href);
       //  var newurl = url.searchParams('id');
     console.log($routeParams.id);
    }
    
   $scope.FormValidate = function()
    {
        if(!$scope.form.username || $scope.form.username =='' || $scope.form.username==null)
        {
           alert("Enter User Name...")   
        }else if(!$scope.form.email || $scope.form.email =='' || $scope.form.email==null)
        {
           alert("Enter Email...")   
        }else if(!$scope.form.phone || $scope.form.phone =='' || $scope.form.phone==null)
        {
           alert("Enter Contact No..")   
          
        }else{
            console.log($scope.form);
            $http.post('./api/ContactpageCtrl/sendmail',{
                            'data' : $scope.form
                        }).then(function(result){
                            console.log(result)
                            if(result.data.status == 'true'){
                                alert("Mail Sent  Successfully");
                                $scope.construct(); 

                            }else{
                                alert("Failed to Sent a Mail");
                                                   
                            }
                        });
        }
    }
    
}]);

//Cart function
app.controller('CartCtrl',['$window', '$scope', '$location', '$http', function($window, $scope, $loction, $http){          

    $scope.construct = function()
    {
       $scope.form={};
       $scope.lists={};
       $scope.getcartproducts();

    }

    //Products list function
        
        $scope.getcartproducts = function()
        {
            
             $http.post('./api/CartCtrl/index',{
             
        }).then(function(result){
            
            //console.log(result);
           
            $scope.lists = result.data;
            //console.log($scope.lists);
               
            });
        }
    //End Here

         $scope.FormValidate = function()
    {
        if(!$scope.form.username || $scope.form.username =='' || $scope.form.username==null)
        {
           alert("Enter User Name...")   
        }else if(!$scope.form.email || $scope.form.email =='' || $scope.form.email==null)
        {
           alert("Enter Email...")   
        }else if(!$scope.form.phone || $scope.form.phone =='' || $scope.form.phone==null)
        {
           alert("Enter Contact No..")   
          
        }else{
           // console.log($scope.form);
            $http.post('./api/CartCtrl/sendmail',{
                            'data' : $scope.form,
                            
                        }).then(function(result){
                            //console.log(result)
                            
                                alert("Mail Sent  Successfully");
                                $('#flipFlop').modal('hide'); 
                                window.location.href="#!/"; 

                            
                        });
        }
    }


    $scope.delete = function(data,index)
    {
        $http.post('./api/CartCtrl/Removeproduct',{
            'data' : data,
            'index':index,
            
        }).then(function(result){
            console.log(result)
            if(result.data.status == 'true'){
                alert("Item Removed Successfully");
                 $scope.construct();
               }else{
                alert("Failed to remove item");
                                   
            }
        });
    }
    
    
}]);


//Index page controller
app.controller('IndexCtrl',['$window', '$scope', '$location', '$http', function($window, $scope, $loction, $http){

    $scope.construct = function()
    {
       
       $scope.count= 0;
       $scope.getcount();

    }

    //getting count of product

    $scope.getcount = function()
    {
        $http.post('./api/CartCtrl/GetCount',{
           
        }).then(function(result){
            console.log(result)
            $scope.count = result.data.count;
            
        });  
    } 
}]);

