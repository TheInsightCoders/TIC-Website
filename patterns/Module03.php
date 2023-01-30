<?php
include "../includes/header.php";
?>


  <main id="main">	
    <!-- ======= Introduction Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <!-- Head Introduction -->
        <div class="portfolio-details-container">

          <div>
            <img src="../assets/img/pattern/pattern.png" style="margin-left:5px; height:auto; width:100%" alt="">
          </div>

          <div class="portfolio-info">
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Patterns</center></strong></h3>
            <ul>
              <li style="font-size:22px; color: #ff7000; text-align:center;"><strong>Module 3</strong></li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Language</strong>: Python, Java, C</li>
              <li style="font-size:18px;"><strong>Difficulty Level</strong>: Easy</li>
            </ul>
          </div>

        </div>
        <!-- End Head Introduction -->

          <br><br><br>
<!-- //////////////////////////// Pattern 24 ///////////////////////// -->
    <section id="about" class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 24</u></h2>
                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:right; width:70%; margin-left:0px;">
            *<br>
         *  *<br>
      *  *  *<br>
   *  *  *  *<br>
*  *  *  *  *
    </div>
</strong>
                            </code>
            </div>
          </div>

        <div class="row no-gutters">
          <div class="col-lg-12 video-box">
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/ENtPRg9zbaI"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python24">Python</a></li>
                        <li><a data-toggle="tab" href="#c24">C</a></li>
                        <li><a data-toggle="tab" href="#java24">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python24" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4'; width:100%">
<code>
n = 5
for i in range(1,n+1):
    for j in range(1, n-i+1):
        print(end=" ")
    for k in range(1, i+1):
        print("*", end = '')
    print()
</code>
</pre>
						</div>
						<div id="c24" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j,k;
	for(i = 1; i <= 5; i++){
		for(j = 5; j >= i+1; j--){
			printf(" ");
		}
		for(k = 1; k <= i; k++){
			printf("*");
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java24" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern24{
	public static void main(String args[]){
		for(int i = 1; i <= 5; i++) {
       			for(int j = 5; j >= i+1; j--){
		              		System.out.print(" ");
			}
			for(int k = 1; k <= i; k++){
		              		System.out.print("*");
			}
			System.out.println("");
		}

	}
}
</code>
</pre>
                        </div>
                      </div>

        </section>
        </div><!-- End Code Section -->

      </div>
    </section>
        <!-- End Pattern 24 -->

<!-- //////////////////////////// Pattern 25 ///////////////////////// -->
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 25</u></h2>
                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:right; width:70%; margin-left:0px;">
            1<br>
         2  2<br>
      3  3  3<br>
   4  4  4  4<br>
5  5  5  5  5
    </div>
</strong>
                            </code>
            </div>
          </div>

        <div class="row no-gutters">
          <div class="col-lg-12 video-box">
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/ENtPRg9zbaI"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python25">Python</a></li>
                        <li><a data-toggle="tab" href="#c25">C</a></li>
                        <li><a data-toggle="tab" href="#java25">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python25" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4'; width:100%">
<code>
for i in range(1,6):
    for j in range(5, i, -1):
        print(end=" ")      # printing blank spaces
    for k in range(1, i+1):
        print(i, end = '')  # printing i
    print()                 # change line
</code>
</pre>
						</div>
						<div id="c25" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h>&gt;
main(){
	int i,j,k;
	for(i = 1; i <= 5; i++){
		for(j = 5; j >= i+1; j--){
			printf(" ");
		}
		for(k = 1; k <= i; k++){
			printf("%d",i);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java25" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern25{
	public static void main(String args[]){
		for(int i = 1; i <= 5; i++) {
       			for(int j = 5; j >= i+1; j--){
		              		System.out.print(" ");
			}
			for(int k = 1; k <= i; k++){
		              		System.out.print(i);
			}
			System.out.println("");
		}
	}
}
</code>
</pre>
                        </div>
                      </div>

        </section>
        </div><!-- End Code Section -->

      </div>
    </section>
        <!-- End Pattern 25 -->

<!-- //////////////////////////// Pattern 26 ///////////////////////// -->
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 26</u></h2>
                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:right; width:70%; margin-left:0px;">
            1<br>
         1  2<br>
      1  2  3<br>
   1  2  3  4<br>
1  2  3  4  5
    </div>
</strong>
                            </code>
            </div>
          </div>

        <div class="row no-gutters">
          <div class="col-lg-12 video-box">
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/ENtPRg9zbaI"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python26">Python</a></li>
                        <li><a data-toggle="tab" href="#c26">C</a></li>
                        <li><a data-toggle="tab" href="#java26">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python26" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4'; width:100%">
<code>
for i in range(1,6):
    for j in range(5, i, -1):
        print(end=" ")      # printing blank spaces
    for k in range(1, i+1):
        print(k, end = '')  # printing k
    print()                 # change line
</code>
</pre>
						</div>
						<div id="c26" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h>&gt;
main(){
	int i,j,k;
	for(i = 1; i <= 5; i++){
		for(j = 5; j >= i+1; j--){
			printf(" ");
		}
		for(k = 1; k <= i; k++){
			printf("%d",k);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java26" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern26{
	public static void main(String args[]){
		for(int i = 1; i <= 5; i++) {
       			for(int j = 5; j >= i+1; j--){
		              		System.out.print(" ");
			}
			for(int k = 1; k <= i; k++){
		              		System.out.print(k);
			}
			System.out.println();
		}
	}
}
</code>
</pre>
                        </div>
                      </div>

        </section>
        </div><!-- End Code Section -->

      </div>
    </section>
        <!-- End Pattern 26 -->

<!-- //////////////////////////// Pattern 27 ///////////////////////// -->
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 27</u></h2>
                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:right; width:70%; margin-left:0px;">
            A<br>
         B  B<br>
      C  C  C<br>
   D  D  D  D<br>
E  E  E  E  E
    </div>
</strong>
                            </code>
            </div>
          </div>

        <div class="row no-gutters">
          <div class="col-lg-12 video-box">
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/ENtPRg9zbaI"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python27">Python</a></li>
                        <li><a data-toggle="tab" href="#c27">C</a></li>
                        <li><a data-toggle="tab" href="#java27">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python27" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4'; width:100%">
<code>
for i in range(65,70):
    for j in range(70, i, -1):
        print(end=" ")      # printing blank spaces
    for k in range(65, i+1):
        print(chr(i), end = '')  # printing i
    print()                 # change line
</code>
</pre>
						</div>
						<div id="c27" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include<stdio.h>
main(){
	int i,j,k;
	for(i = 65; i <= 69; i++){
		for(j = 69; j >= i+1; j--){
			printf(" ");
		}
		for(k = 65; k <= i; k++){
			printf("%c",i);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java27" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern27{
	public static void main(String args[]){
		for(int i = 65; i <= 69; i++) {
       			for(int j = 69; j >= i+1; j--){
		              		System.out.print(" ");
			}
			for(int k = 65; k <= i; k++){
		              		System.out.print((char)(i));
			}
			System.out.println();
		}
	}
}
</code>
</pre>
                        </div>
                      </div>

        </section>
        </div><!-- End Code Section -->

      </div>
    </section>
        <!-- End Pattern 27 -->

<!-- //////////////////////////// Pattern 28 ///////////////////////// -->
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 28</u></h2>
                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:right; width:70%; margin-left:0px;">
            A<br>
         A  B<br>
      A  B  C<br>
   A  B  C  D<br>
A  B  C  D  E
    </div>
</strong>
                            </code>
            </div>
          </div>

        <div class="row no-gutters">
          <div class="col-lg-12 video-box">
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/ENtPRg9zbaI"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python28">Python</a></li>
                        <li><a data-toggle="tab" href="#c28">C</a></li>
                        <li><a data-toggle="tab" href="#java28">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python28" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4'; width:100%">
<code>
for i in range(65,70):
    for j in range(70, i, -1):
        print(end=" ")      # printing blank spaces
    for k in range(65, i+1):
        print(chr(k), end = '')  # printing i
    print()                 # change line
</code>
</pre>
						</div>
						<div id="c28" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j,k;
	for(i = 65; i <= 69; i++){
		for(j = 69; j >= i+1; j--){
			printf(" ");
		}
		for(k = 65; k <= i; k++){
			printf("%c",k);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java28" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern28{
	public static void main(String args[]){
		for(int i = 65; i <= 69; i++) {
       			for(int j = 69; j >= i+1; j--){
		              		System.out.print(" ");
			}
			for(int k = 65; k <= i; k++){
		              		System.out.print((char)(k));
			}
			System.out.println();
		}

	}
}
</code>
</pre>
                        </div>
                      </div>

        </section>
        </div><!-- End Code Section -->

      </div>
    </section>
        <!-- End Pattern 28 -->

<!-- //////////////////////////// Pattern 29 ///////////////////////// -->
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 29</u></h2>
                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:right; width:70%; margin-left:0px;">
*  *  *  *  *<br>
   *  *  *  *<br>
      *  *  *<br>
         *  *<br>
            *
    </div>
</strong>
                            </code>
            </div>
          </div>

        <div class="row no-gutters">
          <div class="col-lg-12 video-box">
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/ENtPRg9zbaI"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python29">Python</a></li>
                        <li><a data-toggle="tab" href="#c29">C</a></li>
                        <li><a data-toggle="tab" href="#java29">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python29" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4'; width:100%">
<code>
for i in range(5,0,-1):
    for j in range(1, 5-i+1):
        print(end=" ")      # printing blank spaces
    for k in range(1, i+1):
        print('*', end = '')  # printing i
    print()                 # change line
</code>
</pre>
						</div>
						<div id="c29" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j,k;
	for(i = 1; i <= 5; i++){
		for(j = 1; j <= i-1; j++){
			printf(" ");
		}
		for(k = 5; k >= i; k--){
			printf("*");
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java29" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern29{
	public static void main(String args[]){
		for(int i = 1; i <= 5; i++) {
       			for(int j = 1; j <= i-1; j++){
		              		System.out.print(" ");
			}
			for(int k = 5; k >= i; k--){
		              		System.out.print("*");
			}
			System.out.println();
		}

	}
}
</code>
</pre>
                        </div>
                      </div>

        </section>
        </div><!-- End Code Section -->

      </div>
    </section>
        <!-- End Pattern 29 -->

          <!-- //////////////////////////// Pattern 30 ///////////////////////// -->
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 30</u></h2>
                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:right; width:70%; margin-left:0px;">
5  5  5  5  5<br>
   4  4  4  4<br>
      3  3  3<br>
         2  2<br>
            1
    </div>
</strong>
                            </code>
            </div>
          </div>

        <div class="row no-gutters">
          <div class="col-lg-12 video-box">
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/ENtPRg9zbaI"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python30">Python</a></li>
                        <li><a data-toggle="tab" href="#c30">C</a></li>
                        <li><a data-toggle="tab" href="#java30">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python30" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4'; width:100%">
<code>
for i in range(5,0,-1):
    for j in range(1, 5-i+1):
        print(end=" ")      # printing blank spaces
    for k in range(1, i+1):
        print(i, end = '')  # printing i
    print()                 # change line
</code>
</pre>
						</div>
						<div id="c30" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j,k;
	for(i = 5; i >= 1; i--){
		for(j = 5; j >= i+1; j--){
			printf(" ");
		}
		for(k = 1; k <= i; k++){
			printf("%d",i);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java30" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern30{
	public static void main(String args[]){
		for(int i = 5; i >= 1; i--) {
       			for(int j = 5; j >= i+1; j--){
		              		System.out.print(" ");
			}
			for(int k = 1; k <= i; k++){
		              		System.out.print(i);
			}
			System.out.println();
		}

	}
}
</code>
</pre>
                        </div>
                      </div>

        </section>
        </div><!-- End Code Section -->

      </div>
    </section>
        <!-- End Pattern 30 -->

          <!-- //////////////////////////// Pattern 31 ///////////////////////// -->
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 31</u></h2>
                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:right; width:70%; margin-left:0px;">
1  2  3  4  5<br>
   1  2  3  4<br>
      1  2  3<br>
         1  2<br>
            1
    </div>
</strong>
                            </code>
            </div>
          </div>

        <div class="row no-gutters">
          <div class="col-lg-12 video-box">
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/ENtPRg9zbaI"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python31">Python</a></li>
                        <li><a data-toggle="tab" href="#c31">C</a></li>
                        <li><a data-toggle="tab" href="#java31">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python31" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4'; width:100%">
<code>
for i in range(5,0,-1):
    for j in range(1, 5-i+1):
        print(end=" ")
    for k in range(1, i+1):
        print(k, end = '')
    print()
</code>
</pre>
						</div>
						<div id="c31" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j,k;
	for(i = 5; i >= 1; i--){
		for(j = 5; j >= i+1; j--){
			printf(" ");
		}
		for(k = 1; k <= i; k++){
			printf("%d",k);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java31" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern31{
	public static void main(String args[]){
		for(int i = 5; i >= 1; i--) {
       			for(int j = 5; j >= i+1; j--){
		              		System.out.print(" ");
			}
			for(int k = 1; k <= i; k++){
		              		System.out.print(k);
			}
			System.out.println();
		}
	}
}
</code>
</pre>
                        </div>
                      </div>

        </section>
        </div><!-- End Code Section -->

      </div>
    </section>
        <!-- End Pattern 31 -->

          <!-- //////////////////////////// Pattern 32 ///////////////////////// -->
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 32</u></h2>
                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:right; width:70%; margin-left:0px;">
E  E  E  E  E<br>
   D  D  D  D<br>
      C  C  C<br>
         B  B<br>
            A
    </div>
</strong>
                            </code>
            </div>
          </div>

        <div class="row no-gutters">
          <div class="col-lg-12 video-box">
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/ENtPRg9zbaI"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python32">Python</a></li>
                        <li><a data-toggle="tab" href="#c32">C</a></li>
                        <li><a data-toggle="tab" href="#java32">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python32" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4'; width:100%">
<code>
a = 5
for i in range(69,64,-1):
    for j in range(1, 5-a+1):
        print(end=" ")
    for k in range(65, i+1):
        print(chr(i), end = '')
    print()
    a -=1
</code>
</pre>
						</div>
						<div id="c32" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j,k;
	for(i = 69; i >= 65; i--){
		for(j = 69; j >= i+1; j--){
			printf(" ");
		}
		for(k = 65; k <= i; k++){
			printf("%c",i);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java32" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern32{
	public static void main(String args[]){
		for(int i = 69; i >= 65; i--) {
       			for(int j = 69; j >= i+1; j--){
		              		System.out.print(" ");
			}
			for(int k = 65; k <= i; k++){
		              		System.out.print((char)(i));
			}
			System.out.println();
		}

	}
}
</code>
</pre>
                        </div>
                      </div>

        </section>
        </div><!-- End Code Section -->

      </div>
    </section>
        <!-- End Pattern 32 -->

<!-- //////////////////////////// Pattern 33 ///////////////////////// -->
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 33</u></h2>
                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:right; width:70%; margin-left:0px;">
A  B  C  D  E<br>
   A  B  C  D<br>
      A  B  C<br>
         A  B<br>
            A
    </div>
</strong>
                            </code>
            </div>
          </div>

        <div class="row no-gutters">
          <div class="col-lg-12 video-box">
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/ENtPRg9zbaI"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python33">Python</a></li>
                        <li><a data-toggle="tab" href="#c33">C</a></li>
                        <li><a data-toggle="tab" href="#java33">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python33" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4'; width:100%">
<code>
a = 5
for i in range(69,64,-1):
    for j in range(1, 5-a+1):
        print(end=" ")
    for k in range(65, i+1):
        print(chr(k), end = '')
    print()
    a -=1
</code>
</pre>
						</div>
						<div id="c33" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j,k;
	for(i = 69; i >= 65; i--){
		for(j = 69; j >= i+1; j--){
			printf(" ");
		}
		for(k = 65; k <= i; k++){
			printf("%c",k);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java33" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern33{
	public static void main(String args[]){
		for(int i = 69; i >= 65; i--) {
       			for(int j = 69; j >= i+1; j--){
		              		System.out.print(" ");
			}
			for(int k = 65; k <= i; k++){
		              		System.out.print((char)(k));
			}
			System.out.println();
		}

	}
}
</code>
</pre>
                        </div>
                      </div>

        </section>
        </div><!-- End Code Section -->

      </div>
    </section>
        <!-- End Pattern 33 -->

        </div>
      </div>
    </section><!-- End Introduction Section -->



  <!-- ======= Footer Section ======= -->
   <?php
    include "../includes/footer.php";
  ?>
  <!----------------------------------->