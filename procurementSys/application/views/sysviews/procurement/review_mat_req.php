<p class="dash_head header_info" >
    review material requisitions
</p>

<div id="edit">

    <div class="alert alert-info" style="margin: 10px 20px 30px 20px;">  
        <div><i class="icon-exclamation-sign"></i></div>
        <p>Review the following material requisitions by clicking on the " <i class="cus-book_open"></i> " button</p>
    </div> 

    <div class="table_header user tb-header-custom">
        <div>
            <p><span class="" type="button" id="refresh_user_table" title="refresh table"> <i class="icon-reorder"></i></span>Material Requisitions Waiting Approval</p>
        </div>

    </div>


    <div id="edit_ui" class="proc_content">
        <div class="datagrid_table">
          <?php $this->load->view('sysviews/procurement/review_mat_req_table'); ?>
        </div>
    </div>
</div>




<!-------------------------------Modal Window------------------------------------------------->

<div id="material" class="modal hide modalDim property">
    <div class="modal-header" style=" border-bottom: 0px;">
<!--                            <a class="close btn" data-dismiss="modal"><i class="icon-remove"></i></a>-->
        <h3>Material Requisition Details</h3>  
    </div>

    <div class="modal-body" id="">
        <table id="detailed_data" class="table table-bordered">

        </table>	

    </div>
    <div class="form-inline" style="margin-left: 30px;">
        <input type="radio" name="status" value="approved"/>
        <label for="status" class="checkbox">Approve</label>&nbsp;&nbsp;
        <input type="radio" name="status" value="rejected"/>
        <label for="status" class="checkbox">Reject</label>
        <p style="color:lightcoral"></p>
    </div>
    <div class="modal-footer">
        
         <div id="confirm" class="alert alert-info  alert_modal hide">  

              <i class="icon-spinner icon-large icon-spin"></i> Submitting Data..
         </div>
        
        <a href="#" class="btn btn-inverse" id="mat_req_submit">Submit</a>
        <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>
<!-------------------------------End Modal Window------------------------------------------------->

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


