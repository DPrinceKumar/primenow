
// // alert("working ");
// jQuery('#frm').submit(function (e) {
//     e.preventDefault();
//     jQuery('.field_error').html('');
//     jQuery.ajax( 
//     {
//         url:'signup_process',
//         data:jQuery('#frm').serialize(),
//         type:'post',
//         success:function(result)
//         {
//                 if(result.status=="error"){
//                     jQuery.each(result.error,function(key,val){
//                         jQuery('#'+key+'_error').html(val[0]);
//                     });
//                 }
//                 if(result.status=="success"){
//                     jQuery('#submitup')[0].reset();
//                     jQuery('#done').html(result.status);
//         }
//     }
//     });
//     });

//     jQuery('#frmlogin').submit(function(e){
//         jQuery('#login_msg').html('');
//         e.preventDefault();
//         jQuery('.field_error').html('');
//         jQuery.ajax( 
//         {
//             url:'login_process',
//             data:jQuery('#frmlogin').serialize(),
//             type:'post',
//             success:function(result)
//             {
//                     if(result.status=="error"){
                        
//                         jQuery('#login_msg').html(result.msg);
//                     }
//                     if(result.status=="success"){
//                         window.location.href="news";
//             }
//         }
//         });
//         });