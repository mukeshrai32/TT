
<div id="showMessage" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content" style="margin-top: 200px;">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title"><i class="fa fa-info-circle" id="icon-terminate" ></i> User Deleted
                    </h4>
                </div>

                <div class="modal-body">
                    {{-- error --}}
                    <div class="error" style="display: none;">
                        <i class="fa fa-close"></i> &nbsp; Error While Deleting &nbsp;Telephone Information .
                    </div>
                    {{-- Success --}}
                    <div class="success" style="display: none;">
                        <i class="fa fa-check"></i> &nbsp; Telephone Info Deleted Successfully .
                    </div>

                </div>
                <input type="hidden" id="hidden_id">
                <div class="modal-footer" style="text-align: center;">
                    <button type="button" class="btn btn-danger green confirm_yes" id="show_message"><i class="icon-check"></i> Ok
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>

    <div id="deleteTelephone" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content"  style="margin-top: 200px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title"><i class="fa fa-info-circle" id="icon-terminate" ></i> Delete Permanently
                    </h4>
                </div>
                <div class="modal-body"> Do you want to delete <span class='hidden_title'>" "</span>?</div>
                <input type="hidden" id="user_id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger green confirm_yes" id="confirm_yes"><i class="icon-check"></i> Yes
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="icon-close" id="icon-terminate"></i>
                        No
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
