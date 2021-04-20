# Proof of Concept: extcode/cart-pick-up-only

This small extension brings a new class for payment and shipping methods to
disable them when a product cannot be shipped.
The extension overwrites the ServiceAttribute3 of the extcode/cart-products
extension and configures it as a checkbox.