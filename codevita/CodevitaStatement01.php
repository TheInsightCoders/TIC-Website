  
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
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Lexi Strings</center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python, Java, C++</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/sq1I9imzp4Q" target="_blank">Lexi Strings</a></li>
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
							<h2 style="color:  #FF5733;">Codevita Problem 1 - <strong>Lexi Strings</strong></h2>

							   <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Statement</strong>
								<br>
								Little Jill jumbled up the order of the letters in our dictionary. Now, Jack uses this list to find the smallest lexicographical string that can be made out of this new order. Can you help him?
								<br><br>
								You are given a string P that denotes the new order of the letters in the English dictionary.
								<br><br>
								You need to print the smallest lexicographic string made from the given string S.
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
								1 <= T <= 1000
								<br>
								Length(P) = 26
								<br>
								1 <= length(S) <= 100
								<br>
								All character in the string S, P are in lower case
								<br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input Format</strong>
								<br>
								The first line contains number of test cases T
								<br>
								The second line has the string P
								<br>
								The third line has the string S
								<br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
								<br>
								Print single string in a new line for every test case giving the result
								<br><br>
							</p>
						</div>
					  </div>
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						  <section class="about">
							  <div class="container">
								<div class="row no-gutters">
								  <div class="col-lg-5 video-box">
									<iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/sq1I9imzp4Q"  allowfullscreen>
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
									2<br>
									polikujmnhytgbvfredcxswqaz<br>
									abcd<br>
									qwryupcsfoghjkldezvxbintma<br>
									ativedoc
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									bdca<br>
									codevita<br>
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
                        <li><a data-toggle="tab" href="#cpp">C++</a></li>
                        <li><a data-toggle="tab" href="#java">Java</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
test = int(input())

while (test > 0):
	P = input()
	S = input()

	list1 = []
	for i in S:
		list1.append(P.find(i))

	list1.sort()
	for i in list1:
		print(P[i], end = '')
	if test > 1:
		print()
	test -= 1
</code>
</pre>
						</div>
                            <div id="cpp" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
#include&lt;iostream&gt;
#include&lt;vector&gt;
#include&lt;algorithm&gt;
using namespace std;

int main()
{
	int n;
	cin>>n;

	while(n!=0)
	{ string p,s;
	  vector&lt;int&gt; v;
		cin>>p;
		cin>>s;

		for(int i=0;i < s.size();i++)
		{
			for(int j=0;j < p.size();j++)
			{
				if(s[i]==p[j])
				{
					v.push_back(j);
				}
			}
		}
		sort(v.begin(),v.end());

	for(int i=0;i < v.size(); i++)
	{
		cout<< p[v[i]];
	}

		n--;
    }
}
</code>
</pre>
                            </div>
                            <div id="java" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:15px; color:black; line-height:'1.4';">
<code>
import java.util.Scanner;
import java.util.*;

public class LexiString{

    public static void main(String[] args) {
        Scanner sc=new Scanner(System.in);
        int n=sc.nextInt();
        StringBuffer sb=new StringBuffer();
        while(n-->0){
            String p=sc.next()+sc.nextLine();
            String s=sc.next()+sc.nextLine();
            sb.append(lexi(p,s)+"\n");
        }
        System.out.print(sb);
    }

    private static String lexi(String p, String s) {
        String result="";
        TreeSet&gt;Integer&lt; set = new TreeSet<>();
        for(int i=0; i < s.length(); i++){
            int index=p.indexOf(s.charAt(i));
        if(set.contains(index)){
            for(int j=index;j<=(p.lastIndexOf(s.charAt(i)));j++){
                int in=p.indexOf(s.charAt(i),j);
                if(set.contains(in))
                    continue;
                else
                    set.add(in);
            }
        }
        else
            set.add(index);
    }
        for(int i:set)
            result=result+p.charAt(i);
        return result;
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