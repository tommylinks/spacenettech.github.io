<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О нас - доставка Днепропетровск | Foodart ™");
?>
<div class="pix_row row blog-post">
		
		<!-- === BLOG IMAGE === -->
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="post-thumb"><img src="<?=SITE_TEMPLATE_PATH?>/media/blog/5.jpg" alt="galliope" /></div>
		</div>
		
		<!-- =========================
			BLOG INFO
		============================== -->
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="post-info">
				<!-- === BLOG DATE === -->
				<div class="post-data">Posted On  25 Feb 2015</div>
				<!-- === BLOG TITLE === -->
				<h5 class="post-title">РАЗРАБОТКА МНОГОСТРАНИЧНЫХ САЙТОВ </h5>
				<!-- === BLOG TEXT === -->
				<div  class="post-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip. Duis aute irure dolor in reprehenderit voluptate se cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed pers picia tis unde omnis iste natus error sit voluptatem accusan tium doloremque laudantium totam rem aperiam eaque.</p>
					<p>Pasa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempor.
					a incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
					<!-- === blockquote === -->
					<blockquote class="quote-left"> <i class="fa fa-quote-left"></i>
						<p>Maecenas quis nisi. Nulla eullam sit amet metus eget dolor semper lao ret. Lorem ipsum dolor sit amet consect adipisicing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. </p>
					</blockquote>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempor.
					a incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
				</div>
				
				<hr class="post-divider">
				
				<div class="post-data">
					<!-- === BLOG CATEGORIES === -->
					<div class="post-meta">
						<i class="fa fa-folder-o"></i>
						<a href="06-blog-main.html">New Project</a>
						<a href="06-blog-main.html">Business</a>
						<a href="06-blog-main.html">Multipurpose</a>
					</div>
					<!-- === BLOG SHARE === -->
					<div class="post-share">
						Share This Post 
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a class="latest" href="#"><i class="fa fa-google"></i></a>
					</div>
				</div>  
				
				<div class="title-o comment-title">Leave A Reply</div>
				
				<!-- === BLOG COMMENTS FORM === -->
				<div class="comment-form">
					<form>
						<div class="comment-form-item comment-form-item-1 col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label for="username">NAME</label>
							<input data-validation="length" data-validation-length="min4" type="text" id="username" name="username" placeholder="" />
						</div>
						<div class="comment-form-item comment-form-item-2 col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<label for="email">E-MAIL</label>
							<input data-validation="email" type="text" id="email" name="email" placeholder="" />
						</div>
						<div class="comment-form-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<label for="comment">MESSAGE</label>
							<textarea data-validation="length" data-validation-length="min10" name="comment" id="comment" placeholder=""></textarea>
						</div>
						<div class="comment-form-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<button class="btn btn-info">SUBMIT</button>
						</div>
					</form>
				</div>
				
			</div>
		</div>
		
	</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>