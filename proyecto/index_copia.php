<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>App.com</title>

<!-- Bootstrap 4 -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<!-- FontAwesome -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Sweet Alert -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

</head>
<body>

<div class="container-fluid">
  
<div class="row">

<div class="col-md-12">
  
<h1>Impresión</h1>

<button class="btn btn-primary btn-print" data-id=""><i class="fa fa-print"></i>  Imprimir</button>


</div>


</div>

</div>

<script>
  
$(document).on('click','.btn-print',function (){

//CAB
/*
$.getJSON('source.php',{},function(data){

cab  = data;

});
*/


swal({
  title: "Imprimir",
  text: "驴Estas seguro de imprimir el documento?",
  //type: "warning",
  //imageUrl:"img/print.png",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Si",
  cancelButtonText:"No",
  closeOnConfirm: false
},
function(){

 $.ajax({
 
   url:"http://localhost:8000/print/test.php",
   type:"GET",
   contentType:"application/json",
   crossDomanin:TRUE,
   dataType:"jsonp",
   data:{},
   beforeSend:function()
   {
  
    swal({

     title:"Imprimiendo",
     text : "No cierre la Ventana",
     //imageUrl:"img/print.png"

    });


   },
   success:function(){

    swal({

    title:"Buen Trabajo",
    text :"Documento Impreso",
    type :"success",
   // timer:2000

    });


   }

 });




});


});


</script>
</body>
</html>
