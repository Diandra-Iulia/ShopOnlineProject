<?php
include "connect.php";
session_start();

	// if session is set continue
		
?>

<!DOCTYPE html>
<html>

<head>
	<link type="text/css" rel="stylesheet" href="stil.css"/>

	<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
	
	<link href = "css/bootstrap.min.css" rel = "stylesheet">
	<script src = "https://code.jquery.com/jquery.js"></script>
	<script src = "js/bootstrap.min.js"></script>
	
	<title>My template</title>
	<meta charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script>
	$(document).ready(function() {
    $( '.dropdown' ).click(function(){
           $(this).children('.sub-menu').slideToggle('fast');
        });
	});
	</script>
	
</head>
<body>
	<div id="container">
		<div id="nav">
		<div class="col-xs-12">
			
			<?php
			if(isset($_SESSION['utilizator']))
			{
				echo "<p><a href=logout.php>Log Out</a></p>";
				echo "<p><a href=adminpage.php>Go back to AdminPage</a></p>";
				
			if($_SESSION['utilizator'] == 1){
				if(isset($_SESSION['nume'])){
					
					echo "<p>Welcome ".$_SESSION['nume']."! </p> ";
					
				}
				}
			else{
				if($_SESSION['utilizator'] == 0)
				{
					header("location: index.php");
				}
				}   
			
			
				}


			// if session is Not set
		if(!isset($_SESSION['utilizator']))
			{
			//echo" <a href=login.php>Inreagistreaza-te</a>";
			header("location:index.php");
			}
			?>
			
		
			<form id="search">
			<input type="text" name="search" tabindex="1">
			</form>
			
			
		</div></div>
		<div id="navbar1">
			<?php include "meniu.php"; ?>
		</div>
		
		<div id="content">
			<h1>Add Products</h1><hr>
			<form id="add" method="POST" action="insert.php"  enctype="multipart/form-data" >
				
				<label>Choose a Category</label><br>
				<select name="cat"><br>
				<?php
					$sql1="SELECT * FROM categorie";
					$result = mysqli_query($conn,$sql1);
					while($row1 = mysqli_fetch_array($result)){
						echo"<option value=\"".$row1['id']."\">".$row1['nume']."</option>";
					}
				?></select>
				
				
				<label>Product Name</label><br>
				<input type="text" name="pname" required autofocus>
				
				
				
				<label>Description</label><br>
				<input type="text"name="description" required autofocus>
				
				
				
				<label>Amount</label><br>
				<input type="number" min="1" value="1" name="amount" required autofocus>
				
				
				<label>Image</label><br>
				<input type="file" name="fileToUpload" id="fileToUpload"  required autofocus>

					
				<label>Price</label><br>
				<input type="number" min="10" value="10" name="price" required autofocus>
				
				<div>
				<button type="submit">Add</button>
				<button type="reset">Reset</button>
				</div>
				
			</form>
			<h1>Show Products</h1><hr>
			
			
				<div id="edit">
				
				<?php
				
					function add($id){
						include "connect.php";
						$sql2="SELECT * FROM produs WHERE idcategorie=$id";
						$rez=mysqli_query($conn,$sql2);
						$i=1;
						while($row3 = mysqli_fetch_array($rez)){ 
						echo "<tr><td><input type = checkbox id = checkthis /></td>
							  <td><input type=hidden name=idu value='".$row3['id']."'>".$i."</td>
						      <td>".$row3['nume']."</td>
							  <td>".$row3['descriere']."</td>
							  <td>".$row3['cantitate']."</td>
							  <td>".$row3['pret']."</td>
							  <td>
                                    <p data-placement='top' data-toggle='tooltip' title='Edit'>
                                        <button type=button class=btn btn-primary btn-xs edit-button data-title='Edit' data-toggle='modal' data-target='#editare' data-id=".$row3['id']."><span class='glyphicon glyphicon-pencil'></span></button>
                                    </p>
                                </td>
                                <td>
                                    <p data-placement='top' data-toggle='tooltip' title='Delete'>
                                        <button class=btn btn-danger btn-xs data-title='Delete' data-toggle='modal' data-target='#delete'><span class='glyphicon glyphicon-trash'></span></button>
                                    </p>
                              </td>";
							 // <td><a href=prod_edit.php?idu=".$row3['id'].">Edit</a></td>
							 // <td><a href=delete.php?idu=".$row3['id'].">Delete</a></td></tr>";
					
						$i++;
						}
					}
					$sql="SELECT * FROM categorie";
					$result = mysqli_query($conn,$sql);
					while($row2 = mysqli_fetch_array($result)){
						//echo"<div class=divuri class=col-md-12><p>".$row2['nume']."</p></div>";
						echo "<div class=col-md-12><table id=mytable class= table table-bordred table-striped>
						
						<tr><td colspan=8>".$row2['nume']."</td></tr>
						<tr><td><input type = checkbox id = checkall /></td>
						<td>Index</td>
						<td>Product Name</td>
						<td>Description</td>
						<td>Amount</td>
						<td>Price</td>
						<td>Edit</td>
						<td>Delete</td>
						</tr>";
						
						$id=$row2['id'];
						add($id);
					}
				?>				
				
				</table></div>
				
				
				</div>
				
			
			<div class="modal fade" id="editare" tabindex="-1" role="dialog" aria-labelledby="editare" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
						
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h4 class="modal-title custom_align" id="Heading">Edit Your Product</h4>
                        </div>
							
							
                        <div class="modal-body">
							
							<form id="edit-form" class="bs-example bs-example-form" action="update.php" method="POST" enctype="multipart/form-data">
                            
								
								<div class="form-group">
								<input type=hidden name="idu" class="form-control">
								</div>
                                
								<div class="form-group">
								<input class="form-control " type="text" name="prname">
								</div>
								
								<div class="form-group">
                                <input class="form-control" name="descr" >
								</div>
								
								<div class="form-group">
                                <input class="form-control " type=number min=1 name="cantit">
								</div>
							
								<div class="form-group">
                                <input class="form-control " type=number min=10 name="pret" >
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
			
				
						
		</div>
		
	</div>
	
	<script>
		$(document).ready(function(){
			$('#edit-form')
				.on('success.form.fv', function(e){
					e.preventDefault();
					var $form=$(e.target),
						id=$form.find('[name="idu"]').val();
					$.ajax({
						url:
						method:
						data: $form.serialize();
					}).success(function(response){
						var $button=$('button[data-id="' + response.id + '"]'),
							$tr=$button.closest('tr'),
							$cells=$tr.find('td');
						
						$cells
							.eq(1).html(response.prname).end()
							.eq(2).html(response.descr).end()
							.eq(3).html(response.cantit).end()
							.eq(4).html(response.pret).end();
					});	
				});
				
				$('.edit-button').on('click', function(){
					var id=$(this).attr('data-id');
					
					$.ajax({
						url:
						method: 'GET',
					}).success(function(response){
						$('edit-form')
							.find('[name=prname]').val(response.prname).end()
							.find('[name=descr]').val(response.descr).end()
							.find('[name=cantit]').val(response.cantit).end()
							.find('[name=pret]').val(response.pret).end();
					});
				});
		});
	</script>
	
	<script>
		$(document).ready(function () {
                $("#mytable #checkall").click(function () {
                    if ($("#mytable #checkall").is(':checked')) {
                        $("#mytable input[type=checkbox]").each(function () {
                            $(this).prop("checked", true);
                        });

                    } else {
                        $("#mytable input[type=checkbox]").each(function () {
                            $(this).prop("checked", false);
                        });
                    }
                });

                $("[data-toggle=tooltip]").tooltip();
            });
	</script>
	
</body>
