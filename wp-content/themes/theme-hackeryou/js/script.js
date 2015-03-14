
  $(function() {

    // Sticky nav function
if ($("body").hasClass("home")){

   $("#nav").removeClass("notFront");

  $("#nav").addClass("navigation");

   $(window).scroll(function(){

        var testScroll = $(window).scrollTop(); 
        // console.log("testing >>", testScroll);

        if(testScroll > $(".viewHeight").height()){
          // $("#nav").fadeIn(2000);
          $("#nav").addClass("scrollin").removeClass("navigation");
          $(".logo").css("float", "left");
          console.log('a');
        } else{
          $("#nav").removeClass("scrollin");
           $("#nav").addClass("navigation");
          $(".logo").css("float", "center");
          console.log('b');
        }

      });
  }

    // remove inline styles from image on head page

    $('.attachment-full').removeAttr('height width');
      
    });
 