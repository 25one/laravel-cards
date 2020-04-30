$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})


var BaseRecord=(function() {

return {

typeSelect: function(type_id, url, errorAjax){
   if(type_id==0) type_id=[1,2,3]; else type_id=[type_id];
   var ajaxSetting={
      method: 'get',
      url: url,
      data: {
         type: type_id,
      },
      success: function(data){
         $('#pannel').html(data.table);
      },
      error: function(data){
         swal({
            title: errorAjax,
            type: 'warning'
         })
      },
   };
   $.ajax(ajaxSetting);
},

}

})();