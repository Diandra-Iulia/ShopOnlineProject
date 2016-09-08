			<ul>
				<li><a href="index.php">Home</a></li>
				<li class="dropdown"><a href="#">Shop</a>
					<ul class="sub-menu">
					<?php
					include "connect.php";
					$sql="SELECT * FROM categorie";
					$rez=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($rez)){
						echo "<li><a href=produse.php?idul=".$row['id'].">".$row['nume']."</a></li>";
					}
					?>
					</ul>
					<!--<li><a href="#">Item1</a></li>
					<li><a href="#">Item2</a></li>
					<li><a href="#">Item3</a></li>
					<li><a href="#">Item4</a></li>
					<li><a href="#">Item5</a></li>			
					</li>-->
				<li><a href="#">About</a></li>
				<li><a href="#">Help</a></li>
				<li><a href="#">Find us</a></li>
				<?php
				//session_start();
				$count=0;
				if(isset($_SESSION['idutilizator'])){		
					$idutilizator=$_SESSION['idutilizator'];
					$sql="SELECT * FROM cos WHERE idutilizator=$idutilizator";
					$rez=mysqli_query($conn,$sql);
				
					while($row=mysqli_fetch_array($rez)){
						$count=$count+1;
						
					}
					echo '<li><p><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" id="icon"></span><span class="badge">'.$count.'</span></a></p></li>';
				}
				else
					echo '<li><p><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" id="icon"></span><span class="badge">'.$count.'</span></a></p></li>';

				?>
			</ul>