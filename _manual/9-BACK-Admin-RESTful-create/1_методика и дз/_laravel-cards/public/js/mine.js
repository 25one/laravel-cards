﻿$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})

var BaseRecord=(function() {

return {

typeSelect: function(type_id){
   var ajaxSetting={
      method: 'get',
      url: './',
      data: {
         type: type_id,
      },
      success: function(data) {
         //alert(data.table);
         $('#pannel').html(data.table);
      },
      error: function(data){
         alert(data.responseText);
      },
   };
   $.ajax(ajaxSetting);
},

}

})();