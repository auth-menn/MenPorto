<section lang="en" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name', 'Portfolio') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body class="bg-gradient-to-r from-gray-900 via-blue-900 to-gray-900">
        <div id="particles" class="fixed inset-0 z-0"></div>
        
        <header class="fixed w-full backdrop-blur-lg bg-white/5 z-50 shadow-xl">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    <div class="absolute left-7 top-1/2 transform -translate-y-1/2">
                        <div class="animation-container relative flex items-center justify-center w-20 h-20">\
                            <button id="theme-toggle" class="p-3 rounded-full shadow-lg z-10 relative">
                                <i class="fas fa-moon text-cyan-300 text-xl"></i>
                            </button>
                            <div class="ring absolute w-24 h-24 border-2 border-cyan-400 rounded-full animate-ping"></div>
                            <div class="ring absolute w-32 h-32 border-2 border-blue-400 rounded-full animate-ping delay-200"></div>
                            <div class="ring absolute w-40 h-40 border-2 border-cyan-500 rounded-full animate-ping delay-400"></div>
                            <div class="ring absolute w-48 h-48 border-2 border-blue-500 rounded-full animate-ping delay-600"></div>
                        </div>
                    </div>
                    <div class="absolute left-16 top-1/2 transform -translate-y-1/2">
                        <a href="#" class="ml-4 text-2xl font-bold bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent font-[Staatliches]">
                            Men Portfolio
                        </a>
                        </div>
                    
                    <div class="flex flex-1 justify-center">
                    <nav class="hidden md:flex space-x-20">
                        <a href="#home" class="nav-link text-sm font-mono hover:text-cyan-400 transition duration-300 ease-in-out">Home</a>
                        <a href="#about" class="nav-link text-sm font-mono hover:text-cyan-400 transition duration-300 ease-in-out">About</a>
                        <a href="#experience" class="nav-link text-sm font-mono hover:text-cyan-400 transition duration-300 ease-in-out">Experience</a>
                        <a href="#testi" class="nav-link text-sm font-mono hover:text-cyan-400 transition duration-300 ease-in-out">Journey</a>
                        <a href="#skills" class="nav-link text-sm font-mono hover:text-cyan-400 transition duration-300 ease-in-out">Skills</a>
                        <a href="#projects" class="nav-link text-sm font-mono hover:text-cyan-400 transition duration-300 ease-in-out">Projects</a>
                        <a href="#hobby" class="nav-link text-sm font-mono hover:text-cyan-400 transition duration-300 ease-in-out">Hobby</a>
                        <a href="#contact" class="nav-link text-sm font-mono hover:text-cyan-400 transition duration-300 ease-in-out">Contact</a>
                    </nav>
                </div>
                    
                    <div class="hidden md:flex absolute right-16 top-1/2 transform -translate-y-1/2">
                        <div class="flex items-center">
                            <button class="cta-button relative overflow-hidden bg-blue-600 text-white font-mono font-semibold px-4 py-2 text-sm rounded-md shadow-md transition-all duration-300 hover:scale-105 hover:shadow-blue-500/50 focus:outline-none active:scale-95">
                                <span class="relative z-10 flex items-center">
                                    Download CV 
                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                         class="h-6 w-6 ml-2 arrow-icon arrow-hover-effect" 
                                         viewBox="0 0 24 24" 
                                         fill="currentColor">
                                        <path d="M12 4.586L13.414 6 9 10.414 15.414 6 17 7.586l-6 6-6-6z" />
                                        <path d="M12 16l-4.586-4.586L6 10.414 12 16z" />
                                    </svg>
                                    <span class="icon-circle" id="circle"></span>
                                </span>
                                <span class="absolute inset-0 bg-white opacity-20 scale-0 transition-transform duration-500 rounded-full pointer-events-none" id="ripple"></span>
                            </button>
                        </div>
                    </div>

                    <div class="md:hidden absolute right-6 top-1/2 transform -translate-y-1/2">
                        <button id="menu-toggle" class="text-white text-2xl focus:outline-none transition-transform duration-300">
                            <i id="menu-icon" class="fas fa-bars transition-transform duration-300"></i>
                        </button>
                    </div>
                    
                    <div id="mobile-menu" class="hidden opacity-0 absolute top-20 right-6 bg-gray-800/70 text-white rounded-md shadow-lg py-2 w-48 backdrop-blur-md transition-all duration-300 border-2 border-blue-600/50">
                        <a href="#home" class="block px-4 py-2  text-sm font-mono hover:bg-blue-600">Home</a>
                        <div class="border-t border-blue-600/50 w-3/4 mx-auto"></div>
                        <a href="#about" class="block px-4 py-2  text-sm font-mono hover:bg-blue-600">About</a>
                        <div class="border-t border-blue-600/50 w-3/4 mx-auto"></div>
                        <a href="#experience" class="block px-4 py-2  text-sm font-mono hover:bg-blue-600">Experience</a>
                        <div class="border-t border-blue-600/50 w-3/4 mx-auto"></div>
                        <a href="#testi" class="block px-4 py-2  text-sm font-mono hover:bg-blue-600">Journey</a>
                        <div class="border-t border-blue-600/50 w-3/4 mx-auto"></div>
                        <a href="#skills" class="block px-4 py-2  text-sm font-mono hover:bg-blue-600">Skills</a>
                        <div class="border-t border-blue-600/50 w-3/4 mx-auto"></div>
                        <a href="#projects" class="block px-4 py-2 hover:bg-blue-600">Projects</a>
                        <div class="border-t border-blue-600/50 w-3/4 mx-auto"></div>
                        <a href="#hobby" class="block px-4 py-2  text-sm font-mono hover:bg-blue-600">Hobby</a>
                        <div class="border-t border-blue-600/50 w-3/4 mx-auto"></div>
                        <a href="#contact" class="block px-4 py-2  text-sm font-mono hover:bg-blue-600">Contact</a>
                        <div class="border-t border-blue-600/50 w-3/4 mx-auto"></div>
                        <a href="path/to/cv.pdf" download 
                            class="relative flex justify-center items-center px-4 py-2 mx-2 mt-2 bg-blue-600/50 text-white  text-sm font-mono font-semibold rounded-md shadow-md transition-all duration-300 hover:scale-105 hover:shadow-blue-500/50 focus:outline-none active:scale-95">
                            Download CV 
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M6 2a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8.828a2 2 0 00-.586-1.414l-4.828-4.828A2 2 0 0013.172 2H6zm6 1.414L17.586 9H14a2 2 0 01-2-2V3.414zM8 13h8v2H8v-2zm0 4h8v2H8v-2z" />
                            </svg>                            
                        </a>
                    </div>
                    
                    
                </div>
                </div>
            </div>
    </section
