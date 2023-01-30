  
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
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Minimise The Sum</center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/SWdTihDVuX4" target="_blank">Minimise The Sum</a></li>
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
							<h2 style="color:  #FF5733;">Codevita Problem 25 - <strong>Minimise The Sum</strong></h2>
							   <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Statement</strong>
								<br>
								Given an array of integers, perform atmost K operations so that the sum of elements of final array is minimum. An operation is defined as follows-
                                <br><br>
                                Consider any 1 element from the array, arr[i].
                                <br>
                                Replace arr[i] by floor(arr[i]/2).
                                <br>
                                Perform next operations on updated array.
                                <br>
                                The task is to minimize the sum after atmost K operations.
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
								1 <= N, K <= 10^5.
								<br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input Format</strong>
								<br>
								First line contains two integers N and K representing size of array and maximum numbers of operations that can be performed on the array respectively.
                                <br>
                                Second line contains N space separated integers denoting the elements of the array, arr.
                                <br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
								<br>
								Print a single integer denoting the minimum sum of the final array.
								<br><br>

                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Time Limit</strong>
								<br>
                                1
                                <br><br>

							</p>
						</div>
					  </div>
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						  <section class="about">
							  <div class="container">
								<div class="row no-gutters">
								  <div class="col-lg-5 video-box">
									<iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/SWdTihDVuX4"  allowfullscreen>
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
									4 3
                                    <br>
                                    20 7 5 4
									<br><br>

									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									17
                                    <br><br>

                                    <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Explanation</strong><br>
									Operation 1 -> Select 20. Replace it by 10.
                                    <br>
                                    New array = [10, 7, 5, 4]
                                    <br>
                                    Operation 2 -> Select 10. Replace it by 5.
                                    <br>
                                    New array = [5, 7, 5, 4].
                                    <br>
                                    Operation 3 -> Select 7. Replace it by 3.
                                    <br>
                                    New array = [5,3,5,4].
                                    <br>
                                    Sum = 17.
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
a,b = input().split()
lst = list(map(int,input().split()))

for i in range(int(b)) :
    maximum = max(lst)
    lst.remove(maximum)
    lst.append(maximum//2)

print(sum(lst))
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