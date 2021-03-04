var loginData=[]
loginData[0]="verifSession"
$("#formLogin").validate()
$.ajax({
    type: 'post',
    url: 'lib/userController.php',
    data: { 'array': loginData},
    dataType: 'json',	
}).done( function (response){
    console.log(response);
    if(response){
        location.href ="views/home.php";
    }
   
})

$("#btn-login").click(function(){
    var loginData=[]
    loginData[0]="login"
    
    loginData[1]=$("#usernamelogin").val()
    loginData[2]=$("#passwordlogin").val()
   
    if($("#formLogin").valid()){
        $.ajax({
            type: 'post',
            url: 'lib/userController.php',
            data: { 'array': loginData},
            dataType: 'json',	
        }).done( function (response){ 
            $("#incorrectCredentials").remove()
            console.log(response);
            if(response==false){
               
                $("#usernamelogin").after('<label id="incorrectCredentials" class="error" >Incorrect username or password</label>')

            }else{        
            location.href ="views/home.php";
            }
        })

    }    

})

