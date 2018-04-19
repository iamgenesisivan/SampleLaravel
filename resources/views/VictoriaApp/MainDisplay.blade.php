<!DOCTYPE html>
<html>
<head>
	<title>Victoria Court - Main Display</title>
	@include('VictoriaApp.header')
</head>
<body>
		<h2 class="panel-ivan">Victoria Court Room</h2>

	<div class="row">
		<div class="panel panel-default center" >
			<div class="col-lg-7 panel-custom panel-ivan">
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">	
					<button class="btn btn-default room" id="fiftyshades">Fifty Shades</button>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">	
					<button class="btn btn-default room" id="sevenstar">7th Star</button>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">	
					<button class="btn btn-default room" id="alure">Alure</button>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">	
					<button class="btn btn-default room" id="amanlate">Amanlate</button>
				</div>

				<div class="col-lg-12 button-choices" >
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">	
						<button class="btn choices-green" id="clean">Clean</button>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">	
						<button class="btn choices-blue" id="dirty">Dirty</button>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">	
						<button class="btn choices-yellow" id="cleaning">Cleaning</button>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">	
						<button class="btn choices-red" id="occupied">Occupied</button>
					</div>
				</div>
			</div>
			<div class="col-lg-4 ">
				<div class="panel panel-custom">
					 <div class="panel-h"><center><i class="fa fa-print fa-lg"></i> Receipt</center></div>
					 <div class="table-responsive">
					 	<table style="width: 100%;" >
                              <thead>
                                 <tr>
                                    <th style="width: 25%;">Rooms:</th>
                                    <th style="width: 25%;">Price</th>
                                    <th style="width: 25%;"></th>
                                 </tr>
                              </thead>
                              <tbody id="receipt">
                                <!-- <td>Coke</td>
                                <td>20.00</td> -->
                              </tbody>
                      	</table>
					 </div>
					 <hr/>
                      <div class="table-responsive">
                        <table style="width: 100%;">
                          <thead>
                          </thead>
                          <tbody>
                             <tr>
                                <th style="width: 150px;">Total:</th>
                                <td><input type="number" style="width: 100%;" id="grdtot" class="textbox form-control" name="" readonly></td>
                             </tr>
                          </tbody>
                        </table>
                      </div>
                   	 <hr/>	
                   	 <div align="center">
                   	 	<button class="btn btn-success" id="checkoutThis" data-toggle="modal" data-target="#checkout">Checkout</button>
                   	 </div>
				</div>
			</div>
		</div>
	</div>


<!-- Modal -->
<div class="modal fade" id="checkout" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button"  class="close closeHere" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Checkout</h4>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table style="width: 100%;">
              <thead>
              </thead>
              <tbody>
                 <tr>
                    <th style="width: 150px;">Total:</th>
                    <td><input type="number" style="width: 100%;" id="modal-Price" class="textbox form-control" name=""  readonly></td>
                 </tr>
                 <tr>
                    <th style="width: 150px;">Amount:</th>
                    <td><input type="number" style="width: 100%;" id="modal-Tender" class="textbox form-control" name="" ></td>
                 </tr>
                 <tr>
                    <th style="width: 150px;">Change:</th>
                    <td><input type="number" style="width: 100%;" id="modal-Change" class="textbox form-control" name="" readonly=""></td>
                 </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button"  class="btn btn-default closeHere" data-dismiss="modal">Close</button>
          <button type="button" id="done" class="btn btn-success" data-dismiss="modal">Done</button>
        </div>
      </div>
      
    </div>
  </div>
	<script type="text/javascript">
	    $(document).ready(function() {
	    	//----Codes here
	    	var room;
			var arrayID=[];
	    	var amount;
	    	var fiftyshadesamount =0;
	    	var sevenstaramount =0;
	    	var alureamount =0;
	    	var amanlateamount =0;
	    	$('#fiftyshades').click(function(){
				   	room =1;	
	    	})
	    	$('#sevenstar').click(function(){
				   	room =2;	
	    	})
	    	$('#alure').click(function(){
				   	room =3;	
	    	})
	    	$('#amanlate').click(function(){
				   	room =4;	
	    	})

	    	$('#clean').click(function(){
			   switch (room){
			   	case 1: 
				   	 $('#fiftyshades').css('background-color', 'green');
				   	 $('#fiftys').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 1;
					 });
					 fiftyshadesamount =0;
				   	 break;
			   	case 2: 
			   		$('#sevenstar').css('background-color', 'green');
			   		$('#star').remove();
			   		arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 2;
					});
					sevenstaramount =0;
			   		break;
			   	case 3: 
			   		$('#alure').css('background-color', 'green');
			   		$('#alu').remove();
			   		arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 3;
					});
					alureamount =0;
			   		break;
			   	case 4: 
			   		$('#amanlate').css('background-color', 'green');
			   		$('#amalants').remove()
			   		arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 4;
					});
					amanlateamount =0;
			   		break;
			   }
			   amount = fiftyshadesamount+ sevenstaramount+ alureamount+amanlateamount;
			   $('#grdtot').val(amount.toString()); 
	    	})
	    	$('#dirty').click(function(){
			   switch (room){
			   	case 1: 
				   	 $('#fiftyshades').css('background-color', 'blue');
				   	 $('#fiftys').remove();
				   	 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 1;
					 });
					 fiftyshadesamount =0;
				   	 break;
			   	case 2: 
			   		$('#sevenstar').css('background-color', 'blue');
			   		$('#star').remove();
			   		arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 2;
					});
					sevenstaramount =0;
			   		break;
			   	case 3: 
			   		$('#alure').css('background-color', 'blue');
			   		$('#alu').remove();
			   		arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 3;
					});
					alureamount =0;
			   		break;
			   	case 4: 
			   		$('#amanlate').css('background-color', 'blue');
			   		$('#amalants').remove();
			   		arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 4;
					});
					amanlateamount =0;
			   		break;
			   }
			    amount = fiftyshadesamount+ sevenstaramount+ alureamount+amanlateamount;
			   $('#grdtot').val(amount.toString()); 
	    	})
	    	$('#cleaning').click(function(){
			   switch (room){
			   	case 1: 
				   	 $('#fiftyshades').css('background-color', 'yellow');
				   	 $('#fiftys').remove();
					 arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 1;
					 });
					 fiftyshadesamount =0;
				   	 break;
			   	case 2: 
			   		$('#sevenstar').css('background-color', 'yellow');
				   	$('#star').remove();
				   	arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 2;
					});
					sevenstaramount =0;
			   		break;
			   	case 3: 
			   		$('#alure').css('background-color', 'yellow');
				   	$('#alu').remove();
				   	arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 3;
					});
					alureamount =0;
			   		break;
			   	case 4: 
			   		$('#amanlate').css('background-color', 'yellow');
				   	$('#amalants').remove();
				   	arrayID = jQuery.grep(arrayID, function(value) {
					 	return value != 4;
					});
					amanlateamount =0;
			   		break;
			   }
			    amount = fiftyshadesamount+ sevenstaramount+ alureamount+amanlateamount;
			   $('#grdtot').val(amount.toString()); 
	    	})
	    	$('#occupied').click(function(){
			   switch (room){
			   	case 1: 
				   	 fiftyshadesamount =100;
				   	 $('#fiftyshades').css('background-color', 'red');
					if (jQuery.inArray(1, arrayID)!='-1') {
					} else {
						arrayID.push(1);
						$('#receipt').append('<tr id="fiftys"><td>FIFTY SHADES</td><td>100</td></tr>');
					}
				     break;
			   	case 2: 
				   	sevenstaramount =200;
			   		$('#sevenstar').css('background-color', 'red');
			   		if (jQuery.inArray(2, arrayID)!='-1') {
					} else {
						arrayID.push(2);
			   	 		$('#receipt').append('<tr id="star"><td>7th Star</td><td>200</td></tr>');
					}
			   		break;
			   	case 3: 
				   	alureamount =300;
			   		$('#alure').css('background-color', 'red');
			   		if (jQuery.inArray(3, arrayID)!='-1') {
					} else {
						arrayID.push(3);
			   	 		$('#receipt').append('<tr id="alu"><td>Alure</td><td>300</td></tr>');
					}
			   		break;
			   	case 4: 
				   	amanlateamount =400;
			   		$('#amanlate').css('background-color', 'red');
			   		if (jQuery.inArray(4, arrayID)!='-1') {
					} else {
						arrayID.push(4);
			   	 		$('#receipt').append('<tr id="amalants"><td>Amanlate</td><td>400</td></tr>');
					}
			   		break;
			   }
			   amount = fiftyshadesamount+ sevenstaramount+ alureamount+amanlateamount;
			   $('#grdtot').val(amount.toString()); 
	    	})


	    	$('#checkoutThis').click(function(){
	    		$('#modal-Price').val(amount.toString())
	    	})

	    	$('#modal-Tender').keyup(function(){
	    		var tender = $('#modal-Tender').val();
	    		var amount = $('#modal-Price').val();
	    		var total = tender - amount;
	    		$('#modal-Change').val(total.toString());
	    	})

	    	$('#done').click(function(){
	    		setTimeout(function(){
                   location.reload(); // then reload the page.(3)
	            }, 500);
	    	})

	    	$('.closeHere').click(function(){
	    		$('#modal-Tender').val("");
	    		$('#modal-Change').val("");
	    	})
	    });
</script>
</body>
</html>