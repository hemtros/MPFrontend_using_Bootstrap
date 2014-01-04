$(document).ready(function(){
    
      var datasagar=$('#bargraph_hiddenform').serializeArray();
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
                    
                    $('#bargraph_monwordstable').html(montable);
                                         
                },
                error: function(err){
                    console.log(err);
                }
     });
});

$(document).ready(function(){
       $('#bargraph_monwordstable').on('click','li',function(e){

      var keyword=$(this).html();
       $.ajax({
    			url: "http://majoropinionmining.appspot.com/GetData",
                type: "get",
    			data: {q: keyword},
    			dataType: "json",
                success: function(info){
                    
                   $('#bargraphDiv').addClass('graphBody');
                   
                    if(!$('*').hasClass('topImage')){
                   $('#bargraphDiv').append("<a href='#'><img src='images/toTop_32x32.png' class='topImage' /></a>");
                    }
                    $('#bargraphDiv').append("<canvas id='bargraph' width='5000' height='600'></canvas>")
                 location.href='#bargraphDiv';
                    var no=info.length;
                    var bargraphData
                    var labels=[];
                    var pos=[];
                    var neg=[];
                    var neu=[];
                    
                    for(var i=0;i<no;i++)
                    {
                            labels[i] = info[i].time;
                            pos[i] =  info[i].pos;
                            neg[i] = info[i].neg;
                            neu[i] = info[i].neutral;
                    }
                    
                    	var bargraphData = {
                            labels : labels,
                            scaleLineWidth: 1,
                            datasets : [
                                {
                                    fillColor : "#4DA944",
                                    strokeColor : "rgba(220,220,220,1)",
                                    data : pos
                                },
                                {
                                    fillColor : "#3880AA",
                                    strokeColor : "rgba(151,187,205,1)",
                                    data : neg
                                },
                                {
                                    fillColor : "#cad4d9",
                                    strokeColor : "rgba(151,187,205,1)",
                                    data : neu
                                }
                            ]
                        }
                        
                        var ctx = document.getElementById("bargraph").getContext("2d");
	                    var myNewChart = new Chart(ctx).Bar(bargraphData);
                        
                        
                   
             
                },
                error: function(err){
                    console.log(err);
                }
       });
    });
});





