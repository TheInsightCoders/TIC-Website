  
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
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Constellation </center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/6ECZK-lEA80" target="_blank">Constellation</a></li>
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
							<h2 style="color:  #FF5733;">Codevita Problem 24 - <strong>Constellation </strong></h2>

							   <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Statement</strong>
								<br>
								Three characters { #, *, . } represents a constellation of stars and galaxies in space. Each galaxy is demarcated by # characters. There can be one or many stars in a given galaxy. Stars can only be in shape of vowels { A, E, I, O, U } . A collection of * in the shape of the vowels is a star. A star is contained in a 3x3 block. Stars cannot be overlapping. The dot(.) character denotes empty space.
                                <br><br>
                                Given 3xN matrix comprising of { #, *, . } character, find the galaxy and stars within them.
                                <br><br>
                                Note: Please pay attention to how vowel A is denoted in a 3x3 block in the examples section below.
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
								3 <= N <= 10^5
								<br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input Format</strong>
								<br>
								Input consists of single integer N denoting number of columns.
                                <br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
								<br>
								Output contains vowels (stars) in order of their occurrence within the given galaxy. Galaxy itself is represented by # character.
                                <br><br>

                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
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
									<iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/6ECZK-lEA80"  allowfullscreen>
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
									18
                                    <br>
                                    * . * # * * * # * * * # * * * . * .
                                    <br>
                                    * . * # * . * # . * . # * * * * * *
                                    <br>
                                    * * * # * * * # * * * # * * * * . *
									<br><br>

									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									U#O#I#EA

                                    <br><br>
                                    <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Explanation</strong><br>
                                    As it can be seen that the stars make the image of the alphabets U, O, I, E and A respectively.
                                <br><br>
							</p>
                            <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Example 2:</strong>
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input</strong><br>
									12
                                    <br>
                                    * . * # . * * * # . * .
                                    <br>
                                    * . * # . . * . # * * *
                                    <br>
                                    * * * # . * * * # * . *
									<br><br>

									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									U#I#A

                                    <br><br>
                                    <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Explanation</strong><br>
                                    As it can be seen that the stars make the image of the alphabet U, I and A.
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
                        <li class="active"><a data-toggle="tab" href="#python">C++</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
#include&lt;bits/stdc++.h&gt;
using namespace std;
int main()
{
    ios_base::sync_with_stdio(false);
    cin.tie(NULL);
    int n;
    cin>>n;
    char array[3][n];
    for(int i=0;i<3;i++)
    {
        for(int j=0;j< n;j++)
        {
            cin>>array[i][j];
        }
    }
    string result="";
    for(int j=0;j< n;j++)
    {

        if(array[1][j]=='#')
        {
            result+="#";
            continue;
        }

        else if(array[0][j]=='.' && array[1][j]=='.' && array[2][j]=='.')
        {
            result+="";
            continue;
        }

        else if(array[1][j]=='.'&& array[1][j+1]=='*' && array[1][j+2]=='.')
        {
            result+="I";
            j=j+2;
            continue;
        }

        else if(array[1][j]=='*'&& array[1][j+1]=='.' && array[1][j+2]=='*')
        {
            if(array[0][j+1]=='.')
            result+="U";
            else
            result+="O";
            j=j+2;
            continue;
        }

        else if(array[0][j]=='.'&& array[0][j+1]=='*' && array[0][j+2]=='.')
        {
            result+="A";
            j=j+2;
            continue;
        }
        else
        {
            result+="E";
            j=j+2;
            continue;
        }
    }

    cout<< result;

    return 0;
}
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