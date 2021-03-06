/* authored by Hem Sharma Acharya[hemtros@gmail.com]*/

$(document).ready(function(){
    
      var datasagar=$('#linegraph_hiddenform').serializeArray();
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
                    
                    $('#linegraph_monwordstable').html(montable);
                                         
                },
                error: function(err){
                    console.log(err);
                }
     });
});

$(document).ready(function(){
       $('#linegraph_monwordstable').on('click','li',function(e){
        
           $('.graph_showerror').html('');
      if($('#graphmainDiv').hasClass('graphBody')){
          $('#graphmainDiv').removeClass('graphBody');
          $('#legendandimageDiv').html('');
          $('#linegraphDiv').html('');
          $('#linelegend').html('');
      }
      var keyword=$(this).html();
       $.ajax({
    			url: "http://majoropinionmining.appspot.com/GetData",
                type: "get",
    			data: {q: keyword},
    			dataType: "json",
                success: function(info){

                    if(info.length==0){
                        $('.graph_showerror').html('Not enough data to plot linegraph');
                        location.href='#';
                    }
                    
                    else{
                        
                    $('#graphmainDiv').addClass('graphBody');
                     $('#legendandimageDiv').append('keyword: ' + keyword)

                    if(!$('*').hasClass('topImage')){
                   $("#legendandimageDiv").append("<a href='#'><img src='images/toTop_32x32.png' class='topImage' /></a>");
                    }
                    $("#legendandimageDiv").append('<div id="linelegend"></div>');
                    $('#linegraphDiv').append("<canvas id='linegraph' width='5000' height='560'></canvas>");
                    location.href="#graphmainDiv";
               
                    var no=info.length;
                    var linegraphData
                    var labels=[];
                    var pos=[];
                    var neg=[];
                    var neu=[];
                    
                    for(var i=0;i<no;i++)
                    {       
//                            var etime=info[i].time;
//                            var date = new Date(etime*1000);
//                            var year=date.getFullYear();
//                            var month=date.getMonth();
//                            var day=date.getDay();
//                            var hour=date.getHours();
//                            var minute=date.getMinutes();
//                            var second=date.getSeconds();
//         var time= year + "/" + month + "/" + day + "/" + hour + ":" + minute + ":" + second;
                            labels[i] = info[i].time;
                            pos[i] =  info[i].pos;
                            neg[i] = info[i].neg;
                            neu[i] = info[i].neutral;
                    }
                    
                    	var lineGraphData = {
                            labels : labels,
                            datasets : [
                                {
                                    fillColor : "#4DA944",
                                    strokeColor : "rgba(220,220,220,1)",
                                    pointColor : "rgba(220,220,220,1)",
			                        pointStrokeColor : "#fff",
                                    data : pos,
                                    title: 'positive'
                                },
                                {
                                    fillColor : "#3880AA",
                                    strokeColor : "rgba(151,187,205,1)",
                                    pointColor : "rgba(220,220,220,1)",
			                         pointStrokeColor : "#fff",
                                    data : neg,
                                    title : 'Negative'
                                },
                                {
                                    fillColor : "#cad4d9",
                                    strokeColor : "rgba(151,187,205,1)",
                                    pointColor : "rgba(220,220,220,1)",
			                        pointStrokeColor : "#fff",
                                    data : neu,
                                    title: 'Neutral'
                                }
                            ]
                        }
                        
                        var ctx = document.getElementById("linegraph").getContext("2d");
	                    var myNewChart = new Chart(ctx).Line(lineGraphData);
                        legend(document.getElementById('linelegend'),lineGraphData);
                        
                }
             
                },
                error: function(err){
                    console.log(err);
                     $('.graph_showerror').html("Couldn't plot graph due to connectivity issue or other problems");
                     location.href='#';
                }
       });
    });
});





