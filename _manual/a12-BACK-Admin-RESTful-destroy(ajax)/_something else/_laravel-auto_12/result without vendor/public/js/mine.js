$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})


var BaseRecord=(function() {

return {

selectCountry: function(country_id, url){
   var ajaxSetting={
      method: 'get',
      //url: '/',
      url: url,
      data: {
         country: country_id,
      },
      success: function(data){
         $('#pannel').html(data.table);
         $('.listbuttonremove').click(function(){
            BaseRecord.destroy($(this).attr('href'));
            return false;
         });         
      },
   };
   $.ajax(ajaxSetting);
},

destroy: function(url){
   var ajaxSetting={
      method: 'delete',
      url: url,
      //data: {
      //   type: type_id, 
      //},
      success: function(data) {
         //alert(data); //ПОКА БЕЗ ajax-ОБНОВЛЕНИЯ СТРАНИЦЫ
         BaseRecord.selectCountry(0, '/dashboard')  
      },
   };
   $.ajax(ajaxSetting);
},

}

})();