<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ProHire – Get the right job that you deserve</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1F2B6C',
                        primaryLight: '#3C55A5',
                        softBlue: '#E8F0FF',
                        sectionBg: '#F4F6FB',
                    },
                    boxShadow: {
                        smooth: '0 18px 45px rgba(31, 43, 108, .12)'
                    },
                    borderRadius: {
                        '4xl': '2rem'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-sectionBg text-slate-800">

<div class="min-h-screen flex flex-col">

    <!-- ================= NAVBAR + HERO ================= -->
    <header class="relative text-white">
        <!-- Background image -->
        <div class="absolute inset-0">
            <img 
                src="{{ asset('storage/fixed.svg') }}" 
                class="w-full h-full object-cover object-center"
                style="object-fit: cover; width: 100%; height: 100%;">
        </div>

        <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/40 to-black/60"></div>


        <!-- Content container -->
        <div class="relative z-10 max-w-6xl mx-auto px-6 pt-5 pb-28">
            <!-- NAVBAR -->
            <nav class="flex items-center justify-between mb-10">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('storage/logotps.svg') }}" class="w-sm" alt="ProHire Logo">
                </div>

                <div class="hidden md:flex items-center space-x-8 text-sm">
                    <a href="#" class="font-semibold text-white border-b-2 border-white pb-1">Home</a>
                    <a href="#" class="hover:text-softBlue">Jobs Finder</a>
                    <a href="#" class="hover:text-softBlue">Career Offers</a>
                    <a href="#" class="hover:text-softBlue">About Us</a>
                </div>

                <div class="flex items-center space-x-3 text-sm">
    <a href="{{ route('login') }}" class="hover:text-softBlue">
        Log in
    </a>

    <a href="{{ route('register.step1') }}"
       class="bg-white text-primary px-4 py-2 rounded-full font-medium shadow-smooth hover:bg-softBlue transition">
        Sign Up
    </a>
</div>

            </nav>

            <!-- HERO CONTENT -->
            <div class="max-w-3xl mx-auto text-center mt-6">
                <span
                    class="inline-block text-xs uppercase tracking-[0.25em] bg-white/10 border border-white/30 px-6 py-1 rounded-full mb-6">
                    Best Job Solution Platform
                </span>

                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-5">
                    Get the <span class="text-softBlue">right job</span><br>
                    that you deserve
                </h1>

                <p class="text-sm md:text-base text-gray-100 max-w-2xl mx-auto mb-8">
                    When you’re searching for a job, there are a few things you can do
                    to get the most out of your search.
                </p>

                <!-- Search bar -->
                <div class="bg-white rounded-full shadow-smooth flex flex-col md:flex-row items-stretch md:items-center p-2 md:p-3 space-y-2 md:space-y-0">
                    <div class="flex items-center flex-1 px-4 py-2">
                        <span class="w-2 h-2 rounded-full bg-primary mr-3"></span>
                        <input type="text" placeholder="Job title or keyword"
                               class="w-full text-sm text-slate-700 placeholder:text-slate-400 focus:outline-none">
                    </div>
                    <div class="h-px md:h-10 md:w-px bg-slate-200 md:mx-2"></div>
                    <div class="flex items-center flex-1 px-4 py-2">
                        <svg class="w-4 h-4 text-slate-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17.657 16.657L13.414 12.414M15 10a5 5 0 11-10 0 5 5 0 0110 0z"/>
                        </svg>
                        <input type="text" placeholder="Location"
                               class="w-full text-sm text-slate-700 placeholder:text-slate-400 focus:outline-none">
                    </div>
                    <div class="mt-1 md:mt-0 md:ml-2">
                        <button
                            class="w-full md:w-auto bg-primary hover:bg-primaryLight text-white text-sm font-medium px-8 py-3 rounded-full transition">
                            Find Jobs
                        </button>
                    </div>
                </div>

                <p class="mt-4 text-xs text-gray-200">25K+ Jobs for you to Explore</p>
            </div>
        </div>
    </header>

    <!-- ================= SECTION: DISCOVER A CAREER ================= -->
    <section class="bg-white pt-16 pb-14">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
            <!-- Illustration -->
            <div class="relative">
                <div
                    class="">
                    <img src="{{ asset("storage/Vector1.svg") }}" class="w-full h-full object-cover" alt="Professional woman">
                </div>
                <div
                    class="absolute -bottom-5 right-4 bg-white rounded-full shadow-smooth px-6 py-5 flex flex-col items-center text-xs font-semibold">
                    <span class="text-xl mb-1">18K+</span>
                    <span class="text-slate-500">Proven and<br>Trustworthy</span>
                </div>
            </div>

            <!-- Text -->
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-primary mb-4">
                    Discover a Career That<br>
                    Truly Fits You.
                </h2>
                <p class="text-sm md:text-base text-slate-600 mb-6">
                    Find jobs that match your skills, your passion, and your goals, quickly and effortlessly
                    with our smart matching system.
                </p>

                <button
                    class="bg-primary text-white text-sm font-medium px-8 py-3 rounded-full shadow-smooth hover:bg-primaryLight transition">
                    Register Now
                </button>
            </div>
        </div>
    </section>

    <!-- ================= SECTION: FOR EMPLOYERS / FOR CANDIDATES ================= -->
    <section class="bg-white pb-16">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-8">

            <!-- For Employers -->
            <div
                class="bg-gradient-to-r from-primary to-primaryLight rounded-3xl text-white p-8 flex items-center shadow-smooth">
                <div class="flex-1">
                    <h3 class="text-xl font-semibold mb-3">For Employers</h3>
                    <p class="text-sm mb-5">
                        Find professionals from around the world and across all skills.
                    </p>
                    <button
                        class="bg-white text-primary px-6 py-2 rounded-full text-sm font-medium shadow hover:bg-softBlue transition">
                        Post jobs for Free
                    </button>
                </div>
                <img src="{{ asset("storage/Vector2.svg") }}" class="hidden md:block h-32 w-32 rounded-3xl object-cover ml-6">
            </div>

            <!-- For Candidates -->
            <div
                class="bg-[#E5F0FF] rounded-3xl p-8 flex items-center shadow-smooth">
                <div class="flex-1">
                    <h3 class="text-xl font-semibold text-primary mb-3">For Candidates</h3>
                    <p class="text-sm text-slate-700 mb-5">
                        Build your professional profile, find new job opportunities.
                    </p>
                    <button
                        class="bg-primary text-white px-6 py-2 rounded-full text-sm font-medium shadow hover:bg-primaryLight transition">
                        Upload your CV
                    </button>
                </div>
                <img src="{{ asset("storage/Vector3.svg") }}" class="hidden md:block h-32 w-32 rounded-3xl object-cover ml-6">
            </div>

        </div>
    </section>

    <!-- ================= SECTION: HOW IT WORKS ================= -->
    <section class="bg-sectionBg py-16">
        <div class="max-w-6xl mx-auto px-6 text-center mb-10">
            <span class="inline-block text-xs px-4 py-1 bg-white rounded-full shadow text-slate-500 mb-4">
                How it Works
            </span>
            <h2 class="text-2xl md:text-3xl font-bold text-primary mb-3">
                Making Your Job Search Easy
            </h2>
            <p class="text-sm md:text-base text-slate-600 max-w-3xl mx-auto">
                This platform guides you from building your skill profile to finding job matches and applying with ease.
                Everything is designed to help you understand your strengths and connect with the right opportunities.
            </p>
        </div>

        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-4 gap-6">
            <!-- Step 1 -->
            <div class="bg-white rounded-2xl shadow p-5 text-left">
                <h4 class="text-sm font-semibold text-primary mb-1">Step 1</h4>
                <p class="text-sm font-medium mb-2">Login or Register</p>
                <p class="text-xs text-slate-600">
                    Login with email and sign up with email, Facebook or LinkedIn.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="bg-white rounded-2xl shadow p-5 text-left">
                <h4 class="text-sm font-semibold text-primary mb-1">Step 2</h4>
                <p class="text-sm font-medium mb-2">Complete Your Skill Profile</p>
                <p class="text-xs text-slate-600">
                    Tell us about your skills, experience, education, and certifications,
                    so we can match you with jobs that fit your abilities.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="bg-white rounded-2xl shadow p-5 text-left">
                <h4 class="text-sm font-semibold text-primary mb-1">Step 3</h4>
                <p class="text-sm font-medium mb-2">Find Jobs &amp; See Your Match Score</p>
                <p class="text-xs text-slate-600">
                    Browse job listings and open any position to instantly see your Match Score.
                </p>
            </div>

            <!-- Step 4 -->
            <div class="bg-white rounded-2xl shadow p-5 text-left">
                <h4 class="text-sm font-semibold text-primary mb-1">Step 4</h4>
                <p class="text-sm font-medium mb-2">Apply &amp; Track Your Progress</p>
                <p class="text-xs text-slate-600">
                    Apply in one click and monitor your application progress easily.
                </p>
            </div>
        </div>
    </section>

    <!-- ================= SECTION: CAREER OFFERS ================= -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-6">
            <div
                class="bg-gradient-to-r from-[#8FB7F3] via-[#9CC5F6] to-[#7AA6F0] rounded-4xl p-10 text-center text-white shadow-smooth">
                <h2 class="text-2xl md:text-3xl font-bold mb-3">Career Offers</h2>
                <p class="max-w-3xl mx-auto text-sm md:text-base text-white/90 mb-8">
                    Follow what excites you, and let your passion guide your career journey.
                    The right path begins with doing what you truly love.
                </p>

                <div class="grid md:grid-cols-4 gap-5">
                    <!-- Card template -->
                    <div class="bg-white text-primary rounded-2xl py-5 px-4 shadow">
                        <div class="text-sm font-semibold mb-1">Engineering</div>
                        <div class="text-[11px] text-slate-500">301 Open Position</div>
                    </div>

                    <div class="bg-white text-primary rounded-2xl py-5 px-4 shadow">
                        <div class="text-sm font-semibold mb-1">IT &amp; Software</div>
                        <div class="text-[11px] text-slate-500">2001 Open Position</div>
                    </div>

                    <div class="bg-white text-primary rounded-2xl py-5 px-4 shadow">
                        <div class="text-sm font-semibold mb-1">Accountancy</div>
                        <div class="text-[11px] text-slate-500">910 Open Position</div>
                    </div>

                    <div class="bg-white text-primary rounded-2xl py-5 px-4 shadow">
                        <div class="text-sm font-semibold mb-1">Business</div>
                        <div class="text-[11px] text-slate-500">19283 Open Position</div>
                    </div>

                    <div class="bg-white text-primary rounded-2xl py-5 px-4 shadow">
                        <div class="text-sm font-semibold mb-1">Education</div>
                        <div class="text-[11px] text-slate-500">43301 Open Position</div>
                    </div>

                    <div class="bg-white text-primary rounded-2xl py-5 px-4 shadow">
                        <div class="text-sm font-semibold mb-1">Human Resource</div>
                        <div class="text-[11px] text-slate-500">31 Open Position</div>
                    </div>

                    <div class="bg-white text-primary rounded-2xl py-5 px-4 shadow">
                        <div class="text-sm font-semibold mb-1">Health Care</div>
                        <div class="text-[11px] text-slate-500">928 Open Position</div>
                    </div>

                    <div class="bg-white text-primary rounded-2xl py-5 px-4 shadow">
                        <div class="text-sm font-semibold mb-1">Automotive</div>
                        <div class="text-[11px] text-slate-500">370 Open Position</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= SECTION: ABOUT / TESTIMONIAL ================= -->
    <section class="bg-sectionBg py-16">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

            <!-- Photo block -->
            <div class="relative">
                <div class="bg-white rounded-full shadow-smooth p-4 inline-block">
                    <img src="{{ asset("storage/Vector4.svg") }}"
                         class="h-56 w-56 md:h-64 md:w-64 rounded-full object-cover"
                         alt="Happy user">
                </div>
            </div>

            <!-- Text testimonial -->
            <div>
                <span class="inline-block text-xs px-3 py-1 bg-white rounded-full shadow text-slate-500 mb-4">
                    About us
                </span>

                <h2 class="text-2xl md:text-3xl font-bold text-primary mb-4">
                    What Our User Say About Us
                </h2>
                <p class="text-sm md:text-base text-slate-600 mb-6">
                    “This platform makes it incredibly easy to understand my skill gaps and track my learning progress.
                    The personalized recommendations help me know exactly what to learn next.”
                </p>

                <div class="flex items-center space-x-3">
                    <div class="h-10 w-10 rounded-full bg-slate-300 flex items-center justify-center">
                        <span class="text-xs font-semibold">JB</span>
                    </div>
                    <div>
                        <div class="text-sm font-semibold text-slate-800">Justin Bieber</div>
                        <div class="text-xs text-slate-500">Videographer Staff</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="bg-[#E3E7F5] pt-10 pb-5 text-xs text-slate-600">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-4 gap-8 mb-6">

            <!-- Logo & description -->
            <div class="md:col-span-2">
                <div class="flex items-center space-x-3 mb-4">
                    <img src="{{ asset('storage/logotps.svg') }}" class="w-sm" alt="ProHire Logo">
                </div>
                <p class="text-xs leading-relaxed">
                    ProHire is a web platform created as part of a university project to explore skill mapping and career analytics.
                    It helps users understand their strengths, identify gaps, and receive personalized learning recommendations.
                </p>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="font-semibold text-primary mb-3 text-sm">Contact Us</h4>
                <p class="mb-1">+62 123 4567 8910</p>
                <p class="mb-1">prohire@gmail.com</p>
            </div>

            <!-- Navigate -->
            <div>
                <h4 class="font-semibold text-primary mb-3 text-sm">Navigate</h4>
                <ul class="space-y-1">
                    <li><a href="#" class="hover:text-primary">Home</a></li>
                    <li><a href="#" class="hover:text-primary">Jobs Finder</a></li>
                    <li><a href="#" class="hover:text-primary">Career Offers</a></li>
                    <li><a href="#" class="hover:text-primary">About Us</a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-slate-300 mt-4 pt-3">
            <p class="text-center text-[11px] text-slate-500">
                ©2025 ProHire. All rights reserved | Powered by hasanuddin.university
            </p>
        </div>
    </footer>

</div>

</body>
</html>
