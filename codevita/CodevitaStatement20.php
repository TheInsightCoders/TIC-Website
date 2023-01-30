  
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
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Christmas Tree</center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/C_ISn5Ma8dY" target="_blank">Christmas Tree</a></li>
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
							<h2 style="color:  #FF5733;">Codevita Problem 20 - <strong>Christmas Tree</strong></h2>

							   <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Statement</strong>
								<br>
								Chirag is a pure Desi boy. And his one and only dream is to meet Santa Claus. He decided to decorate a Christmas tree for Santa on coming Christmas. Chirag made an interesting Christmas tree that grows day by day.
                                <br>
                                The Christmas tree is comprised of the following 1.Parts 2.Stand
                                <br>
                                Each Part is further comprised of Branches. Branches are comprised of Leaves.
                                <br>
                                How the tree appears as a function of days should be understood. Basis that print the tree as it appears on the given day. Below are the rules that govern how the tree appears on a given day. Write a program to generate such a Christmas tree whose input is number of days.
                                <br><br>
                                Rules:
                                <br>
                                If tree is one day old you cannot grow. Print a message "You cannot generate Christmas tree"
Tree will die after 20 days; it should give a message "Tree is no more"
Tree will have one part less than the number of days.
                                <br><br>
                                Example:
                                <br>
                                On 2nd day tree will have 1 part and one stand.
                                <br>
                                On 3rd day tree will have 2 parts and one stand
                                <br>
                                On 4th day tree will have 3 parts and one stand and so on
                                <br>
                                Top-most part will be the widest and bottom-most part will be the narrowest.
                                <br>
                                Difference in number of branches between top-most and second from top will be 2
                                <br>
                                Difference in number of branches between second from top and bottom-most part will be 1
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
								0 <= N <= 20
								<br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input Format</strong>
								<br>
								First line of input contains number of days denoted by N
                                <br>
                                <br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
								<br>
								Print Christmas Tree for given N
                                <br>
                                OR
                                <br>
                                Print "You cannot generate Christmas tree" if N <= 1
                                <br>
                                OR
                                <br>
                                Print "Tree is no more" if N > 20
								<br><br>
							</p>
						</div>
					  </div>
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						  <section class="about">
							  <div class="container">
								<div class="row no-gutters">
								  <div class="col-lg-5 video-box">
									<iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/C_ISn5Ma8dY"  allowfullscreen>
									</iframe>
								  </div>
								</div>
							  </div>
						  </section>
					  </div>
					</div>
				</div>
			</section>		
          <!--<section class="counts section-bg">-->
				<!--<div class="container">-->
					<!--<div class="row">-->
					  <!--<div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">-->
						<!--<div class="count-box">-->
							<!--<p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">-->
								<!--<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Example:</strong>-->
									<!--<br><br>-->
									<!--<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input</strong><br>-->
									<!--5-->
                                    <!--<br>-->
                                    <!--7-->
                                    <!--<br>-->
                                    <!--3-->
                                    <!--<br>-->
                                    <!--4-->
									<!--<br><br>-->

									<!--<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>-->
									<!--24-->
                                <!--<br><br>-->
							<!--</p>-->
						<!--</div>-->
					  <!--</div>-->
					<!--</div>-->
				<!--</div>-->
			<!--</section>	-->
			<!-- End Statement Section -- >

			<!-- Code Section -->
			<br><br>
			<section class="counts section-bg">
				<div class="container">
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#python">Python</a></li>
                        <li><a data-toggle="tab" href="#c">C</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
l = 0
space = 0
N = int(input())

def christmas_tree(a, N):
    global space
    for row in range(a, N + 1):
        # Blank Space
        for sp in range(1, N + space - row + 1):
            print(" ", end='')
        # Star Printing
        for Stars in range(1, 2 * row):
            print("*", end='')
        print()
    space += 1

if (N <= 1):
    print("You cannot generate Christmas tree")
elif (N > 20):
    print("The Tree is no More")
else:
    # First One pyramid
    christmas_tree(1, N + 1)
    # Others pyramid (Branches)
    for i in range(2, N ):
        christmas_tree(2, N - l)
        l += 1

    # Stand of the Tree
    print(' ' * N + '*')
    print(' ' * N + '*')
</code>
</pre>
						</div>

                        <div id="c" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
int gap;
void christmas_tree(int,int);
int main()
{
	int N,i,l=0;
	scanf("%d",&N);

	if(N<=1)
		printf("\nYou cannot generate Christmas tree");
	else if(N>20)
		printf("\nThe Tree is no More\n");
	else
	{	// First One pyramid
		christmas_tree(1,N+1);
		// Others
		for(i=2;i < N;i++,l++)
			christmas_tree(2,N-l);

		//Stand of the Tree
		 for( i=0;i<=gap;i++)
		    printf(" ");
		 printf("*\n");

		 for( i=0;i<=gap;i++)
		    printf(" ");
		 printf("*");
	}
	return 0;
}
void christmas_tree(int a,int N)
{
    int row,Sp,Stars;
    static int space=0;
    for(row=a; row<=N; row++)
	{
		// Blank Spaces
	    for(Sp=1;Sp<=N+space-row;Sp++)
	      printf(" ");

	    // Stars Printing
	    for(Stars=1;Stars<=2*row-1;Stars++)
	      printf("*");

	    printf("\n");
	}
    space++;
    gap=space;
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