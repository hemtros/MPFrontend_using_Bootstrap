/* authored by Hem Sharma Acharya[hemtros@gmail.com]*/

$(document).ready(function() {
    $('#progressbar').hide();
    $('#liuprogressbar').hide();
    $('.liusearch').hide();
    
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

$(document).ready(function(){
    $('.year').html((new Date).getFullYear());
});

$(document).keypress(function(e){
   if(e.which==13) {
       $('#indexgo').focus();
       $('#indexgo').click();
   }
});

$(document).ready(function(){
   $('#indexinput') .focus();
});


$(document).ready(function(){
    $('#indexinput').on('keypress',function(e){
        $('.search').addClass('searchaftertype');
    });
});

//for liusers

$(document).keypress(function(e){
   if(e.which==13) {
       $('#liugo').focus();
       $('#liugo').click();
   }
});

$(document).ready(function(){
   $('#liuinput') .focus();
});


$(document).ready(function(){
    $('#liuinput').on('keypress',function(e){
        $('.liusearch').addClass('liusearchaftertype');
    });
});









