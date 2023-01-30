  
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
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Chakravyuha</center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/fDlTnVNMveQ" target="_blank">Chakravyuha</a></li>
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
							<h2 style="color:  #FF5733;">Codevita Problem 19 - <strong>Chakravyuha</strong></h2>

							   <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Statement</strong>
								<br>
								During the battle of Mahabharat, when Arjuna was far away in the battlefield, Guru Drona made a Chakravyuha formation of the Kaurava army to capture Yudhisthir Maharaj. Abhimanyu, young son of Arjuna was the only one amongst the remaining Pandava army who knew how to crack the Chakravyuha. He took it upon himself to take the battle to the enemies.
                                <br><br>
                                Abhimanyu knew how to get power points when cracking the Chakravyuha. So great was his prowess that rest of the Pandava army could not keep pace with his advances. Worried at the rest of the army falling behind, Yudhisthir Maharaj needs your help to track of Abhimanyu's advances. Write a program that tracks how many power points Abhimanyu has collected and also uncover his trail .
								<br><br>
                                A Chakravyuha has a very well-defined co-ordinate system. Each point on the co-ordinate system is manned by a certain unit of the army. The Commander-In-Chief is always located at the center of the army to better co-ordinate his forces. The only way to crack the Chakravyuha is to defeat the units in sequential order.
                                <br>
                                A Sequential order of units differs structurally based on the radius of the Chakra. The radius can be thought of as length or breadth of the matrix depicted above. The structure i.e. placement of units in sequential order is as shown below
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
								1 <= N <= 100
								<br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input Format</strong>
								<br>
								First line of input will be length as well as breadth of the army units, say N
                                <br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
								<br>
								Print NxN matrix depicting the placement of army units, with unit numbers delimited by (\t) Tab character
                                <br>
                                Print Total power points collected
                                <br>
                                Print coordinates of power points collected in sequential fashion (one per line)
								<br><br>
							</p>
						</div>
					  </div>
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						  <section class="about">
							  <div class="container">
								<div class="row no-gutters">
								  <div class="col-lg-5 video-box">
									<iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/fDlTnVNMveQ"  allowfullscreen>
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
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Example1:</strong>
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input</strong><br>
									2
									<br><br>

									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									1   2
                                    <br>
                                    4   3
                                    <br>
                                    Total Power points : 1
                                    <br>
                                    (0,0)
                                <br><br>
							</p>
                            <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Example2:</strong>
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input</strong><br>
									5
									<br><br>

									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									1       2      3      4       51   2
                                    <br>
                                    16    17    18    19     6
                                    <br>
                                    15    24    25    20     7
                                    <br>
                                    14    23    22    21     8
                                    <br>
                                    13    12    11    10     9
                                    <br>
                                    Total Power points : 3
                                    <br>
                                    (0,0)
                                    <br>
                                    (4,2)
                                    <br>
                                    (3,2)
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
                        <li class="active"><a data-toggle="tab" href="#c">C</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="c" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
int isDivby11(int);

int main(){

    int n;
    scanf("%d",&n);

    //check contraint
    if(n<=0 || n>100){
        return 0;
    }

    int a[100][100]; // matrix to store number
    int b[20][20];   // Matrix for power point
    int counter=1;  // store the number in rectangular spiral

    int i,j,x = 1; //incices of arrays

    int w;   // w - window

    int size=n-1; // size - size of window

    int no_div = (n*n)/11 + 1 ; // no of divisibles by 11

    for( w = 0 ; w < n / 2 ; w++){
        i = w;
        j = w;

        //move right
        for( j = j ; j < size + w ; j++){

            a[ i ][ j ] = counter;
            counter++;

            if(isDivby11( a[i][j] )){
                b[x][0]=i;
                b[x][1]=j;
                x++;
            }
        }

        //move down
        for( i = i ; i < size + w ; i++){

            a[ i ][ j ] = counter;
            counter++;

            if(isDivby11( a[i][j] )){
                b[x][0]=i;
                b[x][1]=j;
                x++;
            }
        }

        //move left
        for( j = j ; j > w ; j--){
            a[ i ][ j ] = counter;
            counter++;

            if(isDivby11( a[i][j] )){
                b[x][0]=i;
                b[x][1]=j;
                x++;
            }
        }

        //move up
        for( i = i ; i > w ; i--){

            a[ i ][ j ] = counter;
            counter++;

            	if(isDivby11( a[i][j] )){
                b[x][0]=i;
                b[x][1]=j;
                x++;
            }
        }
        size = size-2;
    }

    // if value of n is odd
    if( n % 2 != 0){
        a[w][w] = counter;
    }

    //print number in rectangular spiral (Chakarvyuha)
    for( i = 0 ; i < n ; i++){
        for( j = 0 ; j < n ; j++){
            printf("%d\t", a[i][j]);
        }
        printf("\n");
    }

    printf("Total Power points : %d\n",no_div);

    printf("(0,0)\n");
    int k;
    for (k=1; k < x; k++)
	{
		printf("(%d,%d)\n", b[k][0], b[k][1]);
	 }
    return 0;
}

int isDivby11(int z){
    if( z % 11 == 0 ){
        return 1;
    }
    else{
        return 0;
    }
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