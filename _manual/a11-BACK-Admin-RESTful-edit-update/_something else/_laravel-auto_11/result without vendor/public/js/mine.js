$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})


var BaseRecord=(function() {

return {

selectCountry: function(country_id){
   var ajaxSetting={
      method: 'get',
      url: '/',
      data: {
         country: country_id,
      },
      success: function(data){
         $('#pannel').html(data.table);
      },
   };
   $.ajax(ajaxSetting);
},

}

})();