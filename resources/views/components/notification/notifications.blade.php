<script src="//unpkg.com/alpinejs" defer></script>
<!-- remix Icon  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.min.css"
    integrity="sha512-i5VzKip7owqOGjb0YTF8MR2J9yBVO3FLHeazKzLp354XYTmKcqEU3UeFYUw82R8tV6JqxeATOfstCfpfPhbyEA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

@if (session()->has('message'))
    <div id="notification" x-data x-init="test()"
        class="d-flex  flex-md-row flex-column align-items-center rounded text-center mb-9"
        style="    top: 160px;
    right: 0px;
    left: 0;
    margin: auto;
    max-width: 70%;
    z-index: 1000;
    position: fixed;
    width: fit-content;">
        <div class="alert rounded-4 px-5 shadow-lg d-flex   flex-md-row flex-column align-items-center py-4 w-100 heroText1"
            style="background: #FFC412" role="alert">
            <i class="ri-check-double-line fs-1" style="color:#020202 !important"></i>
            <div class="ps-md-4" style="color:#000000 !important">
                {{ session('message') }}
            </div>
        </div>
    </div>
    <script>
        function test() {
            setTimeout(function() {
                $('#notification').removeClass('d-flex').addClass('d-none');
            }, 6000); // 3000 milliseconds = 3 seconds
        }
    </script>
@endif
@if (session()->has('back-success'))
    <div id="notification" x-init="test()" class="d-flex   align-items-center   rounded   text-center mb-9 "
        style="
             top: 160px;
    right: 0px;
    left: 0;
    margin: auto;
    max-width: 70%;
    z-index: 1000;
    position: fixed;
    width: fit-content;">
        <div class="alert rounded-4 px-5 shadow-lg   d-flex   flex-md-row flex-column gap-5 align-items-center py-4  w-100 heroText1"
            style="background: #000" role="alert">
            <i class="ri-check-double-line fs-1" style="color:#fff !important "></i>
            <div class="ps-md-4 " style="color:#fff !important ">
                {{ session('back-success') }}
            </div>
        </div>
    </div>
    <script>
        function test() {
            setTimeout(() => {

                $('#notification').attr("style", "display: none !important");
                // alert();
            }, 6000);
        }
    </script>
@endif

@if ($errors->any())
    {{-- @if (true) --}}
    <div id="notification" x-init="test()"
        class="d-flex align-items-center bg-danger rounded p-5 text-center mb-9 "
        style="    top: 160px;
    right: 0px;
    left: 0;
    margin: auto;
    max-width: 70%;
    z-index: 1000;
    position: fixed;
    width: fit-content;">
        <div class="d-flex flex-column flex-grow-1 mr-2 px-5">



            <p class="text-white font-weight-bold font-size-lg m-0 mr-2 pl-3">
                <strong>
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br>
                    @endforeach
                </strong>
            </p>
        </div>
    </div>
    <script>
        function test() {
            setTimeout(() => {

                $('#notification').attr("style", "display: none !important");
                // alert();
            }, 6000);
        }
    </script>
@endif
