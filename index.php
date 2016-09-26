<?php 
	require_once 'picture-process.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link href='img/icon.png' rel='icon' type='image/x-icon'/>
	<meta charset="UTF-8">
	<meta name="description" content="Say No To 7 Creatives, Generate a Profile Picture">
	<title>Say No To 7 Creatives - From A SSC Candidate '17</title>
	<meta name="author" content="Tawsif Torabi">	
	<link rel="stylesheet" href="css/style.css">
	<meta charset='utf-8'/>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
	<meta content='PHP' name='generator'/>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<meta content='noindex' name='robots'/>
	<meta content='noindex,nofollow' name='robots'/>
	<meta content='noindex,nofollow' name='robots'/>
	<meta content='Say No To 7 Creatives,Tawsif Torabi, grplusbd, green renzars, green ranzers, green rangers, grplus, tawsif torabi, tahmid hasan, mahmuduzzaman kamol, child blog, tech blog' name='keywords'/>
	<meta content='website' property='og:type'/>
	<meta content='http://app.grplusbd.net/fb/no7creatives/img/1.jpeg' property='og:image'/>
	<link href='https://plus.google.com/+TawsifTorabi/posts' rel='publisher'/>
	<link href='https://plus.google.com/+TawsifTorabi/about' rel='author'/>
	<link href='https://plus.google.com/+TawsifTorabi' rel='me'/>
	<meta content='general' name='rating'/>
	<meta content='english' name='language'/>
	<meta content='https://www.facebook.com/tawsif.torabi' property='article:author'/>
	<meta content='https://www.facebook.com/tawsif.torabi' property='article:publisher'/>
	<meta content='@TawsifTorabi' name='twitter:creator'/>
	<meta content='@TawsifTorabi' name='twitter:site'/>

</head>
<body>
	
	<div class="home">
		
			<div class="mainbox">
				<h1>#Say_No_To_7_Creatives</h1>
				
							<p class="mininav">
								<a href="https://goo.gl/8QTPg3" target="_blank">Facebook Event Page</a> | 
								<a href="http://blog.grplusbd.net" target="_blank">Blog</a> | 
								<a href="http://grplusbd.net" target="_blank">Website</a> | 
								<a href="http://facebook.com/tawsif.torabi" target="_blank">Creator</a>
								</br>
								</br>
								<iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fapp.grplusbd.net%2Ffb%2Fno7creatives&layout=button_count&size=small&mobile_iframe=true&appId=164293520647951&width=68&height=20" width="70" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
								<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fgrplusbd&width=72&layout=button_count&action=like&size=small&show_faces=false&share=false&height=21&appId=164293520647951" width="76" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
							</p>
				
				
				<?php 
					if (!isset($uploadedFile)) { ?>
						<div class="box">
						<center>
							<div class="sample-images">
								<img src="img/1.png" width="100%" alt="#say_no_to_7_creatives">
							</div>
						</center>
							<div class="upload-file-area">
							
							<center>
								<h2 style="color: red;">Select Picture and say No to 7 Creatives</h2>
								
								<p><?php echo @$error; ?></p>
								<?php 
									if(isset($file_error)) {
										echo '<p class="error"> '. $file_error .' </p>';
									}
								?>
								
									<form action="" method="post" class="clearfix" enctype="multipart/form-data">
										<input type="file" name="picture" id="file-2" class="inputfile inputfile-2"  />
											</br>
											</br>
										<input type="submit" value="Upload" class="btn-submit">
									</form>
								</center>
								
											</br>
											</br>

								<div class="rule">
									<li>Max Image upload size is 2 Megabytes</li>
									<li>Photo resolution should better be 744 x 600</li>
									<li>(jpeg, jpg, png) image formats are supported</li>
								</div>

							</div>
							</br>
							<center>
								<iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fapp.grplusbd.net%2Ffb%2Fno7creatives&layout=button_count&size=small&mobile_iframe=true&appId=164293520647951&width=68&height=20" width="70" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
								<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fgrplusbd&width=72&layout=button_count&action=like&size=small&show_faces=false&share=false&height=21&appId=164293520647951" width="76" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
							</center>
							
											</br>
											</br>
											</br>
											</br>


							<div class="footer"><p class="copyright"> Created By A Creative Student <a href="http://fb.com/tawsif.torabi" target="_blank">@TawsifTorabi</a>
							</br>
							</br>
							<a href="http://blog.grplusbd.net" target="_blank">Blog</a> | <a href="http://app.grplusbd.net" target="_blank">Apps</a> | <a href="http://grplusbd.net" target="_blank">Website</a></p></div>
						</div>
				<?php } else { ?>

					<div class="mainbox">
					<div class="box">
						<div class="uploaded_file">
							<img src="uploads/<?php echo $uploadedFile; ?>" width="90%" alt="New Picture">
						</div>
						<div class="download">
							<a href="download.php?id=<?php echo $uploadedFile; ?>" class="download_image">Download</a>
							<a href="index.php" class="new_gen">Generate Again</a>
						</div>
					</div>
					</div>
					

				<?php }
				?>



			</div>
		</div>
	</div>

</body>
</html>