var newPassword 
var currentPassword
$("#changePassForm").validate()
$("#btn-changepass").click(function(){
    var data=[]
    data[0]="verifyPassword"
    data[1]=$("#currentPassword").val()
    data[2]=$("#newPassword").val()
    data[3]=$("#confirmPassword").val()
    if($("#changePassForm").valid()){ 
        $.ajax({
            type: 'post',
            url: '../lib/userController.php',
            data: { 'array': data},
            dataType: 'json',	
        }).done( function (response){
            $("#notMatchCurrent").remove()

            if(response==false){
                $("#notMatchCurrent").remove()
                $("#currentPassword").after('<label id="notMatchCurrent" class="error" for="exampleInputEmail1">Not match.</label>')             
            }else{              
                currentPassword=true
                if(currentPassword && newPassword){
                    let data =[]
                    data[0]="changePassword"
                    data[1]=$("#currentPassword").val()
                    data[2]=$("#newPassword").val()               
                    $.ajax({
                        type: 'post',
                        url: '../lib/userController.php',
                        data: { 'array': data},
                        dataType: 'json',	
                    }).done( function (response){
                        alert("Change success");
                        $("#changePassForm").trigger("reset")
                    }) 
                }
                
            }         
        })           
    }   
})
$("#changePassForm").submit(function(e){
    e.preventDefault()
})
$("#confirmPassword").on("keyup",function()  {
    // Validate lowercase letters
    if($("#changePassForm").valid()){
        if($("#newPassword").val() == $("#confirmPassword").val()) {
            $("#notMatch").remove()
            newPassword =true
        } else {
            $("#notMatch").remove()
            $("#confirmPassword").after('<label id="notMatch" class="error" for="exampleInputEmail1">Not match.</label>')
            newPassword =false
        }
    }
})

