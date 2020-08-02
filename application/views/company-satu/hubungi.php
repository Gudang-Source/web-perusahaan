<?php $alamat = $this->model_utama->view_where('mod_alamat',array('id_alamat' => 1))->row_array(); ?>  

<div class="container">
	<div class="row" style="padding-top:15px;"> 
		<div class="col-md-9">
			<div class="blog-post single-post">
				<article class="post blog-single-post">
					<div>
					<header><h2>Contact</h2></header>
					</div>
					<div class="wpb_wrapper wpb_text_column td_block_wrap td_block_wrap vc_column_text  td_block_template_1">
					<div class="td-block-title-wrap"></div>
					<p><span style="font-size:13px"><?php echo $alamat['alamat']; ?></span></p>
					</div>

				</article>
			</div>
		</div>
			
		<div class="wpb_wrapper">
			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo "$iden[maps]"; ?>"></iframe>

			<div class="vc_row_inner vc_custom_1464855984483  vc_row vc_inner wpb_row td-pb-row">
				<div class="vc_column_inner  wpb_column vc_column_container td-pb-span12">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="wpb_wrapper wpb_text_column td_block_wrap td_block_wrap vc_column_text td_block_template_1">
							<div class="td-block-title-wrap">
								<h4 class="block-title"><span class="td-pulldown-size">Send us a message!</span></h4>
							</div>
							<div role="form" class="wpcf7" id="wpcf7-f4-p244-o1" lang="en-US" dir="ltr">
								<?php echo $this->session->flashdata('message'); ?>
								<div class="screen-reader-response"></div>
								<form action="<?php echo base_url(); ?>hubungi/kirim" method="post" id="commentform" class="comment-form" novalidate="">
									<div class="clearfix"></div>
									<div class="comment-form-input-wrap td-form-author">
										<input class="" id="author" name="a" placeholder="Name:*" type="text" value="" size="30" aria-required="true">
										<div class="td-warning-author">Please enter your name here</div>
									</div>
									<div class="comment-form-input-wrap td-form-email">
										<input class="" id="email" name="b" placeholder="Email:*" type="text" value="" size="30" aria-required="true">
										<div class="td-warning-email-error">You have entered an incorrect email address!</div>
										<div class="td-warning-email">Please enter your email address here</div>
									</div>
									<div class="comment-form-input-wrap td-form-comment">
										<textarea placeholder="Your Message:" id="comment" name="c" cols="45" rows="8" aria-required="true"></textarea>
										<div class="td-warning-comment">Please enter your Message!</div>
									</div>
									<div class="comment-form-input-wrap td-form-url">
										<?php echo $image; ?>
										<input class="" id="url" name="security_code" placeholder="Enter Code Here..." type="text" value="" size="30">
										
									</div>
									<p class="form-submit">
										<input name="submit" type="submit" id="submit" class="submit" value="Send Message"> 
									</p> 
								</form>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
       
	   
	