  
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
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Swayamvar</center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/WGgJPisnNFA" target="_blank">Swayamvar</a></li>
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
							<h2 style="color:  #FF5733;">Codevita Problem 21 - <strong>Swayamvar</strong></h2>

							   <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Statement</strong>
								<br>
								A ceremony where a Bride chooses her Groom from an array of eligible bachelors is called Swayamvar. But this is a Swayamvar with difference. An array of Bride-to-be will choose from an array of Groom-to-be.
                                <br><br>
                                The arrangement at this Swayamvar is as follows
                               <br>
                                   * Brides-to-be are organized such that the most eligible bachelorette will get first chance to choose her Groom. Only then, the next most eligible bachelorette will get a chance to choose her Groom
                                   <br>
                                   * If the initial most eligible bachelorette does not get a Groom of her choice, none of the Brides-to-be have any chance at all to get married. So unless a senior bachelorette is out of the “queue”, the junior bachelorette does not get a chance to select her Groom-to-be
                                   <br>
                                   * Inital state of Grooms-to-be is such that most eligible bachelor is at the head of the “queue”. The next most eligible bachelor is next in the queue. So on and so forth
                                   <br>
                                   * Now everything hinges on the choice of the bachelorette. The most eligible bachelorette will now meet the most eligible bachelor.
                                   <br>
                                   * If bachelorette selects the bachelor, both, the bachelorette and the bachelor are now Bride and Groom respectively and will no longer be a part of the Swayamvar activity. Now, the next most eligible bachelorette will get a chance to choose her Groom. Her first option is the next most eligible bachelor (relative to initial state)
                                   <br>
                                   * If the most eligible bachelorette passes the most eligible bachelor, the most eligible bachelor now moves to the end of the queue. The next most eligible bachelor is now considered by the most eligible bachelorette. Selection or Passing over will have the same consequences as explained earlier.
                                   <br>
                                   * If most eligible bachelorette reaches the end of bachelor queue, then the Swayamvar is over. Nobody can get married.
                                   <br>
                                   * Given a mix of Selection or Passing over, different pairs will get formed.
                                   <br><br>
                                   The selection criteria is as follows
                                   <br>
                                   Each person either drinks rum or mojito. Bride will choose groom only if he drinks the same drink as her
                                   <br><br>
                                   Note : There are equal number of brides and grooms for the swayamvar.
Tyrion as the hand of the king wants to know how many pairs will be left unmatched. Can you help Tyrion?
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
								1<= N <= 10^4
								<br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input Format</strong>
								<br>
								First line contains one integer N, which denotes the number of brides and grooms taking part in the swayamvar.
                                <br>
                                Second line contains a string in lowercase, of length N containing initial state of brides-to-be
                                <br>
                                Third line contains a string in lowercase, of length N containing initial state of grooms-to-be. Each string contains only lowercase 'r' and 'm' stating person at that index drinks "rum"(for 'r') or mojito(for 'm').
                                <br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
								<br>
								Output a single integer denoting the number of pairs left unmatched.
								<br><br>
							</p>
						</div>
					  </div>
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						  <section class="about">
							  <div class="container">
								<div class="row no-gutters">
								  <div class="col-lg-5 video-box">
									<iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/WGgJPisnNFA"  allowfullscreen>
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
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Example 1:</strong>
                                <br><br>
                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input</strong><br>
                                4
                                <br>
                                rrmm
                                <br>
                                mrmr
                                <br><br>

                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
                                0
                                <br><br>

                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Explanation</strong><br>
                                The bride at first place will only marry groom who drinks rum. So the groom at first place will join the end of the queue. Updated groom's queue is "rmrm"
                                <br>
                                Now the bride at first place will marry the groom at first place. Updated bride's queue is "rmm" and groom's queue is "mrm"
                                <br>
                                The process continues and at last there are no pairs left. So answer is 0.
                                <br><br>
							</p>
                            <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Example 2:</strong>
                                <br><br>
                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input</strong><br>
                                4
                                <br>
                                rmrm
                                <br>
                                mmmr
                                <br><br>

                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
                                2
                                <br><br>

                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Explanation</strong><br>
                                Following the above process 2 pairs will be left unmatched. Remember that bride will not move until she gets a groom of her choice.
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
n = int(input())
f = input()
m = input()

cnt_r = m.count('r')
cnt_m = m.count('m')

lst1 = [i for i in f]

for i in f:
    if i == 'r':
        if cnt_r==0:
            print(len(lst1))
            break
        cnt_r -=1
        lst1.pop(0)

    elif i=='m':
        if cnt_m==0:
            print(len(lst1))
            break
        cnt_m -= 1
        lst1.pop(0)
else:
    print(0)
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