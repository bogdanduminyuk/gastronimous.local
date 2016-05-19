<!DOCTYPE html>
<html>
<head>
    <title>Gastronymous</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="styles/main.css"/>
    <!--<script type="text/javascript" src="js/script.js"></script>
     <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script> -->
</head>
<body>
    <header id="page_header">
        <table>
            <tr>
                <td>
                    <h2>hot news</h2>
                    <span class="ico up"></span>
                    <span class="ico down"></span>
                    <p>The best blog about wine. We love wine and we can’t live without it. 
                        See always the latest news and reviews</p>
                </td>
                <td id="logo">
                    <span class="ico logo"></span><br>
                    <div class="sep"></div>
                    <p>Unique resource for eat lovers</p>
                    <div class="sep"></div>
                </td>
                <td>
                    <input type="text" name="header_search" placeholder="Search line"/>
                    <span class="ico search"></span>
                </td>
            </tr>
        </table>
    </header>
	
	<nav id="main_menu">
		<table>
		<tr>
			<td>
				<a href="#">
					Gastro<br>
					<span>slot</span>
				</a>
			</td>
			<td>
				<a href="#">
					Dinner<br>
					<span>club</span>
				</a>
			</td>
			<td class="active">
				<a href="#">
					Food Tracker<br>
					<span>tracking</span>
				</a>
			</td>
			<td>
				<a href="#">
					Restaurant<br>
					<span>search</span>
				</a>
			</td>
			<td>
				<a href="#">
					Menu<br>
					<span>mix</span>
				</a>
			</td>
			<td>
				<a href="#">
					Street<br>
					<span>walker</span>
				</a>
			</td>
		</tr>
		</table>
	</nav>
	
	<div id="content">
		<header>
			<span class="ico arr_left"></span>
			<div id="circle">
				<p>Garry Parkers<br>Restaurants</p>
				<div class="sep"></div>
				<p>The bloodied bodies lay<br>stuffed and tangled in the<br>back.</p>
			</div>
			<span class="ico arr_left"></span>
		</header>
        
        <div id="page_content">
            <aside>
                <h3>interesting articles</h3>
                <a href="#">all</a>
                <article>
                    <img src="images/aside1.png" alt="Статья 1"/>
                    <h4><a href="#">Mastic Salep at Victory Garden</a></h4>
                    <p>If you follow us on twitter (and if you don’t, you should), you may know that
                        I’ve been making.</p>
                </article>
                <article>
                    <img src="images/aside2.png" alt="Статья 2"/>
                    <h4><a href="#">Best restaurants in the World</a></h4>
                    <p>If you follow us on twitter (and if you don’t, you should), you may know that
                        I’ve been making.</p>
                </article>
				
				<section id="vote">
					<h3>vote</h3>
					<p>What do you think about new Calvin Klein Summer 2011 Collection?</p>
					<form name="poll" action="#" method="post">
						<p>
							<input id="vote1" type="radio" name="vote" value="1">
							<label for="vote1">It’s very interesting</label>
						</p>
						<p>
							<input id="vote2" type="radio" name="vote" value="2">
							<label for="vote2">Not bad</label>
						</p>
						<p>
							<input id="vote3" type="radio" name="vote" value="3">
							<label for="vote3">Bad</label>
						</p>
						<p>
							<input id="vote4" type="radio" name="vote" value="4">
							<label for="vote4">Worst collection in the season</label>
						</p>
						<p>
							<input type="submit" name="send" value="VOTE"/>
							<a href="#" id="result_btn">Results</a>
						</p>
					</form>
				</section>
				
				<section id="search">
					<h3>Subscribe</h3>
					<div>
						<input type="text" name="form_search" placeholder="Search line"/>
						<span class="ico mail"></span>
					</div>
					<span class="facebook ico"></span>
					<span class="twitter ico"></span>
					<span class="smth ico"></span>
				</section>
            </aside>
            
            <div>
                <header>
                    <section>
                        <h3>one week in pictuers</h3>
                        <a href="#">more pictures</a>
                        <div>
                            <?php
                                for ($i = 1; $i <= 13; $i++)
                                    echo "<img src='images/small$i.png' alt='Picture $i'/>";
                            ?>
                        </div>
                    </section>
                </header>
                
                <main>
                    <h3>Latest news</h3>
                    <a href="#">more news</a>
                    
                    <?php
                        $headers = array("In Pompeii, 158 thermopolia with a service counter have been identified",
                                         "Food catering establishments which may be described",
                                         "Kaifeng was ripe for the development of restaurants");
                        
                        for ($i = 0; $i < 3; $i++) {
                            echo "<article>\n";
                            $header = $headers[$i];
                            $j = $i + 1;
                            echo "<img src='images/article$j.png' alt='Статья 1'/>\n";
                            echo "<h2>$header</h2>\n";
                            echo "<p class='small'>12 Jul, 2011<span class='ico del'></span>from <a href='#'>Jake Parker</a></p>\n";
                            echo "<p>Italian wine is wine produced in Italy, a country which is home to some of the oldest wine-producing regions in the world. Italy is one of the world's foremost producers</p>\n";
                            echo "<footer><p><a href='#' class='comments'>12 comments</a><span class='ico facebook'></span><span class='ico twitter'></span>Tags: <a href='#'>Dance, Gragons, Best Book</a></p></footer>\n";
                            echo "</article>";
                        }
                    ?>
                </main>
                
                <section id="video">
                    <h2>Latest Video</h2>
                    <img src='images/video.png' alt='Video'/>
                </section>
                
                <section id="more_videos">
                    <h2>more videos</h2>
                    <a href='#'>all video</a>
                    <table>
                        <?php
                            $counter = 1;
                            for ($i = 0; $i < 5; $i++) {
                                echo "<tr>\n";
                                for ($j = 0; $j < 4; $j++, $counter++) {
                                    if ($counter > 13) $counter = 1;
                                    echo "<td>\n<img src='images/small$counter.png' alt='pic_$i'/>\n</td>\n";
                                }
                                echo "</tr>\n";
                            }
                        ?>
                    </table>
                </section>
            </div>
            
            
            <div class="clear"></div>
        </div>
        
	</div>
	
	<footer id="page_footer">
		<table>
			<tr>
				<td>
					<span id="logo_footer"></span>
					<p>2009 - 2011 © Gastronymous<br>All rights reserved.</p>
				</td>
				<td>
					<a href="#">Gastro Slot</a>
					<a href="#">Dinner Club</a>
					<a href="#">Food Truckin Tracker</a>
					<a href="#">Restaurant Search</a>
					<a href="#">Menu Mix</a>
					<a href="#">Street Walker</a>
				</td>
				<td>
					<a href="#">Privacy Policy</a>
					<a href="#">Advertise</a>
					<a href="#">Terms and Conditions</a>
				</td>
				<td>
					<a href="#">About blog</a>
					<a href="#">Contacts us</a>
					<span class="ico facebook"></span>
					<span class="ico twitter"></span>
				</td>
			</tr>
		</table>
	</footer>
</body>
</html>