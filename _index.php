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
				<A HREF="?page = src/error.php">error</A></br> 
				<A HREF="src/ifoperation.php">if operations</A></br> 
				<A HREF="src/stringoperation.php">string operations</A></br> 
				<A HREF="src/whileoperation.php">while operations</A></br>
				<A HREF="src/mail.php">send Mail</A></br>
				<A HREF="src/phpinfo.php">phpInfo</A></br>
				<A HREF="src/Uebungen4/duckducksearch.php">duckducksearch</A></br>
				<A HREF="src/Uebungen4/sessionsample.php">session</A></br>
				<A HREF="src\Selststudium\04\bug_sumission_form\index.php">s04 Bug submission form</A></br>
				<A HREF="src\Uebungen\05\functions.php">U05 function sample</A></br>
				<A HREF="src\Uebungen\05\ArrayFunctions.php">U05 Array function sample</A></br>
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
			<P>BEER-WARE licensed by David Hauri</P>
		</FOOTER>
<?php
DrawHeaderAndFooter::drawFooter();
?>