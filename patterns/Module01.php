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
              <li style="font-size:22px; color: #ff7000; text-align:center;"><strong>Module 1</strong></li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Language</strong>: Python, Java, C</li>
              <li style="font-size:18px;"><strong>Difficulty Level</strong>: Easy</li>
            </ul>
          </div>

        </div>
        <!-- End Head Introduction -->

          <br><br><br>
          <!-- //////////////////////////// Pattern 01 ///////////////////////// -->
    <section id="about" class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 1</u></h2>
                            <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden;">
<strong>
*  *  *  *  *<br>
*  *  *  *  *<br>
*  *  *  *  *<br>
*  *  *  *  *<br>
*  *  *  *  *
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
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#python1">Python</a></li>
                        <li><a data-toggle="tab" href="#c1">C</a></li>
                        <li><a data-toggle="tab" href="#java1">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python1" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
for i in range(1,5+1):
    for j in range(1,6):
        print('*', end='')
    print('')
</code>
</pre>
						</div>
						<div id="c1" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 1; i <= 5; i++){
		for(j = 1; j <= 5; j++){
			printf("*");
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java1" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern01{
	public static void main(String args[]){
		for(int i = 1; i <= 5; i++) {
            for(int j = 1; j <= 5; j++){
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


        <!-- End Pattern 01 -->

    <!-- //////////////////////////// Pattern 02 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 2</u></h2>
                            <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden;">
<strong>
1  1  1  1  1<br>
2  2  2  2  2<br>
3  3  3  3  3<br>
4  4  4  4  4<br>
5  5  5  5  5
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

                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#python2">Python</a></li>
                        <li><a data-toggle="tab" href="#c2">C</a></li>
                        <li><a data-toggle="tab" href="#java2">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python2" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
for i in range(1,5+1):
    for j in range(1,6):
        print(i, end='')
    print('')
</code>
</pre>
						</div>
						<div id="c2" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 1; i <= 5; i++){
		for(j = 1; j <= 5; j++){
			printf(i);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java2" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern01{
	public static void main(String args[]){
		for(int i = 1; i <= 5; i++) {
            for(int j = 1; j <= 5; j++){
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


        <!-- End Pattern 02 -->
    <!-- //////////////////////////// Pattern 03 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 3</u></h2>
                            <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden;">
<strong>
1  2  3  4  5<br>
1  2  3  4  5<br>
1  2  3  4  5<br>
1  2  3  4  5<br>
1  2  3  4  5
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
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#python3">Python</a></li>
                        <li><a data-toggle="tab" href="#c3">C</a></li>
                        <li><a data-toggle="tab" href="#java3">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python3" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
for i in range(1,6):
    for j in range(1,6):
        print(j,end='')
    print('')
</code>
</pre>
						</div>
						<div id="c3" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 1; i <= 5; i++){
		for(j = 1; j <= 5; j++){
			printf("%d",j);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java3" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern03{
	public static void main(String args[]){
		for(int i = 1; i <= 5; i++) {
       			for(int j = 1; j <= 5; j++){
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


        <!-- End Pattern 03 -->


          <!-- //////////////////////////// Pattern 04 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 4</u></h2>
                            <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden;">
<strong>
A  A  A  A  A<br>
B  B  B  B  B<br>
C  C  C  C  C<br>
D  D  D  D  D<br>
E  E  E  E  E
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
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#python4">Python</a></li>
                        <li><a data-toggle="tab" href="#c4">C</a></li>
                        <li><a data-toggle="tab" href="#java4">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python4" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
for i in range(65,69+1):
    for j in range(1,6):
        print(chr(i),end='')
    print('')
</code>
</pre>
						</div>
						<div id="c4" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 'A'; i <= 'E'; i++){
		for(j = 1; j <= 5; j++){
			printf("%c",i);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java4" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern04{
	public static void main(String args[]){
		for(int i = 65; i <= 69; i++) {
            for(int j = 1; j <= 5; j++){
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


        <!-- End Pattern 04 -->

     <!-- //////////////////////////// Pattern 05 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 5</u></h2>
                            <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden;">
<strong>
A  B  C  D  E<br>
A  B  C  D  E<br>
A  B  C  D  E<br>
A  B  C  D  E<br>
A  B  C  D  E
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
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#python5">Python</a></li>
                        <li><a data-toggle="tab" href="#c5">C</a></li>
                        <li><a data-toggle="tab" href="#java5">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python5" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
for i in range(1,6):
    for j in range(65,70):
        print(chr(j),end='')
    print('')
</code>
</pre>
						</div>
						<div id="c5" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 1; i <= 5; i++){
		for(j = 'A'; j <= 'E'; j++){
			printf("%c",j);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java5" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern05{
	public static void main(String args[]){
		for(int i = 1; i <= 5; i++) {
       			for(int j = 65; j <= 69; j++){
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


        <!-- End Pattern 05 -->

     <!-- //////////////////////////// Pattern 06 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 6</u></h2>
                            <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden;">
<strong>
5  5  5  5  5<br>
4  4  4  4  4<br>
3  3  3  3  3<br>
2  2  2  2  2<br>
1  1  1  1  1
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
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#python6">Python</a></li>
                        <li><a data-toggle="tab" href="#c6">C</a></li>
                        <li><a data-toggle="tab" href="#java6">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python6" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
for i in range(5, 0, -1):
    for j in range(1, 6):
        print(i, end='')
    print('')
</code>
</pre>
						</div>
						<div id="c6" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 5; i >= 1; i--){
		for(j = 'A'; j <= 'E'; j++){
			printf("%d",i);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java6" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern06{
	public static void main(String args[]){
		for(int i = 5; i >= 1; i--) {
       			for(int j = 1; j <= 5; j++){
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


        <!-- End Pattern 06 -->


       <!-- //////////////////////////// Pattern 07 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 7</u></h2>
                            <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden;">
<strong>
5  4  3  2  1<br>
5  4  3  2  1<br>
5  4  3  2  1<br>
5  4  3  2  1<br>
5  4  3  2  1
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
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#python7">Python</a></li>
                        <li><a data-toggle="tab" href="#c7">C</a></li>
                        <li><a data-toggle="tab" href="#java7">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python7" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
for i in range(5, 0, -1):
    for j in range(5, 0, -1):
        print(j, end='')
    print('')
</code>
</pre>
						</div>
						<div id="c7" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 5; i >= 1; i--){
		for(j = 5; j >= 1; j--){
			printf("%d",j);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java7" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern07{
	public static void main(String args[]){
		for(int i = 1; i <= 5; i++) {
       			for(int j = 5; j >= 1; j--){
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


        <!-- End Pattern 07 -->

       <!-- //////////////////////////// Pattern 08 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 8</u></h2>
                            <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden;">
<strong>
E  E  E  E  E<br>
D  D  D  D  D<br>
C  C  C  C  C<br>
B  B  B  B  B<br>
A  A  A  A  A
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
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#python8">Python</a></li>
                        <li><a data-toggle="tab" href="#c8">C</a></li>
                        <li><a data-toggle="tab" href="#java8">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python8" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
for i in range(69, 64, -1):
    for j in range(1, 6):
        print(chr(i), end='')
    print('')
</code>
</pre>
						</div>
						<div id="c8" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 'E'; i >= 'A'; i--){
		for(j = 1; j <= 5; j++){
			printf("%c",i);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java8" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern08{
	public static void main(String args[]){
		for(int i = 69; i >= 65; i--) {
       			for(int j = 1; j <= 5; j++){
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


        <!-- End Pattern 08 -->

       <!-- //////////////////////////// Pattern 09 ///////////////////////// -->
            <br><br>
    <section class="about">
      <div class="container">

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
            <div class="section-title" >
                <h2 style="color: #FF5733;  font-size: 34px; text-align:center;"><u>Pattern 9</u></h2>
                            <code style="font-size:30px; color: #161a4e; text-align:center; background-color: white; border:0px; overflow-x: hidden;">
<strong>
E  D  C  B  A<br>
E  D  C  B  A<br>
E  D  C  B  A<br>
E  D  C  B  A<br>
E  D  C  B  A
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
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#python8">Python</a></li>
                        <li><a data-toggle="tab" href="#c9">C</a></li>
                        <li><a data-toggle="tab" href="#java9">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python9" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
for i in range(1, 6):
    for j in range(69, 64, -1):
        print(chr(j), end='')
    print('')
</code>
</pre>
						</div>
						<div id="c9" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
main(){
	int i,j;
	for(i = 1; i <= 5; i++){
		for(j = 'E'; j >= 'A'; j--){
			printf("%c",j);
		}
		printf("\n");
	}
}
</code>
</pre>
                            </div>
                            <div id="java9" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
class Pattern09{
	public static void main(String args[]){
		for(int i = 1; i <= 5; i++) {
       			for(int j = 69; j >= 65; j--){
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


        <!-- End Pattern 09 -->


        </div>
      </div>
    </section><!-- End Introduction Section -->

  <!-- ======= Footer Section ======= -->
  <?php
    include "../includes/footer.php";
  ?>
  <!----------------------------------->