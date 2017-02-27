<section id="about">
        
	<div class="container">
            
		<div class="row">
                
			<div class="col-lg-12 text-center">
                    
			<h2 class="section-heading">Anggota UKM</h2>
                
		</div>
            
	</div>

            
	<div class="col-md-12 col-md-push-0">
            
	<div class="bs-example">
            


	<!-- Tampil Saran ==================================================================================================== -->
                    
                    <br><br>
                    <h2 class="section-heading"></h2>
                    <table class="table table-striped table-striped text-justify">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Jurusan</th> 
                                <th>Jenis kelamin</th>
                                <th>Email</th>
                                <th>Angkatan</th> 
                                <th>Point</th>
                                <th><center>+Point</center></th>
                                <th><center>Action</center></th>            
                            </tr>
                        </thead>
                        <tbody>
                            	<?php $no = 1; foreach($users as $u){ ?>
                            
	<form action="updatepoint_page/<?php echo $u->nim ?>" method="post">
                                
	<tr>
                                    
	<td><?php echo $no++ ?></td>
                                    
	<td><?php echo $u->nim ?></td>
                                    
	<td><?php echo $u->nama ?></td>
                                    
	<td><?php echo $u->jurusan ?></td>
                                    
	<td><?php echo $u->jenis_kelamin ?></td>
                                    
	<td><?php echo $u->email ?></td>
                                    
	<td><?php echo $u->angkatan ?></td>
                                    
	<td><?php echo $u->point ?></td>
                                    
                                   
	<td><center>
                                    
	<input class="form-control" required="required" name='point' placeholder="input" type="text" > 
                                    
	</center></td>

                                   
	
	<td><center>
                                    
	<button type="submit" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>    
                                    
	</center> </td>
                                
	
	</tr>
                            
	</form>
                            
	<?php } ?>
                        
	</tbody>
                    
	</table>
    
            
	</div>
        
	</div>
    
</section>




                                              