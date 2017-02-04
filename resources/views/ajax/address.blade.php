<style type="text/css">
	#postcode_lookup{
    width: 100%;
    display: inline-block;}
	#postcode_lookup input#opc_input{width: 220px;float: left;}
	#postcode_lookup #opc_button{float: left;}
	#opc_dropdown{display: none;}
	#address-list{
    width: 480px;
    display: block;
    list-style-type: none;}
    #address-list li{
    width: 100%;
    border-bottom: 1px solid;
    padding: 2px; cursor: pointer;}
    #opc_error_message{
    display: inline-block;
    color: red;}

</style>
<div style="width:600px;">
	<div class="row">
		<div class="col-md-8">
			<label for="opc_input">Enter your postcode</label>
			<div id="postcode_lookup"></div>	
			<ul id="address-list"></ul>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function()
{
    jQuery('#postcode_lookup').getAddress({
                api_key: 'DpKDQRlLbEGcYDKU_J6rEw3270', 
                output_fields:{
                    line_1: '#address_line1',
                    line_2: '#address_line2',
                    line_3: '#line3',
                    post_town: '#city',
                    county: '#county',
                    postcode: '#postal_code'
                },
                input:'#opc_postal_code',
                input_label: 'Enter your Postcode',
                input_class: 'form-control boxed',
                button:'#opc_search_btn',
                button_label: 'Search',
                button_class: 'btn btn-primary',
                button_disabled_message: 'Fetching ...',
                //$dropdown:'#opc_address_list',
                dropdown_class: 'input-full main-input',
                dropdown_select_message: 'Select your address',
               // error_message_class: 'help-block'
                            onLookupSuccess: function(data){
                              //$('#opc_address_list').html('');
                              var postal_code=$("input#opc_input").val();
                              jQuery(data.Addresses).each(function(i,j){
                                var dataArray = j.split(',');
                                var cleanDataArray = dataArray.clean(false);
                                var text = cleanDataArray.join(',');
                                if(dataArray.length==4)
                                 $('<li/>', { onClick:"updateAddress('"+dataArray[1]+"','"+dataArray[2]+"','"+dataArray[3]+"','"+(postal_code)+"','"+(data.Latitude)+"','"+(data.Longitude)+"')",text: text}).appendTo('#address-list');
                             	else
                             	 $('<li/>', { onClick:"updateAddress('"+dataArray[0]+"','"+dataArray[1]+"','"+dataArray[2]+"','"+(postal_code)+"','"+(data.Latitude)+"','"+(data.Longitude)+"')",text: text}).appendTo('#address-list');	
                              });                              
                            },
                onLookupError: function(data){console.log(data)}
            });
  
  
});
function updateAddress(add1,city,county,postcode,Latitude,Longitude)
{
 console.log(add1,city,county,postcode,Latitude,Longitude);
 jQuery("#address_1").val(add1);
 jQuery("#address_2").val();
 jQuery("#city").val(city);
 jQuery("#county").val(county);
 jQuery("#postal_code").val(postcode);
 jQuery("#latitude").val(Latitude);
 jQuery("#longitude").val(Longitude);
}
</script>