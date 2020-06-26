@extends('_layouts.master')

@section('content')



    <section class="pb-5 bg-dark position-relative overflow-hidden b-b">
        <img src="https://raw.githubusercontent.com/orchidsoftware/platform/master/.github/IMAGES/promo-full.png" class="dev-macbook none d-md-block">
        <div class="container pt-4">
            <div class="row pl-sm-2 pr-sm-2">
                <div class="col-lg-6">
                    <div class="row pb-5 pt-md-5">
                        <div class="col-md-12">
                            <h1 class="h2 normal text-white mb-4 mt-4 mr-md-4 text-center text-sm-left font-thin">
                                @yield('main.title')
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <h4 class="text-white font-thin">

                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                    <path d="M30.015 12.97l-2.567-0.569c-0.2-0.64-0.462-1.252-0.762-1.841l1.389-2.313c0.518-0.829 0.78-2.047 0-2.829l-1.415-1.414c-0.78-0.781-2.098-0.64-2.894-0.088l-2.251 1.434c-0.584-0.303-1.195-0.563-1.829-0.768l-0.576-2.598c-0.172-0.953-1.005-1.984-2.11-1.984h-2c-1.104 0-1.781 1.047-2 2l-0.642 2.567c-0.678 0.216-1.328 0.492-1.948 0.819l-2.308-1.47c-0.795-0.552-2.114-0.692-2.894 0.088l-1.415 1.414c-0.781 0.782-0.519 2 0 2.828l1.461 2.435c-0.274 0.552-0.517 1.123-0.705 1.72l-2.566 0.569c-0.953 0.171-1.984 1.005-1.984 2.109v2c0 1.105 1.047 1.782 2 2l2.598 0.649c0.179 0.551 0.404 1.080 0.658 1.593l-1.462 2.438c-0.518 0.828-0.78 2.047 0 2.828l1.415 1.414c0.78 0.782 2.098 0.64 2.894 0.089l2.313-1.474c0.623 0.329 1.277 0.608 1.96 0.823l0.64 2.559c0.219 0.953 0.896 2 2 2h2c1.105 0 1.938-1.032 2.11-1.985l0.577-2.604c0.628-0.203 1.23-0.459 1.808-0.758l2.256 1.438c0.796 0.552 2.114 0.692 2.895-0.089l1.415-1.414c0.78-0.782 0.518-2 0-2.828l-1.39-2.317c0.279-0.549 0.521-1.12 0.716-1.714l2.599-0.649c0.953-0.219 2-0.895 2-2v-2c0-1.104-1.031-1.938-1.985-2.11zM30.001 16.939c-0.085 0.061-0.245 0.145-0.448 0.192l-3.708 0.926-0.344 1.051c-0.155 0.474-0.356 0.954-0.597 1.428l-0.502 0.986 1.959 3.267c0.125 0.2 0.183 0.379 0.201 0.485l-1.316 1.314c-0.127-0.040-0.271-0.092-0.341-0.14l-3.292-2.099-1.023 0.529c-0.493 0.256-0.999 0.468-1.503 0.631l-1.090 0.352-0.824 3.723c-0.038 0.199-0.145 0.36-0.218 0.417h-1.8c-0.061-0.085-0.145-0.245-0.191-0.448l-0.921-3.681-1.066-0.338c-0.549-0.173-1.097-0.404-1.63-0.684l-1.028-0.543-3.293 2.099c-0.135 0.091-0.279 0.143-0.409 0.143l-1.311-1.276c0.018-0.104 0.072-0.274 0.181-0.449l2.045-3.408-0.487-0.98c-0.227-0.462-0.407-0.895-0.547-1.325l-0.343-1.052-3.671-0.918c-0.231-0.052-0.398-0.139-0.485-0.2v-1.86c0.001 0.001 0.002 0.001 0.005 0.001 0.034 0 0.198-0.117 0.335-0.142l3.772-0.835 0.346-1.103c0.141-0.449 0.333-0.917 0.588-1.43l0.487-0.98-2.024-3.373c-0.125-0.201-0.184-0.38-0.201-0.485l1.315-1.314c0.128 0.041 0.271 0.093 0.34 0.14l3.354 2.138 1.027-0.542c0.527-0.278 1.073-0.507 1.622-0.682l1.063-0.338 0.912-3.649c0.053-0.231 0.138-0.398 0.2-0.485h1.859c-0.014 0.020 0.115 0.195 0.142 0.339l0.84 3.794 1.089 0.352c0.511 0.165 1.023 0.38 1.523 0.639l1.023 0.532 3.224-2.053c0.135-0.092 0.279-0.143 0.409-0.143l1.313 1.276c-0.017 0.104-0.072 0.276-0.181 0.45l-1.98 3.296 0.505 0.988c0.273 0.533 0.48 1.033 0.635 1.529l0.346 1.104 3.697 0.82c0.224 0.041 0.398 0.171 0.434 0.241zM16.013 9.99c-3.321 0-6.023 2.697-6.023 6.010s2.702 6.010 6.023 6.010 6.023-2.697 6.023-6.009c0-3.313-2.702-6.010-6.023-6.010zM16 20c-2.205 0-4-1.794-4-4s1.794-4 4-4c2.206 0 4 1.794 4 4s-1.794 4-4 4z"></path>
                                </svg>

                                @yield('main.screen.title')
                            </h4>
                            <div>
                                @yield('main.screen.description')
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <h4 class="text-white font-thin">

                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                    <path d="M0.682 9.431l14.847 8.085c0.149 0.081 0.313 0.122 0.479 0.122 0.163 0 0.326-0.040 0.474-0.12l15.003-8.085c0.327-0.176 0.53-0.52 0.525-0.892s-0.216-0.711-0.547-0.88l-14.848-7.54c-0.283-0.143-0.617-0.144-0.902-0.002l-15.002 7.54c-0.332 0.167-0.545 0.505-0.551 0.877s0.196 0.717 0.521 0.895zM16.161 2.134l12.692 6.446-12.843 6.921-12.693-6.912zM31.292 15.010l-2.968-1.507-2.142 1.155 2.5 1.27-12.842 6.921-12.694-6.912 2.666-1.34-2.136-1.164-3.135 1.575c-0.332 0.167-0.545 0.505-0.551 0.877s0.196 0.717 0.521 0.895l14.847 8.085c0.149 0.081 0.313 0.122 0.479 0.122 0.163 0 0.326-0.040 0.474-0.12l15.003-8.085c0.327-0.176 0.53-0.52 0.525-0.892s-0.215-0.711-0.546-0.88zM31.292 22.010l-2.811-1.382-2.142 1.155 2.344 1.145-12.843 6.921-12.694-6.912 2.478-1.121-2.136-1.164-2.947 1.357c-0.332 0.167-0.545 0.505-0.551 0.877s0.196 0.717 0.521 0.895l14.847 8.085c0.149 0.081 0.313 0.122 0.479 0.122 0.163 0 0.326-0.040 0.475-0.12l15.003-8.085c0.327-0.176 0.53-0.52 0.525-0.892-0.005-0.373-0.215-0.712-0.546-0.88z"></path>
                                </svg>

                                @yield('main.design.title')</h4>
                            <div>
                                @yield('main.design.description')
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <h4 class="text-white font-thin">

                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                    <path d="M15.999 0c-6.188 0-11.035 5.035-11.035 11.223 0 4.662 2.29 6.883 4.1 8.504 1.165 1.044 1.949 1.674 1.949 2.448v1.695c0 0.044 0.006 0.086 0.011 0.129h-0.023v2.895c0.001 3.053 1.975 5.105 5.033 5.105 2.952 0 4.967-2.052 4.967-5.105v-2.895h-0.029c0.006-0.043 0.013-0.085 0.013-0.129v-1.695c0-1.18 0.876-1.893 2.204-3.053 1.797-1.569 3.844-3.521 3.844-7.899 0-6.189-4.847-11.223-11.036-11.223zM15.962 30c-1.872 0-2.959-1.161-2.959-3.105l-0.014-1.334c0.72 0.246 1.7 0.439 3.012 0.439 1.294 0 2.276-0.207 3.003-0.462v1.356c0 1.974-1.102 3.105-3.041 3.105zM21.876 17.616c-1.358 1.186-2.889 2.413-2.889 4.559v1.264c-0.474 0.265-1.349 0.58-3.004 0.58-1.736 0-2.56-0.308-2.969-0.546v-1.298c0-1.706-1.334-2.791-2.615-3.938-1.697-1.521-3.434-3.245-3.434-7.014-0-5.085 3.95-9.223 9.034-9.223 5.086 0 9.036 4.138 9.036 9.223 0 3.47-1.515 4.956-3.16 6.393z"></path>
                                </svg>

                                @yield('main.idea.title')</h4>
                            <div>
                                @yield('main.idea.description')
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <h4 class="text-white font-thin">

                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                    <path d="M7.11,23.52l1.42-1.41C5.14,18.72,3.37,17,2.39,16L8.53,9.89A1,1,0,1,0,7.11,8.47L.29,15.29A1.05,1.05,0,0,0,0,16a1,1,0,0,0,.3.71Z"/><path d="M31.71,15.29c-.1-.09-6.82-6.82-6.82-6.82L23.48,9.89c3.38,3.38,5.15,5.16,6.13,6.09l-6.13,6.13a1,1,0,0,0,.7,1.71,1,1,0,0,0,.71-.3l6.82-6.81A1,1,0,0,0,32,16,1,1,0,0,0,31.71,15.29Z"/><path d="M13.27,27.91a1,1,0,0,0,1-.76L19.7,5.33a1,1,0,0,0-1.94-.48L12.3,26.67A1,1,0,0,0,13,27.88,1,1,0,0,0,13.27,27.91Z"/>
                                </svg>

                                @yield('main.code.title')</h4>
                            <div>
                                @yield('main.code.description')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--
    <section class="hero bg-dark b-b">
        <div class="hero-dark">
            <div class="container">

            <div class="row pt-5">
                <h1 class="text-center center text-white font-thin w-75 padder-v mb-3 pt-5 mt-4">
                    <span class="icon-rocket text-muted m-r-md"></span> @yield('main.title')</h1>
            </div>

            <div class="row pt-5 pb-5">

                <div class="col-md-3 padder-v text-left">
                    <h4 class="text-white font-thin"><i class="icon-monitor mr-2"></i>  @yield('main.screen.title')</h4>
                    <div>
                        @yield('main.screen.description')
                    </div>
                </div>

                <div class="col-md-3 padder-v text-left">
                    <h4 class="text-white font-thin"><i class="icon-layers mr-2"></i> @yield('main.design.title')</h4>
                    <div>
                        @yield('main.design.description')
                    </div>
                </div>
                <div class="col-md-3 padder-v text-left">
                    <h4 class="text-white font-thin"><i class="icon-bulb mr-2"></i> @yield('main.idea.title')</h4>
                    <div>
                        @yield('main.idea.description')
                    </div>
                </div>
                <div class="col-md-3 padder-v text-left">
                    <h4 class="text-white font-thin"><i class="icon-code mr-2"></i> @yield('main.code.title')</h4>
                    <div>
                        @yield('main.code.description')
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
    --}}

    <section class="bg-white position-relative">
        <div class="container pt-5 pb-5">
            <h2 class="center text-dark font-thin w-75 padder-v mb-3 pt-5 ml-0">
                @yield('main.description')
            </h2>

            <div class="row padder-v mt-5">
                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">
                    <div class="item">
                        <div class="h3 v-center text-black">

                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                <path d="M23.845 8.125c-1.395-3.701-4.392-6.045-8.92-6.045-5.762 0-9.793 4.279-10.14 9.861-2.779 0.889-4.784 3.723-4.784 6.933 0 3.93 3.089 7.249 6.744 7.249h0.889c0.552 0 1-0.448 1-1s-0.448-1-1-1h-0.889c-2.572 0-4.776-2.404-4.776-5.249 0-2.515 1.763-4.783 3.974-5.163l0.907-0.156-0.081-0.917-0.008-0.011c0-4.871 3.206-8.545 8.162-8.545 3.972 0 6.204 1.957 7.236 5.295l0.213 0.688 0.721 0.015c3.715 0.078 6.971 3.092 6.971 6.837 0 3.408-2.259 7.206-5.679 7.206h-0.285c-0.552 0-1 0.448-1 1s0.448 1 1 1v-0.003c5-0.132 7.883-4.909 7.883-9.203-0.001-4.617-3.619-8.304-8.141-8.791zM20.198 24.233c-0.279-0.292-0.731-0.292-1.010-0l-2.2 2.427v-10.067c0-0.552-0.448-1-1-1s-1 0.448-1 1v10.076l-2.128-2.373c-0.28-0.292-0.732-0.355-1.011-0.063l-0.252 0.138c-0.28 0.293-0.28 0.765 0 1.057l3.61 3.992c0.005 0.005 0.006 0.012 0.011 0.017l0.253 0.265c0.14 0.146 0.324 0.219 0.509 0.218 0.183 0.001 0.368-0.072 0.507-0.218l0.253-0.265c0.005-0.005 0.008-0.011 0.012-0.017l3.701-4.055c0.279-0.292 0.279-0.639 0-0.932z"></path>
                            </svg>

                            <span class="item-name h4 font-thin"> @yield('main.col1.title')</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            @yield('main.col1.description')
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">
                    <div class="item">
                        <div class="h3 v-center text-black">

                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                <path d="M16 0c-8.836 0-16 7.163-16 16s7.163 16 16 16c8.837 0 16-7.163 16-16s-7.163-16-16-16zM16 30.032c-7.72 0-14-6.312-14-14.032s6.28-14 14-14 14 6.28 14 14-6.28 14.032-14 14.032zM17 15.594v-9.594c0-0.552-0.448-1-1-1s-1 0.448-1 1v10c0 0.283 0.118 0.537 0.308 0.719 0.017 0.020 0.030 0.041 0.048 0.059l4.949 4.95c0.39 0.39 1.023 0.39 1.414 0s0.39-1.024 0-1.415z"></path>
                            </svg>

                            <div class="item-name h4 font-thin">@yield('main.col2.title')</div>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            @yield('main.col2.description')
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">
                    <div class="item">
                        <div class="h3 v-center text-black">

                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                <path d="M12,25l6.67,6.67a1,1,0,0,0,.7.29.91.91,0,0,0,.39-.08,1,1,0,0,0,.61-.92V13.08L31.71,1.71A1,1,0,0,0,31.92.62,1,1,0,0,0,31,0H1A1,1,0,0,0,.08.62,1,1,0,0,0,.29,1.71L11.67,13.08V24.33A1,1,0,0,0,12,25ZM3.41,2H28.59l-10,10a1,1,0,0,0-.3.71V28.59l-4.66-4.67V12.67a1,1,0,0,0-.3-.71Z"/>
                            </svg>

                            <span class="item-name h4 font-thin">@yield('main.col3.title')</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            @yield('main.col3.description')
                        </div>
                    </div>
                </div>
            </div>

            <div class="row padder-v mt-sm-5 mb-sm-5">
                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">
                    <div class="item">
                        <div class="h3 v-center text-black">

                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                <path d="M28.3 22.247c-1.167-1.419-2.765-3.429-2.765-5.48v-6.53c0-5.625-4.207-10.202-9.584-10.202-5.378 0-9.552 4.577-9.552 10.202v6.53c0 2.016-1.734 3.921-2.833 5.4-0.989 1.328-1.77 2.378-1.242 3.427 0.463 0.923 1.624 1.041 2.583 1.041h5.73c0.002 2.944 2.389 5.331 5.333 5.331s5.333-2.386 5.334-5.331h5.864c0.61 0 2.036 0 2.527-1.038 0.495-1.050-0.297-2.016-1.395-3.351zM15.969 29.871c-1.788 0-3.239-1.448-3.241-3.235h6.482c-0.003 1.787-1.452 3.235-3.241 3.235zM27.168 24.506h-22.262c-0.153 0-0.281-0.005-0.386-0.012 0.206-0.319 0.508-0.727 0.755-1.058 1.218-1.637 3.255-3.949 3.255-6.669v-6.53c0-4.452 3.22-8.073 7.423-8.073s7.455 3.622 7.455 8.073v6.53c0 2.813 1.878 5.164 3.249 6.832 0.231 0.281 0.507 0.617 0.722 0.905-0.064 0.002-0.134 0.003-0.209 0.003z"></path>
                            </svg>

                            <span class="item-name h4 font-thin">@yield('main.col4.title')</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            @yield('main.col4.description')
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">
                    <div class="item">
                        <div class="h3 v-center text-black">

                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                <path d="M31.707 30.282l-9.717-9.776c1.811-2.169 2.902-4.96 2.902-8.007 0-6.904-5.596-12.5-12.5-12.5s-12.5 5.596-12.5 12.5 5.596 12.5 12.5 12.5c3.136 0 6.002-1.158 8.197-3.067l9.703 9.764c0.39 0.39 1.024 0.39 1.415 0s0.39-1.023 0-1.415zM12.393 23.016c-5.808 0-10.517-4.709-10.517-10.517s4.708-10.517 10.517-10.517c5.808 0 10.516 4.708 10.516 10.517s-4.709 10.517-10.517 10.517z"></path>
                            </svg>

                            <span class="item-name h4 font-thin">@yield('main.col5.title')</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            @yield('main.col5.description')
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">
                    <div class="item">
                        <div class="h3 v-center text-black">

                            <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                <path d="M42.001,32.000 L14.010,32.000 C12.908,32.000 12.010,31.104 12.010,30.001 L12.010,28.002 C12.010,27.636 12.211,27.300 12.532,27.124 L22.318,21.787 C19.040,18.242 19.004,13.227 19.004,12.995 L19.010,7.002 C19.010,6.946 19.015,6.891 19.024,6.837 C19.713,2.751 24.224,0.007 28.005,0.007 C28.006,0.007 28.008,0.007 28.009,0.007 C31.788,0.007 36.298,2.749 36.989,6.834 C36.998,6.889 37.003,6.945 37.003,7.000 L37.006,12.994 C37.006,13.225 36.970,18.240 33.693,21.785 L43.479,27.122 C43.800,27.298 44.000,27.634 44.000,28.000 L44.000,30.001 C44.000,31.104 43.103,32.000 42.001,32.000 ZM31.526,22.880 C31.233,22.720 31.039,22.425 31.008,22.093 C30.978,21.761 31.116,21.436 31.374,21.226 C34.971,18.310 35.007,13.048 35.007,12.995 L35.003,7.089 C34.441,4.089 30.883,2.005 28.005,2.005 C25.126,2.006 21.570,4.091 21.010,7.091 L21.004,12.997 C21.004,13.048 21.059,18.327 24.636,21.228 C24.895,21.438 25.033,21.763 25.002,22.095 C24.972,22.427 24.778,22.722 24.485,22.882 L14.010,28.596 L14.010,30.001 L41.999,30.001 L42.000,28.595 L31.526,22.880 ZM18.647,2.520 C17.764,2.177 16.848,1.997 15.995,1.997 C13.116,1.998 9.559,4.083 8.999,7.083 L8.993,12.989 C8.993,13.041 9.047,18.319 12.625,21.220 C12.884,21.430 13.022,21.755 12.992,22.087 C12.961,22.419 12.767,22.714 12.474,22.874 L1.999,28.588 L1.999,29.993 L8.998,29.993 C9.550,29.993 9.997,30.441 9.997,30.993 C9.997,31.545 9.550,31.993 8.998,31.993 L1.999,31.993 C0.897,31.993 -0.000,31.096 -0.000,29.993 L-0.000,27.994 C-0.000,27.629 0.200,27.292 0.521,27.117 L10.307,21.779 C7.030,18.234 6.993,13.219 6.993,12.988 L6.999,6.994 C6.999,6.939 7.004,6.883 7.013,6.829 C7.702,2.744 12.213,-0.000 15.995,-0.000 C15.999,-0.000 16.005,-0.000 16.010,-0.000 C17.101,-0.000 18.262,0.227 19.369,0.656 C19.885,0.856 20.140,1.435 19.941,1.949 C19.740,2.464 19.158,2.720 18.647,2.520 Z" class="cls-1"/>
                            </svg>

                            <span class="item-name h4 font-thin">@yield('main.col6.title')</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            @yield('main.col6.description')
                        </div>
                    </div>
                </div>

            </div>

            <div class="row padder-v mt-sm-5 mb-sm-5">
                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">
                    <div class="item">
                        <div class="h3 v-center text-black">

                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                <path d="M16.642 20.669c-0.391 0.39-0.391 1.023-0 1.414 0.195 0.195 0.451 0.293 0.707 0.293s0.512-0.098 0.707-0.293l5.907-6.063-5.907-6.063c-0.39-0.39-1.023-0.39-1.414 0s-0.391 1.024 0 1.414l3.617 3.617h-19.264c-0.552 0-1 0.448-1 1s0.448 1 1 1h19.326zM30.005 0h-18c-1.105 0-2.001 0.895-2.001 2v9h2.014v-7.78c0-0.668 0.542-1.21 1.21-1.21h15.522c0.669 0 1.21 0.542 1.21 1.21l0.032 25.572c0 0.668-0.541 1.21-1.21 1.21h-15.553c-0.668 0-1.21-0.542-1.21-1.21v-7.824l-2.014 0.003v9.030c0 1.105 0.896 2 2.001 2h18c1.105 0 2-0.895 2-2v-28c-0.001-1.105-0.896-2-2-2z"></path>
                            </svg>

                            <span class="item-name h4 font-thin">@yield('main.col7.title')</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            @yield('main.col7.description')
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-4 m-md-0 mb-4 py-2">
                    <div class="item">
                        <div class="h3 v-center text-black">

                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                <path d="M22.005 0h-12.009c-1.657 0-3 1.343-3 3v26c0 1.657 1.343 3 3 3h12.009c1.657 0 3-1.343 3-3v-26c0-1.657-1.343-3-3-3zM23.005 29c0 0.552-0.448 1-1 1h-12.009c-0.552 0-1-0.448-1-1v-26c0-0.552 0.448-1 1-1h12.009c0.552 0 1 0.448 1 1v26zM16.002 25.006c-1.102 0-1.995 0.893-1.995 1.994s0.893 1.995 1.995 1.995c1.102 0 1.995-0.894 1.995-1.995s-0.892-1.994-1.995-1.994zM18.002 3h-4c-0.552 0-1 0.448-1 1s0.448 1 1 1h4c0.552 0 1-0.448 1-1s-0.448-1-1-1z"></path>
                            </svg>

                            <span class="item-name h4 font-thin">@yield('main.col8.title')</span>
                        </div>
                        <div class="linear-gradient h-1/2 bg-primary w-xs mt-3 mb-3" style="height: 2px;"></div>
                        <div class="item-desc">
                            @yield('main.col8.description')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="github pos-rlt no-overflow b-t hidden-xs">
        <div class="container h-full v-center">
            <div class="row w-full m-t-xxl m-b-xxl">
                <div class="col-lg-5">
                    <div class="">
                        <a href="https://github.com/orchidsoftware/platform">
                            <img src="/assets/img/github_logo.png" alt="Github" class="m-b-lg">
                        </a>
                        <p class="h3 l-h-1x text-dark font-thin m-b-lg"> @yield('github.title')</p>
                        <p>
                            @yield('github.description')
                        </p>

                        <p class="padder-v">
                            <a href="/@yield('lang')/docs"
                               class="btn btn-lg btn-outline-primary btn-rounded">
                                @yield('read.doc')


                                <svg class="ml-1" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32" fill="currentColor">
                                    <path d="M29.753 0.049l-13.22 3.581c-0.336 0.090-1.066 0.089-1.4-0.005l-12.88-3.569c-1.149-0.317-2.263 0.512-2.263 1.696v24.316c0 1.003 0.76 1.962 1.728 2.232l12.88 3.57c0.345 0.096 0.788 0.149 1.248 0.149 0.315 0 0.781-0.024 1.21-0.142l13.22-3.581c0.971-0.262 1.734-1.22 1.734-2.227v-24.317c0.001-1.183-1.113-2.014-2.258-1.703zM15 29.904l-12.779-3.533c-0.096-0.026-0.232-0.203-0.232-0.303v-24.001l12.608 3.486c0.122 0.034 0.259 0.061 0.402 0.083v24.269zM30.010 26.068c0 0.099-0.162 0.27-0.258 0.297l-12.753 3.454v-24.247c0.018-0.005 0.038-0.007 0.056-0.012l12.954-3.504v24.012h0zM20.062 11.447c0.090 0 0.182-0.011 0.272-0.037l6.998-1.97c0.532-0.15 0.842-0.702 0.692-1.234s-0.705-0.84-1.234-0.692l-6.998 1.97c-0.532 0.15-0.842 0.702-0.692 1.234 0.124 0.441 0.525 0.729 0.962 0.729zM20.063 17.447c0.090 0 0.182-0.012 0.272-0.037l6.998-1.97c0.532-0.15 0.842-0.702 0.692-1.234s-0.705-0.84-1.234-0.693l-6.998 1.97c-0.532 0.15-0.842 0.702-0.692 1.233 0.124 0.442 0.525 0.73 0.962 0.73zM20.063 23.447c0.090 0 0.182-0.012 0.272-0.037l6.998-1.97c0.532-0.151 0.842-0.702 0.692-1.234s-0.705-0.84-1.234-0.692l-6.998 1.97c-0.532 0.151-0.842 0.702-0.692 1.234 0.124 0.441 0.525 0.73 0.962 0.73zM12.332 9.484l-6.998-1.97c-0.529-0.147-1.084 0.161-1.234 0.692s0.16 1.083 0.692 1.234l6.998 1.97c0.090 0.025 0.181 0.037 0.271 0.037 0.437 0 0.838-0.288 0.962-0.729 0.149-0.531-0.16-1.083-0.693-1.234zM12.332 15.484l-6.998-1.97c-0.529-0.148-1.084 0.161-1.234 0.693s0.16 1.083 0.692 1.234l6.998 1.97c0.090 0.026 0.181 0.037 0.271 0.037 0.437 0 0.838-0.288 0.962-0.73 0.149-0.531-0.16-1.083-0.693-1.234zM12.332 21.484l-6.998-1.97c-0.529-0.148-1.084 0.161-1.234 0.692s0.16 1.083 0.692 1.234l6.998 1.97c0.090 0.026 0.181 0.037 0.271 0.037 0.437 0 0.838-0.288 0.962-0.73 0.149-0.532-0.16-1.083-0.693-1.234z"></path>
                                </svg>

                            </a>
                        </p>

                        <p class="text-muted m-t">
                            @yield('github.help')
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a href="https://github.com/orchidsoftware/platform">
            <img src="/assets/img/github_browser.png" alt="Laravel Orchid Github" class="github_screenshot none d-md-block">
        </a>
    </section>


@endsection
