<?php
include 'top.php';
?>
<main>
    <article class="portfolio">
        <h2>Welcome to my Portfolio!</h2>
        <section class="portfolio-info">   
            <h3>Quick Notes:</h3>
            <ul>
                <li>This is a beginner portfolio with a bunch of pictures of the things I find interesting or visually appealing!</li>
                <li>All pictures are taken by me, most are edited with VSCO.</li>
                <li>Devices are iPhone (6s, X, 11 Pro Max) and Canon DSLR (Rebel T6).</li>
                <li>Locations of photos include: Massachusetts, New Hampshire, Maine, and Vermont in the USA; Vietnam and Thailand & more!</li>
                <li>The photo gallery below is split into four categories: Portraits and Animals, Landscapes, Urban, and Objects.</li>
                <li>“Portraits and animals” includes pictures of pets I know through friends or family and portraits of friends.</li>
                <li>“Landscapes” includes some of my favorite pictures of pretty places I’ve been to.</li>
                <li>“Urban” is pictures of more urban things, such as cities or buildings.</li>
                <li>“Objects” includes pictures of miscellaneous things.</li>
                
            </ul>
        </section>
        <section class="gallery">
            <h4 class="gallery-title">Photo Gallery</h4>
            <section class="column">
                <h4>Portraits/Animals</h4>
                <img src="images/bean-small.jpg" srcset="images/bean-medium.jpg 2x, images/bean-large.jpg 3x" alt="Dog named Bean on top of mountain" >
                <img src="images/cat-small.jpg" srcset="images/cat-medium.jpg 2x, images/cat-large.jpg 3x" alt="Cat in the grass" >
                <img src="images/portia-small.jpg" srcset="images/portia-medium.jpg 2x, images/portia-large.jpg 3x" alt="Friend, Portia, posing for a picture" >
                <img src="images/friends-small.jpg" srcset="images/friends-medium.jpg 2x, images/friends-large.jpg 3x" alt="Friends posing for a picture" >
            </section>
            <section class = "column">
                <h4>Landscapes</h4>
                <img src="images/waterfall-small.jpg" srcset="images/waterfall-medium.jpg 2x, images/waterfall-large.jpg 3x" alt="Waterfall in the woods" >
                <img src="images/acadia-small.jpg" srcset="images/acadia-medium.jpg 2x, images/acadia-large.jpg 3x" alt="Steering wheel on lobster boat" >
                <img src="images/franconia-small.jpg" srcset="images/franconia-medium.jpg 2x, images/franconia-large.jpg 3x" alt="Franconia's Notch in New Hampshire">
                <img src="images/thailand-small.jpg" srcset="images/thailand-medium.jpg 2x, images/thailand-large.jpg 3x" alt="Boat on clear water in Thailand" >
                <img src="images/pond-small.jpg" srcset="images/pnd-medium.jpg 2x, images/pond-large.jpg 3x" alt="Sterling Pond summit" >
                <img src="images/flume-small.jpg" srcset="images/flume-medium.jpg 2x, images/flume-large.jpg 3x" alt="Flume Gorge in New Hampshire" >
            </section>
            <section class = "column">
                <h4>Urban</h4>
                <img src="images/glass-small.jpg" srcset="images/glass-medium.jpg 2x, images/glass-large.jpg 3x" alt="Building in Boston" >
                <img src="images/airplane-small.jpg" srcset="images/airplane-medium.jpg 2x, images/airplane-large.jpg 3x" alt="Sunset from airplane window" >
                <img src="images/city-small.jpg" srcset="images/city-medium.jpg 2x, images/city-large.jpg 3x" alt="City view in Thailand" >
                <img src="images/boston-small.jpg" srcset="images/boston-medium.jpg 2x, images/boston-large.jpg 3x" alt="Boston streets" >
                <img src="images/lighthouse-small.jpg" srcset="images/lighthouse-medium.jpg 2x, images/lighthouse-large.jpg 3x" alt="Lighthouse in Maine" >
            </section>
            <section class="column">
                <h4>Objects</h4>
                <img src="images/flower-small.jpg" srcset="images/flower-medium.jpg 2x, images/flower-large.jpg 3x" alt="Flower in Vietnam" >
                <img src="images/rocks-small.jpg" srcset="images/rocks-medium.jpg 2x, images/rocks-large.jpg 3x" alt="Rocks on mountain summit" >
                <img src="images/sandwich-small.jpg" srcset="images/sandwich-medium.jpg 2x, images/sandwich-large.jpg 3x" alt="Chick-fil-a sandwich" >
                <img src="images/books-small.jpg" srcset="images/books-medium.jpg 2x, images/books-large.jpg 3x" alt="Bookstore in Bar Harbor, Maine" >
            </section>
        </section>
    </article>
</main>

<?php
include 'footer.php';
?>
