  
  <!-- ======= Header Section ======= -->
  <?php
    include "../includes/header.php";
  ?>
  <!----------------------------------->


  <main id="main">	
    <!-- ======= Introduction Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div>
            <img src="../assets/img/Codevita/TCSCodeVita2020.png" style="margin-left:5px; height:auto; width:100%" alt="">
          </div>

          <div class="portfolio-info">
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Digit Pairs</center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/hNThqyszWLk" target="_blank">Digit Pairs</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
		   <!-- Statement Section -->	
		   <section class="counts section-bg">
				<div class="container">
					<div class="row">
					  <div class="col-lg-12 col-md-3 text-left" data-aos="fade-up">
						<div class="count-box">
							<h2 style="color:  #FF5733;">Codevita Problem 22 - <strong>Digit Pairs</strong></h2>

							   <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Statement</strong>
								<br>
								You are a teacher in reputed school. During Celebration Day you were assigned a task to distribute Cadbury such that maximum children get the chocolate. You have  a box full of Cadbury with different width and height. You can only distribute largest square shape Cadbury.
                                <br>
                                So if you have a Cadbury of length 10 and width 5, then you need to break Cadbury in 5*5 square and distribute to first child and then remaining 5*5 square and distribute to first child and then remaining 5*5 to next in  queue
								<br><br>
						</div>
					  </div>
					</div>
				</div>
			</section>		
			<section class="counts section-bg">
				<div class="container">
					<div class="row">
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						<div class="count-box">
							<p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Constraints</strong>
								<br>
								0 < P < Q < 1501
								<br>
                                0 < R < S < 1501
								<br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input Format</strong>
								<br>
								The first line contains an Integer P that denotes minimum length of cadbury in the box
                                <br>
                                The second line contains integer Q that denotes maximum length of cadbury in the box
                                <br>
                                Third line contains an integer R that denotes minimum width of cadbury in the box
                                <br>
                                Fourth line contains an integer S that denotes maximum width of cadbury in the box
                                <br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
								<br>
								Print total number of children who will get chocolate
								<br><br>
							</p>
						</div>
					  </div>
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						  <section class="about">
							  <div class="container">
								<div class="row no-gutters">
								  <div class="col-lg-5 video-box">
									<iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/hNThqyszWLk"  allowfullscreen>
									</iframe>
								  </div>
								</div>
							  </div>
						  </section>
					  </div>
					</div>
				</div>
			</section>		
          <section class="counts section-bg">
				<div class="container">
					<div class="row">
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						<div class="count-box">
							<p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Example:</strong>
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input</strong><br>
									5
                                    <br>
                                    7
                                    <br>
                                    3
                                    <br>
                                    4
									<br><br>

									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									24
                                <br><br>
							</p>
						</div>
					  </div>
					</div>
				</div>
			</section>	
			<!-- End Statement Section -- >

			<!-- Code Section -->
			<br><br>
			<section class="counts section-bg">
				<div class="container">
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#python">Python</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
def count(a,b):
	minimum = min(a,b)
	maximum = max(a,b)

	i = (minimum,maximum)
	if i in D:
		return D[i]

	if minimum == 0:
		return 0
	if minimum == 1:
		return a*b

	chocolate = maximum // minimum
	new_side = maximum % minimum

	chocolate += count(new_side,minimum)

	D[i] = chocolate

	return chocolate

# Driver Code
D = {}
p  = int(input())
q  = int(input())
r  = int(input())
s  = int(input())

ans = 0

for i in range(p,q+1):
	for j in range(r,s+1):
		ans += count(i,j)

print(ans)
</code>
</pre>
						</div>
                      </div>
            </div>
        </section><!-- End Code Section -->
			
		  </p>
        </div>
      </div>
    </section><!-- End Introduction Section -->

  <!-- ======= Footer Section ======= -->
  <?php
    include "../includes/footer.php";
  ?>
  <!----------------------------------->