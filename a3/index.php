<?php
session_start();
require_once('tools.php');
$_SESSION["invalidId"] = false;
top_module();
navigation_page_module();

$main = <<<"MAIN"
    <main>
      <article id='Website Under Construction' class="row">
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <article class="column1">
            <h2>Physical store
            </h2>
            <p>  On Little Bourke Street in Melbourne’s central business district, a subway-like tunnel leads into a polished concrete shrine to one of the most coveted products in modern luxury menswear. Inside, on shiny illuminated shelves outfitted with digital displays, the walls are dripping with hundreds of pairs of sneakers from Balenciaga, Rick Owens, Pierre Hardy, Raf Simons, Saint Laurent, Givenchy, Lanvin, Kris van Assche, Maison Martin Margiela, Christopher Kane, Giuseppe Zanotti and others, as well as special lines, limited-edition collections, collaborations and pre-releases by Nike, Adidas, Reebok, Diemme, Common Projects and Boris Bidjan Saberi.
            </p>
          </article>
        <article class="column2">
            <h2>Founder
            </h2>
            <p>This high-tech retail temple, named Sneakerboy, is the brainchild of Chris Kyvetos, 30, former creative director and buyer at Australian men’s department store Harrolds and a long-time sneaker enthusiast, whose carefully laid plans to target a rapidly emerging generation of luxury consumers with an offering focused on trainers were lent credence, late last year, when Balenciaga announced the appointment of its new designer, Alexander Wang.
            </p>
          </article>
        <article class="column3">
            <h2>Commodity sale
            </h2>
            <p>Consumers check out via a Sneakerboy app (on their own phones or in-store iPads) that remembers their shoe size, payment preferences and purchase history — and provides tailored information about new Products.<br>
What’s more, the store’s product release cycle is more in tune with the rhythm of the Internet than traditional seasonal drops, peppering a constantly updated, seasonless feed of new products with “quick strike” releases of special limited editions.
            </p>
          </article>
      </article>
    </main>
MAIN;
echo $main;

   footer_module();
?>