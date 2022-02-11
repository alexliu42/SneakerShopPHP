jQuery(document).ready(function() {
    
    jQuery.post("php/shoes.php",function(data,status){
        jQuery('#shoes').append('<option>'+ data +'</option>');    
        
     });

});



jQuery(document).on('input','#shoes', function () {
    jQuery.post("php/size.php",
    {
      shoes: document.getElementById("shoes").value
    },
    function(data,status){

        try {
            data = JSON.parse(data);
        } catch(ex){
            $( "#available" ).remove();
            $( "#available1" ).remove();
            $( "#availablesize" ).remove();
            $( "#availableprice" ).remove();
            $( "br:nth-child(20),br:nth-child(21)" ).remove();
            
        }        
        
        if(!data.length){
            if(document.getElementById("available")==null){
                jQuery( "#shoes" ).after( "<br><br><label id='available' >Available Size: </label><p id='availablesize'>" + data.Size.replace(/["']/g, "")+ "</p><label id='available1'>Price: </label><p id='availableprice'>" + data.Price.replace(/["']/g, "")+"</p>");
            }
            else{
                document.getElementById("availablesize").innerText=  data.Size.replace(/["']/g, "");
                document.getElementById("availableprice").innerText=  data.Price.replace(/["']/g, "");
            }
        }               
       
    });
});



jQuery(document).on('input','#shoes1', function () {
    jQuery.post("php/size.php",
    {
      shoes: document.getElementById("shoes1").value
    },
    function(data,status){
        try {
            data = JSON.parse(data);
        } catch(ex){
            $( "#available2" ).remove();
            $( "#available3" ).remove();
            $( "#availablesize1" ).remove();
            $( "#availableprice1" ).remove();
            $( "br:nth-child(30),br:nth-child(31)" ).remove();
            
        }        
        
        if(!data.length){
            if(document.getElementById("available2")==null){
                jQuery( "#shoes1" ).after( "<br><br><label id='available2' >Available Size: </label><p id='availablesize1'>" + data.Size.replace(/["']/g, "")+ "</p><label id='available3'>Price: </label><p id='availableprice1'>" + data.Price.replace(/["']/g, "")+"</p>");
            }
            else{
                document.getElementById("availablesize1").innerText=  data.Size.replace(/["']/g, "");
                document.getElementById("availableprice1").innerText=  data.Price.replace(/["']/g, "");
            }
        }               
       
    });
});


jQuery(document).on('input','#shoes2', function () {
    jQuery.post("php/size.php",
    {
      shoes: document.getElementById("shoes2").value
    },
    function(data,status){
        try {
            data = JSON.parse(data);
        } catch(ex){
            $( "#available4" ).remove();
            $( "#available5" ).remove();
            $( "#availablesize2" ).remove();
            $( "#availableprice2" ).remove();
            $( "br:nth-child(40),br:nth-child(41)" ).remove();
            
        }        
        
        if(!data.length){
            if(document.getElementById("available4")==null){
                jQuery( "#shoes2" ).after( "<br><br><label id='available4' >Available Size: </label><p id='availablesize2'>" + data.Size.replace(/["']/g, "")+ "</p><label id='available5'>Price: </label><p id='availableprice2'>" + data.Price.replace(/["']/g, "")+"</p>");
            }
            else{
                document.getElementById("availablesize2").innerText=  data.Size.replace(/["']/g, "");
                document.getElementById("availableprice2").innerText=  data.Price.replace(/["']/g, "");
            }
        }               
       
    });
});



count = 1;

jQuery(document).on('click','button', function () {
    if (count==3){
        $( "button" ).before("<p>Maximum 3 orders per customer!</p>");
    }
    else{
        jQuery.post("php/add.php",
        {
            count: count
        },
        function(data,status){
            $( "button" ).before(data).ready(function() {
                jQuery.post("php/shoes.php",function(data,status){
                    jQuery('#shoes'+count).append('<option>'+ data +'</option>');    
                    count++;
                });
            });     
        });
    }
    
});
