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
            <img src="../assets/img/Codevita/TCSCodeVita2020.png" style="margin-left:5px;" alt="" height="400" width="1105">
          </div>

          <div class="portfolio-info">
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Fibonacci Series</center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python, Java, C++, C</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/5E_RAclcqRs" target="_blank">Fibonacci Series</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<br><br>
			<section class="counts section-bg">
				<div class="container">
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#python">Python</a></li>
                        <li><a data-toggle="tab" href="#c">C</a></li>
						<li><a data-toggle="tab" href="#cpp">C++</a></li>
                        <li><a data-toggle="tab" href="#java">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
def Fibonacci(n):	
    num1 = 0
    num2 = 1

    if (n < 1):
        return

    print(num1, num2, end=' ')

    for i in range(2, n):
        sum = num1 + num2
        num1 = num2
        num2 = sum
        print(num2, end=' ')

num = int(input("Enter the number: "))
Fibonacci(num)
</code>
</pre>
						</div>
						<div id="c" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include &lt;stdio.h&gt;

void printFibonacciNumbers(int n) 
{ 
	int num1 = 0, num2 = 1, i; 

	if (n < 1) 
		return; 
	
	printf("%d %d ", num1, num2);
	
	for (i = 3; i <= n; i++) 
	{ 
		int sum = num1 + num2; 
		num1 = num2; 
		num2 = sum; 
		printf("%d ", num2); 
	} 
} 

int main() 
{   
	int num;
	printf("Enter the number: ");
	scanf("%d",&num);
	printFibonacciNumbers(num); 
	return 0; 
} 
</code>
</pre>
                            </div>
                            <div id="cpp" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include &lt;bits/stdc++.h&gt; 
using namespace std; 

void printFibonacciNumbers(int n) 
{ 
	int num1 = 0, num2 = 1, i; 

	if (n < 1) 
		return; 
	
	cout<< num1 << " " << num2 << " "; 
	
	for (i = 3; i <= n; i++) 
	{ 
		int sum = num1 + num2; 
		num1 = num2; 
		num2 = sum; 
		cout << num2 << " "; 
	} 
} 

int main() 
{ 
	int num;
	cout << "Enter the number: ";
	cin >> num;	
	printFibonacciNumbers(num); 
	return 0; 
} 

</code>
</pre>
                            </div>
                            <div id="java" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class FibonacciSeries
{ 
	static void printFibonacciNumbers(int n) 
	{ 
		int num1 = 0, num2 = 1, i; 
	
		if (n < 1) 
			return; 
		
		System.out.print(num1+" "+num2+" "); 
		for (i = 3; i <= n; i++) 
		{ 			
			int sum= num1 + num2; 
			num1 = num2; 
			num2 = sum;
			System.out.print(num2+" ");  
		} 
	} 
	
	public static void main(String[] args) 
	{ 
		printFibonacciNumbers(7); 
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
	  <section class="counts section-bg">
				<div class="container">
					<div class="row">
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						  <section class="about">
							  <div class="container">
								<div class="row no-gutters">
								  <div class="col-lg-12 video-box">
									<iframe style="margin-top:8px; margin-left: 250px" width="650" height="400" src="https://www.youtube.com/embed/5E_RAclcqRs"  allowfullscreen>
									</iframe>
								  </div>
								</div>
							  </div>
						  </section>
					  </div>
					</div>
				</div>
			</section>
    </section><!-- End Introduction Section -->
	

  <!-- ======= Footer Section ======= -->
  <?php
    include "../includes/footer.php";
  ?>
  <!----------------------------------->