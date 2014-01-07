/* authored by Hem Sharma Acharya[hemtros@gmail.com]*/

$(document).ready(function(){
    
      var datasagar=$('#piechart_hiddenform').serializeArray();
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
                    
                    $('#piechart_monwordstable').html(montable);
                                         
                },
                error: function(err){
                    console.log(err);
                }
     });
});

$(document).ready(function(){
       $('#piechart_monwordstable').on('click','li',function(e){
      var keyword=$(this).html();
       $.ajax({
    			url: "http://majoropinionmining.appspot.com/GetData",
                type: "get",
    			data: {q: keyword},
    			dataType: "json",
                success: function(info){
                 

             
                },
                error: function(err){
                    console.log(err);
                }
       });
    });
});





