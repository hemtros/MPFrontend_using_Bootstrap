

$(document).ready(function(){
    var datasagar=$('#addkeyword_hiddenform').serializeArray();
$('#startmonitoring').click(function(){
    
   
   
    $('#showinfo1').html('');
     $.ajax({
    			url: "http://localhost/backend/index.php/main/monitored_keyword",
                type: "get",
    			data: datasagar,
    			dataType: "json",
                success: function(info){
                    if(info['monitored_keyword']=='' || info['monitored_keyword']==null){
                        $('#showinfo1').html('You have not set any keyword yet');
                    }
                    
                    else{
                        var monwordstext=info['monitored_keyword'];
                        if(monwordstext.indexOf(',')>-1){
                            var monwords=info['monitored_keyword'].split(',');
                            var nowords=monwords.length;
                            
                             
                               for(var v=0;v<nowords;v++) {
                                   $.ajax({
                                       url: "http://majoropinionmining.appspot.com/monitor",
                                       data: {operation: 'add',word: monwords[v] },
                                       type: "post",
                                       dataType: "json",
                                       success: function(suc){
                                          
                                           if(suc['success']){
                                                $('#showinfo1').append(suc['success'] + '<br />');
                                               
                                              
                                           }
                                           
                                           else{
                                               
                                             $('#showinfo1').append(suc['error'] + '<br />');
                                               
                                             
                                           }
                                        
                                           
                                       },
                                       error: function(er){
                                           console.log(er);
                                       }
                                   });
                            }//for loop ends
                            
          }//comma checking if ends
                        else{
                             $.ajax({
                                       url: "http://majoropinionmining.appspot.com/monitor",
                                       data: {operation: 'add',word: monwordstext },
                                       type: "post",
                                       dataType: "json",
                                       success: function(suc){
                                           if(suc['success']){
                                                                                                                                                    $('#showinfo1').html(suc['success']);
                                           }
                                           else{
                                               $('#showinfo1').html(suc['error']);
                                           }
                                       },
                                       error: function(err){
                                           console.log(err);
                                       }
                        });
                        
                    }
                 }
                },  //success ends
                error: function(erra){
                    console.log(erra);
                }
                    
            }); //main ajax
         
     });
    
});
