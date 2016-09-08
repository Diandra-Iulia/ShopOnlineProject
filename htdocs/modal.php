 
 
 
 <div class="modal fade" id="editare" tabindex="-1" role="dialog" aria-labelledby="editare" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h4 class="modal-title custom_align" id="Heading">Edit Your Product</h4>
                        </div>
                        <div class="modal-body">
							<form action="update.php" method="POST" enctype="multipart/form-data">
							
							<input type=hidden name=idu value="<?php echo $row4['id']?>"><br>
							
                            <div class="form-group">
                                <input class="form-control " type="text" name=prname value="<?php echo $row4['nume']?>">
                            </div>
							<div class="form-group">
                                <textarea rows="2" class="form-control" name=descr placeholder="<?php echo $row4['descriere']?>"></textarea>
                            </div>
                            <div class="form-group">

                                <input class="form-control " type=number min=1 name=cantit value="<?php echo $row4['cantitate']?>">
                            </div>
							<div class="form-group">

                                <input class="form-control " type=number min=10 name=pret value="<?php echo $row3['pret']?>">
                            </div>
                            
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                        </div>
						</form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>



            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                        </div>
                        <div class="modal-body">

                            <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                        </div>
                    </div>
                </div>
            </div>