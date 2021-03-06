<p class="dash_head header_info">
    receive note form
</p>

<div class="alert alert-info" style="margin: 10px 20px 30px 50px; width:80%;">  
    <i class="icon-exclamation-sign" style=""></i>
    <p>  In order to create an receive note for the current received item then please fill out the form above
    and do not leave any field empty before submitting</p>
</div> 

<div class="out_form">
    <p class="head6 tb-header-custom">Fill out the form below</p>
    <div  class=" proc_form">
        <form id="received_items" >
            <label>Item Name</label>
            <select id="item_det" name="itemName">
                <option selected>Select an item</option>
                <?php foreach ($items as $t): ?>
                    <option value="<?php echo $t->itemName; ?>" id="<?php echo $t->itemID; ?>"> <?php echo $t->itemName; ?> </option>
                <?php endforeach; ?>
            </select>
            <label>Description</label><input type="text" name="description" disabled="true"/>
            <label>Unit Price(Ksh.)</label><input type="text" name="price" disabled="true"/>
            <label>Quantity Received</label><input type="text" name="quantity_received"/>
            <label>Order Number</label><input type="text" name="order_number" style="float:left; margin-right: 2px;"/><p id="order_msg"></p>
            
            <label >Supplier</label>
            <select id="supplier_det" name="supplier_det" >
                <option selected>Select a supplier</option>
                <?php foreach ($supplier as $s): ?>
                    <option value="<?php echo $s->supplierName; ?>"> <?php echo $s->supplierName; ?> </option>
                <?php endforeach; ?>
            </select>
            <label>Date</label><input type="text" name="date" id="datepicker" disabled/> <br/>

            <div class="radio_box">

                <label for="status" class="checkbox"> <input type="radio" name="status" value="approved"/> Approve </label>&nbsp;&nbsp;

                <label for="status" class="checkbox"> <input type="radio" name="status" value="rejected"/> Reject</label>
                <p style="color:lightcoral"></p>
            </div>

            <div class="clear"></div>

            <button id="submit_receive_note" class="btn btn-small btn-success">Submit</button>

            <div id="alert_show_purch" class="alert alert-success hide" style="margin-top: 10px;">  

                <i class="icon-spinner icon-large icon-spin"></i> Submitting Data..
            </div>
        </form> 
    </div>
</div>

<!-------------------------------confirmation message details Modal Window--------------------------------------------->
      
       <div id="user_message" class="modal hide message" style="position: absolute; top: 150px; left: 850px;">
                     
        		<div class="modal-body">
                            
                         <div class="message_content" style="margin-bottom: 5px;"></div>
                            
		      </div>
                    <div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal" style="float: right;">OK</a>
                    </div>
        </div>
<!-------------------------------end confirmation message details Modal Window------------------------------------------>

<!-------------------------------error message Modal Window----------------------------------------------------------->
<div id="user_error_message" class="modal hide error_message" style="position: fixed; top: 165px; left: 850px;">
                     
        		<div class="modal-body">
                            
                         <div class="message_error_content" 
                              style="margin-bottom: 5px; background-color: #feb7ba; border-radius: 3px; padding: 4px;color: #cc0008;">
                             
                         </div>
                            
		      </div>
                    <div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal" style="float: right;">OK</a>
                    </div>
</div>
<!-------------------------------end of error message Modal Window-------------------------------------------------->


	