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
              <li style="font-size:22px; color: #ff7000; text-align:center;"><strong>Module 2</strong></li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Language</strong>: Python, Java, C</li>
              <li style="font-size:18px;"><strong>Difficulty Level</strong>: Easy</li>
            </ul>
          </div>

        </div>
        <!-- End Head Introduction -->

          <br><br><br>
          <!-- //////////////////////////// Pattern 10 ///////////////////////// -->
    <section id="about" class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 10</u></h2>

                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:left; width:70%; margin-left:auto;">
*  <br>
*  *  <br>
*  *  *  <br>
*  *  *  * <br>
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
                        <li class="active"><a data-toggle="tab" href="#python10">Python</a></li>
                        <li><a data-toggle="tab" href="#c10">C</a></li>
                        <li><a data-toggle="tab" href="#java10">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python10" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4'; width:100%">
<code>
for i in range(1, 6):
    for j in range(1, i+1):
        print('*', end='')
    print('')
</code>
</pre>
						</div>
						<div id="c10" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 1; i <= 5; i++){
		for(j = 1; j <= i; j++){
			printf("*");
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java10" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern10{
	public static void main(String args[]){
		for(int i = 1; i <= 5; i++) {
       			for(int j = 1; j <= i; j++){
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


        <!-- End Pattern 10 -->

    <!-- //////////////////////////// Pattern 11 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 11</u></h2>

                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:left; width:70%; margin-left:auto;">
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
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/867JmpbyPb0"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python11">Python</a></li>
                        <li><a data-toggle="tab" href="#c11">C</a></li>
                        <li><a data-toggle="tab" href="#java11">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python11" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
for i in range(1, 6):
    for j in range(1, i+1):
        print(i, end='')
    print('')
</code>
</pre>
						</div>
						<div id="c11" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 1; i <= 5; i++){
		for(j = 1; j <= i; j++){
			printf("%d",i);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java11" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern11{
	public static void main(String args[]){
		for(int i = 1; i <= 5; i++) {
       			for(int j = 1; j <= i; j++){
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


        <!-- End Pattern 011 -->

    <!-- //////////////////////////// Pattern 12///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 12</u></h2>

                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:left; width:70%; margin-left:auto;">
1  <br>
1  2  <br>
1  2  3  <br>
1  2  3  4 <br>
1  2  3  4  5
    </div>
</strong>
                            </code>
            </div>
          </div>

        <div class="row no-gutters">
          <div class="col-lg-12 video-box">
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/867JmpbyPb0"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python12">Python</a></li>
                        <li><a data-toggle="tab" href="#c12">C</a></li>
                        <li><a data-toggle="tab" href="#java12">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python12" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
for i in range(1, 6):
    for j in range(1, i+1):
        print(j, end='')
    print('')
</code>
</pre>
						</div>
						<div id="c12" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 1; i <= 5; i++){
		for(j = 1; j <= i; j++){
			printf("%d",j);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java12" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern12{
	public static void main(String args[]){
		for(int i = 1; i <= 5; i++) {
       			for(int j = 1; j <= i; j++){
		              		System.out.print(j);
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


        <!-- End Pattern 12 -->


          <!-- //////////////////////////// Pattern 13 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 13</u></h2>

                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:left; width:70%; margin-left:auto;">
A<br>
B  B <br>
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
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/867JmpbyPb0"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python13">Python</a></li>
                        <li><a data-toggle="tab" href="#c13">C</a></li>
                        <li><a data-toggle="tab" href="#java13">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python13" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
for i in range(65,70):
    for j in range(65, i+1):
        print(chr(i), end='')
    print('')
</code>
</pre>
						</div>
						<div id="c13" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 'A'; i <= 'E'; i++){
		for(j = 65; j <= i; j++){
			printf("%c",i);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java13" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern13{
	public static void main(String args[]){
		for(int i = 65; i <= 69; i++) {
       			for(int j = 65; j <= i; j++){
		              		System.out.print((char)(i));
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


        <!-- End Pattern 13 -->

     <!-- //////////////////////////// Pattern 14 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 14</u></h2>

                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:left; width:70%; margin-left:auto;">
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
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/867JmpbyPb0"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python14">Python</a></li>
                        <li><a data-toggle="tab" href="#c14">C</a></li>
                        <li><a data-toggle="tab" href="#java14">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python14" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
for i in range(65,70):
    for j in range(65, i+1):
        print(chr(j), end='')
    print('')
</code>
</pre>
						</div>
						<div id="c14" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 65; i <= 69; i++){
		for(j = 65; j <= i; j++){
			printf("%c",j);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java14" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern14{
	public static void main(String args[]){
		for(int i = 65; i <= 69; i++) {
       			for(int j = 65; j <= i; j++){
		              		System.out.print((char)(j));
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


        <!-- End Pattern 14 -->

     <!-- //////////////////////////// Pattern 15 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 15</u></h2>

                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:left; width:70%; margin-left:auto;">
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
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/867JmpbyPb0"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python15">Python</a></li>
                        <li><a data-toggle="tab" href="#c15">C</a></li>
                        <li><a data-toggle="tab" href="#java15">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python15" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
for i in range(5,0,-1):
    for j in range(1, i+1):
        print('*', end='')
    print('')
</code>
</pre>
						</div>
						<div id="c15" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 5; i >= 1; i--){
		for(j = 1; j <= i; j++){
			printf("*");
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java15" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern15{
	public static void main(String args[]){
		for(int i = 5; i >= 1; i--) {
       			for(int j = 1; j <= i; j++){
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


        <!-- End Pattern 15 -->


       <!-- //////////////////////////// Pattern 16 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 16</u></h2>

                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:left; width:70%; margin-left:auto;">
1  1  1  1  1<br>
2  2  2  2<br>
3  3  3<br>
4  4<br>
5
    </div>
</strong>
                            </code>
            </div>
          </div>

        <div class="row no-gutters">
          <div class="col-lg-12 video-box">
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/867JmpbyPb0"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python16">Python</a></li>
                        <li><a data-toggle="tab" href="#c16">C</a></li>
                        <li><a data-toggle="tab" href="#java16">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python16" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
for i in range(1,6):
    for j in range(5,i-1,-1):
        print(i, end='')
    print('')
</code>
</pre>
						</div>
						<div id="c16" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 1; i <= 5; i++){
		for(j = 5; j >= i; j--){
			printf("%d",i);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java16" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern16{
	public static void main(String args[]){
		for(int i = 1; i <= 5; i++) {
       			for(int j = 5; j >= i; j--){
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


        <!-- End Pattern 16 -->

       <!-- //////////////////////////// Pattern 17 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 17</u></h2>

                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:left; width:70%; margin-left:auto;">
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
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/867JmpbyPb0"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python17">Python</a></li>
                        <li><a data-toggle="tab" href="#c17">C</a></li>
                        <li><a data-toggle="tab" href="#java17">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python17" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
for i in range(5,0,-1):
    for j in range(1,i+1):
        print(j, end='')
    print('')
</code>
</pre>
						</div>
						<div id="c17" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 5; i >= 1; i--){
		for(j = 1; j <= i; j++){
			printf("%d",j);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java17" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern17{
	public static void main(String args[]){
		for(int i = 5; i >= 1; i--) {
       			for(int j = 1; j <= i; j++){
		              		System.out.print(j);
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


        <!-- End Pattern 17 -->

       <!-- //////////////////////////// Pattern 18 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 18</u></h2>

                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:left; width:70%; margin-left:auto;">
A  A  A  A  A<br>
B  B  B  B<br>
C  C  C<br>
D  D<br>
E
    </div>
</strong>
                            </code>
            </div>
          </div>

        <div class="row no-gutters">
          <div class="col-lg-12 video-box">
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/867JmpbyPb0"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python18">Python</a></li>
                        <li><a data-toggle="tab" href="#c18">C</a></li>
                        <li><a data-toggle="tab" href="#java18">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python18" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
for i in range(65,70):
    for j in range(70,i,-1):
        print(chr(i), end='')
    print('')
</code>
</pre>
						</div>
						<div id="c18" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 65; i <= 69; i++){
		for(j = 69; j >= i; j--){
			printf("%c",i);
		}
		printf("\n");
	}
}

</code>
</pre>
                            </div>
                            <div id="java18" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern18{
	public static void main(String args[]){
		for(int i = 65; i <= 69; i++) {
       			for(int j = 69; j >= i; j--){
		              		System.out.print((char)(i));
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


        <!-- End Pattern 18 -->

      <!-- //////////////////////////// Pattern 19 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 19</u></h2>

                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:left; width:70%; margin-left:auto;">
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
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/867JmpbyPb0"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python19">Python</a></li>
                        <li><a data-toggle="tab" href="#c19">C</a></li>
                        <li><a data-toggle="tab" href="#java19">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python19" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
for i in range(5,0,-1):
    for j in range(65,i):
        print(chr(j), end='')
    print('')
</code>
</pre>
						</div>
						<div id="c19" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 69; i >= 65; i--){
		for(j = 65; j <= i; j++){
			printf("%c",j);
		}
		printf("\n");
	}
}


</code>
</pre>
                            </div>
                            <div id="java19" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern19{
	public static void main(String args[]){
		for(int i = 69; i >= 65; i--) {
       			for(int j = 65; j <= i; j++){
		              		System.out.print((char)(j));
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
        <!-- End Pattern 19 -->

                <!-- //////////////////////////// Pattern 20 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 20</u></h2>

                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:left; width:70%; margin-left:auto;">
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
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/867JmpbyPb0"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python20">Python</a></li>
                        <li><a data-toggle="tab" href="#c20">C</a></li>
                        <li><a data-toggle="tab" href="#java20">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python20" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>

</code>
</pre>
						</div>
						<div id="c20" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 5; i >= 1; i--){
		for(j = 1; j <= i; j++){
			printf("%d",i);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java20" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern20{
	public static void main(String args[]){
		for(int i = 5; i >= 1; i--) {
       			for(int j = 1; j <= i; j++){
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
          <!-- End Pattern 20 -->

          <!-- //////////////////////////// Pattern 21 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 21</u></h2>

                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:left; width:70%; margin-left:auto;">
5  4  3  2  1<br>
5  4  3  2<br>
5  4  3<br>
5  4<br>
5
    </div>
</strong>
                            </code>
            </div>
          </div>

        <div class="row no-gutters">
          <div class="col-lg-12 video-box">
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/867JmpbyPb0"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python21">Python</a></li>
                        <li><a data-toggle="tab" href="#c21">C</a></li>
                        <li><a data-toggle="tab" href="#java21">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python21" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>

</code>
</pre>
						</div>
						<div id="c21" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 1; i <= 5; i++){
		for(j = 5; j >= i; j--){
			printf("%d",j);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java21" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern21{
	public static void main(String args[]){
		for(int i = 1; i <= 5; i++) {
       			for(int j = 5; j >= i; j--){
		              		System.out.print(j);
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
          <!-- End Pattern 21 -->

<!-- //////////////////////////// Pattern 22 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 22</u></h2>

                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:left; width:70%; margin-left:auto;">
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
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/867JmpbyPb0"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python22">Python</a></li>
                        <li><a data-toggle="tab" href="#c22">C</a></li>
                        <li><a data-toggle="tab" href="#java22">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python22" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>

</code>
</pre>
						</div>
						<div id="c22" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 69; i >= 65; i--){
		for(j = 65; j <= i; j++){
			printf("%c",i);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java22" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern22{
	public static void main(String args[]){
		for(int i = 69; i >= 65; i--) {
       			for(int j = 65; j <= i; j++){
		              		System.out.print((char)(i));
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
          <!-- End Pattern 22 -->

<!-- //////////////////////////// Pattern 23 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content" style="display: block; margin-left: auto; margin-right: auto;" >
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 23</u></h2>

                <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden; ">
<strong>
    <div style="text-align:left; width:70%; margin-left:auto;">
E  D  C  B  A<br>
E  D  C  B<br>
E  D  C<br>
E  D<br>
E
    </div>
</strong>
                            </code>
            </div>
          </div>

        <div class="row no-gutters">
          <div class="col-lg-12 video-box">
            <iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/867JmpbyPb0"  allowfullscreen>
            </iframe>
          </div>
        </div>

        <div class="portfolio-description">
			<!-- Code Section -->
			<section class="counts section-bg">
                      <ul class="nav nav-tabs" style="width:80%;">
                        <li class="active"><a data-toggle="tab" href="#python23">Python</a></li>
                        <li><a data-toggle="tab" href="#c23">C</a></li>
                        <li><a data-toggle="tab" href="#java23">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python23" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>

</code>
</pre>
						</div>
						<div id="c23" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 65; i <= 69; i++){
		for(j = 69; j >= i; j--){
			printf("%c",j);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java23" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern23{
	public static void main(String args[]){
		for(int i = 65; i <= 69; i++) {
       			for(int j = 69; j >= i; j--){
		              		System.out.print((char)(j));
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
          <!-- End Pattern 23 -->

        </div>
      </div>
    </section><!-- End Introduction Section -->


    
  <!-- ======= Footer Section ======= -->
  <?php
    include "../includes/footer.php";
  ?>
  <!----------------------------------->