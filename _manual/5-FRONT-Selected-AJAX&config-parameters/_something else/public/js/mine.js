$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})


var BaseRecord=(function() {

//alert('hi');

return {

typeSelect: function(type_id){
   var ajaxSetting={
      method: 'get',
      url: '/',
      data: {
         type: type_id,	
      },
      success: function(data) {
         $('#pannel').html(data.table);	
      },
   };
   $.ajax(ajaxSetting);
},

}

})();