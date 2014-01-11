/* authored by Hem Sharma Acharya[hemtros@gmail.com]*/

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
       
        $('.graph_showerror').html('');
      if($('#bargraphmainDiv').hasClass('graphBody')){
          $('#bargraphmainDiv').removeClass('graphBody');
          $('#barlegendandimageDiv').html('');
          $('#bargraphDiv').html('');
      }
      var keyword=$(this).html();
       $.ajax({
    			url: "http://majoropinionmining.appspot.com/GetData",
                type: "get",
    			data: {q: keyword},
    			dataType: "json",
                success: function(info){
                    
                    if(info.length==0){
                        $('.graph_showerror').html('Not enough data to plot bargraph');
                        location.href='#';
                    }
                    
                    else{
                        
                   $('#bargraphmainDiv').addClass('graphBody');
                   $('#barlegendandimageDiv').append('keyword: ' + keyword)
                    if(!$('*').hasClass('topImage')){
                   $('#barlegendandimageDiv').append("<a href='#'><img src='images/toTop_32x32.png' class='topImage' /></a>");
                    }
                    
                    $("#barlegendandimageDiv").append('<div id="barlegend"></div>');
                    $('#bargraphDiv').append("<canvas id='bargraph' width='5000' height='600'></canvas>");
                    
                 location.href='#bargraphmainDiv';
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
                                    data : pos,
                                    title : 'Positive'
                                    
                                },
                                {
                                    fillColor : "#3880AA",
                                    strokeColor : "rgba(151,187,205,1)",
                                    data : neg,
                                    title: 'Negative'
                                },
                                {
                                    fillColor : "#cad4d9",
                                    strokeColor : "rgba(151,187,205,1)",
                                    data : neu,
                                    title: 'Neutral'
                                }
                            ]
                        }
                        
                        var ctx = document.getElementById("bargraph").getContext("2d");
	                    var myNewChart = new Chart(ctx).Bar(bargraphData);
                        legend(document.getElementById('barlegend'),bargraphData);
                        
                    }
             
                },
                error: function(err){
                    console.log(err);
                }
       });
    });
});





