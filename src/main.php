<?php
class Main
{
	public static function drawMain() {
		echo '<NAV>
				<P><A HREF="/credits.html">Credits</A> —
				<A HREF="/tos.html">Terms of Service</A> —
				<A HREF="/index.html">Blog Index</A></P>
			</NAV>
			<ARTICLE>
				<H1 color:"#ff7788">Episode 15</H1>
				<VIDEO SRC="D:\Usage\Duke\Biertag2\abcd20110421185840.avi" CONTROLS PRELOAD>
					<P><A HREF="/fm/015.ogv">Download video</A>.</P>
				</VIDEO>
				<FOOTER class="inArticle"> <!-- footer for article -->
					<P><b>GRADIANT BOLD STYLE: its <TIME DATETIME="2009-10-21T18:26-07:00">THE 2009/10/21 at</b> 6:26pm</TIME></P>
				</FOOTER>
			</ARTICLE>
			<hr />
			<ARTICLE>
				<H1>My Favorite Trains</H1>
				<P>I love my trains. My favorite train of all time is a Köf.</P>
				<P>It is fun to see them pull some coal cars because they look so
				dwarfed in comparison.</P>
				<FOOTER class="inArticle"> <!-- footer for article -->
					<P>Published <TIME DATETIME="2009-09-15T14:54-07:00">on 2009/09/15 at 2:54pm</TIME></P>
				</FOOTER>
			</ARTICLE>
			<input type="radio" id="m" name="gender">male<br/>
			<input type="radio" id="f" name="gender">female
			<button class="fancybtn">B1</button>';
	}
}
?>