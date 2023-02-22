$(document).ready(function(){

 

    $("#cat").on('change',function(){

      var cat_id = $(this).val();

      $.ajax({
        method: "POST",

      url: "scholarship.php",

      // type: "POST",

      data: {

      cat_id: cat_id

      },
      datatype:"html",

      // cache: false,

      success: function(data){     

        $("#sc").html(data);

        // $('#city').html('<option value="">Select State First</option>'); 

      }

      });    

    }); 
     });     