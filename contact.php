<?php
/**
 * 
 * A simple website for Life Restorers
 * 
 * @author: Que Brand Media
 * 
 */

/** Page Title */
$title = "Contact Us";

/** Load Configurations */
require_once("config.php");

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST[''])) {
	/**
	 *
	 * Get posted information
	 *
	 */
	$to   = "info@liferestorers.org";
	$sbj  = "Website Contact Message";
	$msg  = $_POST['contact_msg'];
	$name = $_POST['contact_name'];
	$from = $_POST['contact_email'];

	/** Send email */
	$mail = mail($to, $sbj, $msg);

	if($mail) {
		header("Location: /errandscall/");
		exit();
	}
}

include("includes/header.php");
?>

    <div id="about" class="content">
        <div class="container">
            <div class="col col-6">
                <h2>Contact</h2>
                <p>Alternatively, you can use the contact form on the right to get in touch.</p>
            </div><!-- end of .col -->
            <div class="col col-6">
        <form name="contactform" id="contactform" method="POST">
					<div class="row form-group">
						<div class="col col-half">
							<label for="contact_forename">First Name<br/>
							<input type="text" name="contact_forename" class="form-control" id="contact_forename"></label>
							</label>
						</div>
						<div class="col col-half">
							<label for="contact_forename">Last Name<br/>
							<input type="text" name="contact_forename" class="form-control" id="contact_forename"></label>
							</label>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-12">
							<label for="contact_forename">Email Addess<br/>
							<input type="email" name="contact_email" class="form-control" id="contact_forename"></label>
							</label>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-12">
							<label for="contact_forename">Enquiry<br/>
							<select class="form-control">
								<option selected disabled>-- Select an option --</option>
								<option value="general">General</option>
								<option value="partnership">Partnership</option>
							</select>
							</label>
							</label>
						</div>
					</div>
					<div class="row form-group">
						<div class="col col-12">
							<label for="contact_forename">Message<br/>
							<textarea name="contact_message" class="form-control" id="contact_forename"></textarea></label>
							</label>
						</div>
					</div>
					<div class="row form-group">
						<input type="submit" name="submit" class="btn btn-primary" value="Submit">
					</div>
				</form>
            </div><!-- end of .col -->
        </div><!-- end of .container -->
    </div><!-- end of .content -->
<?php
include("includes/footer.php");