<div class="registration-form">
	<div class="container">
	<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Registration
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
		<h2>Registration</h2>
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg">
					 <p>Welcome, please enter the following details to continue.</p>
					 <p>If you have previously registered with us, <a href="#">click here</a></p>
					 <form action="<?php echo site_url()."/akun/registrasi/";?>" method="post">
        <ul>
           <li class="text-info">Nama Lengkap</li>
            <li><input type="text" id="exampleInputEmail1" placeholder="Nama Lengkap" name="namaLengkap" required></li>
        </ul>
      	<ul>
      		<li class="text-info">Username</li>
       		<li>  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Username" name="username" required>
          </li>
      	</ul>
      	<ul>
	      <li class="text-info">Password</li>
	      <li> <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
        </li> 		
      	</ul>
      	<ul>
      		<li class="text-info">email</li>
      		<li><input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" required>
        </li>
     	</ul>
        <ul>
        	<li class="text-info">ALAMAT</li>
	       	<li><textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="alamat" name="alamat" required></textarea>
          </li>
        </ul>
        <ul>
        	<li class="text-info">Provinsi</li>
	        <li><select class="form-control" name="provinsi" id="propinsi_asal">
            <option value="" selected="" disabled="">Pilih Provinsi</option>
            <?php $this->load->view('web/rajaongkir/getProvince'); ?>
            </select>
         </li>
        </ul>
        <ul>
         	<li class="text-info">Kota</li>
	      	<li><select class="form-control" name="kota" id="origin">
            <option value="" selected="" disabled="">Pilih Kota</option>
          </select>
          </li>
         </ul>
        <ul>
           	<li class="text-info">Kode Pos</li>
          	<li>  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="kode pos" name="kodepos" required>
          </li>
          </ul>
        <ul>
        	<li class="text-info">No hp</li>
	      	<li> <input type="text" class="form-control" id="exampleInputEmail1" placeholder="No Hp" name="nohp" required number>
          </li>
        </ul>
          <button type="submit"  class="btn btn-primary col-md-12" >Daftar</button>
         </form>

				 </div>
			</div>
			
		</div>
	</div>
</div>
<!-- registration-form -->