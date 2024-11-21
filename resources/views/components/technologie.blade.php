<section class="Technologies  position-relative overflow-hidden  ">
    <div id="particles-js" class="position-absolute"></div>
    <div class="container">
        <div class="text-component w-100 text-center pb-5">
            <h1 class="mb-5"   style="color:#6222cc">Our Expertise</h1>
            <div class="divider div2"></div>
        </div>
        <div class="wrapper position-relative overflow-x-hidden">
            <div class="my-slider">
                <div data-aos="fade-down" data-aos-duration="1000"
                    class="technology d-flex justify-content-center align-items-center">
                    <div class="technologyBox rounded-circle d-flex justify-content-center align-items-center">
                        <img src={{ URL::asset('programming/laravel.png') }} />
                    </div>
                    <div
                        class="textHost rounded-2 px-3  position-absolute bg-secondary d-flex justify-content-center align-items-center">
                        <span>Laravel</span>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="1000"
                    class="technology d-flex justify-content-center align-items-center">
                    <div class="technologyBox rounded-circle d-flex justify-content-center align-items-center">
                        <img src={{ URL::asset('programming/flutter.png') }} />
                    </div>
                    <div
                        class="textHost rounded-2 px-3  position-absolute bg-secondary d-flex justify-content-center align-items-center">
                        <span>Flutter</span>
                    </div>
                </div>
                <div data-aos="fade-down" data-aos-duration="2000"
                    class="technology d-flex justify-content-center align-items-center">
                    <div class="technologyBox rounded-circle d-flex justify-content-center align-items-center">
                        <img src={{ URL::asset('programming/html.png') }} />
                    </div>
                    <div
                        class="textHost rounded-2 px-3  position-absolute bg-secondary d-flex justify-content-center align-items-center">
                        <span>HTML</span>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="3000"
                    class="technology d-flex justify-content-center align-items-center">
                    <div class="technologyBox rounded-circle d-flex justify-content-center align-items-center">
                        <img src={{ URL::asset('programming/java.png') }} />
                    </div>
                    <div
                        class="textHost rounded-2 px-3  position-absolute bg-secondary d-flex justify-content-center align-items-center">
                        <span>JAVA</span>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="2000"
                    class="technology d-flex justify-content-center align-items-center">
                    <div class="technologyBox rounded-circle d-flex justify-content-center align-items-center">
                        <img src={{ URL::asset('programming/wordpress.png') }} />
                    </div>
                    <div
                        class="textHost rounded-2 px-3  position-absolute bg-secondary d-flex justify-content-center align-items-center">
                        <span>Wordpress</span>
                    </div>
                </div>
                <div data-aos="fade-down" data-aos-duration="3000"
                    class="technology d-flex justify-content-center align-items-center">
                    <div class="technologyBox rounded-circle d-flex justify-content-center align-items-center">
                        <img src={{ URL::asset('programming/objective-c.png') }} />
                    </div>
                    <div
                        class="textHost rounded-2 px-3  position-absolute bg-secondary d-flex justify-content-center align-items-center">
                        <span>IOS</span>
                    </div>
                </div>
                <div data-aos="fade-down" data-aos-duration="3000"
                    class="technology d-flex justify-content-center align-items-center">
                    <div class="technologyBox rounded-circle d-flex justify-content-center align-items-center">
                        <img src={{ URL::asset('programming/reactJs.png') }} />
                    </div>
                    <div
                        class="textHost rounded-2 px-3  position-absolute bg-secondary d-flex justify-content-center align-items-center">
                        <span>ReactJs</span>
                    </div>
                </div>
                <div data-aos="fade-down" data-aos-duration="3000"
                    class="technology d-flex justify-content-center align-items-center">
                    <div class="technologyBox rounded-circle d-flex justify-content-center align-items-center">
                        <img src={{ URL::asset('programming/nodejs.png') }} />
                    </div>
                    <div
                        class="textHost rounded-2 px-3  position-absolute bg-secondary d-flex justify-content-center align-items-center">
                        <span>NodeJs</span>
                    </div>
                </div>
                <div data-aos="fade-down" data-aos-duration="3000"
                    class="technology d-flex justify-content-center align-items-center">
                    <div class="technologyBox rounded-circle d-flex justify-content-center align-items-center">
                        <img src={{ URL::asset('programming/shopify.png') }} />
                    </div>
                    <div
                        class="textHost rounded-2 px-3  position-absolute bg-secondary d-flex justify-content-center align-items-center">
                        <span>Shopify</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style scoped>
    /* TECHNCOLOGY SECTION STARTS  */
    .Technologies {
        /* background-color: black; */
        padding: 0px 0 91px;
        margin-top: 30px;
    }


    #particles-js {
        width: 100%;
        /* height: 100%; */
        position: absolute;
    }

    /* .particles-js-canvas-el{
    position: absolute;
    top: 0;
  } */


    .Technologies::after {
        content: '';
         background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: -1;
        top: -15px;
    }

    .wrapper {
        /* padding: 70px 0; */

    }

    .wrapper::after {
        width: 96%;
        content: "";
        position: absolute;
        height: 4px;
        background: repeating-linear-gradient(90deg, transparent, transparent 5px, #959595 5px, #959595 10px);
        top: 50%;
        left: 20px;
        animation: moveDots 2s linear infinite;
        z-index: 1;
    }

    @keyframes moveDots {
        0% {
            background-position: 0 0;
        }

        100% {
            background-position: 10px 0;
        }
    }

    .my-slider {
        padding: 0 70px;
        z-index: 2;
    }

    .my-slider .textHost {
        top: 1px;
        padding-top: 2px;
        border-bottom: 2px solid var(--baseColor1);
        /* padding-bottom: 2px; */
        display: none !important;
    }

    .my-slider .slick-slide.slick-current .textHost {
        display: block !important;
    }

    .my-slider .slick-slide.slick-current .textHost::after {
        left: 45%;
    }

    .my-slider .textHost::after {
        content: '';
        position: absolute;
        width: 8px;
        height: 12px;
        background-color: var(--baseColor1);
        clip-path: polygon(53% 46%, 0 0, 100% 0);
        bottom: -14px;
    }

    .my-slider .technology .technologyBox {
        width: 140px;
        height: 140px;
        background-color: #959595;
    }

    .my-slider .technology .technologyBox img {
        width: 60px;
        height: 60px;
        object-fit: contain;
    }

    .slick-slide.slick-current.slick-active.slick-center .technologyBox {
        background-color:#6222cc!important;
    }

    .technology .tooltip {
        z-index: 1;
    }

    .wrapper .slick-initialized .slick-slide {
        /* background-color: #b32532; */
        color: #FFF;
        height: 200px;
        margin: 0 15px 0 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .my-slider .slick-dots {
        display: none !important;
    }


    .wrapper .slick-next,
    .slick-prev i {
        z-index: 5;
        font-size: 12px !important;
    }

    .wrapper .slick-next {
        right: 15px;
        position: absolute;
        bottom: 80px;
        cursor: pointer;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
    }


    .wrapper .slick-prev {
        position: absolute;
        left: 15px;
        top: 80px;
        cursor: pointer;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .wrapper .slick-next:before,
    .slick-prev:before {
        color: #fff;
        font-size: 26px;
    }


    /* TECHNOLOGY SECTION ENDS  */
</style>
