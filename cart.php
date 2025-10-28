<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Fashion Cart</title>
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
                    <a href="index.php" class="hover:text-gray-600">Home</a>
                    <a href="shop.php" class="hover:text-gray-600">Shop</a>
                    <a href="about.php" class="hover:text-gray-600">About</a>
                    <a href="contact.php" class="hover:text-gray-600">Contact</a>
                </div>
                <a href="cart.php" class="relative p-2 hover:bg-gray-100 rounded">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span class="absolute -top-1 -right-1 bg-black text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">2</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <a href="shop.php" class="inline-flex items-center text-gray-600 hover:text-black mb-8">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Continue Shopping
            </a>

            <h1 class="mb-8">Shopping Cart (2 items)</h1>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Cart Items -->
                <div class="lg:col-span-2 space-y-4">
                    <!-- Item 1 -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="flex gap-6">
                            <img src="https://images.unsplash.com/photo-1651840760882-e5209bba5815?w=200" alt="Classic White T-Shirt" class="w-24 h-24 object-cover rounded">
                            <div class="flex-1">
                                <h3 class="text-lg mb-2">Classic White T-Shirt</h3>
                                <p class="text-gray-600 mb-2">Size: M | Color: White</p>
                                <p class="font-semibold mb-4">$29.99</p>
                                
                                <div class="flex items-center gap-4">
                                    <div class="flex items-center gap-2">
                                        <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100">-</button>
                                        <span class="w-8 text-center">1</span>
                                        <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100">+</button>
                                    </div>
                                    <button class="text-red-600 hover:text-red-700 flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                        Remove
                                    </button>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-semibold">$29.99</p>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="flex gap-6">
                            <img src="https://images.unsplash.com/photo-1543076447-215ad9ba6923?w=200" alt="Denim Jacket" class="w-24 h-24 object-cover rounded">
                            <div class="flex-1">
                                <h3 class="text-lg mb-2">Denim Jacket</h3>
                                <p class="text-gray-600 mb-2">Size: L | Color: Light Blue</p>
                                <p class="font-semibold mb-4">$89.99</p>
                                
                                <div class="flex items-center gap-4">
                                    <div class="flex items-center gap-2">
                                        <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100">-</button>
                                        <span class="w-8 text-center">1</span>
                                        <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100">+</button>
                                    </div>
                                    <button class="text-red-600 hover:text-red-700 flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                        Remove
                                    </button>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-semibold">$89.99</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div>
                    <div class="bg-white p-6 rounded-lg shadow sticky top-20">
                        <h2 class="text-xl mb-6">Order Summary</h2>
                        
                        <div class="space-y-3 mb-6">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Subtotal</span>
                                <span class="font-semibold">$119.98</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Shipping</span>
                                <span class="font-semibold">FREE</span>
                            </div>
                            <div class="border-t pt-3 flex justify-between">
                                <span class="font-semibold">Total</span>
                                <span class="font-semibold text-xl">$119.98</span>
                            </div>
                        </div>

                        <a href="checkout.php" class="block w-full bg-black text-white text-center py-3 rounded font-semibold hover:bg-gray-800 transition mb-4">
                            Proceed to Checkout
                        </a>

                        <div class="text-sm text-gray-600 space-y-2">
                            <p>✓ Secure Checkout</p>
                            <p>✓ 30-Day Return Policy</p>
                            <p>✓ Customer Support Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Fashion Cart</h3>
                    <p class="text-gray-400 mb-4">Your trusted destination for quality fashion.</p>
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
                        <li><a href="mailto:support@fashioncart.com">support@fashioncart.com</a></li>
                        <li>+1 (234) 567-890</li>
                        <li>123 Fashion Street, NY 10001</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Fashion Cart. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
