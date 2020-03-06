<!-- footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; Copyright 2019 | Bulit by <a href="http://instagram.com/mrizkyff">Mrizkyff</a></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- akhir footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <script src="<?php echo base_url()?>asset/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>
    
   
    <!-- javascript buatan sendiri -->
    <script type="text/javascript">
      function validasi_form(){
        var v_nama = document.getElementById('nama').value;
        var v_email = document.getElementById('email').value;
        var v_telp = document.getElementById('telp').value;
        var v_pesan = document.getElementById('pesan').value;
        if(v_nama.length == 0){
          alert("Nama tidak boleh kosong!");
          return false;
        }
        else if(v_email.length ==0){
          alert("Email tidak boleh kosong!");
          return false;
        }
        else if(v_telp.length ==0){
          alert("Telp. tidak boleh kosong!");
          return false;
        }
        else if(v_pesan.length == 0){
          alert("Pesan tidak boleh kosong");
          return false;
        }
        else{
          alert('Pesan Telah Terkirim!');
          return true;
        }
      } 
      
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');

    </script>
    <!-- akhir javascript buatan sendiri -->
  </body>
</html>