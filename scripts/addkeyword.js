var myflag;
$(document).ready(function(){
 $('#new_keyword').on("keydown",function(e){
                      return e.which !=32;
                      });
});
    

$(document).ready(function(){
    $('.addkeywordform').submit(function(e){
        var datasagar;
        e.preventDefault();
        datasagar = $(".addkeywordform").serializeArray();
        $.ajax({
            url: "http://localhost/backend/index.php/main/monitored_keyword",
            type: 'get',
            data: datasagar,
            dataType: 'json',
            success: function(info){
                var monitored_keywords=info['monitored_keyword'];
                var monitored_keywords_exploded=monitored_keywords.split(',');
                var entered_keywords=datasagar[0].value;
                
                var entered_keywords_wlc;
                
                if(entered_keywords.indexOf(',') === -1)
                {
                  //alert("no comma found."); no comma means only one word without trailing comma
                    if($.inArray(entered_keywords,monitored_keywords_exploded)>-1){
                        $('#showinfo').html('keyword ' + entered_keywords + ' is already set to monitor');                  
                    }
                    
                    else{
                        myflag=0;
                        set_monitored_keyword(datasagar);
                    }
                }
                
                else{
                    //comma chha vane,euta keyword ra comma or multiple keywords with or without                        //trailing comma
                    var lastchar=entered_keywords.slice(-1);
                    if(lastchar==','){
                        entered_keywords_wlc=entered_keywords.slice(0,-1);
                        var entered_keywords_exploded=entered_keywords_wlc.split(',');
                        if(entered_keywords_exploded.length==1){
                              var json={username:$('#username').val(),
                              enpassword: $('#enpassword').val(),
                              new_keyword: entered_keywords_wlc};
                             myflag=0;
                             set_monitored_keyword(json);
                        }
                        else{
                        find_duplicates(entered_keywords_exploded,monitored_keywords_exploded);
                            }
                       
                        }
                    
                    else{
                        var entered_keywords_exploded=entered_keywords.split(',');
                        find_duplicates(entered_keywords_exploded,monitored_keywords_exploded);
                        }
                    
                }
                
            },
            error: function(error){
                console.log(error);
            }
        });
        
         function find_duplicates(entered_keywords_exploded,monitored_keywords_exploded){
                       
                        var already_set_keywords=[];
                        var to_set_keywords=[];
                        var uniques=entered_keywords_exploded.unique();
                       // console.log(entered_keywords_exploded);
             
                        for(var i=0;i<uniques.length;i++){
                var index = $.inArray(uniques[i],monitored_keywords_exploded); 
                            
                            if(index>-1){ 
                                        already_set_keywords.push(uniques[i]);
                                    }
                            
                            else{
                                to_set_keywords.push(uniques[i]);
                            }
                        }
                        if(already_set_keywords.length>0){
                            if(already_set_keywords.length==1){
                        $('#showinfo').html("keyword " + already_set_keywords.join(',') + " is already set to monitor" );
                       // console.log("keywords " + already_set_keywords.join(',') + " are already set to monitor");
                          myflag=1;
                            }
                            else{
                                 $('#showinfo').html("keywords " + already_set_keywords.join(',') + " are already set to monitor" );
                        //console.log("keywords " + already_set_keywords.join(',') + " are already set to monitor");
                          myflag=1;
                            }
                            
                        }
                        if(to_set_keywords.length>0){
            var entered_keywords_exploded_wlc=to_set_keywords.join(',');
                        var json={username:$('#username').val(),
                              enpassword: $('#enpassword').val(),
                              new_keyword: entered_keywords_exploded_wlc};
                            set_monitored_keyword(json,to_set_keywords);
                        }
             }
        
        function set_monitored_keyword(datasagar,words){
            if(words==undefined){
                console.log('hey its undefined');
            }
            else{
            console.log(words);
            console.log(words.length);
            }
        $.ajax({
            url: "http://localhost/backend/index.php/main/set_monitored_keyword",
            type:'get',
            data: datasagar,
            dataType:'json',
            success: function(info){
                if(myflag==0){
                    $('#showinfo').html(info.success);
                }
                else{
                    $("#showinfo").append('<br />' + info.success);
                }
              
            },
            
            error: function(error){
                console.log(error);
            }
        });
            
        }  //end of set_monitored_keyword
        
    });
    
});
