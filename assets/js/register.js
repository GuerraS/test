var validationPassword 

var validationUser
$("#createUser").validate()
$("#btn-create").click(()=>{
      
    console.log($("#createUser").valid(), validationPassword, validationUser);
   if($("#createUser").valid() && validationPassword==true && validationUser==true){
       
    let data=[]
    data[0]="insert"
    data[1]=$("#createUsername").val()
    data[2]=$("#registerPassword").val()

    $.ajax({
        type: 'post',
        url: 'lib/userController.php',
        data: { 'array': data},
        dataType: 'json',	
    }).done( function (response){
        alert("Successfully created")
        location.href ="index.php";
    })
   }
})
$("#createUser").submit((e)=>{
    e.preventDefault()
   
})

$("#confirmPassword").on("keyup",function()  {
    // Validate lowercase letters
    if($("#createUser").valid()){
        console.log("lol");
       
        if($("#registerPassword").val() == $("#confirmPassword").val()) {
            $("#notMatch").remove()
            validationPassword =true
        } else {
            $("#notMatch").remove()
            $("#confirmPassword").after('<label id="notMatch" class="error" for="exampleInputEmail1">Not match.</label>')
            validationPassword =false
        }
    }
})

$("#createUsername").on("keyup",function()  {
    let data=[]
    data[0]="verifyExist"
    data[1]=$("#createUsername").val()
    // Validate lowercase letters
    $.ajax({
		type: 'post',
		url: 'lib/userController.php',
		data: { 'array': data},
		dataType: 'json',	
	}).done( function (response){
        if(response){
            console.log("exist");
            $("#exist").remove()
            $("#createUsername").after('<label id="exist" class="error" for="exampleInputEmail1">Username alredy exist.</label>')
           
            validationUser =false
        }else{
            console.log("not exist");
            $("#exist").remove()
            validationUser =true
        }
    })  
})