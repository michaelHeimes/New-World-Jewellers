 <?php
/**
 * Template Name: Guide
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package newworldjewellers
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
			<div class="wrap wrap-1000">
				<section>
					<h2>How to log into your website:</h2>
					<p>The way to access the "back-end" of your website will always be your url with "/wp-admin" after the URL</p>
					<p>For your site, this is going to be <a href="<?php echo get_site_url();?>/wp-admin" target="_blank"><?php echo get_site_url();?>/wp-admin</a>.</p>
				</section>
				
				<section style="margin-bottom: 100px;">
					<h2>How to edit your website:</h2>
					<p>Once you are in the back-end, you will be looking at the WordPress Back-end Navigation and Dashboard.</p>
					
					<h3>Back-end Navigation</h3>
					<p>The Back-end Navigation on the right is what you will use to navigate to the pages where you want to edit and add new pages, update plugins, and make other changes when necessary. I will be going from top to bottom and I will be skipping over anything you most likely will never need to access and often should NOT mess with!</p>
					
					<h4>Posts</h4>
					<p>This is where all the posts for "Blog" will be created and edited.</p>	
					
					<h4>Custom Pieces</h4>
					<p>This is where all the posts for "Custom" will be created and edited. When creating a Custom Piece Post, you will have the option for it to only appear as a card on the Custom Page, or also have a more detailed Blog post about the piece. The detailed post will be created in the Test Editor, while the copy to be shown on the Custom Piece card will go in the field labeled, "Copy for Custom Page". It it will have a post page, click "Yes" for "Will this have a blog post?". This will automatically add a link on the card to the blog post.</p>	
					
					<h4>Media</h4>
					<p>Here is where all of your images and files will be stored. You can click "Add New" to select a file on your computer that you want to upload, or simply drag-and-drop the image or file over the gallery.</p>
					<p>You can also edit images by resizing and/or cropping them.</p>
					
					<h4>Pages</h4>
					<p>This is where you will be editing the copy and images for the pages on the website and possible creating pages int he future.</p>		
						
					<h5>Editing Existing Pages</h5>
					<p>If you click on pages, you will see a list of all existing pages. If you click the page name, you will be taken to that page's back-end. Here you will find all the fields for the content on those pages. The fields will be for images, text, and links. The fields are labeled and will be in the order that they appear on the page. I recommend that you always have the page you are editing open in another tab or browser to not only make it easier but to occasionally check your work by refreshing the live page.</p>
					<p>To change an image, hover the image and click the "X" icon. This takes you to the Media page where all your images are stored. You can select a different image or drag a new image from your computer to the Media library and it will add it. Once the image is selected, click "Select".</p>
					<p>Some of the fields are Repeater Fields. These allow you to not only edit the text, images, and links but to add additional sets of fields and to remove and re-order them. An example of this is the Board Of Director cards on the About Page. This type of field is easiest to identify by the ability to ADD them and each row of fields has a number next to it. To reorder, simply drag-and-drop. To remove, hover the row and a "+ and -" will appear on the right side.</p>
					<p><strong>Always remember that any changes you make will not be saved unless you click "Save As Draft" on a new page and will not be live unless you click "Update" (for existing pages) or "Publish" (for new pages).</strong></p>
					<p>In the Publish Box, a link to view "Revisions". Here you can view past versions of the page you're editing and revert to one of them. This is useful if you decide you made errors or the edits you are making are no longer what you want.</p>
					
					<h5>Editing The Home Page</h5>
					<p>The Home Page's Header Image. Intro Copy and the Custom section at the bottom can edited like the other pages, but the Collections elements are aggregated from each Single Collection Page. Basically, whatever is on the Single Collection Page, is also on the Home Page, and it the same order.</p>
					
					<h5>Editing The About Page</h5>
					<p>There is a gallery on the Contact Page. To edit it, open Unite Gallery and edit the Store Gallery.</p>
					
					<h5>Editing The Shop Page</h5>
					The Shop page displays the contents of Collection pages. Click ADD ROW and select the collection's page. These can be dragged and dropped into any order.
					
					<h5>Adding A New Page</h5>
					<p>You may have pages on your site that are navigated to by a parent link. This will be the only time you should add a page to the website without a minor re-deigns to accommodate more navigation menu links. To access one of these pages from the main navigation menu, the parent link is hovered and the submenu containing the child links appears.</p>
					<p>To add one of these pages, click "Pages" then click "Add New". Name the page in the Title Box. Under the Publish box, you should see a box titled "Page Attributes". If you don't see this box, near the top-right of the page click on "Page Options". Make sure Page Attributes, Featured Image, and Page SEO Settings are all checked. Now, in the Page Attributes box, select the appropriate Template. If the page you are creating is part of "About Us", you can select "About Us" as the parent. An example would be if "Staff" had it's own page. This will tell search engines that Staff is a child or "About Us". This is optional but often makes sense in overall website hierarchy.</p>
					<p>While working on the page, you can click "Preview" to see what it would look like when published. You can always save it as a draft as well. Once you're ready for the world to see it, click "Publish". Now to create a navigation link to the page, you can scroll down this guide to the <a href="/guide/#menus">"Appearance -> Menus"</a> section to learn how to do that!</p>
					<p>One last thing about Pages, you can move them to the trash and they will no longer be visible to the public. You can also restore a page from the Trash and make it public again by going into the trash and clicking that option.</p>
					
					<h4>Adding a NEW COLLECTION</h4>
					<p>This, along with adding products, will be what you will have to do the most in order to grow the website.</p>
					<p>The easiest way to add a new collection is to duplicate one of the existing collections. If you click on Pages and then hover on of the collections, you will see the option to "clone" appear. Click Clone and it will duplicate that collection and save it as a Draft. Click the newly created collection and change every field and image.</p>
					<p>You will notice that one field is called "Woocommerce Shortcode". This shortcode tells the website to display the products in this collection. Part of the shortcode is: category="". Inside the quotes is the slug for the product category. Int he next section of this guide, you will learn how to add a product category in Woocommerce. After you create one, you will see a slug that looks something like "sophia-by-design". That is what you will replace in the shortcode with the actual category you want to display for THIS collection. </p>
					<p>Finish by clicking Publish. Once you click Public, the url (permalink) will reflect the new name. Now this collection will not only be a live page, but it will show up on the Home and Collections Pages. The only think you have left to do is add it to the navigation menu which is explained in the <a href="/guide/#menus">"Appearance -> Menus"</a> section</p>
					

					
					<h4>Woocommerce</h4>
					<p>This will be where you manage the eCommerce aspect of the website.</p>
					<h5>Managing Products</h5>
					<p>Click All Products for a list of the products.</p>
					<p>When adding or editing a product, the main things you need to complete are:</p>
					<ol>
						<li>Name</li>
						<li>Copy</li>
						<li>Product Categories</li>
						<li>Product Image</li>
						<li>Product gallery (if there are multiple images)</li>
						<li>Regular Price</li>
						<li>Sale Price (if applicable)</li>
					</ol>
					<p>For Product Categories, choose a collection and type of piece. For Vintage Watches, just select "Vintage Watches". You can add a collection by clicking "+add new category".</p>
										
					<h4 id="menus">Appearance / Menus</h4>
					<p>What good is a new page is no one can find it?! When you add a new page that goes under one of the top-row navigation (such as a new Event), you will need to add a navigation menu link. Do do this, hover "appearance" and then click "Menus" (User must be an Admin). You will see the Pages box to the left and a graphic representation of your main navigation on the right. In the Pages box, you can see recently added pages, all pages, or search for a page. Simple check the page or pages you want to add menu links to, and then click "Add To Menu". At the bottom of the graphic representation of your main menu, you will see the pages you just added. Simple drag and drop them to be under their parent menu and slightly to the right. Since there are already parent menu items with children menu items set up, you can see how new menu link shave to be positioned.</p>
								
					<h4>Plugins</h4>
					<p>You will also, depending on your User Level, update any plugins that need to be updated. Plugins are basically packaged applications that add functionality to your website. From time to time, updates will become available and need to be installed. These updates may be to add new features, increase security, or to be more compatible with the latest version of WordPress. Although you don't always have to update them immediately, it's good practice to not let too much time pass before going so. If something on the site is not working as it used to, it may be because that element has functionality provided by a plugin, and that plugin needs to be updated. Although it's rare, a plugin update may break the site or cause a small issue. If this happens, contact your webmaster.</p>
								
					<h4>WordPress Updates</h4>
					<p>WordPress itself is always evolving and improving security. This to will need to be updated soon after a new version is released. Although it's rare, a WordPress update may break the site or cause a small issue. If this happens, contact your webmaster.</p>
					
					<h4>Users</h4>
					<p>This is where you will add, remove, and generally manage the Back-end Users. These are the people who will be allowed to access the Back-end.</p>
					<p>Each user needs to be given a User Role. An explanation of the different roles can be found here: <a href="https://thethemefoundry.com/blog/wordpress-user-roles/" target="_blank">https://thethemefoundry.com/blog/wordpress-user-roles/</a></p>
					<p>I recommend that at your external Web Master and at least one Internal Member be given the Admin role. Others should be fine with just being Editors.</p>
					
					<h4>Options</h4>
					<p>The Options page is where you will edit anything on the site that is on all or nearly all pages. Usually, this is the header and footer and any text or images in them.</p>
					
				</section>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();


