<nav class="bg-white border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('storage/images/logo.jpg') }}" class=" h-14" alt="Job Hub" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap">Job Hub</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
                <li class=" mb-7">
                    <a id="nav-home" href="/" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 border-b-2 md:hover:text-blue-700 md:p-0" >Home</a>
                </li>
                <li class=" mb-7">
                    <a id="nav-about" href="{{route('about')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 border-b-2 md:hover:text-blue-700 md:p-0">About</a>
                </li>
                <li class=" mb-7">
                    <a id="nav-jobs" href="/jobs" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 border-b-2 md:hover:text-blue-700 md:p-0">Jobs</a>
                </li>
                <li class="flex justify-start items-center  mb-7">
                    <a id="nav-login" href="{{route('auth.login')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 border-b-2 md:hover:text-blue-700 md:p-0">Login</a>
                    <span>/</span>
                    <a id="nav-register" href="{{route('auth.register')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 border-b-2 md:hover:text-blue-700 md:p-0">Register</a>
                </li>
                <li class="mb-7">
                    <a id="nav-adivce" href="/advice" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 border-b-2 md:hover:text-blue-700 md:p-0">Finding a job</a>
                </li>
                <li class="mb-7">
                    <a id="nav-partner" href="/partner-companies" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 border-b-2 md:hover:text-blue-700 md:p-0">Companies</a>
                </li>
                <li class="mb-7">
                    <a id="nav-jobposting" href="/job-posting" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 border-b-2 md:hover:text-blue-700 md:p-0">Post a job</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const currentPath = window.location.pathname;
        const navLinks = {
            '/': document.getElementById('nav-home'),
            '/about': document.getElementById('nav-about'),
            '/jobs': document.getElementById('nav-jobs'),
            '/login': document.getElementById('nav-login'),
            '/register': document.getElementById('nav-register'),
            '/advice': document.getElementById('nav-adivce') ,
            '/partner-companies' : document.getElementById('nav-partner') ,
            '/job-posting' : document.getElementById('nav-jobposting')
            
        };

       
       
        if( navLinks[currentPath]){
            
            navLinks[currentPath].parentNode.classList.add("border-bottom-customize");
     

        }
        
       
            
        
    });
</script>
