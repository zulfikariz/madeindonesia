
<?php
/*
Template Name: actionform
*/
?>

<?php get_header(); ?>

<?php
// These files need to be included as dependencies when on the front end.
	require_once( ABSPATH . 'wp-admin/includes/image.php' );
	require_once( ABSPATH . 'wp-admin/includes/file.php' );
	require_once( ABSPATH . 'wp-admin/includes/media.php' );

// Fetching Values from URL.
$title=$_POST['nama'];
$content=$_POST['alamat'];
$phone=$_POST['phone'];
$photo = $_FILES['photo'];

$post = [
           'tempat_lahir'    => $_POST['tempat_lahir'],
           'tanggal_lahir'   => $_POST['tanggal_lahir'],
           'jenis_kelamin'   => $_POST['jenis_kelamin'],
           'gol_darah'       => $_POST['gol_darah'],
           'phone'           => $_POST['phone'],
           'facebook'        => $_POST['facebook'],
           'motivasi'        => $_POST['motivasi'],
           'pekerjaan'       => $_POST['pekerjaan'],
           'email'           => $_POST['email']
       ];

// if (!preg_match("/^[0-9]{10}$/", $phone)) {
// echo "<span>* Please Fill Valid Contact No. *</span>";
// } else {

$postId = wp_insert_post(array (
'post_type' => 'wporg_celengers',
'post_title' => $title,
'post_content' => $content,
'post_status' => 'publish',
'comment_status' => 'closed',   // if you prefer
'ping_status' => 'closed',      // if you prefer
));



		$photoId = media_handle_upload($photo, $postId);      // custom fields setup

       $cf['pendaftaran'] = [
           'tempat_lahir'  => 'field_582c36c3e1f6a',
           'tanggal_lahir' => 'field_582c36d7e1f6b',
           'jenis_kelamin' => 'field_582c36f9e1f6c',
           'gol_darah'     => 'field_582c3745e1f6d',
           'phone'         => 'field_582c3772e1f6f',
           'facebook'      => 'field_582c3789e1f70',
           'motivasi'      => 'field_582c3793e1f71',
           'pekerjaan'     => 'field_582c37d3e1f72',
           'email'         => 'field_582c3755e1f6e'
       ];
      set_post_thumbnail( $postId, $photoId );
       update_field($cf['pendaftaran']['tempat_lahir'],         $post['tempat_lahir'],      $postId);
       update_field($cf['pendaftaran']['tanggal_lahir'],        $post['tanggal_lahir'],     $postId);
       update_field($cf['pendaftaran']['jenis_kelamin'],        $post['jenis_kelamin'],     $postId);
       update_field($cf['pendaftaran']['gol_darah'],            $post['gol_darah'],         $postId);
       update_field($cf['pendaftaran']['phone'],                $post['phone'],             $postId);
       update_field($cf['pendaftaran']['facebook'],             $post['facebook'],          $postId);
       update_field($cf['pendaftaran']['motivasi'],             $post['motivasi'],          $postId);
       update_field($cf['pendaftaran']['pekerjaan'],            $post['pekerjaan'],         $postId);
       update_field($cf['pendaftaran']['email'],                $post['email'],             $postId);


//$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing E-mail.
// After sanitization Validation is performed
//if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

 echo "<script type=\"text/javascript\">";
    echo "alert('pendaftaran sukses');";
    echo " window.location.assign("'.home_url().'")"
    echo "</script>";

// }
// } else {
// echo "<span>* invalid email *</span>";
// }



//$id = wp_insert_post(array($data));

?>
<?php get_footer(); ?>
