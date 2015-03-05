
  $(function() {
    $(window).scroll(function(){

        var testScroll = $(window).scrollTop(); 
        console.log("testing >>", testScroll);

        if(testScroll > 650){
          $("#nav").addClass("scrollin");
        } else{
          $("#nav").removeClass("scrollin");
        }

      });
      
    });
 