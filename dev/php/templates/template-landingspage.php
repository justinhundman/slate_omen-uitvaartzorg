<?php
/*
Template Name: landingspage
*/
?>

<?php get_header(); ?>

	<div class="threecolumns-wrapper u-gridContainer">
		<article >
			<h2 class="title-home ">Welkom bij Omen uitvaartzorg</h2>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="welkomstekst">
					<p>In feite biedt elke uitvaartverzorger hetzelfde: het organiseren en verzorgen van een begrafenis of crematie. Maar het is wel van het grootste belang hoe dat dan geregeld wordt en de manier waarop. Omen Uitvaartzorg is een écht klein particulier (familie)bedrijf. Omen Uitvaartzorg zal naar wens een uitvaart zodanig vormgeven dat die geheel past bij de levensstijl van de overleden persoon. Voor de een betekent dit dat de uitvaart een behouden en sobere stijl heeft en voor de ander wordt het een bijzondere en uitbundige dag. Uw levensstijl, uw wensen en budget bepalen voor een belangrijk gedeelte welke keuzes u maakt om vorm te geven aan uw uitvaart. lees meer…</p>
					<?php the_content(); ?>
				</article>
		</article>
		
			<article class="u-gridRow" id="post-<?php the_ID(); ?>">
					<article class="column u-gridCol4 column1" >
						<iframe class="iframe-home" width="560" height="315" src="//www.youtube.com/embed/k46wrXbWoXo" frameborder="0" allowfullscreen></iframe>
						<a class="button" href="/persoonlijk/">Persoonlijk</a>
					</article>
					<article class="column u-gridCol4 column2">
						<iframe class="iframe-home" width="560" height="315" src="//www.youtube.com/embed/dlEpZQsvUhM" frameborder="0" allowfullscreen></iframe>
						<a class="button" href="/huys-van-herinnering/">Huys van Herinnering</a>
					</article>
					<article class="column u-gridCol4 column3">
						<iframe class="iframe-home" width="560" height="315" src="//www.youtube.com/embed/-Mgi-PsSVFc" frameborder="0" allowfullscreen></iframe>
						<a class="button" href="/de-omarming/">De Omarming</a>
					</article>
			</article>
			<article class="u-gridRow" id="post-<?php the_ID(); ?>">
					<article class="column u-gridCol4 column4">
						<a class="button" href="/rouwdrukwerk-advertentie/">Rouwdrukwerk</a>
					</article>
					<article class="column u-gridCol4 column5">
						<a class="button" href="/bloemen/">Bloemen</a>
					</article>
					<article class="column u-gridCol4 column6">
						<a class="button" href="/uitvaartkisten-en-manden/">Kisten en manden</a>
					</article>
			</article>  
			<article class="u-gridRow bottom-text" id="post-<?php the_ID(); ?>">
				<article class="u-gridCol3 colomn-bottom-left">
					<img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/boek.jpg" >
				</article>
				<article class="u-gridCol9 padding-text">
					<h5 class="titleSub">Mijn uitvaartwens</h5>
					<p>Vanaf nu kunt u hier uw eigen uitvaartwensen digitaal ontwerpen en registreren. ‘Mijn Uitvaartwens’ kunt u opslaan in uw eigen beveiligde account. Omen Uitvaartzorg registreert uw wensen digitaal, zodat uw nabestaanden en de uitvaartverzorger er op het moment van overlijden onmiddellijk over kunnen beschikken. Het vastleggen van uw wensen op deze manier is niet rechtsgeldig en dient als leidraad voor de invulling van de uitvaart. Tevens is het een verzoek aan uw nabestaanden om uw uitvaartwensen te respecteren en daaraan tegemoet te komen. U kunt uw wensen ook vastleggen in een Uitvaartwensen brochure. Neem contact met ons op als u deze brochure wenst te ontvangen</p>
				</article>
			</article>

		<?php endwhile; endif; ?> 
	</div>
<?php get_footer(); ?>  
 