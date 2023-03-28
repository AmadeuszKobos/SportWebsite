$(document).ready(function(){
    $('#show').on('click', function(){
       var passInput=$("#passLog");
       if(passInput.attr('type')==='password')
         {
           passInput.attr('type','text');
       }else{
          passInput.attr('type','password');
       }
   })
 })