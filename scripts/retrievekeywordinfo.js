/* authored by Hem Sharma Acharya[hemtros@gmail.com]*/

$(document).ready(function(){
  
/* to ensure progressbar dont show up at page load */
    $('#progressbar').hide();
   $('#monpage_monwordstable').on('click','li',function(e){

      var keyword=$(this).html();
       $.ajax({
    			url: "http://majoropinionmining.appspot.com/GetData",
                type: "get",
    			data: {q: keyword},
    			dataType: "json",
                success: function(info){
                  var positive=0;
                  var negative=0;
                  var neutral=0;
                  var nob=info.length;
                  for(var i=0;i<nob;i++){
                      if(info[i]['label']=='positive'){
                          positive += 1 ;
                      }
                      else if(info[i]['label']=='negative'){
                          negative += 1;
                      }
                      
                      else{
                          neutral += 1;
                      }
                  }
                    
                  var keywordsinfo = "";
                  keywordsinfo += "keyword: " + keyword + "<br />"
                  keywordsinfo += "Total times Data analysed and added: " + info.length + "<br />";
                  keywordsinfo += "Positive sentiment: " + positive + " times" + "<br />";
                  keywordsinfo += "Negative sentiment: " + negative + " times" + "<br />";
                  keywordsinfo += "Neutral sentiment: " + neutral + " times" + "<br />";
                  
                  var largest=positive;
                  console.log(largest);
                  if(negative>largest){largest=negative};
                  if(neutral>largest){largest=neutral};
                  var frequent= "" ;
                  if(largest==positive){
                      frequent='positive';
                    }
                
                    else if(largest==negative){
                        frequent='negative';
                    }
                  
                    else{
                            frequent='neutral';
                    }
                            
                   keywordsinfo += 'Overall sentiment: ' + '<strong>' + frequent + '</strong>';
                    //for pie chart
                                        var pieData = [
                        {
                            value: positive,
                            color:"#F38630",
                            title: 'positive'
                        },
                        {
                            value : negative,
                            color : "#E0E4CC",
                            title: 'negative'
                        },
                        {
                            value : neutral,
                            color : "#69D2E7",
                            title: 'neutral'
                        }			
                    ];
                         
                    var ctx = document.getElementById("piechart").getContext("2d");
	                var piechart = new Chart(ctx).Pie(pieData);
                    if($('#pielegend').html()==''){
                        legend(document.getElementById('pielegend'),pieData); 
                    }
                   $('.keywordsinfo').html(keywordsinfo);
                
                },
                error: function(err){
                    
                    $('.keywordsinfo').html('Failed to retrieve information due to network<br /> connectivity issue or other problem.')
                    console.log(err);
                }
});
      
});
    
}); 


$(document).ready(function(){

    $('#indexgo').on('click', function(){
        $('#progressbar').show();
        var keyword=$('#indexinput').val();
        if(keyword=='' || keyword==null)
        {
            $('#indexpage_showinfo').html('Enter a keyword first. e.g.apple');
            $('#progressbar').hide();
        }
        
        else{
         
       $.ajax({
    			url: "http://majoropinionmining.appspot.com/twitter",
                type: "get",
    			data: {q: keyword},
    			dataType: "json",
                success: function(info){
                  var nob=info.length;
                  if(nob==0){
    
                      $('#indexpage_showinfo').html('No post could be analysed');
                      $('#progressbar').hide();
                  }
                
                  else{
                        var keywordsinfo = "";
                        keywordsinfo +="Total post analysed: 15" + "<br />" 
                        keywordsinfo += 'positive: ' + info.summary.pos + "<br />";
                        keywordsinfo += 'Negative: ' + info.summary.neg + "<br />";
                        keywordsinfo += 'Neutral: ' + info.summary.neutral + "<br />";
                        keywordsinfo += "Label: " + '<strong>' + info.summary.label + '</strong>';
                       $('#indexpage_showinfo').html(keywordsinfo);
                      $('#progressbar').hide();
                      //keywordsinfo += info['summary']['pos'];
                        
                      
                  }

                },
                    
                    error: function(err){
                        
                        $('#indexpage_showinfo').html('Failed to retrieve information due to network<br /> connectivity issue or other problem.')
                        $('#progressbar').hide();
                        console.log(err);
                    }
    });//end ajax
        }
    
    });
       
//liupage keyword search

    $('#liugo').click(function(){
        
        $('#liuprogressbar').show();
        var keyword=$('#liuinput').val();
        if(keyword=='' || keyword==null)
        {
            $('#liupage_showinfo').html('Enter a keyword first. e.g.apple');
            $('#liuprogressbar').hide();
        }
        
        else{
            
       $.ajax({
    			url: "http://majoropinionmining.appspot.com/GetData",
                type: "get",
    			data: {q: keyword},
    			dataType: "json",
                success: function(info){
                  var positive=0;
                  var negative=0;
                  var neutral=0;
                  var nob=info.length;
                  if(info.length==0){
                    $('#liupage_showinfo').html('keyword is probably not started to monitor or not enough data has been gathered.');
                      $('#liuprogressbar').hide();
                  }

                  else{
                  for(var i=0;i<nob;i++){
                      if(info[i]['label']=='positive'){
                          positive += 1 ;
                      }
                      else if(info[i]['label']=='negative'){
                          negative += 1;
                      }
                      
                      else{
                          neutral += 1;
                      }
                  }
                    
                  var keywordsinfo = "";
                  keywordsinfo += "keyword: " + '<strong>' + keyword + '</strong>' + "<br />";
                  keywordsinfo += "Total times Data analysed and added: " + info.length + "<br />";
                  keywordsinfo += "Positive sentiment: " + positive + " times" + "<br />";
                  keywordsinfo += "Negative sentiment: " + negative + " times" + "<br />";
                  keywordsinfo += "Neutral sentiment: " + neutral + " times" + "<br />";
                  
                  var largest=positive;
                  console.log(largest);
                  if(negative>largest){largest=negative};
                  if(neutral>largest){largest=neutral};
                  var frequent= "" ;
                  if(largest==positive){
                      frequent='positive';
                    }
                
                    else if(largest==negative){
                        frequent='negative';
                    }
                  
                    else{
                            frequent='neutral';
                    }
                            
                   keywordsinfo += 'Overall sentiment: ' + '<strong style="font-size:1.5em;">' + frequent + '</strong>';         
                   $('#liupage_showinfo').html(keywordsinfo);
                      $('#liuprogressbar').hide();
                  }//end of else..checking if keyword is monitored or not
                
                },
           
                error: function(err){
                    
                    $('#liupage_showinfo').html('Failed to retrieve information due to network<br /> connectivity issue or other problem.');
                    $('#liuprogressbar').hide();
                    console.log(err);
                }
});
    }//end of else co. if that checks if no keyword is entered
    });
    
});

$(document).ready(function(){
 $('#indexinput').on("keydown",function(e){
                      return e.which !=32;
                      });
});

$(document).ready(function(){
 $('#liuinput').on("keydown",function(e){
                      return e.which !=32;
                      });
});


