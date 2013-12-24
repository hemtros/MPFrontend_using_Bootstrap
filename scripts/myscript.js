
$(document).ready(function() {
 var datasagar;  
 
$('.register').submit(function(e) {
        e.preventDefault();
     if($('#password').val()!=$('#passwordagain').val()){
        alert("passwords don't match");
     }
    
    else{
    
    datasagar = $(".register").serializeArray();
    $.ajax({
    			url: "http://localhost/backend/index.php/main/registration",
                type: "get",
    			data: datasagar,
    			dataType: "json",
                success: function(info){
                    
                 if(info.success){
//                    var ccodebox="";
//
//ccodebox += "<div class=\"ccodediv\">";
//ccodebox += "<form class=\"confirmation\">";
//                     
//ccodebox += "<div class=\"input-group\">";
//ccodebox += "<input type=\"text\" id=\"ccodeinput\" name=\"validation_code\" class=\"form-control\" placeholder=\"Enter validation code \"\/> ";
//ccodebox += "<span class=\"input-group-btn\">";
//ccodebox += "<button class=\"btn btn-default\" type=\"submit\">Submit<\/button>";
//ccodebox += "<\/span>";
//ccodebox += "<\/div>";
//
//ccodebox += "<\/form>";
//ccodebox += "<\/div>";

//                     $('.content').html(ccodebox);
                     $('.content').html(info.success + 'click login to login');
                     console.log(datasagar);
                 }
                
                else{
                    $('.content').append("<p class=\"regerror\">" + info.error + "</p>");
                }
                    
                
                },
                error: function(e){ 
                    console.log(e);
                }
    });
    }//end of else
    });
    
});

