$(document).ready(function(){
    var datasagar=$('#addkeyword_hiddenform').serializeArray();
$('#startmonitoring').click(function(){
     $.ajax({
    			url: "http://localhost/backend/index.php/main/monitored_keyword",
                type: "get",
    			data: datasagar,
    			dataType: "json",
                success: function(info){
                    if(info['monitored_keyword']==''){
                        $('#showinfo1').html('You have not set any keyword yet');
                    }
                    else{
                        var monwordstext=info['monitored_keyword'];
                        if(monwordstext.indexOf(',')>-1){
                            var monwords=info['monitored_keyword'].split(',');
                            var nowords=monwords.length;
                               for(var i=0;i<nowords;i++) {
                                
                                   $.ajax({
                                       url: "http://majoropinionmining.appspot.com/monitor",
                                       data: {operation: 'add',word: monwords[i] },
                                       type: "post",
                                       dataType: "json",
                                       success: function(suc){
                                           if(suc['success']){
                                               if(i==0){
                                                $('#showinfo1').html(suc['success']);
                                               }
                                               else{
                                                                                                                                                    $('#showinfo1').append('<br />' + suc['success']);
                                               }
                                           }
                                           
                                           else{
                                                if(i==0){
                                                $('#showinfo1').html(suc['error']);
                                               }
                                               else{
                                                                                                                                                    $('#showinfo1').append('<br />' + suc['error']);
                                               }
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
                                       data: monwordstext,
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
