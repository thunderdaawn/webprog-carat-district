<script>

// for index.php
function ready() {

    if(!(sessionStorage.getItem("albumList") === null)) {

    	var albumList = JSON.parse(sessionStorage.getItem("albumList"));

		// get the parent that will hold the data
		var cartItems = document.getElementsByClassName('cart-items')[0];

		// loop through all the items
		for(var i = 0; i < albumList.length; i++) {

			// create new elements
			var cartItem = document.createElement('div');
			cartItem.classList.add('cart-item');
			cartItem.classList.add('row');

			var cartItemContent = `<div class="col"> 
											<img class="cart-item-image" src="${albumList[i].imageKey}">
										</div>

										<div class="col title-div"> 
											<b><span class="cart-item-title">${albumList[i].titleKey}</span></b>
										</div>

										<div class="col qty-div">
											<i><span class="cart-item-quantity-input">${albumList[i].quantityKey}</span></i>x
										</div>

										<div class="col price-div"> 
											PHP <span class="cart-item-price">${albumList[i].priceKey}</span>
											<span class="cart-item-price-base">${albumList[i].basePriceKey}</span>
										</div>`;

			cartItem.innerHTML = cartItemContent;
			cartItems.append(cartItem); // adds the content inside the div
			
    	}

		updateCartTotal();
		updateCartIcon();

	}
}	


function RemoveButtonFunction() {
	var confirmation = confirm("Are you sure?");

	if(confirmation) {

		// get all the checkboxes (select-store-item)
		var checkboxes = document.getElementsByClassName('cart-item-checkbox');

		// get all the checkboxes that are marked checked and store it in a variable
		var checkedHolder = [];
		var checkedNamesHolder = [];
		var counter = 0;

		for(var i = 0; i < checkboxes.length; i++) {
			if (checkboxes[i].checked == true) {
				checkedHolder[counter] = checkboxes[i];
				counter++;
			}
		}

		// using the temporary variable, use remove function
		for(var i = 0; i < checkedHolder.length; i++) {
			checkedNamesHolder[i] = checkedHolder[i].parentElement.parentElement.getElementsByClassName('cart-item-title')[0].innerHTML;
			console.log(checkedNamesHolder[i]);
			checkedHolder[i].parentElement.parentElement.remove();
		}

		// traverse all checked
		updateStoreItems();
	}
}

function RemoveButtonFunction2() {
	var confirmation = confirm("Are you sure?");

	if(confirmation) {

		// get all the checkboxes (select-store-item)
		var checkboxes = document.getElementsByClassName('cart-item-checkbox');

		// get all the checkboxes that are marked checked and store it in a variable
		var checkedHolder = [];
		var checkedNamesHolder = [];
		var counter = 0;

		for(var i = 0; i < checkboxes.length; i++) {
			if (checkboxes[i].checked == true) {
				checkedHolder[counter] = checkboxes[i];
				counter++;
			}
		}

		// using the temporary variable, use remove function
		for(var i = 0; i < checkedHolder.length; i++) {
			checkedNamesHolder[i] = checkedHolder[i].parentElement.parentElement.getElementsByClassName('cart-item-title')[0].innerHTML;
			console.log(checkedNamesHolder[i]);
			checkedHolder[i].parentElement.parentElement.remove();
		}
	}

	updateCartTotal();
}

function updateStoreItems() {
	
		document.getElementById('select-all').checked = false;
		updateCartTotal();

}

function addToCartClicked() {

	var title = document.getElementsByClassName('store-item-name')[0].innerHTML;
	var price = document.getElementsByClassName('store-item-price')[0].innerHTML;
	var quantity = parseInt(document.getElementsByClassName('store-item-quantity-input')[0].value);
	var imageSrc = document.getElementsByClassName('store-item-image')[0].src;

	console.log(title);
	console.log(price);
	console.log(imageSrc);
	addItemToCartItems(title,price,imageSrc, quantity);
    updateCartTotal();
    alert("Item/s succesfully added to your cart");

}

function updateTotalItems() {

		// get the item quantity inputs
		var cartQuantities = document.getElementsByClassName('cart-item-quantity-input');
		var total_qty = 0;

		// loop through all the items
		for(var i = 0; i < cartQuantities.length; i++) {

			total_qty += parseInt(cartQuantities[i].value);

		}

		console.log(total_qty);
		document.getElementById('total-items').innerHTML = total_qty;
}


function addItemToCartItems(title, price, imageSrc, quantity) {
	
	// get the parent of all cart items
	var cartItems = document.getElementsByClassName('cart-items')[0];

	// check if the item is already existing to the cart items
	var cartItemsTitles = cartItems.getElementsByClassName('cart-item-title');
	
	console.log(cartItemsTitles);
	for(var i = 0; i < cartItemsTitles.length; i++) {

		if(cartItemsTitles[i].innerHTML == title) {
			var qty = parseInt(cartItems.getElementsByClassName('cart-item-quantity-input')[i].innerHTML);
			qty += quantity;
			cartItems.getElementsByClassName('cart-item-quantity-input')[i].innerHTML = qty;
			console.log(qty);
			updateCartTotal();
			updateCartIcon();
			return;
		}
	}

	// alert("Item added to cart.");

	var base = price;
	var price = base * quantity;

	// create new element
	var cartItem = document.createElement('div');
	cartItem.classList.add('cart-item');
	cartItem.classList.add('row');

	// adds the in-between values
	var cartItemContent = `<div class="col"> 
								<img class="cart-item-image" src="${imageSrc}">
							</div>

							<div class="col title-div"> 
								<b><span class="cart-item-title">${title}</span></b>
							</div>

							<div class="col qty-div">
								<i><span class="cart-item-quantity-input">${quantity}</span></i>x
							</div>

							<div class="col price-div"> 
								PHP <span class="cart-item-price">${price}</span>
								<span class="cart-item-price-base">${base}</span>
							</div>`;

	cartItem.innerHTML = cartItemContent;


	cartItems.append(cartItem); // adds the content inside the div
	updateCartIcon();
}

function updateCartIcon() {

	var quantity = document.getElementsByClassName('cart-item-quantity-input');
	var total = 0;

	for(var i = 0; i < quantity.length; i++) {
		total += parseInt(quantity[i].innerHTML);
	}

	document.getElementsByClassName('total-num-cart')[0].innerHTML = total;
}

function quantityChanged(event) {
    
    var input = event.target;

    var CartItems = input.parentElement.parentElement;
   	var basePrice = CartItems.getElementsByClassName('cart-item-price-base')[0];
    var price = parseFloat(basePrice.innerHTML);
    var value = input.value * price;

    CartItems.getElementsByClassName("cart-item-price")[0].innerHTML = value;
    
	updateTotalItems();
	updateCartTotal();

}

function updateCartTotal() {

	// get the parent
	var CartItems = document.getElementsByClassName('cart-items')[0];

	// get the children elements
	var cartItemsTitles = CartItems.getElementsByClassName('cart-item-title');
	var cartItemsQty = CartItems.getElementsByClassName('cart-item-quantity-input');
	var cartItemsPrice = CartItems.getElementsByClassName('cart-item-price');
	var total = 0;

	for(var i = 0; i < cartItemsTitles.length; i++) {
		var price = parseFloat(cartItemsPrice[i].innerHTML);
		console.log(price);
		total = total + price;
	}

	console.log(total);

	if(total != 0){
		document.getElementById('btn-edit-cart').disabled = false;
	}

	else {
		document.getElementById('btn-edit-cart').disabled = true;
	}

	document.getElementsByClassName('cart-items-total-price')[0].innerHTML = total;


}


function updateCartTotal2() {

	// get the parent
	var CartItems = document.getElementsByClassName('cart-items')[0];

	// get the children elements
	var cartItemsTitles = CartItems.getElementsByClassName('cart-item-title');
	var cartItemsQty = CartItems.getElementsByClassName('cart-item-quantity-input');
	var cartItemsPrice = CartItems.getElementsByClassName('cart-item-price');
	var total = 0;

	for(var i = 0; i < cartItemsTitles.length; i++) {
		var price = parseFloat(cartItemsPrice[i].innerHTML);
		console.log(price);
		total = total + price;
	}

	console.log(total);

	if(total == 0){
		document.getElementsByClassName('checkout-btn')[0].disabled = true;
	}

	document.getElementsByClassName('cart-items-total-price')[0].innerHTML = total;
}

function removeCartItem(event) {

	var button = event.target;
	var title = button.parentElement.parentElement.getElementsByClassName('cart-item-title')[0].innerHTML;
	button.parentElement.parentElement.remove();

	console.log(title);
	updateCartTotal();

}

function removeCartItem2(event) {

	var button = event.target;
	var title = button.parentElement.parentElement.getElementsByClassName('cart-item-title')[0].innerHTML;
	button.parentElement.parentElement.remove();

	console.log(title);
	updateTotalItems();
	updateCartTotal2();
}


function viewCartFunction() {

	if(!(sessionStorage.getItem("albumList") === null)) {
		sessionStorage.removeItem("albumList");
	}

	// Get the parent or container that holds all the cart-item (cart-items)
	var cartItems = document.getElementsByClassName('cart-items')[0];

	// Get all the cart-item inside the parent/container
	var cartItemList = cartItems.getElementsByClassName('cart-item');

	// Loop through all cart-item and get the title and price
	var albumList = [];

	for(var i = 0; i < cartItemList.length; i++) {
		var quantity = cartItemList[i].getElementsByClassName('cart-item-quantity-input')[0].innerHTML;
		var image = cartItemList[i].getElementsByClassName('cart-item-image')[0].src;
		var title = cartItemList[i].getElementsByClassName('cart-item-title')[0].innerHTML;
		var price = cartItemList[i].getElementsByClassName('cart-item-price')[0].innerHTML;
		var base = cartItemList[i].getElementsByClassName('cart-item-price-base')[0].innerHTML;
		
		albumList[i] = {quantityKey: quantity, titleKey: title, imageKey: image, priceKey: price, basePriceKey: base};
	}

	console.log(albumList);
	sessionStorage.setItem("albumList", JSON.stringify(albumList));
	window.location.href = "cart.php";
}

function checkoutFunction() {

	if(!(sessionStorage.getItem("albumList") === null)) {
		sessionStorage.removeItem("albumList");
	}

	// Get the parent or container that holds all the cart-item (cart-items)
	var cartItems = document.getElementsByClassName('cart-items')[0];

	// Get all the cart-item inside the parent/container
	var cartItemList = cartItems.getElementsByClassName('cart-item');

	// Loop through all cart-item and get the title and price
	var albumList = [];
	var total = 0;

	for(var i = 0; i < cartItemList.length; i++) {

		total += parseFloat(cartItemList[i].getElementsByClassName('cart-item-price')[0].innerHTML);

		var quantity = cartItemList[i].getElementsByClassName('cart-item-quantity-input')[0].value;
		var image = cartItemList[i].getElementsByClassName('cart-item-image')[0].src;
		var title = cartItemList[i].getElementsByClassName('cart-item-title')[0].innerHTML;
		var price = cartItemList[i].getElementsByClassName('cart-item-price')[0].innerHTML;
		var base = cartItemList[i].getElementsByClassName('cart-item-price-base')[0].innerHTML;
		
		albumList[i] = {quantityKey: quantity, titleKey: title, imageKey: image, priceKey: price, basePriceKey: base};
	}

	console.log(albumList);
	sessionStorage.setItem("albumList", JSON.stringify(albumList));
	sessionStorage.setItem("subtotalCost", total);

	window.location.href = "checkout.php";

}


function goBackFunction() {

	sessionStorage.removeItem("albumList");

	// Get the parent or container that holds all the cart-item (cart-items)
	var cartItems = document.getElementsByClassName('cart-items')[0];

	// Get all the cart-item inside the parent/container
	var cartItemList = cartItems.getElementsByClassName('cart-item');

	// Loop through all cart-item and get the title and price
	var albumList = [];

	for(var i = 0; i < cartItemList.length; i++) {
		var quantity = cartItemList[i].getElementsByClassName('cart-item-quantity-input')[0].innerHTML;
		var image = cartItemList[i].getElementsByClassName('cart-item-image')[0].src;
		var title = cartItemList[i].getElementsByClassName('cart-item-title')[0].innerHTML;
		var price = cartItemList[i].getElementsByClassName('cart-item-price')[0].innerHTML;
		var base = cartItemList[i].getElementsByClassName('cart-item-price-base')[0].innerHTML;
		
		albumList[i] = {quantityKey: quantity, titleKey: title, imageKey: image, priceKey: price, basePriceKey: base};
	}

	console.log(albumList);
	sessionStorage.setItem("albumList", JSON.stringify(albumList));
	sessionStorage.setItem("subtotalCost", document.getElementsByClassName('cart-items-total-price')[0].innerHTML);

	window.location.href = "index.php";

}

function goBackFunction2() {

	sessionStorage.removeItem("albumList");

	// Get the parent or container that holds all the cart-item (cart-items)
	var cartItems = document.getElementsByClassName('cart-items')[0];

	// Get all the cart-item inside the parent/container
	var cartItemList = cartItems.getElementsByClassName('cart-item');

	// Loop through all cart-item and get the title and price
	var albumList = [];

	for(var i = 0; i < cartItemList.length; i++) {
		var quantity = cartItemList[i].getElementsByClassName('cart-item-quantity-input')[0].value;
		var image = cartItemList[i].getElementsByClassName('cart-item-image')[0].src;
		var title = cartItemList[i].getElementsByClassName('cart-item-title')[0].innerHTML;
		var price = cartItemList[i].getElementsByClassName('cart-item-price')[0].innerHTML;
		var base = cartItemList[i].getElementsByClassName('cart-item-price-base')[0].innerHTML;
		
		albumList[i] = {quantityKey: quantity, titleKey: title, imageKey: image, priceKey: price, basePriceKey: base};
	}

	console.log(albumList);
	sessionStorage.setItem("albumList", JSON.stringify(albumList));
	sessionStorage.setItem("subtotalCost", document.getElementsByClassName('cart-items-total-price')[0].innerHTML);

	window.location.href = "index.php";

}

// for cart.php
function onloadCartPage() {

	var albumList = JSON.parse(sessionStorage.getItem("albumList"));

	// get the parent that will hold the data
	var cartItems = document.getElementsByClassName('cart-items')[0];
	var counter = 0;

	// loop through all the items
	for(var i = 0; i < albumList.length; i++) {
		
		// create new elements
		var cartItem = document.createElement('div');
			cartItem.classList.add('cart-item');
			cartItem.classList.add('row');

			var cartItemContent = `<div class="col"> 
										<img class="cart-item-image" src="${albumList[i].imageKey}" style="width:125px; height:125px;">
									</div>

									<div class="col"> 
										<b><span class="cart-item-title">${albumList[i].titleKey}</span></b>
									</div>

									<div class="col"> 
										PHP <span class="cart-item-price">${albumList[i].priceKey}</span>
										<span class="cart-item-price-base">${albumList[i].basePriceKey}</span>
									</div>

									<div class="col">
										<input class="cart-item-quantity-input" type="number" min=1 name="" value="${albumList[i].quantityKey}">
									</div>

									<div class="col">
										<button class="btn btn-danger remove-button"> Remove </button>
									</div>`;

			cartItem.innerHTML = cartItemContent;

			cartItem.getElementsByClassName('remove-button')[0].addEventListener('click', removeCartItem2);
			cartItem.getElementsByClassName('cart-item-quantity-input')[0].addEventListener('change', quantityChanged);
			cartItems.append(cartItem); // adds the content inside the div
		
	}

	updateTotalItems();
	updateCartTotal2();
}


function onchangeShipping() {

	var option = document.getElementById('shipping').value;

	if(option == "lbc") {
		document.getElementById('shipping-amount').innerHTML = 100;
	}

	else if(option == "standard") {
		document.getElementById('shipping-amount').innerHTML = 75;
	}

	else if(option == "jrs") {
		document.getElementById('shipping-amount').innerHTML = 200;
	}

	else if(option == "xpost") {
		document.getElementById('shipping-amount').innerHTML = 150;
	}

	else if(option == "j&t") {
		document.getElementById('shipping-amount').innerHTML = 180;
	}

	updateTotal();
}

function onchangePayment() {

	var option = document.getElementById('payment').value;

	if(option == "card") {
		document.getElementById('shipping-amount').innerHTML = 75;

		var paymentDiv = document.getElementsByClassName('payment-div')[0];

		var cardDetailsContent = `<span class="form-group my-2" style="display: flex; flex-direction: row; justify-content: flex-end; align-items: flex-end;  
		                               padding-top:2px; margin-right: 45px;">
									<label for="cc-num"><i>Credit/Debit Card Number:&nbsp;&nbsp;</i></label>
									<input type="number" name="cc-num" class="form-control col-5 cc-num" placeholder="Card Number" required>
								  </span>

								  <span class="form-group my-2" style="display: flex; flex-direction: row; justify-content: flex-end; align-items: flex-end; margin-right: 45px;">
								  	<label for="cc-expiry"><i>Credit/Debit Card Expiry:&nbsp;&nbsp;</i></label>
									<input type="date" name="cc-expiry" class="col-5 form-control cc-expiry" required>
								  </span>

								  <span class="form-group my-2" style="display: flex; flex-direction: row; justify-content: flex-end; align-items: flex-end; margin-right: 45px;">
								  	<label for="cc-cvv"><i>Credit/Debit Card CVV:&nbsp;&nbsp;</i></label>
									<input type="number" name="cc-cvv" class="form-control col-5 cc-cvv" placeholder="CVV" required>
								  </span>`;

		paymentDiv.innerHTML = cardDetailsContent;
		
	}

	else if(option == "cod") {
		document.getElementById('shipping-amount').innerHTML = 75;

		var paymentDiv = document.getElementsByClassName('payment-div')[0];

		var cardDetailsContent = ` `;

		paymentDiv.innerHTML = cardDetailsContent;
		
	}

}



function updateTotal() {

	var shipping = parseFloat(document.getElementById('shipping-amount').innerHTML);
	var subtotal = parseFloat(document.getElementById('subtotal-amount').innerHTML);

	console.log(shipping);
	console.log(subtotal);

	var total = subtotal + shipping;
	console.log();
	document.getElementById('total-amount').innerHTML = total;
}

// for checkout.php
function onloadCheckout() {

	var albumList = JSON.parse(sessionStorage.getItem("albumList"));

	// get the parent that will hold the data
	var cartItems = document.getElementsByClassName('cart-items')[0];
	var counter = 0;

	// loop through all the items
	for(var i = 0; i < albumList.length; i++) {
		
		// create new elements
		var cartItem = document.createElement('div');
			cartItem.classList.add('row');
			cartItem.classList.add('cart-item');

			var cartItemContent = `<div class="col"> 
											<img class="cart-item-image" src="${albumList[i].imageKey}">
										</div>

										<div class="col"> 
											<b><span class="cart-item-title">${albumList[i].titleKey}</span></b>
										</div>

										<div class="col">
											<i><span class="cart-item-quantity-input">${albumList[i].quantityKey}</span></i>x
										</div>

										<div class="col"> 
											PHP <span class="cart-item-price">${albumList[i].priceKey}</span>
											<span class="cart-item-price-base">${albumList[i].basePriceKey}</span>
										</div>`;

			cartItem.innerHTML = cartItemContent;
			cartItems.append(cartItem); // adds the content inside the div
		
	}

	document.getElementById('subtotal-amount').innerHTML = sessionStorage.getItem("subtotalCost");
	document.getElementById('total-amount').innerHTML = sessionStorage.getItem("subtotalCost");
	document.getElementById('shipping-amount').innerHTML = 75;
}

// for confirm-checkout.php
function onloadConfirmCheckout() {

	var result = new URLSearchParams(window.location.search);

	 var  address = document.getElementById('address-holder').innerHTML = result.get('address');
	var courierChosen = result.get('shipping');
	var paymentModeChosen = result.get('payment');

	if (paymentModeChosen = "cod") {
		document.getElementById('payment-holder').innerHTML = "Cash On Delivery";
	}

	else if (paymentModeChosen = "card") {
		document.getElementById('payment-holder').innerHTML = "Credit or Debit Card";
	}

	if(courierChosen == "lbc"){
		document.getElementById('shipping-holder').innerHTML = "LBC Express - Next Day Delivery";
		document.getElementById('shipping-amount').innerHTML = 100;
	}

	else if(courierChosen == "jrs"){
		document.getElementById('shipping-holder').innerHTML = "JRS Express - Delivery within 3-5 Days";
		document.getElementById('shipping-amount').innerHTML = 200;
	}

	else if(courierChosen == "xpost"){
		document.getElementById('shipping-holder').innerHTML = "XPost Integrated - Next Day Delivery";
		document.getElementById('shipping-amount').innerHTML = 150;
	}

	else if(courierChosen == "j&t"){
		document.getElementById('shipping-holder').innerHTML = "J&T Express - Delivery within 3-5 Days";
		document.getElementById('shipping-amount').innerHTML = 180;
	}

	else if(courierChosen == "standard"){
		document.getElementById('shipping-holder').innerHTML = "Standard Free Delivery - Delivery within 8-10 Days";
		document.getElementById('shipping-amount').innerHTML = 75;
	}


	var albumList = JSON.parse(sessionStorage.getItem("albumList"));

	// get the parent that will hold the data
	var cartItems = document.getElementsByClassName('cart-items')[0];
	var counter = 0;

	// loop through all the items
	for(var i = 0; i < albumList.length; i++) {

		var quantity = parseInt(albumList[i].quantityKey)
		counter += quantity;
		var price = parseFloat(albumList[i].priceKey);
		
		// create new elements
		var cartItem = document.createElement('div');
		cartItem.classList.add('row');
		cartItem.classList.add('cart-item');

		if(quantity > 1) {

			var cartItemContent = `<div class="col"> 
											<img class="cart-item-image" src="${albumList[i].imageKey}">
										</div>

										<div class="col"> 
											<b><span class="cart-item-title">${albumList[i].titleKey}</span></b>
										</div>

										<div class="col">
											<i><span class="cart-item-quantity-input">${albumList[i].quantityKey}</span></i>x
										</div>

										<div class="col"> 
											PHP <span class="cart-item-price">${albumList[i].priceKey}</span>
											<br><i><span style="font-size: 14px;">(PHP ${albumList[i].basePriceKey}/ea)</span></i>
											<span class="cart-item-price-base">${albumList[i].basePriceKey}</span>
										</div>`;
		}

		else {
			
			var cartItemContent = `<div class="col"> 
											<img class="cart-item-image" src="${albumList[i].imageKey}">
										</div>

										<div class="col"> 
											<b><span class="cart-item-title">${albumList[i].titleKey}</span></b>
										</div>

										<div class="col">
											<i><span class="cart-item-quantity-input">${albumList[i].quantityKey}</span></i>x
										</div>

										<div class="col"> 
											PHP <span class="cart-item-price">${albumList[i].priceKey}</span>
											<span class="cart-item-price-base">${albumList[i].basePriceKey}</span>
										</div>`;
		
		}

		

		cartItem.innerHTML = cartItemContent;
		cartItems.append(cartItem); // adds the content inside the div
	}

	document.getElementById('total-items').innerHTML = counter;
	document.getElementById('subtotal-amount').innerHTML = sessionStorage.getItem("subtotalCost");
	updateTotal();
}

function confirmOrder() {

	sessionStorage.removeItem("subtotalCost");
	sessionStorage.removeItem("albumList");

	window.location.href = "order-success.php";

}

function logoutFunction() {
      sessionStorage.clear();
}





</script>