<section class="bg-primary">
    <ul class="d-flex my-3">
        <li>
            <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
            <div>DIGITAL COMICS</div>
        </li>
        <li>
            <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
            <div>DC MERCHANDISE</div>
        </li>
        <li>
            <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
            <div>SUBSCRIPTIONS</div>
        </li>
        <li>
            <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
            <div>COMIC SHOP LOCATOR</div>
        </li>
        <li>
            <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
            <div>DC POWER VISA</div>
        </li>
    </ul>
</section>
<section class="footer-bg">
    <div class="container"></div>
</section>
<style>
    .footer-bg {}

    .bg-primary {
        display: flex
    }

    .bg-primary>ul {
        list-style: none;
        margin: 0 auto
    }

    .bg-primary>ul>li {
        display: flex;
        color: white;
        align-items: center
    }

    .bg-primary>ul>li>img {
        width: 50px
    }
</style>
