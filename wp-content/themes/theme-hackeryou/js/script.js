
  $(function() {

    // Sticky nav function

    $(window).scroll(function(){

        var testScroll = $(window).scrollTop(); 
        // console.log("testing >>", testScroll);

        if(testScroll > 800){
          // $("#nav").fadeIn(2000);
          $("#nav").addClass("scrollin");
          $(".logo").css("float", "left");
          console.log('a');
        } else{
          $("#nav").removeClass("scrollin");
          $(".logo").css("float", "center");
          console.log('b');
        }

      });

    // remove inline styes from image on head page

    $('.attachment-full').removeAttr('height width');
      
    });
 