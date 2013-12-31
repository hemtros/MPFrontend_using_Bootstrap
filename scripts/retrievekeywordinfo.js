$(document).ready(function(){
    
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
                    
                  var keywordsinfo = "<br /><br /><br /><br />";
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
                   $('.keywordsinfo').html(keywordsinfo);
                
                },
                error: function(err){
                    console.log(err);
                }
});
      
});
    
});