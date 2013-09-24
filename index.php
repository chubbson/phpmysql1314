<?php
include 'src/header.php';
include 'src/main.php';
?>

<?php
DrawHeaderAndFooter::drawHeader();
?>
<h1>asdf</h1>
		<HEADER> <!-- site wide header -->
			<NAV>
				<P><A HREF="?page = src/error.php">error</A> 
				<A HREF="src/ifoperation.php">if operations</A> 
				<A HREF="src/stringoperation.php">string operations</A> 
				<A HREF="src/whileoperation.php">while operations</A></P>
				<A HREF="src/mail.php">send Mail</A></P>
				<A HREF="src/phpinfo.php">phpInfo</A></P>
				<A HREF="src/Uebungen4/duckducksearch.php">duckducksearch</A></P>
				<A HREF="src/Uebungen4/sessionsample.php">session</A></P>
				<!--<A HREF="?page = whueppa">whueppa?</A></P>-->
			</NAV>
		</HEADER>
		<MAIN>
			<?php echo $page; ?>
		</MAIN>
		<FOOTER> <!-- site wide footer -->
			<NAV>
				<P><A HREF="/sampleindex.php">Home</A> </P>
			</NAV>
			<P>Copyright © 2009 Gordon Freeman</P>
		</FOOTER>
<?php
DrawHeaderAndFooter::drawFooter();
?>