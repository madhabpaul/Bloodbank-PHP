<?php 
	include('header.php');
	
# Total Registration
$sql_registration = "SELECT * FROM registration";
$res_registration = mysqli_query($con,$sql_registration);
$res_reg_count = mysqli_num_rows($res_registration);

# Total Camps
$sql_camps = "SELECT * FROM camps";
$res_camps = mysqli_query($con,$sql_camps);
$res_camps_count = mysqli_num_rows($res_camps);

# Total Blood Request
$sql_blood_req = "SELECT * FROM request";
$res_blood_req = mysqli_query($con,$sql_blood_req);
$res_blood_req_count = mysqli_num_rows($res_blood_req);

# Total Blood Donation
$sql_blood_dona = "SELECT * FROM donation";
$res_blood_dona = mysqli_query($con,$sql_blood_dona);
$res_blood_dona_count = mysqli_num_rows($res_blood_dona);


?>

<div class="container-fluid" style="margin-top: 50px;">
    <div class="row">
	    <div class="col-1">
        <div >
            <img src="images/topright.png" height="260px" width="200px" alt="">
        </div>
        <br>
        <div class="card bg-dark text-center " style="margin-right: -100px;">
            <div class="card-text" style="font-weight: bold; font-size: 2rem; display: block; line-height: 1; margin: 1rem auto; color: white ">
                <span>Recent Photos<span>
            </div>
        </div>
            <marquee direction="up" scrolldelay="300" style="height:670px; margin-right: -95px; margin-left:2px">
                <p><img src="images/slider1.jpg" alt=""></p>
                <p><img src="images/slider2.jpg"  alt=""></p>
                <p><img src="images/slider3.jpg"  alt=""></p>
                <p><img src="images/slider4.jpg"  alt=""></p>
                <p><img src="images/slider5.jpg"  alt=""></p>
                <p><img src="images/slider6.jpg"  alt=""></p>
                <p><img src="images/slider7.jpg"  alt=""></p>
                <p><img src="images/slider8.jpg"  alt=""></p>
            </marquee>
		</div>
        <div class="col-9" style="padding-left: 100px;">
			<div class="jumbotron" style="background: transparent; border: none;">
                		
				<p>Blood is universally recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. More than 29 million units of blood components are transfused every year.
				Donate Blood 	
				Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility.

				We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.</p>
			</div>
            
            <div class="row" style="color: white">
                <div class="col-sm-6">
                    <div class="card bg-info">
                        <div class="card-body text-center">
                            <h5 class="card-title">Total Registered Users</h5>
                            <hr>
                            <div class="card-text" style="font-weight: bold; font-size: 2.5rem; display: block; line-height: 1; margin: 1rem auto; color: white ">
                                <span><?php echo $res_reg_count ?><span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card bg-info">
                        <div class="card-body text-center">
                            <h5 class="card-title">Total Camps organised</h5>
                            <hr>
                            <div class="card-text" style="font-weight: bold; font-size: 2.5rem; display: block; line-height: 1; margin: 1rem auto; color: white">
                                <span><?php echo $res_camps_count ?><span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-5 mb-5">
                    <div class="card bg-info">
                        <div class="card-body text-center">
                            <h5 class="card-title">Total Blood Requests</h5>
                            <hr>
                            <div class="card-text" style="font-weight: bold; font-size: 2.5rem; display: block; line-height: 1; margin: 1rem auto; color: white">
                                <span><?php echo $res_blood_req_count ?><span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-5 mb-5">
                    <div class="card bg-info">
                        <div class="card-body text-center">
                            <h5 class="card-title">Total Blood Donation</h5>
                            <hr>
                            <div class="card-text" style="font-weight: bold; font-size: 2.5rem; display: block; line-height: 1; margin: 1rem auto; color: white">
                                <span><?php echo $res_blood_dona_count ?><span>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="jumbotron" style="background: transparent; border: none;">
					<h4>Blood bank</h4>
					<p>We welcome you to in our WebSite. If you are a donor , We appreciate you to join our blood donation camp nearest to you. If you need blood we are happy to serve you. Kindly visit our request page hosted by <a href="request.php" style="color: white;">www.lifesaver.com</a> on behalf of "Life Saver Blood Bank"</p>
					<p>As a public service without any profit motive.This is a free service. While the Organisers have taken all steps to obtain accurate and up-to-date information of potential blood donors,
					the Organisers and ICM Computers do not guarantee accuracy of the information contained herein or the suitability of the persons listed as any liability for direct or consequential damage to any person using this blood donor list including
					loss of life or damage due to infection of any nature arising out of blood transfusion from persons whose names have been listed in this website.
					We request donors to update contact details regularly.</p>
            	</div>
            </div>
        </div>

        <div class="col-2 ">
            <div class="card bg-dark">
                <div class="card-text " style="font-weight: bold; font-size: 1.5rem; display: block; line-height: 1; margin: 1rem auto; color:white">
                    <span>LATEST NEWS<span>
                </div>
            </div>
            <div class="sidebar" >
                <marquee direction="up" scrolldelay="300" style="height:1000px;">
                    <table>
                        <tr>
                            <td>
                                <div class="blog_desc">
                                    <div class="blog_heading">
                                        <span style="font-weight:bold"><b>Collection of blood plasma from patients starts in Assam</b>
                                            <p>GUWAHATI: With Guwahati witnessing sharp increase COVID-19 cases, collection of blood plasma from patients who have been cured of COVID 19 have started at the Guwahati Medical College and hospital (GMCH).The first plasma donor is a doctor of GMCH. Assam health minister, Himanta Biswa Sarma tweeted, “Glad to share that we've started a #PlasmaBank at GMCH. The first convalescent donor is a doctor himself, a #COVID19 patient. My gratitude to Dr Lithikesh for donating his plasma, and to the team who is working on this bank. I encourage cured patients to come forward & donate.”</p>
                                        </span>
                                    </div>
                                    <br>
                                    <span style="font-weight:bold"><b>Blood type may affect COVID-19 outcomes, study shows</b>
                                        <p>Blood type may play a key role in determining who contracts COVID-19 and how severe the illness becomes, according to a recent report published in the New England Journal of Medicine (NEJM).“Our genetic data confirm that blood group O is associated with a risk of acquiring Covid-19 that was lower than that in non-O blood groups, whereas blood group A was associated with a higher risk than non-A blood groups,” researchers concluded.</p>
                                    </span>
                                    <span style="font-weight:bold"><b>People with blood type O at lower risk of COVID-19: Recent studies</b>
                                        <p>London: People with blood type O may have a lower risk of infection from the SARS-CoV-2 virus, that causes Covid-19, and reduced likelihood of severe outcomes, including organ complications, if they develop the disease, two new studies suggest. The studies, published in the journal Blood Advances on Wednesday, add evidence that there may be an association between blood type and vulnerability to Covid-19. However, the researchers noted that more studies are needed to better understand why and what it means for patients.</p>
                                    </span>
                                    <span style="font-weight:bold"><b>Doctor Becomes First Donor As Assam Opens Plasma Bank For COVID-19 Treatment</b>
                                        <p>Amid rise in COVID-19 cases in the state, especially in Guwahati where a total lockdown has been imposed for two weeks, a plasma bank has been started at the Guwahati Medical College (GMC) for collection of blood plasma from patients who have been cured of the disease.</p>
										<p>The Assam government is trying to add at least 3,000 coronavirus treatment beds by next week and has also asked private hospitals to start preparations for COVID-19 treatment.</p>
									</span>
                                </div>
                            </td>
                        </tr>
                    </table>
                </marquee>
            </div>
        </div>
		<div class="col-2">
		<div>
    </div>
</div>


<?php
    include('footer.php');
?>