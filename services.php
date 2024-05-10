<style>
    .card {
        display: flex;
        flex-direction: column;
        height: 100%; /* Makes sure all cards have the same height */
    }

    .card-img-top {
        width: 100%; /* Ensures the image covers the width */
        height: 15vw; /* Adjust height as needed, keeping it responsive */
        object-fit: cover; /* Ensures the image covers the area without distorting aspect ratio */
    }

    .card-body {
        flex-grow: 1; /* Allows the card body to fill the space */
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Spaces content evenly */
    }

    .container {
        max-width: 1200px; /* Maximum width of the container to center it on the page */
        margin: auto; /* Centers the container */
    }

    .row {
        margin: 0 -15px; /* Adjusts row's margin to handle overflow of card margins */
    }

    .col-md-4 {
        padding: 15px; /* Padding around columns to space out the cards */
    }
</style>

<section class="main-section py-5" id="services">
    <div class="container">
        <h2 class="text-center mb-5">Services</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="custom_cake.jpg" class="card-img-top" alt="Custom Cakes">
                    <div class="card-body">
                        <h5 class="card-title">Order Cakes</h5>
                        <p class="card-text">Custom cakes for every occasion, tailored to your tastes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="cupcake.jpg" class="card-img-top" alt="Cupcakes">
                    <div class="card-body">
                        <h5 class="card-title">Order Cupcakes</h5>
                        <p class="card-text">Delicious cupcakes in a variety of flavors and designs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="byoc.jpg" class="card-img-top" alt="Build Your Own Cake">
                    <div class="card-body">
                        <h5 class="card-title">Build Your Own Cake (BYOC!)</h5>
                        <p class="card-text">Get creative and customize your cake from scratch!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="artisan.jpg" class="card-img-top" alt="Artisan Breads">
                    <div class="card-body">
                        <h5 class="card-title">Artisan Breads</h5>
                        <p class="card-text">Freshly baked, wholesome breads made daily.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="wedding_cake.jpg" class="card-img-top" alt="Wedding Cakes">
                    <div class="card-body">
                        <h5 class="card-title">Wedding Cakes</h5>
                        <p class="card-text">Elegant and sumptuous cakes to make your big day even more special.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="seasonal.jpg" class="card-img-top" alt="Seasonal Treats">
                    <div class="card-body">
                        <h5 class="card-title">Seasonal Treats</h5>
                        <p class="card-text">Seasonal specialties crafted with the freshest ingredients of the season.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
