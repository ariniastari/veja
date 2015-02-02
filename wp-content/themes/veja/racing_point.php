<?php
/* 
Template Name: Racing Point Page Template
*/
?>
<?php get_header(); //d(has_post_thumbnail()); ?>
<div class='container-fluid content'>
  <div class='row'>
    <div class="col-md-4 hidden-sm hidden-xs">
      <div class="sprites produk-racing"></div>
    </div>
    <div class='col-md-5 white'>
        <?php if(is_page( 'CHECK SMS POIN' )) { ?>
          <?php the_title( '<h1>', '</h1>' ); ?>
        <?php } ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
        <!-- <form role='form'>
          <div class='form-group'>
            <input class='form-control' id='name' placeholder='Name' style='margin-top: 10px;' type='text'>
          </div>
          <div class='form-group'>
            <input class='form-control' id='email' placeholder='E-mail' type='email'>
          </div>
          <div class='form-group'>
            <input class='form-control' id='name' placeholder='Nomor HP' type='text'>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Dengan mengirimkan data melalui form ini, saya setuju dengan <a href="#" class="blue">Terms and Conditions</a> yang berlaku
              </label>
            </div>
          </div>
          <button class='btn btn-danger' style="margin:10px 0;" type='submit'>Kirim</button>
        </form> -->
    </div>
  </div>
</div>
<div id="primary" class="site-content">
  <div id="content" role="main">

  </div><!-- #content -->
</div><!-- #primary -->
<div aria-hidden='true' aria-labelledby='myModalLabel' class='modal fade' id='tnc' role='dialog' tabindex='-1'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-body'>
        <h1>Terms &amp; Conditions</h1>
        <h3>Syarat:</h3>
        <ol>
          <li>Pengambilan hadiah tidak dapat diwakilkan dan tidak bisa dicairkan dalam bentuk uang</li>
          <li>Semua hadiah hanya dapat ditukarkan berdasarkan jumlah poin yang diperoleh dari pembelian setidaknya 1 pcs VEJA dengan bukti struk Asli Alfamart.</li>
          <li>Struk Pembelian (ASLI bukan copy / Fotocopy) VEJA di Alfamart (PT. Sumber Alfaria Trijaya Tbk.</li>
          <li>Berusia minimal 17 tahun (dibuktikan dengan KTP pada saat verifikasi pemenang).</li>
          <li>Bertempat tinggal di Indonesia dan masih tinggal di Indonesia saat program ini berlangsung.</li>
          <li>Memasukan data atau mengirimkan SMS sesuai dengan yang sudah di tentukan.</li>
        </ol>
        <h3>Mekanisme:</h3>
        <ol>
          <li> Beli VEJA di Alfamart terdekat.</li>
          <li>Masukkan Kode Unik yg terdapat di dalam struck pembelian ke supermama.veja.co.id atau SMS ke 082211 776 776</li>
          <li>Konversi Poin : 1 produk VEJA = 10 Poin</li>
          <li>Kumpulkan poin kamu sebanyak-banyak-nya.</li>
          <li>Poin tertinggi akan mendapatkan grand prize Kitchen Set dari VEJA.</li>
          <li>Data lengkap (fotocopy KTP dan satu struk pembelian) dikirimkan ke PT. Reckit Benckiser paling lambat 7 hari kerja setelah customer service menghubungi.</li>
          <li>Hadiah akan segera di proses 30 hari kerja setelah data lengkap diterima oleh PT. Reckitt Benckiser.</li>
          <li>Pemenang TIDAK DIPUNGUT BIAYA APAPUN.</li>
        </ol>
        <h3>Ketentuan Lainnya:</h3>
        <ol>
          <li>Promo ini di selenggarakan oleh PT. Reckitt Benckiser untuk produk VEJA dengan pembelian hanya di seluruh outlet Alfamart (nasional).</li>
          <li>Promo ini berlaku selama persediaan hadiah masih ada.</li>
          <li>Pihak Penyelenggara berhak untuk mengubah dan/atau memodifikasi syarat dan ketentuan Promo dari waktu ke waktu dengan atau tanpa pemberitahuan terlebih dahulu.</li>
          <li>Setiap materi yang diikutsertakan dan dikirimkan dalam Promo ini menjadi hak milik PT. Reckitt Benckiser, dan PT. Reckitt Benckiser berhak untuk mempergunakannya sesuai dengan kepentingan PT. Reckitt Benckiser.</li>
          <li>Dengan mengikuti promo ini, Peserta memberikan izin kepada Pihak Penyelenggara untuk menggunakan (termasuk mempublikasikan) foto profile picture facebook Peserta untuk kepentingan Promo.</li>
          <li>Hadiah tidak dapat dialihkan, ditukar barang lain, atau diganti dengan uang.</li>
          <li>Jika ada keterlambatan untuk memproses hadiah yang di karekanan kesalahan data, menjadi tanggungjawab peserta sepenuhnya.</li>
          <li>Peserta tidak diperkenankan mengubah data pribadi selama promo ini berlangsung.</li>
          <li>Jika karena alasan apapun, pemberian hadiah tidak dapat berjalan sesuai rencana, PT. Reckitt Benckiser memiliki hak untuk memodifikasi ketentuan pemberian produk yang senilai dengan produk yang telah dijanjikan.</li>
          <li>Jika sewaktu-waktu pihak penyelenggara melakukan verifikasi, pemenang harus dapat menunjukkan KTP/ID dan STRUK ALFAMART ASLI (Bukan FotoCopy) sesuai dengan yang dimasukkan kedalam website VEJA.</li>
          <li>Jika terindikasi dan atau terbukti ada kecurangan, maka Poin dan kepesertaan dapat di anulir dan di anggap gugur.</li>
          <li>Promo ini berlaku hingga 15 Maret 2015.</li>
          <li>Promo ini dapat diperpanjang sesuai dengan kebutuhan dan dengan pemberitahuan resmi terlebih dahulu.</li>
          <li>Promo ini bukan bersifat pengundian melainkan loyalty program.</li>
          <li>Keputusan PT. Reckitt Benckiser tidak dapat diganggu gugat.</li>
          <li>Promo ini terbuka bagi peserta pria dan wanita.</li>
          <li>Promo ini tidak dipungut biaya apapun. Biaya ditanggung oleh Pihak PT. Reckitt Benckiser. Hati-hati penipuan.</li>
          <li>Promo ini tidak berlaku untuk Karyawan PT. Sumber Alfaria Trijaya Tbk. &amp; PT. Reckitt Benckiser.</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>