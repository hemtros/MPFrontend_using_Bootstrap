/* authored by Hem Sharma Acharya[hemtros@gmail.com]*/


$(document).ready(function(){
    
function remove(event)   {
   var keyword=this.id;
        var datasagar1=event.data;
        datasagar1['new_keyword']=keyword;
        console.log(datasagar1);
        $.ajax({
            url: "http://localhost/backend/index.php/main/unset_monitored_keyword",
            type: "get",
            data: datasagar1,
            dataType: "json",
            success: function(info){
                
                    if(info['success']){
                   // alert(info['success']);
                        location.reload();
                    
                }
                else{
                    alert(info['error']);
                }
            },
            error: function(err){
                console.log(err);
            }
    });
        
    
}
     var datasagar=$('#loggedinuser_hiddenform').serializeArray();
     $.ajax({
    			url: "http://localhost/backend/index.php/main/monitored_keyword",
                type: "get",
    			data: datasagar,
    			dataType: "json",
                success: function(info){
                  
                    var monWordsText=info['monitored_keyword'];
                    var monWords=monWordsText.split(",");
                    var montable="";
                    var monWordsNo=monWords.length;
                    
                    for(var i=0;i<monWordsNo;i++){
                     montable += "<li class='keyrows'><div class='row'>";
                     montable +="<div class='col-xs-9'>" + monWords[i] + "</div>";
 var img_tag="<div class='col-xs-3'> <img src='images/minus-26.png' class='minus-btn' id='" + monWords[i] + "' /></div></div>";
                     montable += img_tag;
                     montable += "</li>";
                    }
                    
                    $('.monwordstable').html(montable);
                    $('.liusearch').show();
                    $('#liuinput').focus();
                    $('.minus-btn').bind('click',{username: $('#liupusername').val(), enpassword : $('#liuppassword').val()},remove);
                     $('#liuinput').autocomplete({
                        source: monWords
                    });

                },
                error: function(err){
                    console.log(err);
                }
     });
            
                   
    
    
});

$(document).ready(function(){
     
        
      var datasagar=$('#loggedinusermonitor_hiddenform').serializeArray();
     $.ajax({
    			url: "http://localhost/backend/index.php/main/monitored_keyword",
                type: "get",
    			data: datasagar,
    			dataType: "json",
                success: function(info){
                  
                    var monWordsText=info['monitored_keyword'];
                    var monWords=monWordsText.split(",");
                    var montable="";
                    var monWordsNo=monWords.length;
                    
                    for(var i=0;i<monWordsNo;i++){
                     montable += "<li class='keyrows'>";
                     montable += monWords[i];
                     montable += "</li>";
                    }
                    $('.monwordstable').html(montable);

                },
                error: function(err){
                    console.log(err);
                }
     });
    
    
    
});





  
   








  
   


