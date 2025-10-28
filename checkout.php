<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Checkout - Fashion Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; }
        h1 { font-size: 3rem; font-weight: 700; line-height: 1.2; }
        h2 { font-size: 2rem; font-weight: 600; line-height: 1.3; }
        h3 { font-size: 1.5rem; font-weight: 600; line-height: 1.4; }
        p { font-size: 1rem; line-height: 1.6; }
        input, select, textarea { width: 100%; padding: 0.5rem; border: 1px solid #d1d5db; border-radius: 0.375rem; }
        label { display: block; margin-bottom: 0.5rem; font-weight: 500; }
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
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <a href="cart.php" class="inline-flex items-center text-gray-600 hover:text-black mb-8">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to Cart
            </a>

            <div class="flex items-center gap-2 mb-8">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
                <h1>Secure Checkout</h1>
            </div>

            <form action="index.php">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Checkout Form -->
                    <div class="lg:col-span-2 space-y-6">
                        <!-- Contact Information -->
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h2 class="text-xl mb-6">Contact Information</h2>
                            <div class="space-y-4">
                                <div>
                                    <label for="email">Email Address *</label>
                                    <input id="email" type="email" required placeholder="you@example.com">
                                </div>
                                <div>
                                    <label for="phone">Phone Number *</label>
                                    <input id="phone" type="tel" required placeholder="+1 (234) 567-890">
                                </div>
                            </div>
                        </div>

                        <!-- Shipping Address -->
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h2 class="text-xl mb-6">Shipping Address</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="firstName">First Name *</label>
                                    <input id="firstName" required>
                                </div>
                                <div>
                                    <label for="lastName">Last Name *</label>
                                    <input id="lastName" required>
                                </div>
                                <div class="md:col-span-2">
                                    <label for="address">Street Address *</label>
                                    <input id="address" required>
                                </div>
                                <div>
                                    <label for="city">City *</label>
                                    <input id="city" required>
                                </div>
                                <div>
                                    <label for="state">State *</label>
                                    <input id="state" required>
                                </div>
                                <div>
                                    <label for="zip">ZIP Code *</label>
                                    <input id="zip" required>
                                </div>
                                <div>
                                    <label for="country">Country *</label>
                                    <input id="country" value="United States" required>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Method -->
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h2 class="text-xl mb-6">Payment Method</h2>
                            
                            <div class="mb-6">
                                <label class="flex items-center mb-2">
                                    <input type="radio" name="payment" value="credit-card" checked class="mr-2 w-auto">
                                    Credit/Debit Card
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="payment" value="paypal" class="mr-2 w-auto">
                                    PayPal
                                </label>
                            </div>

                            <div class="space-y-4 pt-4 border-t">
                                <div>
                                    <label for="cardNumber">Card Number *</label>
                                    <input id="cardNumber" placeholder="1234 5678 9012 3456" required>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="expiry">Expiry Date *</label>
                                        <input id="expiry" placeholder="MM/YY" required>
                                    </div>
                                    <div>
                                        <label for="cvv">CVV *</label>
                                        <input id="cvv" placeholder="123" required>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600 flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                    Your payment information is encrypted and secure
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Order Summary -->
                    <div>
                        <div class="bg-white p-6 rounded-lg shadow sticky top-20">
                            <h2 class="text-xl mb-6">Order Summary</h2>
                            
                            <div class="space-y-4 mb-6">
                                <div class="flex gap-4">
                                    <img src="https://images.unsplash.com/photo-1651840760882-e5209bba5815?w=100" alt="Classic White T-Shirt" class="w-16 h-16 object-cover rounded">
                                    <div class="flex-1">
                                        <p class="mb-1">Classic White T-Shirt</p>
                                        <p class="text-sm text-gray-600">Qty: 1 | M | White</p>
                                        <p class="font-semibold">$29.99</p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <img src="https://images.unsplash.com/photo-1543076447-215ad9ba6923?w=100" alt="Denim Jacket" class="w-16 h-16 object-cover rounded">
                                    <div class="flex-1">
                                        <p class="mb-1">Denim Jacket</p>
                                        <p class="text-sm text-gray-600">Qty: 1 | L | Light Blue</p>
                                        <p class="font-semibold">$89.99</p>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-3 mb-6 border-t pt-4">
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

                            <button type="submit" class="w-full bg-black text-white py-3 rounded font-semibold hover:bg-gray-800 transition flex items-center justify-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                                Place Order
                            </button>

                            <div class="mt-4 text-sm text-gray-600 space-y-1">
                                <p>✓ 256-bit SSL Encryption</p>
                                <p>✓ PCI DSS Compliant</p>
                                <p>✓ 30-Day Money Back Guarantee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
