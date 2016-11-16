<?php /* Template Name: Pendaftaran Template */ get_header();?>
<!-- 	<div class="page-title green">
		<h2> <span>PENDAFTARAN</span> </h2>	
		</div> -->
<section id="bmee-testimoni-widget" class="bmee-widget">
	<div class="container">
	
  <div class="section-title">
    <h2>PENDAFTARAN <span>ANGGOTA</span> CELENGERS  </h2>
  </div>

<form>
	<label>Nama Lengkap</label>
	<input type="text" name="name">
	<label>Alamat</label>
	<textarea name="alamat" rows="5"></textarea>
	<label>Tempat Lahir</label>
	<input type="text" name="tempat_lahir">
	<label>Tanggal Lahir</label>
	<input type="date" name="tanggal_lahir">
	<label>Jenis Kelamin</label>
	<Select name="jenkel" >
		<option value="laki-laki" >laki-Laki </option>
		<option value="perempuan">perempuan</option>
	</Select>
	<label>Golongan Darah</label>
	<Select name="goldarah" >
		<option value="A" >A</option>
		<option value="B">B</option>
		<option value="AB">AB</option>
		<option value="O">O</option>
	</Select>
	<label>Email</label>
	<input type="email" name="email">
	<label>Phone</label>
	<input type="text" name="phone">
	<label>Facebook</label>
	<input type="text" name="facebook">
	<label>Motifasi Bergabung</label>
	<textarea name="motivasi" rows="5"></textarea>
	<label>pekerjaan</label>
	<input type="text" name="pekerjaan">
	<label>Foto Diri</label>
	<input type="file" name="foto">
	<input type="submit" >

</form>
</div>
</section>
<!-- <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php endwhile; ?>
<?php endif; ?>	 -->	

<?php get_footer(); ?>