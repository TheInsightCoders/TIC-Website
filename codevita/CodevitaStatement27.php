  
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
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Maximum Prize</center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/_qXV2KYH63w" target="_blank">Maximum Prize</a></li>
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
							<h2 style="color:  #FF5733;">Codevita Problem 27 - <strong>Maximum Prize</strong></h2>

							   <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Statement</strong>
								<br>
								Imagine you are a martial arts fighter fighting with fellow martial artists to win prize money. However unlike traditional competitions, here you have the opportunity to pick and choose your opponent to maximize your prize kitty. The rules of maximization of prize kitty are as follows
                                <br><br>
                                You have a superpower bestowed upon you, that you will win against anyone you challenge
                                   <br>
                                   You have to choose the right order because unfortunately the superpower does not ensure that your prize money is always the highest
                                   <br>
                                   Every victory against an opponent that you challenge and win against, will translate into a certain winning sum
                                   <br>
                                   Here begins the technical part that you need to know in order to maximize your winning prize money
                                   <br><br>
                                   All your opponents are standing in one line next to each other i.e. the order of opponents is fixed
                                   <br>
                                   Your first task is to choose a suitable opponent from this line
                                   <br>
                                   When you choose one opponent from that line, he steps out of the line and fights you.
                                   <br>
                                   After you beat him, you get to decide how your prize money for winning against him will be calculated
                                   <br>
                                   Essentially, if the opponent you have beaten has two neighbours, then you have the option to multiply the opponent number with any one of the two neighbours and add the other opponent number. That value becomes your prize money for that match
                                   <br>
                                    If your opponent has only one neighbor then your prize money for that match is product of current opponent number with neighbours' opponent number
                                   <br>
                                   When dealing with last opponent in the tournament, your prize money is equal to the value of the last opponent number
                                   <br>
                                   As the tournament proceeds, the opponent that you have beaten has to leave the tournament
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
								1 <= N <= 500
								<br>
                                0 <= individual coin count < 100
								<br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input Format</strong>
								<br>
								First line contains an integer N which denotes the number of opponents in the tournament
                                <br>
                                Second line contains N space separated integers, which are the opponent numbers of other opponents
                                <br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
								<br>
								Print the maximum number of coins you can win
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
									<iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/_qXV2KYH63w"  allowfullscreen>
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
									4
                                    <br>
                                    2 5 6 7
									<br><br>

									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									105
                                <br><br>
							</p>
                            <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Example:</strong>
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input</strong><br>
									3
                                    <br>
                                    7 8 9
									<br><br>

									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									151
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
sum = 0
if n==0:
    print(sum)
    exit()
else:
    a=list(map(int, input().split()))
if n<3:
    if n== 1:
        sum = a[0]
    else:
        sum = sum + (a[0]*a[1])+max(a)
else:
    Max = max(a)
    i = a.index(Max)

    if Max == a[0]:
        b= []
    else:
        b = a[:i+1]

    if Max == a[-1]:
        c= []
    else:
        c = a[i:]

    if len(b)!=0:
        while i-1>0:
            sum = sum + ((b[i - 1] * b[i ]) + b[i - 2])
            b[i - 1] = b[i]
            b[i] = '\0'
            i-=1
        sum = sum + (b[1] * b[0])
    if len(c)==0:
        b[0] = b[1]
        b[1] = '\0'
        sum = sum + Max

    if len(c)!=0:
        c = c[::-1]
        Max1 = c[-1]
        k = c.index(Max1)
        while k-1 > 0:
            sum = sum + ((c[k - 1] * c[k ]) + c[k - 2])
            c[k - 1] = c[k]
            c[k] = '\0'
            k-=1
        sum = sum + (c[1] * c[0])
        c[0] = c[1];c[1] = '\0';
        sum = sum + Max1
print(sum)
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