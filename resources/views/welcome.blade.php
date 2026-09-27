<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Velvet Haven Resort & Spa | Ultimate Luxury</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .gradient-pink { background: linear-gradient(135deg, #FF80AB 0%, #FF4081 100%); }
        .gradient-purple { background: linear-gradient(135deg, #7C4DFF 0%, #651FFF 100%); }
        .gradient-glass { background: rgba(255, 255, 255, 0.92); backdrop-filter: blur(16px); }
        .custom-shadow { box-shadow: 0 25px 60px -15px rgba(124, 77, 255, 0.2); }
        .cute-badge { background: linear-gradient(135deg, #F8BBD0 0%, #FF80AB 100%); }
    </style>
</head>
<body class="bg-[#FAF8FC] text-[#211262] antialiased">

    <div class="gradient-pink text-white text-xs font-extrabold text-center py-2.5 px-4 tracking-wider uppercase shadow-sm">
        ✨ SPECIAL OFFER: 25% Off All Pink Velvet Suites + Complimentary Hydro Spa! Code: <span class="underline">CUTE2026</span> ✨
    </div>

    <nav class="sticky top-0 left-0 right-0 z-50 gradient-glass border-b border-pink-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="w-11 h-11 gradient-pink rounded-2xl flex items-center justify-center text-white font-extrabold text-2xl shadow-lg">
                    🌸
                </div>
                <span class="text-2xl font-extrabold tracking-tight text-[#211262]">Velvet<span class="text-[#FF4081]">Haven</span></span>
            </div>
            
            <div class="hidden lg:flex space-x-8 font-semibold text-sm text-[#211262]">
                <a href="#hero" class="hover:text-[#FF4081] transition">Home</a>
                <a href="#rooms" class="hover:text-[#FF4081] transition">Luxury Suites</a>
                <a href="#amenities" class="hover:text-[#FF4081] transition">Facilities</a>
                <a href="#dining" class="hover:text-[#FF4081] transition">Dining & Café</a>
                <a href="#spa" class="hover:text-[#FF4081] transition">Wellness Spa</a>
                <a href="#reviews" class="hover:text-[#FF4081] transition">Reviews</a>
                <a href="#faq" class="hover:text-[#FF4081] transition">FAQ</a>
            </div>

            <a href="#booking" class="gradient-pink text-white font-bold px-7 py-3 rounded-full shadow-lg hover:opacity-95 transition transform hover:-translate-y-0.5">
                Book Suite ✨
            </a>
        </div>
    </nav>

    <section id="hero" class="pt-20 pb-24 px-6 relative overflow-hidden">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="inline-block px-4 py-2 rounded-full cute-badge text-white font-extrabold text-xs tracking-wider uppercase mb-5 shadow-sm">
                    🎀 5-Star Boutique Luxury & Spa Resort
                </span>
                <h1 class="text-5xl lg:text-7xl font-extrabold leading-tight text-[#211262] mb-6">
                    A World of Aesthetic <span class="text-[#FF4081]">Elegance</span> & Comfort.
                </h1>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    Indulge in an extraordinary stay featuring handcrafted velvet suites, serene rose hydrotherapy spas, gourmet rooftop dining, and 24/7 personal butler service.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#booking" class="gradient-pink text-white font-bold px-8 py-4 rounded-2xl shadow-xl hover:shadow-pink-200 transition transform hover:-translate-y-1">
                        Reserve Your Stay 🌸
                    </a>
                    <a href="#rooms" class="bg-white text-[#7C4DFF] font-bold px-8 py-4 rounded-2xl border-2 border-purple-100 hover:bg-purple-50 transition shadow-sm">
                        Explore Rooms 🏨
                    </a>
                </div>
            </div>

            <div class="relative">
                <div class="w-full h-[520px] rounded-3xl overflow-hidden custom-shadow relative border-8 border-white">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1000&q=80" alt="Resort" class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-6 -left-6 gradient-glass p-5 rounded-3xl shadow-2xl border border-pink-100 flex items-center space-x-4">
                    <div class="w-12 h-12 gradient-purple rounded-2xl flex items-center justify-center text-white text-xl font-bold">
                        ⭐
                    </div>
                    <div>
                        <p class="font-extrabold text-xl text-[#211262]">4.9 / 5.0</p>
                        <p class="text-xs text-gray-500 font-semibold">2,400+ Verified Guest Reviews</p>
                    </div>
                </div>
                <div class="absolute -top-6 -right-6 gradient-glass p-4 rounded-2xl shadow-xl border border-pink-100 hidden sm:flex items-center space-x-3">
                    <span class="text-2xl">💖</span>
                    <div>
                        <p class="font-bold text-xs text-[#211262]">Voted #1 Boutique Hotel 2026</p>
                        <p class="text-[10px] text-gray-400">Best Aesthetic Stay</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 -mt-10 relative z-20">
        <div class="gradient-glass p-8 rounded-3xl shadow-2xl border border-purple-100 grid md:grid-cols-4 gap-6 items-end">
            <div>
                <label class="block text-xs font-bold text-[#211262] uppercase tracking-wider mb-2">Check-In</label>
                <input type="date" id="search_check_in" class="w-full bg-purple-50/50 border border-purple-100 rounded-2xl p-3.5 text-sm font-semibold focus:outline-none focus:ring-2 focus:ring-[#FF4081]">
            </div>
            <div>
                <label class="block text-xs font-bold text-[#211262] uppercase tracking-wider mb-2">Check-Out</label>
                <input type="date" id="search_check_out" class="w-full bg-purple-50/50 border border-purple-100 rounded-2xl p-3.5 text-sm font-semibold focus:outline-none focus:ring-2 focus:ring-[#FF4081]">
            </div>
            <div>
                <label class="block text-xs font-bold text-[#211262] uppercase tracking-wider mb-2">Select Suite</label>
                <select class="w-full bg-purple-50/50 border border-purple-100 rounded-2xl p-3.5 text-sm font-semibold focus:outline-none focus:ring-2 focus:ring-[#FF4081]">
                    <option>Royal Pink Velvet Suite</option>
                    <option>Blossom Ocean Penthouse</option>
                    <option>Garden Rose Deluxe Room</option>
                </select>
            </div>
            <button onclick="scrollToBooking()" class="gradient-purple text-white font-bold p-4 rounded-2xl shadow-lg hover:opacity-95 transition transform hover:-translate-y-0.5">
                Check Rates ✨
            </button>
        </div>
    </section>

    <section class="py-16 px-6 max-w-7xl mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center bg-white p-10 rounded-3xl border border-purple-50 shadow-sm">
            <div>
                <p class="text-4xl font-extrabold text-[#FF4081]">120+</p>
                <p class="text-xs font-bold text-gray-500 uppercase tracking-widest mt-2">Luxury Suites</p>
            </div>
            <div>
                <p class="text-4xl font-extrabold text-[#7C4DFF]">15+</p>
                <p class="text-xs font-bold text-gray-500 uppercase tracking-widest mt-2">Gourmet Restaurants</p>
            </div>
            <div>
                <p class="text-4xl font-extrabold text-[#FF4081]">100%</p>
                <p class="text-xs font-bold text-gray-500 uppercase tracking-widest mt-2">Ocean & Garden Views</p>
            </div>
            <div>
                <p class="text-4xl font-extrabold text-[#7C4DFF]">24/7</p>
                <p class="text-xs font-bold text-gray-500 uppercase tracking-widest mt-2">Personal Butler Service</p>
            </div>
        </div>
    </section>

    <section id="rooms" class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-[#FF4081] font-extrabold text-sm uppercase tracking-widest">Aesthetic Accommodations</span>
                <h2 class="text-4xl lg:text-5xl font-extrabold text-[#211262] mt-2">Handcrafted Luxury Suites</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-3xl overflow-hidden custom-shadow border border-purple-50 transition transform hover:-translate-y-2">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?auto=format&fit=crop&w=600&q=80" class="h-64 w-full object-cover">
                        <span class="absolute top-4 left-4 gradient-pink text-white text-xs font-extrabold px-4 py-1.5 rounded-full shadow-md">Most Popular 🎀</span>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-[#211262]">Royal Velvet Suite</h3>
                        <p class="text-gray-500 text-sm mt-2 leading-relaxed">King Bed • Oceanfront View • Private Jacuzzi & Free Hydro Spa</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="bg-purple-50 text-[#7C4DFF] text-xs font-bold px-3 py-1 rounded-lg">High-Speed Wifi</span>
                            <span class="bg-purple-50 text-[#7C4DFF] text-xs font-bold px-3 py-1 rounded-lg">Free Breakfast</span>
                        </div>
                        <div class="flex justify-between items-center mt-8 pt-4 border-t border-gray-100">
                            <div>
                                <span class="text-3xl font-extrabold text-[#7C4DFF]">$299</span>
                                <span class="text-xs text-gray-400 font-semibold"> / night</span>
                            </div>
                            <a href="#booking" class="gradient-pink text-white font-bold px-5 py-2.5 rounded-xl text-sm shadow-md">Book Suite</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl overflow-hidden custom-shadow border border-purple-50 transition transform hover:-translate-y-2">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=600&q=80" class="h-64 w-full object-cover">
                        <span class="absolute top-4 left-4 gradient-purple text-white text-xs font-extrabold px-4 py-1.5 rounded-full shadow-md">Ultra Luxury ✨</span>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-[#211262]">Blossom Penthouse</h3>
                        <p class="text-gray-500 text-sm mt-2 leading-relaxed">Private Infinity Pool • 2 Bedrooms • Personal Chef & Butler</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="bg-purple-50 text-[#7C4DFF] text-xs font-bold px-3 py-1 rounded-lg">Infinity Pool</span>
                            <span class="bg-purple-50 text-[#7C4DFF] text-xs font-bold px-3 py-1 rounded-lg">Ocean Balcony</span>
                        </div>
                        <div class="flex justify-between items-center mt-8 pt-4 border-t border-gray-100">
                            <div>
                                <span class="text-3xl font-extrabold text-[#7C4DFF]">$499</span>
                                <span class="text-xs text-gray-400 font-semibold"> / night</span>
                            </div>
                            <a href="#booking" class="gradient-pink text-white font-bold px-5 py-2.5 rounded-xl text-sm shadow-md">Book Suite</a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl overflow-hidden custom-shadow border border-purple-50 transition transform hover:-translate-y-2">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=600&q=80" class="h-64 w-full object-cover">
                        <span class="absolute top-4 left-4 bg-[#FF4081] text-white text-xs font-extrabold px-4 py-1.5 rounded-full shadow-md">Cozy Choice 🌸</span>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-[#211262]">Garden Rose Room</h3>
                        <p class="text-gray-500 text-sm mt-2 leading-relaxed">Botanical Garden View • Queen Bed • Signature Tea Lounge Access</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="bg-purple-50 text-[#7C4DFF] text-xs font-bold px-3 py-1 rounded-lg">Garden Terrace</span>
                            <span class="bg-purple-50 text-[#7C4DFF] text-xs font-bold px-3 py-1 rounded-lg">Organic Tea</span>
                        </div>
                        <div class="flex justify-between items-center mt-8 pt-4 border-t border-gray-100">
                            <div>
                                <span class="text-3xl font-extrabold text-[#7C4DFF]">$199</span>
                                <span class="text-xs text-gray-400 font-semibold"> / night</span>
                            </div>
                            <a href="#booking" class="gradient-pink text-white font-bold px-5 py-2.5 rounded-xl text-sm shadow-md">Book Suite</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="amenities" class="py-20 px-6 bg-purple-50/50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-[#FF4081] font-extrabold text-sm uppercase tracking-widest">World-Class Experiences</span>
                <h2 class="text-4xl font-extrabold text-[#211262] mt-2">Resort Amenities & Services</h2>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-3xl border border-purple-100 text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 gradient-pink rounded-2xl mx-auto flex items-center justify-center text-white text-2xl shadow-md mb-6">🏊‍♀️</div>
                    <h4 class="font-bold text-lg text-[#211262] mb-2">Heated Pool</h4>
                    <p class="text-gray-500 text-sm">Temperature-controlled rooftop pool with sunset views.</p>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-purple-100 text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 gradient-purple rounded-2xl mx-auto flex items-center justify-center text-white text-2xl shadow-md mb-6">💆‍♀️</div>
                    <h4 class="font-bold text-lg text-[#211262] mb-2">Hydro Therapy Spa</h4>
                    <p class="text-gray-500 text-sm">Aromatherapy, hot stone massages & herbal rose baths.</p>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-purple-100 text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 gradient-pink rounded-2xl mx-auto flex items-center justify-center text-white text-2xl shadow-md mb-6">🍸</div>
                    <h4 class="font-bold text-lg text-[#211262] mb-2">Sky Lounge & Bar</h4>
                    <p class="text-gray-500 text-sm">Signature pink cocktails & organic detox smoothies.</p>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-purple-100 text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 gradient-purple rounded-2xl mx-auto flex items-center justify-center text-white text-2xl shadow-md mb-6">🚗</div>
                    <h4 class="font-bold text-lg text-[#211262] mb-2">VIP Airport Pickup</h4>
                    <p class="text-gray-500 text-sm">Complimentary pick and drop in luxury electric sedans.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="dining" class="py-20 px-6 max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="grid grid-cols-2 gap-4">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=500&q=80" class="rounded-3xl h-64 w-full object-cover shadow-md">
                <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=500&q=80" class="rounded-3xl h-64 w-full object-cover shadow-md mt-8">
            </div>
            <div>
                <span class="text-[#FF4081] font-extrabold text-sm uppercase tracking-widest">Gourmet Dining</span>
                <h2 class="text-4xl font-extrabold text-[#211262] mt-2 mb-6">Pink Café & Beachfront Fine Dining</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Our Michelin-starred chefs curate daily organic menus. Enjoy candlelight ocean dinners or cozy in-suite floating breakfasts.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <span class="w-6 h-6 rounded-full gradient-pink flex items-center justify-center text-white text-xs">✓</span>
                        <span class="font-bold text-sm text-[#211262]">24/7 Private In-Suite Dining</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="w-6 h-6 rounded-full gradient-pink flex items-center justify-center text-white text-xs">✓</span>
                        <span class="font-bold text-sm text-[#211262]">Organic Vegan & Gluten-Free Menus</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="booking" class="py-24 px-6 gradient-purple text-white relative">
        <div class="max-w-4xl mx-auto bg-white rounded-3xl p-8 md:p-14 shadow-2xl text-[#211262]">
            <div class="text-center mb-10">
                <span class="text-[#FF4081] font-bold text-xs uppercase tracking-widest">Online Reservation</span>
                <h2 class="text-3xl lg:text-4xl font-extrabold mt-1">Book Your Pink Stay Right Now</h2>
            </div>

            <form id="resortBookingForm" class="space-y-6">
                @csrf
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold uppercase mb-2 text-gray-600">Full Name</label>
                        <input type="text" id="guest_name" required placeholder="Natasha Sehar" class="w-full bg-purple-50/50 border border-purple-100 rounded-2xl p-4 text-sm font-semibold focus:outline-none focus:ring-2 focus:ring-[#FF4081]">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase mb-2 text-gray-600">Email Address</label>
                        <input type="email" id="email" required placeholder="natasha@example.com" class="w-full bg-purple-50/50 border border-purple-100 rounded-2xl p-4 text-sm font-semibold focus:outline-none focus:ring-2 focus:ring-[#FF4081]">
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-xs font-bold uppercase mb-2 text-gray-600">Select Suite</label>
                        <select id="room_type" class="w-full bg-purple-50/50 border border-purple-100 rounded-2xl p-4 text-sm font-semibold focus:outline-none focus:ring-2 focus:ring-[#FF4081]">
                            <option value="Royal Velvet Suite">Royal Velvet Suite</option>
                            <option value="Blossom Penthouse">Blossom Penthouse</option>
                            <option value="Garden Rose Room">Garden Rose Room</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase mb-2 text-gray-600">Check-In</label>
                        <input type="date" id="check_in" required class="w-full bg-purple-50/50 border border-purple-100 rounded-2xl p-4 text-sm font-semibold focus:outline-none focus:ring-2 focus:ring-[#FF4081]">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase mb-2 text-gray-600">Check-Out</label>
                        <input type="date" id="check_out" required class="w-full bg-purple-50/50 border border-purple-100 rounded-2xl p-4 text-sm font-semibold focus:outline-none focus:ring-2 focus:ring-[#FF4081]">
                    </div>
                </div>

                <button type="submit" class="w-full gradient-pink text-white font-extrabold py-5 rounded-2xl shadow-xl hover:opacity-95 transition transform hover:-translate-y-0.5 text-base">
                    Confirm Booking & Save 25% ✨
                </button>
            </form>

            <div id="bookingAlert" class="mt-6 p-4 rounded-2xl text-center font-bold text-sm hidden"></div>
        </div>
    </section>

    <section id="reviews" class="py-20 px-6 max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <span class="text-[#FF4081] font-extrabold text-sm uppercase tracking-widest">Guest Love</span>
            <h2 class="text-4xl font-extrabold text-[#211262] mt-2">What Our Guests Say</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-3xl border border-purple-50 custom-shadow">
                <div class="text-yellow-400 text-sm mb-4">⭐⭐⭐⭐⭐</div>
                <p class="text-gray-600 text-sm italic mb-6">"The most aesthetic resort I have ever stayed at! The pink theme and ocean views were absolutely magical."</p>
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 gradient-pink rounded-full flex items-center justify-center text-white font-bold">A</div>
                    <div>
                        <h5 class="font-bold text-sm text-[#211262]">Ayesha Khan</h5>
                        <p class="text-xs text-gray-400">Stayed in Royal Velvet Suite</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-3xl border border-purple-50 custom-shadow">
                <div class="text-yellow-400 text-sm mb-4">⭐⭐⭐⭐⭐</div>
                <p class="text-gray-600 text-sm italic mb-6">"Fast booking system, immaculate room service, and the hydro spa session was out of this world!"</p>
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 gradient-purple rounded-full flex items-center justify-center text-white font-bold">S</div>
                    <div>
                        <h5 class="font-bold text-sm text-[#211262]">Sara Ahmed</h5>
                        <p class="text-xs text-gray-400">Stayed in Blossom Penthouse</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-3xl border border-purple-50 custom-shadow">
                <div class="text-yellow-400 text-sm mb-4">⭐⭐⭐⭐⭐</div>
                <p class="text-gray-600 text-sm italic mb-6">"Extremely cute design and smooth experience. Recommended to everyone looking for a luxury vacation."</p>
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 gradient-pink rounded-full flex items-center justify-center text-white font-bold">M</div>
                    <div>
                        <h5 class="font-bold text-sm text-[#211262]">Mahnoor Ali</h5>
                        <p class="text-xs text-gray-400">Stayed in Garden Rose Room</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="py-20 px-6 bg-purple-50/40">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-[#FF4081] font-extrabold text-sm uppercase tracking-widest">Questions & Answers</span>
                <h2 class="text-4xl font-extrabold text-[#211262] mt-2">Frequently Asked Questions</h2>
            </div>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-2xl border border-purple-100">
                    <h4 class="font-bold text-lg text-[#211262]">What time is Check-In and Check-Out?</h4>
                    <p class="text-gray-500 text-sm mt-2">Standard check-in is at 2:00 PM and check-out is at 11:00 AM. Early check-in is available upon request.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-purple-100">
                    <h4 class="font-bold text-lg text-[#211262]">Is breakfast included in the room price?</h4>
                    <p class="text-gray-500 text-sm mt-2">Yes, all booking packages include daily gourmet breakfast served in your suite or at our rooftop restaurant.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#211262] text-white pt-16 pb-12 px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-4 gap-8 mb-12">
            <div>
                <span class="text-2xl font-extrabold tracking-tight">Velvet<span class="text-[#FF4081]">Haven</span></span>
                <p class="text-purple-200 text-sm mt-4 leading-relaxed">Designing cute, aesthetic, and world-class luxury boutique hotel experiences.</p>
            </div>
            <div>
                <h5 class="font-bold text-sm uppercase text-purple-300 mb-4">Quick Links</h5>
                <ul class="space-y-2 text-sm text-purple-200">
                    <li><a href="#hero" class="hover:text-white">Home</a></li>
                    <li><a href="#rooms" class="hover:text-white">Suites</a></li>
                    <li><a href="#booking" class="hover:text-white">Reservation</a></li>
                </ul>
            </div>
            <div>
                <h5 class="font-bold text-sm uppercase text-purple-300 mb-4">Contact Us</h5>
                <p class="text-purple-200 text-sm">📍 Velvet Street, Beach Avenue</p>
                <p class="text-purple-200 text-sm mt-2">📞 +92 300 1234567</p>
            </div>
            <div>
                <h5 class="font-bold text-sm uppercase text-purple-300 mb-4">Newsletter</h5>
                <input type="email" placeholder="Enter your email" class="w-full bg-purple-900/50 border border-purple-700 p-3 rounded-xl text-sm mb-2 text-white">
                <button class="w-full gradient-pink font-bold py-2.5 rounded-xl text-sm">Subscribe ✨</button>
            </div>
        </div>
        <div class="text-center text-xs text-purple-400 border-t border-purple-900/60 pt-8">
            © 2026 VelvetHaven Resort. All Rights Reserved.
        </div>
    </footer>

    <script>
        function scrollToBooking() {
            document.getElementById('booking').scrollIntoView({ behavior: 'smooth' });
        }

        document.getElementById('resortBookingForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const alertBox = document.getElementById('bookingAlert');
            const payload = {
                guest_name: document.getElementById('guest_name').value,
                email: document.getElementById('email').value,
                room_type: document.getElementById('room_type').value,
                check_in: document.getElementById('check_in').value,
                check_out: document.getElementById('check_out').value,
            };

            try {
                const response = await fetch('/api/bookings', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(payload)
                });

                const data = await response.json();

                if (response.ok) {
                    alertBox.className = "mt-6 p-4 rounded-2xl text-center font-bold text-sm bg-pink-100 text-[#FF4081]";
                    alertBox.innerText = "✨ " + data.message;
                    document.getElementById('resortBookingForm').reset();
                } else {
                    alertBox.className = "mt-6 p-4 rounded-2xl text-center font-bold text-sm bg-red-100 text-red-600";
                    alertBox.innerText = "⚠️ " + (data.message || "Validation Error!");
                }
            } catch (err) {
                alertBox.className = "mt-6 p-4 rounded-2xl text-center font-bold text-sm bg-red-100 text-red-600";
                alertBox.innerText = "Error connecting to server.";
            }
            alertBox.classList.remove('hidden');
        });
    </script>
</body>
</html>