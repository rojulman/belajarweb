<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="img/logonf.png" style="width:30%">
                        <h2 class="py-3">Registration</h2>
                        <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.

</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Please fill with your details</h4>
                <form method="GET" action="proses1.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input id="Full Name" name="nama" placeholder="Full Name" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                      </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input id="Mobile No." name="nohp" placeholder="Mobile No." class="form-control" required="required" type="text">
                        </div>
                        <div class="form-group col-md-6">
                                  
                        <?php 
  $ar_pekerjan = [1=>"Mahasiswa","Dosen","Guru","ASN","Umum"];
?>
                                  <select id="inputState"
                                   name="pekerjaan"
                                   class="form-control">
                                    <option selected>Choose ...</option>
                                    <?php 
    foreach($ar_pekerjan as $k =>$v){
        echo '<option value="'.$k.'">'.$v.'</option>';
    }
?>
                                   <!-- <option value="mahasiswa"> Mahasiswa</option>
                                    <option value="dosen"> Dosen</option>
                                    <option value="guru"> Guru</option>
                                    <option value="umum"> Umum</option>-->
                                  </select>
                        </div>
                        <div class="form-group col-md-12">
                                  <textarea id="comment" name="komentar"
                                   cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                  <label class="form-check-label" for="invalidCheck2">
                                    <small>By clicking Submit, you agree to our Terms & Conditions, Visitor Agreement and Privacy Policy.</small>
                                  </label>
                                </div>
                              </div>
                    
                          </div>
                    </div>
                    
                    <div class="form-row">
                        <input type="submit" class="btn btn-danger"
                        value="Kirim" name="proses"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
