

    $(function () {

           $('.tooltip').hover(function () {

           $nomi = $(this).attr("title");

            if($nomi === 'Qarshi shahri'){
              $("#tooltip").show().text($nomi).css();
            }
            $("#tooltip").show().text($nomi + ' tumani').css();


           },
           function () {

             $("#tooltip").hide();
            }


           );

       });

       $(document).on('mousemove', function(e){

        $('#tooltip').css({
          left:  e.pageX,
          top:   e.pageY - 50
        });

      });
